<?php
include "koneksi.php";
$sql_edit = mysqli_query($conn,"SELECT * FROM tbl_jurusan WHERE kd_jurusan='$_GET[kdjurusan]'");
$row =  mysqli_fetch_array($sql_edit);
?>

<h2>Form Edit Data Jurusan</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
        <tr>
            <td>Kd Kelas</td>
            <td>: <input type="text" name="kd_jurusan" value="<?php echo $row['kd_jurusan']; ?>" size="10"></td>
        </tr>
        <tr>
            <td>Nama Jurusan</td>
            <td>: <input type="text" name="nama_jurusan" value="<?php echo $row['nama_jurusan']; ?>" size="30"></td>
        </tr>
        <td>&nbsp;</td>
        <td>: <button type="submit" name="simpan">Simpan</button>
            <button type="button" onclick=window.location.href='./media.php?page=jurusan'>Kembali</button>
        </td>
        </tr>
    </form>
</table>

<?php
error_reporting(0);
if (isset($_POST['simpan'])) {
    include "koneksi.php";
    mysqli_query($conn,"UPDATE tbl_jurusan SET nama_jurusan='$_POST[nama_jurusan]',		
kd_jurusan='$_POST[kd_jurusan]',			
aktif='Y' WHERE kd_jurusan='$_POST[kd_jurusan]' ");
    echo "<script>window.location.href='./media.php?page=jurusan'</script>";
}
?>