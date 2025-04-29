<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pemenang</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./javascript/function.js"></script>

	<?php session_start(); ?>

</head>
<body class="body">	

	<header class="header2">
		<div class="backButton2">
			<label>Ingin Kembali ?<label>
			<button onclick="history.back()" style="font-size: 18px;">Kembali</button>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<label>Ingin Keluar ?<label>
			<button onclick="keluar()" style="font-size: 18px;">Keluar</button>
		</div>

		<div class="headerWORD4">
		<div class="img">
			<img src="./gambar/Robotic.png">
		</div>
			<h1 style="margin-right: 10px;">Halaman Pemenang</h1>
		</div> 

		<article class="content2b">
			<?php include "./halaman/TukarSistem.php"; ?>
		</article>
		
		<article class="content2">
			<h2>Pertandingan Mencipta Robotik SMK Seri Kembangan 2022</h2>
		</article>

	</header>


	<div class="borderContent9">


			<div class="BorderSemakPemenang">
				<h2 style="text-align: center;">INFO PEMENANG</h2>
				<div class="MaklumatSemakPemenang">
					<?php include "./halaman/maklumatPemenang.php"; ?>
				</div>
			</div>
			
			<div class="gambarTunjuk4">
				<img src="" id="picSHOW" >					
				<script type="text/javascript">
					choosePic();
				</script>
			</div>

			
	</div>

	<div class="footer">
		<div class="footerCONTENT">
			<?php include "./halaman/footerCONTENT.php" ?>
		</div>

	</div>

	
</body>
</html> 