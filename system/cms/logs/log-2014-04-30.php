<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-04-30 19:53:30 --> Page Missing: profile/photos
ERROR - 2014-04-30 19:53:30 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\partials\metadata.html 35
ERROR - 2014-04-30 19:53:39 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\partials\metadata.html 35
ERROR - 2014-04-30 19:54:00 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\friend\helpers\friend_helper.php 13
ERROR - 2014-04-30 19:54:00 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 19:54:01 --> Page Missing: profile/friends/images/profile-pictures2.jpg
ERROR - 2014-04-30 19:54:02 --> Page Missing: profile/friends/images/profile-pictures1.jpg
ERROR - 2014-04-30 19:54:03 --> Page Missing: profile/friends/images/profile-pictures3.jpg
ERROR - 2014-04-30 19:54:03 --> Page Missing: profile/friends/images/profile-pictures4.jpg
ERROR - 2014-04-30 19:54:04 --> Page Missing: profile/friends/images/profile-pictures5.jpg
ERROR - 2014-04-30 19:54:05 --> Page Missing: profile/friends/images/profile-pictures6.jpg
ERROR - 2014-04-30 19:54:06 --> Page Missing: profile/friends/images/profile-pictures8.jpg
ERROR - 2014-04-30 19:54:06 --> Page Missing: profile/friends/images/profile-pictures7.jpg
ERROR - 2014-04-30 19:58:30 --> Severity: Warning  --> Missing argument 1 for MY_Model::get(), called in C:\xampp\htdocs\pyrocms\addons\default\modules\profile\controllers\friends.php on line 104 and defined C:\xampp\htdocs\pyrocms\system\cms\core\MY_Model.php 132
ERROR - 2014-04-30 19:58:30 --> Severity: Notice  --> Undefined variable: id C:\xampp\htdocs\pyrocms\system\cms\core\MY_Model.php 134
ERROR - 2014-04-30 19:58:41 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\pyrocms\system\cms\core\MY_Model.php 654
ERROR - 2014-04-30 19:58:41 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\pyrocms\system\cms\core\MY_Model.php 654
ERROR - 2014-04-30 19:58:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IS NULL' at line 3 - Invalid query: SELECT *
FROM `default_profiles`
WHERE  IS NULL
ERROR - 2014-04-30 20:01:31 --> Query error: Unknown column 'firstname' in 'where clause' - Invalid query: SELECT *
FROM `default_profiles`
WHERE  `firstname`  LIKE '%fasdf%'
ERROR - 2014-04-30 20:05:12 --> Query error: Unknown column 'email' in 'where clause' - Invalid query: SELECT *
FROM `default_profiles`
WHERE  `first_name`  LIKE '%fasdf%'
OR  `last_name`  LIKE '%fasdf%'
OR  `email`  LIKE '%%'
OR  `address_line1`  LIKE '%%'
OR  `address_line2`  LIKE '%%'
OR  `address_line3`  LIKE '%%'
ERROR - 2014-04-30 20:09:17 --> Query error: Unknown table 'default_p' - Invalid query: SELECT `default_p`.*, `u`.`email`
FROM `default_profiles`
INNER JOIN `default_users` as `u` ON `u`.`id` = `default_p`.`user_id`
WHERE `u`.`active` =  1
AND  `default_p`.`first_name`  LIKE '%fasdf%'
OR  `default_p`.`last_name`  LIKE '%fasdf%'
OR  `u`.`email`  LIKE '%%'
OR  `default_p`.`address_line1`  LIKE '%%'
OR  `default_p`.`address_line2`  LIKE '%%'
OR  `default_p`.`address_line3`  LIKE '%%'
ERROR - 2014-04-30 20:14:25 --> Severity: Notice  --> Undefined variable: query C:\xampp\htdocs\pyrocms\addons\default\modules\profile\controllers\friends.php 122
ERROR - 2014-04-30 20:14:52 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\friend\helpers\friend_helper.php 13
ERROR - 2014-04-30 20:14:52 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 20:14:53 --> Page Missing: profile/friends/images/profile-pictures1.jpg
ERROR - 2014-04-30 20:14:53 --> Page Missing: profile/friends/images/profile-pictures3.jpg
ERROR - 2014-04-30 20:14:54 --> Page Missing: profile/friends/images/profile-pictures5.jpg
ERROR - 2014-04-30 20:14:54 --> Page Missing: profile/friends/images/profile-pictures2.jpg
ERROR - 2014-04-30 20:14:55 --> Page Missing: profile/friends/images/profile-pictures4.jpg
ERROR - 2014-04-30 20:14:55 --> Page Missing: profile/friends/images/profile-pictures6.jpg
ERROR - 2014-04-30 20:14:56 --> Page Missing: profile/friends/images/profile-pictures7.jpg
ERROR - 2014-04-30 20:14:57 --> Page Missing: profile/friends/images/profile-pictures8.jpg
ERROR - 2014-04-30 20:18:03 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\friend\helpers\friend_helper.php 13
ERROR - 2014-04-30 20:18:03 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 20:18:03 --> Page Missing: profile/friends/images/profile-pictures5.jpg
ERROR - 2014-04-30 20:18:04 --> Page Missing: profile/friends/images/profile-pictures2.jpg
ERROR - 2014-04-30 20:18:04 --> Page Missing: profile/friends/images/profile-pictures1.jpg
ERROR - 2014-04-30 20:18:05 --> Page Missing: profile/friends/images/profile-pictures6.jpg
ERROR - 2014-04-30 20:18:06 --> Page Missing: profile/friends/images/profile-pictures3.jpg
ERROR - 2014-04-30 20:18:06 --> Page Missing: profile/friends/images/profile-pictures4.jpg
ERROR - 2014-04-30 20:18:07 --> Page Missing: profile/friends/images/profile-pictures7.jpg
ERROR - 2014-04-30 20:18:07 --> Page Missing: profile/friends/images/profile-pictures8.jpg
ERROR - 2014-04-30 20:18:08 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\friend\helpers\friend_helper.php 13
ERROR - 2014-04-30 20:18:08 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 20:18:09 --> Page Missing: profile/friends/images/profile-pictures1.jpg
ERROR - 2014-04-30 20:18:09 --> Page Missing: profile/friends/images/profile-pictures2.jpg
ERROR - 2014-04-30 20:18:10 --> Page Missing: profile/friends/images/profile-pictures3.jpg
ERROR - 2014-04-30 20:18:10 --> Page Missing: profile/friends/images/profile-pictures5.jpg
ERROR - 2014-04-30 20:18:11 --> Page Missing: profile/friends/images/profile-pictures4.jpg
ERROR - 2014-04-30 20:18:11 --> Page Missing: profile/friends/images/profile-pictures6.jpg
ERROR - 2014-04-30 20:18:12 --> Page Missing: profile/friends/images/profile-pictures7.jpg
ERROR - 2014-04-30 20:18:13 --> Page Missing: profile/friends/images/profile-pictures8.jpg
ERROR - 2014-04-30 20:23:09 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\friend\helpers\friend_helper.php 13
ERROR - 2014-04-30 20:23:09 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\friend\helpers\friend_helper.php 13
ERROR - 2014-04-30 20:23:09 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 20:25:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '! '1'
AND  `default_profiles`.`first_name`  LIKE '%ANKIT%'
OR  `default_profiles' at line 5 - Invalid query: SELECT `default_profiles`.*, `u`.`email`
FROM `default_profiles`
INNER JOIN `default_users` as `u` ON `u`.`id` = `default_profiles`.`user_id`
WHERE `u`.`active` =  1
AND `default_profiles`.`user_id`! '1'
AND  `default_profiles`.`first_name`  LIKE '%ANKIT%'
OR  `default_profiles`.`last_name`  LIKE '%ANKIT%'
ERROR - 2014-04-30 20:25:58 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\friend\helpers\friend_helper.php 13
ERROR - 2014-04-30 20:25:58 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\friend\helpers\friend_helper.php 13
ERROR - 2014-04-30 20:25:58 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 20:27:45 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 20:28:04 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 20:28:22 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 20:28:30 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 20:28:39 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 20:29:13 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 20:29:43 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 20:29:52 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 20:59:08 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:00:58 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:01:08 --> Severity: Notice  --> Undefined variable: username C:\xampp\htdocs\pyrocms\addons\default\modules\profile\controllers\friends.php 125
ERROR - 2014-04-30 21:01:10 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:02:11 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:04:28 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:04:45 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:06:38 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:07:10 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:15:15 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:15:33 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:19:18 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:19:40 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:20:04 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:23:30 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:24:15 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:24:29 --> Page Missing: profile/friends/images/events-picture1.jpg
ERROR - 2014-04-30 21:24:30 --> Page Missing: profile/friends/images/events-picture2.jpg
ERROR - 2014-04-30 21:24:30 --> Page Missing: profile/friends/images/events-picture3.jpg
ERROR - 2014-04-30 21:24:31 --> Page Missing: profile/friends/images/events-picture4.jpg
ERROR - 2014-04-30 21:24:31 --> Page Missing: profile/friends/images/events-picture5.jpg
ERROR - 2014-04-30 21:24:32 --> Page Missing: profile/friends/images/events-picture6.jpg
ERROR - 2014-04-30 21:25:36 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:25:39 --> Page Missing: profile/friends/images/events-picture1.jpg
ERROR - 2014-04-30 21:25:40 --> Page Missing: profile/friends/images/events-picture4.jpg
ERROR - 2014-04-30 21:25:40 --> Page Missing: profile/friends/images/events-picture3.jpg
ERROR - 2014-04-30 21:25:41 --> Page Missing: profile/friends/images/events-picture5.jpg
ERROR - 2014-04-30 21:25:41 --> Page Missing: profile/friends/images/events-picture2.jpg
ERROR - 2014-04-30 21:25:42 --> Page Missing: profile/friends/images/events-picture6.jpg
ERROR - 2014-04-30 21:25:43 --> Page Missing: profile/friends/images/events-picture1.jpg
ERROR - 2014-04-30 21:26:32 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:26:42 --> Page Missing: user/images/events-picture6.jpg
ERROR - 2014-04-30 21:26:43 --> Page Missing: user/images/events-picture2.jpg
ERROR - 2014-04-30 21:26:43 --> Page Missing: user/images/events-picture5.jpg
ERROR - 2014-04-30 21:26:44 --> Page Missing: user/images/events-picture1.jpg
ERROR - 2014-04-30 21:26:44 --> Page Missing: user/images/events-picture3.jpg
ERROR - 2014-04-30 21:26:45 --> Page Missing: user/images/events-picture4.jpg
ERROR - 2014-04-30 21:27:35 --> Page Missing: user/images/events-picture2.jpg
ERROR - 2014-04-30 21:27:36 --> Page Missing: user/images/events-picture4.jpg
ERROR - 2014-04-30 21:27:37 --> Page Missing: user/images/events-picture1.jpg
ERROR - 2014-04-30 21:27:37 --> Page Missing: user/images/events-picture5.jpg
ERROR - 2014-04-30 21:27:38 --> Page Missing: user/images/events-picture6.jpg
ERROR - 2014-04-30 21:27:38 --> Page Missing: user/images/events-picture3.jpg
ERROR - 2014-04-30 21:29:30 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:29:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE p.user_id!= ''' at line 1 - Invalid query: SELECT `p`.*,        `u`.`username` FROM   `default_profiles` AS `p`        INNER JOIN `default_users` AS `u`                ON `p`.`user_id` = `u`.`id` WHERE  `u`.`id` IN (SELECT friend_id                     FROM   default_friend_list                     WHERE  user_id = 2                            AND status = 'accepted'                     UNION                     SELECT user_id                     FROM   default_friend_list                     WHERE  friend_id = 2                            AND status = 'accepted') WHERE p.user_id!= '' 
ERROR - 2014-04-30 21:29:40 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:29:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE p.user_id!= '2'' at line 1 - Invalid query: SELECT `p`.*,        `u`.`username` FROM   `default_profiles` AS `p`        INNER JOIN `default_users` AS `u`                ON `p`.`user_id` = `u`.`id` WHERE  `u`.`id` IN (SELECT friend_id                     FROM   default_friend_list                     WHERE  user_id = 2                            AND status = 'accepted'                     UNION                     SELECT user_id                     FROM   default_friend_list                     WHERE  friend_id = 2                            AND status = 'accepted') WHERE p.user_id!= '2' 
ERROR - 2014-04-30 21:30:01 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:30:08 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:30:14 --> Page Missing: user/images/events-picture6.jpg
ERROR - 2014-04-30 21:30:15 --> Page Missing: user/images/events-picture3.jpg
ERROR - 2014-04-30 21:30:16 --> Page Missing: user/images/events-picture1.jpg
ERROR - 2014-04-30 21:30:16 --> Page Missing: user/images/events-picture2.jpg
ERROR - 2014-04-30 21:30:17 --> Page Missing: user/images/events-picture4.jpg
ERROR - 2014-04-30 21:30:17 --> Page Missing: user/images/events-picture5.jpg
ERROR - 2014-04-30 21:31:10 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:31:34 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:33:49 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:35:05 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:35:58 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:44:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
                OR (friend_id = 2 AND user_id = )' at line 5 - Invalid query: 
                SELECT fl.status , if(user_id ='' ,s.requester,s.responder) as status_label
                FROM default_friend_list as fl
                INNER JOIN default_friend_status as s
                ON s.status = fl.status
                WHERE (user_id = 2 AND friend_id = )
                OR (friend_id = 2 AND user_id = )
            
ERROR - 2014-04-30 21:45:40 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\partials\metadata.html 35
ERROR - 2014-04-30 21:45:51 --> Severity: Notice  --> Undefined variable: user_id C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\user.php 38
ERROR - 2014-04-30 21:45:51 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:51:19 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:51:54 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:52:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND friend_id = 1)
                OR (friend_id =  AND user_id = 1)' at line 5 - Invalid query: 
                SELECT fl.status , if(user_id ='1' ,s.requester,s.responder) as status_label
                FROM default_friend_list as fl
                INNER JOIN default_friend_status as s
                ON s.status = fl.status
                WHERE (user_id =  AND friend_id = 1)
                OR (friend_id =  AND user_id = 1)
            
ERROR - 2014-04-30 21:53:01 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:55:17 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:56:21 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:57:15 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:58:26 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:58:42 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:59:20 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:59:32 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 21:59:45 --> Page Missing: followers/create
ERROR - 2014-04-30 22:05:32 --> Plugin method "count" does not exist on class "Plugin_Profile".
ERROR - 2014-04-30 22:06:05 --> Plugin method "count" does not exist on class "Plugin_Profile".
