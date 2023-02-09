-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 06:19 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(10) NOT NULL,
  `namalengkap` varchar(40) DEFAULT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`, `level`) VALUES
(1, 'admin', 'admin', 'Siapa', 'admin'),
(9, 'user1', '24c9e15e52', 'Asep', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `aju`
--

CREATE TABLE `aju` (
  `idaju` int(30) NOT NULL,
  `waktu` date NOT NULL,
  `jam` time NOT NULL,
  `bahas` text NOT NULL,
  `idmaha` int(30) NOT NULL,
  `Kehadiran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aju`
--

INSERT INTO `aju` (`idaju`, `waktu`, `jam`, `bahas`, `idmaha`, `Kehadiran`) VALUES
(1, '2022-07-05', '11:00:00', 'Nilai', 17, 'Hadir'),
(2, '2022-07-14', '10:00:00', 'Perwalian', 17, 'Hadir'),
(3, '2022-07-13', '09:00:00', 'Kesulitan Pembelajaran', 18, 'Hadir'),
(4, '2022-07-15', '13:30:00', 'Perbaikan Nilai', 19, ''),
(5, '2022-07-14', '11:30:00', 'Ujian Susulan', 20, '');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `iddosen` int(30) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`iddosen`, `nip`, `nama`, `password`, `level`) VALUES
(14, '1122356655', 'Asep', '6655', 'doswal'),
(15, '1122356543', 'Yui', '6543', 'doswal'),
(16, '1122359988', 'Edo', '9988', 'doswal');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `indfile` int(11) NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`indfile`, `file`) VALUES
(2, '5432.webp'),
(3, 'DEEP LEARNING (1).pdf'),
(4, 'Tugas pertemuan 11-ML-Ahmad Rizqy Hamdy.pdf'),
(5, 'Algoritma CNN.pdf'),
(6, 'APLIKASI KONSULING BERBASIS WEB (4) (1).docx');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `idjad` int(30) NOT NULL,
  `iddosen` int(30) DEFAULT NULL,
  `waktu` date NOT NULL,
  `semester` int(3) DEFAULT NULL,
  `ke` int(3) NOT NULL,
  `bahas` varchar(500) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `mulai` time NOT NULL,
  `beres` time NOT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `lokasi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `idmaha` int(30) NOT NULL,
  `npm` varchar(30) NOT NULL,
  `namasis` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `semester` int(3) NOT NULL,
  `thn_msk` varchar(4) NOT NULL,
  `password` varchar(225) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `iddosen` int(30) DEFAULT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`idmaha`, `npm`, `namasis`, `jurusan`, `semester`, `thn_msk`, `password`, `kelas`, `iddosen`, `level`) VALUES
(17, '19111099', 'Ahmad Rizqy Hamdy', 'Akuntansi', 6, '2019', '1099', 'reguler', 14, 'mahasiswa'),
(18, '19111088', 'Arham', 'Psikologi', 6, '2019', '1088', 'karyawan', 14, 'mahasiswa'),
(19, '20111068', 'Wui', 'Akuntansi', 1, '2020', '1068', 'reguler', 15, 'mahasiswa'),
(20, '21111058', 'Dui', 'Informatika', 2, '2021', '1058', 'reguler', 16, 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int(10) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `semester` int(3) NOT NULL,
  `sks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `kode_matkul`, `nama`, `semester`, `sks`) VALUES
(1, 'B1356', 'Rekaya Perangkat Lunak', 3, 3),
(2, 'B1123', 'Data Mining', 6, 3),
(3, 'B1146', 'Metode Numerik', 7, 2),
(4, 'A1682', 'Kalkulus', 1, 3),
(5, 'A1763', 'IoT', 6, 3),
(6, 'C1983', 'Machine Learning', 8, 3),
(7, 'B1398', 'Fisika', 1, 2),
(8, 'A1423', 'B.Indonesia', 2, 2),
(9, 'B1763', 'Interaksi Manusia & Komputer', 4, 2),
(10, 'B1363', 'Manajemen Proyek Perangkat Lunak', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `idmaha` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `aju`
--
ALTER TABLE `aju`
  ADD PRIMARY KEY (`idaju`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`iddosen`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`indfile`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`idjad`),
  ADD KEY `iddosen` (`iddosen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`idmaha`),
  ADD KEY `iddosen` (`iddosen`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmaha` (`idmaha`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `aju`
--
ALTER TABLE `aju`
  MODIFY `idaju` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `iddosen` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `indfile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `idjad` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `idmaha` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_1` FOREIGN KEY (`iddosen`) REFERENCES `dosen` (`iddosen`) ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`iddosen`) REFERENCES `dosen` (`iddosen`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idmaha`) REFERENCES `mahasiswa` (`idmaha`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
