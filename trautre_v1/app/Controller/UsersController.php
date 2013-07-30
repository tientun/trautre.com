<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
	function login(){
        $this->set("title_for_layout","Đăng nhập hệ thống"); 
		
    }
	
	function save_user_data($username,$email,$facebook_id,$gender,$full_name,$birthday,$type)
	{
		$sql ="SELECT * FROM users where facebook_id ='{$facebook_id}'";		
		$check = $this->User->query($sql);		
		if(!empty($check))
		{
			$this->Session->write("userId",$check[0]['users']['id']);
			$this->Session->write("fullName",$check[0]['users']['full_name']);
			if($type ==1)
			{
				$this->redirect(array('controller'=>'medias','action' => 'vote'));
			}
			else
			{
				$this->redirect(array('controller'=>'medias','action' => 'upload'));
			}
		}
		else
		{
			$this->request->data['User']['username'] =$username;
			$this->request->data['User']['email'] =$email;
			$this->request->data['User']['facebook_id'] =$facebook_id;
			$this->request->data['User']['gender'] =$gender;
			$this->request->data['User']['full_name'] =$full_name;
			$this->request->data['User']['birthday'] =$birthday;
			$this->request->data['User']['avatar'] ="http://graph.facebook.com/".$facebook_id."/picture?type=normal";
			if($this->User->save($this->request->data))
			{
				$this->Session->write("userId",$this->User->id);
				$this->Session->write("fullName",$full_name);
				if($type ==1)
				{
					$this->redirect(array('controller'=>'medias','action' => 'vote'));
				}
				else
				{
					$this->redirect(array('controller'=>'medias','action' => 'upload'));
				}
			}
		}		
	}

	function logout()
	{
		$this->Session->delete("userId");
		$this->Session->delete("fullName");
		$this->redirect(array('controller'=>'medias','action' => 'index'));
	}
	
	function profile()
	{	
		$user_id = $this->Session->read("userId");
		$this->set("title_for_layout","Thông tin cá nhân");
		$this->User->recursive =-1;
		$user = $this->User->read(null,$user_id);
		$this->set(compact("user"));
		if(!empty($this->data))
		{
			$this->request->data['User']['id'] =$user_id;
			if($this->User->save($this->request->data))
			{
				$this->Session->setFlash("Thông tin tài khoản đã được cập nhật.",null,null,"success");
				$this->redirect(array('controller'=>'users','action' => 'profile'));
			}
		}
	}
	
	function password($type = NULL)
	{
		$this->set("title_for_layout","Đổi mật khẩu");
		$user_id = $this->Session->read("userId");
		$this->User->recursive =-1;
		$user = $this->User->read(null,$user_id);
		$this->set(compact("user"));
		if(!empty($this->data))
		{
			if($type ==1)
			{
				$old =md5($this->data['User']['oldPassword']);
				$check = $this->User->find("first",array("conditions"=>array("password"=>$old)));
				//print_r($check);exit;
				if(empty($check))
				{
					$this->Session->setFlash("Mật khẩu cũ không đúng.",null,null,"error");
					$this->redirect(array('controller'=>'users','action' => 'password'));
				}
				else
				{
					$this->request->data['User']['user_id'] =$user_id;
					$this->request->data['User']['password'] =md5($this->data['User']['newPassword']);
					if($this->User->save($this->request->data))
					{
						$this->Session->setFlash("Mật khẩu đã được cập nhật.",null,null,"success");
						$this->redirect(array('controller'=>'users','action' => 'password'));
					}
				}
			}
			else
			{
				$this->request->data['User']['user_id'] =$user_id;
				$this->request->data['User']['password'] =md5($this->data['User']['newPassword']);
				if($this->User->save($this->request->data))
				{
					$this->Session->setFlash("Mật khẩu sửa thành công.",null,null,"success");
					$this->redirect(array('controller'=>'users','action' => 'password'));
				}
			}
			
		}
		
	}
}
