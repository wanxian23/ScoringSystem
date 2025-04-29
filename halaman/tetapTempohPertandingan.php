
<?php 
	if(empty($_POST['tetap1'])){
 ?>

	<form action="" method="POST">
		<label><b>TARIKH & MASA:</b></label><br><br>
		<input type="datetime-local" name="input1">

		<input style="float: right;  height: 30px; width: 100px; font-weight: bold;" type="submit" name="tetap1" value="TETAP">
	</form> 

<?php 
	}else{
		include 'database.php';

		$tarikhmasa = $_POST['input1'];

		$arahanSQL = "Select * from tetapan where idTetapan = 'T01';";
		$runSQL = mysqli_query($capaiDB, $arahanSQL);
		$data = mysqli_fetch_array($runSQL);

		if (empty($data['tamat_Pengadil']) && empty($data['tamat_Daftar'])) {
 			$arahanSQL1 = "Update tetapan Set tamat_Daftar = '$tarikhmasa', tamat_Pengadil = '$tarikhmasa' where idTetapan = 'T01';";
 			$runSQL1 = mysqli_query($capaiDB, $arahanSQL1);

 			if($runSQL1){ ?>
 				<div class="outputDataArahan2">
   			   	 	<?php echo "Data berjaya ditambah."; ?>
   					<br><br><hr>
   					<p>Kembali ke halaman Maklumat Pertandingan ??</p>  
   					<a href="tetapInfoPertandingan.php"><button>KEMBALI</button></a>
                </div>
 				<?php }else{ ?>
                    <div class="outputDataArahan2">
 					  <?php echo "Data gagal ditambah."; ?>
   					    <br><br><hr>
   					    <p>Cuba lagi ??</p>  
   					    <button onclick="history.back()">KEMBALI</button>
   					</div>
 			<?php }  
 		}else{
 			$arahanSQL2 = "Update tetapan Set tamat_Daftar = '$tarikhmasa', tamat_Pengadil = '$tarikhmasa' where idTetapan = 'T01';";
 			$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);

 			if($runSQL2){ ?>
                <div class="outputDataArahan2">
   				    <?php echo "Data berjaya ditambah."; ?>
   				    <br><br><hr>
   				    <p>Kembali ke halaman Maklumat Pertandingan ??</p>  
   				    <a href="tetapInfoPertandingan.php"><button>KEMBALI</button></a>
                </div>
 			<?php }else{ ?>
                <div class="outputDataArahan2">
 				   <?php echo "Data gagal ditambah."; ?>
 				   <br><br><hr>
   				   <p>Cuba lagi ??</p>  
   				   <button onclick="history.back()">KEMBALI</button>
                </div>
 			<?php } 
 		}



	}
 ?>