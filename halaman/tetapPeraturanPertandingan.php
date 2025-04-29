<?php 
	if (empty($_POST['tetap'])){
 ?> 

 <form action="" method="POST">
	<textarea style="margin-left: 30px; resize: none;" name="input" cols="83" rows="18" autofocus></textarea><br><br>
 	<input style="float: right; margin-right: 30px; height: 30px; width: 100px; font-weight: bold;" type="submit" name="tetap" value="TETAP"><br><br><br>
 </form>

 <?php 
 	}else{

 		include 'database.php';

 		$maklumat = $_POST['input'];

 		$arahanSQL = "Select * from tetapan where idTetapan = 'T01' AND maklumat_Pertandingan = '$maklumat';";
 		$runSQL = mysqli_query($capaiDB, $arahanSQL);
 		$data = mysqli_fetch_array($runSQL);

 		if (empty($data['maklumat_Pertandingan'])) {
 			$arahanSQL1 = "Update tetapan Set maklumat_Pertandingan = '$maklumat' where idTetapan = 'T01';";
 			$runSQL1 = mysqli_query($capaiDB, $arahanSQL1);

 			if($runSQL1){ ?>
 				<div class="outputDataArahan">
   			   	 	<?php echo "Data berjaya ditambah."; ?>
   					<br><br><hr>
   					<p>Kembali ke halaman Maklumat Pertandingan ??</p>  
   					<a href="tetapInfoPertandingan.php"><button>KEMBALI</button></a>
                </div>
 				<?php }else{ ?>
                    <div class="outputDataArahan">
 					  <?php echo "Data gagal ditambah."; ?>
   					    <br><br><hr>
   					    <p>Cuba lagi ??</p>  
   					    <button onclick="history.back()">KEMBALI</button>
   					</div>
 			<?php }  
 		}elseif(!empty($data['maklumat_Pertandingan'])){
 			$arahanSQL2 = "Update tetapan Set maklumat_Pertandingan = '$maklumat' where idTetapan = 'T01';";
 			$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);

 			if($runSQL2){ ?>
                <div class="outputDataArahan">
   				    <?php echo "Data berjaya dikemaskini."; ?>
   				    <br><br><hr>
   				    <p>Kembali ke halaman Maklumat Pertandingan ??</p>  
   				    <a href="tetapInfoPertandingan.php"><button>KEMBALI</button></a>
                </div>
 			<?php }else{ ?>
                <div class="outputDataArahan">
 				   <?php echo "Data gagal dikemaskini."; ?>
 				   <br><br><hr>
   				   <p>Cuba lagi ??</p>  
   				   <button onclick="history.back()">KEMBALI</button>
                </div>
 			<?php } 
 		}else{ ?>
                <div class="outputDataArahan">
                   <?php echo "Data gagal dikemaskini."; ?>
                   <br><br><hr>
                   <p>Cuba lagi ??</p>  
                   <button onclick="history.back()">KEMBALI</button>
                </div>
    <?php }
 	}
  ?>