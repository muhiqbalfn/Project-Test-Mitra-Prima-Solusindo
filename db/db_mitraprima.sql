-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 06:55 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mitraprima`
--

-- --------------------------------------------------------

--
-- Table structure for table `mcustomer`
--

CREATE TABLE `mcustomer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type_customer` int(11) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `record_by` int(11) NOT NULL,
  `update_by` int(11) NOT NULL,
  `update_date` datetime NOT NULL,
  `record_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcustomer`
--

INSERT INTO `mcustomer` (`id`, `name`, `type_customer`, `address`, `email`, `no_tlp`, `record_by`, `update_by`, `update_date`, `record_date`) VALUES
(1, 'Iqbal', 1, 'Jl Tidar Barat No. 19 Malang', 'fnfirdaus45@gmail.com', '085327035224', 1, 1, '0000-00-00 00:00:00', '2020-09-28 20:44:00'),
(2, 'Adib', 2, 'Jl Tidar Barat No. 19 Malang', 'ali@gmail.com', '085327035224', 1, 0, '0000-00-00 00:00:00', '2020-09-28 17:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `mtype`
--

CREATE TABLE `mtype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `record_by` int(11) NOT NULL,
  `update_by` int(11) NOT NULL,
  `update_date` datetime NOT NULL,
  `record_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtype`
--

INSERT INTO `mtype` (`id`, `name`, `record_by`, `update_by`, `update_date`, `record_date`) VALUES
(1, 'developer', 1, 1, '2020-09-28 20:43:00', '2020-09-28 20:43:00'),
(2, 'Akuntan', 1, 1, '2020-09-28 00:00:00', '2020-09-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `muser`
--

CREATE TABLE `muser` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `muser`
--

INSERT INTO `muser` (`id`, `name`, `user`, `pass`) VALUES
(1, 'iqbal', 'iqbal', 'eedae20fc3c7a6e9c5b1102098771c70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mcustomer`
--
ALTER TABLE `mcustomer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_customer` (`type_customer`);

--
-- Indexes for table `mtype`
--
ALTER TABLE `mtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muser`
--
ALTER TABLE `muser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mcustomer`
--
ALTER TABLE `mcustomer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mtype`
--
ALTER TABLE `mtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `muser`
--
ALTER TABLE `muser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mcustomer`
--
ALTER TABLE `mcustomer`
  ADD CONSTRAINT `mcustomer_ibfk_1` FOREIGN KEY (`type_customer`) REFERENCES `mtype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
