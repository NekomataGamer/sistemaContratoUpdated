<?php
class Uploader extends Model {
    public function upload($idLEmpresa, $logo){
        for($q=0;$q<count($logo);$q++){
            $tmp_name = $logo['tmp_name'][$q];
            $type = $logo['type'][$q];
        }
    }
}