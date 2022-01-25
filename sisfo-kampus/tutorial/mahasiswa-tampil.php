<h2>Tabel Data Mahasiswa</h2>

<a href='mahasiswa-tambah.php'>Tambah Data Mahasiswa</a> <br><br>

<table width="100%" border="1">
<tr> 
<td>No</td> 
<td>No. BP</td> 
<td>Nama Mahasiswa</td> 
<td>Jenis Kelamin</td> 
<td>Kelas</td> 
<td>Jurusan</td> 
<td>Aktif</td> 
<td>Aksi</td> 
</tr>

<?php
include "koneksi.php";
$sql = mysql_query("SELECT * FROM tbl_mahasiswa ");
$no=1;
while($row = mysql_fetch_array($sql)){
?>
<tr>
<td> <?php echo $no; ?> 					</td>
<td> <?php echo $row['no_bp']; ?> 			</td>
<td> <?php echo $row['nama_mhs']; ?>  		</td>
<td> <?php echo $row['jenis_kelamin']; ?>   </td>
<td> <?php echo $row['kd_kelas']; ?>		</td>
<td> <?php echo $row['kd_jurusan']; ?>		</td>
<td> <?php echo $row['aktif']; ?>			</td>
<td> 
<a href="mahasiswa-edit.php?nobp=<?php echo $row['no_bp'];?>">Edit</a> | 
<a href="mahasiswa-hapus.php?nobp=<?php echo $row['no_bp'];?>">Hapus</a>
</td>
</tr>
<?php
$no++;
}
?>
</table>
