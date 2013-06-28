<div class="box">
	<div class="box-header">
		<h1>List popular <?php echo __('Currencies');?></h1>
	</div>	
	<table class="datatable">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('code');?></th>
			<th><?php echo $this->Paginator->sort('symbol');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	foreach ($currencies as $currency): ?>
	<tr>
		<td><?php echo h($currency['Currency']['id']); ?>&nbsp;</td>
		<td><?php echo h($currency['Currency']['code']); ?>&nbsp;</td>
		<td><?php echo h($currency['Currency']['symbol']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $currency['Currency']['id']), array('class'=>'button')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $currency['Currency']['id']), array('class'=>'button')); ?>
			<?php echo $this->Form->postLink(__('Del'), array('action' => 'delete', $currency['Currency']['id']), array('class'=>'button'), __('Are you sure you want to delete # %s?', $currency['Currency']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
<div class="action_bar nomargin"><div class="dataTables_info"><?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records of {:count}')
	));
	?></div><div class="dataTables_paginate paging_full_numbers">
	<?php
		echo '<span class="first paginate_button">'.$this->Paginator->first( __('First'), array(), null, array('class' => 'paginate_button_disabled')).'</span>';
		echo '<span class="previous paginate_button">'.$this->Paginator->prev( __('Prev'), array(), null, array('class' => 'paginate_button_disabled')).'</span>';
		echo '<span class="paginate_active">'.$this->Paginator->numbers(array('separator' => '</span><span class="paginate_active">')).'</span>';
		echo '<span class="next paginate_button">'.$this->Paginator->next(__('Next'), array(), null, array('class' => 'paginate_button_disabled')).'</span>';
		echo '<span class="last paginate_button">'.$this->Paginator->last(__('Last'), array(), null, array('class' => 'paginate_button_disabled')).'</span>';
	?>
	
	</div></div>
</div>
