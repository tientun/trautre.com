<div class="userReports index">
	<h2><?php __('User Reports');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('reference_id');?></th>
			<th><?php echo $this->Paginator->sort('data');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($userReports as $userReport):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $userReport['UserReport']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userReport['User']['id'], array('controller' => 'users', 'action' => 'view', $userReport['User']['id'])); ?>
		</td>
		<td><?php echo $userReport['UserReport']['type']; ?>&nbsp;</td>
		<td><?php echo $userReport['UserReport']['reference_id']; ?>&nbsp;</td>
		<td><?php echo $userReport['UserReport']['data']; ?>&nbsp;</td>
		<td><?php echo $userReport['UserReport']['created']; ?>&nbsp;</td>
		<td><?php echo $userReport['UserReport']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $userReport['UserReport']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $userReport['UserReport']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $userReport['UserReport']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userReport['UserReport']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Report', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>