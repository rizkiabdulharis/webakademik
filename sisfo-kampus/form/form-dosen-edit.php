

<?php
include"koneksi.php";
$sql_edit = mysqli_query($conn,"SELECT * FROM tbl_dosen WHERE kd_dosen='$_GET[kddosen]'");
$row =  mysqli_fetch_array($sql_edit);
?>
<h2>Form Edit Data Dosen</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
        <tr>
            <td>Kd Dosen</td>
            <td>: <input type="text" name="kd_dosen" value="<?php echo $row['kd_dosen']; ?>" size="10"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <input type="text" name="nama_dosen" value="<?php echo $row['nama_dosen']; ?>" size="30"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <select name="jenis_kelamin">
                    <?php
                    if ($row['jenis_kelamin'] == "Laki-Laki") {
                        $selected1 = "selected";
                    } else {
                        $selected1 = "";
                    }
                    if ($row['jenis_kelamin'] == "Perempuan") {
                        $selected2 = "selected";
                    } else {
                        $selected2 = "";
                    }
                    ?>
                    <option value="Laki-Laki" <?php echo $selected1; ?>>Laki-Laki</option>
                    <option value="Perempuan" <?php echo $selected2; ?>>Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Username</td>
            <td>: <input type="text" name="username" value="<?php echo $row['username']; ?>" size="10"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>: <input type="password" name="password" value="<?php echo $row['password']; ?>" size="10"></td>
        </tr>
        <td>&nbsp;</td>
        <td>: <button type="submit" name="simpan">Simpan</button>
            <button type="button" onclick=window.location.href='./media.php?page=dosen'>Kembali</button>
        </td>
        </tr>
    </form>
</table>

<?php
error_reporting(0);
include "koneksi.php";
if (isset($_POST['simpan'])) {
mysqli_query($conn,"UPDATE tbl_dosen SET nama_dosen='$_POST[nama_dosen]',	
jenis_kelamin='$_POST[jenis_kelamin]',
username='$_POST[username]',
password='$_POST[password]',				
aktif='Y' WHERE kd_dosen='$_POST[kd_dosen]' ");
    echo "<script>window.location.href='./media.php?page=dosen'</script>";
}
?>