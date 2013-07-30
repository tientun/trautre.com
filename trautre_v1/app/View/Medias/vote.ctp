<!-- Content Main -->
<div class="box">

    <!-- Messenge Notification -->
    <h3>Ảnh mới</h3>    
    <!-- List Picture -->
    <div class="photoList">

        <!--  Photo 1 -->
        <?php $i = 0;
        foreach ($medias as $media) { ?>
            <div class="photoListItem" data-id="<?php echo $media['Media']['id']; ?>">
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
                <div class="info<?php echo $i; ?>">
                    <h2>
                        <a href="<?php echo $this->webroot; ?>medias/view/<?php echo $media['Media']['id'] . "/" . $this->Upload->seoTitle($media['Media']['name']); ?>" target="_blank">
    <?php echo $media['Media']['name']; ?>                        
                        </a>
                    </h2>
                    <div class="uploader">
                        Đăng bởi
                        <a href="#"><?php echo $media['User']['full_name']; ?></a>
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
                                    <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo Configure::read('WEBSITE'); ?>medias/view/<?php echo $media['Media']['id'] . "/" . $media['Media']['media_type_id'] . "/" . $this->Upload->seoTitle($media['Media']['name']); ?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=218105908338859" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
                                </span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>                
                </div>
                <div class="clear"> </div>
            </div>  
    <?php $i++;
} ?>
        <div class="clear"></div>

    </div>                              
</div>