-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 03:19 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminti`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `waktu_absensi` date DEFAULT NULL,
  `jammasuk_absensi` time NOT NULL,
  `jamkeluar_absensi` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_kelas`, `id_ruangan`, `id_dosen`, `waktu_absensi`, `jammasuk_absensi`, `jamkeluar_absensi`) VALUES
(26, 29, 5, 7, '2019-03-24', '21:54:24', '21:54:40'),
(33, 27, 4, 4, '2019-03-25', '12:35:05', '12:35:08'),
(42, 21, 2, 5, '2019-03-25', '12:41:54', '12:41:57'),
(52, 17, 8, 5, '2019-03-25', '12:46:07', '12:46:09'),
(54, 8, 7, 5, '2019-03-25', '12:47:46', '12:47:48'),
(56, 2, 7, 1, '2019-04-01', '15:07:19', '15:07:22'),
(58, 24, 3, 1, '2019-04-01', '15:09:54', '15:09:57'),
(61, 19, 8, 8, '2019-04-01', '15:12:11', '15:12:13'),
(62, 7, 7, 9, '2019-04-01', '15:13:11', '15:13:13'),
(63, 26, 4, 9, '2019-04-01', '15:13:46', '15:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nip`, `nama`) VALUES
(1, 2147483647, 'M. Komarudin, S.T.,M.T.'),
(2, 2147483647, 'Raden Arum Setia P, S.T.,M.T.'),
(3, 2147483647, 'Mona Arif Muda, S.T.,M.T.'),
(4, 2147483647, 'Mardiana, S.T.,M.T.'),
(5, 2147483647, 'Yessi Mulyani, S.T.,M.T.'),
(6, 2147483647, 'Wahyu Eko S, S.T.,M.Sc.'),
(7, 2147483647, 'Meizano Ardhi Muhammad, S.T., M.T.'),
(8, 2147483647, 'Gigih Forda Nama, S.T., M.T.'),
(9, 2147483647, 'Hery Dian Septama, S.T., MSc');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_dosen`, `id_ruangan`, `id_matkul`) VALUES
(1, 3, 7, 1),
(2, 1, 7, 8),
(3, 5, 7, 9),
(4, 8, 7, 10),
(5, 8, 8, 11),
(6, 6, 8, 12),
(7, 9, 7, 13),
(8, 5, 7, 14),
(11, 9, 8, 18),
(15, 6, 8, 8),
(16, 3, 8, 20),
(17, 5, 8, 22),
(18, 1, 8, 23),
(19, 8, 8, 24),
(20, 9, 2, 25),
(21, 5, 2, 26),
(22, 7, 2, 27),
(23, 4, 3, 28),
(24, 1, 3, 29),
(25, 3, 3, 30),
(26, 9, 4, 31),
(27, 4, 4, 35),
(28, 5, 4, 32),
(29, 7, 5, 33),
(30, 8, 5, 34);

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(30) NOT NULL,
  `waktu_kuliah` time NOT NULL,
  `kode_matkul` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_matkul`, `nama_matkul`, `waktu_kuliah`, `kode_matkul`) VALUES
(1, 'PENGINDERAAN JAUH', '00:00:00', 'INF616461'),
(2, 'STRUKTUR DATA', '00:00:00', 'INF616110'),
(3, 'PENDIDIKAN AGAMA ISLAM', '00:00:00', 'UNI616101'),
(4, 'TEORI BAHASA DAN OTOMATA', '00:00:00', 'INF616225'),
(5, 'INTERNET OF THINGS', '00:00:00', 'INF616453'),
(6, 'DATA MINING', '00:00:00', 'INF616346'),
(7, 'SISTEM INFORMASI', '00:00:00', 'INF616100'),
(8, 'AUGMENTED REALITY', '00:00:00', 'INF616458'),
(9, 'JARINGAN SYARAF TIRUAN', '00:00:00', 'INF616452'),
(10, 'MOBILE COMPUTING', '00:00:00', 'INF616341'),
(11, 'JARINGAN KOMPUTER ENTERPRISE', '00:00:00', 'INF616351'),
(12, 'ORGANISASI KOMPUTER', '00:00:00', 'INF616221'),
(13, 'KOMPUTASI AWAN', '00:00:00', 'INF616462'),
(14, 'EMBEDED SYSTEM', '00:00:00', 'INF616223'),
(18, 'JARINGAN KOMPUTER ENTERPRISE', '00:00:00', 'INF616342'),
(19, 'PEMROGRAMAN BERORIENTASI OBJEK', '00:00:00', 'INF616226'),
(20, 'SISTEM INFORMASI GEOGRAFIS', '00:00:00', 'INF616342'),
(21, 'BAHASA INGGRIS', '00:00:00', 'INF617108'),
(22, 'KEWIRAUSAHAAN', '00:00:00', 'INF617242'),
(23, 'COMPUTER VISION', '00:00:00', 'INF616455'),
(24, 'JARINGAN KOMPUTER', '00:00:00', 'INF616222'),
(25, 'SISTEM BASIS DATA', '00:00:00', 'INF616224'),
(26, 'METODE NUMERIK', '00:00:00', 'TIF614205'),
(27, 'SEMANTIK WEB', '00:00:00', 'INF616463'),
(28, 'LOGIKA', '00:00:00', 'INF617110'),
(29, 'E-BUSINESS ', '00:00:00', 'INF616456'),
(30, 'PROBABILITAS DAN STATISTIK', '00:00:00', 'INF616108'),
(31, 'METODOLOGI PENELITIAN', '00:00:00', 'INF616339'),
(32, 'SISTEM PAKAR', '00:00:00', 'EEC816212'),
(33, 'ALGORITMA DAN PEMROGRAMAN 2', '00:00:00', 'INF616459'),
(34, 'KALKULUS 2', '00:00:00', 'TIF614207'),
(35, 'AUDIT SISTEM INFORMASI', '00:00:00', 'TIF614203');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `nama_ruangan`) VALUES
(1, 'H16'),
(2, 'H17'),
(3, 'H18'),
(4, 'H19'),
(5, 'H20'),
(6, 'H5'),
(7, 'Baja 1'),
(8, 'Baja 2'),
(9, 'Baja 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `fk_relationship_3` (`id_kelas`),
  ADD KEY `fk_relationship_4` (`id_ruangan`),
  ADD KEY `fk_relationship_5` (`id_dosen`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `fk_relationship_1` (`id_dosen`),
  ADD KEY `fk_relationship_2` (`id_ruangan`),
  ADD KEY `fk_relationship_6` (`id_matkul`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `fk_relationship_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `fk_relationship_4` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`),
  ADD CONSTRAINT `fk_relationship_5` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `fk_relationship_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_relationship_2` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_relationship_6` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id_matkul`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
