-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 07:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `jurusan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama`, `alamat`, `jurusan`) VALUES
('E071201082', 'Winda Latifani ', 'Pallantikang', 'Kedokteran'),
('F712345123', 'Aqil Mushaddiq', 'Gowa', 'Bahasa Inggris'),
('F712345191', 'Luffy D Monkey', 'East Blue', 'Pirate '),
('H071201082', 'Andi Fadhil Risandi Kresna', 'Makassar', 'Sistem Informasi '),
('H712345123', 'Farid Akmal', 'Makassar', 'Psikologi'),
('H71234514', 'Nabil Shadiq', 'Gowa', 'Teknik Komputer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
