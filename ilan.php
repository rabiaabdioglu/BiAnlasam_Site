


<?php
include "banner.php";

?> 
<center>
<div id="haftanin-ogrencileri">
	<span> Haftanın en çok ders veren öğrencileri<br></span>
	
	<div id="haftanin-ogrencileri-profilleri">
	<ul><!--kullanicilarin fotoğraflari olacak-->
		<!---buraya gelecek olan kullanıcılar veritabanından 1-2-3-4 .haftalar olarak gelecek son 7 gün değil
		her pazartesi değişmeli-->
		<li><img src="icons/profile_picture.png" alt=""><p>Ad Soyad</p></li>		
		<li><img src="icons/profile_picture.png" alt=""><p>Ad Soyad</p></li>
		<li><img src="icons/profile_picture.png" alt=""><p>Ad Soyad</p></li>
		<li><img src="icons/profile_picture.png" alt=""><p>Ad Soyad</p></li>
		<li><img src="icons/profile_picture.png" alt=""><p>Ad Soyad</p></li>
		</ul>
		<ul>
		<li><img src="icons/profile_picture.png" alt=""><p>Ad Soyad</p></li>
		<li><img src="icons/profile_picture.png" alt=""><p>Ad Soyad</p></li>
		<li><img src="icons/profile_picture.png" alt=""><p>Ad Soyad</p></li>
		<li><img src="icons/profile_picture.png" alt=""><p>Ad Soyad</p></li>
	
		</ul>
	</div>
	
	</div></center>
	<div  class="ilan-title">
		<a >İLANLAR</a></div>
	
	<div id="ilanlar">
		<!--ARAMA BUTONU-->
	<form class="arama" style="margin:20px auto;">	
		<!--aramaya girilen kelimelerde sağ sol boşluk olmama  durumuna bak   veritabanı için-->
<input type="text" name="alan" id="arama-alan" placeholder="   Alan..." onclick="this.placeholder='';" >
 <input type="text" name="ders" id="arama-ders" placeholder="   Ders..."  onclick="this.placeholder='';"> 

<button type="submit"   style="height: 50px; width: 50px; top: 15px;">
<img src="icons/search_icon.png" style="height:20px" alt="" ></button>
</form>
			


<nav id="filtre-ilan"   style="margin-top:100px; padding: 50px;">
				<!--FİLTRELER-->
<div class="filtre"><a> FİLTRELE</a>

	<form id="filtre">
<br>
	<!--Fiyat-->
	<!--proje bitince buraya alanların zorluk seviyesine göre kıstas belirlenecek-->
	<nav id ="filtre-fiyat" style="float:left; margin-left: 15px; font-size:10x;">Fiyat:
	<br>
	<br>
	<input type="text" name="ders" id="filtre-max" value="  max" onclick="this.value='';" style="color:#9B9B9B; width: 60px; height: 20px; border-radius: 15px; border-style: solid; border-width: 1px;">  -  
	<input type="text" name="ders" id="filtre-min" value="  max" onclick="this.value='';" style="color:#9B9B9B; width: 60px;height: 20px;  border-radius: 15px; border-style: solid; border-width: 1px; " >
<br><br>
 </nav>	
	<!--Konum-->
	
	<!--buradaki şehirler veritabanından gelecek-->
	<nav id ="filtre-konum" style="float:left; margin-left: 15px; font-size:10x;">Konum:
	<br><br>
	
<select style="color:#9B9B9B; width:40%;height:25px;">
        <option selected>İl</option>
        <option>Trabzon</option>
        <option>Sivas</option>
        <option>Konya</option>
        <option>İstanbul</option>
</select> /
	
<select style="color:#9B9B9B; width:40%;height:25px;">
        <option selected>İlçe</option>
        <option>Trabzon</option>
        <option>Sivas</option>
        <option>Konya</option>
        <option>İstanbul</option>
