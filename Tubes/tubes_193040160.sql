-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 05:12 PM
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
(5, 'foto5.jpg', 'Jacket', 'Nike', 'Dry Fit', 349990),
(6, 'foto6.jpg', 'Tshirt', 'Kaloste', 'Cotton Combad', 35000),
(7, 'foto7.jpg', 'White Tshirt Deus', 'Deus Ex Machina', 'Cotton Combed', 55000),
(8, 'foto8.jpg', 'Plain Tshirt', 'New State Apparel(NSA)', 'Ring Spun Cotton', 33000),
(10, 'foto10.jpg', 'Jacket', 'Kalvin', 'Baby Terry', 90000),
(24, '5ec131d15b9b4.jpg', 'Tshirt Destiny Design ', 'Shutterstock', 'Cotton Combed', 50000),
(25, '5ec136f8eacfa.jpeg', 'Ksiecnalb Hoodie', 'No Brand', 'Fleece', 46900),
(26, '5ec13ac708e7e.jpg', 'Hoodie', 'No Brand', 'Twill', 73000),
(27, '5ec13c1c3f2f8.jpg', 'Parka', 'No Brand', 'Waterproof', 80000),
(28, '5ec13cf764024.jpg', 'Jacket Parachute Ortusei', 'No Brand', 'Taslan', 100000),
(29, '5ec13e808938c.jpg', 'Tactical Jacket', 'Survival', 'Hard Shell Parka', 220000),
(30, '5ec13f2171284.jpg', 'Bomber Jacket T', 'RoughStock', 'Waterproof', 310000);

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
(2, 'avip', '$2y$10$bXiVwlhsMnFGIdYEyFSI3OlE.Jsovgo0WfalWu7HXyVwOCqDJJQqi'),
(3, 'admin', '$2y$10$n62yNlRsZZPJMtIcwn5HtOTWtYo6bYohxucUe9k3cenagJoNxaK4y'),
(4, 'admin1', '$2y$10$WXz/Dt5Mt5Ibb2UnB6Qx/utkBvx.WzyZb5qsebfmbbDYTrkQa8dmO');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
