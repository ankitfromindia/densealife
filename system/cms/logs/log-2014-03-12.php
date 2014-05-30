<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-03-12 18:06:58 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`pyrocms`.`default_friend_list`, CONSTRAINT `default_friend_list_ibfk_3` FOREIGN KEY (`status`) REFERENCES `default_friend_status` (`status`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `default_friend_list` (`user_id`, `friend_id`, `thread_id`, `status`) VALUES ('1', '3', 'd6ed9e37bece0510e3586b3b25ec13', 'request_sent')
ERROR - 2014-03-12 18:07:20 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`pyrocms`.`default_friend_list`, CONSTRAINT `default_friend_list_ibfk_3` FOREIGN KEY (`status`) REFERENCES `default_friend_status` (`status`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `default_friend_list` (`user_id`, `friend_id`, `thread_id`, `status`) VALUES ('1', '3', 'e7062eef3924f6d8092e9bea77feeb', 'request_sent')
ERROR - 2014-03-12 18:12:27 --> Query error: Field 'thread_id' doesn't have a default value - Invalid query: INSERT INTO `default_friend_list` (`user_id`, `friend_id`, `status`) VALUES ('1', '4', 'initiated')
ERROR - 2014-03-12 18:13:12 --> Severity: Notice  --> Undefined variable: thread C:\xampp\htdocs\pyrocms\addons\default\modules\friend\models\friend_m.php 52
ERROR - 2014-03-12 18:13:12 --> Query error: Column 'thread_id' cannot be null - Invalid query: INSERT INTO `default_notifications` (`user_id`, `thread_id`, `type`) VALUES ('4', NULL, 'friend')
ERROR - 2014-03-12 18:14:12 --> Severity: Notice  --> Undefined variable: thread C:\xampp\htdocs\pyrocms\addons\default\modules\friend\models\friend_m.php 62
ERROR - 2014-03-12 18:22:18 --> Severity: Notice  --> Undefined property: CI_DB_mysqli_driver::$insert_id C:\xampp\htdocs\pyrocms\addons\default\modules\friend\models\friend_m.php 77
ERROR - 2014-03-12 18:29:37 --> Severity: Warning  --> Missing argument 1 for MY_Model::get(), called in C:\xampp\htdocs\pyrocms\addons\default\modules\friend\models\friend_m.php on line 91 and defined C:\xampp\htdocs\pyrocms\system\cms\core\MY_Model.php 132
ERROR - 2014-03-12 18:29:37 --> Severity: Notice  --> Undefined variable: id C:\xampp\htdocs\pyrocms\system\cms\core\MY_Model.php 134
ERROR - 2014-03-12 18:29:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.)
WHERE `user_id`! '1'
AND `id` IS NULL' at line 3 - Invalid query: SELECT *
FROM (`default_profiles` as `p`, `default_friend_list`)
JOIN `default_friend_list` as `fl` USING (`fl`.)
WHERE `user_id`! '1'
AND `id` IS NULL
ERROR - 2014-03-12 18:30:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.)
WHERE `user_id`! '1'' at line 3 - Invalid query: SELECT *
FROM `default_profiles` as `p`
JOIN `default_friend_list` as `fl` USING (`fl`.)
WHERE `user_id`! '1'
ERROR - 2014-03-12 18:30:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '! '1'' at line 3 - Invalid query: SELECT *
FROM `default_profiles` as `p`
WHERE `user_id`! '1'
ERROR - 2014-03-12 18:32:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.)
WHERE `user_id`!= '1'' at line 3 - Invalid query: SELECT *
FROM `default_profiles` as `p`
JOIN `default_friend_list` as `fl` USING (`fl`.)
WHERE `user_id`!= '1'
ERROR - 2014-03-12 19:03:15 --> Severity: Notice  --> Undefined property: stdClass::$label C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 19:03:15 --> Severity: Notice  --> Undefined property: stdClass::$label C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 19:14:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'fl.user_id !='1' )
                                            AND fl.status!='' at line 8 - Invalid query: 
                        SELECT P.user_id as user_id,P.display_name as name, F.status
                        FROM default_profiles AS P 
                        LEFT JOIN default_friend_list AS F ON P.user_id = F.friend_id
                        WHERE P.user_id IN(
                                            SELECT t.user_id
                                            FROM default_trends AS t
                                            LEFT JOIN default_friend_list AS fl ON t.user_id = fl.user_id
                                            AND (fl.friend_id !='1' fl.user_id !='1' )
                                            AND fl.status!='accepted'
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_trends AS def2
                                                WHERE def2.user_id ='1'
                                                GROUP BY entry_id
                                            )
                                            AND t.user_id !='1'
                                            GROUP BY t.user_id
                                        )
                        LIMIT 5
ERROR - 2014-03-12 19:17:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=='3' )
                                            AND fl.status!='accepted'
