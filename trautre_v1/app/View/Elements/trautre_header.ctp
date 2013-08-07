<!--  start menu -->
<div id="header">
    <div id="headerContent">
        <a id="logo" href="/">Trautre.com</a>
        <ul id="menuBar">
            <li class="selected">
                <a href="/">Mới</a>
            </li>
            <li>
                <a href="#">Chưa xem</a>
            </li>
            <li>
                <a href="<?php echo $this->webroot;?>medias/vote">Bình chọn</a>
            </li>
            <li>
                <a href="#">Hot</a>
            </li>
            <li>
                <a href="#">Cũ</a>
            </li>
            <li>
                <a class="upload" href="/medias/upload">Đăng ảnh</a>
            </li>
            <li>
                <a href="#">Chế ảnh</a>
            </li>
            <li>
                <a href="#">Tìm kiếm</a>
            </li>
            <li>
                <a target="_blank" href="#">Diễn đàn</a>
            </li>
        </ul>
        <?php 
			$userId = $this->Session->read("userId");
			if(empty($userId)){
		?>
        <div id="loginPanel">
            <a class="loginButton" href="<?php echo $this->webroot;?>users/login">Đăng nhập</a>
        </div>
		<?php } else { ?>
		<div id="loginPanel">
                <a href="<?php echo $this->webroot;?>medias/user_media/<?php echo $userId;?>" class="profileButton">
                   <?php echo $this->Session->read("fullName");?>
                </a>
                <ul>
                    <li><a href="<?php echo $this->webroot;?>medias/user_media/<?php echo $userId;?>">Ảnh của bạn</a></li>
                    <li><a href="<?php echo $this->webroot."users/profile";?>">Thông tin cá nhân</a></li>
                    <li><a href="<?php echo $this->webroot;?>users/password">Đổi mật khẩu</a></li>
                    <li><a href="<?php echo $this->webroot;?>users/logout">Thoát</a></li>
                </ul>
        </div>
		<?php }?>
        <div class="clear"> </div>
    </div>
</div>
