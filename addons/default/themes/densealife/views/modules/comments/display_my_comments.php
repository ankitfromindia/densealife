<?php if ($comments): ?>  
    <ul class="status-blog">
        <?php foreach ($comments as $item): ?>
            <li class='li-<?php echo $item->id; ?>'>
                <?php //echo $this->load->view('comments/post', array('item' => $item));?>
                <?php echo load_view('comments', 'post', array('item' => $item)); ?>
            </li>
    <?php endforeach ?>
    </ul>
    <?php
 endif;