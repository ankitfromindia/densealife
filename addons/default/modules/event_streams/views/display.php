<div class="activity-feeds"> 
    <span class="heading-comman">Stream</span>
    <div class="search-box">
        <label for="SearchBox"></label>
        <input type="text" name="textfield" id="SearchBox"/>
        <button type="submit" id='go-stream-search'>Go</button>
    </div>

    <ul class="stream">
        {{eventsmanager:trending}}
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
    <span class="more">See more suggestion</span>
</div>