<div class="entryComments form">
<?php echo $this->Form->create('EntryComment');?>
	<fieldset>
		<legend><?php __('Edit Entry Comment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entry_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('content');
		echo $this->Form->input('agree');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EntryComment.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EntryComment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entry Comments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Entries', true), array('controller' => 'entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry', true), array('controller' => 'entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comment Likes', true), array('controller' => 'entry_comment_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment Like', true), array('controller' => 'entry_comment_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comment Photos', true), array('controller' => 'entry_comment_photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment Photo', true), array('controller' => 'entry_comment_photos', 'action' => 'add')); ?> </li>
	</ul>
</div>