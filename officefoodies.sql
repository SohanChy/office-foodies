-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2017 at 05:50 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `officefoodies`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodlist`
--

CREATE TABLE `foodlist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodlist`
--

INSERT INTO `foodlist` (`id`, `name`) VALUES
(1, 'Beer - Upper Canada Light'),
(2, 'Trout - Rainbow, Frozen'),
(3, 'Plate - Foam, Bread And Butter'),
(4, 'Propel Sport Drink'),
(5, 'Wine - Blue Nun Qualitatswein'),
(6, 'Catfish - Fillets'),
(7, 'Cafe Royale'),
(8, 'Cake - Night And Day Choclate'),
(9, 'Wine - Ej Gallo Sierra Valley'),
(10, 'Island Oasis - Ice Cream Mix'),
(11, 'Wine - Niagara Peninsula Vqa'),
(12, 'Beer - Maudite'),
(13, 'Sauce - Hp'),
(14, 'Aspic - Amber'),
(15, 'Beer - Guiness'),
(16, 'Avocado With Beer'),
(17, 'Burger - On The Cob'),
(18, 'Wine - Red'),
(19, 'Wine - Vineland Estate Semi - Dry'),
(20, 'Pizza - Mini Red Organic');

-- --------------------------------------------------------

--
-- Table structure for table `lunchrank`
--

CREATE TABLE `lunchrank` (
  `id` int(11) NOT NULL,
  `food_id` int(11) DEFAULT NULL,
  `office_id` int(11) DEFAULT NULL,
  `votes` int(11) DEFAULT NULL,
  `suggester_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `chosen` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunchrank`
--

INSERT INTO `lunchrank` (`id`, `food_id`, `office_id`, `votes`, `suggester_id`, `date`, `chosen`) VALUES
(1, 19, 7, 2, 20, NULL, 2),
(2, 14, 16, 8, 8, '0000-00-00', 13),
(3, 20, 19, 5, 17, NULL, 13),
(4, 19, 8, 0, 11, NULL, 3),
(5, 19, 12, 5, 17, NULL, 2),
(6, 20, 6, 3, 12, NULL, 19),
(7, 6, 2, 1, 11, NULL, 3),
(8, 11, 15, 4, 4, NULL, 6),
(9, 7, 20, 2, 15, NULL, 17),
(10, 14, 17, 4, 7, NULL, 4),
(11, 12, 4, 0, 2, NULL, 6),
(12, 1, 1, 0, 5, NULL, 16),
(13, 19, 19, 1, 16, NULL, 19),
(14, 7, 11, 0, 11, NULL, 2),
(15, 1, 6, 4, 18, NULL, 18),
(16, 3, 20, 1, 7, NULL, 1),
(17, 15, 17, 3, 1, NULL, 19),
(18, 5, 6, 2, 17, NULL, 16),
(19, 9, 12, 0, 3, NULL, 16),
(20, 16, 11, 4, 8, NULL, 4),
(21, 18, 9, 2, 20, NULL, 6),
(22, 6, 20, 0, 9, NULL, 17),
(23, 1, 15, 2, 12, NULL, 8),
(24, 5, 20, 1, 6, NULL, 2),
(25, 9, 13, 4, 7, NULL, 3),
(26, 14, 19, 4, 16, NULL, 20),
(27, 20, 13, 4, 17, NULL, 4),
(28, 10, 9, 4, 16, NULL, 10),
(29, 9, 16, 3, 19, '0000-00-00', 14),
(30, 4, 19, 4, 2, NULL, 2),
(31, 18, 6, 2, 5, NULL, 4),
(32, 14, 20, 3, 14, NULL, 14),
(33, 11, 10, 2, 3, NULL, 10),
(34, 12, 8, 5, 9, NULL, 5),
(35, 15, 3, 2, 1, NULL, 19),
(36, 15, 13, 3, 1, NULL, 16),
(37, 2, 11, 3, 7, NULL, 7),
(38, 13, 10, 2, 12, NULL, 6),
(39, 17, 17, 0, 12, NULL, 19),
(40, 8, 14, 1, 12, NULL, 14),
(41, 7, 9, 0, 17, NULL, 7),
(42, 9, 17, 5, 13, NULL, 11),
(43, 2, 4, 5, 19, NULL, 3),
(44, 16, 5, 0, 14, NULL, 4),
(45, 7, 17, 5, 10, NULL, 20),
(46, 13, 4, 3, 2, NULL, 11),
(47, 13, 1, 3, 11, NULL, 15),
(48, 7, 1, 0, 13, NULL, 10),
(49, 11, 11, 4, 7, NULL, 3),
(50, 9, 15, 0, 9, NULL, 18),
(51, 9, 12, 4, 14, NULL, 8),
(52, 3, 20, 3, 2, NULL, 15),
(53, 18, 20, 2, 11, NULL, 20),
(54, 14, 2, 0, 10, NULL, 3),
(55, 12, 15, 4, 19, NULL, 2),
(56, 15, 17, 3, 14, NULL, 7),
(57, 10, 7, 1, 2, NULL, 14),
(58, 18, 11, 0, 16, NULL, 15),
(59, 2, 11, 0, 20, NULL, 13),
(60, 16, 3, 3, 18, NULL, 19),
(61, 8, 7, 3, 12, NULL, 5),
(62, 15, 1, 5, 13, NULL, 9),
(63, 9, 9, 2, 1, NULL, 13),
(64, 2, 12, 1, 11, NULL, 8),
(65, 17, 19, 0, 9, NULL, 7),
(66, 2, 18, 5, 9, NULL, 19),
(67, 6, 19, 3, 11, NULL, 4),
(68, 18, 2, 4, 7, NULL, 14),
(69, 5, 16, 2, 6, '0000-00-00', 7),
(70, 8, 9, 2, 4, NULL, 20),
(71, 17, 18, 1, 19, NULL, 12),
(72, 11, 16, 8, 16, '0000-00-00', 3),
(73, 19, 5, 5, 8, NULL, 5),
(74, 1, 20, 5, 12, NULL, 17),
(75, 9, 8, 2, 2, NULL, 4),
(76, 19, 16, 2, 1, '0000-00-00', 14),
(77, 15, 17, 2, 14, NULL, 5),
(78, 19, 11, 2, 18, NULL, 18),
(79, 14, 6, 2, 4, NULL, 4),
(80, 13, 14, 1, 1, NULL, 19),
(81, 16, 19, 4, 6, NULL, 6),
(82, 10, 15, 4, 8, NULL, 14),
(83, 9, 4, 3, 2, NULL, 19),
(84, 9, 11, 3, 17, NULL, 12),
(85, 19, 1, 4, 8, NULL, 14),
(86, 5, 12, 0, 4, NULL, 19),
(87, 4, 18, 4, 2, NULL, 11),
(88, 5, 13, 4, 8, NULL, 15),
(89, 16, 8, 2, 10, NULL, 8),
(90, 13, 1, 0, 8, NULL, 16),
(91, 16, 2, 0, 15, NULL, 10),
(92, 15, 18, 0, 1, NULL, 14),
(93, 13, 9, 5, 2, NULL, 11),
(94, 9, 3, 0, 19, NULL, 7),
(95, 7, 19, 2, 17, NULL, 11),
(96, 11, 10, 3, 19, NULL, 4),
(97, 17, 5, 0, 15, NULL, 10),
(98, 12, 2, 2, 8, NULL, 5),
(99, 9, 14, 2, 4, NULL, 2),
(100, 4, 13, 4, 6, NULL, 15),
(101, 0, 16, 0, 90, '0000-00-00', NULL),
(102, 20, 16, 0, 90, '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `name`, `manager_id`, `logo`) VALUES
(1, 'Dynava', 1, 'http://dummyimage.com/100x100.jpg/ff4444/ffffff'),
(2, 'Skivee', 2, 'http://dummyimage.com/100x100.bmp/dddddd/000000'),
(3, 'Oyondu', 3, 'http://dummyimage.com/100x100.png/cc0000/ffffff'),
(4, 'Zoomlounge', 4, 'http://dummyimage.com/100x100.jpg/dddddd/000000'),
(5, 'Jaxnation', 5, 'http://dummyimage.com/100x100.jpg/cc0000/ffffff'),
(6, 'Photofeed', 6, 'http://dummyimage.com/100x100.bmp/cc0000/ffffff'),
(7, 'Agivu', 7, 'http://dummyimage.com/100x100.bmp/dddddd/000000'),
(8, 'Zoomcast', 8, 'http://dummyimage.com/100x100.bmp/ff4444/ffffff'),
(9, 'Yambee', 9, 'http://dummyimage.com/100x100.jpg/cc0000/ffffff'),
(10, 'Skibox', 10, 'http://dummyimage.com/100x100.bmp/ff4444/ffffff'),
(11, 'Dazzlesphere', 11, 'http://dummyimage.com/100x100.jpg/5fa2dd/ffffff'),
(12, 'Zoom Share', 99, 'http://dummyimage.com/100x100.png/5fa2dd/ffffff'),
(13, 'Zoomzone', 13, 'http://dummyimage.com/100x100.png/ff4444/ffffff'),
(14, 'Flashpoint', 14, 'http://dummyimage.com/100x100.bmp/5fa2dd/ffffff'),
(15, 'Kaymbo', 15, 'http://dummyimage.com/100x100.bmp/cc0000/ffffff'),
(16, 'Centimia', 16, 'http://dummyimage.com/100x100.png/dddddd/000000'),
(17, 'Thoughtstorm', 17, 'http://dummyimage.com/100x100.bmp/ff4444/ffffff'),
(18, 'Youbridge', 18, 'http://dummyimage.com/100x100.png/ff4444/ffffff'),
(19, 'Tazzy', 19, 'http://dummyimage.com/100x100.bmp/cc0000/ffffff'),
(20, 'Linkbridge', 20, 'http://dummyimage.com/100x100.jpg/ff4444/ffffff');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `packets` int(11) DEFAULT NULL,
  `food_id` int(11) DEFAULT NULL,
  `office_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `payment_code` varchar(255) DEFAULT NULL,
  `payment_amount` int(11) DEFAULT NULL,
  `delivery_status` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `packets`, `food_id`, `office_id`, `vendor_id`, `payment_code`, `payment_amount`, `delivery_status`, `date`) VALUES
