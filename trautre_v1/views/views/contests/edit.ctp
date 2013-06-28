<div class="box">
	<div class="box-header">
		<h1>Edit a contest</h1>
	</div>
	
	<?php echo $this->Form->create('Contest', array('enctype'=>'multipart/form-data', 'id' => 'ContestAdminEditForm'));?>
	
    <div class="add_contest_custom">
		<p id="ediContestUploadFile_thumbnail">
			<span class="add_contest_label_custom">Thumbnail</span><br />
			<?php
				$path_thumb = '../../'.Configure::read('SMALL_PHOTO_UPLOAD_PATH').$this->data['Photo']['thumbnail'];
				echo $this->Html->image($path_thumb, array('enctype' => false)); 
				echo '<br /><br />';
				echo '<button class="button blue" id="editContestRemoveImage">Remove</button>';
			?>
		</p>
	
		<p id="ediContestUploadFile_addphoto">
			<span class="add_contest_label_custom">Add a photo</span>
			<?php echo $this->Form->input('Contest.upload_file', array('type' => 'file', 'label' => false, 'id' => 'addContestUploadFile', 'div' => false)); ?>
			<span class="hide_message" id="addContestUploadFile_error">(Please upload an image)</span>
			<span class="hide_message" id="addContestUploadFile_error1">(Invalid image. Try again, please!)</span>
		</p>
        
		<p>
			<span class="add_contest_label_custom">Title of the contest</span>
			<?php echo $this->Form->input('Contest.title', array('type' => 'text', 'label' => false, 'id' => 'addContestTitle', 'div' => false)); ?>
			<span class="hide_message" id="addContestTitle_error">(This field is required)</span>
		</p>
        
		<p>
			<span class="add_contest_label_custom">Description</span>
			<?php echo $this->Form->textarea('Contest.description', array('label' => false, 'id' => 'addContestDescription', 'div' => false)); ?>
			<span class="hide_message" id="addContestDescription_error">(This field is required)</span>
		</p>
			
		<p>
			<span class="add_contest_label_custom">From</span>
			<?php echo $this->Form->input('Contest.start_date', array('type' => 'text', 'label' => false, 'id' => 'addContestFromDate', 'div' => false, 'readonly' => 'readonly')); ?>
			<span class="hide_message" id="addContestFromDate_error">(This field is required)</span>
		</p>
			
		<p>
			<span class="add_contest_label_custom">To</span>
			<?php echo $this->Form->input('Contest.end_date', array('type' => 'text', 'label' => false, 'id' => 'addContestToDate', 'div' => false, 'readonly' => 'readonly')); ?>
			<span class="hide_message" id="addContestToDate_error">(This field is required)</span>
			<span class="hide_message" id="addContestToDate_error1">(End date cannot be less then Start date. Try again, please!)</span>
		</p>
		
		<p>
			<span class="add_contest_label_custom">Conditions to win</span>
			<?php echo $this->Form->textarea('Contest.conditions', array('label' => false, 'id' => 'addContestConditions', 'div' => false)); ?>
			<span class="hide_message" id="addContestConditions_error">(This field is required)</span>
		</p>
		
		<p>
			<span class="add_contest_label_custom">Status</span>
			<?php 
				echo $this->Form->input('Contest.status',array('label' => '', 'div' => false)); 
			?> 
		</p>
    </div>
 
    <div class="action_bar">
		<input type="submit" id="submit" value="Done" class="button blue" />
		<?php echo $this->Html->link('Cancel', array('controller' => 'contests', 'action' => 'index'), array('class' => 'button')); ?>
    </div>
	
</div>