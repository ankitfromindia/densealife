<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-05-11 20:02:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
                OR (friend_id = 2 AND user_id = )
                AND s.stat' at line 5 - Invalid query: 
                SELECT fl.status , if(user_id ='' ,s.requester,s.responder) as status_label
                FROM default_friend_list as fl
                INNER JOIN default_friend_status as s
                ON s.status = fl.status
                WHERE (user_id = 2 AND friend_id = )
                OR (friend_id = 2 AND user_id = )
                AND s.status!='initiated'
            
