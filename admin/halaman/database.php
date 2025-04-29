<?php 

	// Put maklumat about database MySQL
	$namahost = 'localhost';
	$username = 'root';
	$password = '';
 	$database = 'enormous_robot_generations';   //your database's name

	$capaiDB = mysqli_connect(
		$namahost,
		$username,
		$password,
		$database
		);  // You should put symbol "$" so that you can put alfebet for variables (Pemboleh ubah)

	if($capaiDB) {
		echo "Pangkalan Data Berjaya Dicapai"; // echo/ print use to output smt

	}else {
		echo "Pangkalan Data Gagal Dicapai";
	

 ?>

