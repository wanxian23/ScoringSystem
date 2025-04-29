<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./javascript/function.js"></script>
</head>
<body class="body">	

	<header class="header3">	
		<div class="backButton2">
			<label>Ingin Keluar ?<label>
			<button onclick="keluar()" style="font-size: 18px;">Keluar</button>
		</div>

		<div class="headerWORD4">
			<div class="img">
				<img src="./gambar/Robotic.png">
			</div>	
			<h1>PENDAFTARAN AKAUN</h1>
		</div> 
	</header>

	<div class="borderContent2">
		<article class="content2b">
			<?php include "./halaman/TukarSistem.php"; ?>
		</article>
		<article class="content2">
			<h2>Pertandingan Mencipta Robotik SMK Seri Kembangan 2022</h2>
		</article>

		<div class="daftarAKAUN">    <!--  This two combined to make the borders combined :) -->
			<p><strong>SILA DAFTAR AKAUN</strong></p>
			<P>—————————————————————————————————————————————</P>
  			<div class="contentDaftarAKAUN"> 
				<?php include "./halaman/daftarcontentAKAUN.php" ?>
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