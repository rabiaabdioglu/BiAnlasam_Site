<?php
include "baglan.php";

$sorgu=$db->query("SELECT * FROM ilan");

while($sonuc=$sorgu -> fetch())
{
	
echo $sonuc["aciklama"]."<br>";

}






?>