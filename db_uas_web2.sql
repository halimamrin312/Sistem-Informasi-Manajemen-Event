-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 05:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `LOKASI` varchar(100) DEFAULT NULL,
  `HARGA_TICKET` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`ID`, `NAMA`, `LOKASI`, `HARGA_TICKET`) VALUES
(1, 'Wisuda', 'Fasilkom', 200000.00),
(2, 'Bazar', 'FEB', 44000.00),
(3, 'DestFast', 'Fasilkom', 5000.00);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID` int(11) NOT NULL,
  `ID_PENDAFTARAN` int(11) DEFAULT NULL,
  `JUMLAH_PEMBAYARAN` decimal(10,2) DEFAULT NULL,
  `METODE` enum('CASH','ONLINE','','') DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`ID`, `ID_PENDAFTARAN`, `JUMLAH_PEMBAYARAN`, `METODE`, `TANGGAL`) VALUES
(1, 1, 200000.00, 'CASH', '2024-06-11'),
(2, 4, 44000.00, 'ONLINE', '2024-06-19'),
(3, 3, 5000.00, 'CASH', '2024-06-15'),
(4, 4, 44000.00, 'CASH', '2024-06-26'),
(5, 4, 44000.00, 'CASH', '2024-06-26'),
(6, 6, 200000.00, 'ONLINE', '2024-06-08');

--
-- Triggers `pembayaran`
--
DELIMITER $$
CREATE TRIGGER `before_insert_pembayaran` BEFORE INSERT ON `pembayaran` FOR EACH ROW BEGIN
    DECLARE ticket_price DECIMAL(10, 2);
    -- Get the ticket price from the acara table based on the selected pendaftaran
    SELECT a.HARGA_TICKET INTO ticket_price
    FROM acara a
    JOIN pendaftaran p ON p.ID_ACARA = a.ID
    WHERE p.ID = NEW.ID_PENDAFTARAN;
    
    -- Set the JUMLAH_PEMBAYARAN to the ticket price
    SET NEW.JUMLAH_PEMBAYARAN = ticket_price;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `ID` int(11) NOT NULL,
  `ID_PESERTA` int(11) DEFAULT NULL,
  `ID_ACARA` int(11) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`ID`, `ID_PESERTA`, `ID_ACARA`, `TANGGAL`) VALUES
(1, 1, 1, '2024-06-11'),
(2, 2, 1, '2024-06-05'),
(3, 2, 3, '2024-06-04'),
(4, 1, 2, '2024-06-06'),
(5, 3, 3, '2024-06-14'),
(6, 1, 1, '2024-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `ALAMAT` text DEFAULT NULL,
  `JENIS_KELAMIN` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`ID`, `NAMA`, `ALAMAT`, `JENIS_KELAMIN`, `EMAIL`) VALUES
(1, 'Stephen', 'Pramuka', 'Laki-Laki', 'stephen080@gmail.com'),
(2, 'Rendi Ahong', 'Sudarso', 'Perempuan', 'asds@gmail.com'),
(3, 'Ricko', 'Sumut', 'Perempuan', 'qwasdas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','peserta','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(8, 'admin', 'admin', 'admin'),
(10, 'ridho_alfandi', 'ridho', 'peserta'),
(11, 'stephen', 'intan', 'peserta'),
(13, 'stephen_123', 'asdas', 'peserta'),
(14, 'FAJAR', 'raihanmalaforever', 'admin'),
(16, 'amin', 'admin', 'peserta'),
(17, 'suryanto', 'verza', 'peserta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_PENDAFTARAN` (`ID_PENDAFTARAN`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_PESERTA` (`ID_PESERTA`),
  ADD KEY `ID_ACARA` (`ID_ACARA`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`ID_PENDAFTARAN`) REFERENCES `pendaftaran` (`ID`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`ID_PESERTA`) REFERENCES `peserta` (`ID`),
  ADD CONSTRAINT `pendaftaran_ibfk_2` FOREIGN KEY (`ID_ACARA`) REFERENCES `acara` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
