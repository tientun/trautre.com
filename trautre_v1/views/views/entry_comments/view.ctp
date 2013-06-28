<div class="entryComments view">
<h2><?php  __('Entry Comment');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryComment['EntryComment']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Entry'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($entryComment['Entry']['title'], array('controller' => 'entries', 'action' => 'view', $entryComment['Entry']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($entryComment['User']['id'], array('controller' => 'users', 'action' => 'view', $entryComment['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryComment['EntryComment']['content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Agree'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryComment['EntryComment']['agree']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryComment['EntryComment']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entryComment['EntryComment']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entry Comment', true), array('action' => 'edit', $entryComment['EntryComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Entry Comment', true), array('action' => 'delete', $entryComment['EntryComment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entryComment['EntryComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comments', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Entry Comment Likes');?></h3>
	<?php if (!empty($entryComment['EntryCommentLike'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Entry Comment Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Value'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($entryComment['EntryCommentLike'] as $entryCommentLike):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $entryCommentLike['id'];?></td>
			<td><?php echo $entryCommentLike['entry_comment_id'];?></td>
			<td><?php echo $entryCommentLike['user_id'];?></td>
			<td><?php echo $entryCommentLike['value'];?></td>
			<td><?php echo $entryCommentLike['created'];?></td>
			<td><?php echo $entryCommentLike['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'entry_comment_likes', 'action' => 'view', $entryCommentLike['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'entry_comment_likes', 'action' => 'edit', $entryCommentLike['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'entry_comment_likes', 'action' => 'delete', $entryCommentLike['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entryCommentLike['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Entry Comment Like', true), array('controller' => 'entry_comment_likes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Entry Comment Photos');?></h3>
	<?php if (!empty($entryComment['EntryCommentPhoto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Entry Comment Id'); ?></th>
		<th><?php __('Photo Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($entryComment['EntryCommentPhoto'] as $entryCommentPhoto):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $entryCommentPhoto['id'];?></td>
			<td><?php echo $entryCommentPhoto['entry_comment_id'];?></td>
			<td><?php echo $entryCommentPhoto['photo_id'];?></td>
			<td><?php echo $entryCommentPhoto['created'];?></td>
			<td><?php echo $entryCommentPhoto['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'entry_comment_photos', 'action' => 'view', $entryCommentPhoto['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'entry_comment_photos', 'action' => 'edit', $entryCommentPhoto['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'entry_comment_photos', 'action' => 'delete', $entryCommentPhoto['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entryCommentPhoto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Entry Comment Photo', true), array('controller' => 'entry_comment_photos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
