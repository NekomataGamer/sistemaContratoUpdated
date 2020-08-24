<?php
class Uploader extends Model {
    public function upload($idLEmpresa, $logo){

        $allwed_images = array(
            'image/png',
            'image/jpg',
            'image/jpeg'
        );

        for($q=0;$q<count($logo['name']);$q++){
            $tmp_name = $logo['tmp_name'][$q];
            $type = $logo['type'][$q];

            if(in_array($type, $allwed_images)){
                $filename = $this->addLogoEmpresa($idLEmpresa, $tmp_name, $type);
            }
        }
        return $filename;
        exit;
    }

    private function addLogoEmpresa($idLEmpresa, $tmp_name, $type){
        if($type == 'image/jpg' || $type == 'image/jpeg'){
            $o_img = imagecreatefromjpg($tmp_name);
        }elseif($type == 'image/png'){
            $o_img = imagecreatefrompng($tmp_name);
        }

        if(!empty($o_img)){
            $width = 319;
            $height = 166;
            $ratio = $width/$height;

            list($o_width, $o_height) = getimagesize($tmp_name);

            $o_ratio = $o_width/$o_height;

            if($ratio > $o_ratio){
                $img_w = $height*$o_ratio;
                $img_h = $height;
            }else{
                $img_h = $width/$o_ratio;
                $img_w = $width;
            }


            if($img_w < $width){
                $img_w = $width;
                $img_h = $img_w/$o_ratio;
            }

            if($img_h < $height){
                $img_h = $height;
                $img_w = $img_h * $o_ratio;
            }

            $px = 0;
            $py = 0;

            if($img_w > $o_width){
                $px = ($img_w - $width) / 2;
            }

            if($img_h > $height){
                $py = ($img_h - $height) / 2;
            }

            $img = imagecreatetruecolor($width, $height);
            imagecopyresampled($img, $o_img, -$px, -$py, 0, 0, $img_w, $img_h, $o_width, $o_height);
            
            $filename = md5(rand(0, 99999999).rand(0,9999999995469)).'.png';

            imagejpeg($img, '../grupoCoser/contrato/logos/'.$filename, 100);

            return $filename;
        }
    }
}