<link rel="stylesheet" href="gaya.css">
<script src="handledate.js"> </script>

<h3>TAMBAHKAN DATA RESERVASI</h3>
    <form method="post" action="input-aksi-reservasi.php">
        <table>
            <tr>
                <td>ID RESERVASI</td>
                <td><input type="text" name="id_reservasi"></td>
            </tr>
            <tr>
                <td>ID</td>
                <td><input type="number" name="no_identitas"></td>
            </tr>
            <tr>
                <td>KAMAR</td>
                <td><input type="text" name="nomer_kamar"></td>
            </tr>
            <tr>
                <td>PEGAWAI</td>
                <td><input type="text" name="id_pegawai"></td>
            </tr>
            <tr>
                <td>CHECK-IN</CHECK-IN></td>
                <td><input type="date" name="check_in" id="check_in"></td>
            </tr>
            <tr>
                <td>CHECK-OUT</td>
                <td><input type="date" name="check_out" id="check_out"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>