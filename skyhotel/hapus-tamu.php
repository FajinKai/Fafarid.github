<?php
include 'konek.php';

$no_identitas= $_GET['no_identitas'];
mysqli_query($konek,"DELETE FROM tamu WHERE no_identitas='$no_identitas'");
header("location:tamu.php");
?> 