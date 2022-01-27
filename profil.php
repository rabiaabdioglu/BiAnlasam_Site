
    <?php 
include "baglan.php";

    
if(isset($_GET['profilduzenleme'])){
$mesaj="<div id=\"hatamesaji\" style=\"width:80%; height:50px;line-height:3 !important; text-align:left; position: fixed; z-index:100 !important;top:0; opacity:0.95; background-color:tomato; padding-left:20%;\">
<a style=\"color: white; font-size:18px; \"> ";

if($_GET['profilduzenleme']=="ok"){echo  $mesaj."**Profiliniz başarıyla güncellendi"."</div>";   }
if($_GET['sifredegis']=="ok"){echo  $mesaj."**Şifreniz başarıyla değiştirildi"."</div>";   }

}
     include "banner.php";   ?>
  <br>
  <br>
  <br>
  <center>
<div id="profil"> 

 <?php
session_start();

if(isset($_GET['gelen_kullanici_id']))$profil_id=$_GET['gelen_kullanici_id'];
else $profil_id=$_SESSION['oku']['kullanici_id'];



/*Profil üst kısmı ve sol bar için sorgu */
$profilsorgu = $db->query("SELECT * from kullanici INNER JOIN iller ON iller.il_id=kullanici.sehir_id INNER JOIN bolumler ON kullanici.bolum_id=bolumler.bolum_id INNER JOIN universiteler ON kullanici.okul_id=universiteler.uni_id WHERE kullanici.kullanici_id='$profil_id'")->fetch();

if(empty($profilsorgu['aciklama'])){$aciklama="Henüz açıklama eklenmemiş";}
else{$aciklama=$profilsorgu['aciklama'];}
  ECHO "
  <div id=\"kullanici-bilgileri\">  
  
      <div id=\"kb-satir-1\">
              <nav id=\"satir-1-sutun-1\"><!--Profil fotoğrafı kısmı-->
                  
              <nav class=\"profil-pp-arkaplan\" style=\" float:left; margin-left:40%; margin-top: 20px;\">

              <nav class=\"profil-pp\" style=\" background:url(imageView.php?kullanici_id=".$profil_id."); \"></nav>
              
              </nav>      </nav>
            
             <nav id=\"satir-1-sutun-2\" ><!--Ad soyad ve puan  kısmı-->
                  <a> ".$profilsorgu['adi']."&nbsp;".$profilsorgu['soyadi']."  <img src=\"icons/approved.png\" style=\"width:3%;\" alt=\"\"></a>
                  <br>
                  <i style=\"font-size:0.7rem; float: left;\">
                  <img src=\"icons/45-out-of-5-stars-png-15.png\" alt=\"\" style=\"width:12%;\">
                   (40   değerlendirme)</i>  
             
                   <br>
                   <br>
                   
                  <a style=\"font-size:0.8rem; float:left;\">
                  ".$profilsorgu['bolum_ad']."<br>".$profilsorgu['uni_name']."</a>
              </nav>
  
              <nav id=\"satir-1-sutun-3\"><!--İlan bilgileri kısmı-->
              <a href=\"#\">";
              
              include "profilduzenleme.php";
              
              echo "</a>
                      
                      <i style=\"float:right; margin-top:120%; font-size:90%;\"> 
                          <img src=\"icons/location.png\" style=\"width:10%;\">".strToUpper($profilsorgu['il_name'])." </i>
              </nav>
          </div>  
  </div> 


  <div id=\"profil-alt\">
  
  <nav id=\"yan-bilgi\">  ".$aciklama."
     </nav>  
  <nav id=\"profil-ilanlari\"> ";/*üst profil echosu bitisi*/
  


  $profil_ilan_sorgu = $db->query("SELECT * from ilan WHERE kullanici_id='$profil_id'");
       
      if($profil_ilan_sorgu->fetchColumn()>0){/*eğer hiç ilan yoksa  else ile yazı yazdır */
  while ($satir=$profil_ilan_sorgu->FETCH()) {/*versa satır satır oku ve her okuyuşta div oluştur */


   echo "   <div id=\"p-ilan\" >
          <!--kullanıcının profil fotoğrafı -->
          <nav id=\"satir-1-sutun-1\">
           <nav class=\"profil-pp-arkaplan\" style=\" float:left;\">

          <nav class=\"profil-pp\" style=\" background:url(imageView.php?kullanici_id=".$profil_id."); \"></nav>
          
          </nav> </nav>
              
          <nav id=\"satir-1-sutun-2\" style=\"width:80%; float: left;\"><!--ilan bilgilerini kapsayan div-->
      
                  <span>".$profilsorgu['adi']."&nbsp;".$profilsorgu['soyadi']."</span>
                      &nbsp  &nbsp  &nbsp
                   <span   style=\" margin-right:10%; \" >".$satir['baslik']."</span>	
                   <form  method=\"POST\" action=\"secilenilan.php\" >
                   <input  name=\"id_getir\"  value=\"".$satir['ilan_id']."\" style=\"display:none;\">
                 <button type=\"submit\">
                 	<a>".$satir['fiyat']." &nbsp;tl/sa </a>
                 </button>
                       </div>
                   
                 
                   ";}}
                   else{
                          echo "<div style=\"width:80%; font-size:14px; margin:150px 50px; text-align:left;\"> Henüz hiç ilan yayınlanmamış..  </div>  </nav>  </div>";
                   }
   
  



	?>

    </nav>  </div>
  
  
  
  <div id="p-degerlendirme" >
      <span style= "font-size:1.5rem;"> Değerlendirmeler</span>
  <br>
  <img src="icons/45-out-of-5-stars-png-15.png" style="width:13%; margin-right:3%;" >
  <a>40 değerlendirme &nbsp | &nbsp 10 yorum</a>
  <br>
  <br>
  
  <nav id="p-yorumlar">
  
      <nav > Çok iyi bir anlatıcı. Kendisine çok teşekkür ederim  ÖRNEK YORUM
          <br>
      <img src="icons/45-out-of-5-stars-png-15.png"  alt=""> 
          
          <a style="float:right;">Ad soyad</a>
</nav>


</nav>
</div>


</div>





</div>
    
 


</center> 


	
<?php
include "scriptler.php";
include "footer.php";
    
?>