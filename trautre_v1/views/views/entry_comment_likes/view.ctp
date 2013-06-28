<div class="entryCommentLikes view">
<h2><?php  __('Entry Comment Like');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryCommentLike['EntryCommentLike']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Entry Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($entryCommentLike['EntryComment']['id'], array('controller' => 'entry_comments', 'action' => 'view', $entryCommentLike['EntryComment']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($entryCommentLike['User']['id'], array('controller' => 'users', 'action' => 'view', $entryCommentLike['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryCommentLike['EntryCommentLike']['value']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryCommentLike['EntryCommentLike']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryCommentLike['EntryCommentLike']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entry Comment Like', true), array('action' => 'edit', $entryCommentLike['EntryCommentLike']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Entry Comment Like', true), array('action' => 'delete', $entryCommentLike['EntryCommentLike']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entryCommentLike['EntryCommentLike']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comment Likes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment Like', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comments', true), array('controller' => 'entry_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment', true), array('controller' => 'entry_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
