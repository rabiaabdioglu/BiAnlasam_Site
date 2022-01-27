
 <?php
        
     
        if(isset($_GET['teklif'])){
          $hatamesaji="<div id=\"hatamesaji\" style=\"width:80%; height:50px;line-height:3 !important; text-align:left; position: fixed; z-index:100 !important;top:0; opacity:0.95; background-color:tomato; padding-left:20%;\">
            <a style=\"color: white; font-size:18px; \"> ";
        
                       if($_GET['teklif']=="fiyatyok"){ echo $hatamesaji."**Fiyat Girilmemiş.."."</div>"; }
                       else if($_GET['teklif']=="kendiilaninateklifveremezsin"){  echo $hatamesaji."**Kendi ilanınıza teklif veremezsiniz.."."</div>";}
                       else if($_GET['teklif']=="dahaonceverilmis"){  echo $hatamesaji."**Daha önce bu ilana teklif vermişsiniz.."."</div>";}
          else if($_GET['teklif']=="kullanicigirisyapmamis"){  echo $hatamesaji."**Lütfen önce üye girişi yapınız.."."</div>";  
            header("Refresh:6;Location:girisyap.php?");  }/*eğer giriş yapılmadıysa giriş yapa yönlendir */
          else if($_GET['teklif']=="ilanageridon"){    echo $hatamesaji."**Teklifiniz başarılı bir şekilde verildi.."."</div>";  }}
        
        include "banner.php";
        
        ?>
        
            <div id="secilen-ilan">
                <div id="hemen-ilan-ver">
                    <img src="image/hemen-kendi-ilanini-ver.png" >
                   <br>      
                              <!--İlan oluşturmaya yönlendirir-->	
                   <a href="#"  > 
                    <?php   
                       include "popup.php";   ?></a>
        
        
                </div>
            
                
                <?php  include "baglan.php";
        
            /*kullanıcı kendi ilan yayınladıktan sonra kendi ilanına yönlendirilsin  */
            if($_GET['ilanyayinlandi']=="ok"){
                 session_start();
                $kullanici_id=$_SESSION['oku']['kullanici_id'];
                 
                $sorgu = $db->query("SELECT kullanici.kullanici_id , kullanici.adi ,
                 kullanici.soyadi , ilan.baslik , ilan.aciklama , ilceler.ilce_adi , alanlar.alan_id ,
                  iller.il_name , ilan.fiyat,ilan.ilan_id,ilan.ilan_tarihi from ilan INNER JOIN kullanici ON ilan.kullanici_id=kullanici.kullanici_id INNER JOIN iller ON ilan.il_id=iller.il_id INNER JOIN ilceler on    ilan.ilce_id=ilceler.ilce_id INNER JOIN alanlar  on    ilan.alan_id=alanlar.alan_id where kullanici.kullanici_id='$kullanici_id' ORDER BY ilan.ilan_id DESC LIMIT 1")->fetch();
                }
        /*eğer kullanıcı bir sayfadan ilana tıklama ile geldiyse tıkladığı ilana yönlendirilsin  */
        else{
                if($_POST){$ilan_id=$_POST['id_getir'];}
                else if($_SESSION['ilanadon']){ $ilan_id=$_SESSION['ilanadon'];}
                 $sorgu = $db->query("SELECT kullanici.kullanici_id , kullanici.adi , kullanici.soyadi , ilan.baslik , ilan.aciklama , ilceler.ilce_adi , iller.il_name , iller.il_id, ilan.fiyat,ilan.ilan_id, ilan.ilan_tarihi , alanlar.alan_id from ilan INNER JOIN kullanici ON ilan.kullanici_id=kullanici.kullanici_id INNER JOIN iller ON ilan.il_id=iller.il_id INNER JOIN ilceler on    ilan.ilce_id=ilceler.ilce_id INNER JOIN alanlar  on    ilan.alan_id=alanlar.alan_id  where ilan_id='$ilan_id'")->fetch();
            }
            $benzerilan_ilan_id=$sorgu['ilan_id'];
            $benzerilan_il_id=$sorgu['il_id'];
            $benzerilan_alan_id=$sorgu['alan_id'];
            $benzerilan_kullanici_id=$sorgu['kullanici_id'];
        
                
               
        
          echo "             <nav id=\"ana-ilan\">
                    <div id=\"ana-ilan-satir-1\">
                        <nav id=\"satir-1-sutun-1\"><!--Profil fotoğrafı kısmı-->
        
<a  href=\"profil.php?gelen_kullanici_id=".$sorgu['kullanici_id']." \">


            <nav class=\"profil-pp-arkaplan\">
        
        
        <nav class=\"profil-pp\" style=\" background:url(imageView.php?kullanici_id=".$sorgu['kullanici_id'].");  \"></nav>
        
        </nav> </a>
                            </nav>
                      
                       <nav id=\"satir-1-sutun-2\"><!--Ad soyad ve puan  kısmı-->
                            <a> 
                            ".$sorgu['adi']."&nbsp;".$sorgu['soyadi']."
        
                            </a>
                            <br>
                            <i style=\"font-size:0.7rem; float: left;\">40   değerlendirme</i>  
                        </nav>
        
                        <nav id=\"satir-1-sutun-3\" ><!--İlan bilgileri kısmı-->
                            <a> ".$sorgu['baslik']." </a>
                            <i style=\"float: right; margin-right:20px; font-size:0.7rem;\">". date("m-d",strtotime($sorgu['ilan_tarihi']))."</i>
                            <br>
                            <br>
                            <!--Açıklama kısmı-->
                            <a style=\"font-size:0.9rem;\">".$sorgu['aciklama']."</a>
                        </nav>
                    </div>
                    
                    <div id=\"ana-ilan-satir-2\" > <!-- konum ve fiyat kısmı-->
                    <i style=\"float: left;\"> <img src=\"icons/location.png\" >".$sorgu['ilce_adi']." / ".strToUpper($sorgu['il_name'])." </i>
              
                    <div class=\"popup-container\" style=\"float:right; margin-right:20%;\">
                    <label class=\"button\" for=\"login-popup2\" style=\"height:40px;\" > 
                    <x>Teklif Ver</x>
                    <a>".$sorgu['fiyat']." tl/sa </a></label>
                    <input type=\"checkbox\" id=\"login-popup2\">
                    
                <div class=\"popup\">
                
                <label for=\"login-popup2\"></label>
                
                <form action=\"teklif.php\" method=\"POST\">
                
                
                <div class=\"inner\" style=\"min-width:15%; min-height:120px;\">
                    <div class=\"title\">
                        <h6>Teklif Giriniz</h6>
                        <label for=\"login-popup2\">
                            <i class=\"fa fa-times\"></i>
                        </label>
                    </div>
                    <div class=\"content\" style=\"margin:20% 10%; font-size:12px;\">
                         
                              <p>
                        <input type=\"text\" autocomplete=\"off\"  name=\"teklif_fiyat\" placeholder=\"Min\">
                        <input type=\"text\"  name=\"id_al\" value=\"".$sorgu['ilan_id']." \" style=\"display:none;\" \">
                    
                  <button type=\"submit\" > Teklif ver</button></p>
                    </div>
                    </form>
                </div>
                </div>
        
                    </div>
                    
                </nav> ";?> 
        
           
                    <nav id="teklifler">
                    <center>
                    
            <?php 	$sorgu2 = $db->query("SELECT kullanici.kullanici_id , kullanici.adi , kullanici.soyadi , bolumler.bolum_ad,
                universiteler.uni_name ,teklif.fiyat from teklif INNER JOIN kullanici ON teklif.teklif_veren_kullanici_id=kullanici.kullanici_id INNER JOIN bolumler ON kullanici.bolum_id=bolumler.bolum_id INNER JOIN universiteler on	bolumler.uni_id=universiteler.uni_id where ilan_id='$ilan_id'");
             
        
                      /*   <!--her teklif altalta gelecek-->*/
        
                      $say = $sorgu2->rowCount();
                      /*   <!--her teklif altalta gelecek-->*/
        
                    if($say>0){/*eğer hiç teklif yoksa  else ile yazı yazdır */
                while ($satir=$sorgu2->FETCH()) {/*versa satır satır oku ve her okuyuşta div oluştur */
        
                    if(empty($satir['bolum_ad']))$bolum_ad="Bölüm yok..";
                else{$bolum_ad=$satir['bolum_ad'];}
                if(empty($satir['uni_name']))$uni_ad="Üniversite yok..";
                else{$uni_ad=$satir['uni_name'];}
        
           echo "    
           <nav id=\"teklif\">
                            
                         <nav id=\"satir-1-sutun-1\"><!--Profil fotoğrafı kısmı-->
                      
<a  href=\"profil.php?gelen_kullanici_id=".$satir['kullanici_id']." \">


            <nav class=\"profil-pp-arkaplan\">
        
        
            <nav class=\"profil-pp\" style=\" background:url(imageView.php?kullanici_id=".$satir['kullanici_id'].");  \"></nav>
                   </nav>  </a>  </nav>
                      
                       <nav id=\"satir-1-sutun-2\" ><!--Ad soyad ve puan  kısmı-->
                            <a>".$satir['adi']."&nbsp;".$satir['soyadi']."</a> &nbsp&nbsp&nbsp<i style=\"font-size:0.7rem;  \">40   değerlendirme</i>  
                            <br>".$bolum_ad."<br>".$uni_ad."
                        </nav>
        
                        <nav id=\"satir-1-sutun-3\">
                            <!--Teklif Kısmı-->
                            <button type=\"submit\">
                           
                <x>Teklif Ver</x><a>".$satir['fiyat']."&nbsp; tl/sa </a>
                    </button>  
                    </nav>  </nav>
        
                             
                "; }}
                else{
                    echo "<div style=\"width:80%; font-size:20px; margin:150px 50px; text-align:left;\"> Henüz hiç teklif yapılmamış..  </div>";
                }
        
                echo "</center>  </nav> 
                <br>
                <br>
                <br>
             <nav id=\"benzer-ilanlar\">";
               
        /*Eğer benzer ilanlarda 4 ten az sonuç varsa  o benzerlikte ki div olmayacak */
        /*Benzer ilanlarda  gezen kullanıcının ilanları veya  ziyaret ettiği ilan  çıkmasın  */
              
        
        
        
        /*ALANA GÖRE BENZER İLANLAR*/
            $alanagore = $db->query("SELECT kullanici.kullanici_id , kullanici.adi , kullanici.soyadi ,ilan.fiyat ,ilan.ilan_id, iller.il_name , alanlar.alan_adi from ilan INNER JOIN kullanici ON ilan.kullanici_id=kullanici.kullanici_id INNER JOIN alanlar  on    ilan.alan_id=alanlar.alan_id  INNER JOIN iller on	ilan.il_id=iller.il_id where ilan.alan_id='$benzerilan_alan_id' and kullanici.kullanici_id != '$kullanici_id' and ilan.ilan_id!= '$benzerilan_ilan_id'   ORDER BY RAND() LIMIT 4");
         
            $say2 = $alanagore->rowCount();
            /*   <!--her teklif altalta gelecek-->*/
        
          if($say2>3){
        
           
         echo " 
           <a>Aynı alandan ilanlar </a>
             <center>
           <div  id=\"buna-benzer-ilan\">";
        
        
        
                          while ($satir2=$alanagore->FETCH()) {/*versa satır satır oku ve her okuyuşta div oluştur */
        
        
        
            echo "
             
               <nav class=\"benzer-ilan\"><nav class=\"profil-pp-arkaplan\">
        
<a  href=\"profil.php?gelen_kullanici_id=".$satir2['kullanici_id']." \">


        
               <nav class=\"profil-pp\" style=\" background:url(imageView.php?kullanici_id=".$satir2['kullanici_id'].");  \"></nav>
               </nav>
                   </a>
                   <br>
                   ".$satir2['adi']."&nbsp;".$satir2['soyadi']."
                   <br>
                   <br>
                   ".$satir2['alan_adi']." alanı
                   <br> 
                   ".$satir2['il_name']." 
                   <br>
                 
          <form  method=\"POST\" action=\"secilenilan.php\" >
          <input  name=\"id_getir\"  value=\"".$satir2['ilan_id']."\" style=\"display:none;\">
        <button type=\"submit\">
        <x>Teklif Ver</x>	<a>".$satir2['fiyat']."&nbsp;tl/sa </a>
        </button>
        
        
        </form>
                
               </nav>
        
              
            "; }
        echo "</div>  
        </center>";/*kapsayıcı için while dışında kapanış*/
        }
            
            /*ALANA GÖRE BENZER İLANLAR*/
            $sehiregore = $db->query("SELECT kullanici.kullanici_id , kullanici.adi , kullanici.soyadi ,ilan.ilan_id, ilan.fiyat , iller.il_name , alanlar.alan_adi from ilan INNER JOIN kullanici ON ilan.kullanici_id=kullanici.kullanici_id INNER JOIN alanlar  on    ilan.alan_id=alanlar.alan_id  INNER JOIN iller on	ilan.il_id=iller.il_id where ilan.il_id='$benzerilan_il_id' and kullanici.kullanici_id != '$kullanici_id' and ilan.ilan_id!= '$benzerilan_ilan_id'    ORDER BY RAND() LIMIT 4");
         
            $say3= $sehiregore->rowCount();
            /*   <!--her teklif altalta gelecek-->*/
        
          if($say3>3){
        
           
         echo "
           <a>Aynı şehirden ilanlar</a>
             <center>
           <div  id=\"buna-benzer-ilan\">";
        
        
        
                          while ($satir3=$sehiregore->FETCH()) {/*versa satır satır oku ve her okuyuşta div oluştur */
        
        
        
            echo "
             
            <nav class=\"benzer-ilan\"><nav class=\"profil-pp-arkaplan\">
        
        
<a  href=\"profil.php?gelen_kullanici_id=".$satir3['kullanici_id']." \">


            <nav class=\"profil-pp\" style=\" background:url(imageView.php?kullanici_id=".$satir3['kullanici_id'].");  \"></nav>
            </nav></a>
                   <br>
                   ".$satir3['adi']."&nbsp;".$satir3['soyadi']."
                   <br>
                   <br>
                   ".$satir3['alan_adi']." alanı
                   
                   <br>
                   ".$satir3['il_name']." 
                   <br>
                
          <form  method=\"POST\" action=\"secilenilan.php\" >
          <input  name=\"id_getir\"  value=\"".$satir3['ilan_id']."\" style=\"display:none;\">
        <button type=\"submit\">
        <x>Teklif Ver</x>	<a>".$satir3['fiyat']." &nbsp;tl/sa </a>
        </button>
        
        
        </form>
        
                
               </nav>
        
              
            "; } 
         echo "</div>  
         </center>";
        }
            
                    /*ALANA GÖRE BENZER İLANLAR*/
                    $randomilan = $db->query("SELECT kullanici.kullanici_id , kullanici.adi , kullanici.soyadi ,ilan.ilan_id, ilan.fiyat , iller.il_name , alanlar.alan_adi from ilan INNER JOIN kullanici ON ilan.kullanici_id=kullanici.kullanici_id INNER JOIN alanlar  on    ilan.alan_id=alanlar.alan_id  INNER JOIN iller on	ilan.il_id=iller.il_id where kullanici.kullanici_id != '$kullanici_id' and ilan.ilan_id!= '$benzerilan_ilan_id'    ORDER BY RAND() LIMIT 4");
         
                    $say4= $randomilan->rowCount();
                    /*   <!--her teklif altalta gelecek-->*/
                
                  if($say4>3){
                
                   
                 echo "
                   <a>İlgini çekebilecek diğer ilanlar</a>
                     <center>
                   <div  id=\"buna-benzer-ilan\">";
                
                
                
                                  while ($satir4=$randomilan->FETCH()) {/*versa satır satır oku ve her okuyuşta div oluştur */
                
                
                
                    echo "
                     
                    <nav class=\"benzer-ilan\"><nav class=\"profil-pp-arkaplan\">
                
<a  href=\"profil.php?gelen_kullanici_id=".$satir4['kullanici_id']." \">


                
                    <nav class=\"profil-pp\" style=\" background:url(imageView.php?kullanici_id=".$satir4['kullanici_id'].");  \"></nav>
                    </nav></a>
                           <br>
                           ".$satir4['adi']."&nbsp;".$satir4['soyadi']."
                           <br>
                           <br>
                           ".$satir4['alan_adi']." alanı
                           
                           <br>
                           ".$satir4['il_name']." 
                           <br>
                        
                  <form  method=\"POST\" action=\"secilenilan.php\" >
                  <input  name=\"id_getir\"  value=\"".$satir4['ilan_id']."\" style=\"display:none;\">
                <button type=\"submit\">
                <x>Teklif Ver</x>	<a>".$satir4['fiyat']." &nbsp;tl/sa </a>
                </button>
                
                
                </form>
                
                        
                       </nav>
                
                      
                    "; } 
                 echo "</div>  
                 </center>";
                }
                    
            
            
            echo "</nav";
            
            
            ?>  
            
           <br>
           <br>
           <br>
           <br>
           <br>
        
           
        
        
        
        
        
        
        
        </div>
            <?php
            
        include "footer.php";
        include "scriptler.php";    
        ?>
        
        