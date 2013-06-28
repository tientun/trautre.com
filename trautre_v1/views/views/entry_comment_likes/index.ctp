<div class="entryCommentLikes index">
	<h2><?php __('Entry Comment Likes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('entry_comment_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($entryCommentLikes as $entryCommentLike):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $entryCommentLike['EntryCommentLike']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($entryCommentLike['EntryComment']['id'], array('controller' => 'entry_comments', 'action' => 'view', $entryCommentLike['EntryComment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($entryCommentLike['User']['id'], array('controller' => 'users', 'action' => 'view', $entryCommentLike['User']['id'])); ?>
		</td>
		<td><?php echo $entryCommentLike['EntryCommentLike']['value']; ?>&nbsp;</td>
		<td><?php echo $entryCommentLike['EntryCommentLike']['created']; ?>&nbsp;</td>
		<td><?php echo $entryCommentLike['EntryCommentLike']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $entryCommentLike['EntryCommentLike']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $entryCommentLike['EntryCommentLike']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $entryCommentLike['EntryCommentLike']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $entryCommentLike['EntryCommentLike']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Entry Comment Like', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Entry Comments', true), array('controller' => 'entry_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entry Comment', true), array('controller' => 'entry_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>