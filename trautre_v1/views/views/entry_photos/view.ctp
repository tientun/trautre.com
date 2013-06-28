<div class="entryPhotos view">
<h2><?php  __('Entry Photo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryPhoto['EntryPhoto']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Entry'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($entryPhoto['Entry']['title'], array('controller' => 'entries', 'action' => 'view', $entryPhoto['Entry']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Photo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($entryPhoto['Photo']['id'], array('controller' => 'photos', 'action' => 'view', $entryPhoto['Photo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryPhoto['EntryPhoto']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryPhoto['EntryPhoto']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entry Photo', true), array('action' => 'edit', $entryPhoto['EntryPhoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Entry Photo', true), array('action' => 'delete', $entryPhoto['EntryPhoto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entryPhoto['EntryPhoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Photos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Photo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entries', true), array('controller' => 'entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry', true), array('controller' => 'entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
