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
}
?>
