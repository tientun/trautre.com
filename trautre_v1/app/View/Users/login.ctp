
<?php
require 'facebook/facebook.php';

$facebook = new Facebook(array(
  'appId'  =>  Configure::read('APP_ID'),
  'secret' => Configure::read('SECRET'),
));

$user = $facebook->getUser();

if ($user) {
  try {
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    $user = null;
  }
}
if ($user) { 
	$username =$user_profile['username'];
	$email = $user_profile['email'];
	$facebook_id = $user_profile['id'];
	if($user_profile['gender'] =="male")
	{
		$gender =1;
	}
	else
	{
		$gender =0;
	}
	$full_name = $user_profile['name'];
	$birthday = date("Y-m-d",strtotime($user_profile['birthday']));
	$result = $this->requestAction("/users/save_user_data/".$username."/".$email."/".$facebook_id."/".$gender."/".$full_name."/".$birthday."/1");
			
	} else {?>
<div class="box infoBox">
		<h3>Đăng nhập</h3>   
			<h4>
				Click vào nút dưới đây để đăng nhập với tài khoản Facebook của bạn. Tài khoản của bạn trên trautre sẽ tự động được tạo sau lần đăng nhập đầu tiên mà không cần đăng ký.</h4>
			 <fb:login-button></fb:login-button>
			 <div id="fb-root"></div>
		<div>
			<h4>Hoặc <a href="<?php echo $this->webroot;?>users/loginpassword">đăng nhập bằng mật khẩu</a> nếu bạn đã có tài khoản trên trautre.</h4>
		</div>
		<div>Chú ý: bằng việc đăng nhập bạn đã đồng ý với <a href="<?php echo $this->webroot;?>users/policy">Điều khoản sử dụng</a> của trautre.com.</div>
</div>
<?php }?>
 <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId: '<?php echo $facebook->getAppID() ?>',
          cookie: true,
          xfbml: true,
          oauth: true
        });
        FB.Event.subscribe('auth.login', function(response) {
          window.location.reload();
        });
        FB.Event.subscribe('auth.logout', function(response) {
          window.location.reload();
        });
      };
      (function() {
        var e = document.createElement('script'); e.async = true;
        e.src = document.location.protocol +
          '//connect.facebook.net/en_US/all.js';
        document.getElementById('fb-root').appendChild(e);
      }());
    </script>