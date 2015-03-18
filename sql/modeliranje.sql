-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2015 at 12:36 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `modeliranje`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE IF NOT EXISTS `kategorija` (
  `id_kategorije` int(11) NOT NULL AUTO_INCREMENT,
  `naziv_kategorije` varchar(50) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id_kategorije`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf16 COLLATE=utf16_croatian_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`id_kategorije`, `naziv_kategorije`) VALUES
(1, 'Mehanički sustavi'),
(2, 'Električni sustavi'),
(3, 'Elektromehanički sustavi'),
(4, 'Termički sustavi'),
(5, 'Softverski sustavi'),
(6, 'Sustav sa fluidima'),
(7, '3D model');

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE IF NOT EXISTS `seminar` (
  `id_seminara` int(11) NOT NULL AUTO_INCREMENT,
  `naziv_seminara` varchar(100) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `autori` text CHARACTER SET utf8 COLLATE utf8_croatian_ci,
  `opis` text CHARACTER SET utf8 COLLATE utf8_croatian_ci,
  `alat` varchar(50) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `godina` int(4) DEFAULT NULL,
  `dokument` char(255) COLLATE utf16_croatian_ci DEFAULT NULL,
  `id_kategorije` int(5) DEFAULT NULL,
  `podkategorija` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_seminara`),
  KEY `id_kategorije` (`id_kategorije`),
  KEY `podkategorija` (`podkategorija`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_croatian_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
