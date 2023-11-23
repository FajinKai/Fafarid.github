<!DOCTYPE html>
<html>
<head>
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
<h3>PEGAWAI</h3>
<table border="1">
    <tr>
        <td>ID PEGAWAI</td>
        <td>NAMA PEGAWAI</td>
        <td>JABATAN</td>
        <td>ALAMAT</td>
        <td>AKSI</td>  

    </tr>

<?php
    include 'konek.php';
    $data=mysqli_query($konek,"SELECT * FROM pegawai");
    while($tampil=mysqli_fetch_array($data)){ 
?>

<tr>
    <td> <?php echo $tampil['id_pegawai'] ?> </td>
    <td> <?php echo $tampil['nama_pegawai'] ?> </td>
    <td> <?php echo $tampil['jabatan'] ?> </td>
    <td> <?php echo $tampil['alamat'] ?> </td>
    <td>
        <a href="hapus-pegawai.php?id_pegawai=<?php echo$tampil['id_pegawai']; ?>">HAPUS</a>
        <a href="edit-pegawai.php?id_pegawai=<?php echo$tampil['id_pegawai']; ?>">EDIT</a>
    </td>
  
</tr>

<?php
    }
?>
</table>
<a href="input-pegawai.php">TAMBAHKAN DATA BARU</a>
</div>
</body>
</html>
