-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 08:07 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scobra`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblleden`
--

CREATE TABLE `tblleden` (
  `Lidnr` int(11) NOT NULL,
  `Voornaam` varchar(30) DEFAULT NULL,
  `Naam` varchar(30) DEFAULT NULL,
  `Geboortedatum` varchar(30) DEFAULT NULL,
  `Geslacht` varchar(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Telefoonnummer` varchar(15) DEFAULT NULL,
  `Gemeente` varchar(30) DEFAULT NULL,
  `Postcode` varchar(10) DEFAULT NULL,
  `Straat` varchar(20) DEFAULT NULL,
  `Huisnummer` varchar(5) DEFAULT NULL,
  `VoornaamOuder1` varchar(30) DEFAULT NULL,
  `NaamOuder1` varchar(30) DEFAULT NULL,
  `VoornaamOuder2` varchar(30) DEFAULT NULL,
  `NaamOuder2` varchar(30) DEFAULT NULL,
  `EmailOuder` varchar(30) DEFAULT NULL,
  `TelefoonnummerOuder` varchar(15) DEFAULT NULL,
  `Rekeningnummer` varchar(20) DEFAULT NULL,
  `ScoutingOpMaat` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblleden`
--

INSERT INTO `tblleden` (`Lidnr`, `Voornaam`, `Naam`, `Geboortedatum`, `Geslacht`, `Email`, `Telefoonnummer`, `Gemeente`, `Postcode`, `Straat`, `Huisnummer`, `VoornaamOuder1`, `NaamOuder1`, `VoornaamOuder2`, `NaamOuder2`, `EmailOuder`, `TelefoonnummerOuder`, `Rekeningnummer`, `ScoutingOpMaat`) VALUES
(1, 'Rein', 'Goossens', '2003-06-06', 'man', 'g.r@gmail.com', '0475897675', 'Flobecq', '7880', 'Wahier', '6a', 'Jessy', 'Klönhammer', 'Kersten', 'Goossens', 'jessy@yeke.com', '0497798947', 'BE0123456789', 0),
(8, 'azert', 'treza', '2004-10-05', NULL, 'azert.yuiopp@gmail.com', '0497653126', 'poltown', '9856', 'polstraat', '6', 'pol', 'lop', 'kol', 'lok', NULL, NULL, NULL, NULL),
(9, 'rgfed', 'gfds', '5203-12-04', NULL, 'zdef.gfd@gmail.com', '0417283958', 'Geraardsbergen', '9760', 'azertgfd', '6', 'Wim', 'Huysmans', 'Sylvie', 'Phillip', NULL, NULL, NULL, NULL),
(10, 'Yana', 'Van autreve', '2002-12-09', NULL, 'Yana.sora@gmail.com', '0456923514', 'Nazareth', '9760', 'Snepstraat', '36', 'Wim', 'Van autreve', 'Sylvie', 'Gheerolfs', '', NULL, NULL, NULL),
(11, 'Yana', 'Van autreve', '2002-12-09', NULL, 'Yana.sora@gmail.com', '0456923514', 'Nazareth', '8560', 'Snepstraat', '36', 'Wim', 'Van autreve', 'Sylvie', 'Gheerolfs', 'Wim.trucker@gmail.com', NULL, NULL, NULL),
(12, 'asdf', 'movies', '3004-01-02', NULL, 'asdf.movies@gmail.com', '0423569887', 'asdf', '6548', 'movies', '25', 'as', 'azerty', 'df', 'qwerty', 'asdf.fdsa@gmail.com', '0431625498', NULL, NULL),
(13, 'Cato', 'Lievens', '2003-12-02', NULL, 'Cato.Lievens@gmail.com', '0497978758', 'Brakel', '9660', 'ksteelstraat', '45', 'Tom', 'Lievens', 'An', 'Begijen', 'Tom.An@gmail.com', '0431256987', 'BE123456788965', 0),
(14, 'Jef', 'De Clercq', '3020-01-02', 'on', 'hgfd.hgfd@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(15, '', '', '', 'on', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(16, '', '', '', 'vrouw', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblleden`
--
ALTER TABLE `tblleden`
  ADD PRIMARY KEY (`Lidnr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblleden`
--
ALTER TABLE `tblleden`
  MODIFY `Lidnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
