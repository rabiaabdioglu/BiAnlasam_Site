<?php 
include "baglan.php";


if($_POST){ 
               
session_start();

$ilan_id=(int)$_POST['id_al'];/***/
$teklif_veren_kullanici_id=(int)$_SESSION['oku']['kullanici_id'];
$fiyat=$_POST['teklif_fiyat'];
		

$_SESSION['ilanadon']=$ilan_id;

	$aynikisimi = $db->query("SELECT * FROM ilan  WHERE ilan_id='$ilan_id'")->fetch();


	$dahaonceteklifverilmismi = $db->prepare("SELECT * FROM teklif  WHERE teklif_veren_kullanici_id='$teklif_veren_kullanici_id' and ilan_id='$ilan_id'");
	$dahaonceteklifverilmismi->execute();
	$say=$dahaonceteklifverilmismi->rowCount();

	if($teklif_veren_kullanici_id==((int)$aynikisimi['kullanici_id'])){header("Location:secilenilan.php?teklif=kendiilaninateklifveremezsin");}
else{
	if($say>0){ header("Location:secilenilan.php?teklif=dahaonceverilmis");}
else{
	if(empty($fiyat) || ((int)$fiyat <(int)$aynikisimi['fiyat'])){header("Location:secilenilan.php?teklif=fiyatyok");}
else{

	if(isset($teklif_veren_kullanici_id)){
		$ekle = $db->prepare("INSERT INTO teklif SET ilan_id=:ilan_id, teklif_veren_kullanici_id=:teklif_veren_kullanici_id, fiyat=:fiyat"); 
		$ekle->execute(array( 
		  'ilan_id' =>$ilan_id, 
		  'teklif_veren_kullanici_id' =>$teklif_veren_kullanici_id, 
		  'fiyat' =>$fiyat) );

header("Location:secilenilan.php?teklif=ilanageridon");
		}		
		   else{

header("Location:secilenilan.php?teklif=kullanicigirisyapmamis");
}}
}
}

	
	
}


 ?>