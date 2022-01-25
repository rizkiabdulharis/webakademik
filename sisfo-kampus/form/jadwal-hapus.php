<?php
include "koneksi.php";
$sql_hapus = mysqli_query($conn,"DELETE FROM tbl_jadwal WHERE kd_jadwal='$_GET[kdjadwal]'");
if ($sql_hapus) {
    echo "<script>
alert('Data Sudah Dihapus');
window.location.href='./media.php?page=jadwal';
</script>";
}
