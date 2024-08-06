-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 06, 2024 at 10:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_stokbarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_stokbarang`
--

CREATE TABLE `tb_stokbarang` (
  `Tanggal_Pembelian` varchar(50) NOT NULL,
  `ID_Barang` int(50) NOT NULL,
  `Nama_Barang` varchar(50) NOT NULL,
  `Tipe` varchar(50) NOT NULL,
  `Satuan` varchar(50) NOT NULL,
  `Stok` int(50) NOT NULL,
  `Perangkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_stokbarang`
--

INSERT INTO `tb_stokbarang` (`Tanggal_Pembelian`, `ID_Barang`, `Nama_Barang`, `Tipe`, `Satuan`, `Stok`, `Perangkat`) VALUES
('Tanggal Pembelian', 0, 'Nama Barang', 'Tipe', 'Satuan', 0, 'Perangkat'),
('', 1, 'Groove CPE // 52HPN', 'CPE', 'Unit', 0, 'Utama'),
('', 2, 'Groove AP // A52HPN', 'AP', 'Unit', 0, 'Utama'),
('', 3, 'Router RB951', '', 'Unit', 0, 'Utama'),
('', 4, 'SXT CPE // SXT LITE 5', '', 'Unit', 0, 'Utama'),
('', 5, 'SXT AP // SXT SA5', '', 'Unit', 0, 'Utama'),
('', 6, 'RBLHG', '', 'Unit', 0, 'Utama'),
('', 7, 'Router Wireless TP Link Archer C54', '', 'Unit', 0, 'Utama'),
('', 8, 'Radio Sectoral - Omnitik', '', 'Unit', 0, 'Utama'),
('', 9, 'Switch Biasa 5 Port Fast Ethernet', 'Switch', 'Unit', 0, 'Utama'),
('', 10, 'Switch Biasa 8 Port Fast Ethernet', 'Switch', 'Unit', 0, 'Utama'),
('', 11, 'Sectoral Mantbox 15S', 'Sectoral', 'Unit', 0, 'Utama'),
('', 12, 'QRT - 5ac ', '', 'Unit', 1, 'Utama'),
('', 13, 'CRS112-8G-4S-IN ', '', 'Unit', 0, 'Utama'),
('', 14, 'Converter Hotcom ', '', 'Pasang', 0, 'Utama'),
('', 15, 'Conveter Netlink Biasa 10/100 (Pasang)', '', 'Pasang', 0, 'Utama'),
('', 16, 'Conveter Netlink Gigabit 10/100/1000', '', 'Pasang', 0, 'Utama'),
('', 17, 'Converter SFP TPLINK  Gigabit MC220L', '', 'Unit', 0, 'Utama'),
('', 18, 'RB2011UiAS-RM', '', 'Unit', 0, 'Utama'),
('', 19, 'SFP ', '', 'Unit', 0, 'Utama'),
('', 20, 'Router CCR1016-12G(v2)', '', 'Unit', 0, 'Utama'),
('', 21, 'Radio PTP LHG XL', '', 'Unit', 0, 'Utama'),
('', 22, 'Access Point U6-Lite + Adaptor ', '', 'Unit', 0, 'Utama'),
('', 23, 'Radio PTP DynaDishG-5HacD', '', 'Unit', 0, 'Utama'),
('', 24, 'Converter TP Link MC111CS', '', 'Unit', 0, 'Utama'),
('', 25, 'Converter TP Link MC112CS', '', 'Unit', 0, 'Utama'),
('', 26, 'CRS106-1C-5S', '', 'Unit', 0, 'Utama'),
('', 27, 'Radio Hotspot Ruijie Reyee RG-EW1200', '', 'Unit', 0, 'Utama'),
('', 28, 'Media Converter FE TL-FC311A-20', '', 'Unit', 1, 'Utama'),
('', 29, 'Media Converter FE TL-FC311B-20', '', 'Unit', 1, 'Utama'),
('', 30, 'PoE Injector', '', 'Unit', 0, 'Utama'),
('', 31, 'Kabel UTP Cat5e (1roll = 305mtr)', '', 'Meter', 100, 'Pendukung'),
('', 32, 'Kabel STP Cat5e (1roll = 305mtr)', '', 'Meter', 0, 'Pendukung'),
('', 33, 'Kabel Fiber Optic KU Mini 4 Core ', '', 'Meter', 100, 'Pendukung'),
('', 34, 'Connector RJ45 Cat5e (1pack isi 50pcs)', '', 'Pcs', 12, 'Pendukung'),
('', 35, 'Klem No UTP (6-8)', '', 'Pack', 0, 'Pendukung'),
('', 36, 'Klem Kabel Listrik (10)', '', 'Meter', 0, 'Pendukung'),
('', 37, 'Klem Besi U 2\"', '', 'Pcs', 2, 'Pendukung'),
('', 38, 'Klem Besi U 3\"', '', 'Pcs', 0, 'Pendukung'),
('', 39, 'Kabel Ties ', '', 'Pack', 0, 'Pendukung'),
('', 40, 'Solasi Nitto ', '', 'Pcs', 0, 'Pendukung'),
('', 41, 'Fisher', '', 'Pack', 1, 'Pendukung'),
('', 42, 'Skrup', '', 'Pack', 1, 'Pendukung'),
('', 43, 'Dynabolt', '', 'Pcs', 4, 'Pendukung'),
('', 44, 'Klem No 22 (Paku Klem Pipa)', '', 'Pack', 0, 'Pendukung'),
('', 45, 'Kabel FO Dropcocore 1 Core 3 Selling', '', 'Meter', 0, 'Pendukung'),
('', 46, 'Kabel FO Dropcore 4 Core 3 Selling', '', 'Meter', 800, 'Pendukung');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
