<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-07-29 20:34:15 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\pyrocms\addons\default\themes\densealife\views\partials\metadata.html 35
ERROR - 2014-07-29 20:34:55 --> The path to the image is not correct.
ERROR - 2014-07-29 20:34:55 --> Your server does not support the GD function required to process this type of image.
ERROR - 2014-07-29 20:34:55 --> The path to the image is not correct.
ERROR - 2014-07-29 20:34:55 --> Your server does not support the GD function required to process this type of image.
ERROR - 2014-07-29 20:36:45 --> Page Missing: files/large
ERROR - 2014-07-29 20:37:08 --> Page Missing: eventsmanager/demo1
ERROR - 2014-07-29 20:37:23 --> Page Missing: files/large
ERROR - 2014-07-29 20:41:26 --> Page Missing: files/large
ERROR - 2014-07-29 20:41:31 --> Page Missing: eventsmanager/demo1
ERROR - 2014-07-29 20:42:42 --> Page Missing: eventsmanager/demo1
ERROR - 2014-07-29 20:43:02 --> Page Missing: eventsmanager/demo1
ERROR - 2014-07-29 20:43:11 --> Page Missing: eventsmanager/demo1
ERROR - 2014-07-29 20:43:43 --> Page Missing: eventsmanager/demo1
ERROR - 2014-07-29 20:44:50 --> Page Missing: eventsmanager/demo1
ERROR - 2014-07-29 20:46:07 --> Page Missing: files/large
ERROR - 2014-07-29 21:23:00 --> Page Missing: admin/eventsmanager/approval/index
ERROR - 2014-07-29 21:25:37 --> Page Missing: admin/eventsmanager/approval/index
ERROR - 2014-07-29 21:27:38 --> Page Missing: admin/eventsmanager/approval/index
ERROR - 2014-07-29 21:27:42 --> Page Missing: admin/eventsmanager/approval
ERROR - 2014-07-29 21:28:31 --> Page Missing: admin/eventsmanager/approval
ERROR - 2014-07-29 21:28:37 --> Page Missing: admin/eventsmanager/approve
ERROR - 2014-07-29 21:29:33 --> Page Missing: admin/eventsmanager
ERROR - 2014-07-29 21:45:39 --> Query error: Column 'category_id' cannot be null - Invalid query: UPDATE `default_events` SET `category_id` = NULL, `sub_category_id` = NULL, `title` = NULL, `slug` = NULL, `about` = NULL, `website` = NULL, `affiliations` = NULL, `description` = NULL, `place` = NULL, `author` = NULL, `start_date` = '0000-00-00 00:00:00', `end_date` = '0000-00-00 00:00:00', `end_date_defined` = NULL, `enable_comments` = NULL, `published` = 1, `cover_photo` = NULL, `youtube_videos` = NULL, `comment_permission` = 'CREATER', `comment_approval` = 'NO' WHERE `id` =  '36'
ERROR - 2014-07-29 21:48:03 --> Query error: Column 'category_id' cannot be null - Invalid query: UPDATE `default_events` SET `category_id` = NULL, `sub_category_id` = NULL, `title` = NULL, `slug` = NULL, `about` = NULL, `website` = NULL, `affiliations` = NULL, `description` = NULL, `place` = NULL, `author` = NULL, `start_date` = '0000-00-00 00:00:00', `end_date` = '0000-00-00 00:00:00', `end_date_defined` = NULL, `enable_comments` = NULL, `published` = 1, `cover_photo` = NULL, `youtube_videos` = NULL, `comment_permission` = 'CREATER', `comment_approval` = 'NO' WHERE `id` =  '36'
ERROR - 2014-07-29 21:52:06 --> Query error: Incorrect datetime value: '1406656326' for column 'published_at' at row 1 - Invalid query: UPDATE `default_events` SET `published` = 1, `published_at` = 1406656326 WHERE `id` =  '36'
ERROR - 2014-07-29 21:54:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ASC, `id` ASC, `start_date` asc' at line 3 - Invalid query: SELECT *
FROM `default_events`
ORDER BY `published_at` DESC ASC, `id` ASC, `start_date` asc
ERROR - 2014-07-29 21:54:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ASC, `id` ASC ASC, `start_date` asc' at line 3 - Invalid query: SELECT *
FROM `default_events`
ORDER BY `published_at` DESC ASC, `id` ASC ASC, `start_date` asc
