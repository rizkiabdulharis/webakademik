
    <a href="form/cetak_mahasiswa.php" target="_blank" class="btn btn-primary">Print Document</a>
	<br><br>
<table width="100%" border="1" cellpadding="4" cellspacing="0">
    <tr>
        <td>No</td>
        <td>No. BP</td>
        <td>Nama Mahasiswa</td>
        <td>Jenis Kelamin</td>
        <td>Kelas</td>
        <td>Jurusan</td>
    </tr>

    <?php
    include "koneksi.php";
    $sql = mysqli_query($conn,"SELECT * FROM tbl_mahasiswa,tbl_jurusan,tbl_kelas where tbl_mahasiswa.kd_kelas=tbl_kelas.kd_kelas AND tbl_mahasiswa.kd_jurusan=tbl_jurusan.kd_jurusan ");
    $no = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>
        <tr>
            <td align='center'> <?php echo $no; ?> </td>
            <td align='center'> <?php echo $row['no_bp']; ?> </td>
            <td> <?php echo $row['nama_mhs']; ?> </td>
            <td> <?php echo $row['jenis_kelamin']; ?> </td>
            <td align='center'> <?php echo $row['nama_kelas']; ?> </td>
            <td align='center'> <?php echo $row['nama_jurusan']; ?> </td>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>