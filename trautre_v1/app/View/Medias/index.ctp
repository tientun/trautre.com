<div class="box">
    <!-- Messenge Notification -->
    <h3>Ảnh Mới</h3>    
    <!-- List Picture -->
    <div class="photoList container">
        <?php 
        foreach ($medias as $media) { ?>
        
            <div class="photoListItem row stickem-container" id="<?php echo $media['Media']['id']; ?>">
                <div class="listItemSeparator"> </div>
                <!-- 
                Kiểm tra là ảnh hay video 
                        Nếu là ảnh thì sẽ lấy ảnh từ database
                        Nếu là video thì lấy link video từ youtube.com
                -->
		<?php if ($media['Media']['media_type_id'] == 1) { ?>
                    <div class="thumbnail">
                        <a target="_blank" href="<?php echo $this->webroot; ?>medias/view/<?php echo $media['Media']['id'] . "/" . $this->Upload->seoTitle($media['Media']['name']); ?>">
                            <img class="thumbImg" alt="<?php echo $media['Media']['name']; ?>" 
                                 src="<?php echo $this->webroot . $media['Media']['link']; ?>">
                        </a>
                    </div>
                <?php
                } 
                else {                   
                    $arr = end(explode("/", $media['Media']['link']));
                    ?>
                    <div class="thumbnail">				
                        <a href="<?php echo $this->webroot; ?>medias/view/<?php echo $media['Media']['id'] . "/" . $this->Upload->seoTitle($media['Media']['name']); ?>" target="_blank">
                            <img data-src="http://img.youtube.com/vi/kf!<?php echo $arr; ?>/0.jpg" alt="<?php echo $media['Media']['name']; ?>" class="thumbImg" src="http://img.youtube.com/vi/<?php echo $arr; ?>/0.jpg">
                            <img src="http://s.haivl.com/content/images/play_icon1.png" class="videoIndicator">
                        </a>
                    </div>
		<?php } ?>
                <!-- class info -->
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
                         <?php
    $url = $this->webroot . 'medias/view/' . $media['Media']['id'] . "/" . $this->Upload->seoTitle($media['Media']['name']);
    #                     $url = the_permalink(); 
    $urlfb='http://api.ak.facebook.com/restserver.php?v=1.0&method=links.getStats&urls=' . urlencode($url) . '&format=json';
    $content=@file_get_contents($urlfb);
            if ($content) {
                $likeInfo=json_decode($content);
                        ?>
                            <!-- chưa lấy được lượt view, -->
                        <span class="views" title="lượt xem"><?php echo $likeInfo[0]->like_count; ?></span>
                        <span class="comments" title="lượt bình luận">
                            <?php echo $likeInfo[0]->comment_count; ?>
                        </span>
                        <?php                            
} else {
    echo 'Không thể kết nối Facebook!';
}
?>
                        </div>
                        
                        <div class="likesWrapper">
                            <div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-show-faces="false" data-width="90" data-layout="button_count" data-send="false" data-href="http://www.haivl.com/photo/621268" fb-xfbml-state="rendered">
                                <span style="height: 21px; width: 74px;">
                                    <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo Configure::read('WEBSITE'); ?>medias/view/<?php echo $media['Media']['id'] . "/" . $this->Upload->seoTitle($media['Media']['name']); ?>&amp;send=false&amp;layout=button_count&amp;width=74&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=190756931042973" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:74px; height:21px;" allowTransparency="true"></iframe>                                    
                                </span>
                            </div>
                        </div>
                       
                        <div class="clear"></div>
                    </div> 					
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