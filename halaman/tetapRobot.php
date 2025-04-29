<?php  
 if (empty($_POST['submit1'])) {
?>

<form method="POST">

	<label><b>NAMA:</b></label>
	<select name="nama">
		<option value="none">--- PILIH &nbsp; NAMA &nbsp; PESERTA ---</option>
		<?php 
		include 'database.php';
		$arahanSQL = "select * from peserta";
 		$arahanRUN = mysqli_query($capaiDB,$arahanSQL);
 		while($data = mysqli_fetch_array($arahanRUN))
 			{
		?>
		<option value=<?php echo $data['idPeserta']; ?> ><?php echo $data['nama_Peserta']; }?></option> 
	</select><br><br>

	<label><b>NAMA ROBOT&nbsp;:</b></label>
	<input type="text" name="robot" placeholder="NAMA ROBOT" autofocus><br><br>

	<input style="float: right; margin-right: 10px; font-weight: bold; font-size: 18px;" type="submit" name="submit1" value="SUBMIT">
	
</form>

<?php 
	}else{

		include "database.php";

		$nama = $_POST['nama'];
		$robot = $_POST['robot'];

		$arahanSQL = "Select * from robot inner join peserta on robot.idPeserta = peserta.idPeserta where robot.idPeserta = '$nama';";
		$arahanSQL6 = "Select * from robot where idPeserta = '$nama';";
		$checkREKODunik = mysqli_query($capaiDB, $arahanSQL);
		$runSQL6 = mysqli_query($capaiDB, $arahanSQL6);
		$data = mysqli_fetch_array($runSQL6);

		if (mysqli_num_rows($checkREKODunik) > 0){
			if($nama != 'none' && !empty($robot)){

				$idRobot = $data['idRobot'];

				$arahanSQL2 = "Update robot Set nama_Robot = '$robot' where idPeserta = '$nama';";
				$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);

				if ($runSQL2) {
					echo "Data berjaya dikemaskini.";
					echo "<br><hr><br>";
					echo "Ingin masuk sekali lagi?"; ?>
					<button onclick="masukSekali2()" style="float: right; font-size: 18px; font-weight: bold;">GO</button>
			<?php }else{
				echo "Data gagal dikemaskini.";
				echo "<br><hr><br>";
				echo "Cuba lagi?"; ?>
				<button onclick="history.back()" style=" float: right; font-size: 18px; font-weight: bold;">GO</button>
			<?php }

			}else{
				echo "Data gagal dikemaskini.";
				echo "<br><hr><br>";
				echo "Cuba lagi?"; ?>
				<button onclick="history.back()" style=" float: right; font-size: 18px; font-weight: bold;">GO</button>		
		<?php }

		}else{
			if($nama != 'none' && !empty($robot)){

				$arahanSQL3 = "Insert Into robot(nama_Robot, idPeserta) values ('$robot','$nama')";
				$runSQL3 = mysqli_query($capaiDB, $arahanSQL3);


				if ($runSQL3) {
					echo "Data berjaya ditambah.";
					echo "<br><hr><br>";
					echo "Ingin masuk sekali lagi?"; ?>
					<button onclick="masukSekali2()" style="float: right; font-size: 18px; font-weight: bold;">GO</button>
			<?php }else{
				echo "Data gagal ditambah.";
				echo "<br><hr><br>";
				echo "Cuba lagi?"; ?>
				<button onclick="history.back()" style=" float: right; font-size: 18px; font-weight: bold;">GO</button>
			<?php }

			}else{
				echo "Data gagal ditambah.";
				echo "<br><hr><br>";
				echo "Cuba lagi?"; ?>
				<button onclick="history.back()" style=" float: right; font-size: 18px; font-weight: bold;">GO</button>		
		<?php }			
		}
	}
 ?>