<?php // This page is use to fetch data

	include "database.php";

	/* here can write code SQL for create table/ atribut/ smt  */
	$arahanSQL = "Select *
				  from admin
	";
	$runSQL = mysqli_query($capaiDB, $arahanSQL);

	while($data = mysqli_fetch_array($runSQL)) 
 	{ 
 		 echo "ID: "; 
 		 echo $data['idAdmin']; 
 	} 

 ?>