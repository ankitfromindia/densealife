$(document).ready(function() {

  $('.page-about').click(function(){
        $(".wall").load("/eventsmanager/about/"+$(this).data('slug'), function(){
            $('.comman-links').find('li').each(function(){$(this).removeClass('active')});
            $('.page-event').addClass('active');
        }); 
    });
    
   $('.page-album').click(function(){
        $(".wall").load("/eventsmanager/albums/"+$(this).data('slug'), function(){
            $('.comman-links').find('li').each(function(){$(this).removeClass('active')});
            $('.page-album').addClass('active');
        }); 
    });
    
 
    
    $('.page-video').click(function(){
        $(".wall").load("/eventsmanager/videos/"+$(this).data('slug'), function(){
            $('.comman-links').find('li').each(function(){$(this).removeClass('active')});
            $('.page-video').addClass('active');
        }); 
    });
    
       $('.page-follower').click(function(){
        $(".wall").load("/eventsmanager/followers/"+$(this).data('slug'), function(){
            $('.comman-links').find('li').each(function(){$(this).removeClass('active')});
            $('.page-follower').addClass('active');
        }); 
    });

    $('body').on('keydown', '.form-post-comment', function(event) {
        if (event.keyCode == 13 && $(this).val() != '' && !event.shiftKey) {
            $(this).blur();
            $('.form-post-comment').attr('value', '');
            $(this).parent('form').submit();
        }

    });

    $('.wall-status').click(function() {
        if ($(this).data('type') == 'text') {
            $('.status-box-text').show();
            $('.status-box-media').hide();
        }
        if ($(this).data('type') == 'image-video') {
            $('.status-box-text').hide();
            $('.status-box-media').show();
            $('.status-box-text').after('<div class="status-box status-box-media"><form action="'+baseurl+'eventsmanager/upload_wall_status" method="post" enctype="multipart/form-data" id="myForm"><label for="file">Filename:</label><input type="hidden" name="entry_id" value="' + $(this).data('event') + '"/><input type="hidden" name="title" value="' + $(this).data('title') + '"/><input type="file" name="file" id="file" multiple><br><input type="submit" name="submit" value="Submit"></form></div>')
        }
    });
    
    $('body').on('click','.ctrl_trend', function(){
       var label = $(this).text() ;
       var entry = $(this).data('id');
       if(label =='Star'){
           $(this).text('Unstar');
           if($(this).hasClass('star')){
               $(this).siblings('.star-count').text(parseInt($(this).siblings('.star-count').text()) + 1);
           }
       }else if(label == 'Unstar'){ 
           $(this).text('Star');
           if($(this).hasClass('star')){
               $(this).siblings('.star-count').text(parseInt($(this).siblings('.star-count').text()) - 1 );
           }
       }else if(label == 'Follow'){
           $(this).text('Following');
           var selector = $('.count_follow_' + entry);
           selector.html(parseInt(selector.html()) + 1);
       }else if(label == 'Following'){
           $(this).text('Follow');
           var selector = $('.count_follow_' + entry);
           selector.html(parseInt(selector.html()) -1 );
       }else if(label == 'Add Favorite'){
           $(this).text('Favorite');
       }else if(label == 'Favorite'){
           $(this).text('Add Favorite');
       }
       $(this).siblings('form').submit(); 
    });
    
});
$('#myForm').ajaxForm({
    delegation: true, // for live response
    beforeSubmit: function() {
        $.fancybox.showLoading();
    },
    success: function(response) {
        $('.status-box-media').hide();
        $('.status-box-text').show();
        $('.media-form').remove();
        $('#response').append(response);
    },
    complete: function() {
        $.fancybox.hideLoading();
    }
});
$('.form-status').ajaxForm({
    type: 'POST',
    delegation: true, // for live response
    dataType: 'json',
    url: '../../comments/create/eventsmanager',
    commentForm: function(response) {
        return '<form accept-charset="utf-8" method="post" class="form-status" action="' + this.url + '"><input type="hidden" value="' + response.entry + '" name="entry"><input type="hidden" value="' + response.comment_id + '" name="parent_id"><textarea class="form-post-comment " name="comment" rows="" cols="" onfocus="this.value =\'\'"></textarea></form>'
    },
    media: function(response) {
        if (response.media != '') {
            return '<a class="fancybox-effects-b pl10" data-fancybox-group="button" href="' + response.media.baseurl + 'files/large/' + response.media.filename + '"><img src="' + response.media.baseurl + 'files/medium/' + response.media.id + '" alt="" width="200" height="200"/></a>';
        } else {
            return '';
        }
    },
    beforeSubmit: function() {
        $.fancybox.showLoading();
        $('.form-post-comment').val('');
    },
    success: function(response) {
        $('#response').html('');
        $('.status-box-text').show();
        $('.status-box-media').hide().remove();
        $('.main-comment').val('');
        if (response.parent_id == 0) {
            content = ' <span>' + response.pic + '</span><div class="status-aera"><span class="name">' + response.user_name + '</span>' + this.media(response) + '<span><p>' + response.comment + '</p></span><span class="comman-star stars">'+response.link_star+'<a href="">Share</a></span></div><ul class="comments-hare"><li class="li-child-' + response.comment_id + '"><span>' + response.pic + '</span><div class="status-aera children">' + this.commentForm(response) + '</div></li></ul>';
            if ($('.status-blog ul').siblings().length > 0) {
                $('.status-blog li:first').before('<li class="li-' + response.comment_id + '">' + content + '</li>');
            } else {
                $('.status-box').after('<ul class="status-blog"><li class="li-' + response.comment_id + '">' + content + '</li></ul>')
            }
        } else {
            content = ' <span>' + response.pic + '</span><div class="status-aera"><span class="name">' + response.user_name + '</span><span><p>' + response.comment + '</p></span></div>';
            $('.li-' + response.parent_id).find('ul li:last').before('<li class="li-' + response.comment_id + '">' + content + '</li>')
        }


    },
    complete: function() {
        $.fancybox.hideLoading();
    }

});

