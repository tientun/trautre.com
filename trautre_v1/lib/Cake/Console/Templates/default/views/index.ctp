<div class="box">
	<div class="box-header">
		<h1>List popular <?php echo "<?php echo __('{$pluralHumanName}');?>";?></h1>
	</div>	
	<table class="datatable">
	<thead>
	<tr>
	<?php  foreach ($fields as $field):?>
		<th><?php echo "<?php echo \$this->Paginator->sort('{$field}');?>";?></th>
	<?php endforeach;?>
		<th class="actions"><?php echo "<?php echo __('Actions');?>";?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	echo "<?php
	foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
	echo "\t<tr>\n";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
			}
		}

		echo "\t\t<td class=\"actions\">\n";
		echo "\t\t\t<?php echo \$this->Html->link(__('View'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class'=>'button')); ?>\n";
	 	echo "\t\t\t<?php echo \$this->Html->link(__('Edit'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class'=>'button')); ?>\n";
	 	echo "\t\t\t<?php echo \$this->Form->postLink(__('Del'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class'=>'button'), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
		echo "\t\t</td>\n";
	echo "\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
	</tbody>
	</table>
<div class="action_bar nomargin"><div class="dataTables_info"><?php echo "<?php
	echo \$this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records of {:count}')
	));
	?>";?></div><div class="dataTables_paginate paging_full_numbers">
	<?php
		echo "<?php\n";
		echo "\t\techo '<span class=\"first paginate_button\">'.\$this->Paginator->first( __('First'), array(), null, array('class' => 'paginate_button_disabled')).'</span>';\n";	
		echo "\t\techo '<span class=\"previous paginate_button\">'.\$this->Paginator->prev( __('Prev'), array(), null, array('class' => 'paginate_button_disabled')).'</span>';\n";			
		echo "\t\techo '<span class=\"paginate_active\">'.\$this->Paginator->numbers(array('separator' => '</span><span class=\"paginate_active\">')).'</span>';\n";
		echo "\t\techo '<span class=\"next paginate_button\">'.\$this->Paginator->next(__('Next'), array(), null, array('class' => 'paginate_button_disabled')).'</span>';\n";
		echo "\t\techo '<span class=\"last paginate_button\">'.\$this->Paginator->last(__('Last'), array(), null, array('class' => 'paginate_button_disabled')).'</span>';\n";
		echo "\t?>\n";
	?>
	
	</div></div>
</div>
