<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-05-22 20:52:11 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\partials\metadata.html 35
ERROR - 2014-05-22 21:02:04 --> Page Missing: eventsmanager/add_friend
ERROR - 2014-05-22 21:05:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 21 - Invalid query: 
                        SELECT P.user_id as user_id,P.display_name as name, username, F.status , if(F.user_id ='1',s.requester,s.responder) as status_label
                        FROM default_profiles AS P 
                        LEFT JOIN default_friend_list AS F ON (P.user_id = F.friend_id OR P.user_id = F.user_id) AND (F.user_id ='1' OR F.friend_id = '1')
                        LEFT JOIN default_friend_status AS s ON s.status = F.status
                        INNER JOIN default_users AS u
                        ON u.id = P.user_id
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
                        AND F.status!='accepted' OR F.status IS NULL
                        AND P.user_id!='1'
                        
                        LIMIT 
ERROR - 2014-05-22 21:17:16 --> Page Missing: css/style.css
ERROR - 2014-05-22 21:18:04 --> Page Missing: css/style.css
ERROR - 2014-05-22 21:18:29 --> Page Missing: css/style.css
ERROR - 2014-05-22 21:19:28 --> Page Missing: themes/densealife/css/style.css
ERROR - 2014-05-22 21:19:46 --> Page Missing: themes/densealife/css/style.css
ERROR - 2014-05-22 21:30:57 --> Severity: Notice  --> Undefined property: stdClass::$is_friend C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\modules\eventsmanager\add_friend.php 15
ERROR - 2014-05-22 21:30:57 --> Severity: Notice  --> Undefined property: stdClass::$status_label C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\modules\eventsmanager\add_friend.php 17
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 5
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 5
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 54
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 54
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 64
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 64
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 88
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 88
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 89
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 89
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 90
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 90
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 91
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 91
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 96
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 96
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 96
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 96
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 97
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 97
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 100
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 100
ERROR - 2014-05-22 22:22:13 --> Severity: Notice  --> Undefined property: CI::$trends C:\xampp\htdocs\pyrocms\system\cms\libraries\MX\Loader.php 276
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 5
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 5
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 54
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 54
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 64
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 64
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 88
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 88
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 89
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 89
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 90
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 90
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 91
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 91
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 96
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 96
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 96
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 96
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 97
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 97
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Undefined variable: event C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 100
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 100
ERROR - 2014-05-22 22:22:50 --> Severity: Notice  --> Undefined property: CI::$trends C:\xampp\htdocs\pyrocms\system\cms\libraries\MX\Loader.php 276
