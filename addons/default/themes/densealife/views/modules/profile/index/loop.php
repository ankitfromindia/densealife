
<li>
    <h2><a href="/eventsmanager/<?php echo $data->slug; ?>" title="<?php echo $data->title; ?>" ><?php echo $data->title; ?></a></h2>
    <span class="image">
        <a href="/eventsmanager/{{data:slug}}" title="<?php echo $data->title; ?>" >
            {{ eventsmanager:thumb name="<?php echo $data->thumbnail;?>" }}
            <div class="display-none hover-aera">
                <!--{{button:star_event event_id='<?php echo $data->id;?>'}}-->
<!--                <a href="" class="float-left star-aera">Star</a>  -->
                {{button:follow_event event_id='<?php echo $data->id;?>' class='float-right ctrl_trend'}}
                <!--<button type="button" class="float-right">follow</button>-->
            </div>
        </a>
    </span> 
    <span class="name">
        <a href="" class="float-left"><span class="count_star_<?php echo $data->id;?>"><?php echo $data->star_count; ?></span>  Stars</a>  
        <a href="" class="float-right"> <span class="count_follow_<?php echo $data->id;?>"><?php echo $data->follow_count; ?></span> Followers</a>
    </span> 
</li>