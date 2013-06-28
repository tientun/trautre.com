<div class="entries form">
<?php echo $this->Form->create('Entry');?>
	<fieldset>
		<legend><?php __('Add Entry'); ?></legend>
	<?php
		echo $this->Form->input('contest_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('content');
		echo $this->Form->input('title');
		echo $this->Form->input('status');
		echo $this->Form->input('agree');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Entries', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Contests', true), array('controller' => 'contests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contest', true), array('controller' => 'contests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comments', true), array('controller' => 'entry_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment', true), array('controller' => 'entry_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Likes', true), array('controller' => 'entry_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Like', true), array('controller' => 'entry_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Photos', true), array('controller' => 'entry_photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Photo', true), array('controller' => 'entry_photos', 'action' => 'add')); ?> </li>
	</ul>
</div>