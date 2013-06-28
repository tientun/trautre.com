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
		<h1>Management Personal Photos</h1>
	</div>
  
	<!-- List Entries -->
	<div class="box-content">
		
	<?php 
		foreach($photos as $photo){	
	?>		
			<div class="list_addtional" style="margin-bottom:70px">
				<div class="un_release_img">
					<?php
						if(!empty($photo['Photo'])){
							$path_thumb = '../../'.Configure::read('SMALL_PHOTO_UPLOAD_PATH').$photo['Photo']['thumbnail'];
							echo $this->Html->image($path_thumb, array('enctype' => false)); 
						}
						else echo '';
					?>
				</div>
				<div id="view_contest_list_button">
					<?php
						echo $this->Html->link($this->Html->image('icons/icon_remove.png',array('alt'=>'Delete this photo', 'title'=>'Delete this photo')),array('action' => 'delete_photo/'.$photo['User']['id'].'/'.$photo['UserPhoto']['id']), array('escape'=>false, 'class' => 'removePhotoListEntry'));
						//echo $this->Html->link($this->Html->image('icons/icon_accept.png',array('alt'=>'Release this photo', 'title'=>'Release this photo')),array('controller' => 'entries', 'action' => 'release_photo/'.$list['Entry']['id'].'/'.$id), array('escape'=>false, 'class' => 'releasePhoto'), 'Are you sure you want to release this photo?');
					?>	
				</div>
				<span class="loading"></span>
				<div class="time_release">
					<div class="time_release_title">Content:</div>
					<div class="time_release_content" style="line-height:15px; height:75px; margin-bottom:10px; overflow:hidden">
						<?php echo $photo['UserPhoto']['content']; ?>
					</div>
				</div>
			</div>
	<?php	
		}
	?>
		<div style="clear:both"></div>
	</div>
	
</div>
