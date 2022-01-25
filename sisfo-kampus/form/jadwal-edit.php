<?php
include "koneksi.php";
$sql_edit = mysqli_query($conn,"SELECT * FROM tbl_jadwal WHERE kd_jadwal='$_GET[kd_jadwal]'");
$row =  mysqli_fetch_array($sql_edit);
?>
<h2>Form Edit Data Jadwal</h2>
<table border="1" width="100%">
    <form method="POST" action="" enctype="multipart/form-data">
        <tr>
            <td>Kd Jadwal</td>
            <td>: <input type="int" name="kd_jadwal" size="10" value="<?php echo $row['kd_jadwal'] ?>"></td>
        </tr>
        <tr>
            <td>Tahun Akademik</td>
            <td>: <input type="text" name="thn_akademik" size="10" value="<?php echo $row['thn_akademik'] ?>"></td>
        </tr>
        <tr>
            <td>Dosen</td>
            <td>:
                <select name="kd_dosen">
                    <?php
                    include "koneksi.php";
                    $result = mysqli_query($conn,"select * from tbl_dosen");
                    while ($data = mysqli_fetch_array($result)) {
                        var_dump($data);
                    ?>
                        <option value="<?php echo $data['kd_dosen'] ?>"><?php echo $data['nama_dosen'] ?></option>
                    <?php } ?>
                </select>
                <script>
                    document.getElementsByName('kd_dosen')[0].value = "<?php echo $row['kd_dosen'] ?>";
                </script>
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:
                <select name="kd_jurusan">
                    <?php
                    include "koneksi.php";
                    $result = mysql_query("select * from tbl_jurusan");
                    while ($data = mysql_fetch_array($result)) {
                        var_dump($data);
                    ?>
                        <option value="<?php echo $data['kd_jurusan'] ?>"><?php echo $data['nama_jurusan'] ?></option>
                    <?php } ?>
                </select>
                <script>
                    document.getElementsByName('kd_jurusan')[0].value = "<?php echo $row['kd_jurusan'] ?>";
                </script>
            </td>
        </tr>
        <tr>
            <td>Kd MK</td>
            <td> <input type="text" name="kd_mk" size="30" value="<?php echo $row['kd_mk'] ?>"></td>
        </tr>
        <tr>
            <td>Hari</td>
            <td>: <input type="text" name="hari" size="30" value="<?php echo $row['hari'] ?>"></td>
        </tr>
        <tr>
            <td>Ruang</td>
            <td>: <input type="text" name="Ruang" size="30" value="<?php echo $row['ruang'] ?>"></td>
        </tr>
        <tr>
            <td>SMT</td>
            <td>: <input type="int" name="smt" size="30" value="<?php echo $row['smt'] ?>"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:
                <select name="kd_kelas">
                    <?php
                    include "koneksi.php";
                    $result = mysql_query("select * from tbl_kelas");
                    while ($data = mysql_fetch_array($result)) {
                        var_dump($data);
                    ?>
                        <option value="<?php echo $data['kd_kelas'] ?>"><?php echo $data['nama_kelas'] ?></option>
                    <?php } ?>
                </select>
                <script>
                    document.getElementsByName('kd_kelas')[0].value = "<?php echo $row['kd_kelas'] ?>";
                </script>
            </td>
        </tr>
        <tr>
            <td>Jam Mulai</td>
            <td>: <input type="text" name="jam_mulai" size="30" value="<?php echo $row['jam_mulai'] ?>"></td>></td>
        </tr>
        <tr>
            <td>Jam Selesai</td>
            <td>: <input type="text" name="jam_selesai" size="30" value="<?php echo $row['jam_selesai'] ?>"></td>></td>
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
if (isset($_POST['simpan'])) {
    include "koneksi.php";
    mysql_query("UPDATE tbl_jadwal SET thn_akademik='$_POST[thn_akademik]',		
kd_jadwal='$_POST[kd_jadwal]',
kd_dosen='$_POST[kd_dosen]',
kd_jurusan='$_POST[kd_jurusan]',
kd_mk='$_POST[kd_mk]',
kd_hari='$_POST[hari]',
kd_ruang='$_POST[ruang]',
kd_smt='$_POST[smt]',
kd_kelas='$_POST[kelas]',
jam_mulai='$_POST[jam_mulai]',
jam_selesai='$_POST[jam_selesai]',
WHERE kd_jadwal='$_POST[kd_jadwal]'");
    echo "< script>window.location.href='./media.php?page=jadwal'</>";
}
?>