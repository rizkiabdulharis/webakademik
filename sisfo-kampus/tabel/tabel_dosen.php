<h2>Tabel Data Dosen</h2>

<button type="button" onclick=window.location.href='./media.php?page=form-dosen'>Tambah Data Dosen</button> <br><br>

<table width="100%" border="1" cellpadding="4" cellspacing="0">
    <tr>
        <td>No</td>
        <td>Nama Dosen</td>
        <td>Jenis Kelamin</td>
        <td>Username</td>
        <td>Password</td>
        <td>Aksi</td>
    </tr>

    <?php
    include "koneksi.php";
    $sql = mysqli_query($conn, "SELECT * FROM tbl_dosen ");
    $no = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>
        <tr>
            <td align='center'> <?php echo $no; ?> </td>
            <td> <?php echo $row['nama_dosen']; ?> </td>
            <td> <?php echo $row['jenis_kelamin']; ?> </td>
            <td> <?php echo $row['username']; ?> </td>
            <td> <?php echo $row['password']; ?> </td>
            <td align='center'>
                <a href="media.php?page=editdosen&kddosen=<?php echo $row['kd_dosen']; ?>">Edit</a> |
                <a href="media.php?page=hapusdosen&kddosen=<?php echo $row['kd_dosen']; ?>">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>
</table>