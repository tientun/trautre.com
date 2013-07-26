<?php

class UploadHelper extends AppHelper {
	public $name = 'UploadHelper';
        // CHEN TEXT VAO HINH ANH
        function watermark_text($oldimage_name, $new_image_name){
            $font_path = dirname(dirname(__DIR__))."/webroot/GILSANUB.TTF";
           // print_r($font_path);exit;
            $font_size = 20; 
            $water_mark_text_2 = "Bản quyền thuộc về tretrau.com";   
            list($owidth,$oheight) = getimagesize($oldimage_name);
            $width = $height = 400;    
            $image = imagecreatetruecolor($width, $height);
            $image_src = imagecreatefromjpeg($oldimage_name);
            imagecopyresampled($image, $image_src, 0, 0, 0, 0, $width, $height, $owidth, $oheight+100);
           // $black = imagecolorallocate($image, 0, 0, 0);
            $blue = imagecolorallocate($image, 79, 166, 185);
           // imagettftext($image, $font_size, 0, 30, 190, $black, $font_path, $water_mark_text_1);
            imagettftext($image, $font_size, 0, 150, 390, $blue, $font_path, $water_mark_text_2);
            imagejpeg($image, $new_image_name, 100);
            imagedestroy($image);
            unlink($oldimage_name);
            return true;
    }
    // CHEN IMAGE VAO HINH ANH
    function watermark_image($oldimage_name, $new_image_name){
        $image_path =dirname(dirname(__DIR__))."/webroot/demo_colin.png";
        list($owidth,$oheight) = getimagesize($oldimage_name);
        $width = $height = 300;    
        $im = imagecreatetruecolor($width, $height);
        $img_src = imagecreatefromjpeg($oldimage_name);
        imagecopyresampled($im, $img_src, 0, 0, 0, 0, $width, $height, $owidth, $oheight);
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
   
}
?>
