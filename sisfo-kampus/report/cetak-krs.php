<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>
<body onLoad="window.print()">
<table class="basic"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
	<td rowspan="6"><img src="../images/logo-teknik-ok.png" width="90" height="90"></td>
    <td width="550" align="center">&nbsp;</td>
	
	<td width="65" rowspan="6"><img src="../images/logo2.png" width="90" height="90"></td>
  </tr>
  <tr>
    <td align="center"><strong><p style='margin-bottom:-9px'>UNIVERSITAS ISLAM NUSANTARA </p></strong></td>
  </tr>
  <tr>
  <td align="center"><p>Jl. Soekarno-Hatta No.530, Sekejati, Kec. Buahbatu, Kota Bandung, Jawa Barat<br> Telp. 085891382300, Kode Pos. 40286</p></td>
  </tr>   
</table>
<hr>
<center>Kartu Rencana Studi (KRS) Mahasiswa</center><br>



<?php
include "../koneksi.php";
$sql_edit = mysqli_query($conn,"SELECT * FROM tbl_mahasiswa WHERE no_bp='$_GET[no_bp]'");
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

<table width="100%" border="1" cellpadding="4" cellspacing="0">
<tr bgcolor='#f2a91c'> 
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
include"../koneksi.php";
$sql = mysqli_query($conn,"SELECT * FROM tbl_krs_mhs 
LEFT OUTER JOIN tbl_matakuliah ON(tbl_krs_mhs.kd_mk=tbl_matakuliah.kd_mk)
LEFT OUTER JOIN tbl_jadwal ON(tbl_krs_mhs.kd_jadwal=tbl_jadwal.kd_jadwal)
LEFT OUTER JOIN tbl_dosen ON(tbl_krs_mhs.kd_dosen=tbl_dosen.kd_dosen)
ORDER BY tbl_krs_mhs.id_krs ASC");
$no=1;
while($row = mysqli_fetch_array($sql)){
?>
<tr bgcolor='#FFF'>
<td align='center'> <?php echo $no; ?> </td>
<td align='center'> <?php echo $row['kd_mk']; ?></td>
<td align='left'> <?php echo $row['nama_mk']; ?> </td>
<td align='center'> <?php echo $row['semester'];?> </td>
<td align='center'> <?php echo $row['kelas'];?> </td>
<td align='center'> <?php echo $row['SKS'];?> </td>
<td align='center'> <?php echo $row['ruang'];?> </td>
<td align='left'> <?php echo $row['nama_dosen'];?> </td>
<td align='center'> <?php echo $row['hari'];?> </td>
<td align='center'> <?php echo $row['jam_mulai'];?> - <?php echo $row['jam_selesai'];?></td>
</tr>
<?php
$no++;
}
?>
</table>
