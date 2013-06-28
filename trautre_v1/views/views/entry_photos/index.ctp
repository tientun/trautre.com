<div class="entryPhotos index">
	<h2><?php __('Entry Photos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('entry_id');?></th>
			<th><?php echo $this->Paginator->sort('photo_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($entryPhotos as $entryPhoto):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $entryPhoto['EntryPhoto']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($entryPhoto['Entry']['title'], array('controller' => 'entries', 'action' => 'view', $entryPhoto['Entry']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($entryPhoto['Photo']['id'], array('controller' => 'photos', 'action' => 'view', $entryPhoto['Photo']['id'])); ?>
		</td>
		<td><?php echo $entryPhoto['EntryPhoto']['created']; ?>&nbsp;</td>
		<td><?php echo $entryPhoto['EntryPhoto']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $entryPhoto['EntryPhoto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $entryPhoto['EntryPhoto']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $entryPhoto['EntryPhoto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entryPhoto['EntryPhoto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Entry Photo', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Entries', true), array('controller' => 'entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry', true), array('controller' => 'entries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>