-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 12:38 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fl`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hp` char(15) NOT NULL,
  `foto` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`id`, `nama`, `hp`, `foto`) VALUES
(28, 'nama', '+6282151816488', '656dee4f7f569.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hp` char(15) NOT NULL,
  `foto` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `nama`, `hp`, `foto`) VALUES
(26, 'efan', '+6282151816488', '656dfbe9b5760.png'),
(27, 'zefanya', '+6282151816488', '656e8c99e0caf.jpeg'),
(29, 'putri', '+6285696565763', '656f0e2cec2cb.jpeg'),
(32, 'kristi', '+6281524415271', '66f043f76b2d6.jpg'),
(33, 'tesalonika', '+6282190055917', '66f045aa20630.jpg'),
(35, ',maria', '+6282348603081', '672a30e418b13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL,
  `hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama`, `username`, `email`, `password`, `level`, `hp`) VALUES
(14, 'admin', 'admin', 'pehizefanya@gmail.com', '$2y$10$JTmAlCS7/HFVXjcCcIBMCOP69cOOu.QcYehhWNy4Sbu.kdH1jgxFS', '1', '+6282151816488'),
(22, 'woker', 'woker', 'pehizefanya@gmail.com', '$2y$10$SDzBAZ3lg2pRmUZoOC56DOPYb646q.s0XQN20R0yEwXX5MOCl9OQO', '2', '+6282151816488'),
(23, 'customer', 'customer', 'pehizefanya@gmail.com', '$2y$10$gTBi.MTPvlPfM3hmWfM/juWmMuzJrTkBrhu4TazJ03jRgqOtLpZkC', '3', '+6282151816488'),
(24, 'zefanya', 'b', 'pehizefanya@gmail.com', '$2y$10$OHGxIvJiy.giw3nG99c1kuXxks4U6e/GQd5Ijg6f5OhruXI/pml9y', '2', '+6282151816488'),
(25, 'putri', 'putri', 'putriwowiling14@gmail.com', '$2y$10$LhszZHlUzC8L1l1xKBD6kOPfY626VBwO5p4Ik.xfFDHwQFiH910SO', '2', '+6285696565763'),
(26, 'zefanya', 'zefanya', 'pehizefanya@gmail.com', '$2y$10$xE8wB3.9bCDEZaXzpliHEOkK5/xMs.Jm3uvCK3da0/J6/D404j2yq', '3', '+6282151816488'),
(27, 'alo', 'alo', 'pehizefanya@gmail.com', '$2y$10$U3FiJQwY71mFRDf.fBl7Mu65auUhVnNKE4DTTABvCED7mZV2I9CKG', '2', '+6282151816488'),
(28, 'efan', 'efan', 'pehizefanya@gmail.com', '$2y$10$zLEAu.MpgqoTLX9NId6uROpbjEOuCQqUEpjaN1Lx2hHSq4xYRFHKy', '3', '+6282151816488'),
(29, 'efan', 'efan', 'pehizefanya@gmail.com', '$2y$10$3hqKr1lPHxIAJtMTPGvDoe5OfoBjmgcXaLixwalzqMGIZlYu9AoRu', '2', '+6282151816488'),
(30, 'efan', 'efan', 'pehizefanya@gmail.com', '$2y$10$2y6zshFMaBnnzWmUaLExYuwUNOncKop06KZAqJNQnpDKmCmrUZrqe', '2', '+6282151816488'),
(31, 'fan', 'fan', 'pehizefanya@gmail.com', '$2y$10$wtx27R38KDR0pVZ0RyHg9udMiXmzMsDybTunQGg.5urvaDeeURtsy', '2', '+6282151816488'),
(32, 'efan', 'efan', 'christeniatagah09@gmail.com', '$2y$10$oJ2TjPYt4uf.403JCrfrPuC5sy1z8zg3PVNOM73/ELEX.6e6v9MNO', '3', '082151816488'),
(33, 'maria rumengan', 'pelanggan', '22210057@unima.ac.id', '$2y$10$TnXJjdIpbsaCDzOM3ItdFeQ/zLyp/czcIQtrIlN4AshAJrvfKn3ku', '3', '081524415271');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
