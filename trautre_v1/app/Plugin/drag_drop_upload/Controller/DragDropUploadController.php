<?php  
/**
* 
*/
class DragDropUploadController extends DragDropUploadAppController
{
	public function beforeFilter()
	{
		parent::beforeFilter();
	}

	public function index()
	{
	}

	public function upload()
	{
		/** 
		* Your files will be uploaded here
		*/
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			if(move_uploaded_file($_FILES['file']['tmp_name'], WWW_ROOT.'files/'.$_FILES['file']['name'])){
				echo($_POST['index']);
			}
			exit;
		}
	}
}
?>