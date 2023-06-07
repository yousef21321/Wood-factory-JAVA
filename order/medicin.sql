-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 14, 2022 at 09:23 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicin`
--

DROP TABLE IF EXISTS `medicin`;
CREATE TABLE IF NOT EXISTS `medicin` (
  `M_ID` int(3) NOT NULL AUTO_INCREMENT,
  `M_name` varchar(100) NOT NULL,
  `M_type` varchar(100) DEFAULT NULL,
  `M_price` varchar(100) NOT NULL,
  `M_number` int(100) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`M_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicin`
--

INSERT INTO `medicin` (`M_ID`, `M_name`, `M_type`, `M_price`, `M_number`, `image`) VALUES
(41, 'NANAZOXID', NULL, '23$', NULL, 'images/NANAZOXID.jpeg'),
(37, 'DABER AMLA OIL', NULL, '12$', NULL, 'images/DABER AMLA OIL.jpeg'),
(36, 'OPLEX', NULL, '123$', NULL, 'images/WhatsApp Image 2022-05-13 at 12.25.01 PM.jpeg'),
(38, 'PANADOL', NULL, '41$', NULL, 'images/PANADOL.jpeg'),
(40, 'DIAFLOZIMET', NULL, '31$', NULL, 'images/DIAFLOZIMET.jpeg'),
(35, 'VOLTAREN', NULL, '15$', NULL, 'images/WhatsApp Image 2022-05-13 at 10.55.38 AM.jpeg'),
(39, 'SMECTA', NULL, '12$', NULL, 'images/SMECTA.jpeg'),
(42, 'ANTINAL', NULL, '45$', NULL, 'images/ANTINAL.jpeg'),
(43, 'VATICA', NULL, '50', NULL, 'images/VATICA.jpeg'),
(44, 'AMARYL', NULL, '18$', NULL, 'images/AMARYL.jpeg'),
(45, 'AZTREONAM', NULL, '100$', NULL, 'images/AZTREONAM.jpeg'),
(46, 'nanazoixd', NULL, '22$', NULL, 'images/nanazoixd.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
