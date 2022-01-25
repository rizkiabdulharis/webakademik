<h2>Kartu Rencana Studi (KRS) Mahasiswa</h2>
<?php
include "koneksi.php";
$sql_edit = mysqli_query($conn,"SELECT * FROM tbl_mahasiswa WHERE no_bp='$_SESSION[no_bp]'");
$row =  mysqli_fetch_array($sql_edit);
$sql_edit1 = mysqli_query($conn,"SELECT * FROM tbl_jurusan WHERE kd_jurusan='$row[kd_jurusan]'");
$row1 =  mysqli_fetch_array($sql_edit1);
?>

<table width="30%" border="1" cellpadding="4" cellspacing="0">
   <tr>
      <td bgcolor='#f8d894'>NIM</td>
      <td>: <?php echo $row['no_bp']; ?></td>
   </tr>
   <tr>
      <td bgcolor='#f8d894'>Nama</td>
      <td>: <?php echo $row['nama_mhs']; ?></td>
   </tr>
   <tr>
      <td bgcolor='#f8d894'>Jurusan</td>
      <td>: <?php echo $row['kd_jurusan']; ?> - <?php echo $row1['nama_jurusan']; ?></td>
   </tr>
</table>

<br>
<form method='POST' action=''>
   <table width="100%" border="1" cellpadding="4" cellspacing="0">
      <tr bgcolor='#f1c568'>
         <th>#</th>
         <th>Smt</th>
         <th>Kelas</th>
         <th>Kode MK</th>
         <th>Mata Kuliah</th>
         <th>SKS</th>
         <th>Lokal</th>
         <th>Dosen</th>
         <th>Hari</th>
         <th>Jam</th>
      </tr>

      <?php
      include "koneksi.php";
      $sql = mysqli_query($conn,"SELECT * FROM tbl_jadwal 
LEFT OUTER JOIN tbl_matakuliah ON(tbl_jadwal.kd_mk=tbl_matakuliah.kd_mk)
LEFT OUTER JOIN tbl_dosen ON(tbl_jadwal.kd_dosen=tbl_dosen.kd_dosen)

ORDER BY tbl_jadwal.kd_jadwal ASC");
      $no = 1;
      while ($row = mysqli_fetch_array($sql)) {
      ?>
         <tr bgcolor='#FFF'>

            <!-- Rekam Data checkboxArray Kedalam Input type checkbox  & hidden -->
         <tr bgcolor='#FFF'>
            <td align='center'> <input type="checkbox" name="pilihan[]" value="<?php echo $no; ?>"> </td>
            <td align='center'> <?php echo $row['smt']; ?> </td>
            <td align='center'> <?php echo $row['kelas']; ?> </td>
            <td align='center'> <?php echo $row['kd_mk']; ?> </td>
            <td align='center'> <?php echo $row['nama_mk']; ?> </td>
            <td align='center'> <?php echo $row['SKS']; ?> </td>
            <td align='center'> <?php echo $row['ruang']; ?> </td>
            <td align='center'> <?php echo $row['kd_dosen']; ?> </td>
            <td align='center'> <?php echo $row['hari']; ?> </td>
            <td align='center'> <?php echo $row['jam_mulai']; ?> - <?php echo $row['jam_selesai']; ?> </td>
         </tr>

         <?php echo "<input type='hidden' name='semester" . $no . "' value='" . $row['smt'] . "'>"; ?>
         <?php echo "<input type='hidden' name='kd_jadwal" . $no . "' value='" . $row['kd_jadwal'] . "'>"; ?>
         <?php echo "<input type='hidden' name='kd_mk" . $no . "' value='" . $row['kd_mk'] . "'>"; ?>
         <?php echo "<input type='hidden' name='kd_dosen" . $no . "' value='" . $row['kd_dosen'] . "'>"; ?>


      <?php
         $no++;
      }
      ?>
   </table>
   <br>
   <button type="submit" name="simpan">Ambil KRS</button>
   <button type="button" onclick=window.location.href='./media.php?page=krs'>Kembali</button>
</form>

<?php
if (isset($_POST['simpan'])) {
   $pilihan = $_POST['pilihan'];

   foreach ($pilihan as $pilih) {
      $nim = $_SESSION['username'];
      $thn = 20201;
      $smt = $_POST['semester' . $pilih];
      $kd_jadwal = $_POST['kd_jadwal' . $pilih];
      $kd_mk = $_POST['kd_mk' . $pilih];
      $kd_dosen = $_POST['kd_dosen' . $pilih];

      mysqli_query($conn,"INSERT INTO tbl_krs_mhs (thn_akademik,semester,no_bp,kd_jadwal,kd_mk,kd_dosen) VALUES ('$thn','$smt','$nim','$kd_jadwal','$kd_mk','$kd_dosen')");
   }
   echo "<script>window.location.href='./media.php?page=krs'</script>";
}
?>