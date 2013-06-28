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
		<h1>List all users</h1>
	</div>
	
	<table class="datatable">
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Email</th>
				<th>Fullname</th>
				<th>Total of entries</th>
				<th>Total of comments</th>
				<th>Total of wins</th>
				<!--<th>Status</th>-->
				<th>Paid</th>
				<th>Location</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($users as $user):?>
			<tr>
				<td><?php echo $user['User']['id'] ; ?></td>
				<td><?php echo $user['User']['username'] ; ?></td>
				<td><?php echo $user['User']['email'] ; ?></td>
				<td><?php echo $user['User']['fullname'] ; ?></td>
				<td style="text-align:center;font-weight:bold;"> 
					<?php
						$entry = $this->requestAction('/entries/count_entries/'.$user['User']['id']);
						echo $this->Html->link($entry, array('controller' => 'entries', 'action' => 'view_user/'.$user['User']['id']), array('escape' => false, 'title' => 'Manage User Entries', 'alt'=>'Manage User Entries'));
					?>
				</td>
				<td style="text-align:center;font-weight:bold;"> 
					<?php
						$comment = $this->requestAction('/entry_comments/count_comment_user/'.$user['User']['id']);
						echo $this->Html->link($comment, array('controller' => 'entry_comments', 'action' => 'view_comment_user/'.$user['User']['id']), array('escape' => false, 'title' => 'Manage User Comments', 'alt'=>'Manage User Comments'));
					?>
				</td>
				<td style="text-align:center;font-weight:bold;"> 
					<?php
						$win = $this->requestAction('/winners/total_of_win/'.$user['User']['id']);
						echo $win;
					?>
				</td>
				<!--
				<td>
				<?php 
					// if($user['User']['status'] == 0 || $user['User']['status'] == 1) echo "Inactive";
					// else if($user['User']['status'] == 2) echo "Active";
					// else echo "Other";
				?>
				</td>
				-->
				<td><?php echo $user['User']['paid'] ; ?></td>
				<td><?php echo $user['User']['location'] ; ?></td>
				<td style="text-align:center">
				<?php
					//echo $this->Html->link($this->Html->image('icons/icon_manager.png',array('alt'=>'Manage Contest Entries', 'title'=>'Manage Contest Entries')),array('action' => 'view/'.$contest['Contest']['id']), array('escape'=>false));
					//echo "&nbsp;";
					//echo $this->Html->link($this->Html->image('icons/icon_edit.png',array('alt'=>'Edit', 'title'=>'Edit')),array('action' => 'edit/'.$contest['Contest']['id']), array('escape'=>false));
					if( $user['User']['status'] == 2 ){
						echo $this->Html->link($this->Html->image('icons/icon_user.png', array('alt' => 'Deactivate User', 'title' => 'Deactivate User')), array('action' => 'deactivate/'.$user['User']['id']), array('escape' => false), 'Are you sure you want to deactivate this user?');
					}
					else{
						echo $this->Html->link($this->Html->image('icons/icon_user_deactivate.png', array('alt' => 'Activate User', 'title' => 'Activate User')), array('action' => 'activate/'.$user['User']['id']), array('escape' => false), 'Are you sure you want to activate this user?');
					}
					
					echo "&nbsp;";
					echo $this->Html->link($this->Html->image('icons/personal_photo.png', array('alt' => 'Management Personal Photos', 'title' => 'Management Personal Photos')), array('controller' => 'user_photos', 'action' => 'view/'.$user['User']['id']), array('escape' => false));
					
				?>       
				</td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</div>