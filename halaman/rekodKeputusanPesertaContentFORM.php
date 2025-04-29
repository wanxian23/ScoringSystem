

<form action="" method="POST">
	<h1 style="text-align: center; text-decoration: underline; font-size: 23px;">MAKLUMAT PESERTA</h1>

	<p><b>NAMA :</b><?php  echo " ".$data['nama_Peserta']; ?><p>
	<p><b>MARKAH (100%)</b></p>
	<label>&emsp;&emsp;KREATIVITI: </label>
	<input type="number" name="kreativiti" size="10" placeholder="XX" min="0" max="50"  title="SILA MASUKKAN NOMBOR (MAX = 50)" autofocus>

	<br>
	<label>&emsp;&emsp;KEGUNAAN:</label>
	<input type="number" name="kegunaan" size="10" placeholder="XX" min="0" max="50"  title="SILA MASUKKAN NOMBOR (MAX = 50)">

	<input type="submit" class="MaklumatPesertaAdjust2button" name="submit" value="PROCESS">
</form>
