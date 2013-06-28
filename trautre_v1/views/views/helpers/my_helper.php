<?php
//Viết 1 Helper riêng để tạo các hàm được sử dụng trong các View - Việt
class MyHelperHelper extends AppHelper {
	public $name = 'MyHelper';
	
	//Chuyển ngày từ DB sang View (yyyy-mm-dd H:i:s => mm-dd-yyyy H:i:s)
	public function change_date_format($date){
		$result = "";
		if(!empty($date)){
			$arr = explode(" ", $date);
			$end_date = explode("-", $arr[0]);
			$result = $end_date[1]."-".$end_date[2]."-".$end_date[0]." ".$arr[1];
		}
		return $result;	
	}
	
}

?>