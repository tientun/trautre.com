<div class="entryPhotos form">
<?php echo $this->Form->create('EntryPhoto');?>
	<fieldset>
		<legend><?php __('Edit Entry Photo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entry_id');
		echo $this->Form->input('photo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EntryPhoto.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EntryPhoto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entry Photos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Entries', true), array('controller' => 'entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry', true), array('controller' => 'entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>