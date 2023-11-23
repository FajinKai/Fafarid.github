<?php
include 'konek.php';

$id_reservasi= $_GET['id_reservasi'];
mysqli_query($konek,"DELETE FROM reservasi WHERE id_reservasi='$id_reservasi'");
header("location:reservasi.php");
?>