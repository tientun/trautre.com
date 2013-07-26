<?php
App::uses('AppController', 'Controller');
class MediasController extends AppController {
    var $name = 'Medias';
    var $helpers = array('Html', 'Form', 'Time', 'Images', 'Session');
    var $components = array('Upload', 'Session');      // nạp Component upload   
                                    //su dung session trong Controller khai bao o components
    public function index() {                
	}
    public function upload() {                     
        if (empty($this->data)) {
                    //die("1. Upload Error!");                
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
                
                $filetype = strtolower(substr($file['name'],strlen($file['name'])-4,4));
                $filetype = strtolower($filetype);  //chuyen sang chu thuong
                
                $size=filesize($file['tmp_name']);
                if ($size > 2000*1024)
                {
                    die('<h1>Vượt quá dung lượng cho phép!</h1>');                      
                }
                if (($filetype != ".jpg") && ($filetype != "jpeg") && ($filetype !=".png") 
                        && ($filetype != ".gif")){
                    die("<h1>Đây không phải là file hình!</h1> $filetype s");
                }
                else
                {
                if(@move_uploaded_file($file['tmp_name'],$dir.$file['name']))
                {
                    //Dòng này là ảnh sẽ được upload
                    $main_img         = $dir.$file['name'];

                    //Dòng này là ảnh sẽ đóng dấu lên ảnh được upload
                    $watermark_img    = "test.png"; // use GIF or PNG, JPEG has no tranparency support
                    $padding         = 3; // distance to border in pixels for watermark image
                    $opacity        = 100;    // image opacity for transparent watermark
                    
                    //$filetype = strtolower(substr($main_img,strlen($main_img)-4,4));
                    if($filetype == ".gif") $image = @imagecreatefromgif($main_img); 
                    if($filetype == ".jpg" || $filetype == "jpeg") $image = @imagecreatefromjpeg($main_img); 
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
                        //var_dump($data);   //xem noi dung cua doi tuong  
                        //$this->Session->setFlash('I miss you all the time', 'sms', array('class' => 'message_01'));
                        $this->Session->setFlash('Image has been added.');
                        //  die("Upload success!!");
                        $this->redirect('/medias/v1');
                    } else {
                            $this->Session->setFlash('Please correct errors below.');
                            die("3. Upload Error!!");                                                        
                            //unlink($destination.$this->Upload->result);
                            $this->redirect('/medias/index');
                    }            
            }
            else{
                //die("2. Can't upload this type image.");
                $this->Session->setFlash("Can't upload this type image.");                
            }
            }}
 
        }
    
        
    function upload_rename()
    {
        if(!empty($this->data))
        {

            $path = dirname(__DIR__)."/webroot/colin/";	
            $valid_formats = array("jpg",  "bmp","jpeg");
            $name = $this->data['Media']['photos']['name'];
            if(strlen($name))
            {
                 list($txt, $ext) = explode(".", $name);
                if(in_array($ext,$valid_formats)&& $this->data['Media']['photos']['size'] <= 1024*1024)
                {
                       // UPLOAD FILE LEN THU MUC TRUOC
                      $upload_status = move_uploaded_file($this->data['Media']['photos']['tmp_name'], $path.$this->data['Media']['photos']['name']);
                       if($upload_status){
                         $view = new View($this);
                          $html = $view->loadHelper('Upload');
                         $new_name = $path.time().".jpg";
                         // GOI HELPER THAY DOI ANH VOI NOI DUNG CHEN VAO
                         //CHEN TEXT VAO HINH ANH
                         /*if($html->watermark_text($path.$this->data['Media']['photos']['name'], $new_name))
                          $demo_image = $new_name;
                         }*/
                         // GHI CHU VOI HINH ANH
                         if($html->watermark_image($path.$this->data['Media']['photos']['name'], $new_name))
                          $demo_image = $new_name;
                         //LUU DU LIEU O DAY
                         }
                }
             else

                $msg="File size Max 256 KB or Invalid file format supports .jpg and .bmp";
            }
        }
    }
    public function v1(){
            
        }
        
    public function vote()
    {
            
    }
}
