-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2017 at 12:45 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Heng2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Beverage`
--

CREATE TABLE IF NOT EXISTS `Beverage` (
  `Beverage_id` int(2) NOT NULL,
  `bvImages` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bvName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bvPrice` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Beverage`
--

INSERT INTO `Beverage` (`Beverage_id`, `bvImages`, `bvName`, `bvPrice`) VALUES
(1, 'img/bv1.png', 'น้ำเก๊กฮวย', 20),
(2, 'img/bv2.png', 'ชาดำเย็น', 20),
(3, 'img/bv3.png', 'โอเลี้ยง', 20),
(4, 'img/bv4.png', 'น้ำกระเจี๊ยบ', 20),
(5, 'img/bv5.png', 'น้ำฝรั่ง', 20);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `order_address` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `order_phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_date`, `order_fullname`, `order_address`, `order_phone`) VALUES
(5, '2017-02-19 23:25:01', 'วราศักดิ์ อาจแสน', '0838987141', ''),
(6, '2017-02-19 23:35:41', 'ฟ', '1111', ''),
(7, '2017-02-19 23:35:51', 'v', '22', ''),
(8, '2017-02-19 23:38:12', 'ณัฐณิชา เบี้ยวศิริ', '09333333331', ''),
(9, '2017-02-19 23:48:45', 'ภคกุล', '2111', ''),
(10, '2017-02-20 01:42:00', '', '', ''),
(11, '2017-02-20 15:21:42', 'สุกพิชญ์', '191', ''),
(12, '2017-02-20 15:24:08', 'จูนโกะ', '1', '111'),
(13, '2017-02-20 19:49:08', '', '', ''),
(14, '2017-02-20 20:06:51', 'ณัฐชา', 'วัดพระรามเก้า', '1101');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL,
  `order_detail_quantity` tinyint(4) NOT NULL,
  `order_detail_price` decimal(10,2) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_detail_quantity`, `order_detail_price`, `product_id`, `order_id`) VALUES
(9, 2, '35.00', 3, 5),
(10, 1, '35.00', 1, 6),
(11, 2, '35.00', 2, 6),
(12, 1, '35.00', 3, 7),
(13, 2, '35.00', 1, 8),
(14, 1, '35.00', 2, 8),
(15, 1, '35.00', 3, 8),
(16, 2, '35.00', 3, 9),
(17, 2, '35.00', 1, 10),
(18, 4, '35.00', 2, 10),
(19, 2, '35.00', 3, 10),
(20, 2, '35.00', 1, 11),
(21, 1, '35.00', 3, 11),
(22, 1, '35.00', 2, 12),
(23, 2, '35.00', 3, 12),
(24, 1, '16.00', 10, 13),
(25, 1, '40.00', 11, 13),
(26, 1, '15.00', 12, 13),
(27, 1, '17.00', 3, 14),
(28, 1, '25.00', 6, 14),
(29, 1, '16.00', 17, 14);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `product_img_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` decimal(10,2) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_img_name`, `product_price`) VALUES
(9, 'H9', 'ราดหน้าเจ', 'img/f9.png', '60.00'),
(8, 'H8', 'เส้นหมี่ราดหน้า', 'img/f8.png', '40.00'),
(7, 'H7', 'เส้นใหญ่ราดหน้าใส่ไข่', 'img/f7.png', '50.00'),
(6, 'H6', 'เส้นหมี่ผัดซีอิ๋ว', 'img/f6.png', '50.00'),
(5, 'H5', 'หมี่กรอบราดหน้า', 'img/f5.png', '50.00'),
(4, 'H4', 'เกาเหลาราดหน้า', 'img/f4.png', '50.00'),
(3, 'H3', 'เส้นใหญ่ผัดซีอิ๋ว', 'img/f3.png', '50.00'),
(2, 'H2', 'หมี่กรอบราดหน้าใส่ไข่', 'img/f2.png', '60.00'),
(1, 'H1', 'เส้นใหญ่ราดหน้า', 'img/f1.png', '40.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Beverage`
--
ALTER TABLE `Beverage`
  ADD PRIMARY KEY (`Beverage_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Beverage`
--
ALTER TABLE `Beverage`
  MODIFY `Beverage_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
