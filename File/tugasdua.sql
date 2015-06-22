-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2015 at 07:01 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugasdua`
--

-- --------------------------------------------------------

--
-- Table structure for table `soundfile`
--

CREATE TABLE IF NOT EXISTS `soundfile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `time` time NOT NULL,
  `pilihan` varchar(20) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `path` varchar(200) NOT NULL,
  `tag` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `tag_sound`
--

CREATE TABLE IF NOT EXISTS `tag_sound` (
  `id_tag` int(200) NOT NULL AUTO_INCREMENT,
  `tag` varchar(100) NOT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tag_sound`
--

INSERT INTO `tag_sound` (`id_tag`, `tag`) VALUES
(1, 'classic'),
(2, 'electronic'),
(3, 'jazz'),
(4, 'pop'),
(5, 'k-pop');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
