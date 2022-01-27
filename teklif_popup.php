<div class=\"popup-container\">
	<label class=\"button\" for=\"login-popup\" id=\"id_al\" value=\"".$satir[''ilan_id]."\" onclick=\"id_al(this)\" > 


	<x>".$satir['ilan_id']."Teklif Ver</x>
	<a>".$satir['fiyat']." tl/sa </a></label>
	<input type=\"checkbox\" id=\"login-popup\">
	
<div class=\"popup\">

<label for=\"login-popup\"></label>

<form action=\"teklif.php?".$satir['ilan_id']."\" method=\"POST\">


<div class=\"inner\">
    <div class=\"title\">
        <h6>Teklif Giriniz </h6>
        <label for=\"login-popup\">
            <i class=\"fa fa-times\"></i>
        </label>
    </div>
    <div class=\"content\">
         
              <p>
        <input type=\"text\"  name=\"teklif_fiyat\" placeholder=\"Min\" style=\"width:60px; float:left;\">

  <button type=\"submit\" id=\"teklif_ver\" value=".$satir['ilan_id']."  name=\"id_all\"> Teklif ver ".$satir['ilan_id']."
    </button></p>
    </div>
    </form>
</div>
</div>