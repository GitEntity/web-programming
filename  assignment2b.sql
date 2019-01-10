-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2015 at 10:12 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment2b`
--

-- --------------------------------------------------------

--
-- Table structure for table `parts2`
--

CREATE TABLE IF NOT EXISTS `parts2` (
  `Part Number` int(8) NOT NULL,
  `Part Name` varchar(30) NOT NULL,
  `Cost` decimal(8,0) NOT NULL,
  `Sell Price` decimal(8,0) NOT NULL,
  `Supplier` bigint(20) unsigned NOT NULL,
  `Qty in Stock` int(4) NOT NULL,
  `Last Order Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='The Parts2 Table';

--
-- Dumping data for table `parts2`
--

INSERT INTO `parts2` (`Part Number`, `Part Name`, `Cost`, `Sell Price`, `Supplier`, `Qty in Stock`, `Last Order Date`) VALUES
(7, 'BOND', '99999', '99999', 3, 1, '2015-10-01'),
(29, 'War head', '90000', '95000', 2, 45, '2015-04-07'),
(47, 'AGENT', '474747', '900099', 3, 2, '2015-05-13'),
(56, 'XLSM', '100', '125', 2, 23, '2015-06-17'),
(125, 'Nuke', '1000000', '1200000', 2, 500, '2014-12-17'),
(154, 'Bio Missile', '996587', '1000000', 3, 45, '2015-08-05'),
(300, 'Fuel SJ', '3650', '4000', 2, 65, '2015-04-07'),
(325, 'Air ', '524', '600', 1, 369, '2015-10-08'),
(5214, 'SSAE', '9001', '20000', 3, 10, '2014-12-17'),
(9008, 'MSLK', '900', '1200', 1, 12, '2015-11-07'),
(96587, 'Ground leap', '895', '9010', 3, 65, '2015-08-12'),
(123456, 'War Machine', '20', '40', 1, 500, '2015-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers2`
--

CREATE TABLE IF NOT EXISTS `suppliers2` (
  `ID` bigint(20) unsigned NOT NULL,
  `Company` tinytext NOT NULL,
  `E-mail Address` tinytext NOT NULL,
  `Business Phone` int(10) NOT NULL,
  `Fax No` int(10) NOT NULL,
  `Address` tinytext NOT NULL,
  `City` tinytext NOT NULL,
  `State/Province` tinytext NOT NULL,
  `Zip/Postal Code` tinytext NOT NULL,
  `Country/Region` varchar(20) NOT NULL DEFAULT 'Canada',
  `Web Page` tinytext NOT NULL,
  `Notes` longtext NOT NULL,
  `Terms` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers2`
--

INSERT INTO `suppliers2` (`ID`, `Company`, `E-mail Address`, `Business Phone`, `Fax No`, `Address`, `City`, `State/Province`, `Zip/Postal Code`, `Country/Region`, `Web Page`, `Notes`, `Terms`) VALUES
(1, 'Tesla', 'tesla@gmail.com', 123456789, 987654, 'Tesla Motors\r\nCalifornia, USA', 'Los Angeles', 'California ', '357159', 'Canada', 'www.TeslaMotor.com', 'Tesla .................. Motors..............', 'Accept the terms'),
(2, 'Google', 'Google.gmail.com', 963258741, 123654, '1125 Hyper loop', 'Stanford', 'California', '852467', 'USA', 'WWW.GOOGLE.COM', 'GOOLE.................#### abc...............', 'Google the terms'),
(3, 'Solar City ', 'SolarCity@gmail.com', 852461462, 632254, '1542 Solar City', 'New york city', 'New york', '521036', 'USA', 'www.solar.com', 'Random things................', 'No terms :)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parts2`
--
ALTER TABLE `parts2`
  ADD PRIMARY KEY (`Part Number`),
  ADD KEY `Suppliers2` (`Supplier`) USING BTREE;

--
-- Indexes for table `suppliers2`
--
ALTER TABLE `suppliers2`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parts2`
--
ALTER TABLE `parts2`
  ADD CONSTRAINT `parts2_ibfk_1` FOREIGN KEY (`Supplier`) REFERENCES `suppliers2` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
