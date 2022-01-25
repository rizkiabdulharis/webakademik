<h2>Form Tambah Data Kelas</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
        <tr>
            <td>Kd Kelas</td>
            <td>: <input type="text" name="kd_kelas" size="10"></td>
        </tr>
        <tr>
            <td>Nama Kelas</td>
            <td>: <input type="text" name="name_kelas" size="30"></td>
        </tr>
        <td>&nbsp;</td>
        <td>:
            <button type="submit" name="simpan">Simpan</button>
            <button type="button" onclick=window.location.href='./media.php?page=kelas'>Kembali</button>
        </td>
        </tr>
    </form>
</table>

<?php
error_reporting(0);
include "koneksi.php";
if (isset($_POST['simpan'])) {
    mysqli_query($conn,"INSERT INTO tbl_kelas VALUES (
'$_POST[kd_kelas]',	
'$_POST[name_kelas]',		    			
'Y') ");
    echo "<script>window.location.href='./media.php?page=kelas'</script>";
}
?>