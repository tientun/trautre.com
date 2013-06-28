<div class="apis view">
<h2><?php  __('Api');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $api['Api']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Secret Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $api['Api']['secret_key']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Api', true), array('action' => 'edit', $api['Api']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Api', true), array('action' => 'delete', $api['Api']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $api['Api']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Apis', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Api', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
