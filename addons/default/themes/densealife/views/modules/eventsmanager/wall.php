<div class="comman-heading">Join the Conversation</div>
{{if allow_comment}}
<ul class="status">
    <li>
        <span>{{ theme:image file="status.png" alt="Status" }}</span>
        <a href="javascript:void(0);" class="wall-status" data-type="text">Post Status</a>
    </li>
    <li>
        <span>{{ theme:image file="addvidoes.png" alt="Videos" }}</span>
        <a href="javascript:void(0);" class="wall-status" data-type="image-video" data-event="<?php echo $event->id;?>" data-title ='<?php echo $event->title;?>'>Add Photos/Video</a>
    </li>
</ul>
<div class="status-box status-box-text">
    <?php echo $this->comments->form(); ?>
</div>
{{else}}
<section>
    <div style="font-size:18px; color:blue; border:1px solid blue; margin-top:20px; height: 150px; padding-top:10px;">
        Because of following reasons you are not able to comment on this event. 
        <ol>
            <li>You are not following the event.</li>
            <li>You have been blocked by the creator of this event. </li>
        </ol>
    </div>
</section>
{{endif}}

<?php echo $this->comments->display (); ?>