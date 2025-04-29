<?php 
	if(empty($_POST['submit'])){
 ?>

 <form method="POST">
    <label><b>PILIH NAMA:</b></label>
    <select name="name">
    	<option>---------PILIH---------</option>
    	<?php 
			include 'database.php';
			$arahanSQL = "select * from peserta";
 			$arahanRUN = mysqli_query($capaiDB,$arahanSQL);
 			while($data = mysqli_fetch_array($arahanRUN))
 				{
		?>
		<option value=<?php echo $data['idPeserta']; ?> ><?php echo $data['nama_Peserta']; }?></option> 
    </select>&nbsp;&nbsp;&nbsp;
    <input type="submit" name="submit" value="SUBMIT" style="font-size: 15px; font-weight: bold;">

 </form>

 <?php 
	}else{

		include "./halaman/pengadilSelectPesertaTunjukGambarFORM.php";

		include "database.php";

		$_SESSION['nama_peserta'] = $_POST['name'];


	}
  ?>
