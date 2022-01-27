<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=bianlasam;charset=utf8",'root','');
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}


 ?>