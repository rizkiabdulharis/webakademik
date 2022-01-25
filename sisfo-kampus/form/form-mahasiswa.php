<h2>Form Tambah Data Mahasiswa</h2>
<table border="1" width="100%">
	<form method="POST" action="" enctype="multipart/form-data">
		<tr>
			<td>No.BP</td>
			<td>: <input type="text" name="no_bp" size="10"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>: <input type="text" name="name_mhs" size="30"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>: <select name="jenis_kelamin">
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>: <select name="kd_kelas">
					<option value="SI-6">SI-6</option>
					<option value="SI-7">SI-7</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>: <select name="kd_jurusan">
					<option value="261">Sistem Informasi</option>
					<option value="262">Sistem Komputer</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>: <input type="password" name="password" size="30"></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>: <input type="file" name="foto" size="30"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>:
				<button type="submit" name="simpan">Simpan</button>
				<button type="button" onclick=window.location.href='./media.php?page=mahasiswa'>Kembali</button>
			</td>
		</tr>
	</form>
</table>

<?php
error_reporting(0);
include "koneksi.php";
$folder 	= "./foto_mahasiswa/";
$foto   	= $_FILES['foto']['name'];
$tmp_foto   = $_FILES['foto']['tmp_name'];
if (isset($_POST['simpan'])) {

	mysqli_query($conn,"INSERT INTO tbl_mahasiswa VALUES (
'$_POST[no_bp]',	
'$_POST[name_mhs]',	
'$_POST[jenis_kelamin]',	
'$_POST[kd_kelas]',	
'$_POST[kd_jurusan]',	
'$_POST[no_bp]',	
'$_POST[password]',	
'$foto',	
'Y') ");
	move_uploaded_file($tmp_foto, $folder . $_POST['no_bp'] . ".jpg");	// Upload Foto
	echo "<script>window.location.href='./media.php?page=mahasiswa'</script>";
}
?>