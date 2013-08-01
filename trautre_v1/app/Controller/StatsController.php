<?php
App::uses('AppController', 'Controller');
/**
 * Stats Controller
 *
 * @property Stat $Stat
 */
class StatsController extends AppController {

	function vote_up($media_id = NULL,$user_id = NULL)
	{
		$this->layout = 'ajax';
		$this->autoRender = false; 
		if($this->RequestHandler->isAjax()) {
			$this->request->data['Stat']['media_id'] = $media_id;
			$this->request->data['Stat']['user_id'] = $user_id;
			if($this->Stat->data($this->request->data))
			{
				$count = $this->Stat->find("count",array("conditions"=>array("Stat.media_id"=>$media_id)));
				echo $count;
			}
		}
	}
	// KIEM TRA Xem BAI VIET DA VOTE HAY CHUA
	function check_stat($media_id,$user_id)
	{
		$check = $this->Stat->find("first",array("conditions"=>array("Media.user_id"=>$user_id,"media_id"=>$media_id)));
		if(!empty($check))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
}
