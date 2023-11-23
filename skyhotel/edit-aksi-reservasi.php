<?php
include 'konek.php';

$id_reservasi = $_POST['id_reservasi'];
$no_identitas = $_POST['no_identitas'];
$nomer_kamar = $_POST['nomer_kamar'];
$id_pegawai = $_POST['id_pegawai'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];

mysqli_query($konek,"UPDATE reservasi SET id_reservasi='$id_reservasi', no_identitas='$no_identitas',
nomer_kamar='$nomer_kamar',id_pegawai='$id_pegawai',check_in='$check_in',check_out='$check_out' WHERE id_reservasi='$id_reservasi'");
header("location: reservasi.php"); 

?>