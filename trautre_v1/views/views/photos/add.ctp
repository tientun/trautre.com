<div class="photos form">
<?php echo $this->Form->create('Photo');?>
	<fieldset>
		<legend><?php __('Add Photo'); ?></legend>
	<?php
		echo $this->Form->input('filename');
		echo $this->Form->input('thumbnail');
		echo $this->Form->input('type');
		echo $this->Form->input('EntryComment');
		echo $this->Form->input('Entry');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Photos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Contests', true), array('controller' => 'contests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contest', true), array('controller' => 'contests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comments', true), array('controller' => 'entry_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment', true), array('controller' => 'entry_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entries', true), array('controller' => 'entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry', true), array('controller' => 'entries', 'action' => 'add')); ?> </li>
	</ul>
</div>