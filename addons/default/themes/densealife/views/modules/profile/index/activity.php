<div class="comman-heading">Activity</div>
<ul class="status">
    <li>
        <span>{{ theme:image file="status.png" alt="Status" }}</span>
        <a href="javascript:void(0);" class="wall-status" data-type="text">Update Status</a>
    </li>
    
</ul>
<div class="status-box status-box-text">
    <?php echo $this->comments->form(); ?>
</div>
<?php echo $this->comments->display_my_comments($user); ?>