<?php
App::uses('AppController', 'Controller');
class VotesController extends AppController{
    var $name = "Votes";
    public $helpers = array('Paginator', 'Html', 'Form');       //phan trang
    public $controller = array('Session');
    public $paginate = array('limit' => 4,'order' => array('Vote.id'=>'desc'));
    
    public function vote(){                
	$images = $this->paginate("Vote");        
        //$images = $this->Vote->find("all");        
        $this->set("images",$images);                	
    }
}
?>
