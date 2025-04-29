			<?php  
		if ($name1 != "none1" && $pangkat1 != "tak1"){
			if ($pangkat1 == 'PERTAMA'){
				if (mysqli_num_rows($runSQL44) == 0){
					$arahanSQL2 = "Update pemenang set Pangkat = '$pangkat1' where idPeserta = '$name1';";
					$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);

					if ($runSQL2){
						echo "Data berjaya dikemaskini.";
						echo "<br><hr><br>";
						echo "Ingin masukkan sekali lagi?"; ?>
						<button onclick="masukSekali2()" style=" float: right; font-size: 18px; font-weight: bold;">GO</button>
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
			}elseif($pangkat1 == 'KEDUA'){
				if (mysqli_num_rows($runSQL55) == 0){
					$arahanSQL2 = "Update pemenang set Pangkat = '$pangkat1' where idPeserta = '$name1';";
					$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);

					if ($runSQL2){
						echo "Data berjaya dikemaskini.";
						echo "<br><hr><br>";
						echo "Ingin masukkan sekali lagi?"; ?>
						<button onclick="masukSekali2()" style=" float: right; font-size: 18px; font-weight: bold;">GO</button>
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
			}elseif($pangkat1 == 'KETIGA'){
				if (mysqli_num_rows($runSQL66) == 0){
					$arahanSQL2 = "Update pemenang set Pangkat = '$pangkat1' where idPeserta = '$name1';";
					$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);

					if ($runSQL2){
						echo "Data berjaya dikemaskini.";
						echo "<br><hr><br>";
						echo "Ingin masukkan sekali lagi?"; ?>
						<button onclick="masukSekali2()" style=" float: right; font-size: 18px; font-weight: bold;">GO</button>
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
					$arahanSQL2 = "Update pemenang set Pangkat = '$pangkat1' where idPeserta = '$name1';";
					$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);

					if ($runSQL2){
						echo "Data berjaya dikemaskini.";
						echo "<br><hr><br>";
						echo "Ingin masukkan sekali lagi?"; ?>
						<button onclick="masukSekali2()" style=" float: right; font-size: 18px; font-weight: bold;">GO</button>
					<?php }else{
						echo "Data gagal dikemaskini.";
						echo "<br><hr><br>";
						echo "Cuba lagi?"; ?>
						<button onclick="history.back()" style=" float: right; font-size: 18px; font-weight: bold;">GO</button>						
					<?php }
			  }
		}else{
			echo "Data gagal dikemaskini.";
			echo "<br><hr><br>";
			echo "Cuba lagi?"; ?>
			<button onclick="history.back()" style=" float: right; font-size: 18px; font-weight: bold;">GO</button>				
		<?php } ?>
