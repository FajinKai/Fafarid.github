<?php
include 'konek.php';

$nomer_kamar = $_POST['nomer_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$harga = $_POST['harga'];

mysqli_query($konek,"UPDATE kamar SET nomer_kamar='$nomer_kamar', tipe_kamar='$tipe_kamar',
harga='$harga' WHERE nomer_kamar='$nomer_kamar'");
header("location: kamar.php"); 

?>