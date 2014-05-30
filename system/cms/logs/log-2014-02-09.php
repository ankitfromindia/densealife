<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-02-09 16:49:47 --> Query error: Unknown column 'module' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `default_trends`
WHERE `module` =  'eventsmanager'
AND `entry_key` =  'eventsmanager:event'
AND `trend` =  1
AND `entry_id` =  '5'
AND `user_id` =  '26'
ERROR - 2014-02-09 17:01:59 --> Severity: Notice  --> Undefined property: stdClass::$uri C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\layouts\event.php 49
ERROR - 2014-02-09 18:31:34 --> Query error: Field 'about' doesn't have a default value - Invalid query: INSERT INTO `default_events` (`category_id`, `sub_category_id`, `title`, `slug`, `description`, `place`, `author`, `start_date`, `end_date`, `end_date_defined`, `enable_comments`, `published`, `cover_photo`) VALUES ('7', '9', 'dfghjkl', 'dfghjkl', 'this is description', '', '1', '2014-02-09 18:30:00', '2014-02-09 19:30:00', '0', '0', '0', NULL)
ERROR - 2014-02-09 18:40:10 --> Unable to load the requested class: settings
ERROR - 2014-02-09 18:40:37 --> Query error: Table 'pyrocms.settings' doesn't exist - Invalid query: SELECT *, IF(`value` = "", `default`, `value`) as `value`
FROM `settings`
ORDER BY `order` DESC
ERROR - 2014-02-09 18:41:03 --> Unable to load the requested class: setting
ERROR - 2014-02-09 18:41:48 --> Unable to load the requested class: settings
ERROR - 2014-02-09 18:42:10 --> Unable to load the requested class: settings
ERROR - 2014-02-09 18:42:36 --> Unable to load the requested class: settings
ERROR - 2014-02-09 18:42:57 --> Unable to load the requested class: settings
ERROR - 2014-02-09 18:48:54 --> Unable to load the requested class: settings
ERROR - 2014-02-09 19:14:03 --> Query error: Incorrect datetime value: '' for column 'start_date' at row 1 - Invalid query: INSERT INTO `default_events` (`category_id`, `sub_category_id`, `title`, `slug`, `about`, `website`, `affiliations`, `description`, `place`, `author`, `start_date`, `end_date`, `end_date_defined`, `enable_comments`, `published`, `cover_photo`) VALUES ('7', '9', 'afasdfadsf', 'afasdfadsf', 'fasdfads f', 'http://www.adsfasfasdf.com', 'fas fasdf asdf', 'afsasdfadsf', '', '1', '', '', '0', '0', '0', NULL)
ERROR - 2014-02-09 19:44:04 --> Query error: Column 'category_id' cannot be null - Invalid query: UPDATE `default_events` SET `category_id` = NULL, `sub_category_id` = NULL, `title` = NULL, `slug` = NULL, `about` = NULL, `website` = NULL, `affiliations` = NULL, `description` = NULL, `place` = NULL, `author` = NULL, `start_date` = '0000-00-00 00:00:00', `end_date` = '0000-00-00 00:00:00', `end_date_defined` = NULL, `enable_comments` = NULL, `published` = NULL, `cover_photo` = NULL WHERE `id` =  '5'
