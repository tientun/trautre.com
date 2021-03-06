<!-- Thong bao loi -->
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
		<h1>Manage User Comments</h1>
	</div>
	
	<table class="datatable">
		<thead>
			<tr>
				<th>ID</th>
				<th>Entry</th>
				<th>Content</th>
				<th>Total of likes</th>
				<th>Photo</th>
				<th>Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($comments as $comment):?>
			<tr>
				<td><?php echo $comment['EntryComment']['id']; ?></td>
				<td><?php echo $comment['Entry']['title']; ?></td>
				<td>
				<?php
					if( strlen($comment['EntryComment']['content']) < 300 ){
						echo $comment['EntryComment']['content'];
					}
					else {
				?>
						<span id="excerpt_content">
							<?php echo $this->Text->truncate($comment['EntryComment']['content'], 200, array('ending' => '...', 'exact' => false));?>
						</span>
						<span class="read_more_comment">(Read more)</span>
						<span id="full_content" class="hide_comment">
							<?php echo $comment['EntryComment']['content'] ;?>
						</span>
				<?php
					}
				?>	
				</td>
				<td style="text-align:center;font-weight:bold">
				<?php 
					if(!empty($comment['EntryCommentLike'])) echo count($comment['EntryCommentLike']);
					else echo "0";
				?>	
				</td>
				<td>
				<?php
					if(!empty($comment['EntryCommentPhoto'])){
						foreach($comment['EntryCommentPhoto'] as $comment_photo){
							$photo = $this->requestAction('/photos/photo_info/'.$comment_photo['photo_id']);
							$path_thumb = '../../'.Configure::read('SMALL_PHOTO_UPLOAD_PATH').$photo['Photo']['thumbnail'];
							echo $this->Html->image($path_thumb, array('enctype' => false, 'class' => 'contest_list_img', 'style' => 'margin-right:5px; margin-bottom:5px;')); 
						}
					}
					else echo "";
				?>	
				</td>
				<td><?php echo date('d/m/Y H:i:s', strtotime($comment['EntryComment']['created'])); ?></td>
				<td style="text-align:center">
				<?php
					echo $this->Html->link($this->Html->image('icons/icon_delete.png',array('alt'=>'Delete Comment', 'title'=>'Delete Comment')),array('action' => 'delete_comment/'.$comment['EntryComment']['id'].'/'.$user_id), array('escape'=>false, 'class' => 'button_setting'), 'Are you sure you want to remove this comment?');
				?>       
				</td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</div>
