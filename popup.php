
	     

          <div class="popup-container">
	<label class="button" for="login-popup" id="dersal">Ders Al</label>
	<input type="checkbox" id="login-popup">
	
<div class="popup" >
<label for="login-popup"></label>



  <form  method="POST" action="ilanyayinla.php" >
<div class="inner">
    <div class="title">
        <h6 style="color:#292929">İLAN OLUŞTUR</h6>
        <label for="login-popup">
            <i class="fa fa-times"></i>
        </label>
    </div>
    <div class="content">

        <ul>
            <li> <input type="text" name="alan" placeholder="Alan..." id="alan" autocomplete="off">
        <div id="response" ></div>


            </li>
            <li>

        <input type="text" name="ders" placeholder="Ders..." id="ders" autocomplete="off">
        <div id="response2"></div>       
             </li>
        </ul>
        <ul>
            <li>
            <select class="form-control" id="il" name="il" autocomplete="off">
                    <option value="0">İl Seçiniz</option>
                    <?php
                    include "baglan.php";
                    $ilsorgu = $db->query("SELECT DISTINCT il_id, il_name FROM iller ORDER BY il_id ASC");
                    while($satir = $ilsorgu->fetch(PDO::FETCH_ASSOC)){
                        echo '<option value="'.$satir['il_id'].'">'.$satir['il_name'].'</option>';
                    }
                    ?>
                </select>
                
         </li>
            <li>
           <select class="form-control" id="ilce" name="ilce" autocomplete="off">
                    <option value="0">İlçe Seçiniz</option>
            </select>

                  </li></ul>
<p>            <input type="text" placeholder="Fiyat" name="fiyat" autocomplete="off"> &nbsp; tl/sa</p>

        <section><textarea name="aciklama" id="" cols="50" rows="5" placeholder="Açıklama" autocomplete="off"></textarea></section>
           <i style="color:red; text-align:left; font-size:11px; float: left; ">
               <?php
               session_start();
                $_SESSION['yonlendirme']=$_SERVER['PHP_SELF'];/*ilan yayınlandıktan sonra aynı sayfada kalması için bulunan sayfanın urlsini ilanyayinla.php ye atıyoruz*/
             
                /*$mesaj değişkenine hatalı girişler olursa tekrar popupa tıklayan  ve hata mesajıyla gosteren kodu atıyoruz */
                $mesaj= "<script>$(document).ready(function(){  $('#dersal').click();});</script>";
                if($_GET['ilanbos']=="no"){echo "**Boş alan bırakmayınız".$mesaj;  }
                else if($_GET['ilanaciklamayetersiz']=="no"){echo "**İlanın açıklaması yetersiz.".$mesaj; }
                else if($_GET['dahaonceyayinlanmisilan']=="no"){echo "**Bu ilanı daha önce yayınlamışsınız..".$mesaj; }
                else if($_GET['fiyatyanlis']=="no"){echo "**Doğru bir fiyat sağlayınız..".$mesaj; }

                ?></i>
            <br>
            <ul>
            <li>

                <button type="submit" name="yayinla" id="yayinla">Yayınla</button>
              
            </li>
        </ul>
    
    </div>
</div>
</form>
</div>


	</div>


<?php include "scriptler.php"; ?>