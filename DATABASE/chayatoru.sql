-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2013 at 06:23 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chayatoru`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_access`
--

CREATE TABLE IF NOT EXISTS `admin_access` (
  `admin_id` varchar(300) NOT NULL,
  `admin_password` varchar(500) NOT NULL,
  `admin_email` varchar(300) NOT NULL,
  `token` varchar(500) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_access`
--

INSERT INTO `admin_access` (`admin_id`, `admin_password`, `admin_email`, `token`) VALUES
('admin', '63667d5b2308b8a19f73faa3c3195cff:13A3LOPZ206TJ5735S9POL6FC3X993IN', 'marufaiub09@gmail.com', ''),
('admin2', '9871cbe6fff7fd8c9f348208f8c1b66e:SG02N0PCM4J4CF94S094IH581P6X968Q', 'marufaiub09@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(100) NOT NULL AUTO_INCREMENT,
  `client_number` int(100) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `client_phone` varchar(200) NOT NULL,
  `client_address` varchar(500) NOT NULL,
  `client_block` varchar(200) NOT NULL,
  `client_land` varchar(300) NOT NULL,
  `quality` varchar(200) NOT NULL,
  `client_priceofperkatha` varchar(200) NOT NULL,
  `follow_update` varchar(200) NOT NULL,
  `client_comment1` text NOT NULL,
  `client_comment2` text NOT NULL,
  `date` varchar(300) NOT NULL,
  PRIMARY KEY (`client_id`,`client_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_number`, `client_name`, `client_phone`, `client_address`, `client_block`, `client_land`, `quality`, `client_priceofperkatha`, `follow_update`, `client_comment1`, `client_comment2`, `date`) VALUES
(1, 12, 'jlkjj', 'lkjlkj', 'lkjlj', 'lkjlkj', 'Katha', '', 'kljlkj', 'lkjlkj', 'lkjlkj', 'kljklj', '0000-00-00 00:00:00'),
(2, 12, 'ds', 'jh', 'jhj', 'jh', 'jhjh', '', 'jjhj', 'jhj', 'jhjj', 'kjkj', '12-21-12'),
(3, 13, 'yu', 'uyu', 'uyuu', 'uyuy', '', '', 'mnmn', 'nmnmnm', 'mnm', 'mnmn', '23-323-232'),
(4, 14, 'qw', 'qw', 'qw', 'qw', 'qw', 'Katha', 'qwwqwq', 'qwqw', 'qwqw', 'qwqw', '323'),
(5, 1414, 'maruf', '01673725660', 'ABH WORLD', 'A', '2', 'Katha', '120000000.00', 'kiso na ', 'demo ', 'demo', '2013-12-04'),
(6, 1212, 'dany', '1212', 'qwqw', 'qw', 'qw', 'Katha', 'qwqw', 'qwq', 'qw', 'qw', '2013-12-05'),
(7, 2121, 'shopnil', '1121', 'demo', 'demo', 'mde', 'Katha', 'demo.00', 'demo', 'demo', 'semo', '2013-12-08'),
(8, 156, 'shovon', '01933168178', 'ABH WORLD', 'B', '2', 'VighA', '1212121212122.00', 'demo', 'demo', 'demo', '2013-12-06'),
(14, 33, 'ds', 'demo', 'demo', 'demo', '12', 'Katha', 'asasas.00', '21', 'demo', 'demo', '2013-12-06'),
(15, 244, 'df', 'fd', 'df', 'df', 'fd', 'fd', 'fd', 'fd', 'fd', 'gf', '2013-12-13'),
(16, 1331, 'oiOI', 'OIO', 'OIO', 'OIO', 'OOIOIO', 'OIOO', 'OIOIOI', 'OIOIOIOI', 'OIOIOIO', 'OIOOIO', '2013-12-13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
