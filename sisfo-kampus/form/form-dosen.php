<h2>Form Tambah Data Dosen</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
        <tr>
            <td>NIDN</td>
            <td>: <input type="text" name="kd_dosen" size="10"></td>
        </tr>
        <tr>
            <td>Nama Dosen</td>
            <td>: <input type="text" name="name_dosen" size="30"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <select name="jenis_kelamin">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
        <tr>
            <td>Username</td>
            <td>: <input type="text" name="username" size="30"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>: <input type="password" name="password" size="30"></td>
        </tr>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>:
                <button type="submit" name="simpan">Simpan</button>
                <button type="button" onclick=window.location.href='./media.php?page=dosen'>Kembali</button>
            </td>
        </tr>
    </form>
</table>

<?php
error_reporting(0);
include "koneksi.php";
if (isset($_POST['simpan'])) {
    mysqli_query($conn,"INSERT INTO tbl_dosen VALUES (
'$_POST[kd_dosen]',	
'$_POST[name_dosen]',	
'$_POST[jenis_kelamin]',		
'$_POST[username]',
'$_POST[password]',		
'Y') ");
    echo "<script>window.location.href='./media.php?page=dosen'</script>";
}
?>