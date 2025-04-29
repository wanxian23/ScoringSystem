<!DOCTYPE html>
<html>
<head>
	<title>Halaman Rekod Keputusan</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./javascript/function.js"></script>

	<?php session_start(); ?>

</head>
<body class="body">	

	<header class="header2">
		<div class="backButton2">
			<label>Ingin Kembali ?<label>
			<button onclick="kembaliPengadil()" style="font-size: 18px;">Kembali</button>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<label>Ingin Keluar ?<label>
			<button onclick="keluar()" style="font-size: 18px;">Keluar</button>
		</div>

		<div class="headerWORD4">
		<div class="img">
			<img src="./gambar/Robotic.png">
		</div>
			<h1 style="margin-right: 10px;">Halaman Rekod Keputusan</h1>
		</div> 

		<article class="content2b">
			<?php include "./halaman/TukarSistem.php"; ?>
		</article>

		<article class="content2">
			<h2>Pertandingan Mencipta Robotik SMK Seri Kembangan 2022</h2>
		</article>

	</header>


	<div class="borderContent7">

		<div class="rekodMarkahPeserta">
			<h2 style="text-align: center;">MEREKOD KEPUTUSAN PESERTA</h2>
			<div class="borderMaklumatPeserta4">
				<div class="MaklumatPesertaAdjust2">
					<?php include "./halaman/rekodKeputusanPeserta.php"; ?>
				</div>
			</div>
		</div>
		
		<div class="borderGambar">
			<div class="borderPilihPeserta">
				<?php include './halaman/pengadilSelectPesertaTunjukGambar.php'; ?>
			</div>
			<div class="gambarTunjuk3">
				<?php include "./halaman/adminSelectGambar.php" ?>
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