<?php
include "banner.php";
?>
<header>


  <div id="header-bg"></div>
  <span>Anlamadığın Her Konuda Öğrenci  Arkadaşların Yanında</span>
	
  <div class="dersal-ver">
			<!--İlan oluşturmaya yönlendirir-->	
		<ul><li><a href="ilan.php" style="margin-right:20px;">Ders Ver</a></li>
			<!--İlan sayfasına yönlendirir-->
		<li>
			
			<?php  include "popup.php"; 
			?>
			
</li></ul></div>
	</header>


	
	<p  id="orta_yazi">Yüzlerce Alandan  İlanlar Senin İçin Burada</p>

	<!--Arama Kısmı-->
<form class="arama" style="text-align:center; padding:15px;">	
<input type="text" name="ders" id="" value="   Alan..." onclick="this.value=''; color: black;" >
 <input type="text" name="konu" id="" value="   Ders..."  onclick="this.value='';"> 
<button type="submit" style="height: 50px; width: 50px; top: 15px;" >
<img src="icons/search_icon.png" style="height:20px" alt="" ></button>
</form>
	


	<!--Tanıtım için var olan alanların iconları filtrelenmiş ilanlara yönlendirir-->
	
<section id="bolumlerin-iconlari">
	<ul>
		<li><img src="60-60/bilgisayar.png" alt="" ><p>Bilgisayar</p></li>
		<li><img src="60-60/beslenme.png" alt="" ><p>Beslenme</p></li>
		<li><img src="60-60/biyoloji.png" alt="" ><p>Biyoloji</p></li>
		<li><img src="60-60/elektrik.png" alt="" ><p>Elektrik</p></li>
		<li><img src="60-60/finans.png" alt="" ><p>Finans</p></li>
		<li><img src="60-60/fizik.png" alt="" ><p>Fizik</p></li>
		<li><img src="60-60/hukuk.png"  alt="" ><p>Hukuk</p></li>	
	</ul><ul>
		<li><img src="60-60/ingilizce.png" alt="" ><p>Yabancı Dil</p></li>
		<li><img src="60-60/kimya.png" alt="" ><p>Kimya</p></li>	
		<li><img src="60-60/makine (2).png" alt="" ><p>Makine</p></li>		
		<li><img src="60-60/psikoloji.png" alt="" ><p>Psikoloji</p></li>
		<li><img src="60-60/saglik.png" alt="" ><p>Bilgisayar</p></li>
		<li><img src="60-60/tarih.png" alt="" ><p>Tarih</p></li>
		<li><img src="60-60/elektrik.png" alt="" ><p>Elektrik</p></li>
		</ul>
</section>
	
	<!-- görsellik için -->
	<div id="calisan-ogrenciler">
	<img src="image/calisan-ogrenciler.png" alt="" ></div>
	<!-- Pembe Kutu-->
<div id="pembe_kutu"><img src="image/pembe_kutu.png" alt="" >
	<p >Sen Daha İyisi Ol Diye</p></div>
	
	


      

    <!--footer-->
    <?php
include "footer.php";

?>