' at line 8 - Invalid query: 
                        SELECT P.user_id as user_id,P.display_name as name, F.status
                        FROM default_profiles AS P 
                        LEFT JOIN default_friend_list AS F ON P.user_id = F.friend_id
                        WHERE P.user_id IN(
                                            SELECT t.user_id
                                            FROM default_trends AS t
                                            LEFT JOIN default_friend_list AS fl ON t.user_id = fl.user_id
                                            AND (fl.user_id =='3' )
                                            AND fl.status!='accepted'
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_trends AS def2
                                                WHERE def2.user_id ='3'
                                                GROUP BY entry_id
                                            )
                                            AND t.user_id !='3'
                                            GROUP BY t.user_id
                                        )
                        LIMIT 5
ERROR - 2014-03-12 19:43:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE P.user_id IN(
                                            SELECT t.user_i' at line 4 - Invalid query: 
                        SELECT P.user_id as user_id,P.display_name as name, F.status
                        FROM default_profiles AS P 
                        LEFT JOIN default_friend_list AS F ON P.user_id = F.friend_id AND (F.user_id ='1' OR F.friend_id = '1'
                        WHERE P.user_id IN(
                                            SELECT t.user_id
                                            FROM default_trends AS t
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_trends AS def2
                                                WHERE def2.user_id ='1'
                                            )
                                            AND t.user_id!='1'
                                        )
                        LIMIT 5
ERROR - 2014-03-12 19:59:18 --> Query error: Operand should contain 1 column(s) - Invalid query: 
                        SELECT P.user_id as user_id,P.display_name as name, (select requester, responder from default_friend_status where status = F.status)
                        FROM default_profiles AS P 
                        LEFT JOIN default_friend_list AS F ON (P.user_id = F.friend_id OR P.user_id = F.user_id) AND (F.user_id ='1' OR F.friend_id = '1')
                        WHERE P.user_id IN(
                                            SELECT t.user_id
                                            FROM default_trends AS t
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_trends AS def2
                                                WHERE def2.user_id ='1'
                                            )
                                            AND t.user_id!='1'
                                        )
                        LIMIT 5
ERROR - 2014-03-12 20:03:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN default_friend_status AS s on s.status = F.status
                   ' at line 15 - Invalid query: 
                        SELECT P.user_id as user_id,P.display_name as name, if(F.friend_id = 1, s.requester,s.responder) as status
                        FROM default_profiles AS P 
                        LEFT JOIN default_friend_list AS F ON (P.user_id = F.friend_id OR P.user_id = F.user_id) AND (F.user_id ='1' OR F.friend_id = '1')
                        WHERE P.user_id IN(
                                            SELECT t.user_id
                                            FROM default_trends AS t
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_trends AS def2
                                                WHERE def2.user_id ='1'
                                            )
                                            AND t.user_id!='1'
                                        )
                        LEFT JOIN default_friend_status AS s on s.status = F.status
                        LIMIT 5
ERROR - 2014-03-12 20:04:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN default_friend_status AS s on s.status = F.status
                   ' at line 15 - Invalid query: 
                        SELECT P.user_id as user_id,P.display_name as name, if(F.friend_id = '1', s.requester,s.responder) as status
                        FROM default_profiles AS P 
                        LEFT JOIN default_friend_list AS F ON (P.user_id = F.friend_id OR P.user_id = F.user_id) AND (F.user_id ='1' OR F.friend_id = '1')
                        WHERE P.user_id IN(
                                            SELECT t.user_id
                                            FROM default_trends AS t
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_trends AS def2
                                                WHERE def2.user_id ='1'
                                            )
                                            AND t.user_id!='1'
                                        )
                        LEFT JOIN default_friend_status AS s on s.status = F.status
                        LIMIT 5
ERROR - 2014-03-12 20:04:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN default_friend_status AS s on s.status = F.status
                   ' at line 15 - Invalid query: 
                        SELECT P.user_id as user_id,P.display_name as name, if(F.friend_id = '1','hello', 'ankit') as status
                        FROM default_profiles AS P 
                        LEFT JOIN default_friend_list AS F ON (P.user_id = F.friend_id OR P.user_id = F.user_id) AND (F.user_id ='1' OR F.friend_id = '1')
                        WHERE P.user_id IN(
                                            SELECT t.user_id
                                            FROM default_trends AS t
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_trends AS def2
                                                WHERE def2.user_id ='1'
                                            )
                                            AND t.user_id!='1'
                                        )
                        LEFT JOIN default_friend_status AS s on s.status = F.status
                        LIMIT 5
ERROR - 2014-03-12 20:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN default_friend_status AS s on s.status = F.status
                   ' at line 15 - Invalid query: 
                        SELECT P.user_id as user_id,P.display_name as name, if(F.friend_id = '1','hello', 'ankit') as mystatus
                        FROM default_profiles AS P 
                        LEFT JOIN default_friend_list AS F ON (P.user_id = F.friend_id OR P.user_id = F.user_id) AND (F.user_id ='1' OR F.friend_id = '1')
                        WHERE P.user_id IN(
                                            SELECT t.user_id
                                            FROM default_trends AS t
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_trends AS def2
                                                WHERE def2.user_id ='1'
                                            )
                                            AND t.user_id!='1'
                                        )
                        LEFT JOIN default_friend_status AS s on s.status = F.status
                        LIMIT 5
