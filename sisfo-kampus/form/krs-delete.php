<?php
include"koneksi.php";
$sql_hapus = mysqli_query($conn,"DELETE FROM tbl_krs_mhs WHERE id_krs='$_GET[id]'");
if($sql_hapus){
echo"<script>
alert('Data Sudah Dihapus');
window.location.href='./media.php?page=krs';
</script>";
}
?>




