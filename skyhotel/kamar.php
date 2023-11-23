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
    <h3>KAMAR</h3>
<table border="1">
    <tr>
        <td>NOMER KAMAR</td>
        <td>TIPE KAMAR</td>
        <td>HARGA</td>
        <td>AKSI</td>  
    </tr>

<?php
    include 'konek.php';
    $data=mysqli_query($konek,"SELECT * FROM kamar");
    while($tampil=mysqli_fetch_array($data)){ 
?> 

<tr>
    <td> <?php echo $tampil['nomer_kamar'] ?> </td>
    <td> <?php echo $tampil['tipe_kamar'] ?> </td>
    <td> <?php echo $tampil['harga'] ?> </td>
    <td> 
        <a href="hapus-kamar.php?nomer_kamar=<?php echo$tampil['nomer_kamar']; ?>">HAPUS</a>
        <a href="edit-kamar.php?nomer_kamar=<?php echo$tampil['nomer_kamar']; ?>">EDIT</a>
    </td>  
</tr>

<?php
    }
?>

</table>
<a class="tambah" href="input-kamar.php">TAMBAHKAN DATA BARU</a>
</body>
</html>