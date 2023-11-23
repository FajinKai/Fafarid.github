<?php
include 'konek.php';

$nomer_kamar = $_POST['nomer_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$harga = $_POST['harga'];

mysqli_query($konek,"INSERT INTO kamar VALUES('$nomer_kamar','$tipe_kamar','$harga')");
header("location:kamar.php");
?>