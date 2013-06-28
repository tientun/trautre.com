<div class="entryLikes index">
	<h2><?php __('Entry Likes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('entry_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($entryLikes as $entryLike):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $entryLike['EntryLike']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($entryLike['Entry']['title'], array('controller' => 'entries', 'action' => 'view', $entryLike['Entry']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($entryLike['User']['id'], array('controller' => 'users', 'action' => 'view', $entryLike['User']['id'])); ?>
		</td>
		<td><?php echo $entryLike['EntryLike']['value']; ?>&nbsp;</td>
		<td><?php echo $entryLike['EntryLike']['created']; ?>&nbsp;</td>
		<td><?php echo $entryLike['EntryLike']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $entryLike['EntryLike']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $entryLike['EntryLike']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $entryLike['EntryLike']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entryLike['EntryLike']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Entry Like', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Entries', true), array('controller' => 'entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry', true), array('controller' => 'entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>