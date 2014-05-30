<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Events_Olark
{

/**
 * Olark Module
 *
 * @package     PyroCMS
 * @subpackage  Olark
 * @author      Adam Sturrock
 * @link        http://www.adamsturrock.co.uk/
 */ 

    protected $ci;

    // FireSale/Olark integration
    private $firesale_installed = false;
    private $firesale_discounts_installed = false;

    public function __construct()
    {
        $this->ci =& get_instance();

        // Load models
        $this->ci->load->model('olark/olark_m');
        $this->ci->load->model('module_m');

        // Get addon path
        $dir = ADDONPATH.'/modules/';
        if ( file_exists(SHARED_ADDONPATH.'modules/olark/details.php') )
        {
            $dir = SHARED_ADDONPATH.'modules/';
        }
        Asset::add_path('olark', $dir . 'olark/');

        // Check for firesale install
        $this->firesale_installed = $this->ci->module_m->installed('firesale');
        if ($this->firesale_installed)
        {

            // Load firesale models
            $this->ci->load->model('firesale/routes_m');
            $this->ci->load->model('firesale/taxes_m');
            $this->ci->load->model('firesale/currency_m');
            $this->ci->load->library('firesale/fs_cart');

            // Cart items added/removed
            Events::register('cart_item_added', array($this, 'olark_item_added'));
            Events::register('cart_item_removed', array($this, 'olark_item_removed'));

            // Detect when user begins checkout process
            $checkout_url = $this->ci->routes_m->build_url('cart').'/checkout';
            if ($checkout_url == $this->ci->uri->uri_string) {
                $this->ci->session->set_userdata("olark_checkout_started", true);
            }

            // Detect on checkout success
            Events::register('order_complete', array($this, 'olark_checkout_success'));
        }

        // Check for firesale discount codes installed
        $this->firesale_discounts_installed = $this->ci->module_m->installed('firesale_discount_codes');       
        if ($this->firesale_discounts_installed)
        {
            // Register firesale discount code events
            Events::register('discount_applied', array($this, 'olark_discount_applied'));
        }

        // Register login and logout events
        Events::register('post_user_login',   array($this, 'login'));
        Events::register('pre_user_logout',   array($this, 'logout'));
        Events::register('post_admin_login',  array($this, 'login'));
        Events::register('post_admin_logout', array($this, 'logout'));

        // Register the front and backend events
        Events::register('public_controller', array($this, 'olark_front'));
        Events::register('admin_controller',  array($this, 'olark_admin'));
        
        // Register firesale & firesale discount code install/uninstall events (so we can add and remove settings)
        Events::register('module_enabled',    array($this, 'module_installed'));    
        Events::register('module_disabled',   array($this, 'module_uninstalled'));    

    }

    public function olark_front()
    {
        // Enable olark on the frontend with Olark Front ID from settings
        $this->enable_olark(trim($this->ci->settings->get('olark_id_front')));
    }
    public function olark_admin()
    {
        // Enable olark on the admin panel with Olark Admin ID from settings
        $this->enable_olark(trim($this->ci->settings->get('olark_id_admin')));
    }

    private function enable_olark($olark_id)
    {
        // If Olark ID is set (from settings)
        if (isset($olark_id) && ! empty($olark_id))
        {
            // Get addon path           
            $dir = ADDONPATH.'/modules/';
            if ( file_exists(SHARED_ADDONPATH.'modules/olark/details.php') )
            {
                $dir = SHARED_ADDONPATH.'modules/';
            }
            Asset::add_path('olark', $dir . 'olark/');

            // Append olark js
            $this->ci->template->append_js("olark::olark.js");
            // Initialise the olark live chat window
            $this->ci->template->append_metadata("<script>$(function(){olark.identify('".$olark_id."');});</script>");

            // Send over pyro user data to olark

            // If user is logged in
            if (isset($this->ci->current_user->id) && ! empty($this->ci->current_user->id))
            {
                // If using first name and last name
                if (isset($this->ci->current_user->first_name) && ! empty($this->ci->current_user->first_name) && isset($this->ci->current_user->last_name) && ! empty($this->ci->current_user->last_name))
                {
                    // name to pass over will be first name + last name
                    $name = $this->ci->current_user->first_name . " " . $this->ci->current_user->last_name;
                }
                else if (isset($this->ci->current_user->username) && ! empty($this->ci->current_user->username))
                {
                    // Else just use username
                    $name = $this->ci->current_user->username;
                    // Set nickname to their username
                    $this->ci->template->append_metadata("<script>$(function(){ olark('api.chat.updateVisitorNickname', { snippet: '".$this->ci->current_user->username."' }); });</script>");
                }

                // If name exists and FireSale is not installed
                if (isset($name) && ! empty($name) && ! $this->firesale_installed )
                {
                    $this->ci->template->append_metadata("<script>$(function(){ olark('api.visitor.updateFullName', { fullName: '".$name."' }); });</script>");
                }

                // If user email is set and not empty
                if (isset($this->ci->current_user->email) && ! empty($this->ci->current_user->email) ) {
                    // Send user email to Olark
                    $this->ci->template->append_metadata("<script>$(function(){ olark('api.visitor.updateEmailAddress', { emailAddress: '".$this->ci->current_user->email."' }); });</script>");
                }

                // If user phone is set and not empty
                if (isset($this->ci->current_user->phone) && ! empty($this->ci->current_user->phone) )
                {
                    // Send user phone to Olark
                    $this->ci->template->append_metadata("<script>$(function(){ olark('api.visitor.updatePhoneNumber', { phoneNumber: '".$this->ci->current_user->phone."' }); });</script>");
                }
            }
            else
            {
                // Else user is not logged in so anon "visitor"
                $name = "Visitor";
            }

            // Send over FireSale data to Olark if FireSale is installed
            if ($this->firesale_installed)
            {

                // Get currency
                $currency = $this->ci->currency_m->get(( $this->ci->session->userdata('currency') ? $this->ci->session->userdata('currency') : 1 ));

                // Get cart total and number of items
                $cart_total = $this->ci->fs_cart->total();
                $cart_items = $this->ci->fs_cart->total_items();

                // Build cart contents
                $cart_contents = "";
                if ($this->ci->fs_cart->contents())
                {
                    foreach ($this->ci->fs_cart->contents() as $item)
                    {
                        $cart_contents .= "'".$item['name']." x ".$item['qty']." "."Unit Price: ".$this->ci->currency_m->format_string($item['price'], $currency)."',";
                    }
                    $cart_contents = trim($cart_contents, ",");
                    // If empty cart
                    if ($cart_contents == "")
                    {
                        // Send empty string to Olark
                        $cart_contents = "''";
                    }
                }
                else
                {
                    // Send empty string to Olark
                    $cart_contents = "''";
                }

                // Operator event notifications

                // Send item added notification to olark when an item is added to a visitors cart
                if ($this->ci->session->userdata('olark_item_added') && $this->ci->settings->get('olark_fs_cart_add'))
                {
                    $product = $this->ci->session->userdata("just_added");
                    $this->ci->session->unset_userdata("olark_item_added");
                    $this->ci->session->unset_userdata("just_added");
                    $this->ci->template->append_metadata("<script>$(function(){ olark('api.chat.sendNotificationToOperator', {body: '".$name." has added \'".$product['title']."\' (Code: ".$product['code']." Price: ".$product['price_formatted'].") to their cart'}); });</script>");
                }

                // Send item removed notification to olark when an item is removed from a visitors cart
                if ($this->ci->session->userdata('olark_item_removed') && $this->ci->settings->get('olark_fs_cart_remove'))
                {
                    $product = $this->ci->session->userdata("just_removed");
                    $this->ci->session->unset_userdata('olark_item_removed');
                    $this->ci->session->unset_userdata('just_removed');
                    $this->ci->template->append_metadata("<script>$(function(){ olark('api.chat.sendNotificationToOperator', {body: '".$name." has removed \'".$product['title']."\' (Code: ".$product['code']." Price: ".$product['price_formatted'].") from their cart'}); });</script>");                   
                }

                // Send checkout started notification to Olark when a visitor arrives at checkout page
                if ($this->ci->session->userdata('olark_checkout_started') && $this->ci->settings->get('olark_fs_co_start'))
                {
                    $this->ci->session->unset_userdata('olark_checkout_started');
                    $this->ci->template->append_metadata("<script>$(function(){ olark('api.chat.sendNotificationToOperator', {body: '".$name." has begun the checkout process'}); });</script>");                    
                }

                // Send checkout success notification to Olark when a visitor returns from a merchant successfully
                if ($this->ci->session->userdata('olark_checkout_success') && $this->ci->settings->get('olark_fs_co_success'))
                {
                    $this->ci->session->unset_userdata('olark_checkout_success');
                    $this->ci->template->append_metadata("<script>$(function(){ olark('api.chat.sendNotificationToOperator', {body: '".$name." has completed the checkout process'}); });</script>");                    
                }

                // Send important customer notification to Olark.
                if ($this->ci->settings->get('olark_fs_big_customer'))
                {
                    // If customers cart total is over the minimum threshold.
                    if ($cart_total > $this->ci->settings->get('olark_fs_big_customer'))
                    {
                        // If notification has not already been sent to Olark
                        if ( $this->ci->session->userdata('olark_fs_big_customer_alerted') != 1 )
                        {
                            // Only notify olark once so set alerted in this visitors session
                            $this->ci->session->set_userdata("olark_fs_big_customer_alerted", true);

                            // Send notification to Olark                        
                            $this->ci->template->append_metadata("<script>$(function(){ olark('api.chat.sendNotificationToOperator', {body: 'This user is placing a large order over ".$this->ci->currency_m->format_string($this->ci->settings->get('olark_fs_big_customer'), $currency).". Cart total of ".$this->ci->currency_m->format_string($cart_total, $currency)."'}); });</script>");                     
                        }
                    }
                }
                
                // Set user name to name & items
                $this->ci->template->append_metadata("<script>$(function(){ olark('api.visitor.updateFullName', { fullName: '".$name." - Cart Value: ".$this->ci->currency_m->format_string($cart_total, $currency)."' }); });</script>");
                
                // Set user snippet to number of items in cart and total
                $this->ci->template->append_metadata("<script>$(function(){ olark('api.chat.updateVisitorStatus', { snippet: ['Cart - items: ".$cart_items." total: ".$this->ci->currency_m->format_string($cart_total, $currency)."', ".$cart_contents."] }); });</script>");                
            }

            // If FireSale Discount Codes is installed
            if ($this->firesale_discounts_installed)
            {
                // If discount was applied
                if ($this->ci->session->userdata('olark_discount_applied'))
                {
                    // Send notification to Olark that a discount code was applied
                    $this->ci->session->unset_userdata('olark_discount_applied');
                    $this->ci->template->append_metadata("<script>$(function(){ olark('api.chat.sendNotificationToOperator', {body: 'visitor has applied a discount code'}); });</script>");                    
                }
            }

        }
    }

    // Login Event
    public function login()
    {
        $this->ci->template->append_metadata("<script>$(function(){ olark('api.chat.sendNotificationToOperator', {body: 'visitor has logged in'}); });</script>");          
    }   

    // Logout Event
    public function logout()
    {
        $this->ci->template->append_metadata("<script>$(function(){ olark('api.chat.sendNotificationToOperator', {body: 'visitor has logged out'}); });</script>");          
    }   

    // Olark Item Added Session Data
    public function olark_item_added($product)
    {
        $this->ci->session->set_userdata("olark_item_added", true);
        $this->ci->session->set_userdata("just_added", $product);
    }

    // Olark Item Removed Session Data
    public function olark_item_removed($product)
    {
        $this->ci->session->set_userdata("olark_item_removed", true);
        $this->ci->session->set_userdata("just_removed", $product);
    }

    // Olark Checkout Success Event
    public function olark_checkout_success()
    {
        $this->ci->session->set_userdata("olark_checkout_success", true);
    }

    // Olark Discount Applied Event
    public function olark_discount_applied()
    {
        $this->ci->session->set_userdata("olark_discount_applied", true);
    }

    // Add Settings Event
    public function module_installed($module)
    {
        if ($module == "firesale") {
            $this->ci->olark_m->firesale_settings('add');
        }
        else if ($module == "firesale_discount_codes")
        {
            $this->ci->olark_m->firesale_discount_settings('add');
        }
    }

    // Remove Settings Event
    public function module_uninstalled($module)
    {
        if ($module == "firesale") {
            $this->ci->olark_m->firesale_settings('remove');
        }
        else if ($module == "firesale_discount_codes")
        {
            $this->ci->olark_m->firesale_discount_settings('remove');
        }
    }

}