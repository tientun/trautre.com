<div class="entryCommentPhotos form">
<?php echo $this->Form->create('EntryCommentPhoto');?>
	<fieldset>
		<legend><?php __('Edit Entry Comment Photo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entry_comment_id');
		echo $this->Form->input('photo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EntryCommentPhoto.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EntryCommentPhoto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entry Comment Photos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Entry Comments', true), array('controller' => 'entry_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment', true), array('controller' => 'entry_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>