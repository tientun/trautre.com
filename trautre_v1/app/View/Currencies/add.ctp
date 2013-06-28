<div class="box">
	<div class="box-header">
		<h1><?php echo __('Add Currency'); ?></h1>
	</div>
<?php echo $this->Form->create('Currency');?>
	<div class="form_custom">
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

				<li><?php echo $this->Html->link(__('List Currencies'), array('action' => 'index'));?></li>
		</ul>
	</div>
</div>