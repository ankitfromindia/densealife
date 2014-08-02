var notification = {
    approve : function(comment_id) {
        $.get('/comments/approve', {cid: comment_id, action:'approve'}, function(response){
            if(response.success!=''){
                alert(response.success);
                $.fancybox.close();
            }
        },'json');
    },
    
    decline : function(comment_id) {
         $.get('/comments/approve', {cid: comment_id, action:'unapprove'}, function(response){
            if(response.success!=''){
                alert(response.success);
                $.fancybox.close();
            }
        },'json');
    },
    
    block : function(user_id) {
         $.get('/comments/block', {uid:user_id}, function(response){
            if(response.success!=''){
                alert(response.success);
                $.fancybox.close();
            }
        },'json');
    }
}

