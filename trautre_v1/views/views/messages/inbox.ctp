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
		<h1>Inbox</h1>
	</div>
	
	<table class="datatable">
		<thead>
			<tr>
				<th>ID</th>
				<th>Subject</th>
				<th>Content</th>
				<th>From</th>
				<th>Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($messages as $message):?>
			<tr>
				<td><?php echo $message['Message']['id'] ; ?></td>
				<td>
				<?php
					if($message['Message']['read'] == '0'){
						echo $this->Html->link($message['Message']['subject'], array('action' => 'read/'.$message['Message']['id']), array('escape'=>false, 'class' => 'label_message_unread', 'alt'=>'Read message', 'title'=>'Read message'));
					}
					else {
						echo $this->Html->link($message['Message']['subject'], array('action' => 'read/'.$message['Message']['id']), array('escape'=>false, 'class' => 'label_message_read', 'alt'=>'Read message', 'title'=>'Read message'));
					}
				?>
				</td>
				<td><?php echo $this->Text->truncate($message['Message']['content'], 200, array('ending' => '...', 'exact' => false)) ; ?></td>
				<td>
				<?php 
					$user = $this->requestAction('/users/user_info/'.$message['Message']['from']);
					echo $user['User']['username'];
				?>
				</td>
				<td><?php echo date('d/m/Y H:i:s', strtotime($message['Message']['created'])); ?></td>
				<td style="text-align:center">
				<?php
					//echo $this->Html->link($this->Html->image('icons/icon_manager.png',array('alt'=>'Manage Contest Additional Photo', 'title'=>'Manage Contest Additional Photo')),array('action' => 'view/'.$contest['Contest']['id']), array('escape'=>false, 'class' => 'button_setting'));
					//echo "&nbsp;";
					//echo $this->Html->link($this->Html->image('icons/icon_winner.png',array('alt'=>'Manage Contest Entries', 'title'=>'Manage Contest Entries')),array('action' => 'winner/'.$contest['Contest']['id']), array('escape'=>false, 'class' => 'button_setting'));
					//echo "&nbsp;";
					//echo $this->Html->link($this->Html->image('icons/icon_edit.png',array('alt'=>'Edit', 'title'=>'Edit')),array('action' => 'edit/'.$contest['Contest']['id']), array('escape'=>false, 'class' => 'button_setting'));
					//echo $this->Html->link($this->Html->image('icons/icon_delete.png',array('alt'=>'Delete', 'title'=>'Delete')),array('action' => 'delete/'.$contest['Contest']['id']), array('escape'=>false),'Are you sure you want to delete this contest?');
					//if($check){
						//echo $this->Html->link($this->Html->image('icons/icon_edit.png',array('alt'=>'Edit', 'title'=>'Edit')),array('action' => 'edit/'.$contest['Contest']['id']), array('escape'=>false, 'class' => 'button_setting'));
					//}
					
					echo $this->Html->link($this->Html->image('icons/icon_read_message.png',array('alt'=>'Read message', 'title'=>'Read message')),array('action' => 'read/'.$message['Message']['id']), array('escape'=>false, 'class' => 'button_setting'));
					echo "&nbsp;";
					echo $this->Html->link($this->Html->image('icons/icon_delete.png',array('alt'=>'Delete message', 'title'=>'Delete message')),array('action' => 'delete/'.$message['Message']['id']), array('escape'=>false, 'class' => 'button_setting'), 'Are you sure you want to delete this message?');
				?>       
				</td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</div>
