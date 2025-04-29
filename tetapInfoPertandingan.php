<!DOCTYPE html>
<html>
<head>
	<title>Halaman Maklumat Pertandingan</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./javascript/function.js"></script>

</head>
<body class="body">	

	<header class="header2">



		<div class="backButton2">
			<label>Ingin Kembali ?<label>
			<button onclick="kembaliAdmin()" style="font-size: 18px;">Kembali</button>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<label>Ingin Keluar ?<label>
			<button onclick="keluar()" style="font-size: 18px;">Keluar</button>
		</div>

		<div class="headerWORD4">
				<div class="img">
			<img src="./gambar/Robotic.png">
		</div>
			<h1 style="margin-right: 10px; margin-top: 60px;">Halaman Maklumat Pertandingan</h1>
		</div> 

		<article class="content2b">
			<?php include "./halaman/TukarSistem.php"; ?>
		</article>

		<article class="content2">
			<h2>Pertandingan Mencipta Robotik SMK Seri Kembangan 2022</h2>
		</article>

	</header>


	<div class="borderContent10">

		<div class="BorderTetapPeraturan">
			<h2 style="text-align: center;">TETAP PERATURAN PERTANDINGAN</h2>
			<?php include './halaman/tetapPeraturanPertandingan.php' ?>
		</div>

		<div class="borderTetapTempoh">
			<h2 style="text-align: center;">TETAP TEMPOH PERTANDINGAN</h2><br>
			<div class="contentTetapTempoh">
				<?php include './halaman/tetapTempohPertandingan.php' ?>
			</div>
		</div>

		<div class="borderTetapTempoh">
			<h2 style="text-align: center;">IMPORT DATA FILE <br>(PESERTA/ PENGADIL)</h2><br>
			<div class="contentTetapTempoh">
				<?php include './halaman/importFile.php' ?>
			</div>
		</div>

	</div>

	<div class="footer">
		<div class="footerCONTENT">
			<?php include "./halaman/footerCONTENT.php" ?>
		</div>

	</div>

	
</body>
</html> 