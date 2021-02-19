-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2020 at 11:16 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(200) NOT NULL,
  `authorname` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `descrp` text NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `bookname`, `authorname`, `category`, `number`, `descrp`, `img`) VALUES
(1, ' Waiting for the barbarians', 'Kotzi', 'literary', 700, ' For decades the local judge spent a quiet border settlement', 'e.jpg'),
(2, ' News of certainty', 'Adham Sharqawi', 'literary', 560, ' It contains many stories and judgment that can be used', 'f.jpg'),
(3, ' Knowledge of self beyond', 'Moamen Ahmed', ' scientific', 600, ' It is the study of the alleged physical phenomena', 'a.jpeg'),
(4, ' Building the universe and human destiny', 'Hisham Talib', 'scientific', 900, ' Amazing facts in the cosmic and religious sciences', 'b.jpg'),
(5, ' The stingy', 'liljahiz', 'literary', 1000, ' It is the stories of personalities he met known as stinginess', 'd.jpg'),
(6, ' astronomy', 'Adnan Ibrahim', 'scientific', 987, ' It studies the development of celestial bodies, physical and chemical properties', 'c.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `Phone`, `Country`, `username`, `password`) VALUES
(1, 'Amany Alhrbi', '05987867564', '', 'amany123', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
