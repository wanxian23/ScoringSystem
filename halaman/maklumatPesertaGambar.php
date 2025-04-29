	<?php  
	
	include "database.php";

	$noKP = $_SESSION['noKP1'];

	$arahanSQL = "Select * from peserta where kad_KPpeserta = '$noKP';";
	$runSQL = mysqli_query($capaiDB, $arahanSQL);
	$data = mysqli_fetch_array($runSQL);

    if ($data['idPeserta'] == 'PS0001'){ ?>
		<img src="./gambar/ROBOTxinjie2.png">
	<?php }else if($data['idPeserta'] == 'PS0002'){ ?>
	    <img src="./gambar/ROBOTzura2.png">
	<?php }else if($data['idPeserta'] == 'PS0003'){ ?>
	    <img src="./gambar/ROBOTkaishuen2.png">
	<?php }else if($data['idPeserta'] == 'PS0004'){ ?>
	    <img src="./gambar/ROBOTyinxin2.png">
	<?php }else if($data['idPeserta'] == 'PS0005'){ ?>
	    <img src="./gambar/ROBOTjiaxuan2.png">
	<?php }else if($data['idPeserta'] == 'PS0006'){ ?>
	    <img src="./gambar/ROBOTpuiyi2.png">
	<?php }else if($data['idPeserta'] == 'PS0007'){ ?>
	    <img src="./gambar/ROBOTgardinia2.png">
	<?php }else if($data['idPeserta'] == 'PS0008'){ ?>
	    <img src="./gambar/ROBOTqianhua2.png">
	<?php }else if($data['idPeserta'] == 'PS0009'){ ?>
	    <img src="./gambar/ROBOTamily2.png">
	<?php }else if($data['idPeserta'] == 'PS0010'){ ?>
	    <img src="./gambar/ROBOTbrian2.png">
	<?php }else{ ?>
		<img src="./gambar/picTungguTunjuk2.png">
	<?php } ?>