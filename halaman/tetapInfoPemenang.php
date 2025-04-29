<?php 
	if (empty($_POST['submit'])) {
 ?>

<form method="POST">

	<p style="text-decoration: underline; font-size: 25px;"><b>Tempat</b></p>
	<label><b>NAMA:</b></label>
	<select name="name1">
		<option value="none1">------ PILIH &nbsp; NAMA &nbsp; PESERTA -----</option>
		<?php 
		include 'database.php';
		$arahanSQL = "select * from peserta";
 		$arahanRUN = mysqli_query($capaiDB,$arahanSQL);
 		while($data = mysqli_fetch_array($arahanRUN))
 			{
	?>
	<option value="<?php echo $data['idPeserta']; ?> "><?php echo $data['nama_Peserta']; }?></option> 
	</select>&emsp;
	<label><b>PANGKAT:</b></label>
	<select name="pangkat1">
		<option value="tak1">------ PILIH &nbsp; PANGKAT -----</option>
		<option value="PERTAMA">PERTAMA</option>
		<option value="KEDUA">KEDUA</option>
		<option value="KETIGA">KETIGA</option>
		<option value="TIADA">TIADA</option>
	</select>

	<input style="float: right; margin-right: 15px; font-size: 18px; font-weight: bold;" type="submit" name="submit" value="TETAP">
	 
</form>

<?php 
	}else{

		include 'database.php';
		$name1 = $_POST['name1'];

		$pangkat1 = $_POST['pangkat1'];

		$_SESSION['nama1'] = $_POST['name1'];

		$_SESSION['pangkat1'] = $_POST['pangkat1'];

		$arahanSQL = "select * from pemenang inner join peserta on pemenang.idPeserta = peserta.idPeserta where pemenang.idPeserta = '$name1';";
		$checkREKODunik = mysqli_query($capaiDB, $arahanSQL);

		$arahanSQL44 = "select * from pemenang where Pangkat = 'PERTAMA';";
		$runSQL44 = mysqli_query($capaiDB, $arahanSQL44);

		$arahanSQL55 = "select * from pemenang where Pangkat = 'KEDUA';";
		$runSQL55 = mysqli_query($capaiDB, $arahanSQL55);

		$arahanSQL66 = "select * from pemenang where Pangkat = 'KETIGA';";
		$runSQL66 = mysqli_query($capaiDB, $arahanSQL66);

		$arahanSQL77 = "select * from pemenang where idPeserta = '$name1' AND Pangkat = 'TIADA';";
		$runSQL77 = mysqli_query($capaiDB, $arahanSQL77);


		if(mysqli_num_rows($checkREKODunik) == 1){
			include './halaman/updatePemenang.php';
		}else{
			 include './halaman/insertPemenang.php';
		}
	}

 ?>