<h2>Form Tambah Data Informasi</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
        <tr>
            <td>Kd Informasi</td>
            <td>: <input type="int" name="kd_informasi" size="10"></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>: <input type="text" name="judul" size="30"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>: <textarea name="deskripsi"> </textarea></td>
        </tr>
        <tr>
            <td>Tanggal Upload</td>
            <td>: <input type="date" name="tgl_upload" size="30"></td>
        </tr>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>:
                <button type="submit" name="simpan">Simpan</button>
                <button type="button" onclick=window.location.href='./media.php?page=informasi'>Kembali</button>
            </td>
        </tr>
    </form>
</table>

<?php
error_reporting(0);
include "koneksi.php";
if (isset($_POST['simpan'])) {
    mysqli_query($conn,"INSERT INTO tbl_informasi VALUES ('$_POST[kd_informasi]',
'$_POST[judul]',
'$_POST[deskripsi]',
'$_POST[tgl_upload]')");
    echo "<script>window.location.href='./media.php?page=informasi'</script>";
}
?>