
<?php 
	
	if(!empty($_SESSION['idPeserta'])){
	include "database.php";

	$idPeserta = $_SESSION['idPeserta'];
	
	$arahanSQL = "Select * from peserta where idPeserta = '$idPeserta';";
	$runSQL = mysqli_query($capaiDB, $arahanSQL);
	$data = mysqli_fetch_array($runSQL);

	if (!empty($data['idPeserta'])){

		if ($data['idPeserta'] == 'PS0001'){ ?>
			<img src="./gambar/ROBOTxinjie.png">
		<?php }else if($data['idPeserta'] == 'PS0002'){ ?>
	   		<img src="./gambar/ROBOTzura.png">
		<?php }else if($data['idPeserta'] == 'PS0003'){ ?>
	    	<img src="./gambar/ROBOTkaishuen.png">
		<?php }else if($data['idPeserta'] == 'PS0004'){ ?>
	    	<img src="./gambar/ROBOTyinxin.png">
		<?php }else if($data['idPeserta'] == 'PS0005'){ ?>
	    	<img src="./gambar/ROBOTjiaxuan.png">
		<?php }else if($data['idPeserta'] == 'PS0006'){ ?>
	    	<img src="./gambar/ROBOTpuiyi3.png">
		<?php }else if($data['idPeserta'] == 'PS0007'){ ?>
	    	<img src="./gambar/ROBOTgardinia.png">
		<?php }else if($data['idPeserta'] == 'PS0008'){ ?>
	    	<img src="./gambar/ROBOTqianhua.png">
		<?php }else if($data['idPeserta'] == 'PS0009'){ ?>
	    	<img src="./gambar/ROBOTamily.png">
		<?php }else if($data['idPeserta'] == 'PS0010'){ ?>
	    	<img src="./gambar/ROBOTbrian.png">
		<?php }else{ ?>
			<img src="./gambar/picTungguTunjuk.png">
		<?php } 
		
	}else{ ?>
		<img src="./gambar/picTungguTunjuk.png">
<?php }

}else{ ?>
		<img src="./gambar/picTungguTunjuk.png">
<?php }?>