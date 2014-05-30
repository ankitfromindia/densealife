<div class="comman-heading">Notification</div>
<div class="clear"></div>
<ul class="notification mt15">
    <?php foreach($notifications as $key => $values) :?>
    <li>
        <?php foreach($values as $value): ?>
            <?php echo load_view('profile','notifications/partials/noti_'.$value->type,array('data' => $value));?>
        <?php endforeach;?>
    </li>
    <?php endforeach;?>
<li>
<div class="clear"></div>
