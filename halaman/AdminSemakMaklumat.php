<?php  if(empty($_GET['semak'])){ ?>

<form method="GET">
<h2 style="text-align: center;">MEMERIKSA MAKLUMAT</h2>


<label>&emsp;</label> 
<label>PILIH IDENTITI:</label>
<select name="identiti" style="font-size: 15px;">
	<option value="none">--------------------------------------- PILIH PESERTA ---------------------------------------</option>
	<option value="peserta">Peserta</option>  
	<option value="pengadil">Pengadil</option> 
</select>
<label>&emsp;</label>
<br><br>

<label>&emsp;</label> 
<label>MASUKKAN ID:</label>
<input type="text" name="ID" size="50" placeholder="XXXXXX" autofocus>


<input type="submit" name="semak" value="SEMAK" style="font-size: 15px; width: 100px; margin-left: 20px;">
</form>

<div class="borderMaklumat">
</div>

<?php 
	}else{

		include "./halaman/AdminSemakMaklumatFORM.php";

		$identiti = $_GET['identiti'];
		$IDpengadil = $_GET['ID'];
		$IDpeserta = $_GET['ID'];

		$_SESSION['idpesertaDelete'] = $_GET['ID'];
		$_SESSION['idpengadilDelete'] = $_GET['ID'];

		if (!empty($_GET['ID'])){
			if ($identiti == 'pengadil'){
				include "database.php";

				$arahanSQL = "Select * from pengadil where idPengadil = '$IDpengadil';";
				$runSQL = mysqli_query($capaiDB, $arahanSQL);
				$data = mysqli_fetch_array($runSQL); 


				if (!empty($data1['idPengadil'])){ ?>
					<div class="borderMaklumat">
						<h2 style="text-align: center;">MAKLUMAT PENGADIL</h2>

						<div class="AdminSemakMaklumatPengadil">
							<?php include "./halaman/AdminMaklumatPengadil.php"; ?>
						</div>	

					</div>
			<?php   }else{ ?>
						<script type="text/javascript">
							tiadaData();
						</script>
			<?php	}


			}else if ($identiti == 'peserta'){
				include "database.php";

				$arahanSQL1 = "Select * from peserta where idPeserta = '$IDpeserta';";
				$runSQL1 = mysqli_query($capaiDB, $arahanSQL1);
				$data1 = mysqli_fetch_array($runSQL1); ?>

			<?php if (!empty($data1['idPeserta'])){ ?>
				<div class="borderMaklumat">
					<h2 style="text-align: center;">MAKLUMAT PESERTA</h2>

					<div class="AdminSemakMaklumatPeserta">
						<?php include "./halaman/AdminMaklumatPeserta.php"; ?>
					
					<a href="cetakMaklumat.php?id=<?php echo $data1['idPeserta'] ?>"><button class="MaklumatPesertaAdjust3button" onclick="return alert('Sedang Lompat Ke Halaman Laporan Peserta...');">CETAK PESERTA</button></a><br><br>
					<a href="deleteData.php?id=<?php echo $data1['idPeserta'] ?>"><button class="MaklumatPesertaAdjust4button" onclick="return confirm('Ingin Padam Rekod Peserta Ini ?')">DELETE PESERTA</button></a>		
					
					</div>
					<!-- <a href="deleteData.php?id= echo $data1['idPeserta']" is used to connect to other file so that this button can function as a delete button -->

					<!-- return confirm is used double confirm that u wanna delete the data -->

				</div>
			<?php   }else{ ?>
						<script type="text/javascript">
							tiadaData();
						</script>
			<?php	}

			}elseif($identiti == 'none'){ ?>
				<script type="text/javascript">
					gagalSemakMaklumat();
				</script>
			<?php }
		}else{ ?>
			<script type="text/javascript">
				gagalSemakMaklumat();
			</script>
<?php	
		}
	} 
?>