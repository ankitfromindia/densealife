
<?php if ( $comments ): ?>
    <?php foreach ( $comments as $item ): ?>
        <li>
            <span>{{user:profile_pic user_id='<?php echo $item->user_id;?>'}}</span> 
            <div class="status-aera">
                <span class="name"><?php echo $item->user_name ?></span> 
                <span>
                    <?php if ( Settings::get('comment_markdown') and $item->parsed ): ?>
                        <?php echo $item->parsed ?>
                    <?php else: ?>
                        <p><?php echo nl2br($item->comment) ?></p>
                    <?php endif ?>
                </span>
            </div>
        </li>
    <?php endforeach ?>
<?php endif ; ?>

