<link rel="stylesheet" href="gaya.css">
<h3>Edit Data Kamar</h3>

<?php
include 'konek.php';
$nomer_kamar = $_GET['nomer_kamar'];
$data = mysqli_query($konek,"SELECT * FROM kamar WHERE nomer_kamar='$nomer_kamar'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-kamar.php">
<table>
    <tr>
        <td>NOMER KAMAR :</td>
        <td><input type="text" name="nomer_kamar" value="<?php echo $tampil['nomer_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>TIPE KAMAR :</td>
        <td><input type="text" name="tipe_kamar" value="<?php echo $tampil['tipe_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>HARGA :</td>
        <td><input type="number" name="harga" value="<?php echo $tampil['harga']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>