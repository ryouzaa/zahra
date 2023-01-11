-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 09:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservasi_inju`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Kd_Admin` char(8) NOT NULL,
  `Nm_Admin` varchar(50) NOT NULL,
  `No_Tlp` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Kd_Admin`, `Nm_Admin`, `No_Tlp`, `Email`) VALUES
('A-001', 'Wahyuni', 8976656, 'wahyuni111@gmail.com'),
('A-002', 'Pratika', 85670098, 'pratika87@gmail.com'),
('A-003', 'Fira', 8884567, 'firara01@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `paket_menu`
--

CREATE TABLE `paket_menu` (
  `Kd_Paket_Menu` char(8) NOT NULL,
  `Nm_Paket_Menu` varchar(50) NOT NULL,
  `Harga_Paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket_menu`
--

INSERT INTO `paket_menu` (`Kd_Paket_Menu`, `Nm_Paket_Menu`, `Harga_Paket`) VALUES
('00012', 'paket A', 190000),
('00013', 'Paket B', 275000),
('00014', 'Paket C', 350000),
('00015', 'Paket A Premium', 240000),
('00016', 'Paket B Premium', 325000);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `Kd_Reservasi` int(11) NOT NULL,
  `Nm_Konsumen` varchar(50) NOT NULL,
  `No_Tlp` int(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Tgl_Reservasi` date NOT NULL,
  `Jam_Datang` time NOT NULL,
  `Total_Tamu` int(11) NOT NULL,
  `Total_Pesanan_Paket` int(11) NOT NULL,
  `Catatan_Konsumen` varchar(100) DEFAULT NULL,
  `Kd_Admin` char(8) DEFAULT NULL,
  `Kd_Paket_Menu` char(8) NOT NULL,
  `Kd_Tempat` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`Kd_Reservasi`, `Nm_Konsumen`, `No_Tlp`, `Email`, `Alamat`, `Tgl_Reservasi`, `Jam_Datang`, `Total_Tamu`, `Total_Pesanan_Paket`, `Catatan_Konsumen`, `Kd_Admin`, `Kd_Paket_Menu`, `Kd_Tempat`) VALUES
(3, 'candra', 5678090, 'candra888@gmail.com', 'Bantul, Yogyakarta', '0000-00-00', '12:42:00', 2, 2, 'Disajikan hangat', 'A-001', '00012', '123'),
(4, 'candra', 2147483647, 'candra888@gmail.com', 'Bantul, Yogyakarta', '0000-00-00', '12:06:00', 2, 2, 'Disajikan hangat', 'A-001', '00015', '124'),
(5, 'Rifka', 2147483647, 'rifka@gmail.com', 'Sleman, Yogyakarta', '0000-00-00', '12:42:00', 2, 2, 'Disajikan hangat', 'A-002', '00014', '124'),
(6, 'Rifka', 2147483647, 'rifka@gmail.com', 'Sleman, Yogyakarta', '0000-00-00', '12:06:00', 2, 2, 'Disajikan hangat', 'A-002', '00014', '124'),
(7, 'candra', 5678090, 'candra888@gmail.com', 'Bantul, Yogyakarta', '2023-01-23', '12:42:00', 4, 4, 'Disajikan hangat', 'A-001', '00015', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `Kd_Tempat` char(8) NOT NULL,
  `Lokasi_Ruangan` varchar(25) NOT NULL,
  `Jumlah_Kursi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`Kd_Tempat`, `Lokasi_Ruangan`, `Jumlah_Kursi`) VALUES
('123', 'Indoor', 100),
('124', 'Outdoor', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Kd_Admin`);

--
-- Indexes for table `paket_menu`
--
ALTER TABLE `paket_menu`
  ADD PRIMARY KEY (`Kd_Paket_Menu`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`Kd_Reservasi`),
  ADD KEY `Kd_Admin` (`Kd_Admin`),
  ADD KEY `Kd_Paket_Menu` (`Kd_Paket_Menu`),
  ADD KEY `Kd_Tempat` (`Kd_Tempat`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`Kd_Tempat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `Kd_Reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`Kd_Admin`) REFERENCES `admin` (`Kd_Admin`),
  ADD CONSTRAINT `reservasi_ibfk_2` FOREIGN KEY (`Kd_Paket_Menu`) REFERENCES `paket_menu` (`Kd_Paket_Menu`),
  ADD CONSTRAINT `reservasi_ibfk_3` FOREIGN KEY (`Kd_Tempat`) REFERENCES `tempat` (`Kd_Tempat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
