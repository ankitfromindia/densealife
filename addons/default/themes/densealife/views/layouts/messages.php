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
                    <ul class="comman-links">
                        <li><a href="">Events</a></li>
                        <li><a href="">Upcoming</a></li>
                        <li><a href="">Favorites</a></li>
                    </ul>
                </div>
                <!--Start center-body-container-->
                <div class="message-bodyinnre-container">
                    {{ theme:partial name="content" }}
                </div>
                <!--End center-body-container--> 
                <!--Start right-body-container-->
                <div class="right-bodyinnre-container">
                    <div class="comman-box">
                        <span class="heading-comman">Discover Interest</span>
                        <ul class="friends clearfix">
                            {{ eventsmanager:trending limit="8" type='interest' user_id=user:id}}
                            <li>
                                <a href="{{ url:site uri='eventsmanager/{{slug}}' }}" title="{{ title }}" >{{ eventsmanager:thumb name="{{ thumbnail }}" }}</a>
                            </li>
                            {{ /eventsmanager:trending }}
                        </ul>
                    </div>
                    <div class="comman-box">
                        <span class="heading-comman">Friends Events</span>
                        <ul class="friends clearfix">
                            {{friend:events user_id=user:id}}
                            <li>
                                <a href="{{ url:site uri='eventsmanager/{{slug}}' }}" title="{{ title }}" >{{ eventsmanager:thumb name="{{ thumbnail }}" }}</a>
                            </li>
                            {{/friend:events}}
                        </ul>
                    </div>
                    <div class="activity-feeds"> <span class="heading">Stream</span>
                        <div class="search-box">
                            <label for="SearchBox"></label>
                            <input type="text" name="textfield" id="SearchBox">
                                <button type="submit">Go</button>
                        </div>
                        <ul class="stream">
                            {{eventsmanager:trending user_id=user:id}}
                            <li>
                                <h2>{{title}}</h2>
                                <span class="image">
                                    {{ eventsmanager:thumb name="{{ thumbnail }}" }}
                                    <div class="display-none hover-aera"><a href="" class="float-left star-aera">Star</a>  <button type="button" class="float-right">follow</button></div>
                                </span> 
                                <span class="name"><a href="" class="float-left">{{star_count}} Stars</a>  <a href="" class="float-right">{{follow_count}} Followers</a></span> 
                            </li>
                            {{ /eventsmanager:trending}}
                        </ul>
                        <hr />
                        <span class="more">See more suggestion</span> </div>
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
    </body>
</html>
