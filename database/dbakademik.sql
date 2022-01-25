-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2022 pada 20.04
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbakademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `kd_dosen` int(5) NOT NULL,
  `nama_dosen` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `aktif` enum('Y','T') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`kd_dosen`, `nama_dosen`, `jenis_kelamin`, `username`, `password`, `aktif`) VALUES
(4, 'rizki abdul haris, S.T', 'Laki-Laki', 'rizki', '12345', 'Y'),
(5, 'Iskandar Zulkarnain, S.T', 'Laki-Laki', 'padang', 'padang', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `kd_informasi` int(10) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `kd_jadwal` int(5) NOT NULL,
  `thn_akademik` varchar(5) DEFAULT NULL,
  `kd_dosen` varchar(5) DEFAULT NULL,
  `kd_jurusan` varchar(5) DEFAULT NULL,
  `kd_mk` varchar(15) DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `ruang` varchar(10) DEFAULT NULL,
  `smt` int(2) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `jam_mulai` varchar(5) DEFAULT NULL,
  `jam_selesai` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`kd_jadwal`, `thn_akademik`, `kd_dosen`, `kd_jurusan`, `kd_mk`, `hari`, `ruang`, `smt`, `kelas`, `jam_mulai`, `jam_selesai`) VALUES
(1, '20162', '4', '261', 'KKKK13112', 'Senin', 'Labor 3', 2, 'RPL-6', '07:45', '10:00'),
(2, '20162', '4', '261', 'KKKK13113', 'Selasa', 'H-5', 3, 'RPL-7', '07:45', '10:00'),
(3, '20162', '4', '261', 'KKKK13114', 'Rabu', 'H-6', 2, 'SI-7', '07:45', '10:00'),
(4, '20162', '4', '261', 'KKKK13115', 'Selasa', 'H-7', 2, 'RPL-7', '13:00', '15:00'),
(10, '2021', '4', '261', 'KKKK13114', 'Minggu', '10', 2, '09999', '13:00', '17:00'),
(15, '2019', '5', '261', 'KKKK13112', 'uasd', 'asduasu', 0, '17019', 'ui', 'ui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `kd_jurusan` varchar(5) NOT NULL,
  `nama_jurusan` varchar(20) NOT NULL,
  `aktif` enum('Y','T') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`kd_jurusan`, `nama_jurusan`, `aktif`) VALUES
('261', 'Teknik Informatika', 'Y'),
('262', 'industri', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `kd_kelas` varchar(5) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `aktif` enum('Y','T') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kd_kelas`, `nama_kelas`, `aktif`) VALUES
('17019', 'RPL', 'Y'),
('09999', 'RPL3 ', 'Y'),
('RPL10', 'RPL10', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_krs_mhs`
--

CREATE TABLE `tbl_krs_mhs` (
  `id_krs` int(5) NOT NULL,
  `thn_akademik` varchar(5) DEFAULT NULL,
  `semester` varchar(5) DEFAULT NULL,
  `no_bp` varchar(14) DEFAULT NULL,
  `kd_jadwal` varchar(5) DEFAULT NULL,
  `kd_mk` varchar(15) DEFAULT NULL,
  `kd_dosen` varchar(5) DEFAULT NULL,
  `nilai_huruf` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_krs_mhs`
--

INSERT INTO `tbl_krs_mhs` (`id_krs`, `thn_akademik`, `semester`, `no_bp`, `kd_jadwal`, `kd_mk`, `kd_dosen`, `nilai_huruf`) VALUES
(1, '20201', '2', 'rizki', '1', 'KKKK13112', '4', '10'),
(2, '20201', '3', 'rizki', '2', 'KKKK13113', '4', '10'),
(3, '20201', '2', 'rizki', '3', 'KKKK13114', '4', NULL),
(4, '20201', '2', 'rizki', '4', 'KKKK13115', '4', '9'),
(5, '20201', '2', 'rizki', '10', 'KKKK13114', '4', NULL),
(6, '20201', '0', 'rizki', '15', 'KKKK13112', '5', NULL),
(7, '20201', '3', 'rizki', '2', 'KKKK13113', '4', '10'),
(8, '20201', '3', 'rizki', '2', 'KKKK13113', '4', '8'),
(9, '20201', '2', 'rizki', '4', 'KKKK13115', '4', '10'),
(10, '20201', '3', '41037007191025', '2', 'KKKK13113', '4', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `no_bp` varchar(14) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `kd_kelas` varchar(5) NOT NULL,
  `kd_jurusan` varchar(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `aktif` enum('Y','T') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`no_bp`, `nama_mhs`, `jenis_kelamin`, `kd_kelas`, `kd_jurusan`, `username`, `password`, `foto`, `aktif`) VALUES
('41037007191025', 'rizki abdul hairs', 'Laki-Laki', 'SI-7', '262', '41037007191025', '12345', '', 'Y'),
('41037007191024', 'dea', 'Laki-Laki', 'SI-6', '262', '41037007191024', '12345', '', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_matakuliah`
--

CREATE TABLE `tbl_matakuliah` (
  `kd_mk` varchar(15) NOT NULL,
  `nama_mk` varchar(30) DEFAULT NULL,
  `SKS` int(2) DEFAULT NULL,
  `aktif` enum('Y','T') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_matakuliah`
--

INSERT INTO `tbl_matakuliah` (`kd_mk`, `nama_mk`, `SKS`, `aktif`) VALUES
('KKKK13112', 'Algo & Struktur Data I', 2, 'Y'),
('KKKK13113', 'Perancangan Basis Data', 2, 'Y'),
('KKKK13114', 'Bahasa Inggris', 2, 'Y'),
('KKKK13115', 'Kapita Selekta', 2, 'Y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`kd_dosen`);

--
-- Indeks untuk tabel `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`kd_informasi`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`kd_jadwal`);

--
-- Indeks untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`kd_jurusan`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indeks untuk tabel `tbl_krs_mhs`
--
ALTER TABLE `tbl_krs_mhs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indeks untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`no_bp`);

--
-- Indeks untuk tabel `tbl_matakuliah`
--
ALTER TABLE `tbl_matakuliah`
  ADD PRIMARY KEY (`kd_mk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  MODIFY `kd_dosen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `kd_informasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `kd_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_krs_mhs`
--
ALTER TABLE `tbl_krs_mhs`
  MODIFY `id_krs` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
