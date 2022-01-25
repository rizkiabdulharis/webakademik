<?php
include "koneksi.php";
$sql_hapus = mysqli_query($conn,"DELETE FROM tbl_jurusan WHERE kd_jurusan='$_GET[kdjurusan]'");
if ($sql_hapus) {
    echo "<script>
alert('Data Sudah Dihapus');
window.location.href='./media.php?page=jurusan';
</script>";
}
