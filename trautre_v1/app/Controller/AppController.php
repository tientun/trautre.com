<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {
	public $components = array(
		'DebugKit.Toolbar','Session','Cookie'
		,'Auth'=>array(
			'loginAction' => array(
				'controller' => 'admins',
				'action' => 'login'
			),
			'authenticate' => array(
				'Form' => array(
					'userModel' => 'Admin'
				)
			),
			'authorize' => 'Controller'
		)
		,'Paginator'
	);//
	public $helpers = array('Html','Form','Session','Paginator');//
	function beforeFilter ()  {
             $this->Auth->allow(array('*'));
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
