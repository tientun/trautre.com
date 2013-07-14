<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class MediasController extends AppController {

    var $name = 'Medias';
    var $helpers = array('Html', 'Form', 'Time', 'Images');
    var $components = array('Upload');      // nạp Component upload        
/**
 * index method
 *
 * @return void
 */
	public function index() {                
	}
        function upload() {                     
            if (empty($this->data)) {
                    die("1. Upload Error!");
                    $this->render();
            } 
            else {      
                $time = microtime ( 1 ) * 1000;
                //$destination = realpath('../../app/webroot/img/uploads/') . '/';                                        
                $dir = realpath(WWW_ROOT . 'uploaded/images/data/') . '/';                                        
                $file = $this->data['Media']['photos'];                    
                $sizes = getimagesize($file['tmp_name']);                
                $width = $sizes[0];$height = $sizes[1];               
                $file['name']=md5($time).$file['name'];

                if(@move_uploaded_file($file['tmp_name'],$dir.$file['name']))
                {
                    //Dòng này là ảnh sẽ được upload
                    $main_img         = $dir.$file['name'];

                    //Dòng này là ảnh sẽ đóng dấu lên ảnh được upload
                    $watermark_img    = "test.png"; // use GIF or PNG, JPEG has no tranparency support
                    $padding         = 3; // distance to border in pixels for watermark image
                    $opacity        = 100;    // image opacity for transparent watermark

                    $filetype = strtolower(substr($main_img,strlen($main_img)-4,4));
                    if($filetype == ".gif") $image = @imagecreatefromgif($main_img); 
                    if($filetype == ".jpg") $image = @imagecreatefromjpeg($main_img); 
                    if($filetype == ".png") $image = @imagecreatefrompng($main_img); 
                    $watermark     = imagecreatefrompng($dir.$watermark_img); // create watermark   

                    //$image         = imagecreatefromjpeg($main_img); // create main graphic
                    if(!$image || !$watermark) die("Error: main image or watermark could not be loaded!");

                    $watermark_size     = getimagesize($dir.$watermark_img);
                    $watermark_width     = $watermark_size[0];
                    $watermark_height     = $watermark_size[1];

                    $image_size     = getimagesize($main_img);
                    $dest_x         = $image_size[0] - $watermark_width - $padding;
                    $dest_y         = $image_size[1] - $watermark_height - $padding;
                // copy watermark on main image
                imagecopymerge($image, $watermark, 0,0, 0, 0, 
                        $watermark_width, $watermark_height, $opacity);
                
                
                /*
                    // đường dẫn tới thu mục upload file ảnh
                     
                    
                    //$this->Images->editImage($file);
                    //========edit Image                    
                    $stamp = imagecreatefrompng('../../app/webroot/img/test.png');
                    //$im = imagecreatefromjpeg($file['tmp_name']);
                    // Set the margins for the stamp and get the height/width of the stamp image
                    //$marge_right = 10; $marge_bottom = 10;
                    $sx = imagesx($stamp);         $sy = imagesy($stamp);    

            $main_img = imagecreatefromjpeg('../../app/webroot/img/uploads/test.jpg');
                    if(!$main_img || !$stamp) die("Error: main image or watermark could not be loaded!");
                    imagecopymerge($main_img, $stamp, 10, 10, 0, 0, $sx, $sy, 100);
                    // Output and free memory
                    header("Content-type: image/jpg");                    
//imagejpeg($image);//imagedestroy($image);//imagedestroy($watermark);                     
                    //==================================                                                                                
                    $rule = array(  'type' => 'resizemin',
                                    'size' => array('400', '300'),
                                    //'output' => 'jpeg',
                                );            
                    $result = $this->Upload->upload($file, $destination, null, $rule);
                    if (!$this->Upload->errors){
                            $data['Media']['name'] = $this->Upload->result;
                            //echo "$data";
                    } else {
                            // display error
                            $errors = $this->Upload->errors;
                            // piece together errors
                            if(is_array($errors)){ $errors = implode("<br />",$errors); }

                                    $this->Session->setFlash($errors);
                                    $this->redirect('/medias/upload');
                                    exit();
                    }                
                 
                 */                          
                    //$media_type_id = 1;
                    //$stat_id = 1;   
            
            //save to database
                    $name = $_POST['Caption']; //nvarchar                     
                    if($_POST['Source'] == "")  $link = 'Tu lam';
                    else $link = $_POST['Source'];//nvarchar
                    $author = "lhlong";//nvarchar
                    
                    //$date = null; //time                
                    $data = array(
                        'Media' => array(
                        'media_type_id' => null,
                        'stat_id' => null,
                        'name' => $name,
                        'author' => $author,
                        'link' => $link,
                        'width' => $width,
                        'height' => $height,
                        'date' => Date(DATE_ATOM)
                        )
                    );
                    
                    if ($this->Media->save($data)) {
                            die("Upload success!!");
                            //$this->Session->setFlash('Image has been added.');
                            //$this->redirect('/medias/v1');
                    } else {
                            die("3. Upload Error!!");
                            //$this->Session->setFlash('Please correct errors below.');
                            //unlink($destination.$this->Upload->result);
                            $this->redirect('/medias/index');
                    }                                            
            }
            else{
                die("2. Upload Error!");
            }
            }
 
        }
        public function v1(){
            
        }
}
