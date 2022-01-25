<h2>Tabel Data jurusan</h2>

<button type="button" onclick=window.location.href='./media.php?page=form-jurusan'>Tambah Data jurusan</button> <br><br>

<table width="100%" border="1" cellpadding="4" cellspacing="0">
    <tr>
        <td>No</td>
        <td>Kd Jurusan</td>
        <td>Nama Jurusan</td>
        <td>Aktif</td>
        <td>Aksi</td>
    </tr>

    <?php
    include "koneksi.php";
    $sql = mysqli_query($conn, "SELECT * FROM tbl_jurusan ");
    $no = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>
        <tr>
            <td align='center'> <?php echo $no; ?> </td>
            <td align='center'> <?php echo $row['kd_jurusan']; ?> </td>
            <td> <?php echo $row['nama_jurusan']; ?> </td>
            <td align='center'> <?php echo $row['aktif']; ?> </td>
            <td align='center'>
                <a href="media.php?page=editjurusan&kdjurusan=<?php echo $row['kd_jurusan']; ?>">Edit</a> |
                <a href="media.php?page=hapusjurusan&kdjurusan=<?php echo $row['kd_jurusan']; ?>">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>