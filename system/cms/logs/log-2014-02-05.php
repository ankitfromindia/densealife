<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-02-05 20:15:05 --> Plugin method "trending" does not exist on class "Plugin_Eventsmanager".
ERROR - 2014-02-05 20:15:06 --> Plugin method "trending" does not exist on class "Plugin_Eventsmanager".
ERROR - 2014-02-05 20:15:47 --> Query error: Table 'pyrocms.default_event_trends' doesn't exist - Invalid query: SELECT `e`.*, count(follow) as follows
FROM `default_events` as `e`
LEFT JOIN `default_event_trends` as `et` ON `et`.`event_id` = `e`.`id`
WHERE `e`.`published` =  1
GROUP BY `e`.`slug`
ORDER BY `et`.`trend` DESC, `e`.`title` ASC
ERROR - 2014-02-05 20:16:25 --> Query error: Unknown column 'follow' in 'field list' - Invalid query: SELECT `e`.*, count(follow) as follows
FROM `default_events` as `e`
LEFT JOIN `default_trends` as `et` ON `et`.`event_id` = `e`.`id`
WHERE `e`.`published` =  1
GROUP BY `e`.`slug`
ORDER BY `et`.`trend` DESC, `e`.`title` ASC
ERROR - 2014-02-05 20:16:40 --> Query error: Unknown column 'et.event_id' in 'on clause' - Invalid query: SELECT `e`.*, count(trend) as trend
FROM `default_events` as `e`
LEFT JOIN `default_trends` as `et` ON `et`.`event_id` = `e`.`id`
WHERE `e`.`published` =  1
GROUP BY `e`.`slug`
ORDER BY `et`.`trend` DESC, `e`.`title` ASC
ERROR - 2014-02-05 20:33:59 --> Query error: Table 'pyrocms.default_event_trends' doesn't exist - Invalid query: 
                        SELECT * 
                        FROM default_profiles 
                        WHERE user_id IN(
                                            SELECT def.user_id
                                            FROM default_event_trends AS def
                                            LEFT JOIN default_friend_list AS fl ON def.user_id = fl.user_id
                                            AND fl.user_id !='3'
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_event_trends AS def2
                                                WHERE def2.user_id ='3'
                                                GROUP BY event_id
                                            )
                                            AND def.user_id !='3'
                                            AND fl.user_id IS NULL 
                                            GROUP BY def.user_id
                                        )
ERROR - 2014-02-05 20:34:16 --> Query error: Unknown column 'event_id' in 'group statement' - Invalid query: 
                        SELECT * 
                        FROM default_profiles 
                        WHERE user_id IN(
                                            SELECT def.user_id
                                            FROM default_trends AS def
                                            LEFT JOIN default_friend_list AS fl ON def.user_id = fl.user_id
                                            AND fl.user_id !='3'
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_trends AS def2
                                                WHERE def2.user_id ='3'
                                                GROUP BY event_id
                                            )
                                            AND def.user_id !='3'
                                            AND fl.user_id IS NULL 
                                            GROUP BY def.user_id
                                        )
ERROR - 2014-02-05 20:42:53 --> Page Missing: eventsmanager/friend
ERROR - 2014-02-05 20:43:26 --> Page Missing: eventsmanager/friend
ERROR - 2014-02-05 20:44:26 --> Page Missing: eventsmanager/friend/add_freind
ERROR - 2014-02-05 20:44:54 --> Page Missing: eventsmanager/friend/add_freind
ERROR - 2014-02-05 20:45:27 --> Page Missing: eventsmanager/friend/add_freind
ERROR - 2014-02-05 20:46:13 --> Page Missing: eventsmanager/friend/add_freind
ERROR - 2014-02-05 20:46:24 --> Page Missing: eventsmanager/friend/add_freind
ERROR - 2014-02-05 20:48:05 --> Page Missing: eventsmanager/friend/add_freind/1
ERROR - 2014-02-05 20:48:37 --> Page Missing: eventsmanager/friend/add_freind/1
ERROR - 2014-02-05 20:50:17 --> Page Missing: eventsmanager/friend
ERROR - 2014-02-05 20:50:45 --> Page Missing: eventsmanager/friend
ERROR - 2014-02-05 20:55:52 --> Page Missing: friend
ERROR - 2014-02-05 20:59:04 --> Severity: Warning  --> unlink(C:/xampp/htdocs/pyrocms/uploads/default/friend.zip): Permission denied C:\xampp\htdocs\pyrocms\system\cms\modules\addons\controllers\admin_modules.php 106
ERROR - 2014-02-05 21:01:25 --> Severity: Warning  --> unlink(C:/xampp/htdocs/pyrocms/uploads/default/friend.zip): Permission denied C:\xampp\htdocs\pyrocms\system\cms\modules\addons\controllers\admin_modules.php 106
ERROR - 2014-02-05 21:03:36 --> Severity: Warning  --> unlink(C:/xampp/htdocs/pyrocms/uploads/default/friend.zip): Permission denied C:\xampp\htdocs\pyrocms\system\cms\modules\addons\controllers\admin_modules.php 106
ERROR - 2014-02-05 21:04:54 --> Severity: Warning  --> unlink(C:/xampp/htdocs/pyrocms/uploads/default/friend.zip): Permission denied C:\xampp\htdocs\pyrocms\system\cms\modules\addons\controllers\admin_modules.php 106
ERROR - 2014-02-05 21:05:10 --> Query error: Table 'pyrocms.default_firesale_routes' doesn't exist - Invalid query: SELECT *
FROM `default_firesale_routes`
WHERE `slug` =  'search'
ERROR - 2014-02-05 21:29:13 --> Page Missing: friend
ERROR - 2014-02-05 21:30:09 --> Page Missing: friend
ERROR - 2014-02-05 21:35:44 --> Page Missing: eventsmanager/friend/add_friend
ERROR - 2014-02-05 21:36:28 --> Severity: Notice  --> Undefined property: CI::$friend_m C:\xampp\htdocs\pyrocms\system\cms\libraries\MX\Controller.php 57
ERROR - 2014-02-05 21:46:45 --> Severity: Notice  --> Undefined variable: friend_id C:\xampp\htdocs\pyrocms\addons\default\modules\friend\models\friend_m.php 43
ERROR - 2014-02-05 21:46:45 --> Query error: Column 'user_id' cannot be null - Invalid query: INSERT INTO `default_notifications` (`user_id`, `reference_id`, `type`) VALUES (NULL, 1, 'friend')
ERROR - 2014-02-05 21:47:44 --> Severity: Notice  --> Undefined variable: inserted_id C:\xampp\htdocs\pyrocms\addons\default\modules\friend\models\friend_m.php 44
ERROR - 2014-02-05 21:47:44 --> Query error: Column 'reference_id' cannot be null - Invalid query: INSERT INTO `default_notifications` (`user_id`, `reference_id`, `type`) VALUES (1, NULL, 'friend')
