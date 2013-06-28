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
		<h1>Manage Contest Entries</h1>
	</div>
	
	<table class="datatable">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Content</th>
				<th>Photo</th>
				<th>Number of comments</th>
				<th>Number of likes</th>
				<th>User</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($list_entries as $entry):?>
			<tr>
				<td><?php echo $entry['Entry']['id'] ; ?></td>
				<td><?php echo $entry['Entry']['title'] ; ?></td>
				<td>
				<?php
					if( strlen($entry['Entry']['content']) < 300 ){
						echo $entry['Entry']['content'];
					}
					else {
				?>
						<span id="excerpt_content">
							<?php echo $this->Text->truncate($entry['Entry']['content'], 200, array('ending' => '...', 'exact' => false));?>
						</span>
						<span class="read_more_comment">(Read more)</span>
						<span id="full_content" class="hide_comment">
							<?php echo $entry['Entry']['content'];?>
						</span>
				<?php
					}
				?>	
				</td>
				<td>
				<?php
					if(!empty($entry['EntryPhoto'])){
						foreach($entry['EntryPhoto'] as $photo){
							$path_thumb = '../../'.Configure::read('SMALL_PHOTO_UPLOAD_PATH').$photo['Photo']['thumbnail'];
							echo $this->Html->image($path_thumb, array('enctype' => false, 'class' => 'contest_list_img', 'style' => 'margin-right:5px; margin-bottom:5px;')); 
						}
					}
					else{
						echo '';
					}
				?>
				</td>
				<td style="text-align:center;font-weight:bold;">
				<?php
					$comment = $this->requestAction('/entry_comments/count_comment/'.$entry['Entry']['id']); 
					echo $this->Html->link($comment, array('controller' => 'entry_comments', 'action' => 'view_detail/'.$entry['Entry']['id']), array('escape' => false, 'title' => 'Manage Entry Comments', 'alt'=>'Manage Entry Comments'));
				
				?>
				</td>
				<td style="text-align:center;font-weight:bold;">
				<?php 
					if(!empty($entry['EntryLike'])) echo count($entry['EntryLike']);
					else echo "0";
				?>	
				</td>
				<td><?php echo $entry['User']['username'] ; ?></td>
				<!--
				<td>
				<?php
					$winner = $this->requestAction('/contests/check_winner/'.$entry['Contest']['id'].'/'.$entry['User']['id']);
					/* if($winner) echo '<span class="winner_user">Winner</span>';
					else ''; */
				?>
				</td>
				-->
				<td style="text-align:center">
				<?php
					if($winner) echo $this->Html->link($this->Html->image('icons/select_winner.png',array('alt'=>'Remove Winner', 'title'=>'Remove Winner')),array('action' => 'remove_winner',$entry['Contest']['id'],$entry['User']['id'],$entry['Entry']['id']), array('escape'=>false, 'class' => 'button_setting'), 'Are you sure you want to remove this winner?');
					else echo $this->Html->link($this->Html->image('icons/select_winner_unactive.png',array('alt'=>'Select Winner', 'title'=>'Select Winner')),array('action' => 'set_winner',$entry['Contest']['id'],$entry['User']['id'],$entry['Entry']['id']), array('escape'=>false, 'class' => 'button_setting'), 'Are you sure you want to select this winner and the contest has been finished?');
					echo "&nbsp;";
					echo $this->Html->link($this->Html->image('icons/icon_delete.png',array('alt'=>'Delete Entry', 'title'=>'Delete Entry')),array('action' => 'delete_entry/'.$entry['Entry']['id'].'/'.$entry['Contest']['id']), array('escape'=>false, 'class' => 'button_setting'), 'Are you sure you want to remove this entry?');
					
				?>       
				</td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</div>
