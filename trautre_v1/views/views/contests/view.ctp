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
		<h1>Manage Contest Additional Photo</h1>
	</div>
  
	<!-- Add a photo -->
	<div class="box-content">
		<p>You can view, add, delete list of contest additional photo in here.</p>
		<a href="#modal1" class="modal button" id="ContestAdminAddPhotoFormH1">Add a photo</a>
	</div>
	
	<!-- List Entries -->
	<div class="box-content">
		
	<?php 
		$count = 0;
		foreach($lists as $list){
			if( strtotime($list['Entry']['date_release']) > strtotime(date('Y-m-d H:i:s',gmmktime())) ){
				$count++;
			} 
		}
		echo '<strong>Total of unreleased photos: <span style="color:red;font-size:14px;">'.$count.'</span></strong><br /><br />';
		
		foreach($lists as $list){
			
			//Photos haven't released yet
			if( strtotime($list['Entry']['date_release']) > strtotime(date('Y-m-d H:i:s',gmmktime())) ){
	?>		
				<div class="list_addtional">
					<div class="un_release_img">
					<?php
						if(!empty($list['Photo'])){
							$path_thumb = '../../'.Configure::read('SMALL_PHOTO_UPLOAD_PATH').$list['Photo']['thumbnail'];
							echo $this->Html->image($path_thumb, array('enctype' => false)); 
						}
						else echo '';
					?>
					</div>
					<div id="view_contest_list_button">
					<?php
						echo $this->Html->link($this->Html->image('icons/icon_remove.png',array('alt'=>'Delete this photo', 'title'=>'Delete this photo')),array('action' => 'delete_photo/'.$list['Entry']['id'].'/'.$list['Photo']['id']), array('escape'=>false, 'class' => 'removePhotoListEntry'));
						echo $this->Html->link($this->Html->image('icons/icon_accept.png',array('alt'=>'Release this photo', 'title'=>'Release this photo')),array('controller' => 'entries', 'action' => 'release_photo/'.$list['Entry']['id'].'/'.$id), array('escape'=>false, 'class' => 'releasePhoto'), 'Are you sure you want to release this photo?');
					?>	
					</div>
					<span class="loading"></span>
					<div class="time_release">
						<div class="time_release_title">Date Release:</div>
						<div class="time_release_content">
							<a href="#modal2" class="modal change_date_release_addtional" id="changeReleaseDate" title="Click here to change date release" alt="Click here to change date release"><?php echo date('m-d-Y H:i:s', strtotime($list['Entry']['date_release'])); ?></a>
							<div style="display:none" id="change_date_release_addtional_entry_id"><?php echo $list['Entry']['id'] ; ?></div>
							<div style="display:none" id="change_date_release_addtional_value"><?php echo $list['Entry']['date_release'] ; ?></div>
						</div>
					</div>
				</div>
		<?php
			//Photos have released
			} else {
		?>
				<div class="list_addtional">
					<div class="release_img">
					<?php
						if(!empty($list['Photo'])){
							$path_thumb = '../../'.Configure::read('SMALL_PHOTO_UPLOAD_PATH').$list['Photo']['thumbnail'];
							echo $this->Html->image($path_thumb, array('enctype' => false)); 
						}
						else echo '';
					?>
					</div>
					<div id="view_contest_list_button">
					<?php
						echo $this->Html->link($this->Html->image('icons/icon_remove.png',array('alt'=>'Delete this photo', 'title'=>'Delete this photo')),array('action' => 'delete_photo/'.$list['Entry']['id'].'/'.$list['Photo']['id']), array('escape'=>false, 'class' => 'removePhotoListEntry'));
					?>	
					</div>
					<span class="loading"></span>
					<div class="time_release">
						<div class="time_release_title">Date Release:</div>
						<div class="time_release_content"><?php echo date('m-d-Y H:i:s', strtotime($list['Entry']['date_release'])); ?></div>
					</div>
				</div>
	<?php	
			}	
		}
	?>
		<div style="clear:both"></div>
	</div>
	
</div>

<!-- Add Addtional Photos -->
<div id="modal1" class="box">
	<div class="box-header">
		<h1>Add a photo</h1>
	</div>
  
	<div class="box-content">
		<p>You can choose a photo to upload into additional contest.</p>
		
		<?php echo $this->Form->create('Contest', array('action' => 'add_photo/'.$id, 'enctype' => 'multipart/form-data', 'id' => 'ContestAdminAddPhotoForm'));?>
		<p>
			<span class="add_contest_label_custom">Add a photo</span>
			<?php echo $this->Form->input('Contest.upload_file', array('type' => 'file', 'label' => false, 'id' => 'addContestUploadFile', 'div' => false)); ?>
			<span class="hide_message" id="addContestUploadFile_error">(Please upload an image)</span>
			<span class="hide_message" id="addContestUploadFile_error1">(Invalid image. Try again, please!)</span>
		</p>
			
		<p>
			<span class="add_contest_label_custom">Choose release date</span>
			<?php echo $this->Form->input('Contest.date_release', array('type' => 'text', 'label' => false, 'id' => 'addContestFromDate', 'div' => false, 'readonly' => 'readonly')); ?>
			<span class="hide_message" id="addContestFromDate_error">(This field is required)</span>
		</p>	
			
		<div class="action_bar">
			<input type="submit" id="submit" value="Done" class="button blue" />
			<a href="#" class="close button">Close window</a>
		</div>
		
		<?php echo $this->Form->end(); ?>
	</div>
</div>

<!-- Change Date Release --> 
<div id="modal2" class="box">
	<div class="box-header">
		<h1>Change Date Release Photo</h1>
	</div>
  
	<div class="box-content">
		<?php echo $this->Form->create('Entry', array('action' => 'change_release_date/'.$id, 'id' => 'ChangeReleaseDateAddtional'));?>
		
		<p>
			<span class="add_contest_label_custom">Choose release date</span>
			<?php echo $this->Form->input('Entry.date_release', array('type' => 'text', 'label' => false, 'id' => 'changeReleaseDateInput', 'div' => false, 'readonly' => 'readonly')); ?>
			<span class="hide_message" id="changeReleaseDateInput_error">(This field is required)</span>
		</p>	
			
		<div class="action_bar">
			<input type="submit" id="submit" value="Done" class="button blue" />
			<a href="#" class="close button">Close window</a>
		</div>
		
		<div style="display:none" id="changeReleaseDateLink"><?php echo $html->url(array('controller'=>'entries', 'action'=>'change_release_date/'.$id));?></div>
		
		<?php echo $this->Form->end(); ?>
	</div>
</div>