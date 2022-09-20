-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 04:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `taxi_categories_orders`
--

CREATE TABLE `taxi_categories_orders` (
  `id` int(11) NOT NULL,
  `titleCate` varchar(255) NOT NULL,
  `imageCate` varchar(255) DEFAULT NULL,
  `imageShareFb` varchar(255) DEFAULT NULL,
  `contentCate` text DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `sortOrder` int(11) NOT NULL,
  `showHide` tinyint(1) NOT NULL,
  `titleSeo` varchar(255) DEFAULT NULL,
  `descriptionSeo` text DEFAULT NULL,
  `keywordSeo` text DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='table categories orders';

--
-- Dumping data for table `taxi_categories_orders`
--

INSERT INTO `taxi_categories_orders` (`id`, `titleCate`, `imageCate`, `imageShareFb`, `contentCate`, `active`, `sortOrder`, `showHide`, `titleSeo`, `descriptionSeo`, `keywordSeo`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Đặt xe Bình Dương', '5_ynlj-cate1663176815.jpg', '7-1525683962-733-width640height360-cateShareFB1663176815.jpg', NULL, 1, 1, 1, 'Đặt xe Bình Dương', 'Đặt xe Bình Dương', 'Đặt xe Bình Dương', 1, 1, NULL, '2022-09-15 00:33:35', '2022-09-20 20:12:49', NULL),
(2, 'Đặt xe Vũng Tàu', '5_ynlj-cate1663394365.jpg', '7-1525683962-733-width640height360-cateShareFB1663394365.jpg', NULL, 1, 2, 1, 'Đặt xe Vũng Tàu', 'Đặt xe Vũng Tàu', 'Đặt xe Vũng Tàu', 1, 1, NULL, '2022-09-17 10:13:24', '2022-09-20 18:04:01', NULL),
(3, 'Đặt xe Đồng Nai', 'cach-cham-soc-vo-moi-mang-thai-3-cate1663394447.jpg', 'nguoi-tinh-nong-bong-cua-dai-gia-chan-dat-sau-5-thang-mat-tich-gio-ra-sao-1-cateShareFB1663394447.jpg', NULL, 1, 3, 1, 'Đặt xe Đồng Nai', 'Đặt xe Đồng Nai', 'Đặt xe Đồng Nai', 1, 1, NULL, '2022-09-17 13:00:47', '2022-09-20 17:51:39', NULL),
(4, 'Đặt xe Cần Thơ', '5_ynlj-cate1663671021.jpg', '7-1525683962-733-width640height360-cateShareFB1663671021.jpg', NULL, 1, 5, 0, 'Đặt xe Cần Thơ', 'Đặt xe Cần Thơ d', 'Đặt xe Cần Thơ k', 1, 1, NULL, '2022-09-20 17:50:21', '2022-09-20 20:12:15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `taxi_categories_orders`
--
ALTER TABLE `taxi_categories_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taxi_categories_orders`
--
ALTER TABLE `taxi_categories_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
