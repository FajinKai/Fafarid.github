<?php
include 'konek.php';

$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];

mysqli_query($konek,"INSERT INTO pegawai VALUES('$id_pegawai','$nama_pegawai','$jabatan','$alamat')");
header("location:pegawai.php");
?>