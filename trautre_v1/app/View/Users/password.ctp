<?php
	$success = $this->Session->flash("success");
	$error = $this->Session->flash("error");
	if(!empty($success))
	{?>
	<div class="notification success png_bg">
		<a href="#" class="close"><img src="<?php echo $this->webroot;?>img/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div>
			<?php echo $success;?>
		</div>
	</div>
	<?php } else if(!empty($error)) {?>
		<div class="notification error png_bg">
			<a href="#" class="close"><img src="<?php echo $this->webroot;?>img/cross_grey_small.png" title="Close this notification" alt="close" /></a>
			<div>
				<?php echo $error;?>
			</div>
		</div>
	<?php }?>
<div class="box inputForm updateAccount">
    <?php 
	 if(!empty($user['User']['password']))
	 {
		$url = "users/password/1";
	 }
	 else
	 {
		$url = "users/password/2";
	 }	
	?>
	<h3>
        Cập nhật mật khẩu</h3>
		<form action="<?php echo $this->webroot.$url;?>" id ="submitPassword" class="submitForm" method="post">        <p>
            Ngoài cách đăng nhập vào trautre bằng tài khoản Facebook, bạn có thể đặt mật khẩu để đăng nhập bằng email và mật khẩu trong trường hợp không vào được Facebook 
            hoặc mất tài khoản Facebook.
        </p>
		<?php if(!empty($user['User']['password'])){?>
        <p class="required">
            <label for="Old">Mật khẩu cũ</label>
            <input class="text mediumWidth txt-input" id="OldPassword" name="data[User][oldPassword]" type="password">
            <span class="field-validation-error" id ="error_old_password"></span>
        </p>
		<?php }?>
        <p class="required">
            <label for="New">Mật khẩu mới</label>
            <input class="text mediumWidth txt-input" maxlength ="30" id="newPassword" name="data[User][newPassword]" type="password">
            <span class="field-validation-error" id ="error_new_password"></span>
        </p>
        <p class="required">
            <label for="ConfirmNew">Xác nhận mật khẩu mới</label>
            <input class="text mediumWidth txt-input"   id="ConfirmNew" name="ConfirmNew" type="password">
            <span class="field-validation-error" id ="error_confirm_password"></span>
        </p>
        <p class="buttonSet">
            <button type="submit" class="buttons submitButton">Cập nhật</button>
          
        </p>
</form></div>