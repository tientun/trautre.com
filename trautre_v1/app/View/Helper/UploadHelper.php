<?php

class UploadHelper extends AppHelper {
    public $name = 'UploadHelper';      
    // CHEN IMAGE VAO HINH ANH
        function watermark_image($oldimage_name, $new_image_name){
            $image_path =dirname(dirname(__DIR__))."/webroot/demo_colin.png";
            list($owidth,$oheight) = getimagesize($oldimage_name);
            $data = getimagesize($oldimage_name);
            $width= $data[0];
            if($width>650)
            {
                $width =650;  
                $ratio = $width / $owidth;
                $height = $data[1] * $ratio;
            }
            else
            {
                $width= $width;
                $height =  $data[1];
              }
            $im = imagecreatetruecolor($width, $height);
            $img_src = imagecreatefromjpeg($oldimage_name);
            imagecopyresampled($im, $img_src, 0, 0, 0, 0, $width, $height, $owidth, $oheight+50);
            $watermark = imagecreatefrompng($image_path);
            list($w_width, $w_height) = getimagesize($image_path);        
            $pos_x = $width - $w_width; 
            $pos_y = $height - $w_height;
            imagecopy($im, $watermark, $pos_x, $pos_y, 0, 0, $w_width, $w_height);
            imagejpeg($im, $new_image_name, 100);
            imagedestroy($im);
            unlink($oldimage_name);
            return true;
        }
	// TINH THOI GIAN UPLOAD 
	function ago($from,$now,$rcs = 0) {
        $dt = strtotime($from);
        $cur_tm = strtotime($now);
        $suffix = " trước";
        $dif = $cur_tm - $dt;
        $pds = array('giây', 'phút', 'giờ', 'ngày', 'tuần', 'tháng', 'năm', 'decade');
        $lngh = array(1, 60, 3600, 86400, 604800, 2630880, 31570560, 315705600);
        for ($v = sizeof($lngh) - 1; ($v >= 0) && (($no = $dif / $lngh[$v]) <= 1); $v--)
            ; if ($v < 0)
            $v = 0; $_tm = $cur_tm - ($dif % $lngh[$v]);

        $no = floor($no);
        if ($no <> 1)
            $pds[$v] .=' '; $x = sprintf("%d %s ", $no, $pds[$v]);
        if (($rcs == 1) && ($v >= 1) && (($cur_tm - $_tm) > 0))
            $x .= time_ago($_tm);
        return $x. $suffix;
    }
	// TAO DUONG DAN THAN THIEN
     function seoTitle($string) {
        $string = $this->stripUnicode($string);
	    $string = preg_replace("`\[.*\]`U","",$string);
		$string = preg_replace('`&(amp;)?#?[a-z0-9]+;`i','-',$string);
		$string = htmlentities($string, ENT_COMPAT, 'utf-8');
		$string = preg_replace( "`&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);`i","\\1", $string );
		$string = preg_replace( array("`[^a-z0-9]`i","`[-]+`") , "-", $string);
        $string = $string.'.html';
		return strtolower(trim($string, '-'));
    }
	function stripUnicode($str){
		if(!$str) return false;
		$unicode = array(
			'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
			'd'=>'đ|Đ',
			'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
			'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
			'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
			'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
			'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
			);
			foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
			return $str;
		}
}
?>
