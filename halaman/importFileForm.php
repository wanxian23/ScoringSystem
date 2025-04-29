 	<form action="" method="POST" enctype="multipart/form-data">
 		<label for="fname"><b>IDENTITI: </b></label>
		<select name="identiti">
			<option value="none">------------ Pilih Identiti-------------</option>
			<option value="peserta">Peserta</option>
			<option value="pengadil">Pengadil</option>
		</select>
		<br><br>
 		<label><b> PILIH FILE YANG INGIN IMPORT:</b></label><br><br>
 		<input type="file" name="fail">

 		<input type="submit" name="importdata" style="float: right; height: 30px; width: 100px; font-weight: bold;">
 	</form>