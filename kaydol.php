<?php
include "banner.php";

?>
	
	<div class="kayit-giris-headeri">
		
	<span>Öğrencilerden <br>
	  Öğrencilere Ders</span>
	<div class="kayit-giris" style="margin-top:50px;">
		
		  <img onClick="" alt="" src="icons/facebook_register.png">
		<img onClick="" alt="" src="icons/google_register.png">
		<br>
		<!--iki hr arası veya yazılışı-->
		<a style=" color:#9A9A9A; display: flex; flex-direction:row; margin-left:30px;width:300px;"> <hr>veya<hr ></a>
			
		
				<form action="kayit.php" method="POST" class="giris" style="text-align:center; padding:15px;">	
				<!--hata mesajları-->
				<a style="font-size:11px; color:tomato; float:left; padding:0; width:50%;">
			  <?php
			   if($_GET['kayitbos']=="no"){
				echo "**Boş alan bırakmayınız..";
			}
		   else if($_GET['emailkayitli']=="no"){
				echo "**Email zaten kayıtlı..";
			}
			else if($_GET['sifrecokkisa']=="no"){
				echo "**Şifre 8 harften kısa olamaz..";
			}
			else if($_GET['sifreuyusmuyor']=="no"){
				echo "**Şifreler aynı değil..";
			}
                
                ?></a>



				<input type="text" name="kayitad" id="" placeholder="   Ad" onclick="this.placeholder=''; " >
				<input type="text" name="kayitsoyad" id="" placeholder="   Soyad" onclick="this.placeholder=''; " >
				<input type="email" name="kayitemail" id="" placeholder="   E-mail" onclick="this.placeholder=''; " >
				<input type="password" name="kayitsifre" id="" placeholder="   Şifre" onclick="this.placeholder='';" >
				<input type="password" name="kayitsifreonay" id="" placeholder="   Şifre Onay" onclick="this.placeholder='';" >	
				<nav style="font-size:12px;" id="cinsiyet"> 
				<input type="radio" name="kayitcins" id=""  value="kadin" style="width:15px !important; ">Kadın
 				<input type="radio" name="kayitcins" id=""  value="erkek" style="width:15px !important; margin-left:40px; ">Erkek</nav>
				<button type="submit" name="kayit">Kayıt Ol</button>
				<sub style="font-size: 12px;">Zaten bir hesabın var mı? <a href="girisyap.php">Giriş Yap</a></sub></form>
					
				 <i style="font-size: 10px;">	Bianlasam.com'a üye olarak Kullanıcı Sözleşmesi'ni kabul etmiş oluyorsunuz.</i>

		</div></div>
	
	
	
	
	</div></body>
</html>
