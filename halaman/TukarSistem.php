
<?php 	

if (empty($_POST['submit21'])){
 ?>

 <form method="POST" id="form2">
 	<label><b>PILIH WARNA-BELAKANG:</b></label>
 	<select name="warna" id="warna">
 		<option hidden value>------PILIH WARNA------</option>
 		<option value="WHITE" id="WHITE">DEFAULT: PUTIH</option>
 		<option value="BLACK" id="BLACK">HITAM</option>
 		<option value="RED" id="RED">MERAH</option>
 		<option value="YELLOW" id="YELLOW">KUNING</option>
 	</select>&emsp;
 	<input type="submit" name="submit21" value="SUBMIT" form="form2">
 </form>

<?php 	
	}else{
		include "./halaman/TukarSistemForm.php";

		$color = $_POST['warna'];

		if ($color == 'WHITE'){ ?>
			<script type="text/javascript">
				alert("Sedang Tukar Ke Warna Putih.");
				colourDEFAULT();
			</script>
		<?php }elseif ($color == 'BLACK') { ?>
			<script type="text/javascript">
				alert("Sedang Tukar Ke Warna Hitam.");
				colourBLACK();
			</script>	
		<?php }elseif ($color == 'RED') { ?>
			<script type="text/javascript">
				alert("Sedang Tukar Ke Warna Merah.");
				colourRED();
			</script>
		<?php }elseif ($color == 'YELLOW') { ?>
			<script type="text/javascript">
				alert("Sedang Tukar Ke Warna Kuning.");
				colourYELLOW();
			</script>
		<?php }else{ ?>
			<script type="text/javascript">
				alert("Sila Pilih Warna Betul-betul.");
			</script>			
		<?php }

	}
 ?>