<?php
include 'konek.php';

$nomer_kamar= $_GET['nomer_kamar'];
mysqli_query($konek,"DELETE FROM kamar WHERE nomer_kamar='$nomer_kamar'");
header("location:kamar.php");
?> 