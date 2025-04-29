<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./javascript/function.js"></script>

</head>
<body>	

	<header class="header">
		<div class="headerWORD3">
			<div class="img">
				<img src="./gambar/Robotic.png">
			</div>
			<h1>BORANG LOG MASUK (ADMIN)</h1>
		</div> 

	</header>


	<div class="borderContent3">
		<article class="content">
			<h2>Pertandingan Mencipta Robotik SMK Seri Kembangan 2022</h2>
		</article>


		<div class="logMasuk2">    <!--  This two combined to make the borders combined :) -->
			<p><strong>SILA LOG MASUK</strong></p>
			<P>—————————————————————————————————————————————</P>
  			<div class="contentLogMasuk"> 
				<?php include "./halaman/adminContenLogMASUK.php" ?>
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