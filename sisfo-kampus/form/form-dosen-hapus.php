<?php
include "koneksi.php";
$sql_hapus = mysqli_query($conn,"DELETE FROM tbl_dosen WHERE kd_dosen='$_GET[kddosen]'");
if ($sql_hapus) {
    echo "<script>
alert('Data Sudah Dihapus');
window.location.href='./media.php?page=dosen';
</script>";
}
