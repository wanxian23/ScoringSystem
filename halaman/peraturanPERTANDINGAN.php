<?php 	

	include 'database.php';

	$arahanSQL = "Select * from tetapan where idTetapan = 'T01'";
	$runSQL = mysqli_query($capaiDB, $arahanSQL);
	$data = mysqli_fetch_array($runSQL);

	if (!empty($runSQL)){
		echo $data['maklumat_Pertandingan'];
	}

 ?>