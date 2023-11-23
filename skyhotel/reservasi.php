<!DOCTYPE html>
<html>
<head></head>
	<title>Sky Hotel</title>
    <link rel="stylesheet" type="text/css" href="gaya.css">
	<link rel="stylesheet" type="text/css" href="bergaya.css">
</head>
<body>
<div class="main">
	<div class="navbar">
		<label class="logo"> Sky Hotel</label>
		<ul>
            <li><a href="cover.html">Home</a></li>
			<li><a href="reservasi.php">Reservasi</a></li>
			<li><a href="kamar.php">Kamar</a></li>
			<li><a href="pegawai.php">Pegawai</a></li>
            <li><a href="tamu.php">Tamu</a></li>
		</ul>
	</div>
	<html>
<h3> RESERVASI </h3>
<table border="1">
    <tr>
        <td>ID RESERVASI</td>
        <td>ID</td>
        <td>KAMAR</td>
        <td>PEGAWAI</td>
        <td>CHECK-IN</td>
        <td>CHECK-OUT</td>  
        <td>AKSI</td>  

    </tr>

<?php
    include 'konek.php';
    $data=mysqli_query($konek,"SELECT * FROM reservasi");
    while($tampil=mysqli_fetch_array($data)){ 
?>

<tr>
    <td> <?php echo $tampil['id_reservasi'] ?> </td>
    <td> <?php echo $tampil['no_identitas'] ?> </td>
    <td> <?php echo $tampil['nomer_kamar'] ?> </td>
    <td> <?php echo $tampil['id_pegawai'] ?> </td>
    <td> <?php echo $tampil['check_in'] ?> </td>
    <td> <?php echo $tampil['check_out'] ?> </td>
    <td> 
        <a href="hapus-reservasi.php?id_reservasi=<?php echo$tampil['id_reservasi']; ?>">HAPUS</a>
        <a href="edit-reservasi.php?id_reservasi=<?php echo$tampil['id_reservasi']; ?>">EDIT</a>
    </td>
</tr>

<?php
}
?>

</table>
<a href="input-reservasi.php">RESERVASI</a>
</html>
</div>
</body>
</html>