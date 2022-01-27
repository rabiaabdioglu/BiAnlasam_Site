<?php 
include "baglan.php";
session_start();

if($_POST){ 
$kullanici_id=$_SESSION['oku']['kullanici_id'];
$alan=$_POST['alan'];
$ders=$_POST['ders'];
$il=$_POST['il'];
$ilce=$_POST['ilce'];
$fiyat=$_POST['fiyat'];
$baslik="";
$aciklama=$_POST['aciklama'];
/*alan  ders il ilçe id leri alımı*/

		$alandersid = $db->query("SELECT * FROM dersler WHERE ders_adi='$ders'")->fetch();
 	$alan_id=(int)$alandersid['alan_id'];
	$ders_id=(int)$alandersid['ders_id'];

        $adres= $_SESSION['yonlendirme'];/*ilanyayinla php yi çağıran sayfanın urlsini adrese atıyoruz*/


if (empty($il) or empty($ilce) or empty($fiyat) or empty($aciklama) or empty($alan) or empty($ders)){ 
	header("Location:$adres?ilanbos=no");} 
  else{
	$kontrolilan = $db->query("SELECT * FROM ilan WHERE kullanici_id='$kullanici_id' and alan_id='$alan_id' and ders_id='$ders_id' and aciklama='$aciklama'")->fetch();
		  if($kontrolilan){ header("Location:$adres?dahaonceyayinlanmisilan=no");} /*daha önce aynı değerlere sahip bir ilan girmiş mi*/
			 else{
			 	if(is_numeric($fiyat)==false){header("Location:$adres?fiyatyanlis=no");}/*girilen fiyat integer mı??*/
			 		else{
					if(strlen($aciklama)<10 || strlen($aciklama)>500){ header("Location:$adres?ilanaciklamayetersiz=no");	}
	   						else { 
		   								

		$ekle = $db->prepare("INSERT INTO ilan SET kullanici_id=:kullanici_id, alan_id=:alan_id, ders_id=:ders_id, baslik=:baslik, aciklama=:aciklama, ilce_id=:ilce_id, il_id=:il_id, fiyat=:fiyat"); 
		$ekle->execute(array( 
		  'kullanici_id' => (int)$kullanici_id,		  
		  'alan_id' => (int)$alandersid['alan_id'],
		  'ders_id' => (int)$alandersid['ders_id'],
		  'baslik' => $alan."	Alanı	".$ders."	Dersi",
		  'aciklama' => $aciklama,
		  'ilce_id' => (int)$ilce, 
		  'il_id' =>(int)$il, 
		  'fiyat' => $fiyat ) ); 

																if ($ekle) {
																	header("Location:secilenilan.php?ilanyayinlandi=ok");}


																}}}}}




 ?>