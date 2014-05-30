<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-02-07 07:54:33 --> Query error: Unknown column 'default_et.trend' in 'order clause' - Invalid query: SELECT `e`.*, count(star.trend) as stars, count(fav.trend) as favs, count(fol.trend) as follows
FROM `default_events` as `e`
LEFT JOIN `default_trends` as `star` ON `star`.`entry_id` = `e`.`id` and `star`.`trend` = "3"
LEFT JOIN `default_trends` as `fav` ON `fav`.`entry_id` = `e`.`id` and `fav`.`trend` = "2"
LEFT JOIN `default_trends` as `fol` ON `fol`.`entry_id` = `e`.`id` and `fol`.`trend` = "1"
WHERE `e`.`published` =  1
GROUP BY `e`.`slug`
ORDER BY `default_et`.`trend` DESC, `e`.`title` ASC
ERROR - 2014-02-07 08:02:20 --> Query error: Unknown column 'star.trend' in 'field list' - Invalid query: SELECT `e`.*, count(star.trend) as stars, count(fav.trend) as favs, count(fol.trend) as follows
FROM `default_events` as `e`
WHERE `e`.`published` =  1
GROUP BY `e`.`slug`
ORDER BY `e`.`title` ASC
ERROR - 2014-02-07 08:19:57 --> Query error: Unknown column 'e.trend' in 'group statement' - Invalid query: SELECT `e`.*, count(star.trend) as stars, count(fav.trend) as favs, count(fol.trend) as follows
FROM `default_events` as `e`
LEFT JOIN `default_trends` as `star` ON `star`.`entry_id` = `e`.`id` and `star`.`trend` = "3"
LEFT JOIN `default_trends` as `fav` ON `fav`.`entry_id` = `e`.`id` and `fav`.`trend` = "2"
LEFT JOIN `default_trends` as `fol` ON `fol`.`entry_id` = `e`.`id` and `fol`.`trend` = "1"
WHERE `e`.`published` =  1
GROUP BY `e`.`trend`
ORDER BY `e`.`title` ASC
ERROR - 2014-02-07 09:04:17 --> Query error: Unknown column 'trend' in 'field list' - Invalid query: SELECT `e`.*, sum(trend) as total
FROM `default_events` as `e`
WHERE `e`.`published` =  1
GROUP BY `default_star`.`trend`
ORDER BY `e`.`title` ASC
ERROR - 2014-02-07 17:50:46 --> Severity: Warning  --> Missing argument 2 for CI_DB_query_builder::join(), called in C:\xampp\htdocs\pyrocms\addons\default\modules\trends\libraries\Trends.php on line 368 and defined C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 330
ERROR - 2014-02-07 17:50:46 --> Severity: Notice  --> Undefined variable: cond C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 353
ERROR - 2014-02-07 17:50:46 --> Severity: Notice  --> Undefined variable: cond C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 374
ERROR - 2014-02-07 17:50:46 --> Severity: Notice  --> Undefined variable: cond C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 378
ERROR - 2014-02-07 17:50:46 --> Severity: Notice  --> Undefined variable: cond C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 380
ERROR - 2014-02-07 17:50:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'USING ()
WHERE `e`.`published` =  1
GROUP BY `default_star`.`trend`
ORDER BY `e`' at line 3 - Invalid query: SELECT `e`.*, sum(trend) as total
FROM `default_events` as `e`
JOIN `default_trends` as  USING ()
WHERE `e`.`published` =  1
GROUP BY `default_star`.`trend`
ORDER BY `e`.`title` ASC
ERROR - 2014-02-07 17:50:47 --> Severity: Warning  --> Missing argument 2 for CI_DB_query_builder::join(), called in C:\xampp\htdocs\pyrocms\addons\default\modules\trends\libraries\Trends.php on line 368 and defined C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 330
ERROR - 2014-02-07 17:50:47 --> Severity: Notice  --> Undefined variable: cond C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 353
ERROR - 2014-02-07 17:50:47 --> Severity: Notice  --> Undefined variable: cond C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 374
ERROR - 2014-02-07 17:50:47 --> Severity: Notice  --> Undefined variable: cond C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 378
ERROR - 2014-02-07 17:50:47 --> Severity: Notice  --> Undefined variable: cond C:\xampp\htdocs\pyrocms\system\codeigniter\database\DB_query_builder.php 380
ERROR - 2014-02-07 17:50:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'USING ()
WHERE `e`.`published` =  1
GROUP BY `default_star`.`trend`
ORDER BY `e`' at line 3 - Invalid query: SELECT `e`.*, sum(trend) as total
FROM `default_events` as `e`
JOIN `default_trends` as  USING ()
WHERE `e`.`published` =  1
GROUP BY `default_star`.`trend`
ORDER BY `e`.`title` ASC
ERROR - 2014-02-07 17:57:21 --> Plugin method "popular" does not exist on class "Plugin_Eventsmanager".
ERROR - 2014-02-07 17:57:22 --> Plugin method "popular" does not exist on class "Plugin_Eventsmanager".
ERROR - 2014-02-07 17:57:51 --> Query error: Unknown column 'e.entry_id' in 'on clause' - Invalid query: SELECT `e`.*, sum(trend) as total
FROM `default_events` as `e`
LEFT JOIN `default_trends` as `t` ON `t`.`entry_id` = `e`.`entry_id`
WHERE `e`.`published` =  1
GROUP BY `default_star`.`trend`
ORDER BY `e`.`title` ASC
ERROR - 2014-02-07 17:58:11 --> Query error: Unknown column 'e.entry_id' in 'on clause' - Invalid query: SELECT `e`.*, sum(trend) as total
FROM `default_events` as `e`
LEFT JOIN `default_trends` as `t` ON `t`.`id` = `e`.`entry_id`
WHERE `e`.`published` =  1
GROUP BY `default_star`.`trend`
ORDER BY `e`.`title` ASC
ERROR - 2014-02-07 17:58:30 --> Query error: Unknown column 'default_star.trend' in 'group statement' - Invalid query: SELECT `e`.*, sum(trend) as total
FROM `default_events` as `e`
LEFT JOIN `default_trends` as `t` ON `t`.`entry_id` = `e`.`id`
WHERE `e`.`published` =  1
GROUP BY `default_star`.`trend`
ORDER BY `e`.`title` ASC
ERROR - 2014-02-07 17:58:45 --> Query error: Unknown column 'default_star.trend' in 'group statement' - Invalid query: SELECT `e`.*, sum(t.trend) as total
FROM `default_events` as `e`
LEFT JOIN `default_trends` as `t` ON `t`.`entry_id` = `e`.`id`
WHERE `e`.`published` =  1
GROUP BY `default_star`.`trend`
ORDER BY `e`.`title` ASC
ERROR - 2014-02-07 18:14:29 --> Severity: Warning  --> Attempt to assign property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\trends\libraries\Trends.php 371
ERROR - 2014-02-07 18:14:29 --> Severity: Warning  --> Attempt to assign property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\trends\libraries\Trends.php 371
ERROR - 2014-02-07 18:14:29 --> Severity: Warning  --> Attempt to assign property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\trends\libraries\Trends.php 371
ERROR - 2014-02-07 18:15:29 --> Severity: Warning  --> Attempt to assign property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\trends\libraries\Trends.php 372
ERROR - 2014-02-07 18:15:29 --> Severity: Warning  --> Attempt to assign property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\trends\libraries\Trends.php 372
ERROR - 2014-02-07 18:15:29 --> Severity: Warning  --> Attempt to assign property of non-object C:\xampp\htdocs\pyrocms\addons\default\modules\trends\libraries\Trends.php 372
