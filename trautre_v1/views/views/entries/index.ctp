<div class="entries index">
	<h2><?php __('Entries');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('contest_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('agree');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($entries as $entry):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $entry['Entry']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($entry['Contest']['title'], array('controller' => 'contests', 'action' => 'view', $entry['Contest']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($entry['User']['id'], array('controller' => 'users', 'action' => 'view', $entry['User']['id'])); ?>
		</td>
		<td><?php echo $entry['Entry']['content']; ?>&nbsp;</td>
		<td><?php echo $entry['Entry']['title']; ?>&nbsp;</td>
		<td><?php echo $entry['Entry']['status']; ?>&nbsp;</td>
		<td><?php echo $entry['Entry']['agree']; ?>&nbsp;</td>
		<td><?php echo $entry['Entry']['created']; ?>&nbsp;</td>
		<td><?php echo $entry['Entry']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $entry['Entry']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $entry['Entry']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $entry['Entry']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entry['Entry']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Entry', true), array('action' => 'add')); ?></li>
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