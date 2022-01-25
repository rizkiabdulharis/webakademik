<h2>Form Tambah Data Jadwal</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
        <tr>
            <td>Tahun Akademik</td>
            <td>:<input type="text" name="thn_akademik" size="10"></td>
        </tr>
        
        
        <tr>
            <td>Dosen</td>
            <td>:<select name="kd_dosen" id="kd_dosen">
                    <option value="">- Pilih -</option>
                    <?php
                    include "koneksi.php";
                    $result = mysqli_query($conn,"select * from tbl_dosen");
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="' . $row['kd_dosen'] . '">' . $row['nama_dosen'] . '</option>';
                    }

                    ?>
                </select></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:<select name="kd_jurusan" id="kd_jurusan">
                    <option value="">- Pilih -</option>
                    <?php
                    include "koneksi.php";
                    $result = mysqli_query($conn,"select * from tbl_jurusan");
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="' . $row['kd_jurusan'] . '">' . $row['nama_jurusan'] . '</option>';
                    }

                    ?>
                </select></td>
        </tr>
        <tr>
            <td>Kd MK</td>
            <td>:<select name="kd_mk" id="kd_mk">
                    <option value="">- Pilih -</option>
                    <?php
                    include "koneksi.php";
                    $result = mysqli_query($conn,"select * from tbl_matakuliah");
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="' . $row['kd_mk'] . '">' . $row['nama_mk'] . '</option>';
                    }

                    ?>
                </select></td>

        <tr>
            <td>Hari</td>
            <td>: <input type="text" name="hari" size="30"></td>
        </tr>
        <tr>
            <td>Ruang</td>
            <td>: <input type="text" name="ruang" size="30"></td>
        </tr>
        <tr>
            <td>SMT</td>
            <td>: <input type="int" name="smt" size="30"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:<select name="kd_kelas" id="kd_kelas">
                    <option value="">- Pilih -</option>
                    <?php
                    include "koneksi.php";
                    $result = mysqli_query($conn,"select * from tbl_kelas");
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="' . $row['kd_kelas'] . '">' . $row['nama_kelas'] . '</option>';
                    }

                    ?>
                </select></td>
        </tr>
        <tr>
            <td>Jam Mulai</td>
            <td>: <input type="text" name="jam_mulai" size="30"></td>
        </tr>
        <tr>
            <td>Jam Selesai</td>
            <td>: <input type="text" name="jam_selesai" size="30"></td>
        </tr>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>:
                <button type="submit" name="simpan">Simpan</button>
                <button type="button" onclick=window.location.href='./media.php?page=jadwal'>Kembali</button>
            </td>
        </tr>
    </form>
</table>

<?php
error_reporting(0);
include "koneksi.php";
if (isset($_POST['simpan'])) {
    mysqli_query($conn,"INSERT INTO tbl_jadwal VALUES (
'',	
'$_POST[thn_akademik]',	
'$_POST[kd_dosen]',		
'$_POST[kd_jurusan]',
'$_POST[kd_mk]',
'$_POST[hari]',
'$_POST[ruang]',
'$_POST[smt]',
'$_POST[kd_kelas]',
'$_POST[jam_mulai]',
'$_POST[jam_selesai]') ");
    echo "<script>window.location.href='./media.php?page=jadwal'</script>";
}
?>