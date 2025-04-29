<?php // This page is use to create database only

	include "database.php";

	/* here can write code SQL for create table/ atribut/ smt  */
	$arahanSQL = "create enormous_robot_generations";
	$runSQL = mysql_query($capaiDB, $arahanSQL);

	if($runSQL) {
		// echo "Database Berjaya Dibina";

	}else {
		echo "Database Gagal Dibina";
		echo "<br>Nama Sudah Diguanakan";
	}

 ?>