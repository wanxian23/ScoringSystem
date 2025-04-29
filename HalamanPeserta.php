<!DOCTYPE html>
<html>
<head>
	<title>Halaman Peserta</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./javascript/function.js"></script>

	<?php session_start(); ?> 
</head>
<body class="body">	
	<header class="header2">
		<div class="backButton">
			<label>Ingin Keluar ?<label>
			<button onclick="keluar()" style="font-size: 18px;">Keluar</button>
		</div>
		<div class="headerWORD4">
		<div class="img">
			<img src="./gambar/Robotic.png">
		</div>
			<h1 style="margin-right: 10px;">Halaman Peserta</h1>
		</div> 

		<article class="content2b">
			<?php include "./halaman/TukarSistem.php"; ?>
		</article>

		<article class="content2">
			<h2>Pertandingan Mencipta Robotik SMK Seri Kembangan 2022</h2>
		</article>
	</header>

	<div class="borderContent5">
		<div class="checkPemenangBUTTON">
			<div class="checkPemenangBUTTONcontent">		
				<label>Semak Pemenang ?<label>
				<button onclick="window.location = 'HalamanPemenang.php';" style="font-size: 18px; height: 30px">PEMENANG</button>&emsp;&emsp;
			</div>
		</div>
		<div class="gambarTunjuk1">
			<?php include "./halaman/maklumatPesertaGambar.php" ?>
		</div>

		<div class="borderMaklumatPeserta1">
			<h2 style="text-align: center;">INFO PESERTA</h2>
			<article class="MaklumatPeserta1">
				<?php include './halaman/maklumatPeserta.php' ?>
			</article>
		</div>
	</div>

	<div class="footer">
		<div class="footerCONTENT">
			<?php include "./halaman/footerCONTENT.php" ?>
		</div>
	</div>
</body>
</html> 

