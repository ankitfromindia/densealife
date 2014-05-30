<?php if ( $albums ): ?>
    <div class="comman-heading">Albums</div>
    <ul class="videos">
        <?php foreach ( $albums as $album ): ?>
            <?php if ( $album->count_files != 0 ): ?>
                <li>
                    <a class="fancybox fancybox.ajax" href="../../eventsmanager/album_images/<?php echo $album->id ; ?>">
                        <?php if ( !empty($album->cover) ): ?>
                            <img src="<?php echo $album->cover ; ?>" />
                        <?php else: ?>
                            {{ theme:image file="no-image.jpg"}} 
                        <?php endif ; ?>
                        <span class="name"><?php echo strstr($album->name, ':', true) ; ?> (<?php echo $album->photo_count ; ?> Photos)</span>
                    </a>
                </li>
            <?php endif ; ?>
        <?php endforeach ; ?>
    </ul>
<?php endif ; ?>

<?php if ( $photos ): ?>
    <div class="comman-heading">Photos</div>
    <ul class="videos">
        <?php foreach ( $photos as $image ): ?>
            <li>
                <a class="fancybox fl mr10" data-fancybox-group="gallery" href="<?php echo $image->path ; ?>">
                    <img src="{{url:site}}files/medium/<?php echo $image->id ; ?>" alt="" width="200" height="200"/>
                </a>
                <span class='name'><?php echo strstr($image->name, '.', true) ; ?></span>
            </li>
        <?php endforeach ; ?>
    </ul>
<?php endif ; ?>
