<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Olark_m extends MY_Model
{

	public function firesale_settings($action, $add = array())
	{
	
		// Variables
		$return     = TRUE;
		$settings   = array();
		
		// FireSale integration settings
		$settings[] = array('slug' => 'olark_fs_cart_add', 'title' => 'Product Added Notification', 'description' => 'Notify operator when a product is added to the cart', 'default' => '0', 'value' => '0', 'type' => 'select', 'options' => '1=Yes|0=No', 'is_required' => 1, 'is_gui' => 1, 'module' => 'olark', 'order' => 902);
		$settings[] = array('slug' => 'olark_fs_cart_remove', 'title' => 'Product Removed Notification', 'description' => 'Notify operator when a product is removed from the cart', 'default' => '0', 'value' => '0', 'type' => 'select', 'options' => '1=Yes|0=No', 'is_required' => 1, 'is_gui' => 1, 'module' => 'olark', 'order' => 899);
		$settings[] = array('slug' => 'olark_fs_big_customer', 'title' => 'Important Customer', 'description' => 'Notify operator when a customer has a minimum cart value of the amount specified here', 'default' => '', 'value' => '', 'type' => 'text', 'options' => '', 'is_required' => 0, 'is_gui' => 1, 'module' => 'olark', 'order' => 890);
		$settings[] = array('slug' => 'olark_fs_co_start', 'title' => 'Customer at Checkout', 'description' => 'Notify operator when a customer has begun the checkout process.', 'default' => '0', 'value' => '0', 'type' => 'select', 'options' => '1=Yes|0=No', 'is_required' => 0, 'is_gui' => 1, 'module' => 'olark', 'order' => 896);
		$settings[] = array('slug' => 'olark_fs_co_success', 'title' => 'Customer Checkout Success', 'description' => 'Notify operator when a customer has successfully checked out.', 'default' => '0', 'value' => '0', 'type' => 'select', 'options' => '1=Yes|0=No', 'is_required' => 1, 'is_gui' => 1, 'module' => 'olark', 'order' => 893);

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

	public function firesale_discount_settings($action, $add = array())
	{
	
		// Variables
		$return     = TRUE;
		$settings   = array();
		
		// FireSale Discount codes integration
		$settings[] = array('slug' => 'olark_fs_discount_used', 'title' => 'Discount Code Applied Notification', 'description' => 'Notify operator when a discount code is applied to the cart.', 'default' => '0', 'value' => '0', 'type' => 'select', 'options' => '1=Yes|0=No', 'is_required' => 0, 'is_gui' => 1, 'module' => 'olark', 'order' => 889);

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

}