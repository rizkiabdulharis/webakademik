<h2>Kartu Ujian Mahasiswa</h2>

<?php
include "koneksi.php";
$sql_edit = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa WHERE no_bp='$_SESSION[no_bp]'");
$row =  mysqli_fetch_array($sql_edit);
$sql_edit1 = mysqli_query($conn, "SELECT * FROM tbl_jurusan WHERE kd_jurusan='$row[kd_jurusan]'");
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

<button type="button" onclick="window.open('report/cetak-kartu.php?no_bp=<?php echo $row['no_bp']; ?>','_blank','width=900,height=400')">Cetak Kartu Ujian</button> <br><br>

<table width="100%" border="1" cellpadding="4" cellspacing="0">
  <tr bgcolor='#f1c568'>
    <th>No</th>
    <th>Kode MK</th>
    <th>Mata Kuliah</th>
    <th>Semester</th>
    <th>Kelas</th>
    <th>SKS</th>
    <th>Lokal</th>
    <th>Dosen</th>
    <th>Hari</th>
    <th>Jam</th>
  </tr>

  <?php
  include "koneksi.php";
  $sql = mysqli_query($conn,"SELECT * FROM tbl_krs_mhs 
LEFT OUTER JOIN tbl_matakuliah ON(tbl_krs_mhs.kd_mk=tbl_matakuliah.kd_mk)
LEFT OUTER JOIN tbl_jadwal ON(tbl_krs_mhs.kd_jadwal=tbl_jadwal.kd_jadwal)
LEFT OUTER JOIN tbl_dosen ON(tbl_krs_mhs.kd_dosen=tbl_dosen.kd_dosen)
WHERE tbl_krs_mhs.no_bp='$_SESSION[no_bp]'
ORDER BY tbl_krs_mhs.id_krs ASC");
  $no = 1;
  while ($row = mysqli_fetch_array($sql)) {
  ?>
    <tr bgcolor='#FFF'>
      <td align='center'> <?php echo $no; ?> </td>
      <td align='center'> <?php echo $row['kd_mk']; ?></td>
      <td align='left'> <?php echo $row['nama_mk']; ?> </td>
      <td align='center'> <?php echo $row['semester']; ?> </td>
      <td align='center'> <?php echo $row['kelas']; ?> </td>
      <td align='center'> <?php echo $row['SKS']; ?> </td>
      <td align='center'> <?php echo $row['ruang']; ?> </td>
      <td align='left'> <?php echo $row['nama_dosen']; ?> </td>
      <td align='center'> <?php echo $row['hari']; ?> </td>
      <td align='center'> <?php echo $row['jam_mulai']; ?> - <?php echo $row['jam_selesai']; ?></td>
      
    </tr>
  <?php
    $no++;
  }
  ?>
</table>