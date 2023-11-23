<?php
include 'konek.php';

$id_pegawai= $_GET['id_pegawai'];
mysqli_query($konek,"DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'");
header("location:pegawai.php");
?>