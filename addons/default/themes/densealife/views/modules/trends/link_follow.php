<?php echo form_open("trends/create",'class="form-trend"'); ?>
<?php echo form_hidden('data', $data); ?>
<button class="<?php echo $class;?>" data-id="<?php echo $entry_id;?>"><?php echo $text;?></button>
<?php echo form_close();?>