<?php // This page is use to insert data

	include "database.php";

	/* here can write code SQL for create table/ atribut/ smt  */
	$arahanSQL = "insert into Admin
				  values ('A001', 'CWX23', 'wanxian23')
	";
	$runSQL = mysqli_query($capaiDB, $arahanSQL);

	if($runSQL) {
		echo "Data Sudah Dimasukkan";

	}else {
		echo "Data Gagal Dimasukkan";
		echo "<br>Atribut Sudah Digunakan";
	}

 ?>