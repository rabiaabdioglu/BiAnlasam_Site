<?php
include "banner.php";
?>
	<div class="kayit-giris-headeri">
		
	<span>Öğrencilerden <br>
	  Öğrencilere Ders</span>
	<div class="kayit-giris">
		
		  <img onClick="" alt="" src="icons/facebook_login3.png">
		<img onClick="" alt="" src="icons/google_login.png">
		<br>
		<!--iki hr arası veya yazılışı-->
		<a style=" color:#9A9A9A; display: flex; flex-direction:row; margin-left:30px;width:300px;"> <hr>veya<hr ></a>
			
	
                <form  action="giris.php"   method="POST" style="text-align:center; padding:15px;">	

              <a style="font-size:11px; color:tomato; float:left; padding:0; width:50%;">
	          <?php
               if($_GET['girisyap']=="no"){
                echo "**Yanlış kullanıcı adı veya şifre..";
            }
           else if($_GET['girisbos']=="no"){
                echo "**Boş alan bırakmayınız..";
            }
                ?>
                	
                </a>

				<nav><input type="text" name="girisemail" id="" placeholder="   E-mail" onclick="this.placeholder=''; " >
				<input type="password" name="girissifre" id="" placeholder="   Şifre" onclick="this.placeholder='';" >	
				</nav><button type="submit"  name="girisyapbutonu" >Giriş</button>
				<sub>Hala bir hesabın yok mu? <a href="kaydol.php">Kayıt Ol</a></sub>
				</form>

		
		</div></div>
	
	
	
	
	
        </div></body>
</html>
