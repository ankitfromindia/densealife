<div class="comman-heading">Videos</div>
<?php if($count > 0):?>
<ul class="videos">
    <?php foreach ($albums as $album ) : ?>
    <?php if($album->videos) : ?>
        <?php foreach ( $album->videos as $video ): ?>
            <li>
                <video width="195" height="195" controls>
                    <source src="<?php echo $video->path;?>" type="<?php echo $video->mimetype;?>">
                    Your browser does not support the video tag.
                </video>
                <span class="name"><?php echo $video->name;?></span>
                <span class="name"><a href="">By {{ user:profile user_id='<?php echo $video->user_id;?>'}} {{display_name}}{{ /user:profile }}</a><span class="right"><?php echo date('M d, Y', $video->date_added);?></span></span>
            </li>
        <?php endforeach ; ?>
            <?php endif; ?>
    <?php endforeach ; ?>
</ul>
<?php else:?>
No video files
<?php endif; ?>