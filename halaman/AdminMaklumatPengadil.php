<?php 
	include 'database.php';

	$arahanSQL = "Select * from pengadil where idPengadil = '$IDpengadil';";
	$runSQL = mysqli_query($capaiDB, $arahanSQL);
	$data = mysqli_fetch_array($runSQL);

	$arahanSQL2 = "Select * from jenis inner join pengadil on jenis.idPengadil = pengadil.idPengadil where pengadil.idPengadil = '$IDpengadil';";
	$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);
	$data2 = mysqli_fetch_array($runSQL2);

	if (!empty($data['idPengadil'])){ ?>
		<p><b>NAMA:</b><?php echo " ".$data['nama_Pengadil'] ?></p>
		<p><b>NO.KP:</b><?php echo " ".$data['kad_KPpengadil'] ?></p>
	<?php }else{ ?>
		<p><b>NAMA:</p>
		<p><b>NO.KP:</p>
	<?php } 

	if (!empty($data['emel_Pengadil'])){ ?>
		<p><b>EMEL:</b><?php echo " ".$data['emel_Pengadil'] ?></p>
	<?php }else{ ?>
		<p><b>EMEL:</p>
	<?php } 

	if (!empty($data2['idPengadil'])){ ?>
		<p><b>JENIS:</b><?php echo " ".$data2['Jenis'] ?></p>
	<?php }else{ ?>
		<p><b>JENIS:</p>
	<?php } ?>