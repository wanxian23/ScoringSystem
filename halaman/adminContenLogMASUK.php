<?php 
	if (empty( $_POST['submit'])){
 ?>
<form action="" method="POST">
	<label for="fname">ID: </label>
			<input type="text" name="idAdmin" size="4" placeholder="xxxx" required autofocus>
			<br><br> 		
			
			<!-- placeholder means put background text for the frame -->
			<!-- Required means this frame cannot be null -->
			<!-- Autofocus means that when the page load, the type key will appear at the frame -->
	<label for="fname">Kata Laluan: </label>
			<input type="password" name="password" size="30" required>
			<br><br><br> 
	<div class="buttonLogMasuk">
		<input type="reset" value="PADAM">
		<input type="submit" name="submit" value="LOG MASUK" required>
	</div>
	<br><br>
</form>

<?php 

	}else{
		    include "database.php";
		    $ID = $_POST['idAdmin'];
		    $Password = $_POST['password'];

		    $arahanSQL = "Select * from admin where idAdmin = '$ID' AND passwordAdmin = '$Password';";
 		    $runSQL = mysqli_query($capaiDB, $arahanSQL);

 		    $data = mysqli_fetch_array($runSQL);
 		    $nama = $data['nama_Admin'];

			if (!empty($nama)){ ?>
				<script type="text/javascript">
					alert("Log masuk berjaya! Sedang lompat ke Halaman Admin.");
					window.location = 'HalamanAdmin.php';
				</script>
	<?php 	}else{ ?>
				<script type="text/javascript">
					window.alert("Log masuk gagal. Sila masuk sekali lagi.");
					window.location = 'adminLOGMASUK.php';
				</script>
	<?php		}
	}
 ?> 
