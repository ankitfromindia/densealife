<script type="text/javascript">

  $(function(){

    $('#cropbox').Jcrop({
      aspectRatio: 1,
      onSelect: updateCoords
    });

  });

  function updateCoords(c)
  {
    $('#thumbnail_x1').val(c.x);
    $('#thumbnail_y1').val(c.y);
    $('#thumbnail_x2').val(c.w);
    $('#thumbnail_y2').val(c.h);
  };

  function checkCoords()
  {
    if (parseInt($('#thumbnail_x2').val())) return true;
    alert('Please select a crop region then press submit.');
    return false;
  };

</script>
<style type="text/css">
  #target {
    background-color: #ccc;
    width: 500px;
    height: 330px;
    font-size: 24px;
    display: block;
  }


</style>
<?php $module_path = BASE_URL . $this->module_details['path']; ?>
<!-- Step 1 : choose a picture -->

<div id="col_1">
    <h2><?php echo lang("eventsmanager:picture_step_1"); ?></h2>
    <div id="choosing">
        <!-- Folder selector -->
        <?php
        if ( !empty($folders) ) :
            $folder_id = isset($picture->folder_id) ? $picture->folder_id : null;
            echo lang('eventsmanager:choose_folder_label') . '&nbsp;:&nbsp;' . form_dropdown('folder_select', $folders, $folder_id);
        else :
            echo lang('eventsmanager:no_folder_label');
        endif;
        ?>
        <br /><br />
        <!-- Folder content -->
        <input type="hidden" id="picture_id" value="<?php echo isset($event->picture_id) ? $event->picture_id : null; ?>" />
        <div id="message">
            <?php if ( empty($pictures) ) : ?>
                <p>No picture found</p>
            <?php endif; ?>
        </div>
        <ul id="folder-content" class="videos" style="height:293px; overflow-y: scroll;">
            <?php
            $check = '';
            if ( !empty($pictures) ) :
                foreach ( $pictures as $pic ) {
                if($check==''){
                    $check = site_url('files/thumb/'.$pic->id.'/500/200/fit');
                }
                    echo '<li>'
                    .'<a class="fancybox fl mr10" data-fancybox-group="gallery" href="'.site_url(str_replace('{{ url:site }}','',$pic->path)).'">'
                    . img(array( 'src' => 'files/medium/' . $pic->id.'/fit', 'alt' => $pic->name, 'title' => $pic->name . ' -- ' . $pic->description, 'filename' => $pic->filename ))
                            .'</a><div class="clear"></div>'
                    . '<div style="text-align:center;">'.form_radio(array( 'class'       => 'picture_id',
                        'name'        => 'picture_id',
                        'value'       => $pic->id,
                        'filename'    => $pic->filename,
                        'data-width'  => $pic->width,
                        'data-height' => $pic->height,
                        'checked'     => isset($event->picture_id) && $event->picture_id == $pic->id ? true : false )).'</div>'
                    . '</li>';
                }
            endif;
            ?>
        </ul>
    </div>
</div>
<div class="clear"></div>
<img src="/<?php echo $this->eventsmanager_m->get_image('46eb04720e2c840');?>" id="cropbox"/>

<!-- This is the form that our event handler fills -->
<form id="form-crop-image" method="post" onsubmit="return checkCoords();">
    <input type="hidden" id="picture_id" name="picture_id" value="46eb04720e2c840" />
    <input type="hidden" id="thumbnail_x1" name="thumbnail_x1" />
    <input type="hidden" id="thumbnail_y1" name="thumbnail_y1" />
    <input type="hidden" id="thumbnail_x2" name="thumbnail_x2" />
    <input type="hidden" id="thumbnail_y2" name="thumbnail_y2" />
<!--    <input type="hidden" id="thumbnail_disp_w" name="thumbnail_disp_w" value="100" />
    <input type="hidden" id="thumbnail_disp_h" name="thumbnail_disp_h" value="100"/>-->
    
    <input type="submit" value="Crop Image" class="btn btn-large btn-inverse" />
<button type="submit">Save & Continue</button>
</form>
<div class="clear"></div>
<div class="clear"></div>
