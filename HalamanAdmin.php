<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./javascript/function.js"></script>
	<?php 	session_start(); ?>

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
			<h1 style="margin-right: 10px;">Halaman Admin</h1>
		</div> 

		<article class="content2b">
			<?php include "./halaman/TukarSistem.php"; ?>
		</article>

		<article class="content2">
			<h2>Pertandingan Mencipta Robotik SMK Seri Kembangan 2022</h2>
		</article>
	</header>

	<div class="borderContent6">

		<div class="BorderCheckMaklumat">
			<?php include './halaman/AdminSemakMaklumat.php' ?>
		</div>

		<div class="borderTugas">
			<h2 style="text-decoration: underline; text-align: center;">TUGAS</h2>
			<div class="contentTugas">
				<?php include "./halaman/tugasAdmin.php" ?>
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