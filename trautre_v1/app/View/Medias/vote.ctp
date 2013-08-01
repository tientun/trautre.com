
<script type="text/javascript">
	$(document).ready(function(){
		function last_msg_funtion() 
		{  
			var ID=$(".photoListItem:last").attr("id");
				$("#load-hidden").show();
				$.post("<?php echo $this->webroot;?>medias/ajaxload/"+ID,
				
				function(data){	
					
					if (data != "") {
						$(".photoListItem:last").after(data);
					}
					$("#load-hidden").hide();
				});
		}; 
		
		$(window).scroll(function(){
			if  ($(window).scrollTop() == $(document).height() - $(window).height()){
			   last_msg_funtion();
			}
		}); 
		
	});
	
	function active_is_home(id)
	{
		var r=confirm("Bạn có muốn đưa bài viết này ra ngoài trang chủ không?");
		if (r==true){
			$('.loading_'+id).html('<img src="<?php echo $this->webroot;?>img/loading.gif">');
			var url= '<?php echo $this->webroot;?>medias/active_is_home';
			url =url+"/"+id;
			jQuery.ajax({
				type: "POST", 
				url: url, 
				data:"",
				success: function(data){
					if(data =="success")
					{
						$(".is_active_home_"+id).empty();
						$('.loading_'+id).html("");
					}
				}
			});
		}else{
		  return false;
		}
	}
	
	function active_is_del(id)
	{
		var r=confirm("Bài viết này vi phạm nội quy của website. Bạn có muộn pendding không?");
		if (r==true){
			$('.loading_'+id).html('<img src="<?php echo $this->webroot;?>img/loading.gif">');
			var url= '<?php echo $this->webroot;?>medias/active_is_del';
			url =url+"/"+id;
			jQuery.ajax({
				type: "POST", 
				url: url, 
				data:"",
				success: function(data){
					if(data =="success")
					{
						$(".peddingPost_"+id).hide();
						$('.loading_'+id).html("");
						
					}
				}
			});
		}else{
		  return false;
		}
	}
	</script>

