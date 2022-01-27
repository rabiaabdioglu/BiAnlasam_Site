<?php

session_destroy();
session_unset();
unset($_SESSION['oku']);

session_start();

include"baglan.php";

$sifre=$_POST["girissifre"];
$email=$_POST["girisemail"];


if(!$sifre || !$email){/*eğerşifreveemailboşise*/
header('Location:girisyap.php?girisbos=no');
}
else{

$oku = $db->query("SELECT * FROM kullanici WHERE email= '$email' AND sifre = '$sifre'")->fetch();


if($oku){

    $_SESSION['oku'] = $oku;
header('Location:main.php');
}

else{

header('Location:girisyap.php?girisyap=no');/*eğerelsegirersekullanıcıadıveyaşifreyanlıştır*/

}

}

?>