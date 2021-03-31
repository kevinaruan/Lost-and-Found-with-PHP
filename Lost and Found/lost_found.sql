-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 09:36 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lost_found`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `formbaranghilang`
--

CREATE TABLE `formbaranghilang` (
  `id` int(10) UNSIGNED NOT NULL,
  `gambarBarang` varchar(100) NOT NULL,
  `namaBarang` varchar(100) NOT NULL,
  `pemilikBarang` varchar(100) NOT NULL,
  `noHp` int(20) NOT NULL,
  `ciriBarang` varchar(100) NOT NULL,
  `tanggalHilang` date NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formbaranghilang`
--

INSERT INTO `formbaranghilang` (`id`, `gambarBarang`, `namaBarang`, `pemilikBarang`, `noHp`, `ciriBarang`, `tanggalHilang`, `lokasi`, `kategori`) VALUES
(10, '1.jpg', 'Laptop', 'Christine Hutajulu', 853400, 'Bagus', '2019-06-05', 'Gd7', 'Elektronik');

-- --------------------------------------------------------

--
-- Table structure for table `formditemukan`
--

CREATE TABLE `formditemukan` (
  `id` int(10) UNSIGNED NOT NULL,
  `gambarBarang` varchar(100) NOT NULL,
  `namaBarang` varchar(100) NOT NULL,
  `penemuBarang` varchar(100) NOT NULL,
  `noHp` int(20) NOT NULL,
  `ciriBarang` varchar(100) NOT NULL,
  `tanggalDitemukan` date NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `status` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formditemukan`
--

INSERT INTO `formditemukan` (`id`, `gambarBarang`, `namaBarang`, `penemuBarang`, `noHp`, `ciriBarang`, `tanggalDitemukan`, `lokasi`, `kategori`, `status`) VALUES
(5, 'images.png', 'Earphone', 'Yepta', 89787, 'Panjang', '2019-06-05', 'gd9', 'Elektronik', '0000-00-00 00:00:00'),
(6, '1.jpg', 'Laptop', 'Welvin ', 22356, 'Wana pink', '2019-06-05', 'G725', 'Elektronik', '0000-00-00 00:00:00'),
(9, 'download (2).jpg', 'Bukan pemalas', 'Christine', 112233, 'Mulus', '2019-06-06', 'Kantin Lama', 'NonElektronik', '0000-00-00 00:00:00'),
(10, 'images (1).jpg', 'Peduli terhadap kelompok', 'Nathasya', 44556, 'Tidak ada lecet', '2019-06-06', 'KB', 'NonElektronik', '0000-00-00 00:00:00'),
(11, 'download (6).jpg', 'Berpartisipasi dalam kelompok dong', 'Hutajulu', 726, 'Bagussssss', '2019-06-03', 'Gd9', 'Uang', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formbaranghilang`
--
ALTER TABLE `formbaranghilang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formditemukan`
--
ALTER TABLE `formditemukan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formbaranghilang`
--
ALTER TABLE `formbaranghilang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `formditemukan`
--
ALTER TABLE `formditemukan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
