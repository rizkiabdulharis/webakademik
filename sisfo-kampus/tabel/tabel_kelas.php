<h2>Tabel Data Kelas</h2>

<button type="button" onclick=window.location.href='./media.php?page=form-kelas'>Tambah Data Kelas</button> <br><br>

<table width="100%" border="1" cellpadding="4" align="center">
    <tr align="center">
        <td>No</td>
        <td>Kd_Kelas</td>
        <td>Nama Kelas</td>
        <td>Aktif</td>
        <td>Aksi</td>
    </tr>

    <?php
    include "koneksi.php";
    $sql = mysqli_query($conn, "SELECT * FROM tbl_kelas ");
    $no = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>
        <tr>
            <td align='center'> <?php echo $no; ?> </td>
            <td align='center'> <?php echo $row['kd_kelas']; ?> </td>
            <td> <?php echo $row['nama_kelas']; ?> </td>
            <td align='center'> <?php echo $row['aktif']; ?> </td>
            <td align='center'>
                <a href="media.php?page=editkelas&kdkelas=<?php echo $row['kd_kelas']; ?>">Edit</a> |
                <a href="media.php?page=hapuskelas&kdkelas=<?php echo $row['kd_kelas']; ?>">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>