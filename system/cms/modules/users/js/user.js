 var hashUpdate = function(curr_hash) {
    var page_to_load = curr_hash.substr(1);
    var loadurl = '/user/'+current_user+'/' + page_to_load;
    $('.center-bodyinnre-container').animate({'opacity': '0.3'});
    $.fancybox.showLoading();
    $(".center-bodyinnre-container").load(loadurl, function(){
        $('.center-bodyinnre-container').animate({'opacity': '1'});
        $.fancybox.hideLoading();
        $('.comman-links').find('li').each(function(){$(this).removeClass('active')});
        $('.user-page-'+page_to_load).addClass('active');
    }); 
}
$(document).ready(function(){
    if(current_user==''){
        window.location.href = '/densealife-page';
    }
    $(window).bind('hashchange', function(e) {
            hashUpdate(e.target.location.hash);
    });
    window.location.hash && hashUpdate(window.location.hash);
});
//$(document)
//        .ajaxStart(function() {
//            $('.center-bodyinnre-container').animate({'opacity': '0.3'});
//            $.fancybox.showLoading();
//        })
//        .ajaxStop(function() {
//            $('.center-bodyinnre-container').animate({'opacity': '1'});
//            $.fancybox.hideLoading();
//        });



