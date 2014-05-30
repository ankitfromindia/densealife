<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Trend model
 * 
 * @author		PyroCMS Dev Team
 * @package		PyroCMS\Core\Modules\Trends\Models
 */
class Comment_Trend_m extends MY_Model
{

    protected $_table = 'comment_trends';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Insert a new comment
     *
     * @param array $input The data to insert
     * @return bool
     */
    public function insert($input, $skip_validation = false)
    {

        if ( !$this->_check_if_already_exist($input) ) {
            return parent::insert(array(
                        'user_id'      => $input['user_id'],
                        'comment_id'   => $input['comment_id'],
                        'trend'        => $input['trend'],
                        'module'       => $input['module'],
                        'entry_id'     => $input['entry_id'],
                        'entry_title'  => $input['entry_title'],
                        'entry_key'    => $input['entry_key'],
                        'entry_plural' => $input['entry_plural'],
                        'uri'          => !empty($input['uri']) ? $input['uri'] : null,
                        'ip_address'   => $this->input->ip_address(),
                        'status'       => 'true'
                    ));
        }else{
            return $this->db->update($this->_table , array('status' => 'false', 'modified_at' => date('Y-m-d H:i:s')), array('user_id' => $input['user_id'], 'comment_id' => $input['comment_id'], 'trend' => $input['trend']));
        }
    }

    private function _check_if_already_exist($input)
    {
        return $this->count_by(array( 'user_id' => $input['user_id'], 'trend' => $input['trend'], 'comment_id' => $input['comment_id'] )) ? true : false;
    }
    
    public function count_stars($comment_id)
    {
        return $this->count_by(array('trend' => Trends::TREND_STAR, 'comment_id' => $comment_id));
    }
    
    public function count_shares($comment_id)
    {
        return $this->count_by(array('trend' => Trends::TREND_SHARE, 'comment_id' => $comment_id));
    }

}
