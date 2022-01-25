<h2>Form Tambah Data Mahasiswa</h2>
<table border="1" width="100%">
<form method="POST" action="" enctype="multipart/form-data">
<tr> <td>No.BP</td> <td>: <input type="text" name="no_bp" size="10"></td></tr>
<tr> <td>Nama</td> <td>: <input type="text" name="name_mhs" size="30"></td></tr>
<tr> <td>Password</td> <td>: <input type="password" name="password" size="30"></td></tr>						  
<tr> <td>&nbsp;</td> <td>: 
<button type="submit" name="simpan">Simpan</button> 
</td></tr>						  
</form>
</table>


<?php
error_reporting(0);
include"koneksi.php";
if(isset($_POST['simpan'])){
mysql_query("INSERT INTO tbl_mahasiswa VALUES (
'$_POST[no_bp]',	
'$_POST[name_mhs]',	
'$_POST[password]') ");
echo"<script>alert('Data Berhasil di Tambah');window.location.href='mahasiswatampil.php'</script>";
}
?>




