<link rel="stylesheet" href="gaya.css">
<h3>Edit Data Pegawai</h3>

<?php
include 'konek.php';
$id_pegawai = $_GET['id_pegawai'];
$data = mysqli_query($konek,"SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-pegawai.php">
<table>
    <tr>
        <td>ID PEGAWAI :</td>
        <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>NAMA PEGAWAI :</td>
        <td><input type="text" name="nama_pegawai" value="<?php echo $tampil['nama_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>JABATAN :</td>
        <td><input type="text" name="jabatan" value="<?php echo $tampil['jabatan']; ?>"></td>
    </tr>
    <tr>
        <td>ALAMAT :</td>
        <td><input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>