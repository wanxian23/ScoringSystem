
<form method="POST">
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

<input type="submit" name="semak" value="SEMAK" style="font-size: 15px; width: 100px;">
</form>
