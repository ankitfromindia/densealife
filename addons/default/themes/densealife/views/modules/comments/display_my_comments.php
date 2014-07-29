<?php if ( $comments ): ?>  
    <ul class="status-blog">
        <?php foreach ( $comments as $item ): ?>
            <li class='li-<?php echo $item->id;?>'>
                <span>{{user:profile_pic user_id='<?php echo $item->user_id;?>'}}</span> 
                <div class="status-aera">
                    <span class="name"><?php echo $item->user_name;?> <?php if($item->entry_title) :?>> <?php endif;?><?php echo $item->entry_title;?></span> 
                    <?php 
                        if($item->media!=''):
                            $media = unserialize($this->encrypt->decode($item->media));
                        ?>
                    <a class="fancybox-effects-b pl10" data-fancybox-group="button" href="<?php echo $media['data']['path'];?>"><img src="<?php echo base_url();?>files/medium/<?php echo $media['data']['id'];?>" alt="" width="200" height="200"/></a> 
                    <?php 
                        endif;
                    ?>
                    <span>
                        <?php if ( Settings::get('comment_markdown') and $item->parsed ): ?>
                            <?php echo $item->parsed ?>
                        <?php else: ?>
                            <p><?php echo nl2br($item->comment) ?></p>
                        <?php endif ?>
                    </span>
                    <span class="comman-star stars">
                        <?php echo $this->comments->link_star($item->id);?>
                     
                        <a href="/comments/share/<?php echo $item->id;?>" class="fancybox fancybox.ajax">Share</a>
                    </span> 
                </div>
                <ul class="comments-hare">
                    <?php echo $this->comments->display_my_children($item->id);?>
                    <li>
                        <span>{{user:profile_pic user_id='<?php echo $this->current_user->id;?>'}}</span> 
                        <div class="status-aera children">
                            <?php echo $this->comments->form ($item->id); ?>
                        </div>
                    </li>
                </ul>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif; ?>