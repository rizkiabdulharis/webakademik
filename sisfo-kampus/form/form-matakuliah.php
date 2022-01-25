<h2>Form Tambah Data Matakuliah</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
        <tr>
            <td>Kd Mata Kuliah</td>
            <td>: <input type="text" name="kd_mk" size="10"></td>
        </tr>
        <tr>
            <td>Nama Mata Kuliah</td>
            <td>: <input type="text" name="nama_mk" size="30"></td>
        </tr>
        <tr>
            <td>SKS</td>
            <td>: <input type="int" name="SKS" size="30"></td>
        </tr>
        <td>&nbsp;</td>
        <td>:
            <button type="submit" name="simpan">Simpan</button>
            <button type="button" onclick=window.location.href='./media.php?page=matakuliah'>Kembali</button>
        </td>
        </tr>
    </form>
</table>

<?php
error_reporting(0);
include "koneksi.php";
if (isset($_POST['simpan'])) {
    mysqli_query($conn,"INSERT INTO tbl_matakuliah VALUES (
'$_POST[kd_mk]',	
'$_POST[nama_mk]',
'$_POST[SKS]',		    			
'Y') ");
    echo "<script>window.location.href='./media.php?page=matakuliah'</script>";
}
?>