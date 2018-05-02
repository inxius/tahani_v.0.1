-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 07:20 PM
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
-- Database: `db_tahani`
--

-- --------------------------------------------------------

--
-- Table structure for table `datahp`
--

CREATE TABLE `datahp` (
  `type` varchar(20) NOT NULL,
  `kode` int(15) NOT NULL,
  `harga` double DEFAULT NULL,
  `p` double DEFAULT NULL,
  `l` double DEFAULT NULL,
  `t` double DEFAULT NULL,
  `berat` double DEFAULT NULL,
  `standby` double DEFAULT NULL,
  `talktime` double DEFAULT NULL,
  `phonebook` int(11) DEFAULT NULL,
  `voicedialing` int(11) DEFAULT NULL,
  `games` int(11) DEFAULT NULL,
  `messagelength` int(11) DEFAULT NULL,
  `wap` tinyint(1) DEFAULT NULL,
  `gprs` tinyint(1) DEFAULT NULL,
  `infrared` tinyint(1) DEFAULT NULL,
  `mms` tinyint(1) DEFAULT NULL,
  `polyphonic` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datahp`
--

INSERT INTO `datahp` (`type`, `kode`, `harga`, `p`, `l`, `t`, `berat`, `standby`, `talktime`, `phonebook`, `voicedialing`, `games`, `messagelength`, `wap`, `gprs`, `infrared`, `mms`, `polyphonic`) VALUES
('6898', 3, 210, 235, 80, 40, 82, 170, 150, 50, 0, 3, 150, NULL, NULL, NULL, NULL, NULL),
('A3168', 11, 725, 111, 47, 23, 86, 180, 240, 100, 0, 4, 160, NULL, NULL, NULL, NULL, NULL),
('A50', 2, 60, 109, 46, 23, 97, 250, 300, 50, 0, 2, 760, NULL, NULL, NULL, NULL, NULL),
('C35', 2, 70, 118, 46, 22, 116, 180, 300, 199, 0, 4, 160, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenishp`
--

CREATE TABLE `jenishp` (
  `kode` int(15) NOT NULL,
  `namahp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenishp`
--

INSERT INTO `jenishp` (`kode`, `namahp`) VALUES
(1, 'Sagem'),
(2, 'Siemens'),
(3, 'TCL'),
(4, 'Sony'),
(5, 'Philips'),
(6, 'LG'),
(7, 'Trium'),
(8, 'Nokia'),
(9, 'Sony Ericson'),
(10, 'Samsung'),
(11, 'Ericsson'),
(12, 'Nixxo'),
(13, 'Motorolla');

-- --------------------------------------------------------

--
-- Table structure for table `tabelmu`
--

CREATE TABLE `tabelmu` (
  `type` varchar(20) NOT NULL,
  `mharga1` double DEFAULT NULL,
  `mharga2` double DEFAULT NULL,
  `mharga3` double DEFAULT NULL,
  `msize1` double DEFAULT NULL,
  `msize2` double DEFAULT NULL,
  `msize3` double DEFAULT NULL,
  `mberat1` double DEFAULT NULL,
  `mberat2` double DEFAULT NULL,
  `mberat3` double DEFAULT NULL,
  `mstandby1` double DEFAULT NULL,
  `mstandby2` double DEFAULT NULL,
  `mstandby3` double DEFAULT NULL,
  `mtalktime1` double DEFAULT NULL,
  `mtalktime2` double DEFAULT NULL,
  `mtalktime3` double DEFAULT NULL,
  `mphonebook1` double DEFAULT NULL,
  `mphonebook2` double DEFAULT NULL,
  `mphonebook3` double DEFAULT NULL,
  `mvoicedialing1` double DEFAULT NULL,
  `mvoicedialing2` double DEFAULT NULL,
  `mvoicedialing3` double DEFAULT NULL,
  `mgames1` double DEFAULT NULL,
  `mgames2` double DEFAULT NULL,
  `mgames3` double DEFAULT NULL,
  `mmessagelength1` double DEFAULT NULL,
  `mmessagelength2` double DEFAULT NULL,
  `mmessagelength3` double DEFAULT NULL,
  `mharga` double DEFAULT NULL,
  `msize` double DEFAULT NULL,
  `mberat` double DEFAULT NULL,
  `mstandby` double DEFAULT NULL,
  `mtalktime` double DEFAULT NULL,
  `mphonebook` double DEFAULT NULL,
  `mvoicedialing` double DEFAULT NULL,
  `mgames` double DEFAULT NULL,
  `mmessagelength` double DEFAULT NULL,
  `mwap` double DEFAULT NULL,
  `mgprs` double DEFAULT NULL,
  `minfrared` double DEFAULT NULL,
  `mmms` double DEFAULT NULL,
  `mpolyphonic` double DEFAULT NULL,
  `mu` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelmu`
--

INSERT INTO `tabelmu` (`type`, `mharga1`, `mharga2`, `mharga3`, `msize1`, `msize2`, `msize3`, `mberat1`, `mberat2`, `mberat3`, `mstandby1`, `mstandby2`, `mstandby3`, `mtalktime1`, `mtalktime2`, `mtalktime3`, `mphonebook1`, `mphonebook2`, `mphonebook3`, `mvoicedialing1`, `mvoicedialing2`, `mvoicedialing3`, `mgames1`, `mgames2`, `mgames3`, `mmessagelength1`, `mmessagelength2`, `mmessagelength3`, `mharga`, `msize`, `mberat`, `mstandby`, `mtalktime`, `mphonebook`, `mvoicedialing`, `mgames`, `mmessagelength`, `mwap`, `mgprs`, `minfrared`, `mmms`, `mpolyphonic`, `mu`) VALUES
('6898', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('A3168', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('A50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('C35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datahp`
--
ALTER TABLE `datahp`
  ADD PRIMARY KEY (`type`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `jenishp`
--
ALTER TABLE `jenishp`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tabelmu`
--
ALTER TABLE `tabelmu`
  ADD PRIMARY KEY (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenishp`
--
ALTER TABLE `jenishp`
  MODIFY `kode` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datahp`
--
ALTER TABLE `datahp`
  ADD CONSTRAINT `datahp_ibfk_1` FOREIGN KEY (`kode`) REFERENCES `jenishp` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabelmu`
--
ALTER TABLE `tabelmu`
  ADD CONSTRAINT `tabelmu_ibfk_1` FOREIGN KEY (`type`) REFERENCES `datahp` (`type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
