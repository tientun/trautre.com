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
		<h1>Send message to user</h1>
	</div>
	
	<?php echo $this->Form->create('Message', array('action' => 'send', 'id' => 'MessageSendEmail'));?>
	
    <div class="add_contest_custom">
		
		<p>	
			<span class="add_contest_label_custom">Send to</span>
			<?php 
				$options = array('1' => 'All users', '0' => 'Selected  user');
				$attributes = array('legend' => false, 'default' => '0', 'class' => 'MessageSendEmailType');
				echo $this->Form->radio('Message.type', $options, $attributes); 
			?> 
		</p>
		
		<p id="MessageSendEmailTo">
			<span class="add_contest_label_custom">To</span>
			<?php echo $this->Form->input('Message.to', array('type' => 'select', 'options' => $user_list, 'label' => false, 'div' => false)); ?>
		</p>
		
		<p>
			<span class="add_contest_label_custom">Subject</span>
			<?php echo $this->Form->input('Message.subject', array('type' => 'text', 'label' => false, 'id' => 'MessageSendEmailSubject', 'div' => false)); ?>
			<span class="hide_message" id="MessageSendEmailSubject_error">(This field is required)</span>
		</p>
		
		<p>
			<span class="add_contest_label_custom">Content</span>
			<?php echo $this->Form->textarea('Message.content', array('label' => false, 'id' => 'MessageSendEmailContent', 'div' => false)); ?>
			<span class="hide_message" id="MessageSendEmailContent_error">(This field is required)</span>
		</p>
			
		
    </div>
 
    <div class="action_bar">
		<input type="submit" id="submit" value="Send" class="button blue" />
    </div>
	
</div>