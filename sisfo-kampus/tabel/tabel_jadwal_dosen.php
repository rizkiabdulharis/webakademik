<h2>Tabel Data Jadwal Dosen</h2>


<table width="100%" border="1" cellpadding="4" cellspacing="0">
    <tr>
        <td>No</td>
        <td>Tahun Akademik</td>
        <td>Kd Jurusan</td>
        <td>Kd MK</td>
        <td>Hari</td>
        <td>Ruang</td>
        <td>SMT</td>
        <td>Kelas</td>
        <td>Jam Mulai</td>
        <td>Jam Selesai</td>
        <td>Aksi</td>


    </tr>

    <?php
    include "koneksi.php";
    $sql = mysqli_query($conn, "SELECT * FROM tbl_jadwal where kd_dosen='$_SESSION[kd_dosen]'");
    $no = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>
        <tr>
            <td align='center'> <?php echo $no; ?> </td>
            <td align='center'> <?php echo $row['thn_akademik']; ?> </td>
            <td> <?php echo $row['kd_jurusan']; ?> </td>
            <td align='center'> <?php echo $row['kd_mk']; ?> </td>
            <td align='center'> <?php echo $row['hari']; ?> </td>
            <td align='center'> <?php echo $row['ruang']; ?> </td>
            <td align='center'> <?php echo $row['smt']; ?> </td>
            <td align='center'> <?php echo $row['kelas']; ?> </td>
            <td align='center'> <?php echo $row['jam_mulai']; ?> </td>
            <td align='center'> <?php echo $row['jam_selesai']; ?> </td>
            <td align='center'>
                <a href="./media.php?page=form-input-nilai&kd_jadwal=<?= $row['kd_jadwal'] ?>">Tambah Nilai</a>
				<a href="./media.php?page=form-input-absensi&kd_jadwal=<?= $row['kd_jadwal'] ?>">Tambah Absensi</a>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>