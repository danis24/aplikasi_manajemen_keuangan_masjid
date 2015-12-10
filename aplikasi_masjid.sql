-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Des 2015 pada 12.43
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aplikasi_masjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_kas`
--

CREATE TABLE IF NOT EXISTS `log_kas` (
`id` int(11) NOT NULL,
  `aktifitas` varchar(20) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `id_kas` varchar(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `ket` text,
  `pemasukan` int(11) DEFAULT NULL,
  `pengeluaran` int(11) DEFAULT NULL,
  `sesi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_kas`
--

INSERT INTO `log_kas` (`id`, `aktifitas`, `waktu`, `id_kas`, `tanggal`, `ket`, `pemasukan`, `pengeluaran`, `sesi`) VALUES
(5, 'Hapus Data', '2015-11-25 08:19:16', 'K00001', '2015-11-25', 'duka', 3000000, 0, 'Danis Yogaswara'),
(6, 'Tambah Data', '2015-11-25 08:23:34', 'K00001', '2015-11-25', 'bang ocit', 200000, 0, 'Danis Yogaswara'),
(7, 'Tambah Data', '2015-11-25 08:29:52', 'K00002', '2015-11-25', 'cingcang', 0, 20000, 'Danis Yogaswara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_zakat_fitrah`
--

CREATE TABLE IF NOT EXISTS `log_zakat_fitrah` (
`id` int(11) NOT NULL,
  `aktifitas` varchar(50) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `id_zakat` varchar(10) DEFAULT NULL,
  `jenis` varchar(15) DEFAULT NULL,
  `jumlah` float DEFAULT NULL,
  `sesi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_zakat_fitrah`
--

INSERT INTO `log_zakat_fitrah` (`id`, `aktifitas`, `waktu`, `id_zakat`, `jenis`, `jumlah`, `sesi`) VALUES
(7, 'Hapus Data', '2015-11-25 08:19:35', 'ZF00001', 'Uang', 150000, 'Danis Yogaswara'),
(8, 'Hapus Data', '2015-11-25 08:19:35', 'ZF00002', 'Uang', 20000, 'Danis Yogaswara'),
(9, 'Hapus Data', '2015-11-25 08:19:35', 'ZF00003', 'Uang', 150000, 'Danis Yogaswara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_zakat_mal`
--

CREATE TABLE IF NOT EXISTS `log_zakat_mal` (
`id` int(11) NOT NULL,
  `aktifitas` varchar(50) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `id_zakat` varchar(10) DEFAULT NULL,
  `jumlah` float DEFAULT NULL,
  `sesi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_zakat_mal`
--

INSERT INTO `log_zakat_mal` (`id`, `aktifitas`, `waktu`, `id_zakat`, `jumlah`, `sesi`) VALUES
(4, 'Delete Data', '2015-11-25 08:19:42', 'ZM00001', 15000000, 'Danis Yogaswara'),
(5, 'Delete Data', '2015-11-25 08:19:42', 'ZM00002', 300000000, 'Danis Yogaswara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
  `id_operator` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(75) DEFAULT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_operator`, `nama`, `username`, `password`, `level`) VALUES
('U00001', 'Danis Yogaswara', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('U00002', 'ado', 'ado', '421359a899e6aeb972c11a26fb52ad15', 'operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kas_masjid`
--

CREATE TABLE IF NOT EXISTS `tbl_kas_masjid` (
  `id_kas` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `ket` text NOT NULL,
  `pemasukan` varchar(10) DEFAULT NULL,
  `pengeluaran` varchar(10) DEFAULT NULL,
  `session` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kas_masjid`
--

INSERT INTO `tbl_kas_masjid` (`id_kas`, `tanggal`, `ket`, `pemasukan`, `pengeluaran`, `session`) VALUES
('K00001', '2015-11-25', 'bang ocit', '200000', '0', 'Danis Yogaswara'),
('K00002', '2015-11-25', 'cingcang', '0', '20000', 'Danis Yogaswara');

--
-- Trigger `tbl_kas_masjid`
--
DELIMITER //
CREATE TRIGGER `delete_kas` AFTER DELETE ON `tbl_kas_masjid`
 FOR EACH ROW INSERT INTO log_kas(aktifitas, waktu, id_kas, tanggal, ket, pemasukan, pengeluaran, sesi)
VALUES('Hapus Data', NOW(), OLD .id_kas, OLD .tanggal, OLD .ket, OLD .pemasukan, OLD .pengeluaran, OLD .SESSION)
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `insert_kas` AFTER INSERT ON `tbl_kas_masjid`
 FOR EACH ROW INSERT INTO log_kas(aktifitas, waktu, id_kas, tanggal, ket, pemasukan, pengeluaran, sesi)
VALUES('Tambah Data', NOW(), NEW .id_kas, NEW .tanggal, NEW .ket, NEW .pemasukan, NEW .pengeluaran, NEW .SESSION)
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `update_kas` AFTER UPDATE ON `tbl_kas_masjid`
 FOR EACH ROW INSERT INTO log_kas(aktifitas, waktu, id_kas, tanggal, ket, pemasukan, pengeluaran, sesi)
VALUES('Update Data', NOW(), NEW .id_kas, OLD .tanggal, OLD .ket, OLD .pemasukan, OLD .pengeluaran, NEW .SESSION)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_petugas`
--

CREATE TABLE IF NOT EXISTS `tbl_petugas` (
  `kd_petugas` varchar(10) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `nm_petugas` varchar(25) NOT NULL,
  `tmpt_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `thn_jabatan` varchar(5) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`kd_petugas`, `no_ktp`, `nm_petugas`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `jk`, `jabatan`, `no_telpon`, `status`, `thn_jabatan`, `foto`) VALUES
('P00001', '1137050062', 'Danis Yogaswara', 'Bandung', '1970-01-01', 'cibiru', 'Perempuan', 'J00001', '089602687905', 'Aktif', '2015', 'DANIS.jpg'),
('P00002', '54645874545', 'Nikita Suci Ramadanti', 'Bandung', '1970-01-02', 'cibiru', 'Perempuan', 'J00002', '089602689544', 'Aktif', '2015', '2013-02-03 11.49.36.jpg'),
('P00003', '5454654548', 'Bismar', 'Sukabumi', '1995-12-09', 'sukabumi', 'Laki - Laki', 'J00003', '089602689544', 'Aktif', '2015', '12193840_1728391680713037_3481877426810895204_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_struk_jabatan`
--

CREATE TABLE IF NOT EXISTS `tbl_struk_jabatan` (
  `kd_jab` varchar(15) NOT NULL,
  `nm_jab` varchar(20) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_struk_jabatan`
--

INSERT INTO `tbl_struk_jabatan` (`kd_jab`, `nm_jab`, `ket`) VALUES
('J00001', 'Ketua DKM', 'Dewan Kemakmuran Masjid'),
('J00002', 'Sekretaris', 'Juru Tulis'),
('J00003', 'Bendahara', 'Juru Uang'),
('J00004', 'Kebersihan', 'Tukang Bebersihan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_zakat`
--

CREATE TABLE IF NOT EXISTS `tbl_zakat` (
  `id_zakat` varchar(10) NOT NULL,
  `jenis_zakat` varchar(10) DEFAULT NULL,
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_zakat_fitrah`
--

CREATE TABLE IF NOT EXISTS `tbl_zakat_fitrah` (
  `id_zakat_fitrah` varchar(10) NOT NULL,
  `petugas` varchar(10) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `nama_pembayar` varchar(50) DEFAULT NULL,
  `alamat` text,
  `telpon` varchar(15) DEFAULT NULL,
  `jenis` varchar(15) DEFAULT NULL,
  `satuan` float DEFAULT NULL,
  `jiwa` int(11) DEFAULT NULL,
  `jumlah` float DEFAULT NULL,
  `session` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `tbl_zakat_fitrah`
--
DELIMITER //
CREATE TRIGGER `delete_zakat_fitrah` AFTER DELETE ON `tbl_zakat_fitrah`
 FOR EACH ROW INSERT INTO log_zakat_fitrah(aktifitas, waktu, id_zakat, jenis, jumlah, sesi)
VALUES('Hapus Data', NOW(), OLD .id_zakat_fitrah, OLD .jenis, OLD .jumlah, OLD .SESSION)
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `insert_zakat_fitrah` AFTER INSERT ON `tbl_zakat_fitrah`
 FOR EACH ROW INSERT INTO log_zakat_fitrah(aktifitas, waktu, id_zakat, jenis, jumlah, sesi)
VALUES('Tambah Data', NOW(), NEW .id_zakat_fitrah, NEW .jenis, NEW .jumlah, NEW .SESSION)
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `update_zakat_fitrah` AFTER UPDATE ON `tbl_zakat_fitrah`
 FOR EACH ROW INSERT INTO log_zakat_fitrah(aktifitas, waktu, id_zakat, jenis, jumlah, sesi)
VALUES('Update Data', NOW(), NEW .id_zakat_fitrah, OLD .jenis, OLD .jumlah, OLD .SESSION)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_zakat_mal`
--

CREATE TABLE IF NOT EXISTS `tbl_zakat_mal` (
  `id_zakat_mal` varchar(10) NOT NULL,
  `petugas` varchar(10) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `nama_pembayar` varchar(50) DEFAULT NULL,
  `alamat` text,
  `telpon` varchar(15) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `session` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `tbl_zakat_mal`
--
DELIMITER //
CREATE TRIGGER `delete_zakat_mal` AFTER DELETE ON `tbl_zakat_mal`
 FOR EACH ROW INSERT INTO log_zakat_mal(aktifitas, waktu, id_zakat, jumlah, sesi)
VALUES('Delete Data', NOW(), OLD .id_zakat_mal, OLD .jumlah, OLD .SESSION)
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `insert_zakat_mal` AFTER INSERT ON `tbl_zakat_mal`
 FOR EACH ROW INSERT INTO log_zakat_mal(aktifitas, waktu, id_zakat, jumlah, sesi)
VALUES('Tambah Data', NOW(), NEW .id_zakat_mal, NEW .jumlah, NEW .SESSION)
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `update_zakat_mal` AFTER UPDATE ON `tbl_zakat_mal`
 FOR EACH ROW INSERT INTO log_zakat_mal(aktifitas, waktu, id_zakat, jumlah, sesi)
VALUES('Update Data', NOW(), NEW .id_zakat_mal, OLD .jumlah, NEW .SESSION)
//
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_kas`
--
ALTER TABLE `log_kas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_zakat_fitrah`
--
ALTER TABLE `log_zakat_fitrah`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `log_zakat_mal`
--
ALTER TABLE `log_zakat_mal`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
 ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `tbl_kas_masjid`
--
ALTER TABLE `tbl_kas_masjid`
 ADD PRIMARY KEY (`id_kas`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
 ADD PRIMARY KEY (`kd_petugas`);

--
-- Indexes for table `tbl_struk_jabatan`
--
ALTER TABLE `tbl_struk_jabatan`
 ADD PRIMARY KEY (`kd_jab`);

--
-- Indexes for table `tbl_zakat`
--
ALTER TABLE `tbl_zakat`
 ADD PRIMARY KEY (`id_zakat`);

--
-- Indexes for table `tbl_zakat_fitrah`
--
ALTER TABLE `tbl_zakat_fitrah`
 ADD PRIMARY KEY (`id_zakat_fitrah`);

--
-- Indexes for table `tbl_zakat_mal`
--
ALTER TABLE `tbl_zakat_mal`
 ADD PRIMARY KEY (`id_zakat_mal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_kas`
--
ALTER TABLE `log_kas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `log_zakat_fitrah`
--
ALTER TABLE `log_zakat_fitrah`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `log_zakat_mal`
--
ALTER TABLE `log_zakat_mal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
