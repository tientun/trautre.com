<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Facebook'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['facebook']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Twitter'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['twitter']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fullname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['fullname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Avatar'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['avatar']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tagline'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['tagline']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Website'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['website']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Point'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['point']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Paid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['paid']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['location']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entries', true), array('controller' => 'entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry', true), array('controller' => 'entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comment Likes', true), array('controller' => 'entry_comment_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment Like', true), array('controller' => 'entry_comment_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Comments', true), array('controller' => 'entry_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment', true), array('controller' => 'entry_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entry Likes', true), array('controller' => 'entry_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Like', true), array('controller' => 'entry_likes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Activities', true), array('controller' => 'user_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Activity', true), array('controller' => 'user_activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Reports', true), array('controller' => 'user_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Report', true), array('controller' => 'user_reports', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Entries');?></h3>
	<?php if (!empty($user['Entry'])):?>
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
		foreach ($user['Entry'] as $entry):
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
<div class="related">
	<h3><?php __('Related Entry Comment Likes');?></h3>
	<?php if (!empty($user['EntryCommentLike'])):?>
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
		foreach ($user['EntryCommentLike'] as $entryCommentLike):
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
	<h3><?php __('Related Entry Comments');?></h3>
	<?php if (!empty($user['EntryComment'])):?>
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
		foreach ($user['EntryComment'] as $entryComment):
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
	<?php if (!empty($user['EntryLike'])):?>
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
		foreach ($user['EntryLike'] as $entryLike):
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
	<h3><?php __('Related User Activities');?></h3>
	<?php if (!empty($user['UserActivity'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Reference Id'); ?></th>
		<th><?php __('Data'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['UserActivity'] as $userActivity):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $userActivity['id'];?></td>
			<td><?php echo $userActivity['user_id'];?></td>
			<td><?php echo $userActivity['type'];?></td>
			<td><?php echo $userActivity['reference_id'];?></td>
			<td><?php echo $userActivity['data'];?></td>
			<td><?php echo $userActivity['created'];?></td>
			<td><?php echo $userActivity['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'user_activities', 'action' => 'view', $userActivity['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'user_activities', 'action' => 'edit', $userActivity['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'user_activities', 'action' => 'delete', $userActivity['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userActivity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Activity', true), array('controller' => 'user_activities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related User Reports');?></h3>
	<?php if (!empty($user['UserReport'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Reference Id'); ?></th>
		<th><?php __('Data'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['UserReport'] as $userReport):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $userReport['id'];?></td>
			<td><?php echo $userReport['user_id'];?></td>
			<td><?php echo $userReport['type'];?></td>
			<td><?php echo $userReport['reference_id'];?></td>
			<td><?php echo $userReport['data'];?></td>
			<td><?php echo $userReport['created'];?></td>
			<td><?php echo $userReport['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'user_reports', 'action' => 'view', $userReport['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'user_reports', 'action' => 'edit', $userReport['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'user_reports', 'action' => 'delete', $userReport['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userReport['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Report', true), array('controller' => 'user_reports', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
