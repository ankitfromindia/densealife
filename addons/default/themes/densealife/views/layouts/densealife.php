<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        {{ theme:partial name='metadata' }}
    </head>

    <body>
        {{ integration:analytics }}
        <?php $module_path = BASE_URL . $this->module_details['path']; ?>
        <div id="wepper-inner"> 
            <!--Start Header-->
            <header id="wepper">
                {{ theme:partial name='head' }}   
            </header>
            <!--End Header--> 
            <!--Start Body Container-->
            <div id="body-container-inner" class="clearfix"> 
                <div class="links-header">
                    <ul class="comman-links link-header-event <?php echo (!isset($type) || $type=='event') ? 'd-block' : 'd-none';?>">
                        <li class="<?php echo (($this->router->fetch_method()=='events') ? ' active ' : '');?>page-events" data-page="events"><a href="#events">Events</a><?php //echo anchor('' , 'Events') ; ?></li>
                        <li class="<?php echo (($this->router->fetch_method()=='trending') ? ' active ' : '');?>page-trending" data-page="trending"><a href="#trending">Trending</a><?php //echo anchor('profile/page/upcoming' , 'Upcoming') ; ?></li>
                        <li class="<?php echo (($this->router->fetch_method()=='upcoming') ? ' active ' : '');?>page-upcoming" data-page="upcoming"><a href="#upcoming">Upcoming</a><?php //echo anchor('profile/page/upcoming' , 'Upcoming') ; ?></li>
                        <li class="<?php echo (($this->router->fetch_method()=='favorites') ? 'active ' : '');?>page-favorite" data-page="favorite"><a href="#favorite">Favorites</a><?php //echo anchor('profile/page/favorites' , 'Favorites') ; ?></li>
                    </ul>
                     <ul class="comman-links <?php echo (isset($type) && $type=='interest') ? 'd-block' : 'd-none';?> link-header-interest">
                        <li class="<?php echo (($this->router->fetch_method()=='interests') ? ' active ' : '');?>"><a href="#i-interests">Interests</a></li>
                        <li class="<?php echo (($this->router->fetch_method()=='trending') ? ' active ' : '');?>"><a href="#i-trending">Trending</a></li>
                        <li class="<?php echo (($this->router->fetch_method()=='popular') ? ' active ' : '');?>"><a href="#i-popular">Populars</a></li>
                        <li class="<?php echo (($this->router->fetch_method()=='favorites') ? ' active ' : '');?>"><a href="#i-favorite">Favorites</a></li>
                       
                    </ul>
                </div>
                <!--Start left-body-container-->
                <div class="left-bodyinnre-container">
                    <div class="logo-densea-life-inner">{{user:profile_pic user_id="<?php echo $user->id;?>"}}</div>
                    <!--<div class="logo-densea-life-inner">{{ theme:image file="logo.png"}}</div>-->
                    <span class="user-profile"><?php echo $user->display_name;?><?php if($user->id==$this->current_user->id):?><a class="fancybox fancybox.ajax" href="/edit-profile">Edit</a><?php endif;?></span>
                    <div class="comman-box">
                        {{ theme:partial name="blocks/information" user_id="<?php echo $user->id;?>" }}
                    </div>
                    <div class="comman-box">
                        {{ theme:partial name="blocks/events" }}
                    </div>
                    
                     <div class="comman-box">
                        {{ theme:partial name="blocks/interests" }}
                        
                    </div>
