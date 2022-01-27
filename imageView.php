<?php
    require_once "baglan.php";
    if(isset($_GET['kullanici_id'])) {

        $profil=$_GET['kullanici_id'];

		$varmi = $db->prepare("SELECT profil_type,kullanici_pp FROM kullanici_profil WHERE kullanici_id='$profil'");
       $varmi->execute();
        $say =$varmi->rowCount();
        if($say>0){
            
        $sql = "SELECT profil_type,kullanici_pp FROM kullanici_profil WHERE kullanici_id='$profil'";
		$result = $db->query($sql);
        $row =($result)->fetch();
		header("Content-type: " . $row["profil_type"]);
        echo $row["kullanici_pp"];}
        else{
            $sql = "SELECT profil_type,kullanici_pp FROM kullanici_profil WHERE kullanici_profil_id=10";
            $result = $db->query($sql);
            $row =($result)->fetch();
         header("Content-type: " . $row["profil_type"]);
        echo $row["kullanici_pp"];

        }
	}
?>