<div class="entryLikes view">
<h2><?php  __('Entry Like');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryLike['EntryLike']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Entry'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($entryLike['Entry']['title'], array('controller' => 'entries', 'action' => 'view', $entryLike['Entry']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($entryLike['User']['id'], array('controller' => 'users', 'action' => 'view', $entryLike['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryLike['EntryLike']['value']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryLike['EntryLike']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryLike['EntryLike']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entry Like', true), array('action' => 'edit', $entryLike['EntryLike']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Entry Like', true), array('action' => 'delete', $entryLike['EntryLike']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entryLike['EntryLike']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Likes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Like', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entries', true), array('controller' => 'entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry', true), array('controller' => 'entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
