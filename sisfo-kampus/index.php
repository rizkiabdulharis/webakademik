<?php
session_start();
include "koneksi.php";
if (!empty($_SESSION['username']) and !empty($_SESSION['password'])) {
	echo "<script>window.location.href='./media.php'</script>";
}
?>
<html>

<head>
	<title>SISTEM INFORMASI AKADEMIK | UPI "YPTK" PADANG</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<div id="main">
		<!--<div id="menu">
			<ul>
				<li><a href="./">Home</a></li>

				<li><a href="./media.php?page=visimisi">Visi Misi</a></li>
			</ul>
		</div>-->
		<div class="left">
<img src='images/logo-teknik-ok.PNG' width="70%">
			<?php
			include "koneksi.php";
			$sql = mysqli_query($conn, "SELECT * FROM tbl_informasi ");
			$no = 1;
			while ($row = mysqli_fetch_array($sql)) {
			?>
				<div class="left box">
					<div class="left img"><img src='images/informasi.png' width="100%"></div>
					<div class="left info">
						<h2><?php echo $row['judul']; ?></h2>
						<p>
							<?php echo $row['deskripsi']; ?>
						</p>
					</div>
				</div>

			<?php } ?>

		</div>
		<div class="right">
			<img src='images/user.png' width="100%">
			<h2>Login </h2>
			<form action="" method="POST">
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="password" placeholder="Password">
				<select name="level" class="select1">
					<option value=""> Login Sebagai </option>
					<option value="Admin">Admin</option>
					<option value="Dosen">Dosen</option>
					<option value="Mahasiswa">Mahasiswa</option>

				</select>
				<button type="submit" name="login">Login</button>
			</form>
		</div>
		<div class="footer">Copyright &copy; 2022 - universitas islam nusantara </div>
	</div>

</body>

</html>

<?php
// 1. set variabel yang dibutuhkan
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$level    = isset($_POST['level']) ? $_POST['level'] : '';
// 2. Cek apakah tombol login diklik untuk login
if (isset($_POST['login'])) {
	// 3. Buat query untuk mencari data ke tabel
	// cek level apa user yang login
	if ($level == "Mahasiswa") {
		$tabel = "tbl_mahasiswa";
		$sql = mysqli_query($conn, "SELECT * FROM $tabel 
					WHERE username='" . $username . "' AND 
					password='" . $password . "' ");
		$jml = mysqli_num_rows($sql); // Hitung jmlah record	
		$row = mysqli_fetch_array($sql);	// tampung record ke data array	
		// 4. cek berapa jml data yg ditemukan
		if ($jml > 0) {
			// Mulai Session Baru 
			session_start();
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['level'] 	  = $level;
			$_SESSION['no_bp'] 	  = $row['no_bp'];
			$_SESSION['nama'] 	  = $row['nama_mhs'];
			echo "<script>window.location.href='./media.php'</script>";
		} else {
			echo "<script>window.location.href='./?page=anda-gagal-login'</script>";
		}
	} else if ($level == "Admin") {
		$tabel = "tbl_admin";
		$sql = mysqli_query($conn, "SELECT * FROM $tabel 
					WHERE username='" . $username . "' AND 
					password='" . $password . "' ");
		$jml = mysqli_num_rows($sql); // Hitung jmlah record	
		$row = mysqli_fetch_array($sql);	// tampung record ke data array	
		// 4. cek berapa jml data yg ditemukan
		if ($jml > 0) {
			// Mulai Session Baru 
			session_start();
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['level'] 	  = $level;
			echo "<script>window.location.href='./media.php'</script>";
		} else {
			echo "<script>window.location.href='./?page=anda-gagal-login'</script>";
		}
	} else {
		$tabel = "tbl_dosen";
		$sql = mysqli_query($conn, "SELECT * FROM $tabel 
					WHERE username='" . $username . "' AND 
					password='" . $password . "' ");
		$jml = mysqli_num_rows($sql); // Hitung jmlah record	
		$row = mysqli_fetch_array($sql);	// tampung record ke data array	
		// 4. cek berapa jml data yg ditemukan
		if ($jml > 0) {
			// Mulai Session Baru 
			session_start();
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['level'] 	  = $level;
			$_SESSION['kd_dosen'] 	  = $row['kd_dosen'];

			$_SESSION['nama'] 	  = $row['nama_dosen'];
			echo "<script>window.location.href='./media.php'</script>";
		} else {
			echo "<script>window.location.href='./?page=anda-gagal-login'</script>";
		}
	}
}
?>