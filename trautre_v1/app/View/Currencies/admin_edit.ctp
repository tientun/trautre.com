<div class="box">
	<div class="box-header">
		<h1><?php echo __('Admin Edit Currency'); ?></h1>
	</div>
<?php echo $this->Form->create('Currency');?>
	<div class="form_custom">
		<p><span class='form_label_custom'>Id</span>
	<?php echo $this->Form->input('id', array('label' => false, 'div' => false));?>
	</p>
	<p><span class='form_label_custom'>Code</span>
	<?php echo $this->Form->input('code', array('label' => false, 'div' => false));?>
	</p>
	<p><span class='form_label_custom'>Symbol</span>
	<?php echo $this->Form->input('symbol', array('label' => false, 'div' => false));?>
	</p>
	</div>
	<div class="action_bar">
	<?php echo $this->Form->end(__('Submit'));?>
		<ul>

				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Currency.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Currency.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Currencies'), array('action' => 'index'));?></li>
		</ul>
	</div>
</div>