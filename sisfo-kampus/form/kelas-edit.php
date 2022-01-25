<?php
include "koneksi.php";
$sql_edit = mysqli_query($conn,"SELECT * FROM tbl_kelas WHERE kd_kelas='$_GET[kdkelas]'");
$row =  mysqli_fetch_array($sql_edit);
?>

<h2>Form Edit Data Kelas</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
        <tr>
            <td>Kd Kelas</td>
            <td>: <input type="text" name="kd_kelas" value="<?php echo $row['kd_kelas']; ?>" size="10"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <input type="text" name="nama_kelas" value="<?php echo $row['nama_kelas']; ?>" size="30"></td>
        </tr>
        <td>&nbsp;</td>
        <td>: <button type="submit" name="simpan">Simpan</button>
            <button type="button" onclick=window.location.href='./media.php?page=kelas'>Kembali</button>
        </td>
        </tr>
    </form>
</table>

<?php
error_reporting(0);
if (isset($_POST['simpan'])) {
    include "koneksi.php";
    mysqli_query($conn,"UPDATE tbl_kelas SET kd_kelas='$_POST[kd_kelas]',		
nama_kelas='$_POST[nama_kelas] ',			
aktif='Y' WHERE kd_kelas='$_POST[kd_kelas]' ");
    echo "<script>window.location.href='./media.php?page=kelas'</script>";
}
?>