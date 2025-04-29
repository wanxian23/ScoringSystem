<?php 

// This "deleteData.php" file is use to connect to other file button in order to delete data

include "./halaman/database.php";
include "HalamanAdmin.php";

$idpeserta = $_SESSION['idpesertaDelete'];


$arahanSQL2 = "delete from markah where idPeserta = '$idpeserta' AND idJenis = 'IT01';";
$runSQL2 = mysqli_query($capaiDB, $arahanSQL2);
$arahanSQL3 = "delete from markah where idPeserta = '$idpeserta' AND idJenis = 'IT02';";
$runSQL3 = mysqli_query($capaiDB, $arahanSQL3);
$arahanSQL4 = "delete from pemenang where idPeserta = '$idpeserta';";
$runSQL4 = mysqli_query($capaiDB, $arahanSQL4);
$arahanSQL5 = "delete from robot where idPeserta = '$idpeserta';";
$runSQL5 = mysqli_query($capaiDB, $arahanSQL5);
$arahanSQL = "delete from peserta where idPeserta = '$idpeserta';";
$runSQL = mysqli_query($capaiDB, $arahanSQL);
clearstatcache(); // It's used to refresh the page, so that the page wont malfunctioning
                  // For EXP, kembali button which connect to js file cant function unless I have to manual clear the history in the browser

if ($runSQL && $runSQL2 && $runSQL3 && $runSQL4){ ?>
    <script type="text/javascript">
        window.alert("Peserta berjaya dipadam.");
        window.location = 'HalamanAdmin.php';
    </script>
<?php }else{ ?>
    <script type="text/javascript">
        window.alert("Peserta gagal dipadam.");
        window.location = 'HalamanAdmin.php';
    </script>
<?php } ?>

