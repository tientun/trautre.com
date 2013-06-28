<div class="entryCommentPhotos view">
<h2><?php  __('Entry Comment Photo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryCommentPhoto['EntryCommentPhoto']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Entry Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($entryCommentPhoto['EntryComment']['id'], array('controller' => 'entry_comments', 'action' => 'view', $entryCommentPhoto['EntryComment']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Photo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($entryCommentPhoto['Photo']['id'], array('controller' => 'photos', 'action' => 'view', $entryCommentPhoto['Photo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryCommentPhoto['EntryCommentPhoto']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryCommentPhoto['EntryCommentPhoto']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entry Comment Photo', true), array('action' => 'edit', $entryCommentPhoto['EntryCommentPhoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Entry Comment Photo', true), array('action' => 'delete', $entryCommentPhoto['EntryCommentPhoto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entryCommentPhoto['EntryCommentPhoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comment Photos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment Photo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comments', true), array('controller' => 'entry_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment', true), array('controller' => 'entry_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
