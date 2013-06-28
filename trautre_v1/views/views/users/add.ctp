<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('facebook');
		echo $this->Form->input('twitter');
		echo $this->Form->input('fullname');
		echo $this->Form->input('avatar');
		echo $this->Form->input('tagline');
		echo $this->Form->input('website');
		echo $this->Form->input('point');
		echo $this->Form->input('status');
		echo $this->Form->input('paid');
		echo $this->Form->input('location');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Entries', true), array('controller' => 'entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry', true), array('controller' => 'entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comment Likes', true), array('controller' => 'entry_comment_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment Like', true), array('controller' => 'entry_comment_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comments', true), array('controller' => 'entry_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment', true), array('controller' => 'entry_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Likes', true), array('controller' => 'entry_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Like', true), array('controller' => 'entry_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Activities', true), array('controller' => 'user_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Activity', true), array('controller' => 'user_activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Reports', true), array('controller' => 'user_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Report', true), array('controller' => 'user_reports', 'action' => 'add')); ?> </li>
	</ul>
</div>