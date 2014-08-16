<?php if ($comments): ?>
    <?php foreach ($comments as $item): ?>
        <li class="comment_children mb10 li_child">
            <div class="header">
                <div class="profile_pic">
                    {{user:profile_pic user_id='<?php echo $item->user_id; ?>' dim='32'}}
                </div>
                <div>
                    <span class="display_name"><?php echo $item->display_name; ?></span>
                    &nbsp;
                    <?php echo nl2br($item->comment) ?>  
                    <br/>
                    <span class="time time-ago">
                        <?php echo time_passed(strtotime($item->created_on));?>
                    </span>
                </div>
            </div>
        </li>
    <?php endforeach ?>
    <?php

 endif ;
 