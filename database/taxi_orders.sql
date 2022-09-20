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
-- Table structure for table `taxi_orders`
--

CREATE TABLE `taxi_orders` (
  `id` int(11) NOT NULL,
  `cateID` int(11) NOT NULL,
  `titleOrder` varchar(255) NOT NULL,
  `imageOrder` varchar(255) NOT NULL,
  `imageShareFb` varchar(255) DEFAULT NULL,
  `shortContentOrder` varchar(500) NOT NULL,
  `contentOrder` text NOT NULL,
  `postDate` datetime DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `numberViews` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `sortOrder` int(11) NOT NULL,
  `titleSeo` varchar(255) DEFAULT NULL,
  `descriptionSeo` text DEFAULT NULL,
  `keywordSeo` text DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='table orders';

--
-- Dumping data for table `taxi_orders`
--

INSERT INTO `taxi_orders` (`id`, `cateID`, `titleOrder`, `imageOrder`, `imageShareFb`, `shortContentOrder`, `contentOrder`, `postDate`, `tags`, `numberViews`, `active`, `sortOrder`, `titleSeo`, `descriptionSeo`, `keywordSeo`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'tes tin tức', '62ad056c454aa914f05b-news1663430603.jpg', '81dd4d5c19a7d6f98fb6-newsShareFB1663430603.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare, massa id malesuada luctus, metus lorem imperdiet nunc, dictum egestas leo quam quis velit. Aliquam porta, lectus in rhoncus mattis, justo nulla tincidunt metus, sollicitudin volutpat nibh nunc id quam. Nullam mollis vitae purus ac aliquet. 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare, massa id malesuada luctus, metus lorem imperdiet nunc, dictum egestas leo quam quis velit. Aliquam porta, lectus in rhoncus mattis, justo nulla tincidunt metus, sollicitudin volutpat nibh nunc id quam. Nullam mollis vitae purus ac aliquet.</p>\r\n<p>Thư mục n&agrave;y hay qu&aacute; 2</p>\r\n<p><img src=\"../upload/62ad056c454aa914f05b.jpg\" alt=\"\" width=\"574\" height=\"711\" /></p>', '2022-09-17 12:29:45', '1,2,3,4', 0, 1, 1, 'Test tin tức', 'Test tin tức desc', 'Test tin tức keyw', 1, 1, 1, '2022-09-17 22:12:01', '2022-09-18 12:29:45', '2022-09-20 21:01:13'),
(2, 3, 'tes tin tức 2', 'anh-to-bot-an-dam-01-news1663479271.jpg', 'anh-nho2-01-newsShareFB1663479271.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>\r\n<p><img src=\"../upload/62ad056c454aa914f05b.jpg\" alt=\"\" width=\"574\" height=\"711\" /></p>', '2022-09-19 12:34:31', '2,4', 0, 1, 2, 'Test tin tức 2', 'Test tin tức 2 desc', 'Test tin tức 2 keyw', 1, 1, 1, '2022-09-18 12:34:31', '2022-09-20 20:43:35', '2022-09-20 21:01:16'),
(3, 1, 'Tin tức đặt xe Bình Dương', '5_ynlj-ordernews1663682334.jpg', '7-1525683962-733-width640height360-ordernewsShareFB1663682334.jpg', 'Test tin tức đặt xe Bình Dương Test tin tức đặt xe Bình Dương Test tin tức đặt xe Bình Dương Test tin tức đặt xe Bình Dương Test tin tức đặt xe Bình Dương Test tin tức đặt xe Bình Dương Test tin tức đặt xe Bình Dương Test tin tức đặt xe Bình Dương', '<p>Test tin tức đặt xe B&igrave;nh Dương&nbsp;Test tin tức đặt xe B&igrave;nh Dương&nbsp;Test tin tức đặt xe B&igrave;nh Dương&nbsp;Test tin tức đặt xe B&igrave;nh Dương&nbsp;Test tin tức đặt xe B&igrave;nh Dương&nbsp;Test tin tức đặt xe B&igrave;nh Dương&nbsp;Test tin tức đặt xe B&igrave;nh Dương&nbsp;Test tin tức đặt xe B&igrave;nh Dương&nbsp;Test tin</p>\r\n<p>tức đặt xe B&igrave;nh Dương<img src=\"../upload/62ad056c454aa914f05b.jpg\" alt=\"\" width=\"574\" height=\"711\" /></p>', '2022-09-19 21:01:07', '3,4', 0, 1, 1, 'Tin tức đặt xe Bình Dương', 'Tin tức đặt xe Bình Dương', 'Tin tức đặt xe Bình Dương', 1, 1, NULL, '2022-09-20 20:58:55', '2022-09-20 21:01:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `taxi_orders`
--
ALTER TABLE `taxi_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taxi_orders`
--
ALTER TABLE `taxi_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
