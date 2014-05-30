<div id="fb-root"></div>
<script>
        var FB_APP_ID = "<?php echo $this->config->item('appId'); ?>";
        var FB_SCOPE = "<?php echo $this->config->item('scope'); ?>";
        var FB_REDIRECT_URI = "<?php echo $this->config->item('redirect_uri'); ?>";
        
        window.fbAsyncInit = function() {
                FB.init({
                        appId      : FB_APP_ID, // App ID
                        status     : true, 
                        cookie     : true,
                        xfbml      : true ,
                });

                
                FB.getLoginStatus(function(response) {
                        if (response.status === 'connected') {
                             
                                var uid = response.authResponse.userID;
                                var accessToken = response.authResponse.accessToken;
                                window.location.href = '/fb_login';
                                
                                
                                
                        } else if (response.status === 'not_authorized') { 
                            alert('hello');
                                var oauth_url = 'https://www.facebook.com/dialog/oauth/';
                                oauth_url += '?client_id='+FB_APP_ID;
                                oauth_url += '&redirect_uri=' + encodeURIComponent(FB_REDIRECT_URI);
                                oauth_url += '&scope='+FB_SCOPE;
                                //FB.login();
                                window.top.location = oauth_url;
                                
                                
                        } else {

                                var oauth_url = 'https://www.facebook.com/dialog/oauth/';
                                oauth_url += '?client_id='+FB_APP_ID;
                                oauth_url += '&redirect_uri=' + encodeURIComponent(FB_REDIRECT_URI);
                                oauth_url += '&scope='+FB_SCOPE;
                                //FB.login();
                                window.top.location = oauth_url;
                                
                        }
                });
    
        };

     
        (function(d){
                var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement('script'); js.id = id; js.async = true;
                js.src = "//connect.facebook.net/en_EN/all.js";
                ref.parentNode.insertBefore(js, ref);
        }(document));
        
        function check(response){
            alert(response);
        }
</script>


<div class="login-container">
        
        <h1>Login in process</h1>
        <!--<div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" onlogin="check" ></div>-->
         FB.login(function(response) {
   if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me', function(response) {
       console.log('Good to see you, ' + response.name + '.');
     });
   } else {
     console.log('User cancelled login or did not fully authorize.');
   }
 });
        
</div>