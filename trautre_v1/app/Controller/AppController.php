<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {
	public $components = array(
		'DebugKit.Toolbar','Session','Cookie','Paginator',"RequestHandler");//
	public $helpers = array('Html','Form','Session','Paginator','Upload');//
	function beforeFilter ()  {
            
		$this->layout='trautre_layout';
	}
	
	function isAuthorized($user = null) {	
		if(substr($this->action,0,6)=='admin_'){
			$this->layout='admin';
			return true;
		}
		return true;
	}
	function mainURL(){
		return "http://trautre.com/";
	}
}
