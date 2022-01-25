<?php
include "koneksi.php";
$sql_hapus = mysqli_query($conn,"DELETE FROM tbl_matakuliah WHERE kd_mk='$_GET[kdmk]'");
if ($sql_hapus) {
    echo "<script>
alert('Data Sudah Dihapus');
window.location.href='./media.php?page=matakuliah';
</script>";
}
