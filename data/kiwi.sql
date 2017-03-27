-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2017 at 11:47 PM
-- Server version: 5.7.16
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiwi`
--

-- --------------------------------------------------------
DROP TABLE IF EXISTS `history`;
DROP TABLE IF EXISTS `parts`;
DROP TABLE IF EXISTS `robots`;
--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `transactionType` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `timestamp` datetime NOT NULL,
  `plant` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `transactionType`, `quantity`, `amount`, `timestamp`, `plant`) VALUES
(1, 'Return', 1, '10.50', '2013-08-30 19:05:00', 'Apple'),
(2, 'Purchase', 1, '12.50', '2013-08-30 20:05:00', 'Berry');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` int(11) NOT NULL,
  `caCode` varchar(20) NOT NULL,
  `partCode` varchar(16) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `plant` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `caCode`, `partCode`, `amount`, `plant`) VALUES
(1, '0P7520128R', 'a1', '2.00', 'Berry'),
(2, '6C7890123D', 'a2', '1.00', 'Apple'),
(3, '9A7430123F', 'a3', '5.00', 'Banana'),
(4, '7ASF6AHF83', 'b1', '5.00', 'Berry'),
(5, '937F7NNDO0', 'b2', '5.00', 'Apple'),
(6, '18NF6SNM43', 'b3', '5.00', 'Banana');

-- --------------------------------------------------------

--
-- Table structure for table `robots`
--

CREATE TABLE `robots` (
  `id` int(11) NOT NULL,
  `parts` varchar(30) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `robots`
--

INSERT INTO `robots` (`id`, `parts`, `amount`) VALUES
(1, 'a1,a2,a3', '8.00'),
(2, 'b1,b2,b3', '15.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`caCode`);

--
-- Indexes for table `robots`
--
ALTER TABLE `robots`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
