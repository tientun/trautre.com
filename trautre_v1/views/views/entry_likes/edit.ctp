<div class="entryLikes form">
<?php echo $this->Form->create('EntryLike');?>
	<fieldset>
		<legend><?php __('Edit Entry Like'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entry_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EntryLike.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EntryLike.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entry Likes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Entries', true), array('controller' => 'entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry', true), array('controller' => 'entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>