<?php

include "baglan.php";
session_start();  
$kullanici_id= $_SESSION['oku']['kullanici_id'];

if(isset($_POST['form1'])){    
    $adi= $_POST['adi'];
    $soyadi= $_POST['soyadi'];
    $kullanici_id= $_SESSION['oku']['kullanici_id'];
    $email= $_POST['email'];
    $telefon= $_POST['telefon'];
    $okul= $_POST['okul'];
    $bolum= $_POST['bolum'];
    $aciklama=$_POST['aciklama'];
    $dogum_tarihi=$_POST['dogumtarihi'];
/*alan  ders il ilçe id leri alımı*/

if(isset($_POST['il'])){   $sehir= $_POST['il'];}
    else{$sehir=$_SESSION['oku']['sehir_id'];}
    $okulbul = $db->query("SELECT * FROM universiteler WHERE uni_name='$okul'")->fetch();
    $okul_id=(int)$okulbul['uni_id'];
	$bolumbul = $db->query("SELECT * FROM bolumler WHERE bolum_ad='$bolum' and uni_id='$okul_id'")->fetch();
 	
	$bolum_id=(int)$bolumbul['bolum_id'];
            
    	 		
if (empty($adi) || empty($soyadi) || empty($email)) { header("Location:profil.php?profil=zorunlualanlarbos");} 
else{   
			 		
if($telefon!=NULL && is_numeric($telefon)==false){	header("Location:profil.php?profil=telefonyanlis");} 
else { 	 		


    /***sehir id ile ilgili sorun var giibi  tekrar dene parantez sorunu yok aşağıda yedek kod var  hesap silme ekle */
    /*kullanıcının bbilgilerini güncellemek için */		
            $guncelle = $db->prepare("UPDATE kullanici SET adi=:adi ,soyadi=:soyadi ,email=:email ,telefon_numarasi=:telefon_numarasi ,okul_id=:okul_id, bolum_id=:bolum_id, aciklama=:aciklama , dogum_tarihi=:dogum_tarihi ,sehir_id=:sehir_id WHERE kullanici.kullanici_id=:kullanici_id"); 
            $guncelle->execute(array( 
              ':adi' =>$adi,
              ':soyadi' =>$soyadi,
              ':email'=>$email,
              ':telefon_numarasi'=>$telefon,
              ':okul_id'=>$okul_id,
              ':bolum_id'=>$bolum_id,
              ':aciklama'=>$aciklama,
              ':dogum_tarihi'=>$dogum_tarihi,
              ':sehir_id'=>$sehir,
              ':kullanici_id'=>$kullanici_id ));


/*profil güncellemek için*/ /*profil güncellemek için*/
        if(count($_FILES) > 0) {
            if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
                $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
                $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
                
                $fotografekle = "UPDATE  kullanici_profil SET profil_type='{$imageProperties['mime']}' ,kullanici_pp='{$imgData}' WHERE kullanici_id='$kullanici_id'";
                $fotografguncellendi =$db->prepare($fotografekle);
            $fotografguncellendi->execute(array());
            }
            }
            if ($guncelle || $fotografguncellendi) {
                header("Location:profil.php?profilduzenleme=ok");}
    
    else{
        header("Location:main.php");}}}}

        /**ŞİFRE DEĞİŞTİRME İŞLEMLERİ */
        if(isset($_POST['form2'])){    
        if(isset($eskisifre)){
            $eskisifre= $_POST['eskisifre'];
            $yenisifre= $_POST['yenisifre'];
            $yenisifreonay= $_POST['yenisifreonay'];
            $eskisifre_dogrulama=$db->query("SELECT sifre FROM kullanici WHERE kullanici_id='$kullanici_id'")->fetch();
            if($eskisifre_dogrulama['sifre']==$eskisifre)
        {    if($yenisifre==$yenisifreonay){
                $sifre_degis =$db->prepare("UPDATE  kullanici SET sifre='$yenisifre' WHERE kullanici_id='$kullanici_id'");
                $sifre_degis->execute(array());
                header("Location:profil.php?sifredegis=ok");    }
        else{header("Location:profil.php?profil=sifrelereslesmiyor");} }
        else{header("Location:profil.php?profil=sifredogrudegil");}}
        else{header("Location:profil.php?profil=sifregiriniz");}}
        
        include "scriptler.php";
        
        
        ?>
<!-->

        