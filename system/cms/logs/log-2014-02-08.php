<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-02-08 11:09:12 --> Page Missing: addons/default/themes/densealife/css/images/ui-bg_glass_75_e6e6e6_1x400.png
ERROR - 2014-02-08 11:09:13 --> Page Missing: addons/default/themes/densealife/css/images/ui-bg_glass_55_fbf9ee_1x400.png
ERROR - 2014-02-08 11:09:13 --> Page Missing: addons/default/themes/densealife/css/images/ui-icons_222222_256x240.png
ERROR - 2014-02-08 11:09:14 --> Page Missing: addons/default/themes/densealife/css/images/ui-bg_highlight-soft_75_cccccc_1x100.png
ERROR - 2014-02-08 11:09:15 --> Page Missing: addons/default/themes/densealife/css/images/ui-bg_flat_75_ffffff_40x100.png
ERROR - 2014-02-08 11:09:15 --> Page Missing: addons/default/themes/densealife/css/images/ui-bg_glass_75_dadada_1x400.png
ERROR - 2014-02-08 19:28:56 --> Page Missing: addons/default/themes/densealife/css/images/ui-bg_glass_55_fbf9ee_1x400.png
ERROR - 2014-02-08 19:28:57 --> Page Missing: addons/default/themes/densealife/css/images/ui-bg_glass_75_e6e6e6_1x400.png
ERROR - 2014-02-08 19:28:57 --> Page Missing: addons/default/themes/densealife/css/images/ui-icons_222222_256x240.png
ERROR - 2014-02-08 19:28:58 --> Page Missing: addons/default/themes/densealife/css/images/ui-bg_highlight-soft_75_cccccc_1x100.png
ERROR - 2014-02-08 19:28:58 --> Page Missing: addons/default/themes/densealife/css/images/ui-bg_flat_75_ffffff_40x100.png
ERROR - 2014-02-08 19:28:59 --> Page Missing: addons/default/themes/densealife/css/images/ui-bg_glass_75_dadada_1x400.png
ERROR - 2014-02-08 19:34:49 --> Severity: Notice  --> Undefined property: stdClass::$status C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\friend_suggestions.php 62
ERROR - 2014-02-08 19:34:49 --> Severity: Notice  --> Undefined property: stdClass::$status C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\friend_suggestions.php 62
ERROR - 2014-02-08 19:34:49 --> Severity: Notice  --> Undefined property: stdClass::$status C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\friend_suggestions.php 62
ERROR - 2014-02-08 19:34:49 --> Severity: Notice  --> Undefined property: stdClass::$status C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-02-08 19:34:49 --> Severity: Notice  --> Undefined property: stdClass::$status C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-02-08 19:34:49 --> Severity: Notice  --> Undefined property: stdClass::$status C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 9
ERROR - 2014-02-08 19:44:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '//LEFT JOIN default_friend_list AS F ON P.user_id = F.friend_id
               ' at line 3 - Invalid query: 
                        SELECT P.user_id as user_id, P.display_name as name
                        FROM default_profiles AS P 
                        //LEFT JOIN default_friend_list AS F ON P.user_id = F.friend_id
                        WHERE P.user_id IN(
                                            SELECT t.user_id
                                            FROM default_trends AS t
                                            LEFT JOIN default_friend_list AS fl ON t.user_id = fl.user_id
                                            AND fl.user_id !='26'
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_trends AS def2
                                                WHERE def2.user_id ='26'
                                                GROUP BY entry_id
                                            )
                                            AND t.user_id !='26'
                                            AND (fl.user_id IS NULL OR fl.status !='friend')
                                            
                                            GROUP BY t.user_id
                                        )
                        LIMIT 5
ERROR - 2014-02-08 21:10:07 --> Severity: 4096  --> Object of class Friend_m could not be converted to string C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 608
ERROR - 2014-02-08 21:10:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DISTINCT COUNT(friend_id) as n, `p`.*, *
FROM (`default_friend_list`, `default_f' at line 1 - Invalid query: SELECT `user_id`, DISTINCT COUNT(friend_id) as n, `p`.*, *
FROM (`default_friend_list`, `default_friend_list` as `fl`, `default_friend_list`)
INNER JOIN `default_profiles` as `p` ON `p`.`user_id`=`fl`.`friend_id`
WHERE `friend_id` =  '26'
AND `p`.`user_id` IN () 
AND `friend_id`!= '26'
GROUP BY `friend_id`
HAVING  =  '26'
ORDER BY `start_date` asc
ERROR - 2014-02-08 21:11:23 --> Severity: Warning  --> Missing argument 1 for MY_Model::get(), called in C:\xampp\htdocs\pyrocms\addons\default\modules\friend\models\friend_m.php on line 357 and defined C:\xampp\htdocs\pyrocms\system\cms\core\MY_Model.php 132
ERROR - 2014-02-08 21:11:23 --> Severity: Notice  --> Undefined variable: id C:\xampp\htdocs\pyrocms\system\cms\core\MY_Model.php 134
ERROR - 2014-02-08 21:11:23 --> Query error: Not unique table/alias: 'default_friend_list' - Invalid query: SELECT `user_id`
FROM (`default_friend_list`, `default_friend_list`)
WHERE `friend_id` =  '26'
AND `id` IS NULL
ERROR - 2014-02-08 21:17:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*
FROM (`default_friend_list` as `fl`, `default_friend_list`)
INNER JOIN `defaul' at line 1 - Invalid query: SELECT DISTINCT COUNT(friend_id) as n, `p`.*, *
FROM (`default_friend_list` as `fl`, `default_friend_list`)
INNER JOIN `default_profiles` as `p` ON `p`.`user_id`=`fl`.`friend_id`
WHERE `p`.`user_id` IN ('SELECT `user_id`\nFROM `default_friend_list`\nWHERE `friend_id` =  \'26\'') 
AND `friend_id`!= '26'
GROUP BY `friend_id`
HAVING  =  '26'
ORDER BY `start_date` asc
ERROR - 2014-02-08 21:18:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*
FROM (`default_friend_list` as `fl`, `default_friend_list`)
INNER JOIN `defaul' at line 1 - Invalid query: SELECT DISTINCT COUNT(friend_id) as n, `p`.*, *
FROM (`default_friend_list` as `fl`, `default_friend_list`)
INNER JOIN `default_profiles` as `p` ON `p`.`user_id`=`fl`.`friend_id`
WHERE `p`.`user_id` IN ('SELECT `user_id`\nFROM `default_friend_list`\nWHERE `friend_id` =  \'26\'') 
AND `friend_id`!= '26'
GROUP BY `friend_id`
HAVING  =  '26'
ORDER BY `start_date` asc
ERROR - 2014-02-08 21:18:58 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\pyrocms\addons\default\modules\friend\models\friend_m.php 84
ERROR - 2014-02-08 21:18:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*
FROM `default_friend_list`
INNER JOIN `default_profiles` as `p` ON `p`.`user_i' at line 1 - Invalid query: SELECT DISTINCT COUNT(friend_id) as n, `p`.*, *
FROM `default_friend_list`
INNER JOIN `default_profiles` as `p` ON `p`.`user_id`=`default_fl`.`friend_id`
WHERE `p`.`user_id` IN ('SELECT `user_id`\nFROM `default_friend_list`\nWHERE `friend_id` =  \'26\'') 
AND `friend_id`!= '26'
GROUP BY `friend_id`
HAVING  =  '26'
ORDER BY `start_date` asc
