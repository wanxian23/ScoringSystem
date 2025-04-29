<?php 
	include "database.php";

	$arahanSQL1 = "Select * from pemenang inner join peserta on pemenang.idPeserta = peserta.idPeserta inner join markah on peserta.idPeserta = markah.idPeserta inner join robot on peserta.idPeserta = robot.idPeserta where pemenang.pangkat = 'PERTAMA' AND markah.idJenis = 'IT01';";
	$arahanSQL2 = "Select * from pemenang inner join peserta on pemenang.idPeserta = peserta.idPeserta inner join markah on peserta.idPeserta = markah.idPeserta inner join robot on peserta.idPeserta = robot.idPeserta where pemenang.pangkat = 'PERTAMA' AND markah.idJenis = 'IT02';";
	$arahanSQL3 = "Select * from pemenang inner join peserta on pemenang.idPeserta = peserta.idPeserta inner join markah on peserta.idPeserta = markah.idPeserta inner join robot on peserta.idPeserta = robot.idPeserta where pemenang.pangkat = 'KEDUA' AND markah.idJenis = 'IT01';";
    $arahanSQL4 = "Select * from pemenang inner join peserta on pemenang.idPeserta = peserta.idPeserta inner join markah on peserta.idPeserta = markah.idPeserta inner join robot on peserta.idPeserta = robot.idPeserta where pemenang.pangkat = 'KEDUA' AND markah.idJenis = 'IT02';";
    $arahanSQL5 = "Select * from pemenang inner join peserta on pemenang.idPeserta = peserta.idPeserta inner join markah on peserta.idPeserta = markah.idPeserta inner join robot on peserta.idPeserta = robot.idPeserta where pemenang.pangkat = 'KETIGA' AND markah.idJenis = 'IT01';";
    $arahanSQL6 = "Select * from pemenang inner join peserta on pemenang.idPeserta = peserta.idPeserta inner join markah on peserta.idPeserta = markah.idPeserta inner join robot on peserta.idPeserta = robot.idPeserta where pemenang.pangkat = 'KETIGA' AND markah.idJenis = 'IT02';";

	$runSQL1 = mysqli_query($capaiDB, $arahanSQL1);
	$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);
	$runSQL3 = mysqli_query($capaiDB, $arahanSQL3);
    $runSQL4 = mysqli_query($capaiDB, $arahanSQL4);
    $runSQL5 = mysqli_query($capaiDB, $arahanSQL5);
    $runSQL6 = mysqli_query($capaiDB, $arahanSQL6);



	$data1 = mysqli_fetch_array($runSQL1);
	$data2 = mysqli_fetch_array($runSQL2);
	$data3 = mysqli_fetch_array($runSQL3);
    $data4 = mysqli_fetch_array($runSQL4);
    $data5 = mysqli_fetch_array($runSQL5);
    $data6 = mysqli_fetch_array($runSQL6);
 ?>
 <label style="font-size: 25px; text-decoration: underline;"><b>TEMPAT PERTAMA</b></label><br>
 <label><b>NAMA:</b></label>
 <label>
    <?php if(mysqli_num_rows($runSQL1) == 1){
            echo $data1['nama_Peserta'];
        }else{
             echo 'Tiada';
        }       ?>    
</label>&nbsp;
 <label><b>NAMA ROBOT:</b></label>
 <label>
    <?php 
    if (mysqli_num_rows($runSQL1) == 1){
        echo $data1['nama_Robot'];
    }else{
        echo 'Tiada';
    }
?></label>&nbsp;
 <label><b></b><b>MARKAH:</b></label>
 <label>
    <?php 
    if (mysqli_num_rows($runSQL1) == 1){
        $jumMarkah = $data1['markah'] + $data2['markah'];
        echo $jumMarkah.'%';
    }else{
        echo 'Tiada';
    }
    ?></label><br><br><hr>


 <label style="font-size: 25px; text-decoration: underline;"><b>TEMPAT KEDUA</b></label><br>
 <label><b>NAMA:</b></label>
 <label>
    <?php if(mysqli_num_rows($runSQL3) == 1){
            echo $data3['nama_Peserta'];
        }else{
             echo 'Tiada';
        }       ?>
 </label>&nbsp;
 <label><b>NAMA ROBOT:</b></label>
 <label>
    <?php if(mysqli_num_rows($runSQL3) == 1){
            echo $data3['nama_Robot'];
        }else{
             echo 'Tiada';
        }       ?>    
 </label>&nbsp;
 <label><b></b><b>MARKAH:</b></label>
 <label>
    <?php 
    if (mysqli_num_rows($runSQL3) == 1){
        $jumMarkah = $data3['markah'] + $data4['markah'];
        echo $jumMarkah.'%'; 
    }else{
        echo 'Tiada';
    }
?></label><br><br><hr>


<label style="font-size: 25px; text-decoration: underline;"><b>TEMPAT KETIGA</b></label><br>
 <label><b>NAMA:</b></label>
 <label>
    <?php if(mysqli_num_rows($runSQL5) == 1){
            echo $data5['nama_Peserta'];
        }else{
             echo 'Tiada';
        }       
?></label>&nbsp;
 <label><b>NAMA ROBOT:</b></label>
 <label>
    <?php if(mysqli_num_rows($runSQL5) == 1){
            echo $data5['nama_Robot'];
        }else{
             echo 'Tiada';
        }       ?>
 </label>&nbsp;
 <label><b></b><b>MARKAH:</b></label>
 <label>
    <?php 
    if (mysqli_num_rows($runSQL5) == 1){
        $jumMarkah = $data5['markah'] + $data6['markah'];
        echo $jumMarkah.'%'; 
    }else{
        echo 'Tiada';
    }
?></label><br><br><br><hr>

<label><b>TANIAH!!!</b> SEMUA PEMENANG !!!!</label><br>
<label>PESERTA YANG LAIN, SILA BERUSAHA SUPAYA MENCAPAI BERJAYA !!!!</label>