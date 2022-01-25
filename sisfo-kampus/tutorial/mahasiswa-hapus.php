<?php
include"koneksi.php";
$sql_hapus = mysql_query("DELETE FROM tbl_mahasiswa WHERE no_bp='$_GET[nobp]'");
if($sql_hapus){
echo"<script>
alert('Data Sudah Dihapus');
window.location.href='mahasiswatampil.php';
</script>";
}
?>




