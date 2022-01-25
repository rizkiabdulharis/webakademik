<h2>Tabel Data Mata Kuliah</h2>

<button type="button" onclick=window.location.href='./media.php?page=form-matakuliah'>Tambah Data Matakuliah</button> <br><br>

<table width="100%" border="1" cellpadding="4" align="center">
    <tr align="center">
        <td>No</td>
        <td>Kd_mk</td>
        <td>Nama MK</td>
        <td>SKS</td>
        <td>Aktif</td>
        <td>Aksi</td>
    </tr>

    <?php
    include "koneksi.php";
    $sql = mysqli_query($conn, "SELECT * FROM tbl_matakuliah ");
    $no = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>
        <tr>
            <td align='center'> <?php echo $no; ?> </td>
            <td align='center'> <?php echo $row['kd_mk']; ?> </td>
            <td align='center'> <?php echo $row['nama_mk']; ?> </td>
            <td> <?php echo $row['SKS']; ?> </td>
            <td align='center'> <?php echo $row['aktif']; ?> </td>
            <td align='center'>
                <a href="media.php?page=editmatakuliah&kdmk=<?php echo $row['kd_mk']; ?>">Edit</a> |
                <a href="media.php?page=hapusmatakuliah&kdmk=<?php echo $row['kd_mk']; ?>">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>