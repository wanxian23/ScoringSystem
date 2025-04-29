<?php if (empty($_GET['submit'])) { //Get and Post just the same la lolllllll
	?>
<form method="GET">
	<label for="fname">No. Kad Pengenalan: </label>

	<input type="text" name="noKP" size="20" placeholder="XXXXXXXXXXXX" pattern="[0-9]{12}" required autofocus title="TAIPKAN KP TANPA '-' IAITU DALAM 12 DIGIT"><br><br>  
	<!-- placeholder means put background text for the frame -->
	<!-- Required means this frame cannot be null -->
	<!-- Autofocus means that when the page load, the type key will appear at the frame -->
	<!-- tittle means warning text -->

	<label for="fname">Identiti: </label>
	<select name="identiti">
		<option value="none">-------- Pilih Identiti---------</option>
		<option value="peserta">Peserta</option>
		<option value="pengadil">Pengadil</option>
	</select>
	<br><br>

	<div class="buttonLogMasuk">
		<input type="reset" value="PADAM">
		<input type="submit" name="submit" value="LOG MASUK">
	</div><br><br>

</form>

<?php 
	}else{
		include "database.php";

		$noKP1 = $_GET['noKP'];
		$noKP2 = $_GET['noKP'];
		$identiti = $_GET['identiti'];

		 // Use to connect to other php file in order to connect the variables from that file
  		$_SESSION['noKP1'] = $_GET['noKP'];
  		$_SESSION['noKP2'] = $_GET['noKP'];

		    if ($identiti == "peserta"){
		    	include "database.php";
		    	$arahanSQL1 = "Select * from peserta where kad_KPpeserta = '$noKP1';";
 				$runSQL1 = mysqli_query($capaiDB, $arahanSQL1);
 				$data1 = mysqli_fetch_array($runSQL1);
		    	if ($noKP1 == $data1['kad_KPpeserta']) { ?>
 		 			<script type="text/javascript">
						window.alert("Log masuk berjaya! Sedang lompat ke Halaman Peserta.");
						window.location = 'HalamanPeserta.php';
					</script>
				<?php 
					}else{ ?>
						<script type="text/javascript">
							gagalLogMasuk();
						</script>
				<?php	} ?>
<?php		}else if($identiti == "pengadil"){ 
				include "database.php";
				$arahanSQL2 = "Select * from pengadil where kad_KPpengadil = '$noKP2';";
 				$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);
 				$data2 = mysqli_fetch_array($runSQL2);
				if ($noKP2 == $data2['kad_KPpengadil']) { ?>
 		 			<script>
						window.alert("Log masuk berjaya! Sedang lompat ke Halaman Pengadil.");
						window.location = 'HalamanPengadil.php';
					</script>
				<?php 
					}else{ ?>
					<script type="text/javascript">
						gagalLogMasuk();
					</script>
<?php				}
			}else{ ?>
				<script type="text/javascript">
					gagalLogMasukIdentiti();
				</script>
	<?php	}
	}			
 ?>
