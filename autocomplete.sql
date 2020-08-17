-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2015 at 08:15 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `javadomain`
--

-- --------------------------------------------------------

--
-- Table structure for table `autocomplete`
--

CREATE TABLE IF NOT EXISTS `autocomplete` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autocomplete`
--

INSERT INTO `autocomplete` (`id`, `name`) VALUES
(1, 'Google'),
(2, 'Facebook'),
(3, 'Youtube'),
(4, 'Flipkart'),
(5, 'Ebay'),
(6, 'Yahoo'),
(7, 'Javadomain'),
(8, 'stackoverflow'),
(9, 'amazon'),
(10, 'flickr'),
(11, 'snapdeal'),
(12, 'freecharge');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
