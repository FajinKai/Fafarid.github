<?php
include 'konek.php';

$no_identitas = $_POST['no_identitas'];
$nama_tamu = $_POST['nama_tamu'];
$telepon = $_POST['telepon'];

mysqli_query($konek,"UPDATE tamu SET no_identitas='$no_identitas', nama_tamu='$nama_tamu',
telepon='$telepon' WHERE no_identitas='$no_identitas'");
header("location: tamu.php"); 

?>