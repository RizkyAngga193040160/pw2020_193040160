-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 08:36 AM
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
-- Database: `tubes_193040160`
--

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `Id` int(11) NOT NULL,
  `Foto` varchar(100) DEFAULT NULL,
  `Kategori` varchar(24) DEFAULT NULL,
  `Merk` varchar(24) DEFAULT NULL,
  `Bahan` varchar(24) DEFAULT NULL,
  `Harga` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`Id`, `Foto`, `Kategori`, `Merk`, `Bahan`, `Harga`) VALUES
(1, 'foto1.jpg', 'Blazer Zipper', 'Nikayu', 'Cotton Stretch', 255000),
(2, 'foto2.jpg', 'Kemeja', 'O.T.', 'Cotton Stretch', 87000),
(3, 'foto3.jpg', 'Koko', 'JC.CO.', 'Cotton Stretch', 70000),
(4, 'foto4.jpg', 'Sweather', 'Eiger', 'Cotton Fleece', 89550),
(5, 'foto5.jpg', 'Jaket', 'Nike', 'Dry Fit', 349990),
(6, 'foto6.jpg', 'Kaos', 'Kaloste', 'Cotton Combad', 35000),
(7, 'foto7.jpg', 'Kaos', 'Deus Ex Machina', 'Cotton Combed', 55000),
(8, 'foto8.jpg', 'Kaos', 'New State Apparel(NSA)', 'Ring Spun Cotton', 33000),
(9, 'foto9.png', 'Kemeja', 'Caira', 'Acrylic', 100000),
(10, 'foto10.jpg', 'Jaket', 'Kalvin', 'Baby Terry', 900000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'avip', '$2y$10$bXiVwlhsMnFGIdYEyFSI3OlE.Jsovgo0WfalWu7HXyVwOCqDJJQqi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
