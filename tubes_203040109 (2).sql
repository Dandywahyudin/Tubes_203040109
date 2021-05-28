-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 11:25 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_203040109`
--

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `ukuran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`id`, `gambar`, `nama`, `deskripsi`, `harga`, `ukuran`) VALUES
(1, 'baju1.png', 'Black T-shirt', 'SIZE: Short sleeve FIT: Slim fit STYLE: Round neck COMPOSITION: Cotton 100% CARE INSTRUCTIONS: Machine wash at 40°\'', 100000, 'S M L XL'),
(2, 'baju2.png', 'Maroon T-shirt', 'SIZE: Short sleeve FIT: Slim fit STYLE: Round neck COMPOSITION: Cotton 100% CARE INSTRUCTIONS: Machine wash at 40°\'', 100000, 'S M L XL'),
(3, 'baju3.png', 'Yellow T-shirt', 'SIZE: Short sleeve FIT: Slim fit STYLE: Round neck COMPOSITION: Cotton 100% CARE INSTRUCTIONS: Machine wash at 40°\'', 100000, 'S M L XL'),
(4, 'baju4.png', 'Army T-shirt', 'SIZE: Short sleeve FIT: Slim fit STYLE: Round neck COMPOSITION: Cotton 100% CARE INSTRUCTIONS: Machine wash at 40°\'', 99900, 'S M L XL'),
(5, 'hitam1.jfif', 'Black Hoodie', 'SIZE: Long sleeve STYLE: Hooded top COMPOSITION: Cotton 60%, Polyester 40% CARE INSTRUCTIONS: Machine wash at 40°', 249900, 'S M L XL'),
(6, 'putih2.jfif', 'White Hoodie', 'SIZE: Long sleeve STYLE: Hooded top COMPOSITION: Cotton 60%, Polyester 40% CARE INSTRUCTIONS: Machine wash at 40°', 249900, 'S M L XL'),
(7, 'merah3.jfif', 'Red Hoodie', 'SIZE: Long sleeve STYLE: Hooded top COMPOSITION: Cotton 60%, Polyester 40% CARE INSTRUCTIONS: Machine wash at 40°', 249900, 'S M L XL'),
(8, 'navy4.jfif', 'Navy Hoodie', 'SIZE: Long sleeve STYLE: Hooded top COMPOSITION: Cotton 60%, Polyester 40% CARE INSTRUCTIONS: Machine wash at 40°', 249900, 'S M L XL'),
(9, 'crewneck1.png', 'Green Crewneck', 'SIZE: Long sleeve FIT: Regular fit STYLE: Crewneck, Sweatshirt COMPOSITION: Cotton 60%, Polyester 40% elasticrib Cotton 97%, Elastane 3% CARE INSTRUCTIONS: Machine wash at 40°', 149900, 'S M L XL'),
(10, 'crewneck2.jfif', 'Black Crewneck', 'SIZE: Long sleeve FIT: Regular fit STYLE: Crewneck, Sweatshirt COMPOSITION: Cotton 60%, Polyester 40% elasticrib Cotton 97%, Elastane 3% CARE INSTRUCTIONS: Machine wash at 40°', 149900, 'S M L XL'),
(11, 'crewneck3.jfif', 'Orange Crewneck', 'SIZE: Long sleeve FIT: Regular fit STYLE: Crewneck, Sweatshirt COMPOSITION: Cotton 60%, Polyester 40% elasticrib Cotton 97%, Elastane 3% CARE INSTRUCTIONS: Machine wash at 40°', 149900, 'S M L XL'),
(12, 'crewneck4.png', 'Navy Crewneck', 'SIZE: Long sleeve FIT: Regular fit STYLE: Crewneck, Sweatshirt COMPOSITION: Cotton 60%, Polyester 40% elasticrib Cotton 97%, Elastane 3% CARE INSTRUCTIONS: Machine wash at 40°', 149900, 'S M L XL');

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
(1, 'admin', 'admin'),
(7, 'dandy', '$2y$10$Hu2yj0Ml4ZR1SxpQGVbfCOLN72fVL52NRmMYyHX7RgB7F3C97jOOi'),
(8, 'saya', '$2y$10$Xzxr7519w2t0sa4wkkpJ1uxGRS42.sjLii7duWsb2D3DHe3XZGCle'),
(9, '', '$2y$10$PBYF2fJ93oVyKbdzfb7Q6uK1OV0yDcwkL23L/yO.BtCkp/q426k.G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
