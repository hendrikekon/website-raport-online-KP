-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 02:39 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `min_8_ngawi`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` varchar(20) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` varchar(25) NOT NULL,
  `jns_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `jns_kelamin`, `alamat`, `no_telp`, `username`, `password`) VALUES
('G01', '197409151999031005', 'NURKULIS', 'TULUNGAGUNG', '15/09/1974', 'LAKI - LAKI', 'Dsn. Balepanjang RT.001 RW.006 Ds. Jogorogo Kec. Jogorogo Kab. Ngawi', '', 'nukulis', 'nurkulis'),
('G02', '197704172000032001', 'RINA YUNAIDA', 'BLITAR', '17/04/1977', 'PEREMPUAN', 'Perum Bumi Karangasri Blok C2 No. 3 Ds. Karangasri Kec. Ngawi Kab. Ngawi', '', 'rina', 'rina'),
('G03', '196707132007012026', 'AINUR ROCHMAH', 'NGAWI', '13/07/1967', 'PEREMPUAN', 'Dsn. Gelung RT.001 RW.002 Ds. Gelung Kec. Paron Kab. Ngawi', '', 'ainur', 'ainur');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(15) NOT NULL,
  `nama_kelas` varchar(5) NOT NULL,
  `id_th_ajaran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_th_ajaran`) VALUES
('19/20-1A-2', '1A', '2019-2020-GNP'),
('19/20-1B-2', '1B', '2019-2020-GNP');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `id_kls_siswa` varchar(10) NOT NULL,
  `id_kelas` varchar(15) NOT NULL,
  `id_siswa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`id_kls_siswa`, `id_kelas`, `id_siswa`) VALUES
('KS1', '19/20-1A-2', 'S1901'),
('KS2', '19/20-1A-2', 'S1902'),
('KS3', '19/20-1A-2', 'S1903');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `kd_mapel` varchar(10) NOT NULL,
  `nama_pelajaran` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`kd_mapel`, `nama_pelajaran`) VALUES
('MP1', 'Bahasa Indonesia'),
('MP2', 'PPKN'),
('MP3', 'Matematika'),
('MP4', 'Ilmu Pengetahuan Alam'),
('MP5', 'Ilmu Pengetahuan Sosial'),
('MP6', 'Seni Budaya');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_uts_uas`
--

CREATE TABLE `nilai_uts_uas` (
  `id_nilai` int(10) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `id_guru` varchar(20) NOT NULL,
  `kd_mapel` varchar(10) NOT NULL,
  `id_kelas` varchar(15) NOT NULL,
  `n_uts` varchar(5) NOT NULL,
  `n_uas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_uts_uas`
--

INSERT INTO `nilai_uts_uas` (`id_nilai`, `id_siswa`, `id_guru`, `kd_mapel`, `id_kelas`, `n_uts`, `n_uas`) VALUES
(1, 'S1901', 'G02', 'MP1', '19/20-1A-2', '90', '98'),
(2, 'S1902', 'G02', 'MP1', '19/20-1A-2', '97', '93'),
(3, 'S1903', 'G02', 'MP1', '19/20-1A-2', '91', '93');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` varchar(10) NOT NULL,
  `kd_mapel` varchar(10) NOT NULL,
  `id_guru` varchar(20) NOT NULL,
  `id_kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `kd_mapel`, `id_guru`, `id_kelas`) VALUES
('P0001', 'MP1', 'G02', '19/20-1A-2'),
('P0002', 'MP2', 'G02', '19/20-1A-2');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(10) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `id_kelas` varchar(15) NOT NULL,
  `jml_presensi` int(3) NOT NULL,
  `sakit` varchar(4) NOT NULL,
  `izin` varchar(4) NOT NULL,
  `alasan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `id_siswa`, `bulan`, `id_kelas`, `jml_presensi`, `sakit`, `izin`, `alasan`) VALUES
