-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2022 at 03:35 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoeplazza`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) NOT NULL,
  `age` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` varchar(6) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `mobile` varchar(10) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `fullname`, `age`, `gender`, `username`, `password`, `address`, `email`, `mobile`, `image`) VALUES
(6, 'luxury', '11', 'male', 'luzury', 'luxury993', 'luxury', 'luxury@gmail.com', '9797979797', 'noprofile.png'),
(4, 'ok', '19', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok'),
(7, 'dineshh', '20', 'male', 'xoxoxo', 'xoxoxo007', 'zjknfvksjnfksd', 'dinesh@gmail.com', '9898989898', 'noprofile.png');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `brand` varchar(20) NOT NULL,
  `image` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `information` varchar(700) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`,`price`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `brand`, `image`, `information`, `price`) VALUES
(1, 'Jordan Air 4', 'nike', 'jordan4/jordan4', '                    The Air Jordan 4 first took flight in 1989 as a more lightweight, breathable model compared to previous Air Jordan designs from Tinker Hatfield. Famously featuring its unique \"wings\" to allow for customised lace setups, the AJ4 is now back with all its special trimmings and an OG colour-blocked make-up for the summer. Similar to the classic blue style from decades ago, this \'White and Black\' Air Jordan 4 goes for a more neutral white, black and Neutral Grey palette that\'s ready for any outfit.\r\n', 15000),
(2, 'Adistar', 'adidas', 'adistar/adistarshoes', 'ADISTAR. FOR THE LONG, SLOW RUN.\r\n\r\nThe distance running shoe inspired by the idea of perpetual motion and tested over 4,500 km. Adistar combines a soft, lightweight REPETITOR foam platform with REPETITOR +, a firmer foam, to create a dual density midsole. The firmer 15% recycled EVA in the heel protects and helps stabilize any heel strike. Forward propulsion is enhanced by the rocker geometry as well as an overall 6mm drop heel to toe. Strike soft and push forward with a shoe designed to go the distance.', 9999),
(3, 'NMD_V3 ', 'adidas', 'nmd_v3/nmd_v3', 'Go ahead and check all the boxes with these juniors\' adidas NMD_R1 V3 Shoes. Breathable. Comfortable. Made with recycled materials. That\'s a yes to all three. Plus there\'s the style, like the perforated details, which is also where that breathability comes in. Playing with transparency, the 3-Stripes layer over the perforations, giving a glimpse at them underneath the monochrome sign-off.\r\n<br>\r\nThis shoe\'s upper is made with a high-performance yarn which contains at least 50% Parley Ocean Plastic — reimagined plastic waste, intercepted on remo', 7999),
(4, 'UltraBoost Web DNA', 'adidas', 'ultraboostwebdna/ultraboostdna', 'Comfort that\'s rooted in running meets effortless style in these adidas Ultraboost Web DNA Shoes. A lattice design on the midsole and outsole reveals the energy-returning Boost cushioning underneath. The adidas Primeknit upper is stretchy and supportive.\r\n<br>\r\nThis product is made with Primeblue, a high-performance recycled material made in part with Parley Ocean Plastic. 50% of the upper is textile, 75% of the textile is Primeblue yarn. No virgin polyester.', 11999),
(5, 'Fuse One8', 'puma', 'FuseOne8/fuseone8', 'When your workout gets intense, you need all the support you can get – and these shoes are designed to be the ultimate training ally. With a high-traction outsole, enhanced shock absorption, a roomy toe box with extra support and a stability-boosting heel insert, you\'ll feel in control like never before.', 4999),
(6, 'RS-X SPLIT Sneakers', 'puma', 'rs-xsplit/xsplit', 'We’re reinventing streetwear from A to Z. Introducing the RS-Z, the latest and greatest addition to the RS family. Its silhouette is sharp and streetwise, with an extreme design language and extra-bold colors for today’s fashion gamechangers. This execution features a mesh upper with leather and synthetic leather overlays, and a multi-layers branding execution on quarter.', 12999),
(7, 'Zoom Freak 4', 'nike', 'Zoom Freak 4/Zoom Freak 4', 'Giannis is an incessant storm of stamina and skill that keeps coming at opponents for 4 quarters or more. The forward-thinking design of his latest signature shoe helps propel you down the court in a lightweight fit that moves with you. It can handle quick changes in direction on both sides of the floor, giving you side-to-side stability and multi-directional traction as you Euro step to the hoop.', 13999),
(8, 'Air Max Plus', 'nike', 'Air Max Plus/Air Max Plus', 'Let your attitude have the edge with flame-like caging that adds heat to the streets while airy mesh keeps you cool. The Nike Air Max Plus gives you a tuned Nike Air experience that offers premium stability and unbelievable cushioning.', 14999),
(9, 'Air Max 270', 'nike', 'Air Max 270/Air Max 270', 'Legendary Air gets lifted. Nike\'s 1st lifestyle Air Max brings you style, comfort and 270 degrees of Air to showcase one of our greatest innovations yet. Add a lightweight, airy upper and low-cut collar and you\'ve got the perfect go-to kicks for everyday fun.', 14999);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `age` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` varchar(6) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `mobile` varchar(10) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fullname`, `age`, `gender`, `username`, `password`, `address`, `email`, `mobile`, `image`) VALUES
(1, 'dineshh', '19', 'male', 'dinesh', 'dinesh1200', 'kjdndkjvndkjv', 'khuntidnsh@gmail.com', '6353535353', 'person-logo-icon-png-svg.png'),
(3, 'jenti', '10', 'male', 'jbtukadiya', 'jentijdjdj', 'kjfnvkdfjnvfj', 'jenti@gmail.com', '6868686868', '96b9b930a74c92cd3475b685ea0d0af6.jpg'),
(4, 'dkfjnsjd', '18', 'male', 'dineshhhhh', 'dineshhhhh', 'rhsdgdgs', 'dinesh@gsdjdv.com', '9797979797', 'noprofile.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

DROP TABLE IF EXISTS `user_cart`;
CREATE TABLE IF NOT EXISTS `user_cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `item_id` int NOT NULL,
  `user_id` int NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `item_id_2` (`item_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
