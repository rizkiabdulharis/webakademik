<?php
include"koneksi.php";
$sql_edit = mysql_query("SELECT * FROM tbl_mahasiswa WHERE no_bp='$_GET[nobp]'");
$row =  mysql_fetch_array($sql_edit);
?>

<h2>Form Edit Data Mahasiswa</h2>
<table border="1" width="100%">
<form method="POST" action="" enctype="multipart/form-data">
<tr> <td>No.BP</td> <td>: <input type="text" name="no_bp" value="<?php echo $row['no_bp'];?>" size="10"></td></tr>
<tr> <td>Nama</td> <td>: <input type="text" name="nama_mhs" value="<?php echo $row['nama_mhs'];?>" size="30"></td></tr>
<tr> <td>Password</td> <td>: <input type="password" name="password" size="30"></td></tr>								  
<tr> <td>&nbsp;</td> <td>: <button type="submit" name="simpan">Simpan</button> 
</td></tr>						  
</form>
</table>

<?php
error_reporting(0);
include"koneksi.php";

if(isset($_POST['simpan'])){
mysql_query("UPDATE tbl_mahasiswa SET nama_mhs='$_POST[nama_mhs]',	
password='$_POST[password]' WHERE no_bp='$_POST[no_bp]' ");
echo"<script>alert('Data Berhasil di Edit');window.location.href='mahasiswatampil.php'</script>";
}
?>




