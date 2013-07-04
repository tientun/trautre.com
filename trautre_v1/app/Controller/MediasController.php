<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class MediasController extends AppController {

    var $name = 'Medias';
    var $helpers = array('Html', 'Form', 'Time');
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
                    $this->render();
            } 
            else {                              
                    // đường dẫn tới thu mục upload file ảnh
                    $destination = realpath('../../app/webroot/img/uploads/') . '/';
                    // grab the file
                    //$file = $this->data['Image']['filedata'];
                    $file = $this->data['Media']['photos'];
                    // cấu hình upload
                    echo "$file";                    
                    $rule = array(
                                    'type' => 'resizemin',
                                    'size' => array('400', '300'),
                                    'output' => 'jpg',
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
                $sizes = getimagesize($file['tmp_name']);
                $width = $sizes[0];
                $height = $sizes[1];                
                //$media_type_id = 1;
                //$stat_id = 1;          
                $name = $_POST['Caption']; //nvarchar
                $author = "lhlong";//nvarchar
                $link = $_POST['Source'];//nvarchar                
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
                            $this->Session->setFlash('Image has been added.');
                            //$this->redirect('/medias/v1');
                    } else {
                            //$this->Session->setFlash('Please correct errors below.');
                            //unlink($destination.$this->Upload->result);
                            $this->redirect('/medias/index');
                    }                                          
            }
  
 
        }
        public function v1(){
            
        }
}
