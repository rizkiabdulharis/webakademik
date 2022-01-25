<?php
include "koneksi.php";
$sql_hapus = mysqli_query($conn,"DELETE FROM tbl_kelas WHERE kd_kelas='$_GET[kdkelas]'");
if ($sql_hapus) {
    echo "<script>
alert('Data Sudah Dihapus');
window.location.href='./media.php?page=kelas';
</script>";
}
