-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2022 at 03:04 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `aduser`
--

CREATE TABLE IF NOT EXISTS `aduser` (
  `admin_id` int(20) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aduser`
--

INSERT INTO `aduser` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `qty` varchar(100) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Message` varchar(100) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `Name`, `Email`, `Subject`, `Phone`, `Message`) VALUES
(8, 'Nay Khant Kyaw', 'naynay@gmail.com', 'Testing', 9973566351, 'This is testing Message.');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Phone` bigint(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Pay_method` varchar(100) NOT NULL,
  `Address_1` varchar(100) NOT NULL,
  `Address_2` varchar(100) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Township` varchar(30) NOT NULL,
  `Total_prod` varchar(255) NOT NULL,
  `Total_pric` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=115 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `Name`, `Phone`, `Email`, `Pay_method`, `Address_1`, `Address_2`, `City`, `Township`, `Total_prod`, `Total_pric`) VALUES
(113, 'Nay Khant Kyaw', 9973566351, 'naynay@gmail.com', 'cash on delivery', '86,E', 'Saytanathukha Street', 'yangon', 'kamaryut', 'Chicken(1)', '5800'),
(114, 'May Zin Nwe Oo', 9973566351, 'zaw@gmail.com', 'cash on delivery', '86,E', 'Saytanathukha Street', 'yangon', 'kamaryut', 'Fish(1)', '5250');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` int(20) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(50) NOT NULL,
  `prod_price` varchar(50) NOT NULL,
  `prod_img` varchar(50) NOT NULL,
  `prod_text` varchar(100) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_price`, `prod_img`, `prod_text`) VALUES
(9, 'Chicken', '3000', 'index-png2.png', 'This is rice and chicken dish for customers'),
(10, 'Fish', '2500', 'index-png1.png', 'This is pounded tuna fish dish for customers'),
(11, 'Noodle', '3500', 'slide1.jpg', 'Myanmar style coconut noodle soupe'),
(12, 'Chicken drumstick', '5000', 'contact-meal.png', 'Fried Chicken drumstick for customers'),
(14, 'Fish', '3500', 'index-png1.png', 'This is fish dish'),
(15, 'Tealeaf', '3500', 'slide2.jpg', 'This is myanmar style bar nay r......');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `sing_up_id` int(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(90) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Prof_img` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  PRIMARY KEY (`sing_up_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sing_up_id`, `Name`, `Email`, `Password`, `Phone`, `Prof_img`, `Address`, `Gender`) VALUES
(13, ' Nay Khant Kyaw', 'naynay@gmail.com', '9b502a37bba6f533aecb99d11fde2785', 9973566351, 'main-icon.png', 'Yangon', 'Male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
