<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-03-06 18:19:35 --> Page Missing: profile/images/profile-pictures1.jpg
ERROR - 2014-03-06 18:19:36 --> Page Missing: profile/images/profile-pictures2.jpg
ERROR - 2014-03-06 18:19:37 --> Page Missing: profile/images/profile-pictures3.jpg
ERROR - 2014-03-06 18:19:37 --> Page Missing: profile/images/profile-pictures4.jpg
ERROR - 2014-03-06 18:19:52 --> Page Missing: densealife-page/images/profile-pictures2.jpg
ERROR - 2014-03-06 18:19:53 --> Page Missing: densealife-page/images/profile-pictures1.jpg
ERROR - 2014-03-06 18:19:53 --> Page Missing: densealife-page/images/profile-pictures4.jpg
ERROR - 2014-03-06 18:19:54 --> Page Missing: densealife-page/images/profile-pictures3.jpg
ERROR - 2014-03-06 18:19:54 --> Page Missing: densealife-page/images/profile-pictures6.jpg
ERROR - 2014-03-06 18:19:55 --> Page Missing: densealife-page/images/profile-pictures5.jpg
ERROR - 2014-03-06 18:19:56 --> Page Missing: densealife-page/images/profile-pictures7.jpg
ERROR - 2014-03-06 18:19:56 --> Page Missing: densealife-page/images/profile-pictures8.jpg
ERROR - 2014-03-06 18:20:18 --> Page Missing: profile/images/profile-pictures2.jpg
ERROR - 2014-03-06 18:20:18 --> Page Missing: profile/images/profile-pictures3.jpg
ERROR - 2014-03-06 18:20:19 --> Page Missing: profile/images/profile-pictures1.jpg
ERROR - 2014-03-06 18:20:19 --> Page Missing: profile/images/profile-pictures4.jpg
ERROR - 2014-03-06 18:23:02 --> Plugin method "favorite" does not exist on class "Plugin_Eventsmanager".
ERROR - 2014-03-06 18:23:10 --> Plugin method "favorite" does not exist on class "Plugin_Eventsmanager".
ERROR - 2014-03-06 19:52:37 --> The path to the image is not correct.
ERROR - 2014-03-06 19:52:37 --> Your server does not support the GD function required to process this type of image.
ERROR - 2014-03-06 20:07:48 --> Query error: Unknown column 'fl.status' in 'where clause' - Invalid query: 
                        SELECT P.user_id as user_id, P.display_name as name
                        FROM default_profiles AS P 
                        LEFT JOIN default_friend_list AS F ON P.user_id = F.friend_id
                        LEFT JOIN default_friend_status AS FS ON F.status = FS.id
                        WHERE P.user_id IN(
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
                        LIMIT 5
ERROR - 2014-03-06 20:08:37 --> Query error: Unknown column 'fl.status' in 'where clause' - Invalid query: 
                        SELECT P.user_id as user_id, P.display_name as name
                        FROM default_profiles AS P 
                        LEFT JOIN default_friend_list AS F ON P.user_id = F.friend_id
                        WHERE P.user_id IN(
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
                        LIMIT 5
