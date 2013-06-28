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
		<h1>Read Message</h1>
	</div>
	
	<form>
		<div class="add_contest_custom">
			<p>
				<span class="add_contest_label_custom">Subject</span>
				<?php echo $this->Form->input('Message.subject', array('type' => 'text', 'label' => false, 'div' => false, 'readonly' => 'readonly')); ?>
			</p>
			<p>
				<span class="add_contest_label_custom">Content</span>
				<?php echo $this->Form->textarea('Message.content', array('label' => false, 'div' => false, 'readonly' => 'readonly')); ?>
			</p>
			<p>
				<span class="add_contest_label_custom">User</span>
				<?php 
					$user = $this->requestAction('/users/user_info/'.$this->data['Message']['from']);
					echo $this->Form->input('Message.from', array('type' => 'text', 'value' => $user['User']['username'], 'label' => false, 'div' => false, 'readonly' => 'readonly')); 
				?>
			</p>
			<p>
				<span class="add_contest_label_custom">Date</span>
				<?php 
					$date = date('d/m/Y H:i:s', strtotime($this->data['Message']['created']));
					echo $this->Form->input('Message.created', array('type' => 'text', 'value' => $date, 'label' => false, 'div' => false, 'readonly' => 'readonly')); 
				?>
			</p>
			<a href="#modal1" class="modal button blue">Reply</a>
			<?php echo $this->Html->link('Back', array('controller' => 'messages', 'action' => 'inbox'), array('class' => 'button')); ?>
		</div>
    </form>
	
</div>

<div id="modal1" class="box">
	<div class="box-header">
		<h1>Reply Message</h1>
	</div>
  
	<div class="box-content">
		
		<?php echo $this->Form->create('Message', array('url'=>'reply/'.$message_id.'/'.$this->data['Message']['from'], 'id' => 'ReplyMessage'));?>
		<p>
			<span class="add_contest_label_custom">Message</span>
			<?php echo $this->Form->textarea('Message.reply', array('label' => false, 'id' => 'ReplyMessageContent', 'div' => false)); ?>
			<span class="hide_message" id="ReplyMessageContent_error">(This field is required)</span>
		</p>
			
		<div class="action_bar">
			<input type="submit" id="submit" value="Done" class="button blue" />
			<a href="#" class="close button">Close window</a>
		</div>
	</div>
</div>