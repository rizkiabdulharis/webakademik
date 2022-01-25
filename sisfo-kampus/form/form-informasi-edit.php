<?php
include "koneksi.php";
$sql_edit = mysqli_query($conn,"SELECT * FROM tbl_informasi WHERE kd_informasi='$_GET[kdinformasi]'");
$row =  mysqli_fetch_array($sql_edit);
?>

<h2>Form Edit Data Informasi</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
        <tr>
            <td>Kd informasi</td>
            <td>: <input type="int" name="kd_informasi" value="<?php echo $row['kd_informasi']; ?>" size="10"></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>: <input type="text" name="judul" value="<?php echo $row['judul']; ?>" size="30"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>: <input type="text" name="deskripsi" value="<?php echo $row['deskripsi']; ?>" size="30"></td>
        </tr>
        <tr>
            <td>Tanggal Upload</td>
            <td>: <input type="date" name="tgl_upload" value="<?php echo $row['tgl_upload']; ?>" size="30"></td>
        </tr>
        <td>&nbsp;</td>
        <td>: <button type="submit" name="simpan">Simpan</button>
            <button type="button" onclick=window.location.href='./media.php?page=informasi'>Kembali</button>
        </td>
        </tr>
    </form>
</table>

<?php
error_reporting(0);
if (isset($_POST['simpan'])) {
    include "koneksi.php";
    mysql_query(" UPDATE tbl_informasi SET		
judul='$_POST[judul]',
deskripsi='$_POST[deskripsi]',
tgl_upload='$_POST[tgl_upload]'  WHERE  kd_informasi='$_POST[kd_informasi]' ");
    echo "<script>window.location.href='./media.php?page=informasi'</script>";
}
?>