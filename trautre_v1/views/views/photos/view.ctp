<div class="photos view">
<h2><?php  __('Photo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $photo['Photo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Filename'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $photo['Photo']['filename']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Thumbnail'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $photo['Photo']['thumbnail']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $photo['Photo']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $photo['Photo']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $photo['Photo']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Photo', true), array('action' => 'edit', $photo['Photo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Photo', true), array('action' => 'delete', $photo['Photo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $photo['Photo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contests', true), array('controller' => 'contests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contest', true), array('controller' => 'contests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comments', true), array('controller' => 'entry_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment', true), array('controller' => 'entry_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entries', true), array('controller' => 'entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry', true), array('controller' => 'entries', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Contests');?></h3>
	<?php if (!empty($photo['Contest'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Photo Id'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Start Date'); ?></th>
		<th><?php __('End Date'); ?></th>
		<th><?php __('Conditions'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($photo['Contest'] as $contest):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $contest['id'];?></td>
			<td><?php echo $contest['title'];?></td>
			<td><?php echo $contest['photo_id'];?></td>
			<td><?php echo $contest['description'];?></td>
			<td><?php echo $contest['start_date'];?></td>
			<td><?php echo $contest['end_date'];?></td>
			<td><?php echo $contest['conditions'];?></td>
			<td><?php echo $contest['status'];?></td>
			<td><?php echo $contest['modified'];?></td>
			<td><?php echo $contest['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'contests', 'action' => 'view', $contest['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'contests', 'action' => 'edit', $contest['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'contests', 'action' => 'delete', $contest['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contest['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contest', true), array('controller' => 'contests', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Entry Comments');?></h3>
	<?php if (!empty($photo['EntryComment'])):?>
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
		foreach ($photo['EntryComment'] as $entryComment):
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
	<h3><?php __('Related Entries');?></h3>
	<?php if (!empty($photo['Entry'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Contest Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Agree'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($photo['Entry'] as $entry):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $entry['id'];?></td>
			<td><?php echo $entry['contest_id'];?></td>
			<td><?php echo $entry['user_id'];?></td>
			<td><?php echo $entry['content'];?></td>
			<td><?php echo $entry['title'];?></td>
			<td><?php echo $entry['status'];?></td>
			<td><?php echo $entry['agree'];?></td>
			<td><?php echo $entry['created'];?></td>
			<td><?php echo $entry['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'entries', 'action' => 'view', $entry['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'entries', 'action' => 'edit', $entry['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'entries', 'action' => 'delete', $entry['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entry['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Entry', true), array('controller' => 'entries', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
