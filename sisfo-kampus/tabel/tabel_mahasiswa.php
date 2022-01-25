<h2>Tabel Data Mahasiswa</h2>

<button type="button" onclick=window.location.href='./media.php?page=form-mhs'>Tambah Data Mahasiswa</button> <br><br>

<table width="100%" border="1" cellpadding="4" cellspacing="0">
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
$sql = mysqli_query($conn,"SELECT * FROM tbl_mahasiswa ");
$no=1;
while($row = mysqli_fetch_array($sql)){
?>
<tr>
<td align='center'> <?php echo $no; ?> 					</td>
<td align='center'> <?php echo $row['no_bp']; ?> 			</td>
<td> <?php echo $row['nama_mhs']; ?>  		</td>
<td> <?php echo $row['jenis_kelamin']; ?>   </td>
<td align='center'> <?php echo $row['kd_kelas']; ?>		</td>
<td align='center'> <?php echo $row['kd_jurusan']; ?>		</td>
<td align='center'> <?php echo $row['aktif']; ?>			</td>
<td align='center'> 
<a href="media.php?page=editmahasiswa&nobp=<?php echo $row['no_bp'];?>">Edit</a> | 
<a href="media.php?page=hapusmahasiswa&nobp=<?php echo $row['no_bp'];?>">Hapus</a> |
<?php if($row['aktif']=='Y'){?>
<a href="media.php?page=nonmahasiswa&nobp=<?php echo $row['no_bp'];?>">Non Aktif</a>
<?php } else {?>
<a href="media.php?page=aktifmahasiswa&nobp=<?php echo $row['no_bp'];?>">Aktif</a>
<?php
}
?>
</td>
</tr>
<?php
$no++;
}
?>
</table>
