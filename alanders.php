<?php
    include "baglan.php";



	if (isset($_POST['search'])) {
		$response = "<ul><li>No data found!</li></ul>";
		
        $q = $_POST['q'];

		$sql = $db->query("SELECT alan_adi FROM alanlar WHERE alan_adi LIKE '%$q%'");
        $say = $sql->rowCount();
		if ($say > 0) {

			$response = "<ul>";

			while ($alan = $sql->fetch()){
				$response .= "<li>" . $alan['alan_adi'] . "</li>";  }
           
            $response .= "</ul>"; }

		exit($response);

	

}

	if (isset($_POST['search2'])) {

		$alan_adi=$_POST['alansecim'];
		$alan_id_sor = $db->query("SELECT alan_id FROM alanlar WHERE alan_adi ='$alan_adi'")->fetch();
      	$id=$alan_id_sor['alan_id'];
		$response2 = "<ul><li>No data found!</li></ul>";
		
        $q2 = $_POST['q2'];
		$sql2 = $db->query("SELECT ders_adi FROM dersler WHERE alan_id = '$id' AND ders_adi LIKE '%$q2%'");
        $say2 = $sql2->rowCount();
		if ($say2 > 0) {

			$response2 = "<ul>";

			while ($ders = $sql2->fetch()){
				$response2 .= "<li>" . $ders['ders_adi'] . "</li>";  }
           
            $response2 .= "</ul>"; }


		exit($response2);
	}
?>