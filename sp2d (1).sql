-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 03:05 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp2d`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL,
  `Nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`Id`, `Username`, `Password`, `level`, `Nama`) VALUES
(1, 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sp2d`
--

CREATE TABLE `sp2d` (
  `Id` int(100) NOT NULL,
  `Tanggal` varchar(255) NOT NULL,
  `UploadedBy` varchar(20) NOT NULL,
  `NoSP2D` mediumtext NOT NULL,
  `Jenis` varchar(20) NOT NULL,
  `SubUnit` mediumtext NOT NULL,
  `Penerima` mediumtext NOT NULL,
  `Keterangan` text NOT NULL,
  `Bruto` varchar(200) NOT NULL,
  `Potongan` varchar(200) NOT NULL,
  `Netto` varchar(200) NOT NULL,
  `DeletedBy` varchar(11) NOT NULL,
  `UploadedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sp2d`
--
ALTER TABLE `sp2d`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sp2d`
--
ALTER TABLE `sp2d`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
