<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  
    <title><?php echo $title_for_layout ; ?></title>
    <?php 
		echo $this->Html->css('reset.css');
		echo $this->Html->css('formalize.css');
		echo $this->Html->css('main.css');
		echo $this->Html->css('checkboxes.css');
		echo $this->Html->css('icons.css');
		echo $this->Html->css('custom.css');
	?>
	
</head>
  
<body id="login">
	
    <div id="login_container">
		
		<!-- In thông điệp -->
		<?php 
			$forgot_password_error = $this->Session->flash('forgot_password_error'); 
			$forgot_password_success = $this->Session->flash('forgot_password_success'); 
			
			if(!empty($forgot_password_error)){
				echo '<div id="forgot_password_error">'.$forgot_password_error.'</div>' ; 
			}
			else if(!empty($forgot_password_success)){
				echo '<div class="message">'.$forgot_password_success.'</div>' ; 
			}
		?>

		<div id="login_form" style="left:100px">
			<form method="post" action="">
				<p>
					<!--<input type="text" id="username" name="data[Admin][username]" value="Username" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue"/>-->
					<input type="text" id="username" name="data[Admin][email]" placeholder="Email" class="{validate: {required: true}}" />
				</p>
				
				<button type="submit" class="button blue"><span class="glyph key"></span>Get new password</button>

				<br /><br />

				<p style="float:left; margin-left:80px;">
					<?php echo $this->Html->link('Login', array('controller' => 'admins', 'action' => 'login'), array('style'=>'text-decoration:none;color:#558BBC')) ; ?>
				</p>
			
			</form>
		</div>
		
	</div>
    
</body>
</html>