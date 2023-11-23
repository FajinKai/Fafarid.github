<link rel="stylesheet" href="gaya.css">
<h3>Edit Data Tamu</h3>

<?php
include 'konek.php';
$no_identitas = $_GET['no_identitas'];
$data = mysqli_query($konek,"SELECT * FROM tamu WHERE no_identitas='$no_identitas'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-tamu.php">
<table>
    <tr>
        <td>NO IDENTITAS :</td>
        <td><input type="number" name="no_identitas" value="<?php echo $tampil['no_identitas']; ?>"></td>
    </tr>
    <tr>
        <td>NAMA TAMU :</td>
        <td><input type="text" name="nama_tamu" value="<?php echo $tampil['nama_tamu']; ?>"></td>
    </tr>
    <tr>
        <td>TELEPON :</td>
        <td><input type="number" name="telepon" value="<?php echo $tampil['telepon']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>