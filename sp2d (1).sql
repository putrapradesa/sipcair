-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 01:09 PM
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
-- Dumping data for table `sp2d`
--

INSERT INTO `sp2d` (`Id`, `Tanggal`, `UploadedBy`, `NoSP2D`, `Jenis`, `SubUnit`, `Penerima`, `Keterangan`, `Bruto`, `Potongan`, `Netto`, `DeletedBy`, `UploadedDate`) VALUES
(1, '1/4/2021', 'dev', '0001/SP2D-GJ/DISPKH-PB/I/2021', 'LS', 'DINAS PETERNAKAN DAN KESEHATAN HEWAN', 'DINAS PETERNAKAN DAN KESEHATAN HEWAN PROV PB', 'Pembayaran Gaji Bulan Januari 2021 pada Dinas Peternakan dan kesehatan hewan', '283,654,258.00 ', '46,557,258.00 ', '237,097,000.00 ', '', '2021-11-07'),
(2, '1/4/2021', 'dev', '0002/SP2D-GJ/BPBD-PB/I/2021', 'LS', 'BADAN PENGANGGULANGAN BENCANA DAERAH', 'BADAN PENANGGULANGAN BENCANA DAERAH PROVINSI PAPUA BARAT', 'Pembayaran Gaji ASN BPBD PB Bulan Januari 2021', '148,814,570.00 ', '22,444,770.00 ', '126,369,800.00 ', '', '2021-11-07'),
(3, '1/6/2021', 'dev', '0039/SP2D-GJ/SATPOL PP-PB/I/2021', 'LS', 'SATUAN POLISI PAMONGPRAJA', 'SATUAN POLISI PAMONG PRAJA DAERAH PROV PAPUA BARAT PEMERINTAH', 'Pembayaran Gaji ASN Bulan Januari 2021 Pada Kantor SATPOL PP Provinsi Papua Barat, Sesuai Daftar Gaji Terlampir.', '239,141,443.00 ', '40,484,643.00 ', '198,656,800.00 ', '', '2021-11-07'),
(4, '1/6/2021', 'dev', '0041/SP2D-GJ/DISARPUS-PB/I/2021', 'LS', 'DINAS KEARSIPAN DAN PERPUSTAKAAN', 'DINAS KEARSIPAN DAN PERPUSTAKAAN PROV PAPUA BARAT PEMERINTAH', 'Pembayaran Gaji Induk PNS/CPNS Bulan Januari Tahun 2021 pada Dinas Kearsipan dan Perpustakaan Provinsi Papua Barat', '164,109,248.00 ', '25,998,748.00 ', '138,110,500.00 ', '', '2021-11-07');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sp2d`
--
ALTER TABLE `sp2d`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
