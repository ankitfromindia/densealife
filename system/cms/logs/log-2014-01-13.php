<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-01-13 20:08:10 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\shared_addons\libraries\Threaded.php 65
ERROR - 2014-01-13 20:08:10 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\views\event.php 105
ERROR - 2014-01-13 20:08:10 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\system\cms\modules\users\models\profile_m.php 90
ERROR - 2014-01-13 20:08:10 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\system\cms\modules\users\models\profile_m.php 95
ERROR - 2014-01-13 20:08:10 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\system\cms\modules\users\models\profile_m.php 98
ERROR - 2014-01-13 20:08:10 --> Query error: Unknown column 'l.user_id' in 'where clause' - Invalid query: SELECT *
                            FROM default_event_followers AS def
                            LEFT JOIN default_friend_list AS fl ON def.user_id = fl.user_id
                            AND fl.user_id !=''
                            WHERE event_slug
                            IN (
                                SELECT event_slug
                                FROM default_event_followers AS def2
                                WHERE def2.user_id =''
                                GROUP BY event_slug
                            )
                            AND def.user_id !=''
                            AND l.user_id IS NULL
                            GROUP BY def.user_id
ERROR - 2014-01-13 20:08:42 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\shared_addons\libraries\Threaded.php 65
ERROR - 2014-01-13 20:08:42 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\views\event.php 105
ERROR - 2014-01-13 20:08:42 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\system\cms\modules\users\models\profile_m.php 90
ERROR - 2014-01-13 20:08:42 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\system\cms\modules\users\models\profile_m.php 95
ERROR - 2014-01-13 20:08:42 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\system\cms\modules\users\models\profile_m.php 98
ERROR - 2014-01-13 20:09:23 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\shared_addons\libraries\Threaded.php 65
ERROR - 2014-01-13 20:09:23 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\views\event.php 105
ERROR - 2014-01-13 20:09:23 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\system\cms\modules\users\models\profile_m.php 90
ERROR - 2014-01-13 20:09:23 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\system\cms\modules\users\models\profile_m.php 95
ERROR - 2014-01-13 20:09:23 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\system\cms\modules\users\models\profile_m.php 98
ERROR - 2014-01-13 20:10:33 --> Severity: Notice  --> Undefined property: stdClass::$display_name C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 7
ERROR - 2014-01-13 20:12:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'INNER JOIN default_profiles AS P ON P.user_id = def.user_id 
                   ' at line 14 - Invalid query: SELECT def.user_id
                            FROM default_event_followers AS def
                            LEFT JOIN default_friend_list AS fl ON def.user_id = fl.user_id
                            AND fl.user_id !='1'
                            WHERE event_slug
                            IN (
                                SELECT event_slug
                                FROM default_event_followers AS def2
                                WHERE def2.user_id ='1'
                                GROUP BY event_slug
                            )
                            AND def.user_id !='1'
                            AND fl.user_id IS NULL
                            INNER JOIN default_profiles AS P ON P.user_id = def.user_id 
                            GROUP BY def.user_id
