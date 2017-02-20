-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2015 at 09:10 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addict_paper`
--

-- --------------------------------------------------------

--
-- Table structure for table `Color`
--

CREATE TABLE IF NOT EXISTS `Color` (
  `color_ID` int(11) NOT NULL,
  `color` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Color`
--

INSERT INTO `Color` (`color_ID`, `color`) VALUES
(1, 'สี'),
(2, 'ขาว-ดำ');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE IF NOT EXISTS `Customer` (
  `Customer_ID` int(4) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_ID` int(8) NOT NULL,
  `Type_c` enum('Member','Admin','','') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Member'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`Customer_ID`, `Name`, `Surname`, `Username`, `Password`, `Email`, `student_ID`, `Type_c`) VALUES
(12, 'Dapper', 'Ard', 'admin', '1', 'dap@gmail.com', 13560266, 'Admin'),
(15, 'Nutnicha', 'Beaw', 'nutcha', '11', 'nut@hotmail.com', 13560152, 'Member'),
(16, 'pakakol', 'sanevong na ayuthaya', 'pakul', '1234', 'pakakol.s@gmail.com', 13560233, 'Member'),
(17, 'Juneun', 'Saeleaw', 'Zeliko', '1234', 'june@hotmail.com', 13560253, 'Member'),
(18, 'pedped', 'duck', 'ped', '456', 'ped@hotmail.com', 13560123, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE IF NOT EXISTS `Order` (
  `id_payment` int(3) NOT NULL,
  `Date` datetime NOT NULL,
  `Paperwork_ID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Customer_ID` int(3) NOT NULL,
  `Status_ID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Paperwork`
--

CREATE TABLE IF NOT EXISTS `Paperwork` (
  `Paperwork_ID` int(3) NOT NULL,
  `types` int(2) NOT NULL,
  `papersize` int(2) NOT NULL,
  `color` int(2) NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `student_ID` int(8) NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `upfile` varchar(300) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Paperwork`
--

INSERT INTO `Paperwork` (`Paperwork_ID`, `types`, `papersize`, `color`, `name`, `surname`, `student_ID`, `type`, `upfile`) VALUES
(132, 0, 0, 0, 'Pakakol', 'Sanevong', 13560233, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', ''),
(133, 0, 0, 0, 'Pakakol', 'Sanevong', 13560233, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', ''),
(134, 0, 0, 0, 'sad', 'asdasd', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'upfile'),
(135, 0, 0, 0, 'asda', 'asdasd', 0, 'à¸›à¹‰à¸²à¸¢ à¹„à¸§à¸™à¸´à¸¥', 'upfile'),
(136, 0, 0, 0, 'sadasd', 'asdasd', 0, 'à¸ªà¸à¸£à¸µà¸™à¸¥à¸‡à¹à¸œà¹ˆà¸™ CD', 'images/1450334865.pn'),
(137, 0, 0, 0, 'sadasd', 'asdasd', 0, 'à¸ªà¸à¸£à¸µà¸™à¸¥à¸‡à¹à¸œà¹ˆà¸™ CD', 'images/1450334946.pn'),
(138, 0, 0, 0, 'sadasd', 'asdasd', 0, 'à¸ªà¸à¸£à¸µà¸™à¸¥à¸‡à¹à¸œà¹ˆà¸™ CD', 'images/1450334951.pn'),
(139, 0, 0, 0, 'sadasd', 'asdasd', 0, 'à¸ªà¸à¸£à¸µà¸™à¸¥à¸‡à¹à¸œà¹ˆà¸™ CD', 'images/1450334955.pn'),
(140, 0, 0, 0, 'sadasd', 'asdasd', 0, 'à¸ªà¸à¸£à¸µà¸™à¸¥à¸‡à¹à¸œà¹ˆà¸™ CD', 'images/1450334985.06'),
(141, 0, 0, 0, 'sadasd', 'asdasd', 0, 'à¸ªà¸à¸£à¸µà¸™à¸¥à¸‡à¹à¸œà¹ˆà¸™ CD', 'images/1450335712.06'),
(142, 0, 0, 0, 'sadasd', 'asdasd', 0, 'à¸ªà¸à¸£à¸µà¸™à¸¥à¸‡à¹à¸œà¹ˆà¸™ CD', 'images/1450335724.08'),
(143, 0, 0, 0, 'sadasd', 'asdasd', 0, 'à¸ªà¸à¸£à¸µà¸™à¸¥à¸‡à¹à¸œà¹ˆà¸™ CD', 'images/1450335948.08'),
(144, 0, 0, 0, 'adasd', 'asdasd', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'images/1450335978.07'),
(145, 0, 0, 0, 'adasd', 'asdasd', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'images/1450336036.07'),
(146, 0, 0, 0, 'asdsad', 'dd', 0, 'à¸›à¹‰à¸²à¸¢ à¹„à¸§à¸™à¸´à¸¥', 'uploads/1450336109.0'),
(147, 0, 0, 0, 'asdsad', 'dd', 0, 'à¸›à¹‰à¸²à¸¢ à¹„à¸§à¸™à¸´à¸¥', 'uploads/1450336133.j'),
(148, 0, 0, 0, 'asdsad', 'dd', 0, 'à¸›à¹‰à¸²à¸¢ à¹„à¸§à¸™à¸´à¸¥', 'uploads/1450336189.jpg'),
(149, 0, 0, 0, 'asdsad', 'dd', 0, 'à¸›à¹‰à¸²à¸¢ à¹„à¸§à¸™à¸´à¸¥', 'uploads/1450336305.jpg'),
(150, 0, 0, 0, 'asdsad', 'dd', 0, 'à¸›à¹‰à¸²à¸¢ à¹„à¸§à¸™à¸´à¸¥', 'images/1450336324.jpg'),
(151, 0, 0, 0, 'asdasd', 'asdasd', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'images/1450336399.jpg'),
(152, 0, 0, 0, 'asdasd', 'asdasd', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'images/1450336547.jpg'),
(153, 0, 0, 0, 'asdasd', 'asdasd', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'images/1450336562.jpg'),
(154, 0, 0, 0, 'asdasd', 'asdasd', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'images/1450336585.jpg'),
(155, 0, 0, 0, 'asdasd', 'asdasd', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', ''),
(156, 0, 0, 0, 'asdasd', 'asdasd', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', ''),
(157, 0, 0, 0, 'asdasd', 'asdasd', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'images/1450336714.jpg'),
(158, 0, 0, 0, ';;;;', ';k;lk', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'images/1450336752.jpg'),
(159, 0, 0, 0, ';;;;', ';k;lk', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'images/1450336763.jpg'),
(160, 0, 0, 0, ';;;;', ';k;lk', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'images/1450336777.jpg'),
(161, 0, 0, 0, ';;;;', ';k;lk', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'images/1450336803.jpg'),
(162, 0, 0, 0, ';;;;', ';k;lk', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'images/1450336827.jpg'),
(163, 0, 0, 0, ';;;;', ';k;lk', 0, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'images/1450336913.pdf'),
(164, 0, 0, 0, 'Nutnicha', 'Beaw', 13560152, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450336975.pdf'),
(165, 0, 0, 0, 'kul', 'Sanevong', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450345148.pdf'),
(166, 0, 0, 0, 'kul', 'Sanevong', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450345863.pdf'),
(167, 0, 0, 0, 'kul', 'Sanevong', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450345980.pdf'),
(168, 0, 0, 0, 'kul', 'Sanevong', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450346023.pdf'),
(169, 0, 0, 0, 'kul', 'Sanevong', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450346035.pdf'),
(170, 0, 0, 0, 'kul', 'Sanevong', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450346074.pdf'),
(171, 0, 0, 0, 'kul', 'Sanevong', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450346161.pdf'),
(172, 0, 0, 0, 'kul', 'Sanevong', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450346308.pdf'),
(173, 0, 0, 0, 'kul', 'Sanevong', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450346490.pdf'),
(174, 0, 0, 0, 'kul', 'Sanevong', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450346693.pdf'),
(175, 0, 0, 0, 'kul', 'Sanevong', 13560233, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450346748.pdf'),
(176, 0, 0, 0, 'kul', 'Sanevong', 13560233, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450347200.pdf'),
(177, 0, 0, 0, 'kul', 'Sanevong', 13560233, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450347233.pdf'),
(178, 0, 0, 0, 'kul', 'Sanevong', 13560233, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450347267.pdf'),
(179, 0, 0, 0, 'kul', 'Sanevong', 13560233, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450349674.pdf'),
(180, 0, 0, 0, 'kul', 'Sanevong', 13560233, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450349871.pdf'),
(181, 0, 0, 0, 'kul', 'Sanevong', 13560233, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450349958.pdf'),
(182, 0, 0, 0, 'Varasak', 'Ardsan', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450686122.pdf'),
(183, 0, 0, 0, 'à¸§à¸£à¸²à¸¨à¸±à¸à¸”à¸´à¹Œ', 'à¸­à¸²à¸ˆà¹à¸ªà¸™', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450752456.pdf'),
(184, 0, 0, 0, 'à¸§à¸£à¸²à¸¨à¸±à¸à¸”à¸´à¹Œ', 'à¸­à¸²à¸ˆà¹à¸ªà¸™', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450752560.pdf'),
(185, 0, 0, 0, 'à¸§à¸£à¸²à¸¨à¸±à¸à¸”à¸´à¹Œ', 'à¸­à¸²à¸ˆà¹à¸ªà¸™', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450752812.pdf'),
(186, 0, 0, 0, 'ab', '12', 13560244, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450766187.pdf'),
(187, 0, 0, 0, 'Nutnicha', 'Sanevong', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450766485.pdf'),
(188, 0, 0, 0, 'Nutnicha', 'Sanevong', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450766524.pdf'),
(189, 0, 0, 0, 'Varasak', 'Ardsan', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450766604.pdf'),
(190, 0, 0, 0, 'Varasak', 'Ardsan', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450766712.pdf'),
(191, 0, 0, 0, 'Varasak', 'Ardsan', 13560266, 'Print à¸‡à¸²à¸™à¸šà¸™à¸à¸£à¸°à¸”à¸²à¸©', 'uploads/1450766758.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `Size`
--

CREATE TABLE IF NOT EXISTS `Size` (
  `papersize_ID` int(11) NOT NULL,
  `Size_Name` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Size`
--

INSERT INTO `Size` (`papersize_ID`, `Size_Name`) VALUES
(1, 'A0'),
(2, 'A1'),
(3, 'A2'),
(4, 'A3'),
(5, 'A4'),
(6, 'A5'),
(7, 'A6'),
(8, 'B1'),
(9, 'B2'),
(10, 'B3');

-- --------------------------------------------------------

--
-- Table structure for table `status_works`
--

CREATE TABLE IF NOT EXISTS `status_works` (
  `Status_ID` int(3) NOT NULL,
  `student_ID` int(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=275 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status_works`
--

INSERT INTO `status_works` (`Status_ID`, `student_ID`) VALUES
(261, 0),
(262, 13560233),
(263, 0),
(264, 0),
(265, 0),
(266, 13560233),
(267, 0),
(268, 13560152),
(269, 13560152),
(270, 0),
(271, 0),
(272, 0),
(273, 0),
(274, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Color`
--
ALTER TABLE `Color`
  ADD PRIMARY KEY (`color_ID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `Paperwork`
--
ALTER TABLE `Paperwork`
  ADD PRIMARY KEY (`Paperwork_ID`);

--
-- Indexes for table `Size`
--
ALTER TABLE `Size`
  ADD PRIMARY KEY (`papersize_ID`);

--
-- Indexes for table `status_works`
--
ALTER TABLE `status_works`
  ADD PRIMARY KEY (`Status_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Color`
--
ALTER TABLE `Color`
  MODIFY `color_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `Customer_ID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `Order`
--
ALTER TABLE `Order`
  MODIFY `id_payment` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Paperwork`
--
ALTER TABLE `Paperwork`
  MODIFY `Paperwork_ID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=192;
--
-- AUTO_INCREMENT for table `Size`
--
ALTER TABLE `Size`
  MODIFY `papersize_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `status_works`
--
ALTER TABLE `status_works`
  MODIFY `Status_ID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=275;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
