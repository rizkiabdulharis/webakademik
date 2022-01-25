-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jan 2020 pada 03.54
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbakademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id_admin` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen`
--

CREATE TABLE IF NOT EXISTS `tbl_dosen` (
`kd_dosen` int(5) NOT NULL,
  `nama_dosen` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `aktif` enum('Y','T') DEFAULT 'Y'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`kd_dosen`, `nama_dosen`, `jenis_kelamin`, `username`, `password`, `aktif`) VALUES
(4, 'Fajri,S.Kom', 'Laki-Laki', 'fajri435', 'fajri', 'Y'),
(5, 'Iskandar Zulkarnain, M.Kom', 'Laki-Laki', 'padang', 'padang', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_informasi`
--

CREATE TABLE IF NOT EXISTS `tbl_informasi` (
`kd_informasi` int(10) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`kd_informasi`, `judul`, `deskripsi`, `tgl_upload`) VALUES
(2, 'Jadwal Libur', ' zaa', '2020-01-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`kd_jadwal`, `thn_akademik`, `kd_dosen`, `kd_jurusan`, `kd_mk`, `hari`, `ruang`, `smt`, `kelas`, `jam_mulai`, `jam_selesai`) VALUES
(1, '20162', '4', '261', 'KKKK13112', 'Senin', 'Labor 3', 2, 'SI-6', '07:45', '10:00'),
(2, '20162', '4', '261', 'KKKK13113', 'Selasa', 'H-5', 3, 'SI-7', '07:45', '10:00'),
(3, '20162', '4', '261', 'KKKK13114', 'Rabu', 'H-6', 2, 'SI-7', '07:45', '10:00'),
(4, '20162', '4', '261', 'KKKK13115', 'Selasa', 'H-7', 2, 'SI-7', '13:00', '15:00'),
(10, '2021', '4', '261', 'KKKK13114', 'Minggu', '10', 2, '09999', '13:00', '17:00'),
(15, '2019', '5', '261', 'KKKK13112', 'uasd', 'asduasu', 0, '17019', 'ui', 'ui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE IF NOT EXISTS `tbl_jurusan` (
  `kd_jurusan` varchar(5) NOT NULL,
  `nama_jurusan` varchar(20) NOT NULL,
  `aktif` enum('Y','T') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`kd_jurusan`, `nama_jurusan`, `aktif`) VALUES
('261', 'Sistem Informasi', 'Y'),
('262', 'Sistem Komputer', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE IF NOT EXISTS `tbl_kelas` (
  `kd_kelas` varchar(5) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `aktif` enum('Y','T') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kd_kelas`, `nama_kelas`, `aktif`) VALUES
('17019', 'TKJ2 ', 'Y'),
('09999', 'RPL3 ', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_krs_mhs`
--

CREATE TABLE IF NOT EXISTS `tbl_krs_mhs` (
`id_krs` int(5) NOT NULL,
  `thn_akademik` varchar(5) DEFAULT NULL,
  `semester` varchar(5) DEFAULT NULL,
  `no_bp` varchar(14) DEFAULT NULL,
  `kd_jadwal` varchar(5) DEFAULT NULL,
  `kd_mk` varchar(15) DEFAULT NULL,
  `kd_dosen` varchar(5) DEFAULT NULL,
  `nilai_huruf` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_mahasiswa` (
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
('170199', 'Muhammad Fajri1', 'Laki-Laki', 'SI-7', '261', '170199', '12345', '', 'Y'),
('11101152630121', 'Joko Iskandar', 'Laki-Laki', 'SI-6', '262', '11101152630121', '12345', 'nofoto.jpg', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_matakuliah`
--

CREATE TABLE IF NOT EXISTS `tbl_matakuliah` (
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
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
 ADD PRIMARY KEY (`kd_dosen`);

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
 ADD PRIMARY KEY (`kd_informasi`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
 ADD PRIMARY KEY (`kd_jadwal`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
 ADD PRIMARY KEY (`kd_jurusan`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
 ADD PRIMARY KEY (`kd_kelas`);

--
-- Indexes for table `tbl_krs_mhs`
--
ALTER TABLE `tbl_krs_mhs`
 ADD PRIMARY KEY (`id_krs`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
 ADD PRIMARY KEY (`no_bp`);

--
-- Indexes for table `tbl_matakuliah`
--
ALTER TABLE `tbl_matakuliah`
 ADD PRIMARY KEY (`kd_mk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
MODIFY `kd_dosen` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
MODIFY `kd_informasi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
MODIFY `kd_jadwal` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_krs_mhs`
--
ALTER TABLE `tbl_krs_mhs`
MODIFY `id_krs` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
