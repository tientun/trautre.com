<!-- Cấu hình ngày giờ -->
<?php //date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>

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
		<h1>List popular contests</h1>
	</div>
	
	<table class="datatable">
		<thead>
			<tr>
				<th>ID</th>
				<th>Thumbnail</th>
				<th>Title</th>
				<th>Description</th>
				<th>Conditions</th>
				<th>Duration</th>
				<th>Additional Photo</th>
				<th>Contest Entries</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($contests as $contest){ ?>
		<?php
			//So sánh ngày hiện tại với End Date
			//$time = date('d/m/Y H:i:s');
			
			/* 
			$time = date('d-m-Y');
			$end_date = explode(" ", $contest['Contest']['end_date']);
			$check = true;
					
			if( ($contest['Contest']['status'] == '2') || (strtotime($end_date[0]) < strtotime($time)) ){
				$check = false;
			}
			*/
		?>
			<tr>
				<td><?php echo $contest['Contest']['id'] ; ?></td>
				<td>
				<?php
					if(!empty($contest['Photo'])){
						$path_thumb = '../../'.Configure::read('SMALL_PHOTO_UPLOAD_PATH').$contest['Photo']['thumbnail'];
						echo $this->Html->image($path_thumb, array('enctype' => false, 'class' => 'contest_list_img')); 
					}
					else{
						echo '';
					}
				?>
				</td>
				<td><?php echo $contest['Contest']['title'] ; ?></td>
				<td><?php echo $contest['Contest']['description'] ; ?></td>
				<td><?php echo $contest['Contest']['conditions'] ; ?></td>
				<td><?php echo "<strong>From:</strong> ".$this->MyHelper->change_date_format($contest['Contest']['start_date'])."<br /><br /><strong>To:</strong> ".$this->MyHelper->change_date_format($contest['Contest']['end_date']) ; ?></td>
				<td style="text-align:center;font-weight:bold;">
				<?php
					$additional = $this->requestAction('/contests/count_additional_photo/'.$contest['Contest']['id']);
					echo $this->Html->link($additional, array('action' => 'view/'.$contest['Contest']['id']), array('escape' => false, 'title' => 'Manage Contest Additional Photo', 'alt'=>'Manage Contest Additional Photo'));
				?>
				</td>
				<td style="text-align:center;font-weight:bold;">
				<?php
					$list_entry = $this->requestAction('/contests/count_contest_entries/'.$contest['Contest']['id']);	
					echo $this->Html->link($list_entry, array('action' => 'winner/'.$contest['Contest']['id']), array('escape' => false, 'title' => 'Manage Contest Entries', 'alt'=>'Manage Contest Entries'));
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
					echo $this->Html->link($this->Html->image('icons/icon_edit.png',array('alt'=>'Edit', 'title'=>'Edit')),array('action' => 'edit/'.$contest['Contest']['id']), array('escape'=>false, 'class' => 'button_setting'));
				?>       
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>