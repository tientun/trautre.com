<div class="entries view">
<h2><?php  __('Entry');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entry['Entry']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contest'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($entry['Contest']['title'], array('controller' => 'contests', 'action' => 'view', $entry['Contest']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($entry['User']['id'], array('controller' => 'users', 'action' => 'view', $entry['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entry['Entry']['content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entry['Entry']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entry['Entry']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Agree'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entry['Entry']['agree']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entry['Entry']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $entry['Entry']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entry', true), array('action' => 'edit', $entry['Entry']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Entry', true), array('action' => 'delete', $entry['Entry']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entry['Entry']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entries', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contests', true), array('controller' => 'contests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contest', true), array('controller' => 'contests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comments', true), array('controller' => 'entry_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment', true), array('controller' => 'entry_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Likes', true), array('controller' => 'entry_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Like', true), array('controller' => 'entry_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Photos', true), array('controller' => 'entry_photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Photo', true), array('controller' => 'entry_photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Entry Comments');?></h3>
	<?php if (!empty($entry['EntryComment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Entry Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Agree'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($entry['EntryComment'] as $entryComment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $entryComment['id'];?></td>
			<td><?php echo $entryComment['entry_id'];?></td>
			<td><?php echo $entryComment['user_id'];?></td>
			<td><?php echo $entryComment['content'];?></td>
			<td><?php echo $entryComment['agree'];?></td>
			<td><?php echo $entryComment['created'];?></td>
			<td><?php echo $entryComment['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'entry_comments', 'action' => 'view', $entryComment['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'entry_comments', 'action' => 'edit', $entryComment['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'entry_comments', 'action' => 'delete', $entryComment['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entryComment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Entry Comment', true), array('controller' => 'entry_comments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Entry Likes');?></h3>
	<?php if (!empty($entry['EntryLike'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Entry Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Value'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($entry['EntryLike'] as $entryLike):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $entryLike['id'];?></td>
			<td><?php echo $entryLike['entry_id'];?></td>
			<td><?php echo $entryLike['user_id'];?></td>
			<td><?php echo $entryLike['value'];?></td>
			<td><?php echo $entryLike['created'];?></td>
			<td><?php echo $entryLike['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'entry_likes', 'action' => 'view', $entryLike['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'entry_likes', 'action' => 'edit', $entryLike['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'entry_likes', 'action' => 'delete', $entryLike['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entryLike['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Entry Like', true), array('controller' => 'entry_likes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Entry Photos');?></h3>
	<?php if (!empty($entry['EntryPhoto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Entry Id'); ?></th>
		<th><?php __('Photo Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($entry['EntryPhoto'] as $entryPhoto):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $entryPhoto['id'];?></td>
			<td><?php echo $entryPhoto['entry_id'];?></td>
			<td><?php echo $entryPhoto['photo_id'];?></td>
			<td><?php echo $entryPhoto['created'];?></td>
			<td><?php echo $entryPhoto['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'entry_photos', 'action' => 'view', $entryPhoto['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'entry_photos', 'action' => 'edit', $entryPhoto['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'entry_photos', 'action' => 'delete', $entryPhoto['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entryPhoto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Entry Photo', true), array('controller' => 'entry_photos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
