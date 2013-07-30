<?php
//App::uses('AppController', 'Controller');
class VotesController extends AppController{
    var $name = "Votes";
    public $helpers = array('Paginator', 'Html', 'Form');       //phan trang
    public $controller = array('Session');
    //var $paginate = array();
    
    public function vote(){
        $this->Paginator->settings = array('limit' => 10);
        //$this->paginate = array('limit' => 4,'order' => array('Vote.id'=>'desc'));
	//$images = $this->paginate("Vote");        
        //$images = $this->Vote->find("all");        
        $this->set("images",$this->paginate());  	
    }
}
?>
