<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pengadil</title>
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
			<h1 style="margin-right: 10px;">Halaman Pengadil</h1>
		</div> 

		<article class="content2b">
			<?php include "./halaman/TukarSistem.php"; ?>
		</article>

		<article class="content2">
			<h2>Pertandingan Mencipta Robotik SMK Seri Kembangan 2022</h2>
		</article>

	</header>


	<div class="borderContent4">

		<div class="borderInfoPengadil">
			<?php include './halaman/contentInfoPengadil.php' ?>
		</div>


		<div class="checkPeserta">
			<?php include './halaman/pengadilSelectPeserta.php'; ?>
		</div>

			<div class="rekodKeputusan">
				<label><strong>MEREKOD KEPUTUSAN PESERTA?</strong></label><br><br>
				<button onclick="window.location.href='rekodKeputusan.php';" style="font-size: 18px;">MEREKOD</button>
			</div>
			
			<div class="gambarTunjuk">
				<?php include "./halaman/pengadilSelectPesertaGambar.php" ?>	
			</div>

			
		</div>

	<div class="footer">
		<div class="footerCONTENT">
			<?php include "./halaman/footerCONTENT.php" ?>
		</div>

	</div>

	
</body>
</html> 