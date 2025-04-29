<?php  if(empty($_POST['process'])) { ?>
<form method="POST" action="">

	<label>PILIH PESERTA:</label>
	<select name="namaPeserta" style="font-size: 15px;">
		<option value="novalue">------------------------------------ PILIH PESERTA -----------------------------------</option> 
		<?php 
			include 'database.php';
			$arahanSQL = "select * from peserta";
 			$arahanRUN = mysqli_query($capaiDB,$arahanSQL);
 			while($data = mysqli_fetch_array($arahanRUN))
 				{
		?>
		<option value=<?php echo $data['idPeserta']; ?> ><?php echo $data['nama_Peserta']; }?></option> 
	</select>

	<p><b>MARKAH (100%)</b></p>
	<label>&emsp;&emsp;KREATIVITI: </label>
	<input type="number" name="kreativiti" size="10" placeholder="XX" min="0" max="50"  title="SILA MASUKKAN NOMBOR (MAX = 50)" autofocus>

	<br>
	<label>&emsp;&emsp;KEGUNAAN:</label>
	<input type="number" name="kegunaan" size="10" placeholder="XX" min="0" max="50"  title="SILA MASUKKAN NOMBOR (MAX = 50)">

	<input class="MaklumatPesertaAdjust2button" type="submit"  name="process" value="PROCESS">
</form>
<?php 
	}else{
		include "database.php";

		$NAMA = $_POST['namaPeserta'];	
		$markahKreativiti = $_POST['kreativiti'];
		$markahKegunaan = $_POST['kegunaan'];

		$arahanSQL = "Select * from markah inner join peserta on markah.idPeserta = peserta.idPeserta inner join jenis on markah.idJenis = jenis.idJenis where markah.idPeserta = '$NAMA' LIMIT 2;";
		$checkREKODunik = mysqli_query($capaiDB, $arahanSQL);
		$data = mysqli_fetch_array($checkREKODunik);

		if ($NAMA == 'novalue'){ ?>
			<script type="text/javascript">
				window.alert("Semak gagal. Sila pilih nama peserta betul-betul !!");
				window.location = 'rekodKeputusan.php';
			</script>
<?php
		}else{ 
			include "./halaman/operasiRekodKeputusanCONTENT.php"; 				 					
		} 
	} 

?>