</select>

	
	<br><br></nav>
 
	<!--Alan:-->
	<nav   id ="filtre-alan"  style="float:left; margin-left: 15px; font-size:10x;">Alan:
	<br>
	<br>
	<input type="text" name="ders" id="filtre-alan" value="  Mimarlık,Ekonomi..." onclick="this.value='';" style="color:#9B9B9B; width:90%; height: 20px; border-style: solid; border-width: 1px;"> 

	<br><br></nav>
 
	<!--Ders:-->
	<nav   id ="filtre-ders"  style="float:left; margin-left: 15px; font-size:10x;">Ders:
	<br>
	<br>
	<input type="text" name="ders" id="filtre-ders" value="  Anatomi,İntegral..." onclick="this.value='';" style="color:#9B9B9B; width:90%; height: 20px; border-style: solid; border-width: 1px;"> 

	<br><br></nav>
 
	<!--Şuanki Filtreler:-->
	<nav  id ="filtreuygula-temizle" style="float:left; margin-left: 15px; font-size:10x;">Filtreler:
	<br>
	<button type="reset">Filtreleri Temizle</button><br>
	<button type="submit">Uygula</button>
</form>
	</nav>
		</div>
		<!--- ilanların alt kısmına sayfa numaraları üst kısmına sıralama açılır menüsü gelecek-->		

				<!-- İLANLARIN GELECEĞİ YER-->
				
	<div id="ilanlar-kapsayici">

	<div id="siralama-divi">
		<select>

			<option selected>Önerilen sıralama</option>
	
			<option>Önce en düşük fiyat</option>
	
			<option>Önce en yüksek fiyat</option>
	
			<option>Önce en yeni</option>
	
			<option>Önce en eski</option>
	
		</select>
				</div>

<?php 	include "baglan.php";
		
		$sorgu = $db->query('SELECT kullanici.kullanici_id , kullanici.adi , kullanici.soyadi , ilan.baslik , ilan.aciklama , ilceler.ilce_adi , iller.il_name , ilan.fiyat,ilan.ilan_id from ilan INNER JOIN kullanici ON ilan.kullanici_id=kullanici.kullanici_id INNER JOIN iller ON ilan.il_id=iller.il_id INNER JOIN ilceler on	ilan.ilce_id=ilceler.ilce_id');
       

		while ($satir=$sorgu->FETCH()) {


ECHO "
	

	<div class=\"ilan-icerik\">
	<!--kullanıcının profil fotoğrafı -->

	<!--kullanıcının profil fotoğrafı -->
	<nav class=\"profil-pp-arkaplan\" >
<a  href=\"profil.php?gelen_kullanici_id=".$satir['kullanici_id']." \">


<nav class=\"profil-pp\" style=\" background:url(imageView.php?kullanici_id=".$satir['kullanici_id'].");  \"></nav></a>
</nav>

	
	<!--ilan veren kullanıcının adı soyadı ve diğer ilan bilgileri-->
	<nav class=\"ilan-bilgileri\"><!--ilan bilgilerini kapsayan div-->



		<div class=\"ilan\" ><!--1.satır-->
	

				<nav  style=\"width:40%;\"><span >".$satir['adi']." &nbsp;". $satir['soyadi']."	</span></nav><!--1.satırın içindeki 1.sütun-->

			<nav style=\"float:right;  display: flex; flex-direction:row;  width:70%;\"> <!--1.satırın içindeki 2.sütun-->
			<span style=\"width:500px;\">".$satir['baslik']."</span>	

  <form  method=\"POST\" action=\"secilenilan.php\" >
  				<input  name=\"id_getir\"  value=\"".$satir['ilan_id']."\" style=\"display:none;\">
                <button type=\"submit\">
		<x>Teklif Ver</x>	<a>".$satir['fiyat']." tl/sa </a>
</button>
              

</form>





</nav>

	</div>
		

				<div class=\"konum\"><!--2.satır-->
				<!--ilan veren kullanıcının ders verebileceği konum alanı-->
<i id=\"konum\" ><img src=\"icons/location.png\" alt=\"\">".$satir['ilce_adi']." / ".strToUpper($satir['il_name'])."</i></nav>
</div>";
}
		?>



</div>

	
	</nav><!---yukarı git eklenebilir
	bir önceki sayfaya yonlendirme eklenebilir-->
	
<nav style="clear:both;"> 	</nav>
	</div>

	

	
	<?php 
    include "footer.php"; ?>
	
