-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2020 at 01:10 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `bno` int NOT NULL AUTO_INCREMENT,
  `Dno` bigint NOT NULL,
  `pno` bigint NOT NULL,
  `cf` int NOT NULL,
  `mf` int NOT NULL,
  `am` int NOT NULL,
  `total` int NOT NULL,
  `Bdate` date NOT NULL,
  PRIMARY KEY (`bno`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bno`, `Dno`, `pno`, `cf`, `mf`, `am`, `total`, `Bdate`) VALUES
(1, 11111121, 111, 100, 250, 400, 750, '0000-00-00'),
(2, 11111121, 111, 122, 2222, 2222, 6066, '2020-10-14'),
(3, 2147483647, 1111111, 100, 250, 450, 2300, '0000-00-00'),
(4, 2147483647, 1111111, 250, 250, 500, 6500, '2020-10-12'),
(5, 2147483647, 1111111, 1, 1, 1, 3, '2020-10-12'),
(6, 2345234523452345, 1111111, 100, 100, 100, 1800, '2020-10-12'),
(7, 2345234523452345, 111, 100, 100, 100, 3800, '2020-10-12'),
(8, 2345234523452345, 9876678998766789, 100, 100, 1000, 4700, '2020-10-12'),
(9, 2345234523452345, 1234567891234567, 12, 12, 12, 1536, '2020-10-26'),
(10, 2345234523452345, 1234567891234567, 23, 23, 23, 1569, '2020-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `docslots`
--

DROP TABLE IF EXISTS `docslots`;
CREATE TABLE IF NOT EXISTS `docslots` (
  `Dno` bigint NOT NULL,
  `s1` time(6) NOT NULL,
  `s2` time(6) NOT NULL,
  `s3` time(6) NOT NULL,
  `s4` time(6) NOT NULL,
  `s5` time(6) NOT NULL,
  `s6` time(6) NOT NULL,
  `s7` time(6) NOT NULL,
  `s8` time(6) NOT NULL,
  PRIMARY KEY (`Dno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `docslots`
--

INSERT INTO `docslots` (`Dno`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`) VALUES
(10001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(10002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(10004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.838000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(10003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.838000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(10005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '05:00:00.000000', '00:00:00.000000'),
(20001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.880000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(20002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.880000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(20003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(20004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.087000', '04:30:00.549000', '00:00:00.000000', '00:00:00.000000'),
(20005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.087000', '04:30:00.549000', '05:00:00.463000', '05:30:00.000000'),
(30001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.087000', '04:30:00.549000', '00:00:00.000000', '00:00:00.000000'),
(30002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(30003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(30004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(30005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.001000', '05:00:00.000000', '00:00:00.000000'),
(40001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(40002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(40003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '05:30:00.000000'),
(40004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(40005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(50001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(50002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(50003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(50004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(50005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(60001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(60002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(60003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(60004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(60005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '05:30:00.000000'),
(70001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(70002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(70003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(70004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(70005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(80001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(80002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(80003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(80004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(80005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(90001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(90002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(90003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(90004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(90005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(11001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(11002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '05:30:00.000000'),
(11003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(11004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(11005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(12001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(12002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(12003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(12004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(12005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '05:30:00.000000'),
(13001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(13002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(13003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '05:30:00.000000'),
(13004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(13005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(14001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(14002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(14003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(14004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(14005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(15001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(15002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(15003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(15004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(15005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(16001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(16002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(16003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '05:30:00.000000'),
(16004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(16005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(17001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(17002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(17003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(17004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(17005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(18001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(18002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(18003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(18004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '05:30:00.000000'),
(18005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(19001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(19002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(19003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(19004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(19005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(21001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(21002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(21003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '05:30:00.000000'),
(21004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(21005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(22001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(22002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(22003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(22004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(22005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(23001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(23002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(23003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(23004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(23005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(24001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(24002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(24003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(24004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(24005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(25001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '05:30:00.000000'),
(25002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(25003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(25004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(25005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(26001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(26002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '05:30:00.000000'),
(26003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(26004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(26005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(27001, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '05:00:00.000000', '00:00:00.000000'),
(27002, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(27003, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000'),
(27004, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000'),
(27005, '02:00:00.000000', '02:30:00.000000', '03:00:00.000000', '03:30:00.000000', '04:00:00.000000', '04:30:00.000000', '00:00:00.000000', '00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `Dno` bigint NOT NULL,
  `Dname` varchar(30) NOT NULL,
  `Dhsp` varchar(30) NOT NULL,
  `Dspec` varchar(25) NOT NULL,
  `Dimg` varchar(50) NOT NULL,
  `Dcity` varchar(25) NOT NULL,
  `Ddesc` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Dslots` int NOT NULL,
  `Dduration` int NOT NULL,
  PRIMARY KEY (`Dno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Dno`, `Dname`, `Dhsp`, `Dspec`, `Dimg`, `Dcity`, `Ddesc`, `Dslots`, `Dduration`) VALUES
(10001, 'K B Prasad', 'Apollo Hospitals', 'Cardiologist', 'd1.png', 'Bangalore', 'Apollo Hospitals, Bangalore – a world class JCI accredited super speciality hospital, situated on Bannerghatta road is a six-storied facility, equipped with the latest in the medical world.', 5, 30),
(10002, 'Sunil Narayal Dutt', 'Apollo Hospitals', 'Cardiologist', 'd1.png', 'Bangalore', 'Apollo Hospitals, Bangalore – a world class JCI accredited super speciality hospital, situated on Bannerghatta road is a six-storied facility, equipped with the latest in the medical world.', 4, 30),
(10003, 'K N Krishna', 'Apollo Hospitals', 'Cardiologist', 'd1.png', 'Bangalore', 'Apollo Hospitals, Bangalore – a world class JCI accredited super speciality hospital, situated on Bannerghatta road is a six-storied facility, equipped with the latest in the medical world.', 7, 30),
(10004, 'Sanjay Pai', 'Apollo Hospitals', 'ENT', 'd1.png', 'Bangalore', 'Apollo Hospitals, Bangalore – a world class JCI accredited super speciality hospital, situated on Bannerghatta road is a six-storied facility, equipped with the latest in the medical world.', 6, 30),
(10005, 'Saurabh Misra', 'Apollo Hospitals', 'Cardiologist', 'd1.png', 'Bangalore', 'Apollo Hospitals, Bangalore – a world class JCI accredited super speciality hospital, situated on Bannerghatta road is a six-storied facility, equipped with the latest in the medical world.', 4, 30),
(20001, 'Mrithunjaya Prasad', 'AyurVAID Hospital', 'ENT', 'd2.png', 'Bangalore', 'AyurVAID Hospitals, Bangalore, India, is a new generation chain of Ayurveda hospitals focused on root cause diagnosis and management of serious systemic, chronic diseases.', 6, 30),
(20002, 'Rasmi Johnson', 'AyurVAID Hospital', 'Cardiologist', 'd2.png', 'Bangalore', 'AyurVAID Hospitals, Bangalore, India, is a new generation chain of Ayurveda hospitals focused on root cause diagnosis and management of serious systemic, chronic diseases.', 5, 30),
(20003, 'V Ajithkumar', 'AyurVAID Hospital', 'ENT', 'd2.png', 'Bangalore', 'AyurVAID Hospitals, Bangalore, India, is a new generation chain of Ayurveda hospitals focused on root cause diagnosis and management of serious systemic, chronic diseases.', 4, 30),
(20004, 'Zankhana M Buch', 'AyurVAID Hospital', 'ENT', 'd2.png', 'Bangalore', 'AyurVAID Hospitals, Bangalore, India, is a new generation chain of Ayurveda hospitals focused on root cause diagnosis and management of serious systemic, chronic diseases.', 6, 30),
(20005, 'Harshitha Kumari', 'AyurVAID Hospital', 'Cardiologist', 'd2.png', 'Bangalore', 'AyurVAID Hospitals, Bangalore, India, is a new generation chain of Ayurveda hospitals focused on root cause diagnosis and management of serious systemic, chronic diseases.', 8, 30),
(30001, 'Varghese Zachariah', 'Bangalore Baptist Hospital', 'Cardiologist', 'd3.png', 'Bangalore', 'Mission: To provide quality wholistic care to all people and train others to do the same, sharing the love of Jesus Christ, drawing people to Him and growing together into a mature community.', 6, 30),
(30002, 'Carol Z Mascanrenhas', 'Bangalore Baptist Hospital', 'ENT', 'd3.png', 'Bangalore', 'Mission: To provide quality wholistic care to all people and train others to do the same, sharing the love of Jesus Christ, drawing people to Him and growing together into a mature community.', 5, 30),
(30003, 'Anil Kumar', 'Bangalore Baptist Hospital', 'ENT', 'd3.png', 'Bangalore', 'Mission: To provide quality wholistic care to all people and train others to do the same, sharing the love of Jesus Christ, drawing people to Him and growing together into a mature community.', 6, 30),
(30004, 'Sukanya', 'Bangalore Baptist Hospital', 'Cardiologist', 'd3.png', 'Bangalore', 'Mission: To provide quality wholistic care to all people and train others to do the same, sharing the love of Jesus Christ, drawing people to Him and growing together into a mature community.', 5, 30),
(30005, 'Suman Rath', 'Bangalore Baptist Hospital', 'ENT', 'd3.png', 'Bangalore', 'Mission: To provide quality wholistic care to all people and train others to do the same, sharing the love of Jesus Christ, drawing people to Him and growing together into a mature community.', 7, 30),
(40001, 'Murali Chakravarthy', 'Fortis Healthcare', 'ENT', 'd4.png', 'Bangalore', 'Our major focus areas are Cardiology, Cardiac Surgery, Urology, Orthopedics, Neuro-Surgery, critical care and women’s care.', 5, 30),
(40002, 'Venkatesh S', 'Fortis Healthcare', 'Cardiologist', 'd4.png', 'Bangalore', 'Our major focus areas are Cardiology, Cardiac Surgery, Urology, Orthopedics, Neuro-Surgery, critical care and women’s care.', 6, 30),
(40003, 'Vivek Jawali', 'Fortis Healthcare', 'ENT', 'd4.png', 'Bangalore', 'Our major focus areas are Cardiology, Cardiac Surgery, Urology, Orthopedics, Neuro-Surgery, critical care and women’s care.', 8, 30),
(40004, 'Sheelu Srinivas', 'Fortis Healthcare', 'Cardiologist', 'd4.png', 'Bangalore', 'Our major focus areas are Cardiology, Cardiac Surgery, Urology, Orthopedics, Neuro-Surgery, critical care and women’s care.', 7, 30),
(40005, 'Poornachandra ', 'Fortis Healthcare', 'ENT', 'd4.png', 'Bangalore', 'Our major focus areas are Cardiology, Cardiac Surgery, Urology, Orthopedics, Neuro-Surgery, critical care and women’s care.', 5, 30),
(50001, 'Radheshyam', 'Health Care Global Enterprises', 'ENT', 'd5.png', 'Bangalore', 'HCG is South Asia\'s Largest Cancer Care Network, with over 500 oncologists across 29 centers, with a single intention of creating accessible cancer care centers.', 5, 30),
(50002, 'Shridhar', 'Health Care Global Enterprises', 'Cardiologist', 'd5.png', 'Bangalore', 'HCG is South Asia\'s Largest Cancer Care Network, with over 500 oncologists across 29 centers, with a single intention of creating accessible cancer care centers.', 7, 30),
(50003, 'Jagadish Chatanalli', 'Health Care Global Enterprises', 'ENT', 'd5.png', 'Bangalore', 'HCG is South Asia\'s Largest Cancer Care Network, with over 500 oncologists across 29 centers, with a single intention of creating accessible cancer care centers.', 4, 30),
(50004, 'Rani Bhat', 'Health Care Global Enterprises', 'ENT', 'd5.png', 'Bangalore', 'HCG is South Asia\'s Largest Cancer Care Network, with over 500 oncologists across 29 centers, with a single intention of creating accessible cancer care centers.', 6, 30),
(50005, 'Shekar Patil', 'Health Care Global Enterprises', 'ENT', 'd5.png', 'Bangalore', 'HCG is South Asia\'s Largest Cancer Care Network, with over 500 oncologists across 29 centers, with a single intention of creating accessible cancer care centers.', 4, 30),
(60001, 'Senthilkumar', 'Kamakshi Memorial Hospital', 'Cardiologist', 'd6.png', 'Chennai', 'The guiding principle of the hospital is to offer the latest in health care facilities at Par  with international standards (obviating the need to go abroad for treatment) and also make them available to increasing numbers of our population.', 6, 30),
(60002, 'Rajeshwari Ramachandran', 'Kamakshi Memorial Hospital', 'Neurology', 'd6.png', 'Chennai', 'The guiding principle of the hospital is to offer the latest in health care facilities at Par  with international standards (obviating the need to go abroad for treatment) and also make them available to increasing numbers of our population.', 4, 30),
(60003, 'Vijay Iyer', 'Kamakshi Memorial Hospital', 'Neurology', 'd6.png', 'Chennai', 'The guiding principle of the hospital is to offer the latest in health care facilities at Par  with international standards (obviating the need to go abroad for treatment) and also make them available to increasing numbers of our population.', 6, 30),
(60004, 'Arun Kumar', 'Kamakshi Memorial Hospital', 'Neurology', 'd6.png', 'Chennai', 'The guiding principle of the hospital is to offer the latest in health care facilities at Par  with international standards (obviating the need to go abroad for treatment) and also make them available to increasing numbers of our population.', 5, 30),
(60005, 'Savitha', 'Kamakshi Memorial Hospital', 'Cardiologist', 'd6.png', 'Chennai', 'The guiding principle of the hospital is to offer the latest in health care facilities at Par  with international standards (obviating the need to go abroad for treatment) and also make them available to increasing numbers of our population.', 8, 30),
(70001, 'S Thangavelu', 'Mehta\'s Hospital', 'Neurology', 'd7.png', 'Chennai', 'DrMehta’s was joined by a large team of respected clinicians including Dr R Shanmugasundaram, Dr Ahmed Ali, Dr A N Parthasarthy, Dr Annamalai, Dr Nammalwarandher children Dr UshaShuklaand Dilip Mehta, who helped pave the way for expansion and growth of a second unit–Dr.Mehta\'s Children’s Hospitals as well as a significant increase in beds and facilities between 1994 and 2006.', 7, 30),
(70002, 'Usha Shukla', 'Mehta\'s Hospital', 'Neurology', 'd7.png', 'Chennai', 'DrMehta’s was joined by a large team of respected clinicians including Dr R Shanmugasundaram, Dr Ahmed Ali, Dr A N Parthasarthy, Dr Annamalai, Dr Nammalwarandher children Dr UshaShuklaand Dilip Mehta, who helped pave the way for expansion and growth of a second unit–Dr.Mehta\'s Children’s Hospitals as well as a significant increase in beds and facilities between 1994 and 2006.', 5, 30),
(70003, 'K P Thirumaran', 'Mehta\'s Hospital', 'Cardiologist', 'd7.png', 'Chennai', 'DrMehta’s was joined by a large team of respected clinicians including Dr R Shanmugasundaram, Dr Ahmed Ali, Dr A N Parthasarthy, Dr Annamalai, Dr Nammalwarandher children Dr UshaShuklaand Dilip Mehta, who helped pave the way for expansion and growth of a second unit–Dr.Mehta\'s Children’s Hospitals as well as a significant increase in beds and facilities between 1994 and 2006.', 7, 30),
(70004, 'Parthasarthy Srinivasan', 'Mehta\'s Hospital', 'Neurology', 'd7.png', 'Chennai', 'DrMehta’s was joined by a large team of respected clinicians including Dr R Shanmugasundaram, Dr Ahmed Ali, Dr A N Parthasarthy, Dr Annamalai, Dr Nammalwarandher children Dr UshaShuklaand Dilip Mehta, who helped pave the way for expansion and growth of a second unit–Dr.Mehta\'s Children’s Hospitals as well as a significant increase in beds and facilities between 1994 and 2006.', 4, 30),
(70005, 'D Prabhakar', 'Mehta\'s Hospital', 'Neurology', 'd7.png', 'Chennai', 'DrMehta’s was joined by a large team of respected clinicians including Dr R Shanmugasundaram, Dr Ahmed Ali, Dr A N Parthasarthy, Dr Annamalai, Dr Nammalwarandher children Dr UshaShuklaand Dilip Mehta, who helped pave the way for expansion and growth of a second unit–Dr.Mehta\'s Children’s Hospitals as well as a significant increase in beds and facilities between 1994 and 2006.', 8, 30),
(80001, 'G Prabhakaran', 'Fortis Malar Hospital', 'Neurology', 'd8.png', 'Chennai', 'Fortis Malar Hospital, formerly known as Malar Hospital, is one of the distinguished multi super-specialty corporate hospitals in Chennai providing comprehensive medical care in areas of cardiology, cardio-thoracic surgery, neurology, neurosurgery, orthopedics, nephrology, gynecology, gastroenterology, urology, pediatrics, diabetics and so on.', 5, 30),
(80002, 'Paari R', 'Fortis Malar Hospital', 'Neurology', 'd8.png', 'Chennai', 'Fortis Malar Hospital, formerly known as Malar Hospital, is one of the distinguished multi super-specialty corporate hospitals in Chennai providing comprehensive medical care in areas of cardiology, cardio-thoracic surgery, neurology, neurosurgery, orthopedics, nephrology, gynecology, gastroenterology, urology, pediatrics, diabetics and so on.', 6, 30),
(80003, 'Shankar M N', 'Fortis Malar Hospital', 'Cardiologist', 'd8.png', 'Chennai', 'Fortis Malar Hospital, formerly known as Malar Hospital, is one of the distinguished multi super-specialty corporate hospitals in Chennai providing comprehensive medical care in areas of cardiology, cardio-thoracic surgery, neurology, neurosurgery, orthopedics, nephrology, gynecology, gastroenterology, urology, pediatrics, diabetics and so on.', 5, 30),
(80004, 'Basumani', 'Fortis Malar Hospital', 'Neurology', 'd8.png', 'Chennai', 'Fortis Malar Hospital, formerly known as Malar Hospital, is one of the distinguished multi super-specialty corporate hospitals in Chennai providing comprehensive medical care in areas of cardiology, cardio-thoracic surgery, neurology, neurosurgery, orthopedics, nephrology, gynecology, gastroenterology, urology, pediatrics, diabetics and so on.', 4, 30),
(80005, 'Suresh Rao', 'Fortis Malar Hospital', 'Neurology', 'd8.png', 'Chennai', 'Fortis Malar Hospital, formerly known as Malar Hospital, is one of the distinguished multi super-specialty corporate hospitals in Chennai providing comprehensive medical care in areas of cardiology, cardio-thoracic surgery, neurology, neurosurgery, orthopedics, nephrology, gynecology, gastroenterology, urology, pediatrics, diabetics and so on.', 7, 30),
(90001, 'Mahesh Vakamudi', 'Sri Ramachandra Medical Centre', 'Neurology', 'd9.png', 'Chennai', 'Sri Ramachandra Medical Centre has an outstanding reputation for excellence in patient care for more than two decades.  Keeping pace with the need of the urban and rural population, this institution has upgraded its services and has added super specialties.', 6, 30),
(90002, 'T Periyasamy', 'Sri Ramachandra Medical Centre', 'Neurology', 'd9.png', 'Chennai', 'Sri Ramachandra Medical Centre has an outstanding reputation for excellence in patient care for more than two decades.  Keeping pace with the need of the urban and rural population, this institution has upgraded its services and has added super specialties.', 4, 30),
(90003, 'Asha Murthy', 'Sri Ramachandra Medical Centre', 'Neurology', 'd9.png', 'Chennai', 'Sri Ramachandra Medical Centre has an outstanding reputation for excellence in patient care for more than two decades.  Keeping pace with the need of the urban and rural population, this institution has upgraded its services and has added super specialties.', 7, 30),
(90004, 'R Sudha', 'Sri Ramachandra Medical Centre', 'Cardiologist', 'd9.png', 'Chennai', 'Sri Ramachandra Medical Centre has an outstanding reputation for excellence in patient care for more than two decades.  Keeping pace with the need of the urban and rural population, this institution has upgraded its services and has added super specialties.', 6, 30),
(90005, 'A Ravikumar', 'Sri Ramachandra Medical Centre', 'ENT', 'd9.png', 'Chennai', 'Sri Ramachandra Medical Centre has an outstanding reputation for excellence in patient care for more than two decades.  Keeping pace with the need of the urban and rural population, this institution has upgraded its services and has added super specialties.', 5, 30),
(11001, 'S Ranjan', 'The Madras Medical Mission', 'Cardiologist', 'd10.png', 'Chennai', 'The Madras Medical Mission is dedicated to the care of the sick and promotion of health, transcending the barriers of religion, nationality, social position or financial status.', 6, 30),
(11002, 'Vimala J', 'The Madras Medical Mission', 'Neurology', 'd10.png', 'Chennai', 'The Madras Medical Mission is dedicated to the care of the sick and promotion of health, transcending the barriers of religion, nationality, social position or financial status.', 8, 30),
(11003, 'C Kumar', 'The Madras Medical Mission', 'Neurology', 'd10.png', 'Chennai', 'The Madras Medical Mission is dedicated to the care of the sick and promotion of health, transcending the barriers of religion, nationality, social position or financial status.', 7, 30),
(11004, ' S Sudhakaran', 'The Madras Medical Mission', 'Cardiologist', 'd10.png', 'Chennai', 'The Madras Medical Mission is dedicated to the care of the sick and promotion of health, transcending the barriers of religion, nationality, social position or financial status.', 4, 30),
(11005, 'R S Arun', 'The Madras Medical Mission', 'General Medicine', 'd10.png', 'Chennai', 'The Madras Medical Mission is dedicated to the care of the sick and promotion of health, transcending the barriers of religion, nationality, social position or financial status.', 5, 30),
(12001, 'Panda Ramakanta', 'Asian Heart Institute', 'Cardiologist', 'd11.png', 'Mumbai', 'The hospital today is the place to go for all complex cardiac care, be the patients with most damaged heartwood needs highest quality of care or complex second surgeries or other critical diseases like aortic aneurysms, complex heart valve repair, heart transplants, complex angiography and angioplasties, patient requiring multiple devices like AICDs and pacemaker, cardiac resynchronization therapy.', 6, 30),
(12002, 'Dora Santosh', 'Asian Heart Institute', 'General Medicine', 'd11.png', 'Mumbai', 'The hospital today is the place to go for all complex cardiac care, be the patients with most damaged heartwood needs highest quality of care or complex second surgeries or other critical diseases like aortic aneurysms, complex heart valve repair, heart transplants, complex angiography and angioplasties, patient requiring multiple devices like AICDs and pacemaker, cardiac resynchronization therapy.', 5, 30),
(12003, 'Khanzode Sandeep', 'Asian Heart Institute', 'Cardiologist', 'd11.png', 'Mumbai', 'The hospital today is the place to go for all complex cardiac care, be the patients with most damaged heartwood needs highest quality of care or complex second surgeries or other critical diseases like aortic aneurysms, complex heart valve repair, heart transplants, complex angiography and angioplasties, patient requiring multiple devices like AICDs and pacemaker, cardiac resynchronization therapy.', 7, 30),
(12004, 'Garach Narendra', 'Asian Heart Institute', 'General Medicine', 'd11.png', 'Mumbai', 'The hospital today is the place to go for all complex cardiac care, be the patients with most damaged heartwood needs highest quality of care or complex second surgeries or other critical diseases like aortic aneurysms, complex heart valve repair, heart transplants, complex angiography and angioplasties, patient requiring multiple devices like AICDs and pacemaker, cardiac resynchronization therapy.', 4, 30),
(12005, 'Santosh Dora', 'Asian Heart Institute', 'General Medicine', 'd11.png', 'Mumbai', 'The hospital today is the place to go for all complex cardiac care, be the patients with most damaged heartwood needs highest quality of care or complex second surgeries or other critical diseases like aortic aneurysms, complex heart valve repair, heart transplants, complex angiography and angioplasties, patient requiring multiple devices like AICDs and pacemaker, cardiac resynchronization therapy.', 8, 30),
(13001, 'Gopal Ramkrishnan', 'BNH HCG Cancer Centre', 'Cardiologist', 'd12.png', 'Mumbai', 'The BNH HCG Cancer Centre comprises of a dedicated cancer ward, the Advanced Centre for Radiation Oncology (ACRO), Nuclear Medicine Department.', 4, 30),
(13002, 'Sudeep Sarkar', 'BNH HCG Cancer Centre', 'General Medicine', 'd12.png', 'Mumbai', 'The BNH HCG Cancer Centre comprises of a dedicated cancer ward, the Advanced Centre for Radiation Oncology (ACRO), Nuclear Medicine Department.', 6, 30),
(13003, 'Deepak Patkar', 'BNH HCG Cancer Centre', 'General Medicine', 'd12.png', 'Mumbai', 'The BNH HCG Cancer Centre comprises of a dedicated cancer ward, the Advanced Centre for Radiation Oncology (ACRO), Nuclear Medicine Department.', 8, 30),
(13004, 'Avinash Deo', 'BNH HCG Cancer Centre', 'General Medicine', 'd12.png', 'Mumbai', 'The BNH HCG Cancer Centre comprises of a dedicated cancer ward, the Advanced Centre for Radiation Oncology (ACRO), Nuclear Medicine Department.', 6, 30),
(13005, 'Shweta Bansal', 'BNH HCG Cancer Centre', 'Cardiologist', 'd12.png', 'Mumbai', 'The BNH HCG Cancer Centre comprises of a dedicated cancer ward, the Advanced Centre for Radiation Oncology (ACRO), Nuclear Medicine Department.', 7, 30),
(14001, 'Chetna Bakshi', 'Jupiter Hospital', 'General Medicine', 'd13.png', 'Mumbai', 'Jupiter Hospital is multi-specialty tertiary care 325 bed State of Art Hospital, which is comparable to the best in the world. It is spread across 3 acres in the pristine yet cosmopolitan locale of Thane in the Greater Mumbai Region and approximately an hour away from the international airport.', 6, 30),
(14002, 'Harshad Purandare', 'Jupiter Hospital', 'General Medicine', 'd13.png', 'Mumbai', 'Jupiter Hospital is multi-specialty tertiary care 325 bed State of Art Hospital, which is comparable to the best in the world. It is spread across 3 acres in the pristine yet cosmopolitan locale of Thane in the Greater Mumbai Region and approximately an hour away from the international airport.', 4, 30),
(14003, 'Vijay Surase', 'Jupiter Hospital', 'Cardiologist', 'd13.png', 'Mumbai', 'Jupiter Hospital is multi-specialty tertiary care 325 bed State of Art Hospital, which is comparable to the best in the world. It is spread across 3 acres in the pristine yet cosmopolitan locale of Thane in the Greater Mumbai Region and approximately an hour away from the international airport.', 6, 30),
(14004, 'Padma Menon', 'Jupiter Hospital', 'General Medicine', 'd13.png', 'Mumbai', 'Jupiter Hospital is multi-specialty tertiary care 325 bed State of Art Hospital, which is comparable to the best in the world. It is spread across 3 acres in the pristine yet cosmopolitan locale of Thane in the Greater Mumbai Region and approximately an hour away from the international airport.', 5, 0),
(14005, 'Mukesh Shete', 'Jupiter Hospital', 'Cardiologist', 'd13.png', 'Mumbai', 'Jupiter Hospital is multi-specialty tertiary care 325 bed State of Art Hospital, which is comparable to the best in the world. It is spread across 3 acres in the pristine yet cosmopolitan locale of Thane in the Greater Mumbai Region and approximately an hour away from the international airport.', 4, 30),
(15001, 'Avnish Arora', 'Seven Hills Healthcare', 'Cardiologist', 'd14.png', 'Mumbai', 'A sprawling 17 acres of scenic landscape in the heart of Mumbai is the abode of SevenHills health city with built up area of 2 million sq ft. Within it lies one of Asia’s largest hospitals, along with residential accommodation for its doctors & staff.', 6, 30),
(15002, ' V Laheri', 'Seven Hills Healthcare', 'Dental', 'd14.png', 'Mumbai', 'A sprawling 17 acres of scenic landscape in the heart of Mumbai is the abode of SevenHills health city with built up area of 2 million sq ft. Within it lies one of Asia’s largest hospitals, along with residential accommodation for its doctors & staff.', 7, 30),
(15003, 'Abhraham Zacariah', 'Seven Hills Healthcare', 'Cardiologist', 'd14.png', 'Mumbai', 'A sprawling 17 acres of scenic landscape in the heart of Mumbai is the abode of SevenHills health city with built up area of 2 million sq ft. Within it lies one of Asia’s largest hospitals, along with residential accommodation for its doctors & staff.', 6, 30),
(15004, 'C Vasudeo	', 'Seven Hills Healthcare', 'Cardiologist', 'd14.png', 'Mumbai', 'A sprawling 17 acres of scenic landscape in the heart of Mumbai is the abode of SevenHills health city with built up area of 2 million sq ft. Within it lies one of Asia’s largest hospitals, along with residential accommodation for its doctors & staff.', 5, 30),
(15005, 'Avinash Date	', 'Seven Hills Healthcare', 'Dental', 'd14.png', 'Mumbai', 'A sprawling 17 acres of scenic landscape in the heart of Mumbai is the abode of SevenHills health city with built up area of 2 million sq ft. Within it lies one of Asia’s largest hospitals, along with residential accommodation for its doctors & staff.', 7, 30),
(16001, 'Neetu Asher', 'Wavikar Eye Institute', 'Cardiologist', 'd15.png', 'Mumbai', 'We at Wavikar Eye Institute are committed to provide highest quality of eye care services to all our pts under one roof by combining latest technology and refined human skills.', 5, 30),
(16002, 'Yogesh Bhadange', 'Wavikar Eye Institute', 'Cardiologist', 'd15.png', 'Mumbai', 'We at Wavikar Eye Institute are committed to provide highest quality of eye care services to all our pts under one roof by combining latest technology and refined human skills.', 4, 30),
(16003, 'Anjali Aundhkar', 'Wavikar Eye Institute', 'Dental', 'd15.png', 'Mumbai', 'We at Wavikar Eye Institute are committed to provide highest quality of eye care services to all our pts under one roof by combining latest technology and refined human skills.', 8, 30),
(16004, 'Sandeep Asher', 'Wavikar Eye Institute', 'Cardiologist', 'd15.png', 'Mumbai', 'We at Wavikar Eye Institute are committed to provide highest quality of eye care services to all our pts under one roof by combining latest technology and refined human skills.', 4, 30),
(16005, 'Anjali Nair', 'Wavikar Eye Institute', 'Cardiologist', 'd15.png', 'Mumbai', 'We at Wavikar Eye Institute are committed to provide highest quality of eye care services to all our pts under one roof by combining latest technology and refined human skills.', 6, 30),
(17001, ' D Suhasini', 'Apollo Hospitals', 'Cardiologist', 'd16.png', 'Hyderabad', 'Apollo Hospitals is promoted by Dr. Prathap C. Reddy (Padma Vibhushan, 2010). A humble beginning with a 150 bedded hospital, the Apollo Group today, represents a dominant healthcare player with a global footprint.', 4, 30),
(17002, 'Bharatendu Swain', 'Apollo Hospitals', 'General Medicine', 'd16.png', 'Hyderabad', 'Apollo Hospitals is promoted by Dr. Prathap C. Reddy (Padma Vibhushan, 2010). A humble beginning with a 150 bedded hospital, the Apollo Group today, represents a dominant healthcare player with a global footprint.', 5, 30),
(17003, 'P C Rath', 'Apollo Hospitals', 'Cardiologist', 'd16.png', 'Hyderabad', 'Apollo Hospitals is promoted by Dr. Prathap C. Reddy (Padma Vibhushan, 2010). A humble beginning with a 150 bedded hospital, the Apollo Group today, represents a dominant healthcare player with a global footprint.', 7, 30),
(17004, 'Vijay Dikshit', 'Apollo Hospitals', 'Cardiologist', 'd16.png', 'Hyderabad', 'Apollo Hospitals is promoted by Dr. Prathap C. Reddy (Padma Vibhushan, 2010). A humble beginning with a 150 bedded hospital, the Apollo Group today, represents a dominant healthcare player with a global footprint.', 6, 30),
(17005, 'Srinivas J', 'Apollo Hospitals', 'Cardiologist', 'd16.png', 'Hyderabad', 'Apollo Hospitals is promoted by Dr. Prathap C. Reddy (Padma Vibhushan, 2010). A humble beginning with a 150 bedded hospital, the Apollo Group today, represents a dominant healthcare player with a global footprint.', 5, 30),
(18001, 'Dharmesh Kapoor', 'Aware Global Hospitals', 'Cardiologist', 'd17.png', 'Hyderabad', 'The Group has carved out a niche for itself in India’s healthcare industry by excelling in areas ranging from diagnosis to multi-organ transplantations, from simple procedures to complex surgeries.', 4, 30),
(18002, 'Lakshmi Kona	', 'Aware Global Hospitals', 'General Medicine', 'd17.png', 'Hyderabad', 'The Group has carved out a niche for itself in India’s healthcare industry by excelling in areas ranging from diagnosis to multi-organ transplantations, from simple procedures to complex surgeries.', 7, 30),
(18003, 'Malakondiah', 'Aware Global Hospitals', 'General Medicine', 'd17.png', 'Hyderabad', 'The Group has carved out a niche for itself in India’s healthcare industry by excelling in areas ranging from diagnosis to multi-organ transplantations, from simple procedures to complex surgeries.', 5, 30),
(18004, 'Preshit Gaddam', 'Aware Global Hospitals', 'Cardiologist', 'd17.png', 'Hyderabad', 'The Group has carved out a niche for itself in India’s healthcare industry by excelling in areas ranging from diagnosis to multi-organ transplantations, from simple procedures to complex surgeries.', 8, 30),
(18005, 'Madhav Yendru', 'Aware Global Hospitals', 'Cardiologist', 'd17.png', 'Hyderabad', 'The Group has carved out a niche for itself in India’s healthcare industry by excelling in areas ranging from diagnosis to multi-organ transplantations, from simple procedures to complex surgeries.', 4, 30),
(19001, 'K Raghu', 'Care Hospitals', 'Cardiologist', 'd18.png', 'Hyderabad', 'CARE Hospitals is a complete healthcare ecosystem, with related components of education/training and research, pursuing innovations that make healthcare more affordable.', 6, 30),
(19002, 'P Pradeep Reddy', 'Care Hospitals', 'General Medicine', 'd18.png', 'Hyderabad', 'CARE Hospitals is a complete healthcare ecosystem, with related components of education/training and research, pursuing innovations that make healthcare more affordable.', 5, 30),
(19003, 'Vikram Aerra', 'Care Hospitals', 'Cardiologist', 'd18.png', 'Hyderabad', 'CARE Hospitals is a complete healthcare ecosystem, with related components of education/training and research, pursuing innovations that make healthcare more affordable.', 4, 30),
(19004, 'B Lakshmi Sharada', 'Care Hospitals', 'Cardiologist', 'd18.png', 'Hyderabad', 'CARE Hospitals is a complete healthcare ecosystem, with related components of education/training and research, pursuing innovations that make healthcare more affordable.', 7, 30),
(19005, 'N Rajasekharam', 'Care Hospitals', 'Cardiologist', 'd18.png', 'Hyderabad', 'CARE Hospitals is a complete healthcare ecosystem, with related components of education/training and research, pursuing innovations that make healthcare more affordable.', 6, 30),
(21001, 'Santosh', 'Continental Hospitals', 'General Medicine', 'd19.png', 'Hyderabad', 'Continental Hospitals is lndia\'s first LEED qualified super specialty hospital. We are dedicated to deliver thehighest quality care to every patient in a cost effective manner by focusing on Quality, lntegrity, Dignity andExcellence.', 5, 30),
(21002, 'Venkatesh Kumar', 'Continental Hospitals', 'Cardiologist', 'd19.png', 'Hyderabad', 'Continental Hospitals is lndia\'s first LEED qualified super specialty hospital. We are dedicated to deliver thehighest quality care to every patient in a cost effective manner by focusing on Quality, lntegrity, Dignity andExcellence.', 7, 30),
(21003, 'Sameer Diwale', 'Continental Hospitals', 'General Medicine', 'd19.png', 'Hyderabad', 'Continental Hospitals is lndia\'s first LEED qualified super specialty hospital. We are dedicated to deliver thehighest quality care to every patient in a cost effective manner by focusing on Quality, lntegrity, Dignity andExcellence.', 8, 30),
(21004, 'Ramesh Maturi', 'Continental Hospitals', 'General Medicine', 'd19.png', 'Hyderabad', 'Continental Hospitals is lndia\'s first LEED qualified super specialty hospital. We are dedicated to deliver thehighest quality care to every patient in a cost effective manner by focusing on Quality, lntegrity, Dignity andExcellence.', 4, 30),
(21005, 'Umesh T', 'Continental Hospitals', 'Neurology', 'd19.png', 'Hyderabad', 'Continental Hospitals is lndia\'s first LEED qualified super specialty hospital. We are dedicated to deliver thehighest quality care to every patient in a cost effective manner by focusing on Quality, lntegrity, Dignity andExcellence.', 5, 30),
(22001, 'Sanjay Yadagiri', 'Omega Hospitals', 'General Medicine', 'd20.png', 'Hyderabad', 'OMEGA Hospitals has the latest VMAT (Volumetric Modulated Arc Therapy), a treatment strategy for intensity-modulated radiation therapy, which increases treatment efficiency and has been now established clinically on a wide basis across the western countries.', 7, 30),
(22002, 'Nirni S S', 'Omega Hospitals', 'General Medicine', 'd20.png', 'Hyderabad', 'OMEGA Hospitals has the latest VMAT (Volumetric Modulated Arc Therapy), a treatment strategy for intensity-modulated radiation therapy, which increases treatment efficiency and has been now established clinically on a wide basis across the western countries.', 6, 30),
(22003, 'M Vidya', 'Omega Hospitals', 'Cardiologist', 'd20.png', 'Hyderabad', 'OMEGA Hospitals has the latest VMAT (Volumetric Modulated Arc Therapy), a treatment strategy for intensity-modulated radiation therapy, which increases treatment efficiency and has been now established clinically on a wide basis across the western countries.', 4, 30),
(22004, 'S Radhika', 'Omega Hospitals', 'Cardiologist', 'd20.png', 'Hyderabad', 'OMEGA Hospitals has the latest VMAT (Volumetric Modulated Arc Therapy), a treatment strategy for intensity-modulated radiation therapy, which increases treatment efficiency and has been now established clinically on a wide basis across the western countries.', 7, 30),
(22005, 'Mohan Reddy M', 'Omega Hospitals', 'Cardiologist', 'd20.png', 'Hyderabad', 'OMEGA Hospitals has the latest VMAT (Volumetric Modulated Arc Therapy), a treatment strategy for intensity-modulated radiation therapy, which increases treatment efficiency and has been now established clinically on a wide basis across the western countries.', 6, 30),
(23001, 'Rajesh T', 'Amrita Hospital', 'Cardiologist', 'd21.png', 'Cochin', 'Amrita Institute of Medical Sciences and Research Center (AIMS), an organization managed by Mata Amritanandamayi Math, dedicated to establishing national & international leadership in the areas of Healthcare, Education and Research and also provide world-class cost effective health care.', 4, 30),
(23002, 'Minnie Pillay', 'Amrita Hospital', 'General Medicine', 'd21.png', 'Cochin', 'Amrita Institute of Medical Sciences and Research Center (AIMS), an organization managed by Mata Amritanandamayi Math, dedicated to establishing national & international leadership in the areas of Healthcare, Education and Research and also provide world-class cost effective health care.', 6, 30),
(23003, 'Leela Menon', 'Amrita Hospital', 'General Medicine', 'd21.png', 'Cochin', 'Amrita Institute of Medical Sciences and Research Center (AIMS), an organization managed by Mata Amritanandamayi Math, dedicated to establishing national & international leadership in the areas of Healthcare, Education and Research and also provide world-class cost effective health care.', 7, 30),
(23004, 'Sheena', 'Amrita Hospital', 'General Medicine', 'd21.png', 'Cochin', 'Amrita Institute of Medical Sciences and Research Center (AIMS), an organization managed by Mata Amritanandamayi Math, dedicated to establishing national & international leadership in the areas of Healthcare, Education and Research and also provide world-class cost effective health care.', 6, 30),
(23005, 'Arun Bal', 'Amrita Hospital', 'General Medicine', 'd21.png', 'Cochin', 'Amrita Institute of Medical Sciences and Research Center (AIMS), an organization managed by Mata Amritanandamayi Math, dedicated to establishing national & international leadership in the areas of Healthcare, Education and Research and also provide world-class cost effective health care.', 4, 30),
(24001, 'K K Gopinathan', 'CIMAR Cochin Hospital', 'General Medicine', 'd22.png', 'Cochin', 'The strategic location of this fertility clinic is easily accessible from the city of Kochi and at the same time, provides a retreat-like experience. The quietness of the place is calming and refreshing and adds immense value.', 6, 30),
(24002, 'Meenu Batra', 'CIMAR Cochin Hospital', 'General Medicine', 'd22.png', 'Cochin', 'The strategic location of this fertility clinic is easily accessible from the city of Kochi and at the same time, provides a retreat-like experience. The quietness of the place is calming and refreshing and adds immense value.', 4, 30),
(24003, 'Shine Mary', 'CIMAR Cochin Hospital', 'Cardiologist', 'd22.png', 'Cochin', 'The strategic location of this fertility clinic is easily accessible from the city of Kochi and at the same time, provides a retreat-like experience. The quietness of the place is calming and refreshing and adds immense value.', 7, 30),
(24004, 'Revathi', 'CIMAR Cochin Hospital', 'Cardiologist', 'd22.png', 'Cochin', 'The strategic location of this fertility clinic is easily accessible from the city of Kochi and at the same time, provides a retreat-like experience. The quietness of the place is calming and refreshing and adds immense value.', 6, 30),
(24005, 'Thomas Ranjit', 'CIMAR Cochin Hospital', 'Cardiologist', 'd22.png', 'Cochin', 'The strategic location of this fertility clinic is easily accessible from the city of Kochi and at the same time, provides a retreat-like experience. The quietness of the place is calming and refreshing and adds immense value.', 5, 30),
(25001, 'Alexander George', 'KIMS Hospital', 'Cardiologist', 'd23.png', 'Cochin', 'KIMS Hospital, Kochi is a 125 –bedded modern state-of-the-art facility that has been created with the objective of providing sophisticated and specialized medical services at affordable cost.', 8, 30),
(25002, 'Satish S', 'KIMS Hospital', 'Cardiologist', 'd23.png', 'Cochin', 'KIMS Hospital, Kochi is a 125 –bedded modern state-of-the-art facility that has been created with the objective of providing sophisticated and specialized medical services at affordable cost.', 6, 30),
(25003, 'Abraham A K', 'KIMS Hospital', 'Cardiologist', 'd23.png', 'Cochin', 'KIMS Hospital, Kochi is a 125 –bedded modern state-of-the-art facility that has been created with the objective of providing sophisticated and specialized medical services at affordable cost.', 5, 30),
(25004, 'Praveen Menon', 'KIMS Hospital', 'General Medicine', 'd23.png', 'Cochin', 'KIMS Hospital, Kochi is a 125 –bedded modern state-of-the-art facility that has been created with the objective of providing sophisticated and specialized medical services at affordable cost.', 6, 30),
(25005, 'Biju T N', 'KIMS Hospital', 'ENT', 'd23.png', 'Cochin', 'KIMS Hospital, Kochi is a 125 –bedded modern state-of-the-art facility that has been created with the objective of providing sophisticated and specialized medical services at affordable cost.', 4, 30),
(26001, 'Bindu Mary George', 'Kinder Multispecial Hospital', 'General Medicine', 'd24.png', 'Cochin', 'Kinder Multispecialty Hospital - is the first hospital in India from Singapore, offers the highest standard in healthcare through a combination of cutting edge technology, a team of well qualified, experienced and dedicated doctors with global education & experience and super-specialized clinicians.', 5, 30),
(26002, 'Priyarenjini S Pradeep', 'Kinder Multispecial Hospital', 'Neurology', 'd24.png', 'Cochin', 'Kinder Multispecialty Hospital - is the first hospital in India from Singapore, offers the highest standard in healthcare through a combination of cutting edge technology, a team of well qualified, experienced and dedicated doctors with global education & experience and super-specialized clinicians.', 8, 30),
(26003, 'Mohan P Sam', 'Kinder Multispecial Hospital', 'Cardiologist', 'd24.png', 'Cochin', 'Kinder Multispecialty Hospital - is the first hospital in India from Singapore, offers the highest standard in healthcare through a combination of cutting edge technology, a team of well qualified, experienced and dedicated doctors with global education & experience and super-specialized clinicians.', 5, 30),
(26004, 'Nisanth Paul P', 'Kinder Multispecial Hospital', 'Cardiologist', 'd24.png', 'Cochin', 'Kinder Multispecialty Hospital - is the first hospital in India from Singapore, offers the highest standard in healthcare through a combination of cutting edge technology, a team of well qualified, experienced and dedicated doctors with global education & experience and super-specialized clinicians.', 7, 30),
(26005, 'T H Ramchandran', 'Kinder Multispecial Hospital', 'General Medicine', 'd24.png', 'Cochin', 'Kinder Multispecialty Hospital - is the first hospital in India from Singapore, offers the highest standard in healthcare through a combination of cutting edge technology, a team of well qualified, experienced and dedicated doctors with global education & experience and super-specialized clinicians.', 5, 30),
(27001, 'Paul Puthuran', 'Lourdes Hospital', 'Cardiologist', 'd25.png', 'Cochin', 'Lourdes actively involves in its social commitment to common people through its well defined quality systems, competent professionals and charitable activities.', 7, 30),
(27002, 'Arun Kumar G', 'Lourdes Hospital', 'Dental ', 'd25.png', 'Cochin', 'Lourdes actively involves in its social commitment to common people through its well defined quality systems, competent professionals and charitable activities.', 5, 30),
(27003, 'Krithi Ullal', 'Lourdes Hospital', 'General Medicine', 'd25.png', 'Cochin', 'Lourdes actively involves in its social commitment to common people through its well defined quality systems, competent professionals and charitable activities.', 6, 30),
(27004, 'Santhosh John K.A', 'Lourdes Hospital', 'Dental ', 'd25.png', 'Cochin', 'Lourdes actively involves in its social commitment to common people through its well defined quality systems, competent professionals and charitable activities.', 5, 30),
(27005, 'George Kuruvilla', 'Lourdes Hospital', 'ENT', 'd25.png', 'Cochin', 'Lourdes actively involves in its social commitment to common people through its well defined quality systems, competent professionals and charitable activities.', 6, 30),
(3000001, 'viswa', 'viswa hospital', 'cardiologist', 'd1.png', 'Bangalore', 'This is best Hospital', 6, 30),
(9448602025, 'bhat', 'govt hospital', 'Dental', 'd1.png', 'Bangalore', 'best services', 4, 30);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fno` int NOT NULL AUTO_INCREMENT,
  `Dno` bigint NOT NULL,
  `pno` bigint NOT NULL,
  `rate` int NOT NULL,
  `feed` varchar(200) NOT NULL,
  PRIMARY KEY (`fno`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fno`, `Dno`, `pno`, `rate`, `feed`) VALUES
(1, 11111121, 2147483647, 2, '                blah blah blah blah'),
(14, 2345234523452345, 1111111, 5, 'it works but fales'),
(15, 10001, 9876678998766789, 3, '                blah blah'),
(16, 10003, 9876678998766789, 2, '                ghdggdgd');

-- --------------------------------------------------------

--
-- Table structure for table `regtab`
--

DROP TABLE IF EXISTS `regtab`;
CREATE TABLE IF NOT EXISTS `regtab` (
  `pname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mno` bigint NOT NULL,
  `dob` date NOT NULL,
  `Ano` bigint NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `pass` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `val` int NOT NULL,
  PRIMARY KEY (`Ano`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `regtab`
--

INSERT INTO `regtab` (`pname`, `mno`, `dob`, `Ano`, `email_id`, `pass`, `val`) VALUES
('srikar', 6362585186, '2001-11-01', 1234123412341234, 'srikar100mukkundi@gmail.com', 'srikar@root', 0),
('raja', 999999999, '0000-00-00', 2345234523452345, 'raja@email.com', 'root12', 1),
('ram', 9434345678, '0000-00-00', 111, 'ram@gmail.com', 'ramroot', 2),
('srikar', 6767676767, '2020-10-10', 9876678998766789, 'srikargururaj.m2019@vitstudent.ac.in', 'root', 2),
('', 0, '0000-00-00', 3456345634563456, '', 'admin', 1),
('', 0, '0000-00-00', 3000001, '', 'admin', 1),
('viswanath', 9343434343, '0000-00-00', 4545454545454545, 'visw@gmail.com', 'rooooooot', 2),
('viswanath', 9343434343, '0000-00-00', 1234567890098765, 'roopabhat11@gmail.com', 'root', 2),
('vishwa', 9448602025, '0000-00-00', 1234567891234567, 'roopabhat11@gmail.com', 'root', 2),
('', 0, '0000-00-00', 9448602025, '', 'root', 1),
('Vishwanath b bhat', 9449852301, '0000-00-00', 123, 'roopabhat11@gmail.com', 'asd', 2),
('Vishwanath b bhat', 9449852301, '0000-00-00', 1234567891234567123, 'roopabhat11@gmail.com', 'root', 2);

-- --------------------------------------------------------

--
-- Table structure for table `slotbook`
--

DROP TABLE IF EXISTS `slotbook`;
CREATE TABLE IF NOT EXISTS `slotbook` (
  `Tno` bigint NOT NULL AUTO_INCREMENT,
  `Dno` bigint NOT NULL,
  `pno` bigint NOT NULL,
  `Ddate` date NOT NULL,
  `Dtime` time(6) NOT NULL,
  PRIMARY KEY (`Tno`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slotbook`
--

INSERT INTO `slotbook` (`Tno`, `Dno`, `pno`, `Ddate`, `Dtime`) VALUES
(18, 10003, 9876678998766789, '2020-10-16', '04:00:00.838000'),
(19, 2345234523452345, 9876678998766789, '2020-10-12', '13:00:00.000000'),
(16, 10002, 9876678998766789, '2020-10-07', '02:30:00.000000'),
(15, 10001, 9876678998766789, '2020-10-22', '03:00:00.000000'),
(17, 10002, 9876678998766789, '2020-10-14', '02:30:00.000000'),
(20, 20005, 1234567891234567, '2020-10-15', '02:00:00.000000'),
(21, 234523452345, 1234567891234567, '2020-10-26', '12:18:12.000000'),
(0, 2345234523452345, 1234567891234567, '2020-10-26', '12:18:12.000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
