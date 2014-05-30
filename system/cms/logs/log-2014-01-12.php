<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-01-12 06:05:25 --> Page Missing: eventsmanager/friend
ERROR - 2014-01-12 06:10:47 --> Page Missing: eventsmanager/friend
ERROR - 2014-01-12 06:14:02 --> Page Missing: eventsmanager/friend
ERROR - 2014-01-12 06:14:44 --> Page Missing: eventsmanager/friend/1
ERROR - 2014-01-12 06:16:18 --> Page Missing: eventsmanager/friend/1
ERROR - 2014-01-12 06:16:34 --> Page Missing: eventsmanager/friend/1
ERROR - 2014-01-12 06:18:28 --> Page Missing: eventsmanager/friend/1
ERROR - 2014-01-12 06:19:14 --> Page Missing: eventsmanager/friend/1
ERROR - 2014-01-12 06:21:01 --> Page Missing: eventsmanager/friend/1
ERROR - 2014-01-12 06:21:58 --> Page Missing: eventsmanager/friend/1
ERROR - 2014-01-12 06:22:09 --> Page Missing: eventsmanager/friend/1
ERROR - 2014-01-12 06:23:18 --> Page Missing: eventsmanager/friend/1
ERROR - 2014-01-12 06:25:02 --> Page Missing: eventsmanager/friend/1
ERROR - 2014-01-12 11:03:57 --> Page Missing: eventsmanager/user/1
ERROR - 2014-01-12 11:05:16 --> Page Missing: eventsmanager/user/1
ERROR - 2014-01-12 11:10:52 --> Page Missing: eventsmanager/friend/add/1
ERROR - 2014-01-12 11:35:42 --> Query error: Field 'responded_on' doesn't have a default value - Invalid query: INSERT INTO `default_friend_list` (`user_id`, `friend_id`, `requested_on`) VALUES ('1', '2', 0)
ERROR - 2014-01-12 12:03:46 --> Query error: Unknown column 'reference_id' in 'field list' - Invalid query: INSERT INTO `default_friend_list` (`user_id`, `reference_id`, `type`) VALUES ('1', 1, 'friend')
ERROR - 2014-01-12 12:19:56 --> Page Missing: eventsmanager/this-is-the-first-category
ERROR - 2014-01-12 12:30:50 --> Page Missing: eventsmanager/friends/add/2
ERROR - 2014-01-12 12:31:02 --> Severity: Notice  --> Undefined property: CI_Input::$is_ajax_request C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\controllers\friend.php 38
ERROR - 2014-01-12 12:31:41 --> Severity: Notice  --> Undefined index: HTTP_REFERER C:\xampp\htdocs\pyrocms\system\cms\helpers\MY_url_helper.php 108
ERROR - 2014-01-12 12:51:15 --> Page Missing: eventsmanager/friend/add_friend
ERROR - 2014-01-12 12:51:34 --> Severity: Notice  --> Undefined index: HTTP_REFERER C:\xampp\htdocs\pyrocms\system\cms\helpers\MY_url_helper.php 108
ERROR - 2014-01-12 12:56:22 --> Page Missing: eventsmanager/friend/add_friend
ERROR - 2014-01-12 12:57:20 --> Page Missing: eventsmanager/friend/add
ERROR - 2014-01-12 12:57:38 --> Page Missing: eventsmanager/friend/add
ERROR - 2014-01-12 12:57:44 --> Severity: Notice  --> Undefined index: HTTP_REFERER C:\xampp\htdocs\pyrocms\system\cms\helpers\MY_url_helper.php 108
ERROR - 2014-01-12 12:58:31 --> Page Missing: eventsmanager/friend/add_friend
ERROR - 2014-01-12 12:59:29 --> Page Missing: eventsmanager/friend/add_friend
ERROR - 2014-01-12 13:00:03 --> Page Missing: eventsmanager/friend/add_friend
ERROR - 2014-01-12 13:04:22 --> Severity: Warning  --> Missing argument 1 for Friend::_send_friend_request(), called in C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\controllers\friend.php on line 39 and defined C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\controllers\friend.php 48
ERROR - 2014-01-12 13:04:22 --> Severity: Notice  --> Undefined variable: friend_id C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\controllers\friend.php 50
ERROR - 2014-01-12 13:04:22 --> Query error: Column 'friend_id' cannot be null - Invalid query: INSERT INTO `default_friend_list` (`user_id`, `friend_id`) VALUES ('1', NULL)
ERROR - 2014-01-12 13:42:31 --> Query error: Column 'user_id' in field list is ambiguous - Invalid query: SELECT `user_id`
FROM (`default_profiles` as `p1`, `default_profiles`)
LEFT JOIN `default_event_followers` as `ef1` ON `default_ef`.`user_id` = `p1`.`user_id`
WHERE `p1`.`user_id`!= '1'
ERROR - 2014-01-12 13:42:39 --> Query error: Unknown column 'default_ef.user_id' in 'on clause' - Invalid query: SELECT `p1`.`user_id`
FROM (`default_profiles` as `p1`, `default_profiles`)
LEFT JOIN `default_event_followers` as `ef1` ON `default_ef`.`user_id` = `p1`.`user_id`
WHERE `p1`.`user_id`!= '1'
ERROR - 2014-01-12 13:42:54 --> Query error: Unknown column 'default_p1.user_id' in 'where clause' - Invalid query: SELECT *
FROM `default_profiles`
INNER JOIN `default_profiles` as `p2` ON `default_ef`.`user_id` = `p2`.`user_id`
LEFT JOIN `default_friend_list` as `fl` ON `fl`.`friend_id` != `p2`.`user_id` and `fl`.`user_id` !=1
WHERE `default_p1`.`user_id`!= '1'
GROUP BY `default_p1`.`user_id`
ORDER BY `default_profiles`.`display_name` desc
 LIMIT 5
