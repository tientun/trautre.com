<?php
App::uses('AppController', 'Controller');
class MediasController extends AppController {
    var $name = 'Medias';
    var $helpers = array('Html', 'Form', 'Time', 'Images', 'Session');
    var $components = array('Upload', 'Session');      // nạp Component upload   
                                    //su dung session trong Controller khai bao o components
    public function index() {                
   }
    function upload()
    {
        if(!empty($this->data))
        {
            $path = dirname(__DIR__)."/webroot/uploaded/images";	
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
