<!DOCTYPE html>
<html>
<head>
	<title>Halaman Maklumat Pemenang && Peserta</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./javascript/function.js"></script>

	<?php session_start(); ?>
</head>
<body class="body">	

	<header class="header3">
		<div class="backButton2">
			<label>Ingin Kembali ?<label>
			<button onclick="kembaliAdmin()" style="font-size: 18px;">Kembali</button>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<label>Ingin Keluar ?<label>
			<button onclick="keluar()" style="font-size: 18px;">Keluar</button>
		</div>

		<div class="headerWORD5">
			<div class="img">
				<img src="./gambar/Robotic.png">
			</div>
			<h1 style="margin-right: 10px;">Halaman Tetap Pemenang <br>& Info Peserta</h1>
		</div> 

		<article class="content2b">
			<?php include "./halaman/TukarSistem.php"; ?>
		</article>

		<article class="content2">
			<h2>Pertandingan Mencipta Robotik SMK Seri Kembangan 2022</h2>
		</article>

	</header>


	<div class="borderContent8">
		<div class="BorderInfoPemenang">
			<h2 style="text-align: center;">INFO PEMENANG</h2>
			<div class="MaklumatTetapPemenang">
				<?php include './halaman/tetapInfoPemenang.php'; ?>
			</div>
		</div>

		<div class="BorderContentInsertRobot"> 
			<h3 style="text-align: center;">INFO ROBOT PESERTA</h3>
			<div class="MaklumatTetapRobot">
				<?php include './halaman/tetapRobot.php'; ?>	
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