<div class="box inputForm upload">
        <h3>
            Đăng video
            <a class="toggleMode" href="<?php echo $this->webroot;?>medias/upload">Đăng ảnh</a>
        </h3>
        <div class="tips">
            Bạn biết video clip hài hước, vui nhộn trên Youtube? Hãy chia sẻ tiếng cười với mọi người bằng cách đăng lên trautre. 
            Và đừng quên đọc <b style="color: red">Nội quy</b> ở bên phải nhé!
        </div>
			<form action="<?php echo $this->webroot;?>medias/upload_video" class="submitForm" id ="submitVideo" enctype="multipart/form-data" method="post">            <p class="required">
					<label for="YoutubeUrl">Đường dẫn đến video Youtube</label>
					<label class="help">Copy từ thanh địa chỉ trình duyệt mà bạn đang xem Youtube</label>
					<label class="help">Ví dụ: http://www.youtube.com/watch?v=9bZkp7q19f0</label>
					<input class="text largeWidth" id="link_video" name="data[Media][link]" type="text" value="">
					<span class="field-validation-error" id ="error_link_video"></span>
				</p>
				<div id="youtubeEmbed"></div>
				<p class="required">
					<label for="Caption">Tiêu đề của video</label>
					<input class="text largeWidth" id="name_video" name="data[Media][name]" type="text" value="">
					<span class="field-validation-error" id ="error_name_video" ></span>
				</p>
				<p class="buttonSet">
					<button class="buttons submitButton" type="submit" id="saveButton">
						Đăng video</button>
					<a class="buttons cancelButtons" href="/" disabled="disabled">Bỏ qua</a>
				</p>
			</form>    
		</div>