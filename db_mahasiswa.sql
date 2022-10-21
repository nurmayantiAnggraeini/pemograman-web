
-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 07:28 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Fakultas` varchar(50) NOT NULL,
  `Gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama`, `Email`, `Jurusan`, `Fakultas`, `Gambar`) VALUES
(70121049, 'iza diniati', 'izadiniati597@gmail.com', 'sistem informasi', 'sains dan teknologi', 'iza.jpg'),
(701210042, 'm.khobari akbar', 'mhmmdkhobari@gmail.com', 'sistem informasi', 'sains dan teknologi', 'bari.jpg'),
(701210124, 'may dinda amelia', 'maydindaamelia@gmail.com', 'sistem informasi', 'sains dan teknologi', 'dinda.jpg'),
(701210210, 'nurmayanti anggraeini', 'anggraeininurmayanti@gmail.com', 'sistem informasi', 'sains dan teknologi', 'nurma.jpg'),
(701210254, 'rivo dianra', 'rivodiandra2003@gmail.com', 'sistem informasi', 'sains dan teknologi', 'rivo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
