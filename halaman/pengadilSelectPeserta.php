<?php  if(empty($_POST['semak'])){ ?>
<form method="POST" id="form1">
<h2 style="text-align: center;">MEMERIKSA MAKLUMAT PESERTA</h2>

<label>&emsp;</label> 
<label>PILIH PESERTA:</label>
<select name="nama" style="font-size: 15px;">
	<option value="none">----------------------------------------- PILIH PESERTA -----------------------------------------</option> 
	<?php 
		include 'database.php';
		$arahanSQL = "select * from peserta";
 		$arahanRUN = mysqli_query($capaiDB,$arahanSQL);
 		while($data = mysqli_fetch_array($arahanRUN))
 			{
	?>
	<option value=<?php echo $data['idPeserta']; ?> ><?php echo $data['nama_Peserta']; }?></option> 
</select>
<label>&emsp;</label> 

<input type="submit" name="semak" value="SEMAK" style="font-size: 15px; width: 100px;" form="form1">
</form>

<div class="borderMaklumatPeserta">
</div>
<?php  }else{ 
		include './halaman/pengadilSelectPesertaFORM.php'; 
		include "database.php";
		$idPeserta = $_POST['nama'];                        
		$_SESSION['idPeserta'] = $_POST['nama'];

		if (!empty($_POST['nama'])) { 
				if ($idPeserta == "none"){ ?>
					<script type="text/javascript">
						window.alert("Semak gagal. Sila pilih nama peserta betul-betul !!");
						window.location = 'HalamanPengadil.php';
					</script>
<?php 
				}else{ ?>
					<div class="borderMaklumatPeserta">
						<div class="MaklumatPesertaAdjust">
							<h1 style="text-align: center; text-decoration: underline; font-size: 23px;">MAKLUMAT PESERTA</h1>
								<?php

									$arahanSQL2 = "Select * from peserta where idPeserta = '$idPeserta';";
									$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);
									$data2 = mysqli_fetch_array($runSQL2);

									$arahanSQL3 = "Select * from markah inner join peserta on markah.idPeserta = peserta.idPeserta where peserta.idPeserta = '$idPeserta' AND idJenis = 'IT01';";
									$runSQL3 = mysqli_query($capaiDB, $arahanSQL3);
									$data3 = mysqli_fetch_array($runSQL3);

									$arahanSQL4 = "Select * from markah inner join peserta on markah.idPeserta = peserta.idPeserta where peserta.idPeserta = '$idPeserta' AND idJenis = 'IT02';";
									$runSQL4 = mysqli_query($capaiDB, $arahanSQL4);
									$data4 = mysqli_fetch_array($runSQL4);

									$arahanSQL5 = "Select * from pemenang inner join peserta on pemenang.idPeserta = peserta.idPeserta where peserta.idPeserta = '$idPeserta';";
									$runSQL5 = mysqli_query($capaiDB, $arahanSQL5);
									$data5 = mysqli_fetch_array($runSQL5);

									if (!empty($data2['nama_Peserta'])){ ?>
										<p><b>NAMA :</b><?php  echo " ".$data2['nama_Peserta']; ?></p>
										<p><b>No.KP :</b><?php  echo " ".$data2['kad_KPpeserta']; ?></p>
										<p><b>E-MEL :</b><?php  echo " ".$data2['emel_Peserta']; ?></p>
									<?php }else{ ?>
										<p><b>NAMA :<p>
										<p><b>No.KP :<p>
										<p><b>E-MEL :<p>
									<?php }

									if (!empty($data3['markah']) && !empty($data4['markah'])){
										$jumMarkah = $data3['markah'] + $data4['markah'];?>
										<p><b>KEPUTUSAN : </b><?php  echo " ".$jumMarkah."%"; ?></p>
									<?php }else{ ?>
										<p><b>KEPUTUSAN : </p>
									<?php }

									if (!empty($data5['idPeserta'])){ ?>
										<p><b>Pangkat : </b><?php  echo " ".$data5['Pangkat']; ?></p>
									<?php }else{ ?>
										<p><b>Pangkat : </p>
									<?php }
								 ?>

						</div>
					</div>

<?php			}
		}
	} ?>
