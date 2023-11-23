<?php
include 'konek.php';

$no_identitas = $_POST['no_identitas'];
$nama_tamu = $_POST['nama_tamu'];
$telepon = $_POST['telepon'];

mysqli_query($konek,"INSERT INTO tamu VALUES('$no_identitas','$nama_tamu','$telepon')");
header("location:tamu.php");
?>