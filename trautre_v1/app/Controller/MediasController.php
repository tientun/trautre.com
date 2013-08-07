<?php

App::uses('AppController', 'Controller');

class MediasController extends AppController {

    var $name = 'Medias';
    var $uses = array("Media", "User");

    public function index() {
        $this->set("title_for_layout", "Trang Chủ");
        $medias = $this->Media->find("all", array("conditions" => array("is_home" => 0), "order" => array("Media.created" => "DESC"), "limit" => 10));
        $this->set(compact("medias"));
    }

    function upload() {
        $this->set("title_for_layout", "Đăng ảnh");
        if (!empty($this->data)) {
            // SUA LAI USER_ID NEU UPLOAD 
            $user_id = $this->Session->read("userId");
            $this->request->data['Media']['media_type_id'] = 1;
            $this->request->data['Media']['user_id'] = $user_id;
            $path = dirname(__DIR__) . "/webroot/uploaded/images/";
            $valid_formats = array("jpg", "gif", "jpeg","png");
            $name = $this->data['Media']['photos']['name'];
            if (strlen($name)) {
                list($txt, $ext) = explode(".", $name);
                if (in_array($ext, $valid_formats) && $this->data['Media']['photos']['size'] <= 1024 * 1024) {
                    // UPLOAD FILE LEN THU MUC TRUOC
                    $upload_status = move_uploaded_file($this->data['Media']['photos']['tmp_name'], $path . $this->data['Media']['photos']['name']);
                    if ($upload_status) {
                        $view = new View($this);
                        $html = $view->loadHelper('Upload');
                        $name_img = rand(0, 9999) . "_" . time() . ".".$ext;
                        $new_name = $path . $name_img;
                        if ($html->watermark_image($path . $this->data['Media']['photos']['name'], $new_name))
                            $data = getimagesize($new_name);
                        $this->request->data['Media']['width'] = $data[0];
                        $this->request->data['Media']['height'] = $data[1];
                        $this->request->data['Media']['link'] = "uploaded/images/" . $name_img;
                        if ($this->Media->save($this->request->data)) {
                            $this->redirect(array('controller' => 'medias', 'action' => 'vote'));
                        }
                    }
                } else {
                    $this->Session->setFlash("File kích thước quá lớn hoặc không đúng định dạng.", null, null, "error");
                    $this->redirect(array('controller' => 'medias', 'action' => 'upload'));
                }
            }
        }
    }

    // UPLOAD VIDEO
    function upload_video() {
        $this->set("title_for_layout", "Đăng video");
        if (!empty($this->data)) {
            // SUA LAI USER_ID NEU UPLOAD 
            $user_id = $this->Session->read("userId");
            $this->request->data['Media']['media_type_id'] = 2;
            $this->request->data['Media']['user_id'] = $user_id;
            if ($this->Media->save($this->request->data)) {
                $this->redirect(array('controller' => 'medias', 'action' => 'vote'));
            }
        }
    }

    public function v1() {
        
    }

    public function vote() {
        $this->set("title_for_layout", "Bình chọn");
		$userId = $this->Session->read("userId");
		$roleId = $this->Session->read("role_id");
		if(!empty($userId) && !empty($roleId) && $roleId ==1)
		{
			$union =$this->Media->find("all",array(
				'recursive' => 1,
				'limit'=>"5",
				'order'=>array('Media.created'=>'desc'),
				'conditions'=>array('Media.is_home'=>'0'),
			)
		);
		}
		else
		{
			$union =$this->Media->find("all",array(
				'recursive' => 1,
				'limit'=>"5",
				'order'=>array('Media.created'=>'desc'),
				'conditions'=>array('Media.is_home'=>'0','is_del'=>0),
				)
			);
		}				
		 $this->set('medias', $union);
    }
    function ajaxload($id = NULL){
		$this->layout = 'ajax';	
		$userId = $this->Session->read("userId");
		$roleId = $this->Session->read("role_id");
		if(!empty($userId) && !empty($roleId) && $roleId ==1)
		{
			$union =$this->Media->find("all",array(
				'recursive' => 1,
				'limit'=>"5",
				'order'=>array('Media.created'=>'desc'),
				'conditions'=>array('Media.is_home'=>'0','Media.id <'=>$id),
			)
		);
		}
		else
		{
			$union =$this->Media->find("all",array(
				'recursive' => 1,
				'limit'=>"5",
				'order'=>array('Media.created'=>'desc'),
				'conditions'=>array('Media.is_home'=>'0','is_del'=>0,'Media.id <'=>$id),
			)
		);
		}
		
		
		 $this->set('medias', $union);
	}
    function view($id = NULL) {		
        $media = $this->Media->read(null, $id);
		$number_view = $media['Media']['number_view'] +1;
		$this->Media->query("UPDATE medias set number_view ={$number_view} where id ={$id}");
        $this->set("title_for_layout",$media['Media']['name']);
		$this->set(compact("media"));
		$this->paginate = array("conditions"=>array("is_home"=>0,array("NOT"=>array("Media.id"=>$id))));
		$this->set("medias",$this->paginate());
	}

    function user_media($user_id = NULL) {
        $this->User->recursive = -1;
        $user = $this->User->read(null, $user_id);
        $this->set("title_for_layout", $user['User']['full_name']);
        $this->paginate = array("conditions" => array("Media.user_id" => $user_id), "order" => array("Media.created" => "DESC"));
        $this->set("medias", $this->paginate());
    }

    function active_is_home($media_id = NULL)
	{
		$this->layout = 'ajax';
		$this->autoRender = false; 
		if($this->RequestHandler->isAjax()) {
			$this->Media->query("UPDATE medias set is_home =1 where id ={$media_id}");
			echo "success";
		}
	}
    function active_is_del($media_id = NULL)
	{
		$this->layout = 'ajax';
		$this->autoRender = false; 
		if($this->RequestHandler->isAjax()) {
			$this->Media->query("UPDATE medias set is_del =1 where id ={$media_id}");
			echo "success";
		}
	}
}
