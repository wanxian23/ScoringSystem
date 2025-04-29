
<?php 
	include 'database.php';

	$arahanSQL = "Select * from peserta where idPeserta = '$IDpeserta';";
	$runSQL = mysqli_query($capaiDB, $arahanSQL);
	$data = mysqli_fetch_array($runSQL);

	$arahanSQL2 = "Select * from markah inner join peserta on markah.idPeserta = peserta.idPeserta where peserta.idPeserta = '$IDpeserta' AND idJenis = 'IT01';";
	$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);
	$data2 = mysqli_fetch_array($runSQL2);

	$arahanSQL3 = "Select * from markah inner join peserta on markah.idPeserta = peserta.idPeserta where peserta.idPeserta = '$IDpeserta' AND idJenis = 'IT02';";
	$runSQL3 = mysqli_query($capaiDB, $arahanSQL3);
	$data3 = mysqli_fetch_array($runSQL3);

	$arahanSQL4 = "Select * from pemenang inner join peserta on pemenang.idPeserta = peserta.idPeserta where peserta.idPeserta = '$IDpeserta';";
	$runSQL4 = mysqli_query($capaiDB, $arahanSQL4);
	$data4 = mysqli_fetch_array($runSQL4);

	if (!empty($data['nama_Peserta'])){ ?>
	<div class="AdminSemakMaklumatPesertaAdjust">
		<p><b>NAMA :</b><?php  echo " ".$data['nama_Peserta']; ?></p>
		<p><b>No.KP :</b><?php  echo " ".$data['kad_KPpeserta']; ?></p>
		<p><b>E-MEL :</b><?php  echo " ".$data['emel_Peserta']; ?></p>
	<?php }else{ ?>
	<div class="AdminSemakMaklumatPesertaAdjust">
		<p><b>NAMA :</p>
		<p><b>No.KP :</p>
		<p><b>E-MEL :</p>
	<?php }

	if (!empty($data2['markah']) && !empty($data3['markah'])){
		$jumMarkah = $data2['markah'] + $data3['markah'];?>
		<p><b>KEPUTUSAN : </b><?php  echo " ".$jumMarkah."%"; ?></p>
	<?php }else{ ?>
		<p><b>KEPUTUSAN : </p>
	<?php }

	if (!empty($data4['idPeserta'])){ ?>
		<p><b>Pangkat : </b><?php  echo " ".$data4['Pangkat']; ?></p>
	</div>
	<?php }else{ ?>
		<p><b>Pangkat : </p>
	</div>
	<?php } ?>	


	<div class="AdminSemakGambar">
		<?php if ($IDpeserta == 'PS0001'){ ?>
			<img src="./gambar/ROBOTxinjie3.png">
	    <?php }else if($IDpeserta == 'PS0002'){ ?>
	    	<img src="./gambar/ROBOTzura3.png">
	    <?php }else if($IDpeserta == 'PS0003'){ ?>
	    	<img src="./gambar/ROBOTkaishuen3.png">
	    <?php }else if($IDpeserta == 'PS0004'){ ?>
	    	<img src="./gambar/ROBOTyinxin3.png">
	    <?php }else if($IDpeserta == 'PS0005'){ ?>
	    	<img src="./gambar/ROBOTjiaxuan3.png">
	    <?php }else if($IDpeserta == 'PS0006'){ ?>
	    	<img src="./gambar/ROBOTpuiyi.png">
	    <?php }else if($IDpeserta == 'PS0007'){ ?>
	    	<img src="./gambar/ROBOTgardinia3.png">
	    <?php }else if($IDpeserta == 'PS0008'){ ?>
	    	<img src="./gambar/ROBOTqianhua3.png">
	    <?php }else if($IDpeserta == 'PS0009'){ ?>
	    	<img src="./gambar/ROBOTamily3.png">
	    <?php }else if($IDpeserta == 'PS0010'){ ?>
	    	<img src="./gambar/ROBOTbrian3.png">
	    <?php }else{ ?>
	    	<img src="./gambar/picTungguTunjuk3.png">
	    <?php } ?>

	</div>	