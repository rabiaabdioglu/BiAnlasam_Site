<?php 
include "baglan.php";


if($_POST){ 
               
$sifre=$_POST['kayitsifre'];
$sifre2=$_POST['kayitsifreonay'];
$ad=$_POST['kayitad'];
$soyad=$_POST['kayitsoyad'];
$cinsiyet= $_POST['kayitcins'];
$email=$_POST['kayitemail'];


if(empty($ad) or empty($soyad) or empty($cinsiyet) or empty($email) or empty($sifre) or empty($sifre2)){ 
	Header("Location:kaydol.php?kayitbos=no"); } 
  else{
	$kontrol = $db->prepare("SELECT * FROM kullanici WHERE email=?");//E-Posta ile daha önce kayıt olunmuşmu? 
	$kontrol->execute(array($email)); 

		  if($kontrol->rowCount()){  /*email ile önceden kayit oluşturulmuşmu*/
			Header("Location:kaydol.php?emailkayitli=no");}
			 else{

					if(strlen($sifre)< 8 || strlen($sifre)>50){ /*şifre uzunluğu kontrolü */
						Header("Location:kaydol.php?sifrecokkisa=no");}
	   						else { 
		   								if($sifre != $sifre2){ /*girilen şifreler uyuşuyor mu */
											Header("Location:kaydol.php?sifreuyusmuyor=no");}  
												  else { 

		$ekle = $db->prepare("INSERT INTO kullanici SET sifre=:sifre, adi=:ad, soyadi=:soyad, cinsiyet=:cinsiyet, email=:email"); 
		$ekle->execute(array( 
		  'sifre' => $_POST['kayitsifre'], 
		  'ad' => $ad, 
		  'soyad' => $soyad, 
		  'cinsiyet' => $cinsiyet, 
		  'email' => $email ) ); 

																if ($ekle) {
																	Header("Location:giris.php?durum=ok");}}}}}}






 ?>