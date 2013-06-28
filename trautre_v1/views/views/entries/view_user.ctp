<!-- Thông báo lỗi -->
<?php 
	$success_mess = $this->Session->flash('success'); 
	$fail_mess = $this->Session->flash('error');
	if(!empty($success_mess)) { 
		echo '<div class="message success" style="display: block;">'.$success_mess.'</div> ';
	}
	else if(!empty($fail_mess)) { 
		echo '<div class="message errormsg" style="display: block;">'.$fail_mess.'</div> ';
	}
?>
 
<div class="box">
	<div class="box-header">
		<h1>Manage User Entries</h1>
	</div>
	
	<table class="datatable">
		<thead>
			<tr>
				<th>ID</th>
				<th>Contest</th>
				<th>Title</th>
				<th>Content</th>
				<th>Total of comments</th>
				<th>Total of likes</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($entries as $entry):?>
			<tr>
				<td><?php echo $entry['Entry']['id'] ; ?></td>
				<td><?php echo $entry['Contest']['title'] ; ?></td>
				<td><?php echo $entry['Entry']['title'] ; ?></td>
				<td><?php echo $entry['Entry']['content'] ; ?></td>
				<td style="text-align:center;font-weight:bold;">
				<?php
					$comment = $this->requestAction('/entry_comments/count_comment/'.$entry['Entry']['id']);
					echo $this->Html->link($comment, array('controller' => 'entry_comments', 'action' => 'view_detail/'.$entry['Entry']['id']), array('escape' => false, 'title' => 'Manage Entry Comments', 'alt'=>'Manage Entry Comments'));
				?>
				</td>
				<td style="text-align:center;font-weight:bold;">
				<?php
					$like = $this->requestAction('/entry_comments/count_like/'.$entry['Entry']['id']);
					echo $like;
				?>
				</td>
				
				<td style="text-align:center">
				<?php
					//echo $this->Html->link($this->Html->image('icons/icon_manager.png',array('alt'=>'Manage Contest Additional Photo', 'title'=>'Manage Contest Additional Photo')),array('action' => 'view/'.$contest['Contest']['id']), array('escape'=>false, 'class' => 'button_setting'));
					//echo "&nbsp;";
					//echo $this->Html->link($this->Html->image('icons/icon_winner.png',array('alt'=>'Manage Contest Entries', 'title'=>'Manage Contest Entries')),array('action' => 'winner/'.$contest['Contest']['id']), array('escape'=>false, 'class' => 'button_setting'));
					//echo "&nbsp;";
					//echo $this->Html->link($this->Html->image('icons/icon_edit.png',array('alt'=>'Edit', 'title'=>'Edit')),array('action' => 'edit/'.$contest['Contest']['id']), array('escape'=>false, 'class' => 'button_setting'));
					//echo $this->Html->link($this->Html->image('icons/icon_delete.png',array('alt'=>'Delete', 'title'=>'Delete')),array('action' => 'delete/'.$contest['Contest']['id']), array('escape'=>false),'Are you sure you want to delete this contest?');
					//if($check){
					//	echo $this->Html->link($this->Html->image('icons/icon_edit.png',array('alt'=>'Edit', 'title'=>'Edit')),array('action' => 'edit/'.$contest['Contest']['id']), array('escape'=>false, 'class' => 'button_setting'));
					//}
					echo $this->Html->link($this->Html->image('icons/icon_delete.png',array('alt'=>'Delete', 'title'=>'Delete')),array('action' => 'delete_entry/'.$entry['Entry']['id'].'/'.$user_id), array('escape'=>false),'Are you sure you want to delete this entry?');
				?>       
				</td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</div>