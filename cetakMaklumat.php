<!DOCTYPE html>
<html>
<head>
	<title>Halaman Peserta</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./javascript/function.js"></script>

	<?php session_start(); ?> 

 </head>
 <body>
<div id="dPDF">
   <header class="header2">
		<div class="backButton">
			<label id="word">Ingin Kembali ?<label>
			<button onclick="kembaliAdmin()" style="font-size: 18px;" id="kembali">Kembali</button>&emsp;&emsp;&emsp;
			<label id="word2">Ingin Keluar ?<label>
			<button onclick="keluar()" style="font-size: 18px;" id="keluar">Keluar</button>
		</div>
		<div class="headerWORD4">
		<div class="img">
			<img src="./gambar/Robotic.png">
		</div>
			<h1 style="margin-right: 10px;">Laporan Peserta</h1>
		</div> 

		<article class="content2">
			<h2>Pertandingan Mencipta Robotik SMK Seri Kembangan 2022</h2>
		</article>
	</header>

	<div class="borderContent5">
		<div class="checkPemenangBUTTON">
			<div class="checkPemenangBUTTONcontent">
				<label id="word3">Cetak Laporan ?<label>
				<button style="font-size: 18px; height: 30px" onclick="printpage();" id="cetak">CETAK MAKLUMAT</button>&emsp;&emsp;		
			</div>
		</div>
		<div class="gambarTunjuk1">
			<?php include "./halaman/maklumatPesertaGambar2.php" ?>
		</div>

		<div class="borderMaklumatPeserta12">
			<h2 style="text-align: center;">INFO PESERTA</h2>
			<article class="MaklumatPeserta1">
				<?php include './halaman/maklumatPeserta2.php' ?>
			</article>
		</div>
	</div>

</div>
 </body>
 </html>