<style type="text/css">

    .fb_frnds{
        list-style:none;
    }
    .fb_frnds li{
        padding:10px;
        float:left;
        width:30%;
    }
    .frnd_list{
        margin-top:-25px;
        margin-left:40px;
    }
    .fb_frnds a{
        text-decoration:none;
        background: #333;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#333', endColorstr='#D95858'); /* for IE */
        background: -webkit-gradient(linear, left top, left bottom, from(#333), to(#D95858)); /* for webkit browsers */
        background: -moz-linear-gradient(top,  #333,  #D95858)/* for firefox 3.6+ */ ;
        color: #FFFFFF;
        float: right;
        font: bold 13px arial;
        margin-right:110px ;


    }
</style>
<h1> Facebook Friends List </h1>
<ul  class="fb_frnds">
    <?php foreach ($friends['data'] as $user_friend): ?>
        <li ><img src="https://graph.facebook.com/<?php echo $user_friend['id']; ?>/picture" width="30" height="30"/>
            <div  class="frnd_list"><?php echo $user_friend['name']; ?><a href="javascript:void(0);" onclick="send_invitation('<?php echo $user_friend['id']; ?>');"> Invite </a></div>
        </li>
    <?php endforeach; ?>
</ul>
<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js"></script>

<script type="text/javascript">
    FB.init({
        appId: '<?php echo Settings::get('login_fb_appid'); ?>',
        cookie:true,
        status:true,
        xfbml:true
    });

    function send_invitation(fb_frnd_id) {
        FB.ui({method: 'apprequests',
            message: 'IdiotMinds Programming Blog...',
            to: fb_frnd_id
        });
    }
</script>