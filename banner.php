<?php 
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <script src="JsLocalSearch.js"  type="text/javascript"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 


<link rel="shortcut icon" href="icons/logo1.png" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html;" />
<title>Bi'anlasam</title>

<script src="https://kit.fontawesome.com/5b756dfa76.js" crossorigin="anonymous"></script>
<style>
	
<?php 
include "style.php";
?>

</style>  



<link href="normalize.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0">

</head>
<!--Sayfayı küçültüp büyültünce sayfanın ortalanması ama banner ve footer kısmının uzun kalması için body dışına aldım-->

	<div class="banner-bg"></div>
<body>
<div class="container">
<div class="banner"> <a href="main.php"><img src="image/logo.png" alt="" class="logo"></a>
 	
        <label for="hamburger">&#9776;</label><!--hamburger menünün çizgili buton işlevi gören labelı-->
        <input type="checkbox" id="hamburger"/><!--labela bağlı checkbox/ labela tıklanınca checkbox işarelenir
													checkbox işaretliyken gizlenmiş menu görünür-->
			
			<div class="kayitolgirisyap">	
			<span> <a href="main.php">Anasayfa</a></span>
			<span> <a href="ilan.php">İlanlar</a></span>
			
			

<?php	
    if (isset($_SESSION['oku'])) {

echo 	"
&nbsp
			
			<span> <a href=\"profil.php\">".$_SESSION['oku']['adi']."&nbsp ". $_SESSION['oku']['soyadi']  ."</a>
			<a href=\"cikis.php\">Çıkış Yap </a></span>  ";	

		}else {

echo 	"
			</span>
			 <a href=\"kaydol.php\">Kayıt Ol</a>
			<a href=\"girisyap.php\"> Giriş Yap </a>
		 ";	

		}	


			 ?>
  </div></div>