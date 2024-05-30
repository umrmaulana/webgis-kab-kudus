-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2024 at 01:20 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `kudus`
--

CREATE TABLE `kudus` (
  `id` int NOT NULL,
  `kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jml_kematian_bayi` int NOT NULL DEFAULT '0',
  `stunting` int NOT NULL DEFAULT '0',
  `jml_kematian_ibu` int NOT NULL DEFAULT '0',
  `jml_kematian_balita` int NOT NULL DEFAULT '0',
  `jml_ttl` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kudus`
--

INSERT INTO `kudus` (`id`, `kecamatan`, `jml_kematian_bayi`, `stunting`, `jml_kematian_ibu`, `jml_kematian_balita`, `jml_ttl`) VALUES
(2415, 'Kaliwungu', 5, 195, 2, 6, 208),
(2416, 'Kota Kudus', 2, 205, 0, 3, 210),
(2417, 'Jati', 5, 97, 0, 5, 107),
(2418, 'Undaan', 2, 233, 0, 2, 237),
(2419, 'Mejobo', 2, 202, 0, 2, 206),
(2420, 'Jekulo', 0, 360, 0, 0, 360),
(2421, 'Bae', 6, 175, 0, 7, 188),
(2422, 'Gebog', 0, 720, 0, 0, 720),
(2423, 'Dawe', 4, 571, 0, 5, 580);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tlp` int NOT NULL,
  `pesan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kudus`
--
ALTER TABLE `kudus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
