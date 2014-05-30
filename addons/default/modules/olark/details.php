<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Olark Module
 *
 * @package		PyroCMS
 * @subpackage	Olark
 * @author		Adam Sturrock
 * @link 		http://www.adamsturrock.co.uk/
 */ 

class Module_Olark extends Module {

	public $version = '1.1.0';

 	// --------------------------------------------------------------------------

	public function __construct()
	{	
		parent::__construct();
	}

	// --------------------------------------------------------------------------
	
 	public function info()
	{
		return array(
		    'name' => array(
		        'en' => 'Olark'
		    ),
		    'description' => array(
		        'en' => 'Olark Live Chat. Signup for a free account at <a target="_blank" href="https://www.olark.com/?r=4eqdhi13">www.olark.com</a>'
		    ),
		    'frontend' => false,
			'backend' => false,
			'author' => 'Adam Sturrock'
		);
	}

	// --------------------------------------------------------------------------

	public function install()
	{
		$this->settings('add');
		return TRUE;
	}

	// --------------------------------------------------------------------------

	public function uninstall()
	{
		$this->settings('remove');
		return TRUE;
	}

	public function settings($action, $add = array())
	{
	
		// Variables
		$return     = TRUE;
		$settings   = array();
		
		// Settings
		$settings[] = array('slug' => 'olark_id_front', 'title' => 'Olark Site ID (front)', 'description' => 'Fill this in to enable olark live chat on front pages. Your ID can be found on <a target="_blank" href="https://www.olark.com/?r=4eqdhi13">www.olark.com</a>. Once you have signed up for an account, your ID is provided in the install instructions.', 'default' => '', 'value' => '', 'type' => 'text', 'options' => '', 'is_required' => 0, 'is_gui' => 1, 'module' => 'olark', 'order' => 904);
		$settings[] = array('slug' => 'olark_id_admin', 'title' => 'Olark Site ID (admin)', 'description' => 'Fill this in to enable olark live chat on admin pages. Your ID can be found on <a target="_blank" href="https://www.olark.com/?r=4eqdhi13">www.olark.com</a>. Once you have signed up for an account, your ID is provided in the install instructions.', 'default' => '', 'value' => '', 'type' => 'text', 'options' => '', 'is_required' => 0, 'is_gui' => 1, 'module' => 'olark', 'order' => 903);

		// check for additional module settings
		$this->load->model('module_m');

		// check if firesale is installed
		$firesale_installed = $this->module_m->installed("firesale");
		if ($firesale_installed) {
			// FireSale integration settings
			$settings[] = array('slug' => 'olark_fs_cart_add', 'title' => 'Product Added Notification', 'description' => 'Notify operator when a product is added to the cart', 'default' => '0', 'value' => '0', 'type' => 'select', 'options' => '1=Yes|0=No', 'is_required' => 1, 'is_gui' => 1, 'module' => 'olark', 'order' => 902);
			$settings[] = array('slug' => 'olark_fs_cart_remove', 'title' => 'Product Removed Notification', 'description' => 'Notify operator when a product is removed from the cart', 'default' => '0', 'value' => '0', 'type' => 'select', 'options' => '1=Yes|0=No', 'is_required' => 1, 'is_gui' => 1, 'module' => 'olark', 'order' => 899);
			$settings[] = array('slug' => 'olark_fs_big_customer', 'title' => 'Important Customer', 'description' => 'Notify operator when a customer has a minimum cart value of the amount specified here', 'default' => '', 'value' => '', 'type' => 'text', 'options' => '', 'is_required' => 0, 'is_gui' => 1, 'module' => 'olark', 'order' => 890);
			$settings[] = array('slug' => 'olark_fs_co_start', 'title' => 'Customer at Checkout', 'description' => 'Notify operator when a customer has begun the checkout process.', 'default' => '0', 'value' => '0', 'type' => 'select', 'options' => '1=Yes|0=No', 'is_required' => 0, 'is_gui' => 1, 'module' => 'olark', 'order' => 896);
			$settings[] = array('slug' => 'olark_fs_co_success', 'title' => 'Customer Checkout Success', 'description' => 'Notify operator when a customer has successfully checked out.', 'default' => '0', 'value' => '0', 'type' => 'select', 'options' => '1=Yes|0=No', 'is_required' => 1, 'is_gui' => 1, 'module' => 'olark', 'order' => 893);
		}

		// check if firesale discount codes is installed
		$discounts_installed = $this->module_m->installed("firesale_discount_codes");
		if (isset($module['name']) && ! empty($module['name']) && $module['enabled'] == "1") {
			// FireSale Discount Codes integration settings
			$settings[] = array('slug' => 'olark_fs_discount_used', 'title' => 'Discount Code Applied Notification', 'description' => 'Notify operator when a discount code is applied to the cart.', 'default' => '0', 'value' => '0', 'type' => 'select', 'options' => '1=Yes|0=No', 'is_required' => 0, 'is_gui' => 1, 'module' => 'olark', 'order' => 889);
		}

		// Perform
		foreach( $settings as $setting )
		{

			if( $action == 'add' )
			{
				if( ( !empty($add) AND in_array($setting['slug'], $add) ) OR empty($add) )
				{
					if( !$this->db->insert('settings', $setting) )
					{
						$return = FALSE;
					}
				}
			}
			else
			{
				if( !$this->db->delete('settings', array('slug' => $setting['slug'])) )
				{
					$return = FALSE;
				}
			}

		}
		
		return $return;	
	}

	// --------------------------------------------------------------------------

	public function upgrade($old_version)
	{
		return TRUE;
	}

	// --------------------------------------------------------------------------

	public function help()
	{
		return "No documentation has been added for this module.<br/>Contact the module developer for assistance.";
	}

}