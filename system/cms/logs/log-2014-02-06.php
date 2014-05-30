<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-02-06 17:43:28 --> Page Missing: eventsmanager/videos/videos/movie.mp4
ERROR - 2014-02-06 17:43:29 --> Page Missing: eventsmanager/videos/videos/movie.mp4
ERROR - 2014-02-06 17:43:31 --> Page Missing: eventsmanager/videos/videos/movie.mp4
ERROR - 2014-02-06 17:43:31 --> Page Missing: eventsmanager/videos/videos/movie.mp4
ERROR - 2014-02-06 17:43:32 --> Page Missing: eventsmanager/videos/videos/movie.mp4
ERROR - 2014-02-06 17:43:33 --> Page Missing: eventsmanager/videos/videos/movie.mp4
ERROR - 2014-02-06 17:43:33 --> Page Missing: eventsmanager/videos/videos/movie.ogg
ERROR - 2014-02-06 17:43:34 --> Page Missing: eventsmanager/videos/videos/movie.ogg
ERROR - 2014-02-06 17:43:35 --> Page Missing: eventsmanager/videos/videos/movie.ogg
ERROR - 2014-02-06 17:43:36 --> Page Missing: eventsmanager/videos/videos/movie.ogg
ERROR - 2014-02-06 17:43:36 --> Page Missing: eventsmanager/videos/videos/movie.ogg
ERROR - 2014-02-06 17:43:37 --> Page Missing: eventsmanager/videos/videos/movie.ogg
ERROR - 2014-02-06 17:43:43 --> Page Missing: eventsmanager/videos/videos/movie.mp4
ERROR - 2014-02-06 17:43:44 --> Page Missing: eventsmanager/videos/videos/movie.mp4
ERROR - 2014-02-06 17:43:45 --> Page Missing: eventsmanager/videos/videos/movie.mp4
ERROR - 2014-02-06 17:43:45 --> Page Missing: eventsmanager/videos/videos/movie.mp4
ERROR - 2014-02-06 17:43:46 --> Page Missing: eventsmanager/videos/videos/movie.ogg
ERROR - 2014-02-06 17:43:47 --> Page Missing: eventsmanager/videos/videos/movie.mp4
ERROR - 2014-02-06 17:43:47 --> Page Missing: eventsmanager/videos/videos/movie.mp4
ERROR - 2014-02-06 17:43:48 --> Page Missing: eventsmanager/videos/videos/movie.ogg
ERROR - 2014-02-06 17:43:49 --> Page Missing: eventsmanager/videos/videos/movie.ogg
ERROR - 2014-02-06 17:43:49 --> Page Missing: eventsmanager/videos/videos/movie.ogg
ERROR - 2014-02-06 17:43:50 --> Page Missing: eventsmanager/videos/videos/movie.ogg
ERROR - 2014-02-06 17:43:51 --> Page Missing: eventsmanager/videos/videos/movie.ogg
ERROR - 2014-02-06 17:49:24 --> Query error: Data truncated for column 'status' at row 1 - Invalid query: INSERT INTO `default_friend_list` (`user_id`, `friend_id`, `requested_by`, `status`) VALUES ('1', '3', '1', 'request_sent')
ERROR - 2014-02-06 18:01:19 --> Query error: Unknown column 'def2' in 'where clause' - Invalid query: 
                        SELECT * 
                        FROM default_profiles 
                        WHERE user_id IN(
                                            SELECT def.user_id
                                            FROM default_trends AS def
                                            LEFT JOIN default_friend_list AS fl ON def.user_id = fl.user_id
                                            AND fl.user_id !='1'
                                            AND fl.status !='friend'
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_trends AS def2
                                                WHERE def2.user_id ='1'
                                                AND def2
                                                GROUP BY entry_id
                                            )
                                            AND def.user_id !='1'
                                            AND fl.user_id IS NULL 
                                            GROUP BY def.user_id
                                        )
ERROR - 2014-02-06 18:17:28 --> Query error: Unknown column 'def.user_id' in 'group statement' - Invalid query: 
                        SELECT * 
                        FROM default_profiles 
                        WHERE user_id IN(
                                            SELECT t.user_id
                                            FROM default_trends AS t
                                            LEFT JOIN default_friend_list AS fl ON t.user_id = fl.user_id
                                            AND fl.user_id !='1'
                                            AND fl.status !='friend'
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_trends AS def2
                                                WHERE def2.user_id ='1'
                                                GROUP BY entry_id
                                            )
                                            AND t.user_id !='1'
                                            AND fl.user_id IS NULL 
                                            GROUP BY def.user_id
                                        )
ERROR - 2014-02-06 18:25:11 --> Query error: Column 'user_id' in IN/ALL/ANY subquery is ambiguous - Invalid query: 
                        SELECT P.user_id as user_id, P.display_name as name, F.status as  status
                        FROM default_profiles AS P 
                        LEFT JOIN default_friend_list AS F ON P.user_id = F.user_id
                        WHERE user_id IN(
                                            SELECT t.user_id
                                            FROM default_trends AS t
                                            LEFT JOIN default_friend_list AS fl ON t.user_id = fl.user_id
                                            AND fl.user_id !='1'
                                            WHERE entry_id
                                            IN (
                                                SELECT entry_id
                                                FROM default_trends AS def2
                                                WHERE def2.user_id ='1'
                                                GROUP BY entry_id
                                            )
                                            AND t.user_id !='1'
                                            AND (fl.user_id IS NULL OR fl.status !='friend')
                                            
                                            GROUP BY t.user_id
                                        )
ERROR - 2014-02-06 18:35:14 --> Severity: Notice  --> Undefined property: stdClass::$display_name C:\xampp\htdocs\pyrocms\addons\default\modules\friend\widgets\friend_suggestions\views\display.php 7
ERROR - 2014-02-06 19:41:28 --> Query error: Data truncated for column 'reference_id' at row 1 - Invalid query: INSERT INTO `default_notifications` (`user_id`, `reference_id`, `type`) VALUES ('3', '60f063', 'friend')
ERROR - 2014-02-06 19:43:54 --> Query error: Unknown column 'reference_id' in 'field list' - Invalid query: INSERT INTO `default_notifications` (`user_id`, `reference_id`, `type`) VALUES ('3', 'b422d9', 'friend')
ERROR - 2014-02-06 19:45:14 --> Severity: Notice  --> Undefined variable: thread C:\xampp\htdocs\pyrocms\addons\default\modules\friend\models\friend_m.php 44
ERROR - 2014-02-06 19:45:14 --> Query error: Column 'thread_id' cannot be null - Invalid query: INSERT INTO `default_friend_list` (`user_id`, `friend_id`, `thread_id`, `status`) VALUES ('1', '3', NULL, 'request_sent')