(1, 'S1901', 'Januari', '19/20-1A-2', 26, '0', '0', '0'),
(2, 'S1902', 'Januari', '19/20-1A-2', 23, '2', '1', '0'),
(3, 'S1903', 'Januari', '19/20-1A-2', 26, '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` varchar(15) NOT NULL,
  `nisn` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` varchar(25) NOT NULL,
  `jns_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nama`, `tempat_lahir`, `tgl_lahir`, `jns_kelamin`, `alamat`, `no_telp`, `username`, `password`) VALUES
('S1901', '', 'Aksan Wisnu Amanurobbi', 'Ngawi', '20/02/2013', 'LAKI - LAKI', 'Dsn. Melikan RT.04 RW.08 Ds. Tempuran', '', 'aksanwa', 'aksanwa'),
('S1902', '', 'Alisha Salsabila Naufalyn', 'Ngawi', '26/12/2012', 'PEREMPUAN', 'Dsn. Gebangsewu RT.02 RW.15 Ds. Semen', '', 'alishasn', 'alishasn'),
('S1903', '', 'Alya Septiana Putri', 'Ngawi', '19/10/2012', 'PEREMPUAN', 'Dsn. Tempurejo RT.02 RW.07 Ds. Tempuran', '', 'alyasp', 'alyasp');

-- --------------------------------------------------------

--
-- Table structure for table `thn_ajaran`
--

CREATE TABLE `thn_ajaran` (
  `id_th_ajaran` varchar(15) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `semester` varchar(7) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thn_ajaran`
--

INSERT INTO `thn_ajaran` (`id_th_ajaran`, `tahun_ajaran`, `semester`, `keterangan`) VALUES
('2019-2020-GJL', '2019 / 2020', 'GANJIL', ''),
('2019-2020-GNP', '2019 / 2020', 'GENAP', ''),
('2020-2021-GJL', '2020 / 2021', 'GANJIL', 'test'),
('2020-2021-GNP', '2020 / 2021', 'GENAP', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `ulangan`
--

CREATE TABLE `ulangan` (
  `id_ulangan` int(10) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `id_guru` varchar(20) NOT NULL,
  `kd_mapel` varchar(10) NOT NULL,
  `id_kelas` varchar(15) NOT NULL,
  `nilai` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ulangan`
--

INSERT INTO `ulangan` (`id_ulangan`, `id_siswa`, `id_guru`, `kd_mapel`, `id_kelas`, `nilai`) VALUES
(1, 'S1901', 'G02', 'MP1', '19/20-1A-2', '98'),
(2, 'S1902', 'G02', 'MP1', '19/20-1A-2', '90'),
(3, 'S1903', 'G02', 'MP1', '19/20-1A-2', '94');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id_admin` varchar(5) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `id_guru` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id_admin`, `nama_admin`, `username`, `password`, `id_guru`) VALUES
('1', 'Nurkhulis', 'admin', 'admin', 'G01');

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE `wali_kelas` (
  `id_wali_kls` varchar(10) NOT NULL,
  `id_kelas` varchar(15) NOT NULL,
  `id_guru` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wali_kelas`
--

INSERT INTO `wali_kelas` (`id_wali_kls`, `id_kelas`, `id_guru`) VALUES
('WK19201A', '19/20-1A-2', 'G02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_th_ajaran` (`id_th_ajaran`);

--
-- Indexes for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`id_kls_siswa`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `nilai_uts_uas`
--
ALTER TABLE `nilai_uts_uas`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `kd_mapel` (`kd_mapel`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`),
  ADD KEY `no_guru` (`id_guru`),
  ADD KEY `kd_mapel` (`kd_mapel`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `thn_ajaran`
--
ALTER TABLE `thn_ajaran`
  ADD PRIMARY KEY (`id_th_ajaran`);

--
-- Indexes for table `ulangan`
--
ALTER TABLE `ulangan`
  ADD PRIMARY KEY (`id_ulangan`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `kd_mapel` (`kd_mapel`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD PRIMARY KEY (`id_wali_kls`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `no_guru` (`id_guru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_uts_uas`
--
ALTER TABLE `nilai_uts_uas`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ulangan`
--
ALTER TABLE `ulangan`
  MODIFY `id_ulangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_th_ajaran`) REFERENCES `thn_ajaran` (`id_th_ajaran`);

--
-- Constraints for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD CONSTRAINT `kelas_siswa_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `kelas_siswa_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `nilai_uts_uas`
--
ALTER TABLE `nilai_uts_uas`
  ADD CONSTRAINT `nilai_uts_uas_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `nilai_uts_uas_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`),
  ADD CONSTRAINT `nilai_uts_uas_ibfk_3` FOREIGN KEY (`kd_mapel`) REFERENCES `mata_pelajaran` (`kd_mapel`),
  ADD CONSTRAINT `nilai_uts_uas_ibfk_4` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD CONSTRAINT `pengajar_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`),
  ADD CONSTRAINT `pengajar_ibfk_2` FOREIGN KEY (`kd_mapel`) REFERENCES `mata_pelajaran` (`kd_mapel`),
  ADD CONSTRAINT `pengajar_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `presensi_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `ulangan`
--
ALTER TABLE `ulangan`
  ADD CONSTRAINT `ulangan_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `ulangan_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`),
  ADD CONSTRAINT `ulangan_ibfk_3` FOREIGN KEY (`kd_mapel`) REFERENCES `mata_pelajaran` (`kd_mapel`),
  ADD CONSTRAINT `ulangan_ibfk_4` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD CONSTRAINT `user_admin_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`);

--
-- Constraints for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD CONSTRAINT `wali_kelas_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`),
  ADD CONSTRAINT `wali_kelas_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
