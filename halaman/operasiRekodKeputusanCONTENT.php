
<?php 
	if (mysqli_num_rows($checkREKODunik) > 0 ){
		if (empty($_POST['kreativiti']) && !empty($_POST['kegunaan'])){
			
			$arahanSQL2 = "Update markah Set markah = '$markahKegunaan' where idPeserta = '$NAMA' AND idJenis = 'IT02';";
			$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);

			if($runSQL2){
				echo "Data berjaya dikemaskini.";
				echo "<br><hr><br>";
				echo "Ingin masuk sekali lagi?"; ?>
				<button onclick="masukSekali()" style="float: right; font-size: 18px; font-weight: bold;">GO</button>
		<?php }else{ 
				echo "Data gagal dikemaskini.";
				echo "<br><hr><br>";
				echo "Cuba lagi?"; ?>
				<button onclick="history.back()" style=" float: right; font-size: 18px; font-weight: bold;">GO</button>
		<?php }

		}elseif (empty($_POST['kegunaan']) && !empty($_POST['kreativiti'])){
			$arahanSQL3 = "Update markah Set markah = '$markahKreativiti' where idPeserta = '$NAMA' AND idJenis = 'IT01';";
			$runSQL3 = mysqli_query($capaiDB, $arahanSQL3);

			if($runSQL3){
				echo "Data berjaya dikemaskini.";
				echo "<br><hr><br>";
				echo "Ingin masuk sekali lagi?"; ?>
				<button onclick="masukSekali()" style="float: right; font-size: 18px; font-weight: bold;">GO</button>
		<?php }else{ 
				echo "Data gagal dikemaskini.";
				echo "<br><hr><br>";
				echo "Cuba lagi?"; ?>
				<button onclick="history.back()" style=" float: right; font-size: 18px; font-weight: bold;">GO</button>
		<?php }

		}elseif (!empty($_POST['kreativiti']) && !empty($_POST['kegunaan'])){
			$arahanSQL4 = "Update markah Set markah = '$markahKreativiti' where idPeserta = '$NAMA' AND idJenis = 'IT01';";
			$arahanSQL7 = "Update markah Set markah = '$markahKegunaan' where idPeserta = '$NAMA' AND idJenis = 'IT02';";
			$runSQL4 = mysqli_query($capaiDB, $arahanSQL4);
			$runSQL7 = mysqli_query($capaiDB, $arahanSQL7);

			if($runSQL4){
				echo "Data berjaya dikemaskini.";
				echo "<br><hr><br>";
				echo "Ingin masuk sekali lagi?"; ?>
				<button onclick="masukSekali()" style="float: right; font-size: 18px; font-weight: bold;">GO</button>
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

<?php   } 

	}else{
		$arahanSQL5 = "INSERT INTO markah(idPeserta, markah, idJenis) values ('$NAMA','$markahKreativiti','IT01');";
		$arahanSQL6 = "INSERT INTO markah(idPeserta, markah, idJenis) values ('$NAMA','$markahKegunaan','IT02');";
		$runSQL5 = mysqli_query($capaiDB, $arahanSQL5);
		$runSQL6 = mysqli_query($capaiDB, $arahanSQL6);

		if($runSQL5){
			echo "Data berjaya dimasukkan.";
			echo "<br><hr><br>";
			echo "Ingin masukkan sekali lagi?"; ?>
			<button onclick="masukSekali()" style=" float: right; font-size: 18px; font-weight: bold;">GO</button>
	<?php }else{ 
			echo "Data gagal dimasukkan.";
			echo "<br><hr><br>";
			echo "Cuba lagi?"; ?>
			<button onclick="history.back()" style=" float: right; font-size: 18px; font-weight: bold;">GO</button>
		<?php }

	}

 ?>