<?php
include "koneksi.php";
$sql_hapus = mysqli_query($conn,"UPDATE tbl_mahasiswa set aktif='N' WHERE no_bp='$_GET[nobp]'");
if ($sql_hapus) {
    echo "<script>
alert('Mahasiswa di Non Aktifkan');
window.location.href='./media.php?page=mahasiswa';
</script>";
}
