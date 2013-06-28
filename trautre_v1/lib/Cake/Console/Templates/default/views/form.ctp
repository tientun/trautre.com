<div class="box">
	<div class="box-header">
		<h1><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></h1>
	</div>
<?php echo "<?php echo \$this->Form->create('{$modelClass}');?>\n";?>
	<div class="form_custom">
	<?php
		foreach ($fields as $field) {
			if (strpos($action, 'add') !== false && $field == $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
				echo "\t<p><span class='form_label_custom'>".Inflector::humanize($field)."</span>\n\t<?php echo \$this->Form->input('{$field}', array('label' => false, 'div' => false));?>\n\t</p>\n";
			}
		}
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t<p><span class='form_label_custom'>".Inflector::humanize($assocName)."</span>\n\t<?php echo \$this->Form->input('{$assocName}', array('label' => false, 'div' => false));?>\n\t</p>\n";
			}
		}
	?>
	</div>
	<div class="action_bar">
	<?php
		echo "<?php echo \$this->Form->end(__('Submit'));?>\n";
	?>
		<ul>

	<?php if (strpos($action, 'add') === false): ?>
			<li><?php echo "<?php echo \$this->Form->postLink(__('Delete'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')), null, __('Are you sure you want to delete # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>";?></li>
	<?php endif;?>
			<li><?php echo "<?php echo \$this->Html->link(__('List " . $pluralHumanName . "'), array('action' => 'index'));?>";?></li>
		</ul>
	</div>
</div>