(1, 20, 2, 20, 16, '#076633', 5351, 1, NULL),
(2, 107, 9, 12, 21, '#d5c4f1', 8490, 1, NULL),
(3, 70, 17, 12, 21, '#112c61', 8024, 1, NULL),
(4, 81, 15, 7, 21, '#c2bd4d', 3395, 1, NULL),
(5, 20, 17, 12, 9, '#48388f', 5176, 1, NULL),
(6, 92, 17, 5, 20, '222', 2600, 1, '0000-00-00'),
(7, 94, 20, 10, 5, '#04aad1', 4830, 0, NULL),
(8, 6, 9, 12, 12, '#7e0460', 9528, 0, NULL),
(9, 48, 15, 12, 2, '#6840e9', 9341, 1, NULL),
(10, 89, 19, 8, 2, '#b5e7df', 6836, 2, NULL),
(11, 10, 17, 7, 8, '#acef92', 4642, 0, NULL),
(12, 26, 12, 20, 15, '#364839', 3889, 0, NULL),
(13, 93, 19, 10, 20, '#97c120', 5299, 0, NULL),
(14, 9, 5, 10, 11, '#2b6181', 6486, 1, NULL),
(15, 21, 6, 12, 12, '#42e13d', 3709, 1, NULL),
(16, 115, 17, 19, 19, '#9e7798', 7853, 1, NULL),
(17, 92, 3, 14, 13, '#219ceb', 9668, 0, NULL),
(18, 50, 8, 19, 2, '#423e0b', 4050, 0, '0000-00-00'),
(19, 67, 2, 12, 17, '#5e280e', 3237, 0, NULL),
(20, 87, 15, 10, 19, '#3a4b43', 8761, 1, NULL),
(21, 15, 13, 12, 7, '#cceed7', 8580, 1, NULL),
(22, 35, 6, 10, 14, '#5372f8', 8415, 1, NULL),
(23, 21, 6, 8, 15, '#77b03b', 7818, 0, NULL),
(24, 72, 6, 14, 6, '#5d03d4', 9081, 1, NULL),
(25, 13, 6, 8, 2, '#ee7d82', 3057, 1, NULL),
(26, 18, 14, 1, 15, '#379dc5', 6051, 2, NULL),
(27, 45, 12, 11, 17, '#068eb4', 7293, 1, NULL),
(28, 2, 11, 18, 5, '#68dcf1', 3608, 1, NULL),
(29, 25, 5, 13, 10, '#0e36d8', 5662, 1, NULL),
(30, 51, 15, 3, 16, '#a1adb7', 7259, 2, NULL),
(31, 69, 6, 10, 13, '#2e79ed', 6905, 1, NULL),
(32, 90, 17, 7, 13, '#5bc616', 7062, 1, NULL),
(33, 24, 6, 9, 16, '#33b03c', 3532, 1, NULL),
(34, 67, 20, 4, 7, '#bfab17', 6479, 2, NULL),
(35, 53, 6, 20, 6, '#09d3d7', 2956, 2, NULL),
(36, 65, 6, 12, 11, '#d88afc', 9608, 1, NULL),
(37, 19, 6, 13, 17, '#e0c11f', 8088, 1, NULL),
(38, 50, 4, 5, 18, '#1676cf', 8651, 1, NULL),
(39, 98, 7, 13, 7, '#90669d', 6927, 1, NULL),
(40, 46, 13, 19, 8, '#083945', 7465, 1, NULL),
(41, 25, 16, 18, 18, '#76a085', 3625, 1, NULL),
(42, 69, 4, 15, 7, '#54a2fa', 5234, 2, NULL),
(43, 69, 10, 18, 17, '#3575de', 3285, 1, NULL),
(44, 81, 10, 8, 9, '#551b61', 4607, 1, NULL),
(45, 117, 10, 16, 10, '#8a3e52', 7525, 1, NULL),
(46, 119, 10, 10, 11, '#71259e', 6298, 1, NULL),
(47, 117, 10, 12, 9, '#ba7e86', 8117, 1, NULL),
(48, 2, 10, 13, 8, '#093d45', 3762, 2, NULL),
(49, 85, 10, 17, 15, '#4c2f73', 2561, 1, NULL),
(50, 32, 10, 1, 10, '#278c45', 5158, 1, NULL),
(51, 49, 10, 6, 2, '#a9dbfe', 3125, 2, NULL),
(52, 15, 10, 18, 15, '#e654c3', 4684, 1, NULL),
(53, 53, 10, 11, 19, '#8a29fc', 8403, 1, NULL),
(54, 93, 16, 16, 17, '#56c297', 9122, 1, NULL),
(55, 11, 3, 12, 17, '#e7430b', 8866, 1, NULL),
(56, 103, 16, 17, 14, '#645355', 8913, 1, NULL),
(57, 40, 16, 6, 2, '#13d880', 8568, 1, NULL),
(58, 4, 2, 20, 17, '#98ec7c', 7291, 1, NULL),
(59, 68, 8, 13, 3, '#941b50', 6588, 1, NULL),
(60, 34, 3, 9, 15, '#e7ffbc', 5079, 1, NULL),
(61, 7, 4, 5, 5, '#069473', 5674, 1, NULL),
(62, 91, 17, 18, 2, '#830cca', 6248, 2, NULL),
(63, 98, 10, 20, 6, '#84d50d', 3844, 1, NULL),
(64, 5, 15, 4, 17, '#c4b6aa', 4562, 1, NULL),
(65, 89, 4, 12, 6, '#2a57f8', 3317, 1, NULL),
(66, 67, 11, 19, 10, '#bad380', 4023, 2, NULL),
(67, 85, 13, 10, 9, '#bd934b', 4164, 1, NULL),
(68, 57, 11, 19, 15, '#5d7c14', 8239, 1, NULL),
(69, 101, 19, 10, 8, '#6317fc', 7277, 1, NULL),
(70, 61, 8, 9, 11, '#e31669', 8881, 1, NULL),
(71, 40, 11, 1, 13, '#b56c9d', 6965, 1, NULL),
(72, 75, 8, 9, 6, '#c7afdd', 6250, 2, NULL),
(73, 120, 18, 13, 9, '#7d3abd', 3633, 1, NULL),
(74, 118, 19, 9, 11, '#34772f', 6338, 1, NULL),
(75, 37, 12, 10, 19, '#377914', 3593, 1, NULL),
(76, 47, 4, 19, 8, '#8f6150', 5118, 1, NULL),
(77, 99, 13, 11, 8, '#fe7552', 7817, 1, NULL),
(78, 4, 14, 8, 3, '#d4f6e5', 9662, 1, NULL),
(79, 68, 16, 2, 7, '#4108a7', 3793, 1, NULL),
(80, 60, 11, 2, 8, '#aa7b4a', 8657, 2, NULL),
(81, 81, 11, 10, 7, '#ac6cfb', 5308, 2, NULL),
(82, 61, 10, 12, 20, '#7f4567', 4533, 1, NULL),
(83, 109, 14, 11, 20, '#1d9b49', 2647, 1, NULL),
(84, 76, 13, 14, 13, '#45aec3', 9175, 1, NULL),
(85, 10, 11, 17, 17, '#6416cb', 9644, 1, NULL),
(86, 120, 4, 13, 3, '#1465be', 7961, 1, NULL),
(87, 119, 18, 11, 17, '#48eea2', 8106, 2, NULL),
(88, 14, 8, 20, 13, '#61fff9', 8886, 1, NULL),
(89, 33, 12, 16, 20, '#4f8241', 7540, 1, NULL),
(90, 91, 12, 9, 3, '#32b7dd', 5595, 2, NULL),
(91, 24, 19, 7, 6, '#c5a97b', 5285, 1, NULL),
(92, 16, 11, 14, 19, '#d12501', 3326, 1, NULL),
(93, 113, 17, 19, 17, '#0f77b3', 2824, 1, NULL),
(94, 79, 4, 4, 18, '#ff79cc', 6253, 1, NULL),
(95, 57, 15, 8, 17, '#e81156', 3129, 1, NULL),
(96, 109, 7, 18, 3, '#71f2f4', 9899, 1, NULL),
(97, 7, 4, 2, 12, '#09a5ea', 8951, 2, NULL),
(98, 20, 7, 16, 1, '#7317da', 3893, 2, NULL),
(99, 7, 9, 14, 10, '#f2a6e9', 8385, 2, NULL),
(100, 86, 1, 18, 1, '#1908fa', 8338, 2, NULL),
(101, 20, 19, 12, NULL, NULL, NULL, 0, '2017-12-27'),
(102, 0, 19, 12, NULL, NULL, NULL, 0, '2017-12-27'),
(103, 23, 19, 12, NULL, NULL, NULL, 0, '2017-12-27'),
(104, 0, 2, 12, NULL, NULL, NULL, 0, '2017-12-27'),
(105, 5, 19, 12, NULL, NULL, NULL, 0, '2017-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `order_bid`
--

CREATE TABLE `order_bid` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `bid_amount` double DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_bid`
--

INSERT INTO `order_bid` (`id`, `order_id`, `vendor_id`, `bid_amount`, `status`) VALUES
(1, 6, 21, 2000, 2),
(2, 6, 21, 2600, 1),
(3, 78, 21, 400, 0),
(4, 11, 21, 222, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `office_id` int(11) DEFAULT NULL,
  `voted_today` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `role`, `last_login`, `status`, `office_id`, `voted_today`) VALUES
(1, 'Laurence Eddins', 'leddins0@twitpic.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '981-297-5332', 'superadmin', '2017-12-16 22:48:30', 1, 13, NULL),
(2, 'Abigael Burchard', 'aburchard1@friendfeed.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '703-109-3645', 'office_manager', '2017-12-12 09:11:01', 2, 15, NULL),
(3, 'Carmella Thurborn', 'cthurborn2@wired.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '610-641-1540', 'superadmin', '2017-11-27 17:30:19', 2, 13, NULL),
(4, 'Ada Rozenbaum', 'arozenbaum3@yelp.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '861-226-4692', 'superadmin', '2017-10-09 21:14:35', 3, 13, NULL),
(5, 'Violette Muggleston', 'vmuggleston4@spotify.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '617-549-9132', 'vendor_manager', '2017-01-02 04:36:53', 2, 15, NULL),
(6, 'Haroun Wooton', 'hwooton5@nyu.edu', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '175-763-9045', 'office_manager', '2017-09-22 14:58:50', 3, 6, NULL),
(7, 'Prentice Patriskson', 'ppatriskson6@apache.org', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '956-334-4003', 'office_manager', '2017-03-31 19:25:06', 2, 17, NULL),
(8, 'Jerrie Astbury', 'jastbury7@clickbank.net', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '891-277-7106', 'vendor_manager', '2017-07-31 19:15:12', 3, 3, NULL),
(9, 'Neysa Bechley', 'nbechley8@gravatar.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '412-339-8509', 'office_manager', '2017-03-21 16:44:08', 3, 19, NULL),
(10, 'Kori Dunthorn', 'kdunthorn9@businesswire.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '625-192-8903', 'vendor_manager', '2017-03-09 08:27:41', 2, 17, NULL),
(11, 'Brittne Itzchaky', 'bitzchakya@who.int', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '680-705-2947', 'vendor_manager', '2017-08-06 05:46:54', 3, 20, NULL),
(12, 'Kirk Cutforth', 'kcutforthb@ibm.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '234-961-3621', 'superadmin', '2017-08-09 17:37:16', 2, 11, NULL),
(13, 'Hilarius Allsobrook', 'hallsobrookc@wired.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '635-104-7280', 'vendor_manager', '2017-12-19 11:36:30', 1, 13, NULL),
(14, 'Arlyn Rable', 'arabled@dropbox.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '153-206-1538', 'vendor_manager', '2017-11-15 16:20:19', 2, 8, NULL),
(15, 'Augustina Ilieve', 'ailievee@tripadvisor.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '881-769-5180', 'user', '2017-12-09 05:29:56', 3, 4, NULL),
(16, 'Niccolo Teager', 'nteagerf@indiatimes.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '485-122-8658', 'user', '2017-04-29 13:04:08', 2, 9, NULL),
(17, 'Earl Megarrell', 'emegarrellg@nymag.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '735-430-4988', 'office_manager', '2017-08-18 20:44:33', 2, 16, NULL),
(18, 'Zachariah Alessandrini', 'zalessandrinih@nih.gov', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '764-505-7693', 'office_manager', '2017-03-13 22:09:12', 1, 4, NULL),
(19, 'Kendall Lints', 'klintsi@privacy.gov.au', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '990-715-7220', 'superadmin', '2017-04-21 23:37:07', 3, 14, NULL),
(20, 'Aluin McGing', 'amcgingj@usgs.gov', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '600-694-8020', 'vendor_manager', '2017-11-25 08:39:26', 1, 17, NULL),
(21, 'Brice Mizen', 'bmizenk@cloudflare.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '889-807-7695', 'vendor_manager', '2017-08-06 09:54:24', 2, 8, NULL),
(22, 'Borg Meeson', 'bmeesonl@independent.co.uk', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '501-841-0528', 'superadmin', '2017-05-25 14:20:05', 3, 19, NULL),
(23, 'Farrell Cumberbatch', 'fcumberbatchm@ed.gov', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '438-663-8099', 'user', '2017-04-11 16:16:14', 2, 20, NULL),
(24, 'Raffaello Okroy', 'rokroyn@cnet.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '710-400-4261', 'office_manager', '2017-08-10 13:38:28', 3, 12, NULL),
(25, 'Aurea Tomczykiewicz', 'atomczykiewiczo@independent.co.uk', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '401-695-8632', 'office_manager', '2017-08-27 17:16:24', 3, 18, NULL),
(26, 'Morganne Poland', 'mpolandp@homestead.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '672-291-1628', 'office_manager', '2017-02-14 15:55:01', 2, 2, NULL),
(27, 'Lolly Hosburn', 'lhosburnq@bloglines.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '173-273-6445', 'user', '2017-06-23 02:53:03', 2, 20, NULL),
(28, 'Davie Vassman', 'dvassmanr@hubpages.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '325-509-5584', 'user', '2017-09-12 21:02:07', 3, 12, NULL),
(29, 'Gabby Copsey', 'gcopseys@spotify.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '821-214-3156', 'superadmin', '2017-03-16 05:27:02', 1, NULL, NULL),
(30, 'Catie Flowerden', 'cflowerdent@altervista.org', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '153-915-1267', 'user', '2017-04-22 21:59:24', 1, 13, NULL),
(31, 'Rafe Colvie', 'rcolvieu@mit.edu', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '353-667-3314', 'office_manager', '2017-09-22 04:11:55', 3, 2, NULL),
(32, 'Ellissa Gudgeon', 'egudgeonv@samsung.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '136-249-5707', 'superadmin', '2017-01-08 23:20:50', 1, 1, NULL),
(33, 'Rhianon Spain', 'rspainw@wikipedia.org', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '586-893-6851', 'user', '2017-04-14 18:52:05', 3, 20, NULL),
(34, 'Peri Sterricker', 'psterrickerx@dailymotion.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '693-601-5047', 'vendor_manager', '2017-10-02 20:28:21', 1, 9, NULL),
(35, 'Vassily Bloan', 'vbloany@ask.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '921-603-5223', 'vendor_manager', '2017-05-11 09:15:11', 2, 18, NULL),
(36, 'Duane Madeley', 'dmadeleyz@linkedin.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '557-720-7646', 'user', '2017-07-23 08:35:59', 2, 8, NULL),
(37, 'Gill Neljes', 'gneljes10@pcworld.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '109-317-0434', 'superadmin', '2017-07-20 00:14:28', 3, 18, NULL),
(38, 'Cy Crichten', 'ccrichten11@pen.io', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '757-373-9882', 'user', '2017-03-14 11:33:31', 2, 10, NULL),
(39, 'Josy Bowne', 'jbowne12@t-online.de', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '815-646-2035', 'superadmin', '2017-08-21 17:20:09', 2, 20, NULL),
(40, 'Nicholas Maryin', 'nmaryin13@taobao.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '871-882-6882', 'user', '2017-03-29 15:47:03', 1, 6, NULL),
(41, 'Babbie Gurden', 'bgurden14@wunderground.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '183-652-4079', 'user', '2017-12-02 04:28:57', 3, 8, NULL),
(42, 'Binky Carpmile', 'bcarpmile15@nifty.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '807-343-0611', 'office_manager', '2017-11-05 16:01:30', 1, 16, NULL),
(43, 'Sharron Meas', 'smeas16@wix.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '119-502-7075', 'office_manager', '2017-06-30 13:59:28', 1, 7, NULL),
(44, 'Nola Aiskrigg', 'naiskrigg17@msu.edu', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '313-934-9851', 'vendor_manager', '2017-11-09 19:16:33', 1, 19, NULL),
(45, 'Stanislas Stampfer', 'sstampfer18@indiatimes.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '681-139-2490', 'user', '2017-10-14 16:48:30', 2, 18, NULL),
(46, 'Arnold Tremathack', 'atremathack19@cyberchimps.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '215-772-2182', 'vendor_manager', '2017-05-22 23:27:36', 1, 17, NULL),
(47, 'Harlene Sellar', 'hsellar1a@wordpress.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '106-483-6686', 'superadmin', '2017-09-18 04:01:50', 2, 6, NULL),
(48, 'Dulci Schops', 'dschops1b@themeforest.net', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '317-845-7005', 'vendor_manager', '2017-10-30 13:18:10', 2, 17, NULL),
(49, 'Gran Egar', 'gegar1c@issuu.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '381-581-1539', 'vendor_manager', '2017-03-22 00:34:40', 2, 20, NULL),
(50, 'Daven Longman', 'dlongman1d@blog.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '837-870-0888', 'user', '2017-01-31 01:53:48', 1, 3, NULL),
(51, 'Conway Caunce', 'ccaunce1e@google.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '844-531-2524', 'vendor_manager', '2017-03-26 17:16:00', 1, 14, NULL),
(52, 'Shepherd Shilburne', 'sshilburne1f@yale.edu', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '606-799-0444', 'user', '2017-06-25 08:40:59', 3, 17, NULL),
(53, 'Monte Butterley', 'mbutterley1g@artisteer.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '219-912-4386', 'user', '2017-08-12 02:21:23', 1, 20, NULL),
(54, 'Domenico Sawtell', 'dsawtell1h@princeton.edu', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '599-277-6448', 'vendor_manager', '2017-01-09 08:13:43', 2, 15, NULL),
(55, 'Jenine Goggen', 'jgoggen1i@last.fm', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '523-958-0791', 'vendor_manager', '2017-11-25 18:40:34', 3, 13, NULL),
(56, 'Tobe Stansell', 'tstansell1j@themeforest.net', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '316-761-1562', 'office_manager', '2017-10-10 15:18:43', 2, 10, NULL),
(57, 'Alano Szymanowski', 'aszymanowski1k@com.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '215-843-8085', 'user', '2017-05-17 06:34:48', 3, 2, NULL),
(58, 'Bea Sweating', 'bsweating1l@diigo.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '565-167-9652', 'vendor_manager', '2017-07-11 22:47:15', 2, 13, NULL),
(59, 'Lowell Croom', 'lcroom1m@addthis.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '933-502-4355', 'user', '2017-02-11 09:00:21', 3, 13, NULL),
(60, 'Mario Dranfield', 'mdranfield1n@yandex.ru', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '298-659-0154', 'vendor_manager', '2017-01-13 22:04:38', 1, 13, NULL),
(61, 'Easter Klugel', 'eklugel1o@nyu.edu', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '995-440-9639', 'superadmin', '2017-05-12 19:38:57', 3, 19, NULL),
(62, 'Yankee Vedenichev', 'yvedenichev1p@list-manage.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '593-575-7729', 'vendor_manager', '2017-12-17 19:57:45', 3, 3, NULL),
(63, 'Wynne Dawley', 'wdawley1q@xinhuanet.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '102-939-3628', 'office_manager', '2017-05-31 12:24:40', 3, 18, NULL),
(64, 'Bebe Petrazzi', 'bpetrazzi1r@japanpost.jp', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '556-489-4541', 'superadmin', '2017-06-03 17:09:52', 2, 7, NULL),
(65, 'Isaiah Nickels', 'inickels1s@china.com.cn', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '502-795-2325', 'user', '2017-02-01 23:24:00', 2, 3, NULL),
(66, 'Pedro Burdis', 'pburdis1t@sciencedaily.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '710-374-8862', 'user', '2017-08-31 21:15:14', 1, 12, 0),
(67, 'Heath Beidebeke', 'hbeidebeke1u@vinaora.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '676-771-8936', 'vendor_manager', '2017-10-29 04:54:13', 1, 19, NULL),
(68, 'Xymenes Kittles', 'xkittles1v@paypal.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '263-745-4645', 'user', '2017-07-17 21:20:16', 3, 7, NULL),
(69, 'Hewett Simacek', 'hsimacek1w@gov.uk', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '852-493-1497', 'user', '2017-05-10 01:54:57', 2, 19, NULL),
(70, 'Robinson May', 'rmay1x@yahoo.co.jp', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '190-732-0044', 'office_manager', '2017-04-01 21:11:50', 1, 16, NULL),
(71, 'Gusta Stanton', 'gstanton1y@europa.eu', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '415-347-3341', 'office_manager', '2017-10-29 00:16:50', 1, 4, NULL),
(72, 'Cecelia Barrowclough', 'cbarrowclough1z@dropbox.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '196-434-2389', 'superadmin', '2017-11-23 05:47:11', 2, 2, NULL),
(73, 'Dawna Munn', 'dmunn20@google.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '946-401-2507', 'vendor_manager', '2017-01-03 18:32:14', 1, 10, NULL),
(74, 'Jami Coase', 'jcoase21@samsung.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '522-515-8203', 'superadmin', '2017-03-11 01:36:52', 3, 11, NULL),
(75, 'Delilah Cowlas', 'dcowlas22@wunderground.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '950-340-5512', 'office_manager', '2017-02-08 15:19:41', 3, 17, NULL),
(76, 'Emmye Fennelly', 'efennelly23@youtube.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '828-329-9791', 'vendor_manager', '2017-05-06 03:34:42', 2, 7, NULL),
(77, 'Christophorus Goldsberry', 'cgoldsberry24@redcross.org', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '994-925-0126', 'user', '2017-12-23 10:19:54', 1, 9, NULL),
(78, 'Atlante Till', 'atill25@usgs.gov', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '606-175-5951', 'vendor_manager', '2017-07-04 03:34:23', 2, 16, NULL),
(79, 'Nolan Salatino', 'nsalatino26@independent.co.uk', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '613-137-2623', 'superadmin', '2017-10-23 11:09:54', 3, 6, NULL),
(80, 'Brenna Beames', 'bbeames27@unicef.org', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '228-991-5691', 'user', '2017-06-08 06:43:27', 1, 3, NULL),
(81, 'Torrance Syddie', 'tsyddie28@shareasale.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '136-370-4318', 'office_manager', '2017-03-18 14:14:04', 1, 19, NULL),
(82, 'Cherice Fibbitts', 'cfibbitts29@go.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '776-354-7270', 'vendor_manager', '2016-12-28 20:11:08', 1, 16, NULL),
(83, 'Olivia Stollhofer', 'ostollhofer2a@live.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '663-363-3837', 'user', '2017-04-19 23:00:32', 1, 18, NULL),
(84, 'Perri Cissen', 'pcissen2b@bbc.co.uk', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '537-598-3634', 'superadmin', '2017-02-04 15:45:17', 1, 4, NULL),
(85, 'Andra Roden', 'aroden2c@tinypic.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '723-269-0337', 'superadmin', '2017-01-11 16:39:22', 3, 5, NULL),
(86, 'Wendall Aviss', 'waviss2d@homestead.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '254-352-1510', 'office_manager', '2016-12-31 00:54:23', 1, 20, NULL),
(87, 'Xerxes Imlock', 'ximlock2e@sciencedirect.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '202-226-6501', 'superadmin', '2017-04-13 13:56:32', 3, 17, NULL),
(88, 'Gunar Brothwell', 'gbrothwell2f@latimes.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '572-411-4756', 'office_manager', '2017-01-20 13:55:42', 2, 3, NULL),
(89, 'Darby Hallard', 'dhallard2g@sina.com.cn', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '556-286-7482', 'superadmin', '2017-07-30 08:48:46', 1, 8, NULL),
(90, 'Frederich Carolan', 'fcarolan2h@shareasale.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '690-618-4081', 'user', '2017-03-27 22:31:18', 3, 16, 0),
(91, 'Elladine McInnerny', 'emcinnerny2i@google.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '375-111-4914', 'vendor_manager', '2017-11-06 19:15:26', 1, 4, NULL),
(92, 'Jamil Christmas', 'jchristmas2j@dailymotion.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '468-431-0669', 'vendor_manager', '2017-04-13 02:06:06', 1, 6, NULL),
(93, 'Rolf Yukhnev', 'ryukhnev2k@hubpages.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '434-289-3384', 'vendor_manager', '2017-11-18 13:05:58', 2, 13, NULL),
(94, 'Paddie Birchenough', 'pbirchenough2l@flickr.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '685-191-4348', 'superadmin', '2017-12-22 16:59:18', 2, 11, NULL),
(95, 'Davin Oldford', 'doldford2m@creativecommons.org', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '424-494-1111', 'office_manager', '2017-01-09 17:10:30', 2, 13, NULL),
(96, 'Guglielma McTague', 'gmctague2n@instagram.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '196-387-3217', 'office_manager', '2017-04-09 10:06:54', 1, 19, NULL),
(97, 'Jules Arends', 'jarends2o@thetimes.co.uk', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '879-864-0291', 'vendor_manager', '2017-05-25 00:49:40', 1, 13, NULL),
(98, 'Gabriello MacBey', 'gmacbey2p@cdbaby.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '899-503-2476', 'vendor_manager', '2017-07-26 00:18:40', 3, 9, NULL),
(99, 'Frasier Brasner', 'fbrasner2q@nba.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '378-958-0308', 'office_manager', '2017-04-16 12:49:55', 1, 19, NULL),
(100, 'Davidde Whewell', 'dwhewell2r@foxnews.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '945-277-6493', 'superadmin', '2017-10-28 17:46:28', 3, 19, NULL),
(107, 'Sohan Chowdhury', 'Sifat3d@gmail.com', '$2y$10$gbn.wZbjZzMpgqnj7aATW.j3axg9yBTbBmg1EOKvupG2ZjCGnLkA2', '01828438753', 'vendor_manager', NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `manager_id`) VALUES
(1, 'Connelly-Sauer', 1),
(2, 'Jast, Quitzon and Johnson', 2),
(3, 'Nikolaus, Reilly and Nader', 3),
(4, 'Breitenberg-Armstrong', 4),
(5, 'Dooley, Dach and O\'Reilly', 5),
(6, 'Hilll, Ziemann and Schulist', 6),
(7, 'Weissnat-Parker', 7),
(8, 'Schiller-Kessler', 8),
(9, 'King Inc', 9),
(10, 'Stiedemann LLC', 10),
(11, 'Schulist-O\'Reilly', 11),
(12, 'Dietrich, Gibson and Towne', 12),
(13, 'Reichel, Borer and Barton', 13),
(14, 'Haley and Sons', 14),
(15, 'Ondricka Inc', 15),
(16, 'Auer-Fahey', 16),
(17, 'Christiansen-Hand', 17),
(18, 'Kutch, Beahan and Sauer', 18),
(19, 'Crooks Group', 19),
(20, 'Heidenreich-Herman', 20),
(21, 'Modhubon Pvt', 107);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodlist`
--
ALTER TABLE `foodlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunchrank`
--
ALTER TABLE `lunchrank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_bid`
--
ALTER TABLE `order_bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodlist`
--
ALTER TABLE `foodlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `lunchrank`
--
ALTER TABLE `lunchrank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `order_bid`
--
ALTER TABLE `order_bid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
