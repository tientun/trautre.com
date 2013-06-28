<div class="box">
	<div class="box-header">
		<h1>Manage <?php echo "<?php  echo __('{$singularHumanName}');?>";?></h1>
	</div>

	<!-- List Entries -->
	<div class="box-content">
		
<?php
foreach ($fields as $field) {
	$isKey = false;
	if (!empty($associations['belongsTo'])) {
		foreach ($associations['belongsTo'] as $alias => $details) {
			if ($field === $details['foreignKey']) {
				$isKey = true;
				echo "\t\t<div class='time_release'><div class='time_release_title'><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></div>\n";
				echo "\t\t<div class='time_release_content'>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t&nbsp;\n\t\t</div></div>\n";
				break;
			}
		}
	}
	if ($isKey !== true) {
		echo "\t\t<div class='time_release'><div class='time_release_title'><?php echo __('" . Inflector::humanize($field) . "'); ?></div>\n";
		echo "\t\t<div class='time_release_content'>\n\t\t\t<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t\t&nbsp;\n\t\t</div></div>\n";
	}
}
?>	
	</div>
</div>