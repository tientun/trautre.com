<div class="entryCommentPhotos index">
	<h2><?php __('Entry Comment Photos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('entry_comment_id');?></th>
			<th><?php echo $this->Paginator->sort('photo_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($entryCommentPhotos as $entryCommentPhoto):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $entryCommentPhoto['EntryCommentPhoto']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($entryCommentPhoto['EntryComment']['id'], array('controller' => 'entry_comments', 'action' => 'view', $entryCommentPhoto['EntryComment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($entryCommentPhoto['Photo']['id'], array('controller' => 'photos', 'action' => 'view', $entryCommentPhoto['Photo']['id'])); ?>
		</td>
		<td><?php echo $entryCommentPhoto['EntryCommentPhoto']['created']; ?>&nbsp;</td>
		<td><?php echo $entryCommentPhoto['EntryCommentPhoto']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $entryCommentPhoto['EntryCommentPhoto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $entryCommentPhoto['EntryCommentPhoto']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $entryCommentPhoto['EntryCommentPhoto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entryCommentPhoto['EntryCommentPhoto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Entry Comment Photo', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Entry Comments', true), array('controller' => 'entry_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment', true), array('controller' => 'entry_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>