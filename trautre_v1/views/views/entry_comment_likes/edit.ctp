<div class="entryCommentLikes form">
<?php echo $this->Form->create('EntryCommentLike');?>
	<fieldset>
		<legend><?php __('Edit Entry Comment Like'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entry_comment_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EntryCommentLike.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EntryCommentLike.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entry Comment Likes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Entry Comments', true), array('controller' => 'entry_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment', true), array('controller' => 'entry_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>