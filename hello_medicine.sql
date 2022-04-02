-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 08:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hello_medicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `apotek`
--

CREATE TABLE `apotek` (
  `idApotek` int(11) NOT NULL,
  `namaApotek` varchar(25) NOT NULL,
  `alamatApotek` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `idDokter` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `Spesialisasi` varchar(25) NOT NULL,
  `NomorSTR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emergencycall`
--

CREATE TABLE `emergencycall` (
  `idEmergency` int(11) NOT NULL,
  `idRS` int(11) NOT NULL,
  `idPasien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `konsul`
--

CREATE TABLE `konsul` (
  `idKonsul` int(11) NOT NULL,
  `idPasien` int(11) NOT NULL,
  `idDokter` int(11) NOT NULL,
  `kategoriPenyakit` varchar(25) NOT NULL,
  `keluhan` text NOT NULL,
  `tanggalKonsul` date NOT NULL,
  `biayaKonsul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `idObat` int(11) NOT NULL,
  `idApotek` int(11) NOT NULL,
  `namaObat` varchar(25) NOT NULL,
  `jenisObat` varchar(25) NOT NULL,
  `hargaObat` int(11) NOT NULL,
  `deskripsiObat` text NOT NULL,
  `stokObat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `idPasien` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `RiwayatSakitPasien` text NOT NULL,
  `AlamatPasien` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanobat`
--

CREATE TABLE `pesanobat` (
  `idOrder` int(11) NOT NULL,
  `idObat` int(11) NOT NULL,
  `idApotek` int(11) NOT NULL,
  `idPasien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rumahsakit`
--

CREATE TABLE `rumahsakit` (
  `idRS` int(11) NOT NULL,
  `namaRS` varchar(25) NOT NULL,
  `alamatRS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `Displayname` varchar(25) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`),
  ADD KEY `fk_admin_idUser` (`idUser`);

--
-- Indexes for table `apotek`
--
ALTER TABLE `apotek`
  ADD PRIMARY KEY (`idApotek`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`idDokter`),
  ADD KEY `fk_dokter_idUser` (`idUser`);

--
-- Indexes for table `emergencycall`
--
ALTER TABLE `emergencycall`
  ADD PRIMARY KEY (`idEmergency`),
  ADD KEY `fk_emergencycall_idRS` (`idRS`),
  ADD KEY `fk_emergencycall_idPasien` (`idPasien`);

--
-- Indexes for table `konsul`
--
ALTER TABLE `konsul`
  ADD PRIMARY KEY (`idKonsul`),
  ADD KEY `fk_konsul_idPasien` (`idPasien`),
  ADD KEY `fk_konsul_idDokter` (`idDokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`idObat`),
  ADD KEY `fk_obat_idApotek` (`idApotek`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idPasien`),
  ADD KEY `fk_pasien_idUser` (`idUser`);

--
-- Indexes for table `pesanobat`
--
ALTER TABLE `pesanobat`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `fk_pesanobat_idObat` (`idObat`),
  ADD KEY `fk_pesanobat_idApotek` (`idApotek`),
  ADD KEY `fk_pesanobat_idPasien` (`idPasien`);

--
-- Indexes for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  ADD PRIMARY KEY (`idRS`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_idUser` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `fk_dokter_idUser` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Constraints for table `emergencycall`
--
ALTER TABLE `emergencycall`
  ADD CONSTRAINT `fk_emergencycall_idPasien` FOREIGN KEY (`idPasien`) REFERENCES `pasien` (`idPasien`),
  ADD CONSTRAINT `fk_emergencycall_idRS` FOREIGN KEY (`idRS`) REFERENCES `rumahsakit` (`idRS`);

--
-- Constraints for table `konsul`
--
ALTER TABLE `konsul`
  ADD CONSTRAINT `fk_konsul_idDokter` FOREIGN KEY (`idDokter`) REFERENCES `dokter` (`idDokter`),
  ADD CONSTRAINT `fk_konsul_idPasien` FOREIGN KEY (`idPasien`) REFERENCES `pasien` (`idPasien`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_obat_idApotek` FOREIGN KEY (`idApotek`) REFERENCES `apotek` (`idApotek`);

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `fk_pasien_idUser` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Constraints for table `pesanobat`
--
ALTER TABLE `pesanobat`
  ADD CONSTRAINT `fk_pesanobat_idApotek` FOREIGN KEY (`idApotek`) REFERENCES `apotek` (`idApotek`),
  ADD CONSTRAINT `fk_pesanobat_idObat` FOREIGN KEY (`idObat`) REFERENCES `obat` (`idObat`),
  ADD CONSTRAINT `fk_pesanobat_idPasien` FOREIGN KEY (`idPasien`) REFERENCES `pasien` (`idPasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
