<?php
include 'konek.php';

$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];

mysqli_query($konek,"UPDATE pegawai SET id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai',
jabatan='$jabatan',alamat=$alamat WHERE id_pegawai='$id_pegawai'");
header("location: pegawai.php"); 

?>