ERROR - 2014-01-12 13:42:55 --> Query error: Unknown column 'default_p1.user_id' in 'where clause' - Invalid query: SELECT *
FROM `default_profiles`
INNER JOIN `default_profiles` as `p2` ON `default_ef`.`user_id` = `p2`.`user_id`
LEFT JOIN `default_friend_list` as `fl` ON `fl`.`friend_id` != `p2`.`user_id` and `fl`.`user_id` !=1
WHERE `default_p1`.`user_id`!= '1'
GROUP BY `default_p1`.`user_id`
ORDER BY `default_profiles`.`display_name` desc
 LIMIT 5
ERROR - 2014-01-12 13:43:53 --> Severity: Warning  --> Missing argument 1 for MY_Model::get(), called in C:\xampp\htdocs\pyrocms\system\cms\modules\users\models\profile_m.php on line 92 and defined C:\xampp\htdocs\pyrocms\system\cms\core\MY_Model.php 132
ERROR - 2014-01-12 13:43:53 --> Severity: Notice  --> Undefined variable: id C:\xampp\htdocs\pyrocms\system\cms\core\MY_Model.php 134
ERROR - 2014-01-12 13:43:53 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `p1`.`user_id`
FROM (`default_profiles` as `p1`, `default_profiles`)
LEFT JOIN `default_event_followers` as `ef` ON `ef`.`user_id` = `p1`.`user_id`
WHERE `p1`.`user_id`!= '1'
AND `id` IS NULL
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:45:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ,' at line 3 - Invalid query: SELECT *
FROM (`default_profiles` as `p2`, `default_profiles`)
WHERE `user_id` IN (, , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ) 
ERROR - 2014-01-12 13:45:52 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\pyrocms\system\codeigniter\core\Exceptions.php:183) C:\xampp\htdocs\pyrocms\system\codeigniter\core\Common.php 497
ERROR - 2014-01-12 13:46:30 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:46:30 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:46:30 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:46:30 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:46:30 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:46:30 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:46:30 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:46:30 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:46:30 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:46:30 --> Query error: Column 'user_id' in where clause is ambiguous - Invalid query: SELECT *
FROM (`default_profiles` as `p2`, `default_profiles`)
WHERE `user_id` IN (Array, Array, Array, Array, Array, Array, Array, Array, Array) 
ERROR - 2014-01-12 13:49:23 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:49:23 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:49:23 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:49:23 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:49:23 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:49:23 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:49:23 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:49:23 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:49:23 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:49:23 --> Query error: Column 'user_id' in where clause is ambiguous - Invalid query: SELECT *
FROM (`default_profiles` as `p2`, `default_profiles`)
WHERE `user_id` IN (Array, Array, Array, Array, Array, Array, Array, Array, Array) 
ERROR - 2014-01-12 13:50:39 --> Query error: Column 'user_id' in where clause is ambiguous - Invalid query: SELECT *
FROM (`default_profiles` as `p2`, `default_profiles`)
WHERE `user_id` IN ('SELECT `p1`.`user_id` FROM `default_profiles` as `p1` LEFT JOIN `default_event_followers` as `ef` ON `ef`.`user_id` = `p1`.`user_id` WHERE `p1`.`user_id`!= \'1\'') 
ERROR - 2014-01-12 13:55:26 --> Severity: 4096  --> Object of class CI_DB_mysqli_result could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-01-12 13:55:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 3 - Invalid query: SELECT *
FROM (`default_profiles` as `p2`, `default_profiles`)
WHERE `p2`.`user_id` IN () 
ERROR - 2014-01-12 13:57:22 --> Query error: Table 'pyrocms.profiles' doesn't exist - Invalid query: select p2.* from profiles as p2 where p2.user_id in (SELECT `p1`.`user_id` FROM `default_profiles` as `p1` LEFT JOIN `default_event_followers` as `ef` ON `ef`.`user_id` = `p1`.`user_id` WHERE `p1`.`user_id`!= '1')
ERROR - 2014-01-12 14:00:44 --> Severity: Notice  --> Undefined variable: result C:\xampp\htdocs\pyrocms\system\cms\modules\users\models\profile_m.php 91
ERROR - 2014-01-12 16:57:55 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\cms\modules\users\models\profile_m.php 89
ERROR - 2014-01-12 16:57:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and fl.friend_id !=p2.user_id where p2.user_id in (SELECT `p1`.`user_id` FROM `d' at line 1 - Invalid query: select p2.* from default_profiles as p2 inner join default_friend_list as fl on fl.user_id= and fl.friend_id !=p2.user_id where p2.user_id in (SELECT `p1`.`user_id` FROM `default_profiles` as `p1` LEFT JOIN `default_event_followers` as `ef` ON `ef`.`user_id` = `p1`.`user_id` WHERE `p1`.`user_id`!= '1')
ERROR - 2014-01-12 16:59:16 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\pyrocms\system\cms\modules\users\models\profile_m.php 89
ERROR - 2014-01-12 16:59:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and fl.friend_id !=p2.user_id where p2.user_id in (SELECT `p1`.`user_id` FROM `d' at line 1 - Invalid query: select p2.* from default_profiles as p2 inner join default_friend_list as fl on fl.user_id= and fl.friend_id !=p2.user_id where p2.user_id in (SELECT `p1`.`user_id` FROM `default_profiles` as `p1` LEFT JOIN `default_event_followers` as `ef` ON `ef`.`user_id` = `p1`.`user_id` WHERE `p1`.`user_id`!= '1')
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Undefined property: mysqli::$user_id C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 4
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Undefined property: mysqli::$display_name C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 7
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Undefined property: mysqli::$user_id C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Undefined property: mysqli::$user_id C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Undefined property: mysqli_result::$user_id C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 4
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Undefined property: mysqli_result::$display_name C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 7
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Undefined property: mysqli_result::$user_id C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Undefined property: mysqli_result::$user_id C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 4
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 7
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 4
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 7
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 4
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 7
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 4
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 7
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 4
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 7
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 4
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 7
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:00:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 11
ERROR - 2014-01-12 17:03:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'rand limit 5' at line 1 - Invalid query: select p2.* from default_profiles as p2 inner join default_friend_list as fl on fl.user_id=1 and fl.friend_id !=p2.user_id where p2.user_id in (SELECT `p1`.`user_id` FROM `default_profiles` as `p1` LEFT JOIN `default_event_followers` as `ef` ON `ef`.`user_id` = `p1`.`user_id` WHERE `p1`.`user_id`!= '1') order by p2.display_name rand limit 5
ERROR - 2014-01-12 17:03:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'random() limit 5' at line 1 - Invalid query: select p2.* from default_profiles as p2 inner join default_friend_list as fl on fl.user_id=1 and fl.friend_id !=p2.user_id where p2.user_id in (SELECT `p1`.`user_id` FROM `default_profiles` as `p1` LEFT JOIN `default_event_followers` as `ef` ON `ef`.`user_id` = `p1`.`user_id` WHERE `p1`.`user_id`!= '1') order by p2.display_name random() limit 5
ERROR - 2014-01-12 19:27:39 --> Query error: Unknown column 'default_dp.user_id' in 'where clause' - Invalid query: SELECT `default_profiles`.*
FROM (`default_profiles` as `p`, `default_profiles`)
INNER JOIN `default_event_followers` as `ef` ON `ef`.`user_id`= `p`.`user_id`
INNER JOIN `default_friend_list` as `fl` ON `fl`.`user_id`!='1' and `fl`.`friend_id`!=`p`.`user_id`
WHERE `default_dp`.`user_id`!= '1'
GROUP BY `ef`.`user_id`
ERROR - 2014-01-12 19:29:39 --> Query error: Not unique table/alias: 'default_profiles' - Invalid query: SELECT `default_profiles`.*
FROM (`default_profiles`, `default_profiles`)
INNER JOIN `default_event_followers` as `ef` ON `ef`.`user_id`= `default_p`.`user_id`
INNER JOIN `default_friend_list` as `fl` ON `fl`.`user_id`!='1' and `fl`.`friend_id`!=`default_p`.`user_id`
WHERE `default_p`.`user_id`!= '1'
GROUP BY `ef`.`user_id`
ERROR - 2014-01-12 19:29:50 --> Query error: Unknown column 'default_p.user_id' in 'where clause' - Invalid query: SELECT `default_profiles`.*
FROM `default_profiles`
INNER JOIN `default_event_followers` as `ef` ON `ef`.`user_id`= `default_p`.`user_id`
INNER JOIN `default_friend_list` as `fl` ON `fl`.`user_id`!='1' and `fl`.`friend_id`!=`default_p`.`user_id`
WHERE `default_p`.`user_id`!= '1'
GROUP BY `ef`.`user_id`
ERROR - 2014-01-12 19:31:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.user_id
WHERE `default_profiles`.`user_id`!= '1'
GROUP BY `ef`.`user_id`' at line 4 - Invalid query: SELECT `default_profiles`.*
FROM `default_profiles`
INNER JOIN `default_event_followers` as `ef` ON `ef`.`user_id`= `default_profiles`.`user_id`
INNER JOIN `default_friend_list` as `fl` ON `fl`.`user_id`!='1' and `fl`.`friend_id`!='.profiles.default_'.user_id
WHERE `default_profiles`.`user_id`!= '1'
GROUP BY `ef`.`user_id`
ERROR - 2014-01-12 19:32:57 --> Query error: Unknown column 'default_'profiles'.user_id' in 'on clause' - Invalid query: SELECT `default_profiles`.*
FROM `default_profiles`
INNER JOIN `default_event_followers` as `ef` ON `ef`.`user_id`= `default_profiles`.`user_id`
INNER JOIN `default_friend_list` as `fl` ON `fl`.`user_id`!='1' and `fl`.`friend_id`!=`default_'profiles'`.`user_id`
WHERE `default_profiles`.`user_id`!= '1'
GROUP BY `ef`.`user_id`
