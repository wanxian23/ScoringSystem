<?php 
	if (empty($_POST['submit'])){
 ?>
<form method="post" action="">
	<label for="fname">ID: </label>
	<input type="text" name="id" size="6" placeholder="XXXXXX" pattern="[A-Za-z0-9]{6}" required autofocus title="SILA TAIPKAN ID IKUT FORMAT 'PSXXXX'"><br><br>  

	<label for="fname">NAMA: </label>
	<input type="text" name="nama" size="50" placeholder="NAME" required><br><br>  
	<!-- placeholder means put background text for the frame -->
	<!-- Required means this frame cannot be null -->
	<!-- Autofocus means that when the page load, the type key will appear at the frame -->

	<label for="fname">No. Kad Pengenalan: </label>
	<input type="text" name="noKP" size="20" placeholder="XXXXXXXXXXXX" pattern="[0-9]{12}" required title="TAIPKAN KP TANPA '-' IAITU DALAM 12 DIGIT"><br><br> 

	<label for="fname">EMEL: </label>
	<input type="text" name="emel" size="20" placeholder="xxx@xxx.com"><br><br>  

	<label for="fname">Identiti: </label>
	<select name="identiti">
		<option value="takdevalue">-------PILIH IDENTITI-------</option>
		<option value="Peserta">Peserta</option>  <!-- for option, we use value to represent it instead of name -->
		<option value="Pengadil">Pengadil</option>
	</select>
	<br><br>

	<div class="buttonLogMasuk">
		<input type="reset" value="PADAM">
		<input type="submit" name="submit" value="DAFTAR" required>
	</div>

</form>
<?php 
	}else{
		    include "database.php";
		    $ID = $_POST['id'];
		    $NAMA = $_POST['nama'];
		    $KadKP = $_POST['noKP'];
		    $EMEL = $_POST['emel'];
		    $Identiti = $_POST['identiti'];

		    // Arahan untuk masukkan data ke dalam jadual peserta ataupun pengadil

		    if (isset($_POST['identiti'])){   // isset means that the data in identiti is not null
		    	if ($Identiti == "Peserta"){
		    		include "database.php";
		    		// LIMIT 1 USE TO COUNT WHETHER THE ROW OF THE idPeserta And kad_KPpeserta only are 1 or not
		    		// If = 1, output = 1
		    		// If != 1 (More than 1), output = 0
		    		$arahanSQL = "Select * from peserta where idPeserta = '$ID' OR kad_KPpeserta = '$KadKP'";
		    		$checkREKODunik = mysqli_query($capaiDB, $arahanSQL);
		    			// If the number of row of $checkREKODunik is > 0, then gagal la
		    			if (mysqli_num_rows($checkREKODunik) > 0){ ?>
		    				<script type="text/javascript">
		    					alert('Data Gagal Ditambah.\nSebab Data Sudah Wujud Dalam Pangkalan Data.');
		    					var textconfirm = 'Cuba Lagi?';
		    					if (confirm(textconfirm) == true){
		    						history.back();
		    					}else{
		    						window.location = 'index.php';
		    					}
		    				</script>
		    		<?php	}else{
		    				include "database.php";
							$arahanSQL1 = "INSERT INTO peserta(idPeserta, nama_Peserta, kad_KPpeserta, emel_Peserta)
		  				         values ('$ID','$NAMA','$KadKP','$EMEL')";
 		 			    	$runSQL1 = mysqli_query($capaiDB, $arahanSQL1);
 		 			    		if(!$runSQL1){ ?>
		    						<script type="text/javascript">
		    							alert('Data Gagal Ditambah.');
		    							var textconfirm = 'Cuba Lagi?';
		    						if (confirm(textconfirm) == true){
		    							history.back();
		    						}else{
		    							window.location = 'index.php';
		    						}
		    					</script>
  			 		  	<?php   }else{ ?>
		    					<script type="text/javascript">
		    							alert('Data Berjaya Ditambah.');
		    							window.location = 'index.php';
		    					</script>
 			   			<?php   }
 			   				}		
		    	}elseif ($Identiti == "Pengadil"){
		    		include "database.php";
		    		$arahanSQL3 = "Select * from pengadil where idPengadil = '$ID' OR kad_KPpengadil = '$KadKP';";
		    		$checkREKODunik2 = mysqli_query($capaiDB, $arahanSQL3);
						if (mysqli_num_rows($checkREKODunik2) > 0){ ?>
		    				<script type="text/javascript">
		    					alert('Data Gagal Ditambah.\nSebab Data Sudah Wujud Dalam Pangkalan Data.');
		    					var textconfirm = 'Cuba Lagi?';
		    					if (confirm(textconfirm) == true){
		    						history.back();
		    					}else{
		    						window.location = 'index.php';
		    					}
		    				</script>
		    		<?php   }else{
		    				/* $arahanSQL2 = "INSERT INTO pengadil(idPengadil, nama_Pengadil, kad_KPpengadil, emel_Pengadil)
		  				         values ('$ID','$NAMA','$KadKP','$EMEL')"; 
 		 	   		  	  	$runSQL2 = mysqli_query($capaiDB, $arahanSQL2); */ ?>
  			   					
  			   					<script type="text/javascript">
  			   						fullyResgistered();   					
  			   					</script>
	    					<?php }
		   		}elseif ($Identiti == "takdevalue"){ ?>
		   			<script type="text/javascript">
		   				gagalDaftarMaklumat();
		   			</script>
		   	<?php }
		}
	} ?> 







							<!-- If i want to tambah balik data this code will be copy paste into line 112 to replace
							 itu js fullyRegistered();  -->

		 	   		   		<?php /* if(!$runSQL2){
  				    			echo "Data gagal ditambah.";  ?>
  				    			<!-- <br><br><hr>
  				    			<p> "Cuba lagi ??" <p><br><br> 
  				    			<button onclick="history.back()">KEMBALI</button> -->
  			   		 		 <?php  }else{  


   								echo "Data berjaya ditambah."; ?>
   								<!--<br><br><hr>
   								<p>Kembali ke halaman Log Masuk ??</p> 
   					            <a href="index.php"><button>KEMBALI</button></a> -->
 			   					} */ ?>
