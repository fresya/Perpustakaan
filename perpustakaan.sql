-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 08:40 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE IF NOT EXISTS `data_admin` (
  `id_admin` varchar(15) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `nama_admin`, `no_hp`, `jenis_kelamin`, `alamat`, `email`) VALUES
('11653101307', 'Yonda Firmansyah', '081275191372', 'Laki-Laki', 'Jl.Teropong', 'yondafirmansyah@gmail.com'),
('11753201975', 'rahmifr16@gmail.com', '081388436029', 'Perempuan', 'JL. Asrakarya', 'rahmifitria18@gmail.com'),
('11753202114', 'Yesha Oktinadila', '082260430431', 'Perempuan', 'JL. Teropong', 'yeshadilaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota`
--

CREATE TABLE IF NOT EXISTS `data_anggota` (
  `id_anggota` varchar(15) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` enum('X','XI','XII','') NOT NULL,
  `jatah_pinjam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id_anggota`, `nama_anggota`, `no_hp`, `jenis_kelamin`, `alamat`, `status`, `jatah_pinjam`) VALUES
('1122', 'Heggi Sugiawan', '081234668877', 'Laki-Laki', 'JL.Yos Sudarso', 'X', 2),
('1129', 'Sasmeita putri', '082216831098', 'Perempuan', 'JL. Garuda Sakti', 'XI', 3),
('1130', 'Lena Oktavianis', '085309532864', 'Perempuan', 'JL. Bangau Sakti', 'XII', 3),
('1131', 'Ichsan Ahmad Gunawan', '081154092687', 'Laki-Laki', 'JL. Garuda Sakti', 'XII', 3),
('1132', 'Ade Rahmanti Juna', '081364832694', 'Perempuan', 'JL. Garuda Sakti', 'XI', 3),
('1133', 'Agnesa Pidola', '089530927498', 'Perempuan', 'JL. Garuda Sakti', 'XI', 3),
('1134', 'Sabrina Aisyah', '081309248147', 'Perempuan', 'JL. Cipta Karya', 'XII', 3),
('1135', 'Nova Juliana', '081209380283', 'Perempuan', 'JL. Garuda Sakti', 'XII', 2),
('1177', 'Yesha Oktinadila', '082284319400', 'Laki-Laki', 'JL. Bukit Barisan', 'XI', 2),
('1253', 'Rahmatul Annisa', '082163728193', 'Perempuan', 'JL. Garuda Sakti', 'XI', 2),
('1254', 'Yolanda Afilda', '082563728173', 'Perempuan', 'JL. Garuda Sakti', 'X', 3),
('1601', 'Rahmi Fitria Rahmadhani', '085263469899', 'Perempuan', 'JL. Astakarya ', 'XII', 2),
('1657', 'Nindi Permata Riau', '082264938774', 'Perempuan', 'JL. Garuda Sakti', 'XI', 1),
('5544', 'Devi Nuraini', '081256657788', 'Perempuan', 'JL.Kapau Sari', 'X', 3),
('5566', 'Restu Ramadhan', '081345678899', 'Laki-Laki', 'Jl.Kereta Api', 'X', 1),
('5568', 'Rahma Venya', '089673387655', 'Perempuan', 'JL.Adi Sucipto', 'XII', 2),
('7766', 'Nisa Ul Khairia', '087999797979', 'Perempuan', 'JL.Tuanku Tambusai', 'XI', 2),
('7788', 'Yudi Aryanto', '082266778899', 'Laki-Laki', 'JL.Yuda Karya', 'XII', 2),
('8188', 'Rentia Hertati', '082277886654', 'Perempuan', 'JL.Sultan Syarif Kasim', 'XII', 2),
('8877', 'Andre Setiawan', '086655443322', 'Laki-Laki', 'Jl.Damai Langgeng', 'XI', 3),
('9988', 'Windi Apriliani', '081267894563', 'Perempuan', 'JL.Selamat', 'XI', 2),
('9999', 'Dede Rizaldi', '086655443322', 'Laki-Laki', 'JL.Kakap', 'XII', 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE IF NOT EXISTS `data_buku` (
  `id_buku` varchar(6) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `tahun_terbit` varchar(6) NOT NULL,
  `kota_terbit` varchar(25) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `kategori` enum('Buku','Jurnal','Tabloid','Kitab','') NOT NULL,
  `lokasi_buku` enum('Rak 1','Rak 2','Rak 3','Rak 4','Rak 5') NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `jumlah_buku` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id_buku`, `judul_buku`, `tahun_terbit`, `kota_terbit`, `penerbit`, `pengarang`, `kategori`, `lokasi_buku`, `isbn`, `jumlah_buku`) VALUES
('BKU001', 'Ekonomi', '1993', 'Alam S', 'Erlangga', 'Ucup', 'Jurnal', 'Rak 2', '55668898', '95'),
('BKU002', 'Kimia', '1993', 'Medan', 'Erlangga', 'Yonda', 'Buku', 'Rak 3', '88776655', '39'),
('BKU003', 'Pemograman Web', '2005', 'Bandung', 'Jaya Perkasa', 'Toni Wijaya', 'Tabloid', 'Rak 2', '67898765431', '14'),
('BKU005', 'Peran Pemberdayaan Ekonomi Masyarakat Pesisir', '2016', 'Yogyakarta', 'Pustaka Sahila Yogya', 'Andreas dan Enni Savitri', 'Buku', 'Rak 5', '6026950567', '2'),
('BKU006', 'Gus Dur, Santri Par Excellence', '2010', 'Jakarta', 'PT. Kompas Media', 'Zuhairi Misrawi', 'Buku', 'Rak 1', '9797094618', '42'),
('BKU007', 'Analisa SWOT: Membedah Kasus Bisnis', '2015', 'Jakarta', 'Gramedia Pustaka', 'Freddy Rangkuti', 'Kitab', 'Rak 4', '9783161987211', '17'),
('BKU008', 'Sistem Informasi Manajemen Mengelola Perusahaan ', '2016', 'Jakarta Selatan', 'Salemba Empat', 'Kennet C. Laudon', 'Buku', 'Rak 3', '9789790615502', '50'),
('BKU009', 'Biologi', '1994', 'Bandung', 'Erlangga', 'Istamar Syamsuri,DKK', 'Buku', '', '978-979-015-311-0', '49'),
('BKU010', 'Sejarah', '2016', 'Jakarta', 'CV Mediatama', 'Indah Sawitri', 'Buku', '', ' 	978-602-3449-92-7', '65'),
('BKU011', 'Kimia', '2012', 'Yogyakarta', 'Airlangga', 'Kokom', 'Buku', '', '7502983457a2', '39'),
('BKU012', 'Bahasa Idonesia', '1994', 'Bandung', 'Erlangga', 'YUDi', 'Buku', '', '34578900', '77'),
('BKU013', 'Bahasa Inggris', '1994', 'Malang', 'Erlangga', 'Nunug Waningsih', 'Buku', '', '9797094665', '13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Yonda Firmansyah', 'admin', 'admin', 'admin'),
(2, 'Yesha Oktinadila', 'admin', 'admin', 'admin'),
(22, 'Ulya Khairunnisa', 'ulyakhai', 'ulyakhai', 'user'),
(23, 'Yonda Firmansyah', 'yonda', 'admin', 'user'),
(24, 'Yesha Oktinadila', 'yesha', 'yesha', 'user'),
(26, 'Yudi Aryanto', 'yudi', 'yudi', 'user'),
(27, 'Heggi Sugiawan', 'heggi', 'heggi', 'user'),
(28, 'Andre Setiawan', 'andre', 'andre', 'user'),
(29, 'Dede Rizaldi', 'dede', 'dede', 'user'),
(30, 'Restu Ramadhan', 'restu', 'restu', 'user'),
(31, 'Windi Apriliani', 'windi', 'windi', 'user'),
(32, 'kelompok2', 'kelompok2', 'kelompok2', 'user'),
(33, 'atul', 'annisa', 'annisa', 'user'),
(34, 'nindi', 'nindi', 'nindi', 'user'),
(35, 'nindi', 'nindi', 'nindi', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_peminjaman` varchar(6) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `tanggal_peminjaman` varchar(15) NOT NULL,
  `tanggal_pengembalian` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_peminjaman`, `nama_anggota`, `judul_buku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status`) VALUES
('TRN001', 'Thesia Maharani', 'Pemograman Web', '20-06-2018', '28-06-2018', 'Kembali'),
('TRN002', 'Thesia Maharani', 'Gus Dur, Santri Par Excellence', '22-06-2018', '30-06-2018', 'Kembali'),
('TRN003', 'Eni Arsaniata', 'Pemograman Web', '01-07-2018', '08-07-2018', 'Kembali'),
('TRN004', 'Eni Arsaniata', 'Analisa SWOT: Membedah Kasus Bisnis', '11-07-2018', '18-07-2018', 'Kembali'),
('TRN005', 'Thesia Maharani', 'Analisa SWOT: Membedah Kasus Bisnis', '11-07-2018', '18-07-2018', 'Kembali'),
('TRN006', 'Ulya Khairunnisa', 'Analisa SWOT: Membedah Kasus Bisnis', '12-07-2018', '19-07-2018', 'Pinjam'),
('TRN007', 'Ulya Khairunnisa', 'Pemograman Web', '12-07-2018', '19-07-2018', 'Kembali'),
('TRN008', 'Ulya Khairunnisa', 'Peran Pemberdayaan Ekonomi Masyarakat Pesisir', '12-07-2018', '19-07-2018', 'Pinjam'),
('TRN009', 'Heggi Sugiawan', '1234567hjkl', '26-12-2018', '02-01-2019', 'Kembali'),
('TRN010', 'Dede Rizaldi', 'Pemograman Web', '11-01-2019', '18-01-2019', 'Kembali'),
('TRN011', 'Dede Rizaldi', 'Pemograman Web', '11-01-2019', '18-01-2019', 'Kembali'),
('TRN012', 'Restu Ramadhan', 'Biologi', '14-01-2019', '21-01-2019', 'Kembali'),
('TRN013', 'Yudi Aryanto', 'Gus Dur, Santri Par Excellence', '14-01-2019', '21-01-2019', 'Pinjam'),
('TRN014', 'Restu Ramadhan', 'Peran Pemberdayaan Ekonomi Masyarakat Pesisir', '14-01-2019', '21-01-2019', 'Pinjam'),
('TRN015', 'Rentia Hertati', 'Kimia', '14-01-2019', '21-01-2019', 'Pinjam'),
('TRN016', 'Rahma Venya', 'Ekonomi', '14-01-2019', '21-01-2019', 'Pinjam'),
('TRN017', 'Yesha Oktinadila', 'Analisa SWOT: Membedah Kasus Bisnis', '14-01-2019', '21-01-2019', 'Pinjam'),
('TRN018', 'Nisa Ul Khairia', 'Sejarah', '14-01-2019', '21-01-2019', 'Pinjam'),
('TRN019', 'Restu Ramadhan', 'Biologi', '14-01-2019', '21-01-2019', 'Pinjam'),
('TRN020', 'Windi Apriliani', 'Gus Dur, Santri Par Excellence', '14-01-2019', '21-01-2019', 'Pinjam'),
('TRN021', 'Rahmi Fitria Rahmadhani', 'Pemograman Web', '07-05-2019', '14-05-2019', 'Pinjam'),
('TRN022', 'anisa', 'Ekonomi', '08-05-2019', '15-05-2019', 'Pinjam'),
('TRN023', 'nindi', 'Ekonomi', '08-05-2019', '15-05-2019', 'Pinjam'),
('TRN024', 'nindi', 'Ekonomi', '08-05-2019', '15-05-2019', 'Pinjam'),
('TRN025', 'Nova Juliana', 'Bahasa Inggris', '15-05-2019', '22-05-2019', 'Pinjam'),
('TRN026', 'Heggi Sugiawan', 'Analisa SWOT: Membedah Kasus Bisnis', '15-05-2019', '22-05-2019', 'Pinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
