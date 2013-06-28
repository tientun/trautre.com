<div class="apis form">
<?php echo $this->Form->create('Api');?>
	<fieldset>
		<legend><?php __('Add Api'); ?></legend>
	<?php
		echo $this->Form->input('secret_key');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Apis', true), array('action' => 'index'));?></li>
	</ul>
</div>