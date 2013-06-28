<div class="userActivities form">
<?php echo $this->Form->create('UserActivity');?>
	<fieldset>
		<legend><?php __('Add User Activity'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('type');
		echo $this->Form->input('reference_id');
		echo $this->Form->input('data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List User Activities', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>