<!-- Content Main -->
<div class="box">
    <!-- Messenge Notification -->
    <h3>Ảnh mới</h3>
    <div class="tips">
        <b>Mẹo: </b> <a href="#">Đăng nhập vào Facebook</a> để duyệt haivl sướng hơn!
    </div>
    
<?php foreach ($images as $image): ?>
    <?php #var_dump($image); ?>
<tr>
    <td><?php #echo $image['Vote']['id']; ?></td>
    <td><?php #echo $image['Vote']['name']; ?></td>    
    <td><?php #echo $image['Vote']['author']; ?></td>  
    <td><?php #echo $image['Vote']['link']; ?></td>  
    <td><?php #echo $image['Vote']['date']; ?></td>  
</tr>
<?php endforeach; ?>
<!-- PAGING -->
<div style="text-align: right; font-size:12px; font-weight: bold; color: blue;">
<?php
	//shows the next and previous links
 //$this->Paginator->settings = array('limit' => 10);
	echo $this->Paginator->prev('<<-Previous ', null, null, array('class'=> 'disabled'));
	//show page numbers
	echo " | ".$this->Paginator->numbers()." | ";
	echo $this->Paginator->next(' Next ->>', null, null, array('class'=>'disabled'));
	echo " Page ".$this->Paginator->counter();
	?>
</div>
    <!-- List Picture -->
    <div class="photoList">
        <?php foreach ($images as $image) : ?>    
        <div class="photoListItem" data-id="614669">
            <div class="listItemSeparator"> </div>
            <!-- Photo -->
            <div class="thumbnail">
                <a target="_blank" href="#">
                    <?php #$string = $image['Image']['images']; ?>
                    <img class="thumbImg"
                         src="<?=$this->webroot?>uploaded/images/data/images.jpg" 
                         alt="image test" />
           
          </a>
            </div>
            <!-- Information for photo -->
            <div class="info">
                <h2>
                    <?php echo "<a href='".$this->webroot."votes/".$image['Vote']['id']."' >";
                            ?>
                        [Media][name] <?php echo $image['Vote']['id']; 
                                            echo $image['Vote']['name']; ?>
                        <img class="emo" src="http://s.haivl.com/content/images/emo/static/wtf.png">
                    </a>
                </h2>
                <div class="uploader">
                    Đăng bởi <a href="#"><?php echo $image['Vote']['author']; ?></a>
                    <?php echo $image['Vote']['date']; ?>
                </div>
                <div class="stats">
                    <div class="viewComments">
                        <span class="views" title="lượt xem">197</span>
                        <span class="comments" title="lượt bình luận">4</span>
                    </div>
                    <div class="likesWrapper">
                        <div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" 
                             data-show-faces="false" data-width="90" data-layout="button_count" 
                             data-send="false" data-href="http://www.haivl.com/photo/621268" 
                             fb-xfbml-state="rendered">
                            <span style="height: 20px; width: 74px;">
                                <iframe id="f86928ce55d9e6" class="fb_ltr" 
                                        scrolling="no" name="f1e11500f895cfc" 
                                        style="border: medium none; overflow: hidden; height: 20px; width: 74px;"
                                        title="Like this content on Facebook." 
                                        src="http://www.facebook.com/plugins/like.php?api_key=378808135489760&locale=en_US&sdk=joey&channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D25%23cb%3Df32a1d382418b22%26origin%3Dhttp%253A%252F%252Fwww.haivl.com%252Ff181e53e1ea1d7c%26domain%3Dwww.haivl.com%26relation%3Dparent.parent&href=http%3A%2F%2Fwww.haivl.com%2Fphoto%2F621268&node_type=link&width=90&layout=button_count&colorscheme=light&show_faces=false&send=false&extended_social_context=false"></iframe>
                            </span>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <br/><br/>
                <div id="btChecking">
                    <button id="buttonChecking" class="buttons">Duyệt</button>
                </div>
            </div>
            <div class="clear"> </div>
        </div>
<?php endforeach; ?>
    </div>                              
    <!-- PAGING -->
<div style="text-align: right; font-size:12px; font-weight: 1em; color: blueviolet;">
<?php
	//shows the next and previous links
 //$this->Paginator->settings = array('limit' => 10);
	echo $this->Paginator->prev('<<-Previous ', null, null, array('class'=> 'disabled'));
	//show page numbers
	echo " | ".$this->Paginator->numbers()." | ";
	echo $this->Paginator->next(' Next ->>', null, null, array('class'=>'disabled'));
	echo " Page ".$this->Paginator->counter();
	?>
</div>
</div>