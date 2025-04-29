<?php 
	if(empty($_POST['importdata'])) {
 ?>
 	<form action="" method="POST" enctype="multipart/form-data">
 		<label for="fname"><b>IDENTITI: </b></label>
		<select name="identiti">
			<option value="none">------------ Pilih Identiti-------------</option>
			<option value="peserta">Peserta</option>
			<option value="pengadil">Pengadil</option>
		</select>
		<br><br>
 		<label><b> PILIH FILE YANG INGIN IMPORT:</b></label><br><br>
 		<input type="file" name="fail">

 		<input type="submit" name="importdata" style="float: right; height: 30px; width: 100px; font-weight: bold;">
 	</form>
 <?php 
	}else{

		include "./halaman/importFileForm.php";
		include 'database.php';

		$identiti = $_POST['identiti'];
		$faildata = $_FILES['fail']['tmp_name'];

	// Check whether the file that admin upload is null or not.
	// I mean he click submit, but havent upload any file.
	if (!empty($_FILES['fail']['tmp_name']) || is_uploaded_file($_FILES['fail']['tmp_name'])){
		
		if ($identiti == 'peserta'){

			//proses buka dan baca fail
			$bukafail=fopen($faildata,"r");
			$i=0;
			while(($medan = fgetcsv($bukafail,1000, ",")) !== FALSE){ //mula blok import
				
				// SQL Untuk Import Peserta
				$arahanSQL = "Select * from peserta where idPeserta = '$medan[0]' OR kad_KPpeserta = '$medan[3]';";
				$runSQL = mysqli_query($capaiDB, $arahanSQL);
				$data = mysqli_fetch_array($runSQL);

				if (empty($data['idPeserta'])){
					$i++;
					include 'database.php';

					$arahanSQL2 = "insert into peserta(idPeserta, nama_Peserta, emel_Peserta, kad_KPpeserta) 
					values ('".$medan[0]."','".$medan[1]."','".$medan[2]."','".$medan[3]."');";
					$arahanRUN2 = mysqli_query($capaiDB, $arahanSQL2);

					if($arahanRUN2){ ?>
						<script type="text/javascript">
							PesertaimportBerjaya();
						</script>
					<?php }else{ ?>
						<script type="text/javascript">
							PesertaimportGagal();
						</script>
					<?php }
				}else{ ?>
					<script type="text/javascript">
						PesertaimportGagal2();
					</script>
				<?php } 
			}
			fclose($bukafail); // Process untuk tamat read file

		}elseif($identiti == 'pengadil'){
			$bukafail=fopen($faildata,"r");
			$i=0;
			while(($medan = fgetcsv($bukafail,1000, ",")) !== FALSE){ //mula blok import

				// SQL Untuk Import Pengadil
				$arahanSQL3 = "Select * from pengadil where idPengadil = '$medan[0]' OR kad_KPpengadil = '$medan[3]';";
				$runSQL3 = mysqli_query($capaiDB, $arahanSQL3);
				$data3 = mysqli_fetch_array($runSQL3);

				if(empty($data3['idPengadil'])){
					$i++;
					include 'database.php';

					$arahanSQL2 = "insert into pengadil(idPengadil, nama_Pengadil, emel_Pengadil, kad_KPpengadil, idJenis) 
					values ('".$medan[0]."','".$medan[1]."','".$medan[2]."','".$medan[3]."','".$medan[4]."');";
					$arahanRUN2 = mysqli_query($capaiDB, $arahanSQL2);

					if($arahanRUN2){ ?>
						<script type="text/javascript">
							PengadilimportBerjaya();
						</script>
					<?php }else{ ?>
						<script type="text/javascript">
							PengadilimportGagal();
						</script>
					<?php }
					}else{ ?>
						<script type="text/javascript">
							PengadilimportGagal2();
						</script>
					<?php }
				}
				fclose($bukafail);						
		}else{ ?>
			<script type="text/javascript">
				importGagalIdentiti();
			</script>
	<?php }
	}else{ ?>
		<script type="text/javascript">
			importGagal();
		</script>
	<?php }
}