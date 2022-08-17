-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2021 at 12:10 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it20777722_wad`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `email` varchar(50) NOT NULL,
  `cartID` int(11) NOT NULL AUTO_INCREMENT,
  `Pname` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`cartID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`email`, `cartID`, `Pname`, `Price`, `size`, `quantity`, `Total`) VALUES
('dilumthathsara64@gmail.com', 4, 'chilli', '12', '100g', 5, ''),
('dilumthathsara66@gmail.com', 2, 'curry', '52', '100g', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `CommentID` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`CommentID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `email` varchar(50) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `postalcode` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `fullname`, `contact`, `Address`, `postalcode`, `password`) VALUES
('dilumthathsara64@gmail.com', 'Dilum', '0775786650', '1/27,ratnapura road,kuruwita', '', '12345'),
('wishwatharaka@gmail.com', 'Tharaka', '0767395095', '28/12,saman place,ratnapura', '', '78952'),
('lelumkasuntha@gmail.com', 'lelum', '0712345678', 'kuruwita', '', '456789');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `OrderID` varchar(20) NOT NULL,
  `Total` varchar(10) NOT NULL,
  `productID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `email` varchar(100) NOT NULL,
  `card_holder_name` varchar(100) NOT NULL,
  `EXDate` varchar(50) NOT NULL,
  `CVV` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`email`, `card_holder_name`, `EXDate`, `CVV`) VALUES
('wishwatharaka@gmail.com', 'dilum thathsara', '2023-07', 132);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `Pname` varchar(100) NOT NULL,
  `size` varchar(10) NOT NULL,
  `price` varchar(50) NOT NULL,
  `published` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `Pname`, `size`, `price`, `published`, `email`, `Image`) VALUES
(39, 'curry powder', '50g', '49.99', 1, 'dilumthathsara64@gmail.com', 'photo/Curry Powder- 50g.png'),
(40, 'curry powder', '100g', '99.99', 1, 'dilumthathsara64@gmail.com', 'photo/Curry Powder- 100g.png'),
(41, 'curry powder', '250g', '199.99', 1, 'dilumthathsara64@gmail.com', 'photo/Curry Powder- 250g.png'),
(42, 'curry powder', '500g', '375.00', 1, 'dilumthathsara64@gmail.com', 'photo/Curry Powder- 500g.png'),
(34, 'Chilli Powder', '50g', '49.99', 1, 'dilumthathsara64@gmail.com', 'photo/Red Chillies - 50g.png'),
(35, 'Chilli Powder', '100g', '99.99', 1, 'dilumthathsara64@gmail.com', 'photo/Red Chillies - 100g.png'),
(36, 'Chilli Powder', '250g', '199.99', 1, 'dilumthathsara64@gmail.com', 'photo/Red Chillies - 250g.png'),
(37, 'Chilli Powder', '500g', '375.00', 1, 'dilumthathsara64@gmail.com', 'photo/Red Chillies - 500g.png'),
(38, 'Chilli Powder', '1Kg', '750.00', 1, 'dilumthathsara64@gmail.com', 'photo/Red Chillies - 1KG.png'),
(43, 'curry powder', '1Kg', '750.00', 1, 'dilumthathsara64@gmail.com', 'photo/Curry Powder- 1KG.png'),
(44, 'pepper powder', '50g', '80.00', 1, 'dilumthathsara64@gmail.com', 'photo/Pepper Powder - 50g.png'),
(45, 'pepper powder', '100g', '140.00', 1, 'dilumthathsara64@gmail.com', 'photo/Pepper Powder - 100g.png'),
(46, 'pepper powder', '250g', '360.00', 1, 'dilumthathsara64@gmail.com', 'photo/Pepper Powder - 250g.png'),
(47, 'pepper powder', '500g', '600.00', 1, 'dilumthathsara64@gmail.com', 'photo/Pepper Powder - 500g.png'),
(48, 'pepper powder', '1Kg', '1200.00', 1, 'dilumthathsara64@gmail.com', 'photo/Pepper Powder - 1KG.png'),
(49, 'Chilli Pieces', '50g', '44.99', 1, 'dilumthathsara64@gmail.com', 'photo/Chilli Pieces - 50g.png'),
(50, 'Chilli Pieces', '100g', '90.00', 1, 'dilumthathsara64@gmail.com', 'photo/Chilli Pieces - 100g.png'),
(51, 'Chilli Pieces', '250g', '180.00', 1, 'dilumthathsara64@gmail.com', 'photo/Chilli Pieces - 250g.png'),
(52, 'Chilli Pieces', '500g', '360.00', 1, 'dilumthathsara64@gmail.com', 'photo/Chilli Pieces - 500g.png'),
(53, 'Chilli Pieces', '1Kg', '730.00', 1, 'dilumthathsara64@gmail.com', 'photo/Chilli Pieces - 1KG.png'),
(54, 'Yellow powder', '50g', '250.00', 1, 'dilumthathsara64@gmail.com', 'photo/Yellow Powder - 50g.png'),
(55, 'Yellow powder', '100g', '500.00', 1, 'dilumthathsara64@gmail.com', 'photo/Yellow Powder - 100g.png'),
(56, 'Yellow powder', '250g', '1200.00', 1, 'dilumthathsara64@gmail.com', 'photo/Yellow Powder - 250g.png'),
(57, 'Yellow powder', '500g', '2400.00', 1, 'dilumthathsara64@gmail.com', 'photo/Yellow Powder - 500g.png'),
(58, 'Yellow powder', '1Kg', '4800.00', 1, 'dilumthathsara64@gmail.com', 'photo/Yellow Powder - 1KG.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
