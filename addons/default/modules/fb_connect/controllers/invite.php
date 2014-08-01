<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class invite extends Public_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->spark('facebook-sdk/0.0.1');
    }
    public function index()
    {   	
        $fbuser = $this->facebook->getUser();
        $user_friends = array(); 
        if ($fbuser) {
            try {
                //get the facebook friends list
                $user_friends = $this->facebook->api('/me/friends');
            } catch (FacebookApiException $e) {
                error_log($e);
                $fbuser = NULL;
            }
        }
        
        $this->template
                ->set_layout(false)
                ->set('friends', $user_friends)
                ->build('invite/index');
    }
}


