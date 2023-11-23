<link rel="stylesheet" href="gaya.css">
<h3>Edit Data Reservasi</h3>

<?php
include 'konek.php';
$id_reservasi = $_GET['id_reservasi'];
$data = mysqli_query($konek,"SELECT * FROM reservasi WHERE id_reservasi='$id_reservasi'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-reservasi.php">
<table>
    <tr>
        <td>ID RESERVASI :</td>
        <td><input type="number" name="id_reservasi" value="<?php echo $tampil['id_reservasi']; ?>"></td>
    </tr>
    <tr>
        <td>ID :</td>
        <td><input type="number" name="no_identitas" value="<?php echo $tampil['no_identitas']; ?>"></td>
    </tr>
    <tr>
        <td>KAMAR :</td>
        <td><input type="text" name="nomer_kamar" value="<?php echo $tampil['nomer_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>PEGAWAI :</td>
        <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>CHECK-IN :</td>
        <td><input type="date" name="check_in" value="<?php echo $tampil['check_in']; ?>"></td>
    </tr>
    <tr>
        <td>CHECK-OUT :</td>
        <td><input type="date" name="check_out" value="<?php echo $tampil['check_out']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>