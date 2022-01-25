<?php
include "koneksi.php";
$sql_edit = mysqli_query($conn,"SELECT * FROM tbl_matakuliah WHERE kd_mk='$_GET[kdmk]'");
$row =  mysqli_fetch_array($sql_edit);
?>

<h2>Form Edit Data Matakuliah</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
        <tr>
            <td>Kd Mata Kuliah</td>
            <td>: <input type="text" name="kd_mk" value="<?php echo $row['kd_mk']; ?>" size="10"></td>
        </tr>
        <tr>
            <td>Nama Mata Kuliah</td>
            <td>: <input type="text" name="nama_mk" value="<?php echo $row['nama_mk']; ?>" size="30"></td>
        </tr>
        <tr>
            <td>SKS</td>
            <td>: <input type="int" name="SKS" value="<?php echo $row['SKS']; ?>" size="30"></td>
        </tr>
        <td>&nbsp;</td>
        <td>: <button type="submit" name="simpan">Simpan</button>
            <button type="button" onclick=window.location.href='./media.php?page=matakuliah'>Kembali</button>
        </td>
        </tr>
    </form>
</table>

<?php
error_reporting(0);
if (isset($_POST['simpan'])) {
    include "koneksi.php";
    mysqli_query($conn,"UPDATE tbl_matakuliah SET nama_mk='$_POST[nama_mk]',		
kd_mk='$_POST[kd_mk]',
SKS='$_POST[SKS]',
aktif='Y' WHERE kd_mk='$_POST[kd_mk]' ");
    echo "<script>window.location.href='./media.php?page=matakuliah'</script>";
}
?>