<h2>Tabel Data Informasi</h2>

<button type="button" onclick=window.location.href='./media.php?page=form-informasi'>Tambah Data Informasi</button> <br><br>

<table width="100%" border="1" cellpadding="4" align="center">
    <tr align="center">
        <td>No</td>
        <td>Kd Informasi</td>
        <td>Judul</td>
        <td>Deskripsi</td>
        <td>Tanggal Upload</td>
        <td>Aksi</td>
    </tr>

    <?php
    include "koneksi.php";
    $sql = mysqli_query($conn, "SELECT * FROM tbl_informasi ");
    $no = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>
        <tr>
            <td align='center'> <?php echo $no; ?> </td>
            <td align='center'> <?php echo $row['kd_informasi']; ?> </td>
            <td> <?php echo $row['judul']; ?> </td>
            <td align='center'> <?php echo $row['deskripsi']; ?> </td>
            <td align='center'> <?php echo $row['tgl_upload']; ?> </td>
            <td align='center'>
                <a href="media.php?page=editinformasi&kdinformasi=<?php echo $row['kd_informasi']; ?>">Edit</a> |
                <a href="media.php?page=hapusinformasi&kdinformasi=<?php echo $row['kd_informasi']; ?>">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>