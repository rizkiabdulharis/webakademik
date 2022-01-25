<?php
session_start();
?>
<html>

<head>
	<title>FAKULTAS TEKNIK | UNINUS BANDUNG</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<div id="main">

		<div id="menu">
			<ul>
				<li><a href="./media.php">Home</a></li>

				<?php
				if ($_SESSION['level'] == "Dosen") {
				?>
					<li><a href="#">Akademik</a>
						<ul>

							<li><a href="./media.php?page=tabel-jadwal-dosen">Data Jadwal Kuliah</a></li>
						</ul>
					</li>
				<?php
				}
				?>
				<?php
				if ($_SESSION['level'] == "Admin") {
				?>
					<li><a href="#">Akademik</a>
						<ul>

							<li><a href="./media.php?page=mahasiswa">Data Mahasiswa</a></li>
							<li><a href="./media.php?page=dosen">Data Dosen</a></li>
							<li><a href="./media.php?page=kelas">Data Kelas</a></li>
							<li><a href="./media.php?page=jurusan">Data Jurusan</a></li>
							<li><a href="./media.php?page=jadwal">Data Jadwal Kuliah</a></li>
							<li><a href="./media.php?page=matakuliah">Data Mata Kuliah</a></li>
						</ul>
					</li>
					<li><a href="./media.php?page=informasi">FAKULTAS TEKNIK</a></li>
					<li><a href="#">Laporan</a>
						<ul>
							<li><a href="./media.php?page=laporan-mahasiswa">Laporan Data Mahasiwa</a></li>
							<li><a href="./media.php?page=laporan-dosen">Laporan Data Dosen</a></li>
							
						</ul>
					</li>
				<?php
				}
				?>

				<?php
				if ($_SESSION['level'] == "Mahasiswa") {
				?>
					<li><a href="#">Akademik</a>
						<ul>
							<li><a href="./media.php?page=krs">Kartu Rencana Studi (KRS)</a></li>
							<li><a href="./media.php?page=nilai">Kartu Hasil Studi (KHS)</a></li>
							<li><a href="./media.php?page=kartu">Kartu Ujian</a></li>
						</ul>
					</li>

				<?php
				}
				?>


				<li><a href="./media.php?page=logout">Logout</a></li>
			</ul>
		</div>

		<?php
		$page = isset($_GET['page']) ? $_GET['page'] : '';

		if ($page == "mahasiswa") {
			include "tabel/tabel_mahasiswa.php";
		} else if ($page == "form-mhs") {
			include "form/form-mahasiswa.php";
		} else if ($page == "editmahasiswa") {
			include "form/form-mahasiswa-edit.php";
		} else if ($page == "hapusmahasiswa") {
			include "form/mahasiswa-hapus.php";
		} else if ($page == "dosen") {
			include "tabel/tabel_dosen.php";
			} else if ($page == "kartu") {
			include "tabel/tabel-absen.php";
			} else if ($page == "absensi-dosen") {
			include "tabel/tabel_absensi_dosen.php";
			} else if ($page == "nonmahasiswa") {
			include "form/nonmahasiswa.php";
			} else if ($page == "aktifmahasiswa") {
			include "form/aktifmahasiswa.php";
		} else if ($page == "form-dosen") {
			include "form/form-dosen.php";
		} else if ($page == "editdosen") {
			include "form/form-dosen-edit.php";
		} else if ($page == "hapusdosen") {
			include "form/form-dosen-hapus.php";
		} else if ($page == "kelas") {
			include "tabel/tabel_kelas.php";
		} else if ($page == "form-kelas") {
			include "form/form-kelas.php";
		} else if ($page == "editkelas") {
			include "form/kelas-edit.php";
		} else if ($page == "hapuskelas") {
			include "form/kelas-hapus.php";
		} else if ($page == "jurusan") {
			include "tabel/tabel_jurusan.php";
		} else if ($page == "form-jurusan") {
			include "form/form-jurusan.php";
		} else if ($page == "editjurusan") {
			include "form/jurusan-edit.php";
		} else if ($page == "hapusjurusan") {
			include "form/jurusan-hapus.php";
		} else if ($page == "jadwal") {
			include "tabel/tabel_jadwal.php";
		} else if ($page == "form-jadwal") {
			include "form/form-jadwal.php";
		} else if ($page == "tabel-jadwal-dosen") {
			include "tabel/tabel_jadwal_dosen.php";
		} else if ($page == "form-input-nilai") {
			include "form/form-input-nilai.php";
					} else if ($page == "form-input-absensi") {
			include "form/form-input-absensi.php";
		} else if ($page == "editjadwal") {
			include "form/jadwal-edit.php";
		} else if ($page == "hapusjadwal") {
			include "form/jadwal-hapus.php";
		} else if ($page == "matakuliah") {
			include "tabel/tabel_matakuliah.php";
		} else if ($page == "form-matakuliah") {
			include "form/form-matakuliah.php";
		} else if ($page == "editmatakuliah") {
			include "form/form-matakuliah-edit.php";
		} else if ($page == "hapusmatakuliah") {
			include "form/form-matakuliah-hapus.php";
		} else if ($page == "informasi") {
			include "tabel/tabel_informasi.php";
		} else if ($page == "form-informasi") {
			include "form/informasi.php";
		} else if ($page == "editinformasi") {
			include "form/form-informasi-edit.php";
		} else if ($page == "hapusinformasi") {
			include "form/form-informasi-hapus.php";
		} else if ($page == "laporan-mahasiswa") {
			include "form/laporan-mahasiswa.php";
		} else if ($page == "laporan-dosen") {
			include "form/laporan-dosen.php";
		} else if ($page == "krs") {
			include "tabel/tabel-krs.php";
		} else if ($page == "addkrs") {
			include "form/form-krs.php";
			} else if ($page == "nilai") {
			include "tabel/tabel-nilai.php";
		} else if ($page == "krs-delete") {
			include "form/krs-delete.php";
		} else if ($page == "logout") {
			session_start();
			session_destroy();
			echo "<script>window.location.href='./'</script>";
		} else {
		?>

			<div class="left">

<img src='images/logo8.JPG' width="100%">
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
				<h2>Welcome</h2>
				<h2>
					<?php
					if ($_SESSION['level'] == "Admin") {
					?>
						Administrator
					<?php } elseif ($_SESSION['level'] == "Mahasiswa") {
						echo "$_SESSION[nama]";
					?>

					<?php } elseif ($_SESSION['level'] == "Dosen") {
						echo "$_SESSION[nama]";
					?>

					<?php } ?>
					<h2>Universitas islam nusantara</h2>
					<button type="button" onclick=window.location.href='./media.php?page=logout'>Logout</button>
			</div>

		<?php
		}
		?>

		<div class="footer">Copyright &copy; 2022 universitas islam nusantara</div>
	</div>

</body>

</html>