ERROR - 2014-03-12 20:06:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LEFT JOIN default_friend_status AS s on s.status = F.status
                   ' at line 15 - Invalid query: 
                        SELECT P.user_id as user_id,P.display_name as name, F.user_id as requester , F.friend_id as responder
                        FROM default_profiles AS P 
                        LEFT JOIN default_friend_list AS F ON (P.user_id = F.friend_id OR P.user_id = F.user_id) AND (F.user_id ='1' OR F.friend_id = '1')
                        WHERE P.user_id IN(
                                            SELECT t.user_id
                                            FROM default_trends AS t
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_trends AS def2
                                                WHERE def2.user_id ='1'
                                            )
                                            AND t.user_id!='1'
                                        )
                        LEFT JOIN default_friend_status AS s on s.status = F.status
                        LIMIT 5
ERROR - 2014-03-12 20:24:26 --> Severity: Notice  --> Undefined property: stdClass::$status C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:24:26 --> Severity: Notice  --> Undefined property: stdClass::$label C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:24:26 --> Severity: Notice  --> Undefined property: stdClass::$status C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:24:26 --> Severity: Notice  --> Undefined property: stdClass::$label C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:24:26 --> Severity: Notice  --> Undefined property: stdClass::$status C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:24:26 --> Severity: Notice  --> Undefined property: stdClass::$label C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:24:26 --> Severity: Notice  --> Undefined property: stdClass::$status C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:24:26 --> Severity: Notice  --> Undefined property: stdClass::$label C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:24:26 --> Severity: Notice  --> Undefined property: stdClass::$status C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:24:26 --> Severity: Notice  --> Undefined property: stdClass::$label C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:25:10 --> Severity: Notice  --> Undefined property: stdClass::$label C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:25:10 --> Severity: Notice  --> Undefined property: stdClass::$label C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:25:10 --> Severity: Notice  --> Undefined property: stdClass::$label C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:25:10 --> Severity: Notice  --> Undefined property: stdClass::$label C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:25:10 --> Severity: Notice  --> Undefined property: stdClass::$label C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-03-12 20:38:33 --> Page Missing: friend/request
ERROR - 2014-03-12 20:38:44 --> Page Missing: files/large/2751ca50bb897e97049258815ff710ed.png
ERROR - 2014-03-12 20:38:45 --> The path to the image is not correct.
ERROR - 2014-03-12 20:38:45 --> Your server does not support the GD function required to process this type of image.
ERROR - 2014-03-12 20:48:12 --> Query error: Table 'pyrocms.default_friend_notification' doesn't exist - Invalid query: UPDATE `default_friend_notification` SET `status` = 'seen' WHERE `user_id` =  '3' AND `friend_id` =  '1'
ERROR - 2014-03-12 20:51:02 --> Query error: Table 'pyrocms.default_friend_notification' doesn't exist - Invalid query: UPDATE `default_friend_notification` SET `status` = 'seen' WHERE `user_id` =  '1' AND `friend_id` =  '3'
ERROR - 2014-03-12 20:54:31 --> Query error: Table 'pyrocms.default_friend_notifications' doesn't exist - Invalid query: UPDATE `default_friend_notifications` SET `status` = 'seen' WHERE `user_id` =  '1' AND `friend_id` =  '3'
ERROR - 2014-03-12 20:56:27 --> Query error: Unknown column 'friend_id' in 'where clause' - Invalid query: UPDATE `default_notifications` SET `status` = 'seen' WHERE `user_id` =  '3' AND `friend_id` =  '1'
ERROR - 2014-03-12 21:07:34 --> Query error: Unknown column 'thread_id' in 'field list' - Invalid query: INSERT INTO `default_friend_list` (`user_id`, `friend_id`, `thread_id`, `status`) VALUES ('1', '3', '8e761f40f04f49a6f6dc2e03f4eaa9', 'initiated')
ERROR - 2014-03-12 21:08:39 --> Query error: Unknown column 'thread' in 'field list' - Invalid query: INSERT INTO `default_notifications` (`user_id`, `type`, `thread`) VALUES ('3', 'friend', '759d1c4c741103148c2a1de6ff0c57')
ERROR - 2014-03-12 21:10:17 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 484
ERROR - 2014-03-12 21:10:17 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `default_friend_list`
WHERE `id` =  Array
ERROR - 2014-03-12 21:11:33 --> Query error: Data truncated for column 'type' at row 1 - Invalid query: INSERT INTO `default_notifications` (`user_id`, `type`, `thread`) VALUES ('1', 'friend_request_accepted', '4576e2133dd1374fded67fa0d195d7')
