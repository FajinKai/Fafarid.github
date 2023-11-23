<?php
include 'konek.php';

$id_reservasi = $_POST['id_reservasi'];
$no_identitas = $_POST['no_identitas'];
$nomer_kamar = $_POST['nomer_kamar'];
$id_pegawai = $_POST['id_pegawai'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];

mysqli_query($konek,"INSERT INTO reservasi VALUES('$id_reservasi','$no_identitas','$nomer_kamar','$id_pegawai','$check_in','$check_out')");
header("location:reservasi.php");
?>