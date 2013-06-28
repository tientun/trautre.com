<!-- Thông báo lỗi -->
<?php 
	$success_mess = $this->Session->flash('success'); 
	$fail_mess = $this->Session->flash('error');
	if(!empty($success_mess)) { 
		echo '<div class="message success" style="display: block;">'.$success_mess.'</div> ';
	}
	else if(!empty($fail_mess)) { 
		echo '<div class="message errormsg" style="display: block;">'.$fail_mess.'</div> ';
	}
?>

<div class="box">
	<div class="box-header">
		<h1>Change Password</h1>
	</div>
	
	<?php echo $this->Form->create('Admin', array('url'=>'change_password', 'id' => 'ChangePasswordAndEmail'));?>
	
    <div class="add_contest_custom">
		<p>
			<span class="add_contest_label_custom">Enter your current password</span>
			<?php echo $this->Form->password('Admin.password', array('label' => false, 'id' => 'ChangePasswordAndEmailCurrentPassword', 'div' => false)); ?>
			<span class="hide_message" id="ChangePasswordAndEmailCurrentPassword_error">(Please enter your current password if you want to change the password)</span>
		</p>
        
		<p>
			<span class="add_contest_label_custom">New password</span>
			<?php echo $this->Form->password('Admin.password_new', array('label' => false, 'id' => 'ChangePasswordAndEmailNewPassword', 'div' => false)); ?>
			<span class="hide_message" id="ChangePasswordAndEmailNewPassword_error">(Please enter your new password)</span>
		</p>
        
		<p>
			<span class="add_contest_label_custom">Confirm new password</span>
			<?php echo $this->Form->password('Admin.password_confirm', array('label' => false, 'id' => 'ChangePasswordAndEmailConfirmPassword', 'div' => false)); ?>
			<span class="hide_message" id="ChangePasswordAndEmailConfirmPassword_error">(The new password does not match. Please try again!)</span>
		</p>
    </div>
 
    <div class="action_bar">
		<input type="submit" id="submit" value="Change" class="button blue" />
	</div>
	
</div>