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
		<h1>List finished contests</h1>
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
				<th>Winner</th>
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
					echo $additional;
				?>
				</td>
				<td style="text-align:center;font-weight:bold;">
				<?php
					$list_entry = $this->requestAction('/contests/count_contest_entries/'.$contest['Contest']['id']);	
					echo $list_entry;
				?>
				</td>
				<td>
				<?php
					$users = $this->requestAction('/winners/search/'.$contest['Contest']['id'] );
					if(!empty($users)){
						foreach($users as $user){
							echo '<span style="font-weight:bold; color:red">'.$user['User']['username'].'</span><br />';
						}
					}
					echo "";
				?>       
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>