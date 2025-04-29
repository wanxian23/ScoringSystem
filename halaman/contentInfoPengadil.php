<?php 
	include "database.php";
	$noKP = $_SESSION['noKP2'];  // Use to connect to other php file in order to connect the variables from that file
	$arahanSQL = "Select * from pengadil inner join jenis on pengadil.idPengadil = jenis.idPengadil where kad_KPpengadil = '$noKP';";
	$runSQL = mysqli_query($capaiDB, $arahanSQL);
	$data = mysqli_fetch_array($runSQL);
?>
<h2 style="text-align: center; font-size: 25px;">INFO PENGADIL</h2>&emsp;
<?php 
	if(!empty($data['nama_Pengadil'])){ ?>
		<label>NAMA:</label>
		<label id="namaPengadil"><?php echo $data['nama_Pengadil'] ?></label>      
		<label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>   

		<label>NO.KP:</label>
		<label id="noKP"><?php echo $data['kad_KPpengadil'] ?></label>
		<label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label> 

		<label>EMEL:</label>
		<label id="emel"><?php echo $data['emel_Pengadil'] ?></label>
		<label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label> 

		<label>JENIS:</label>
		<label id="jenis"><?php echo $data['Jenis'] ?></label>
	<?php }else{ ?>
		<label>NAMA:</label>     
		<label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>   

		<label>NO.KP:</label>
		<label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label> 

		<label>EMEL:</label>
		<label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label> 

		<label>JENIS:</label>
	<?php } ?>

