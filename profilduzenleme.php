 <?php

      include "baglan.php";
   session_start();  
   $kullanici_id= $_SESSION['oku']['kullanici_id'];

     echo"     <div class=\"popup-container\">
	<label class=\"button\" for=\"login-popup\" id=\"profilduzenle\">
    <i class=\"fas fa-ellipsis-v\"></i>  </label>
	<input type=\"checkbox\" id=\"login-popup\">
	
<div class=\"popup\" >
<label for=\"login-popup\"></label>


 
<div class=\"inner\"> 
    <div class=\"title\" style=\"color:#292929; background-color:white; z-index:10;\">
        <h6 >İLAN OLUŞTUR</h6>    <i style=\"color:red; text-align:left; font-size:11px; float: left; \"> ";   
       
       /*banner altı mesaj için */
        if(isset($_GET['profil'])){
            $mesaj= "<script>$(document).ready(function(){  $('#profilduzenle').click();});</script>";              
      if($_GET['profil']=="zorunlualanlarbos"){echo "**Lütfen zorunlu alanları boş bırakmayınız..".$mesaj;  }
      if($_GET['profil']=="telefonyanlis"){echo "**Lütfen zorunlu alanları boş bırakmayınız..".$mesaj;  }
      if($_GET['profil']=="sifredogrudegil"){echo "**Yanlış şifre girdiniz..".$mesaj;  }
      if($_GET['profil']=="sifrelereslesmiyor"){echo "**Girilen şifreler aynı değil..".$mesaj;  }
      if($_GET['profil']=="sifregiriniz"){echo "**Yanlış şifre girdiniz....".$mesaj;  }


                 }



        
        echo " 
          </i>
        <label for=\"login-popup\">
            <i class=\"fa fa-times\"></i>
        </label>
    </div>
    <div class=\"content\" style=\" text-align:left; \">


   ";

$profilsorgu = $db->query("SELECT * from kullanici INNER JOIN iller ON iller.il_id=kullanici.sehir_id INNER JOIN bolumler ON kullanici.bolum_id=bolumler.bolum_id INNER JOIN universiteler ON kullanici.okul_id=universiteler.uni_id WHERE kullanici.kullanici_id='$kullanici_id'")->fetch();
   
      echo "
     <form class=\"profilduzenleme\" method=\"POST\" enctype=\"multipart/form-data\"  action=\"guncelle.php\" style=\"padding:5%; color:black; text-align:left;\" >
      <ul>
          <li>
      <nav class=\"profil-pp-arkaplan\" style=\" float:left;\">
    <img  class=\"profil-pp\" id=\"onizleme\" style=\" background:url(imageView.php?kullanici_id=".$_SESSION['oku']['kullanici_id']."\">
     
<input name=\"userImage\" style=\"color:transparent; float:right; margin:0;\" accept=\"image\" onchange=\"loadFile(event)\" type=\"file\" value=\" \"class=\"inputFile\" />
      </nav>  
             </li>
      </ul>
      <ul style=\"display:flex;flex-direction:row;\">
          <li>

Ad: <input type=\"text\" name=\"adi\" value=\"".$profilsorgu['adi']."\" id=\"adi\" autocomplete=\"off\"></li><li>
Soyad : <input type=\"text\" name=\"soyadi\" value=\"".$profilsorgu['soyadi']."\" id=\"soyadi\" autocomplete=\"off\"></li>

</ul>
<ul style=\"display:flex;flex-direction:row;\">
    <li>
E-mail  :<input type=\"email\" name=\"email\" value=\"".$profilsorgu['email']."\" id=\"email\" autocomplete=\"off\">
    </li>
    <li>


Telefon Numarası :   <input type=\"tel\" name=\"telefon\" value=\"".$profilsorgu['telefon_numarasi']."\" id=\"telefon\" autocomplete=\"off\">

</li>
</ul>
<ul>
    <li>

     Doğum Tarihi : <input type=\"date\"  style=\"width:100%;\" value=\"".$profilsorgu['dogum_tarihi']."\" name=\"dogumtarihi\" autocomplete=\"off\">

      </li>
      </ul>
      
          <ul>
              <li> <input type=\"text\" name=\"okul\"  value=\"".$profilsorgu['uni_name']."\" id=\"okul\" autocomplete=\"off\">
          <div id=\"okul_response\" ></div>
  
  
              </li>
              <li>
  
          <input type=\"text\" name=\"bolum\"  value=\"".$profilsorgu['bolum_ad']."\" id=\"bolum\" autocomplete=\"off\">
          <div id=\"okul_response2\"></div>       
               </li>
          </ul>
        
          <ul>
              <li>
              <select class=\"form-control\" id=\"il\" name=\"il\" autocomplete=\"off\" style=\"font-size:15px; width:100%;\">
                      <option value=\"0\">".$profilsorgu['il_name']."</option>";
                
                    $ilsorgu = $db->query("SELECT DISTINCT il_id, il_name FROM iller ORDER BY il_id ASC");
                    while($satir = $ilsorgu->fetch(PDO::FETCH_ASSOC)){
                        echo '<option value="'.$satir['il_id'].'">'.$satir['il_name'].'</option>';
                    }
              echo "
                </select> </li> </ul>

         
                    <section>    Açıklama : <textarea name=\"aciklama\" id=\"aciklama\" cols=\"50\" rows=\"5\" autocomplete=\"off\">".$profilsorgu['aciklama']."</textarea></section>
                  <br>
            <ul>
            <li>

                <button type=\"submit\" name=\"form1\" id=\"guncelle\">Güncelle</button>
              
            </li>
        </ul>
    </form>



    <form class=\"profilduzenleme\" method=\"POST\"  action=\"guncelle.php\" style=\"padding:5%; color:black; text-align:left;\" >
    <ul>
    <li>
     Şifre : <input type=\"password\"  style=\"width:300px;\" name=\"eskisifre\" autocomplete=\"off\"> </li>
      </ul>
      <ul>
      <li>
    Yeni Şifre : <input type=\"password\"style=\"width:300px;\"   name=\"yenisifre\" autocomplete=\"off\"> </li>
        </ul>    <ul>
        <li>
       Yeni Şifre Onay : <input type=\"password\"  style=\"width:300px;\" name=\"yenisifreonay\" autocomplete=\"off\"> </li>
          </ul>
          <ul>
          <li>

      <button type=\"submit\" name=\"form2\" id=\"guncelle\">Şifreyi Değiştir</button>
</li>
          </ul>
</form>


    </div>




</div>


</div>


	</div>

";
include "scriptler.php";
 ?>