
<form method="POST">
	<h2 style="text-align: center;">MEREKOD KEPUTUSAN PESERTA</h2>

	<div class="borderMaklumatPeserta">

	<label>PILIH PESERTA:</label>
	<select name="nama" style="font-size: 15px;">
		<option value="none">------------------------------------------------------ PILIH PESERTA ------------------------------------------------------</option> 
		<?php 
			include 'database.php';
			$arahanSQL = "select * from peserta";
 			$arahanRUN = mysqli_query($capaiDB,$arahanSQL);
 			while($data = mysqli_fetch_array($arahanRUN))
 				{
		?>
		<option value="<?php echo $data['idPeserta']; ?> "><?php echo $data['nama_Peserta']; }?></option> 
	</select>

	<p><b>MARKAH (100%)</b></p>
	<label>&emsp;&emsp;KREATIVITI: </label>
	<input type="number" name="kreativiti" size="10" placeholder="XX" min="0" max="50"  title="SILA MASUKKAN NOMBOR (MAX = 50)" autofocus>

	<br>
	<label>&emsp;&emsp;KEGUNAAN:</label>
	<input type="number" name="kegunaan" size="10" placeholder="XX" min="0" max="50"  title="SILA MASUKKAN NOMBOR (MAX = 50)">

	<input type="submit" class="MaklumatPesertaAdjust2button" name="process" value="PROCESS">

	</div>

</form>