ERROR - 2014-01-13 20:15:54 --> Severity: Notice  --> Undefined property: stdClass::$display_name C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 7
ERROR - 2014-01-13 20:15:54 --> Severity: Notice  --> Undefined property: stdClass::$display_name C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 7
ERROR - 2014-01-13 20:15:54 --> Severity: Notice  --> Undefined property: stdClass::$display_name C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\widgets\friend_suggestions\views\display.php 7
ERROR - 2014-01-13 20:34:51 --> Page Missing: add
ERROR - 2014-01-13 20:37:25 --> Page Missing: system/cms/themes/pyrocms/img/login-logo.png
ERROR - 2014-01-13 20:37:30 --> Page Missing: system/cms/themes/pyrocms/img/login-logo.png
ERROR - 2014-01-13 20:37:47 --> Page Missing: system/cms/themes/pyrocms/img/login-logo.png
ERROR - 2014-01-13 20:37:49 --> Page Missing: system/cms/themes/pyrocms/img/login-logo.png
ERROR - 2014-01-13 20:37:53 --> Page Missing: system/cms/themes/pyrocms/img/login-logo.png
ERROR - 2014-01-13 20:38:46 --> Page Missing: system/cms/themes/pyrocms/img/login-logo.png
ERROR - 2014-01-13 20:52:00 --> Page Missing: admin/eventsmanager
ERROR - 2014-01-13 20:53:10 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 20:54:05 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 20:55:50 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 20:56:10 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 20:56:50 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 20:57:09 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 20:57:36 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 20:59:11 --> Page Missing: admin/eventsmanager/admin_categories
ERROR - 2014-01-13 20:59:27 --> Page Missing: admin/eventsmanager/admin_categories
ERROR - 2014-01-13 21:00:51 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 21:01:03 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 21:02:09 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 21:02:12 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 21:02:12 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 21:02:13 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 21:02:13 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 21:02:13 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 21:02:14 --> Page Missing: admin/eventsmanager/categories
ERROR - 2014-01-13 21:22:43 --> Page Missing: eventsmanager/this-is-the-first-category
ERROR - 2014-01-13 21:24:12 --> Page Missing: eventsmanager/past
ERROR - 2014-01-13 21:24:44 --> Page Missing: eventsmanager/edit/this-is-the-first-category
ERROR - 2014-01-13 21:25:36 --> Severity: Notice  --> Undefined index: category_id C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\models\eventsmanager_m.php 172
ERROR - 2014-01-13 21:25:36 --> Severity: Notice  --> Undefined index: sub_category_id C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\models\eventsmanager_m.php 173
ERROR - 2014-01-13 21:25:36 --> Severity: Notice  --> Undefined index: cover_photo C:\xampp\htdocs\pyrocms\addons\default\modules\eventsmanager\models\eventsmanager_m.php 183
ERROR - 2014-01-13 21:25:36 --> Query error: Column 'category_id' cannot be null - Invalid query: UPDATE `default_events` SET `category_id` = NULL, `sub_category_id` = NULL, `title` = 'this is the first category', `slug` = 'this-is-the-first-category', `description` = 'this is the first event', `place` = 'Gurgaon', `start_date` = '2014-01-30 19:58:00', `end_date` = '2014-01-30 20:58:00', `end_date_defined` = '0', `enable_comments` = '1', `published` = '1', `cover_photo` = NULL WHERE `id` =  '1'
ERROR - 2014-01-13 21:37:55 --> Page Missing: stylesheet.css
ERROR - 2014-01-13 21:37:55 --> Page Missing: images/logoname.png
ERROR - 2014-01-13 21:37:56 --> Page Missing: images/facebook.png
ERROR - 2014-01-13 21:37:56 --> Page Missing: images/twitter.png
ERROR - 2014-01-13 21:37:56 --> Page Missing: images/insagram.png
ERROR - 2014-01-13 21:37:56 --> Page Missing: images/logo.png
ERROR - 2014-01-13 21:37:57 --> Page Missing: images/header-image.png
ERROR - 2014-01-13 21:37:57 --> Page Missing: images/event-image.png
ERROR - 2014-01-13 21:44:13 --> Page Missing: images/header-image.png
ERROR - 2014-01-13 21:44:13 --> Page Missing: images/logoname.png
ERROR - 2014-01-13 21:44:14 --> Page Missing: images/facebook.png
ERROR - 2014-01-13 21:44:14 --> Page Missing: images/insagram.png
ERROR - 2014-01-13 21:44:14 --> Page Missing: images/logo.png
ERROR - 2014-01-13 21:44:15 --> Page Missing: images/twitter.png
ERROR - 2014-01-13 21:44:15 --> Page Missing: images/event-image.png
ERROR - 2014-01-13 21:44:15 --> Page Missing: images/header-image.png
ERROR - 2014-01-13 21:47:05 --> Page Missing: images/facebook.png
ERROR - 2014-01-13 21:47:05 --> Page Missing: images/twitter.png
ERROR - 2014-01-13 21:47:05 --> Page Missing: images/logo.png
ERROR - 2014-01-13 21:47:05 --> Page Missing: images/logoname.png
ERROR - 2014-01-13 21:47:06 --> Page Missing: images/header-image.png
ERROR - 2014-01-13 21:47:06 --> Page Missing: images/insagram.png
ERROR - 2014-01-13 21:47:06 --> Page Missing: images/event-image.png
ERROR - 2014-01-13 21:47:07 --> Page Missing: images/facebook.png
ERROR - 2014-01-13 21:47:56 --> Page Missing: images/event-image.png
ERROR - 2014-01-13 21:48:20 --> Page Missing: images/event-image.png
