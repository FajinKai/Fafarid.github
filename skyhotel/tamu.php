<!DOCTYPE html>
<html>
<head></head>
	<title>Sky Hotel</title>
    <link rel="stylesheet" href="gaya.css">
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
	<div class="content">
    <h3>TAMU</h3>
<table border="1">
    <tr>
        <td>NO IDENTITAS</td>
        <td>NAMA TAMU</td>
        <td>TELEPON</td>
        <td>AKSI</td>  
    </tr>

<?php
    include 'konek.php';
    $data=mysqli_query($konek,"SELECT * FROM tamu");
    while($tampil=mysqli_fetch_array($data)){ 
?> 

<tr>
    <td> <?php echo $tampil['no_identitas'] ?> </td>
    <td> <?php echo $tampil['nama_tamu'] ?> </td>
    <td> <?php echo $tampil['telepon'] ?> </td>
    <td> 
        <a href="hapus-tamu.php?no_identitas=<?php echo$tampil['no_identitas']; ?>">HAPUS</a>
        <a href="edit-tamu.php?no_identitas=<?php echo$tampil['no_identitas']; ?>">EDIT</a>
    </td>  
</tr>

<?php
    }
?>

</table>
<a class="tambah" href="input-tamu.php">TAMBAHKAN DATA BARU</a>
</body>
</html>