<!--                    <div class="comman-box">
                        <span class="heading-comman">Music</span>
                        <ul>
                            <li title="Trending">{{ theme:image file="trending.png"}}<span class="left-links"><a href="">Trending</a></span></li>
                            <li title="Artist">{{ theme:image file="artist.png"}}<span class="left-links"><a href="">Artist</a></span></li>
                            <li title="Songs">{{ theme:image file="events-icon.png"}}<span class="left-links"><a href="">Genre</a></span></li>
                            <li title="Favorite">{{ theme:image file="favrate-icon.png"}}<span class="left-links"><a href="">Favorite</a></span></li>
                        </ul>
                    </div>-->
                    <?php if(!empty($friends)):?>
                    <div class="comman-box">
                        <span class="heading-comman">Friends</span>
                        <ul class="friends clearfix">
                            <?php foreach($friends as $friend):?>
                            <li>
                                <a href="/user/<?php echo $friend->username;?>" title='<?php echo $friend->display_name;?>'>
                                    {{user:profile_pic user_id='<?php echo $friend->user_id;?>'}}
                                </a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <?php endif;?>
                </div>
                <!--End left-body-container--> 
                <!--Start center-body-container-->
                <div class="center-bodyinnre-container">
                    <div class="comman-box clearfix wall-main">
                        {{theme:partial name='content'}}
                    </div>
                </div>
                <!--End center-body-container--> 
                <!--Start right-body-container-->
                <div class="right-bodyinnre-container">
                    <div class="comman-box">
                        <span class="heading-comman">Discover Interest</span>
                        <ul class="friends clearfix">
                            {{ eventsmanager:trending limit="8" type='interest' user_id="<?php echo $user->id;?>"}}
                            <li>
                                <a href="{{ url:site uri='eventsmanager/{{slug}}' }}" title="{{ title }}" >{{ eventsmanager:thumb name="{{ thumbnail }}" }}</a>
                            </li>
                            {{ /eventsmanager:trending }}
                        </ul>
                    </div>
                    <div class="comman-box">
                        <span class="heading-comman">Friends Events</span>
                        <ul class="friends clearfix">
                            {{friend:events user_id="<?php echo $user->id;?>"}}
                           <li>
                                <a href="{{ url:site uri='eventsmanager/{{slug}}' }}" title="{{ title }}" >{{ eventsmanager:thumb name="{{ thumbnail }}" }}</a>
                            </li>
                            {{/friend:events}}
                        </ul>
                    </div>
                    <div class="activity-feeds"> 
                        <span class="heading-comman">Stream</span>
                        <div class="search-box">
                            <label for="SearchBox"></label>
                            <input type="text" name="stream_search" id="stream_search" placeholder="Search streams"/>
                            <!--<button type="submit" id='go-stream-search'>Go</button>-->
                        </div>
                        
                        <ul class="stream" id="stream_search_result">
                            {{eventsmanager:get_all_events limit='10'}}
                            <li class="txt-center">
                                <span class="f-bold fs14"><a href="/eventsmanager/{{slug}}" title="{{title}}">{{title}}</a></span>
                                <span class="image">
                                    <a href="/eventsmanager/{{slug}}" title="{{title}}" >
                                    {{ eventsmanager:thumb name=thumbnail}}
                                    </a>
                                    <div class="display-none hover-aera">
                                        {{button:star_event event_id=id}}
                                        {{button:follow_event event_id=id class='float-right ctrl_trend'}}
                                    </div>
                                </span> 
                                    <table width="100%" border="0">
                                        <tr>
                                            <td width="50%"><a href="javascript:void(0);" class="float-left"><span class="d-inline count_star_{{id}}">{{star_count}}</span> &nbsp; Stars</a> </td>
                                            <td  width="50%"><a href="javascript:void(0);" class="float-right"><span class="d-inline count_follow_{{id}}" >{{follow_count}}</span> &nbsp; Followers</a></span> </td>
                                        </tr>
                                    </table>
                            </li>
                            {{ /eventsmanager:get_all_events}}
                        </ul>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <!--End Right-body-container--> 
            </div>
            <!--End Body Container-->
            <footer> 
                {{ theme:partial name="footer" }}   
            </footer>
        </div>
        {{asset:js file='customer.js'}}
        {{asset:render}}
        <script>
            $(document).ready(function(){
                $('#stream_search').keyup(function(){
                   
                   if($(this).val().length > 3){
                       $('#stream_search_result').animate({'opacity': '0.3'});
                       
                       $('#stream_search_result').load('/eventsmanager/search/'+$(this).val(), function(response){
                           $('#stream_search_result').animate({'opacity': '1'});
                       });
                   } 
                });
            });
        </script>
    </body>
</html>
