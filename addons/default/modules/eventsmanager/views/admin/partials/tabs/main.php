<fieldset>
    <ul>
        <input type="hidden" id="event-id" value="<?php echo isset($event->id) ? $event->id : null ; ?>" />
        <li>
            <label for="category_id"><?php echo lang('cat:category_label') ?> &nbsp; <span>*</span></label>
            <div class="input">
                <?php echo form_dropdown('category_id', array( '' => lang('cat:no_category_select_label') ) + $categories, $event->category_id, 'class="drpdwn_category_id"') ?>
                <!--[ <?php echo anchor('admin/eventsmanager/categories/create', lang('blog:new_category_label'), 'target="_blank"') ?> ]-->
            </div>
        </li>

        <li>
            <label for="sub_category_id"><?php echo lang('sub_cat:category_label') ?>&nbsp;<span>*</span></label>
            <div class="input sub_category_id">
                <?php echo form_dropdown('sub_category_id', array( '' => lang('cat:no_category_select_label') ) + $sub_categories, $event->sub_category_id, 'class="drpdwn_sub_category_id"') ?>
            </div>
        </li>
        <li>
            <label for="title"><?php echo lang('eventsmanager:title_label') ; ?> <span>*</span></label>
            <div class="input"><?php echo form_input('title', htmlspecialchars_decode($event->title), 'maxlength="255" id="title"') ?></div>
        </li>
         <li>
            <label for="website">Website</label>
            <div class="input"><?php echo form_input('website', htmlspecialchars_decode($event->website), 'maxlength="255" id="website"') ?></div>
        </li>
        
         <li>
            <label for="affiliations">Affiliations</label>
            <div class="input"><?php echo form_input('affiliations', htmlspecialchars_decode($event->affiliations), 'maxlength="255" id="affiliations"') ?></div>
        </li>
        
        <li>
            <label for="slug"><?php echo lang('eventsmanager:slug_label') ; ?> <span>*</span></label>
            <div class="input"><?php echo BASE_URL . $this->module_details['slug'] . '/' ; ?><span id="slug"><?php echo $event->slug ; ?></span></div>
            <?php echo form_hidden('slug', isset($event->slug) ? $event->slug : "", 'disabled="disabled"') ; ?>
        </li>

        <!-- Is "end_date_defined" set ? -->
        <?php
        if ( !isset($event->end_date_defined) ) {
            $event                   = ( object ) $event ;
            $event->end_date_defined = 0 ;
        }
        ?>

        <li class="date-meta">
            <label for="start_date"><?php echo lang('eventsmanager:start_date_label') ; ?> </label>
            <div class="input datetime_input">
                <?php
                echo form_input(array(
                    'class' => 'datepicker',
                    'name'  => 'start_date',
                    'id'    => 'start_date',
                    'value' => $event->start_date && ($event->start_date!='0000-00-00 00:00:00') ? date($date_format, strtotime($event->start_date)) : '',
                    'style' => '' )) ;
                ?>
                &nbsp;&nbsp;&nbsp;<?php echo lang('eventsmanager:time_label') ; ?> :&nbsp;
                <?php
                echo form_dropdown('start_time_hour', time_range(0, 23), isset($event->start_date) ? date('H', strtotime($event->start_date)) : null, 'style=""') ;
                ?>
                &nbsp;<b class="time_separator">:</b>&nbsp;
                <?php
                echo form_dropdown('start_time_minute', time_range(0, 59), isset($event->start_date) ? date('i', strtotime($event->start_date)) : null, 'style=""') ;
                ?>
                &nbsp;<u style="cursor: pointer; <?php if ( $event->end_date_defined ): ?>display: none;<?php endif ; ?>"  id="add_end_date"><?php echo lang('eventsmanager:add_end_date_label') ; ?></u>
            </div>
        </li>

        <input type="hidden" id="end_date_defined" name="end_date_defined" value="<?php echo isset($event->end_date_defined) ? $event->end_date_defined : false ; ?>" />

        <li class="date-meta" id="end_date_form" <?php if ( !$event->end_date_defined ): ?>style="display: none;"<?php endif ; ?>>
            <label for="end_date"><?php echo lang('eventsmanager:end_date_label') ; ?></label>
            <div class="input">
                <?php
                echo form_input(array(
                    'class' => 'datepicker',
                    'name'  => 'end_date',
                    'id'    => 'end_date',
                    'value' => date($date_format, strtotime($event->end_date)),
                    'style' => '' )) ;
                ?>
                &nbsp;&nbsp;&nbsp;<?php echo lang('eventsmanager:time_label') ; ?> :&nbsp;
                <?php
                echo form_dropdown('end_time_hour', time_range(0, 23), isset($event->end_date) ? date('H', strtotime($event->end_date)) : null, 'style=""') ;
                ?>
                &nbsp;<b class="time_separator">:</b>&nbsp;
                <?php
                echo form_dropdown('end_time_minute', time_range(0, 59), isset($event->end_date) ? date('i', strtotime($event->end_date)) : null, 'style=""') ;
                ?>
                &nbsp;<u style="cursor: pointer;" id="remove_end_date"><?php echo lang('eventsmanager:delete_label') ; ?></u>
            </div>
        </li>

        <li>
            <label for="place"><?php echo lang('eventsmanager:place_label') ; ?> </label>
            <div>
                <span class="input"><input type="text" id="place" name="place" value="<?php echo isset($event->place) ? $event->place : "" ; ?>" /></span>
                &nbsp;&nbsp;
                <input type="checkbox" id="show_map" name="show_map" value="1"
                <?php if ( isset($event->show_map) && $event->show_map ) echo "checked" ; ?> />
                &nbsp;<?php echo lang('eventsmanager:show_map_label') ; ?>
                &nbsp;<a id="map_options"><?php echo lang('eventsmanager:map_more_options_label') ; ?></a>
            </div>
        </li>

        <input type="hidden" id="author" name="author" value="<?php echo isset($event->author) ? $event->author : $this->current_user->id ; ?>" />
        
        <li class="editor">
            <label for="about">About<span>*</span></label>
            <div class="input"><?php echo form_textarea(array( 'id' => 'about', 'name' => 'about', 'value' => isset($event->about) ? $event->about : '', 'rows' => 5 )) ; ?></div>
        </li>

        <li class="editor">
            <label for="description"><?php echo lang('eventsmanager:description_label') ; ?>  <span>*</span></label>
            <div class="input"><?php echo form_textarea(array( 'id' => 'description', 'name' => 'description', 'value' => isset($event->description) ? $event->description : '', 'rows' => 10 )) ; ?></div>
        </li>

        <li>
            <label for="comments"><?php echo lang('eventsmanager:comments_label') ; ?></label>
            <div class="input"><?php echo form_dropdown('enable_comments', array( '1' => lang('eventsmanager:yes'), '0' => lang('eventsmanager:no') ), isset($event->enable_comments) ? $event->enable_comments : false) ; ?></div>
        </li>

        <li>
            <label for="published"><?php echo lang('eventsmanager:published_label') ; ?></label>
            <div class="input"><?php echo form_dropdown('published', array( '1' => lang('eventsmanager:yes'), '0' => lang('eventsmanager:no') ), isset($event->published) ? $event->published : false) ; ?></div>
        </li>

    </ul>

</fieldset>