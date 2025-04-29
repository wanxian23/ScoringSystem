<!DOCTYPE html>
<html>
<head>
	<title>Halaman Main</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./javascript/function.js"></script>

	<?php session_start();    // In order to connect variables from other php file
							  // Before connect u should put this session_start();
							  // So that the variables can connect
							  /* I put it at <head> cuz I have to access all the file include
							   in this "HalamanPeserta.php" file? */ ?> 
</head>
<body class="body">	
	<header class="header">
			<div class="headerWORD">
				<div class="img">
					<img src="./gambar/Robotic.png">
				</div>
				<h1>ENORMOUS ROBOT <br>GENERATIONS</h1>
			</div> 
	</header>

	<div class="borderContent">
		
		<article class="content2b">
			<?php include "./halaman/TukarSistem.php"; ?>
		</article>

		<article class="content">
			<h2>Pertandingan Mencipta Robotik SMK Seri Kembangan 2022</h2>
			<p>Selamat sejahtera semua!<br> Semua peserta dan pengadil mesti daftar akaun anda!</p>
		</article>

		<div class="borderScrollMain">

			<div class="borderScroll">

				<h5>PERATURAN PERTANDINGAN</h5>

				<div class="tetapanScroll">
					<div class="contentScoll">
						<?php include "./halaman/peraturanPERTANDINGAN.php" ?>
					</div>
				</div>

			</div>
		</div>


		<div class="logMasuk">    <!--  This two combined to make the borders combined :) -->
			<p><strong>SILA LOG MASUK</strong></p><hr>
  			<div class="contentLogMasuk"> 
				<?php include "./halaman/logMASUK.php"; ?>
				<div class="contentLogMasuk2">
					<form action="daftarAKAUN.php">
					<label for="fname">Tiada Akaun ? </label>
					<input type="submit" name="akaun" value="DAFTAR AKAUN">
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="footerCONTENT">
			<?php include "./halaman/footerCONTENT.php" ?>
		</div>

		<div class="adminLOGMASUK">
			<p style="color: red;">ADMIN ?</p>
			<a href="adminLOGMASUK.php">
				<button>LOG MASUK</button>
			</a>
		</div>
	</div>
</body>
</html> 