
<div class="box photoDetails">
        <div class="photoInfo">
            <h1>
                <?php echo $media['Media']['name'];?></h1>
            <div class="stats">
                <span class="views">Lượt xem: <span class="number"><?php echo $media['Media']['number_view'];?></span></span>
                
            </div>
			
            <div class="source">
                <span class="source">Nguồn: <span class="text">
					<?php if($media['Media']['is_source'] ==1)
					{
						echo $media['Media']['link_source'];
					} else
					{
						echo "Tự tạo";
					}?>
				 </span></span>
            </div>
        </div>
        <div class="uploader">
            Đăng <?php
                        $date = date("Y-m-d H:i:s");
                        $ago = $this->Upload->ago($media['Media']['created'], $date);
                        echo $ago;
                        ?> bởi
            <div>
                <img src="<?php echo $media['User']['avatar'];?>" width ="30px" height ="30px">
                <div class="info">
                    <a href="<?php echo $this->webroot;?>medias/user_media/<?php echo $media['User']['id'];?>"><?php echo $media['User']['full_name'];?></a>
                    <span class="likes" title="lượt thích">0</span>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="fixedScrollDetector" data-fixedtop="43">
        </div>
        <div class="likeButton fixedScroll " style="position: relative;">
                <div class="text">
                    Thích ảnh này?
                </div>
                <div class="fbLikeButton">
                    <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo Configure::read('WEBSITE'); ?>medias/view/<?php echo $media['Media']['id'] . "/" . $this->Upload->seoTitle($media['Media']['name']); ?>&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=218105908338859" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe>
                </div>
                <div class="navButtons">
				<a class="prev" href="/photo/840403" title="hotkey: ← hoặc Z">Ảnh trước</a>    
                <a class="next" href="/photo/845754" title="hotkey: → hoặc X">Ảnh sau</a>                
				</div>
        </div>
        <div class="clear"> </div>
			<?php if($media['Media']['media_type_id'] ==1){?>
            <div class="photoImg">
                <img src="<?php echo $this->webroot.$media['Media']['link'];?>" alt="Nỗi niềm có ai thấu :))">
            </div>
			<?php } else { ?>
			<div class="photoImg">
				<iframe width="650" height="365" src="http://www.youtube.com/embed/shQunIAwvH4" frameborder="0" allowfullscreen=""></iframe>
			</div>
			<?php }?>
            <div class="featuredFanPage">
                <h4>
                    Like trautre trên Facebook để được cười nhiều hơn ^^</h4>
                <div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" ><span style="height: 24px; width: 600px;">
					<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fvnkenhthugian&amp;width=450&amp;height=35&amp;colorscheme=light&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;send=false&amp;appId=218105908338859" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe>
				</span></div>
            </div>
        <div class="commentContainer">
            <h4>
                Bình luận 
			</h4>
			
			<div class="tipComment">
				<b class="meo">Mẹo: </b>Ấn F5 nếu bình luận không tải được hoặc bị lỗi
			</div>

            <div class="fb-comments fb_iframe_widget">				
				<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
				<fb:comments href="<?php echo Configure::read('WEBSITE'); ?>medias/view/<?php echo $media['Media']['id'] . "/" ."/" . $this->Upload->seoTitle($media['Media']['name']); ?>"></fb:comments>
				
			</div>
        </div>
    </div>