<div class="box">

    <!-- Messenge Notification -->
    <h3>Ảnh mới</h3>    
    <!-- List Picture -->
    <div class="photoList">
		
        <!--  Photo 1 -->
        <?php 
        foreach ($medias as $media) { ?>
            <div class="photoListItem is_active_home_<?php echo $media['Media']['id'];?>" id="<?php echo $media['Media']['id']; ?>">
                <div class="listItemSeparator"> </div>
				
                <!-- Photo -->
			<?php if ($media['Media']['media_type_id'] == 1) { ?>
                    <div class="thumbnail">
                        <a target="_blank" href="<?php echo $this->webroot; ?>medias/view/<?php echo $media['Media']['id'] . "/" . $this->Upload->seoTitle($media['Media']['name']); ?>">
                            <img class="thumbImg" alt="<?php echo $media['Media']['name']; ?>" src="<?php echo $this->webroot . $media['Media']['link']; ?>">
                        </a>
                    </div>
                <?php
                } else {
                    $arr = end(explode("/", $media['Media']['link']));
                    ?>
                    <div class="thumbnail">				
                        <a href="<?php echo $this->webroot; ?>medias/view/<?php echo $media['Media']['id'] . "/" . $this->Upload->seoTitle($media['Media']['name']); ?>" target="_blank">
                            <img data-src="http://img.youtube.com/vi/kf!<?php echo $arr; ?>/0.jpg" alt="<?php echo $media['Media']['name']; ?>" class="thumbImg" src="http://img.youtube.com/vi/<?php echo $arr; ?>/0.jpg">
                            <img src="http://s.haivl.com/content/images/play_icon1.png" class="videoIndicator">
                        </a>
                    </div>
					<?php } ?>
                <!-- Note -->
                <div class="info stickem">                    
					<h2>
                        <a href="<?php echo $this->webroot; ?>medias/view/<?php echo $media['Media']['id'] . "/" . $this->Upload->seoTitle($media['Media']['name']); ?>" target="_blank">
							<?php echo $media['Media']['name']; ?>                        
                        </a>
                    </h2>
                    <div class="uploader">
                        Đăng bởi
                        <a href="<?php echo $this->webroot;?>medias/user_media/<?php echo $media['User']['id'];?>"><?php echo $media['User']['full_name']; ?></a>
                        <?php
                        $date = date("Y-m-d H:i:s");
                        $ago = $this->Upload->ago($media['Media']['created'], $date);
                        echo $ago;
                        ?>
                    </div>
                    <div class="stats">
                        <div class="viewComments">
                            <span class="views" title="lượt xem"><?php echo $media['Media']['number_view']; ?></span>
                            <span class="comments" title="lượt bình luận">0</span>
                        </div>
                        <div class="likesWrapper">
                            <div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-show-faces="false" data-width="90" data-layout="button_count" data-send="false" data-href="http://www.haivl.com/photo/621268" fb-xfbml-state="rendered">
                                <span style="height: 20px; width: 74px;">
                                    <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo Configure::read('WEBSITE'); ?>medias/view/<?php echo $media['Media']['id'] . "/" ."/" . $this->Upload->seoTitle($media['Media']['name']); ?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=218105908338859" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
                                </span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div> 
					<?php 
						$userId = $this->Session->read("userId");
						if(!empty($userId))
						{
							$check = $this->requestAction("/stats/check_stat/".$media['Media']['id']."/".$userId);
						
						?>
							<div class ="vote_post">
								<ul>
									<?php if($check ==1)
									{?>
									<li><img src ="<?php echo $this->webroot;?>img/up.png"/></li>
									<li class ="numberVote"><?php echo count($media['Stat']);?></li>
									<li><a href ="#"><img src ="<?php echo $this->webroot;?>img/down.png"/></a></li>
									<?php } else {?>
									<li><a href ="#"><img src ="<?php echo $this->webroot;?>img/up.png"/></a></li>
									<li class ="numberVote"><?php echo count($media['Stat']);?></li>
									<li><img src ="<?php echo $this->webroot;?>img/down.png"/></li>
									<?php }?>
								</ul>
							</div>
						<?php } else {?>
							<div class ="vote_post">
								<ul>
									<li><img src ="<?php echo $this->webroot;?>img/down.png" alt ="" title ="Vui lòng đăng nhập để thực hiện chức năng này."/></li>
									<li class ="numberVote"><?php echo count($media['Stat']);?></li>
									<li><img src ="<?php echo $this->webroot;?>img/up.png" alt ="" title ="Vui lòng đăng nhập để thực hiện chức năng này."/></li>
								</ul>
							</div>
						<?php }?>
					<?php $roleId = $this->Session->read("roleId");
						if($roleId ==1){
					?>
						<div class ="action">
							<h2>Hành động</h2>
							<ul>
								<li><a href ="javascript:void(0);" onclick ="active_is_home(<?php echo $media['Media']['id'];?>)" class ="checkHome"><img src ="<?php echo $this->webroot;?>img/tick_circle.png" title ="Đưa ra trang chủ" alt ="Đưa ra trang chủ" /></a></li>
								<li><a href ="javascript:void(0);" onclick ="active_is_del(<?php echo $media['Media']['id'];?>)" class ="peddingPost_<?php echo $media['Media']['id'];?>"><img src ="<?php echo $this->webroot;?>img/cross_circle.png" title ="Bài viết vi phạm nội quy" alt ="Bài viết vi phạm nội quy" /></a></li>
								
								<li class ="loading_<?php echo $media['Media']['id'];?>"></li>
							</ul>
							
						</div>
					<?php }?>
                </div>
                <div class="clear"> </div>
            </div>  
			<?php 	} ?>
        <div class="clear"></div>
    </div> 
	 <div id="load-hidden" align="center" style="display: none !important;text-align: center;" >
		<img src="<?php echo $this->webroot;?>img/loading.gif" alt="Loading..." />
	</div>	
</div>