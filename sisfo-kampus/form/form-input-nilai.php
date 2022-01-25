<h2>Input Nilai Mahasiswa</h2>
<?php
include "koneksi.php";
?>

<form method='POST' action=''>
   <button><a href="./media.php?page=tabel-jadwal-dosen">Kembali</a></button>
   <br><br>
   <table width="100%" border="1" cellpadding="4" cellspacing="0">
      <tr bgcolor='#f1c568'>
         <th>#</th>
         <th>Tahun Akademik</th>
         <th>Semester</th>
         <th>No Bp</th>
         <th>Mata Kuliah</th>
         <th>Nilai Huruf</th>
         <th>Update Nilai</th>
      </tr>

      <?php
      include "koneksi.php";
      $sql = mysqli_query($conn,"SELECT * FROM tbl_krs_mhs k LEFT JOIN tbl_matakuliah m ON k.kd_mk=m.kd_mk WHERE kd_jadwal='$_GET[kd_jadwal]'");
      $no = 1;
      while ($row = mysqli_fetch_array($sql)) {
      ?>
         <tr bgcolor='#FFF'>

            <!-- Rekam Data checkboxArray Kedalam Input type checkbox  & hidden -->
         <tr bgcolor='#FFF'>
            <td align="center"> <?php echo $no; ?></td>
            <td align='center'> <?php echo $row['thn_akademik']; ?> </td>
            <td align='center'> <?php echo $row['semester']; ?> </td>
            <td align='center'> <?php echo $row['no_bp']; ?> </td>
            <td align='center'> <?php echo $row['nama_mk']; ?> </td>
            <td align='center'> <?php echo $row['nilai_huruf']; ?></td>
            <td>
               <form action="" method="POST">
                  <input type="hidden" name="id_krs" value="<?php echo $row['id_krs'] ?>">
                  <input type="text" name="nilai">
                  <button type="submit" name="update">Update</button>
               </form>
            </td>
         </tr>

      <?php
         $no++;
      }
      ?>
   </table>
   <br>
</form>

<?php
if (isset($_POST['update'])) {
   $update = mysqli_query($conn,"UPDATE tbl_krs_mhs SET nilai_huruf='$_POST[nilai]' WHERE id_krs='$_POST[id_krs]'");

   if ($update) { ?>
      <script>
         window.location.href = "./media.php?page=form-input-nilai&kd_jadwal=<?php echo $_GET['kd_jadwal'] ?>"
      </script>
<?php
   }
}
?>