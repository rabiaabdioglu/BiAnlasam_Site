<?php

require_once 'baglan.php';

$il_id = $_POST['il'];
if(isset($il_id)){

    if($il_id>0) {

        $sorgu   = $db->query("SELECT DISTINCT ilce_id, ilce_adi FROM ilceler WHERE il_id='$il_id' ORDER BY ilce_id ASC");
        $bas    = '[{"ilce_id": "", "ilce_adi": "Seçiniz"},';
        $son    = ']';
        $liste  = '';

        while($ilce = $sorgu->fetch(PDO::FETCH_ASSOC)){
            $liste.='{"ilce_id": '.$ilce['ilce_id'].', "ilce_adi": "'.$ilce['ilce_adi'].'"},';
        }
        echo $bas.rtrim($liste,",").$son;
    }
}