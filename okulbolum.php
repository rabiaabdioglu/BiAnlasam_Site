<?php
    include "baglan.php";



	if (isset($_POST['search'])) {
		$okul_response = "<ul><li>No data found!</li></ul>";
		
        $q = $_POST['q'];

		$sql = $db->query("SELECT * FROM universiteler WHERE uni_name LIKE '%$q%'");
        $say = $sql->rowCount();
		if ($say > 0) {

			$okul_response = "<ul>";

			while ($okul = $sql->fetch()){
				$okul_response .= "<li>" . $okul['uni_name'] . "</li>";  }
           
            $okul_response .= "</ul>"; }

		exit($okul_response);

	

}

	if (isset($_POST['search2'])) {

		$okul_adi=$_POST['okulsecim'];
		$okul_id_sor = $db->query("SELECT uni_id FROM universiteler WHERE uni_name ='$okul_adi'")->fetch();
      	$id=$okul_id_sor['uni_id'];
		$okul_response2 = "<ul><li>No data found!</li></ul>";
		
        $q2 = $_POST['q2'];
		$sql2 = $db->query("SELECT bolum_ad FROM bolumler WHERE uni_id = '$id' AND bolum_ad LIKE '%$q2%'");
        $say2 = $sql2->rowCount();
		if ($say2 > 0) {

			$okul_response2 = "<ul>";

			while ($bolum = $sql2->fetch()){
				$okul_response2 .= "<li>" . $bolum['bolum_ad'] . "</li>";  }
           
            $okul_response2 .= "</ul>"; }


		exit($okul_response2);
	}
?>