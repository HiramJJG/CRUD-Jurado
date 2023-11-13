-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 08:05 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `camion`
--

CREATE TABLE `camion` (
  `IDcamion` int(50) NOT NULL,
  `Marca` varchar(59) NOT NULL,
  `Modelo` varchar(50) NOT NULL,
  `Capacidad` int(50)NOT NULL,
  `Tipocombustible` varchar(50) NOT NULL,
  `Fecha_fabricacion` date(50) NOT NULL,
  `Numasientos` int(50) NOT NULL,
  `Disponibilidad` tinyint(50) NOT NULL,
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camion`
--

INSERT INTO `camion` (`IDcamion`, `Marca`, `Modelo`, `Capacidad`, `Tipocombustible`, `Fecha_fabricacion`, `Numasientos`, `Disponibilidad`) VALUES
(57283192, 'mercedez Benz', '2019', '35', 'Diesel', '2018', 35, 'Mucha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camion`
--
ALTER TABLE `camion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NIM_unique` (`Marca`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camion`
--
ALTER TABLE `camion`
  MODIFY `IDcamion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