$('.form-status-media').ajaxForm({
    type: 'POST',
    delegation: true, // for live response
    dataType: 'json',
    url: '../../comments/create_media/eventsmanager',
    commentForm: function(response) {
        return '<form accept-charset="utf-8" enctype="multipart/form-data" method="post" class="form-status-media" action="' + this.url + '"><input type="hidden" value="' + response.entry + '" name="entry"><input type="hidden" value="' + response.comment_id + '" name="parent_id"><textarea class="form-post-comment " name="comment" rows="" cols="" onfocus="this.value =\'\'"></textarea></form>'
    },
    beforeSubmit: function() {
        $.fancybox.showLoading();
        $('.form-post-comment').val('');
    },
    success: function(response) {
        $('.main-comment').val('');
        if (response.parent_id == 0) {
            var content = ' <span>' + response.pic + '</span><div class="status-aera"><span class="name">' + response.user_name + '</span><span><p>' + response.comment + '</p></span><span class="comman-star stars"><a href="#">4500</a><a href="#">Stars</a><a href="">Comments</a><a href="">Share</a></span></div><ul class="comments-hare"><li class="li-child-' + response.comment_id + '"><span>' + response.pic + '</span><div class="status-aera children">' + this.commentForm(response) + '</div></li></ul>';
            if ($('.status-blog ul').siblings().length > 0) {
                $('.status-blog li:first').before('<li class="li-' + response.comment_id + '">' + content + '</li>');
            } else {
                $('.status-box').after('<ul class="status-blog"><li class="li-' + response.comment_id + '">' + content + '</li></ul>')
            }
        } else {
            content = ' <span>' + response.pic + '</span><div class="status-aera"><span class="name">' + response.user_name + '</span><span><p>' + response.comment + '</p></span></div>';
            $('.li-' + response.parent_id).find('ul li:last').before('<li class="li-' + response.comment_id + '">' + content + '</li>')
        }


    },
    complete: function() {
        $.fancybox.hideLoading();
    }

});

$('.form-trend').ajaxForm({
    type: 'POST',
    delegation: true, // for live response
    dataType: 'json',
    beforeSubmit: function() {
        $.fancybox.showLoading();
    },
    success: function(response) {
        if(response.trend =='3' ){
            $star_place_holder = $('.count_star_'+ response.entry);
            star_count = parseInt($star_place_holder.text())
            if(response.action=='-1'){
                  $star_place_holder.text(star_count-1)
            }else{
                $star_place_holder.text(star_count+1)
            }
        }
    }, 
    complete: function() {
        $.fancybox.hideLoading();
    }
});

$('#form-share').ajaxForm({
    type: 'POST',
    delegation: true, // for live response
    dataType: 'json',
    beforeSubmit: function() {
        $.fancybox.showLoading();
    },
    success: function(response) {
       if(response.status==='success') {
           $.fancybox.close();
       }
    }, 
    complete: function() {
        $.fancybox.hideLoading();
    }
});