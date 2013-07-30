<?php
	$success = $this->Session->flash("success");
	if(!empty($success))
	{?>
	<div class="notification success png_bg">
		<a href="#" class="close"><img src="<?php echo $this->webroot;?>img/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		<div>
			<?php echo $success;?>
		</div>
	</div>
	<?php }?>
<div class="box infoBox inputForm updateAccount">
    <h3>Cập nhật thông tin cá nhân</h3>
		<form action="" id ="editProfile" class="submitForm" enctype="multipart/form-data" method="post">        <p class="required"> 
            <label for="Email">Email</label>
				<input class="txt-input text mediumWidth" disabled="disabled" id="Email" name="Email" type="text" value="<?php echo $user['User']['email'];?>">            
              
        </p>
        <p class="required">
            <label for="Name">Tên hiển thị</label>
            <input class="text mediumWidth txt-input" maxlength ="50" id="profile_name" name="data[User][full_name]" type="text" value="<?php echo $user['User']['full_name'];?>">
            <span class="field-validation-error" id ="error_profile_name"></span>
        </p>       
        <p>
            <label>Avatar</label>
            <div style ="margin-left:50px;margin-top:10px;margin-bottom:10px"><img class="avatar" src="<?php echo $user['User']['avatar'];?>" width="100" height="100"></div>
         </p> 
        <p>
            <label for="Websites">Website</label>
             <input class="text mediumWidth txt-input" maxlength ="50" id="website" name="data[User][website]" type="text" value="<?php echo $user['User']['website'];?>">
            <span class="field-validation-valid"></span>
        </p>
        <p>
            <label for="About">Giới thiệu</label>
            <textarea class="text mediumWidth txt-textarea" maxlength ="200" id="about" name="data[User][about]" rows="2"><?php echo $user['User']['about'];?></textarea>
            
        </p>
        <p class="buttonSet">
            <button type="submit" class="buttons submitButton">Cập nhật</button>
           
        </p>
        <p>
            </p><h4><a href="<?php echo $this->webroot;?>users/password">Đổi mật khẩu</a></h4>
        <p></p>
</form></div>