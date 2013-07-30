<?php 
	$userId = $this->Session->read("userId");
	if($userId) {
?>
<div class="box inputForm upload">
<h3>Đăng hình ảnh mới
	<a class="toggleMode" href="<?php echo $this->webroot;?>medias/upload_video">Đăng video</a>
</h3>
<div class="tips">
	Bạn có ảnh hài hước, vui nhộn? Hãy chia sẻ tiếng cười với mọi người bằng cách đăng lên trautre.com. Và đừng quên đọc
	<b style="color: red">Nội quy</b>
	ở bên phải nhé!
</div>
<form id ="submitForm" class="submitForm" method="post" action="<?php echo $this->webroot;?>medias/upload"   enctype="multipart/form-data">
	<?php 
		$error = $this->Session->flash("error");
		if(!empty($error))
		{?>
		<div class="notification error png_bg">		
			<div>
				 <?php echo $error;?>
			</div>
		</div>
	<?php }?>
	<p class="required">
		<label for="file"> Chọn file ảnh (không quá 2Mb)</label>   
			<input type ="file" name ="data[Media][photos]" id ="photos"/>
			<span class="field-validation-error" id ="error_photo"></span>
	</p>                                
	<p class="required">
		<label for="Caption">Tiêu đề của ảnh</label>
		<input id="photo_name" class="text largeWidth" type="text" value="" name="data[Media][name]">
		<span class="field-validation-error" id ="error_photo_name"></span>
	</p>
	<p>
		<input id="IsSelfMade" class="checkBoxWidth" type="checkbox" value="0" name="data[Media][is_source]"
			   data-val-required="The Ảnh này do tui tự làm! field is required." data-val="true"
			   onclick='clickMade(this);' >
		
		<label class="checkboxLabel" for="IsSelfMade">Ảnh này do tui tự làm!</label>
	</p>
	<p>
		<label for="Source">Nguồn của ảnh</label>
		<input id="Source" class="text largeWidth" id ="link_source" type="text" value="" name="data[Media][link_source]"/>
		<span class="field-validation-valid" id ="error_link_source"></span>
	</p>
	
	<p class="buttonSet">
		<button id="saveButton" class="buttons submitButton" type="submit" name="go"> Đăng ảnh</button>
		
		<a class="buttons cancelButtons" href="/">Bỏ qua</a>
	</p>
</form>
</div>
<?php } else { 
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
	$result = $this->requestAction("/users/save_user_data/".$username."/".$email."/".$facebook_id."/".$gender."/".$full_name."/".$birthday."/2");
			
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
</div>

<?php } } ?>


                       