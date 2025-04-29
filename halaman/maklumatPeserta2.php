<?php 
	include "database.php";

	$id = $_SESSION['idpesertaDelete']; // SESSION is used to connect variables from other php file

	$arahanSQL4 = "Select * from peserta where idPeserta = '$id';";
	$arahanSQL = "Select * from peserta inner join robot on peserta.idPeserta = robot.idPeserta where peserta.idPeserta = '$id';";
	$arahanSQL2 = "Select * from markah inner join peserta on markah.idPeserta = peserta.idPeserta where peserta.idPeserta = '$id' AND idJenis = 'IT01';";
	$arahanSQL3 = "Select * from markah inner join peserta on markah.idPeserta = peserta.idPeserta where peserta.idPeserta = '$id' AND idJenis = 'IT02';";

	$runSQL = mysqli_query($capaiDB, $arahanSQL);
	$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);
	$runSQL3 = mysqli_query($capaiDB, $arahanSQL3);
	$runSQL4 = mysqli_query($capaiDB, $arahanSQL4);
	$data = mysqli_fetch_array($runSQL);
	$data2 = mysqli_fetch_array($runSQL2);
	$data3 = mysqli_fetch_array($runSQL3);
	$data4 = mysqli_fetch_array($runSQL4);


	if (!empty($data4['nama_Peserta'])){ ?>
		<label><b>NAMA:</b></label>
		<label><?php echo $data4['nama_Peserta'] ?></label>
		<br><br>
	<?php }else{ ?>
		<label><b>NAMA:</b></label>
		<br><br>
	<?php } 

	if (!empty($data4['kad_KPpeserta'])){ ?>
		<label><b>No.KP:</b></label>
		<label><?php echo $data4['kad_KPpeserta'] ?></label>
		<br><br>
	<?php }else{ ?>
		<label><b>No.KP:</b></label>
		<br><br>
	<?php } 

	if (!empty($data4['emel_Peserta'])){ ?>
		<label><b>E-MEL:</b></label>
		<label><?php echo $data4['emel_Peserta'] ?></label>
		<br><br>
	<?php }else{ ?>
		<label><b>E-MEL:</b></label>
		<br><br>
	<?php } 

	if (!empty($data['nama_Robot'])){ ?>
		<label><b>NAMA ROBOT:</b></label>
		<label><?php echo $data['nama_Robot'] ?></label>
		<br><br>
	<?php }else{ ?>
		<label><b>NAMA ROBOT: </b></label>
		<br><br>
	<?php } 

	if (!empty($data2['idPeserta']) && !empty($data3['idPeserta'])){ ?>
		<label><b>MARKAH (100%)</b></label><br>
		<label>&emsp;</label>
		<label>KREATIVITI:</label>
		<label><?php echo $data2['markah'] ?>%</label><br>&emsp;
		<label>KEGUNAAN:</label>	
		<label><?php echo $data3['markah'] ?>%</label>
		<br><br>
	<?php }else{ ?>
		<label><b>MARKAH (100%)</b></label><br>
		<label>&emsp;</label>
		<label>KREATIVITI:</label>
		<br>&emsp;
		<label>KEGUNAAN:</label>	
		<br><br>
	<?php } 

	if (!empty($data2['markah']) && !empty($data3['markah'])){
		$jumMarkah = $data2['markah'] + $data3['markah']; ?>
		<label><b>KEPUTUSAN:</b></label>
		<label><?php echo $jumMarkah ?>%</label>
	<?php }else{ ?>
		<label><b>KEPUTUSAN: </b></label>
		<br><br>
	<?php } ?>
