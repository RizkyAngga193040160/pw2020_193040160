-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 04:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040160`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(12, 'Rein', '123456789', 'REIN@gmail.com', 'Teknik Mesin', 'Foto1.jpg'),
(13, 'Momon', '123498765', 'Miono@gmail.com', 'Teknik Pangan', 'Foto2.jpg'),
(14, 'Ramon', '987654312', 'Ramon@gmail.com', 'Teknik Mesin', 'Foto3.jpg'),
(15, 'Ray', '986745231', 'Ray@gmail.com', 'Teknik Informatika', 'Foto4.jpg'),
(16, 'Kyo', '987123465', 'Kyo@gmail.com', 'Teknik Industri', 'Foto5.jpg'),
(17, 'McQueen', '456123678', 'McQueen@gmail.com', 'Teknik Mesin', 'Foto6.jpg'),
(18, 'Benjamin', '999999999', 'Benjamin@gmail.com', 'Teknik Informatika', 'Foto7.jpg'),
(19, 'Teppei', '789765432', 'Teppei@gmail.com', 'Keguruan', 'Foto8.jpg'),
(20, 'Lyold', '102938475', 'Lyold@gmail.com', 'Teknik Informatika', 'Foto9.jpg'),
(30, 'Milo', '988776655', 'Milo@gmail.com', 'Teknik Pangan', 'Foto10.jpg'),
(31, 'Miko', '982368270', 'Miko@gmail.com', 'Teknik Teknikan', 'Foto11.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
