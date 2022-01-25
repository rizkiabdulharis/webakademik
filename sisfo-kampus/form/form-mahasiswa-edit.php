<?php
include"koneksi.php";
$sql_edit = mysqli_query($conn,"SELECT * FROM tbl_mahasiswa WHERE no_bp='$_GET[nobp]'");
$row =  mysqli_fetch_array($sql_edit);
?>

<h2>Form Edit Data Mahasiswa</h2>
<table border="1" width="100%">
<form method="POST" action="" enctype="multipart/form-data">
<tr> <td>No.BP</td> <td>: <input type="text" name="no_bp" value="<?php echo $row['no_bp'];?>" size="10"></td></tr>
<tr> <td>Nama</td> <td>: <input type="text" name="nama_mhs" value="<?php echo $row['nama_mhs'];?>" size="30"></td></tr>
<tr> <td>Jenis Kelamin</td> <td>: <select name="jenis_kelamin">
							<?php 
							if($row['jenis_kelamin']=="Laki-Laki"){$selected1="selected";}else{$selected1="";}
							if($row['jenis_kelamin']=="Perempuan"){$selected2="selected";}else{$selected2="";}
							?>
							<option value="Laki-Laki" <?php echo $selected1;?> >Laki-Laki</option>
							<option value="Perempuan" <?php echo $selected2;?> >Perempuan</option>
							</select>
							</td></tr>
<tr> <td>Kelas</td> <td>: <select name="kd_kelas">
							<?php 
							if($row['kd_kelas']=="SI-6"){$kelas1="selected";}else{$kelas1="";}
							if($row['kd_kelas']=="SI-7"){$kelas2="selected";}else{$kelas2="";}
							?>
							<option value="SI-6" <?php echo $kelas1;?> >SI-6</option>
							<option value="SI-7" <?php echo $kelas2;?> >SI-7</option>
						  </select>
						  </td></tr>
<tr> <td>Jurusan</td> <td>: <select name="kd_jurusan">
							<option value="261">Sistem Informasi</option>
							<option value="262">Sistem Komputer</option>
						  </select>
						  </td></tr>						  
<tr> <td>Password</td> <td>: <input type="password" name="password" size="30"></td></tr>						  
<tr> <td>Foto</td> <td>: <input type="file" name="foto" size="30"></td></tr>						  
<tr> <td>&nbsp;</td> <td>: <button type="submit" name="simpan">Simpan</button> 
<button type="button" onclick=window.location.href='./media.php?page=mahasiswa'>Kembali</button>
</td></tr>						  
</form>
</table>

<?php
error_reporting(0);
include"koneksi.php";
$folder 	= "./foto_mahasiswa/";
$foto   	= $_FILES['foto']['name'];
$tmp_foto   = $_FILES['foto']['tmp_name'];
if(isset($_POST['simpan'])){
	mysqli_query($conn,"UPDATE tbl_mahasiswa SET nama_mhs='$_POST[nama_mhs]',	
jenis_kelamin='$_POST[jenis_kelamin]',	
kd_kelas='$_POST[kd_kelas]',	
kd_jurusan='$_POST[kd_jurusan]',	
no_bp='$_POST[no_bp]',	
password='$_POST[password]',	
foto='$foto',	
aktif='Y' WHERE no_bp='$_POST[no_bp]' ");
move_uploaded_file($tmp_foto,$folder.$_POST['no_bp'].".jpg");	// Upload Foto
echo"<script>window.location.href='./media.php?page=mahasiswa'</script>";
}
?>




