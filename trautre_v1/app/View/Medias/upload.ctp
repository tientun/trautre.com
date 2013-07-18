<div class="box inputForm upload">
                            <h3>Đăng hình ảnh mới
                                <a class="toggleMode" href="#">Đăng video</a>
                            </h3>
                            <div class="tips">
                                Bạn có ảnh hài hước, vui nhộn? Hãy chia sẻ tiếng cười với mọi người bằng cách đăng lên haivl. Và đừng quên đọc
                                <b style="color: red">Nội quy</b>
                                ở bên phải nhé!
                            </div>
                            <form id ="submitForm" class="submitForm" method="post" 
                                  action="<?php echo $this->Html->url('/medias/upload'); ?>" 
                                  enctype="multipart/form-data">
                                <p class="required">
                                    <label for="file"> Chọn file ảnh (không quá 2Mb)</label>                                    
                                        <?php echo $this->Form->file('Media.photos');?>
                                    <!--                                    
                                    <input type="file" name="photos">
                                    <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="File"></span>                                    
                                    -->
                                    
                                </p>                                
                                <p class="required">
                                    <label for="Caption">Tiêu đề của ảnh</label>
                                    <input id="Caption" class="text largeWidth" type="text" value="" name="Caption" data-val-required="Tiêu đề của ảnh là bắt buộc." data-val-length-max="150" data-val-length="Không nhập quá 150 ký tự." data-val="true">
                                    <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Caption"></span>
                                </p>
                                <p>
                                    <input id="IsSelfMade" class="checkBoxWidth" type="checkbox" value="true" name="IsSelfMade"
                                           data-val-required="The Ảnh này do tui tự làm! field is required." data-val="true"
                                           onclick='clickMade(this);' >
                                    <input type="hidden" value="false" name="IsSelfMade">
                                    <label class="checkboxLabel" for="IsSelfMade">Ảnh này do tui tự làm!</label>
                                </p>
                                <p>
                                    <label for="Source">Nguồn của ảnh</label>
                                    <input id="Source" class="text largeWidth" type="text" value="" name="Source" data-val-length-max="1000" 
                                           data-val-length="Không nhập quá 1000 ký tự." data-val="true">
                                    <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Source"></span>
                                </p>
                                
                                <p class="buttonSet">
                                    <button id="saveButton" class="buttons submitButton" type="submit" name="go"> Đăng ảnh</button>
                                    
                                    <a class="buttons cancelButtons" href="/">Bỏ qua</a>
                                </p>
                            </form>
</div>
                       