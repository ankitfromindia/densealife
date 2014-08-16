<div class="container">
    <div class="header">
        <div class="profile_pic">
            {{user:profile_pic user_id='<?php echo $item->user_id; ?>'}}
        </div>
        <div class="post_title">
            <span class="display_name"><?php echo $item->display_name; ?> </span>
            <?php if ($item->entry_title) : ?>> <?php endif; ?><?php echo $item->entry_title; ?>
            <br />
            <span class="time time-ago">
                <?php echo time_passed(strtotime($item->created_on)); ?>
            </span>
        </div>
    </div>
    <div class="comments">
        <?php
        if ($item->media != ''):
            $media = unserialize($this->encrypt->decode($item->media));
            ?>
            <a class="fancybox-effects-b fl" data-fancybox-group="button" href="<?php echo $media['data']['path']; ?>"><img src="<?php echo base_url(); ?>files/medium/<?php echo $media['data']['id']; ?>" alt="" width="200" height="200"/></a> 
            <?php
        endif;
        ?>
        <span class="clear"></span>
        <span class="fl">
            <?php if (Settings::get('comment_markdown') and $item->parsed): ?>
                <?php echo $item->parsed ?>
            <?php else: ?>
                <p><?php echo nl2br($item->comment) ?></p>
            <?php endif ?>
        </span>
        <span class='clear'>&nbsp;</span>
        <span class='comman-star stars'>
            <?php echo link_star($item->id);?>
        </span> 
        <span>
            <a href="/comments/share/<?php echo $item->id; ?>" class="fancybox fancybox.ajax">Share</a>
        </span>
    </div>
    <div class="comment-box">
        <ul>
            <?php echo display_post_children($item->id);?>
            <?php //echo $this->comments->display_my_children($item->id); ?>
            <li>
            <span>{{user:profile_pic user_id='<?php echo $this->current_user->id; ?>' dim='32'}}</span> 
            <div class="status-aera children">
                <?php echo comment_form($item->id);?>
                
            <!--{{comments:comment_form post_id="<?php echo $item->id;?>"}}-->
                <?php //echo $this->comments->form($item->id); ?>
            </div>
            </li>
        </ul>
    </div>
</div>

<span class="seperator">&nbsp;</span>

