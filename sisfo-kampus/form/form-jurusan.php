<h2>Form Tambah Data Jurusan</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
        <tr>
            <td>Kd Jurusan</td>
            <td>: <input type="text" name="kd_jurusan" size="10"></td>
        </tr>
        <tr>
            <td>Nama Jurusan</td>
            <td>: <input type="text" name="name_jurusan" size="30"></td>
        </tr>
        <td>&nbsp;</td>
        <td>:
            <button type="submit" name="simpan">Simpan</button>
            <button type="button" onclick=window.location.href='./media.php?page=jurusan'>Kembali</button>
        </td>
        </tr>
    </form>
</table>

<?php
error_reporting(0);
include "koneksi.php";
if (isset($_POST['simpan'])) {
    mysqli_query($conn,"INSERT INTO tbl_jurusan VALUES (
'$_POST[kd_jurusan]',	
'$_POST[name_jurusan]',				
'Y') ");
    echo "<script>window.location.href='./media.php?page=jurusan'</script>";
}
?>