<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Social Plugin
 *
 * Create lists of posts
 *
 * @package		PyroCMS
 * @author		PyroCMS Dev Team
 * @copyright	Copyright (c) 2008 - 2011, PyroCMS
 *
 */
class Plugin_Social extends Plugin
{

    private $_facebook_config = array();

    public function __construct()
    {
        $this->_facebook_config = array(
            'appId'  => '564098387021631',
            'secret' => '552c5b94f92e1b6464c4098ad77e228c',
            'cookie' => TRUE, /* Optional */
            'oath'   => TRUE /* Optional */
        );
    }

    /**
     * Provider List
     *
     * Creates a list of social network providers (twitter, facebook, etc)
     *
     * Usage:
     * {{ social:providers }}
     * 		<h2>{{ name }}</h2>
     * 		<p>{{ theme:image_path }}</p>
     * {{ /social:providers }}
     *
     * @param	array
     * @return	array
     */
    public function providers()
    {


        $this->load->model('social/credential_m');
        return $this->credential_m->get_active_providers();
    }

    public function login()
    {
        
    }

    public function get_logged_in_user()
    {
        $this->load->spark('facebook-sdk/0.0.1');
        //$this->load->library('social/facebook/facebook', $this->_facebook_config);
        $user_details = array();
        if ( $this->facebook->getUser() ) {
            $user_details = $this->facebook->api('/me');
        }
//        echo '<pre>'; 
//        print_r($user_details); exit; 
//        return $user_details;
    }
    
    

}

/* End of file plugin.php */