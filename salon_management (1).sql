-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 07:05 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `salon_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `qua`
--

CREATE TABLE IF NOT EXISTS `qua` (
  `date` varchar(10) NOT NULL,
  `qua` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `About_id` int(2) NOT NULL AUTO_INCREMENT,
  `Description` varchar(100) NOT NULL,
  `Phone` int(15) NOT NULL,
  PRIMARY KEY (`About_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE IF NOT EXISTS `tbl_appointment` (
  `App_id` int(2) NOT NULL AUTO_INCREMENT,
  `Reg_no` int(2) NOT NULL,
  `ser_cat_id` varchar(20) NOT NULL,
  `Cat_id` int(2) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Staff_id` int(2) NOT NULL,
  `Status` int(5) NOT NULL,
  PRIMARY KEY (`App_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`App_id`, `Reg_no`, `ser_cat_id`, `Cat_id`, `Date`, `Time`, `Staff_id`, `Status`) VALUES
(1, 1, '1', 1, '2017-07-12', '11:00:00', 4, 4),
(2, 1, '1', 1, '2017-07-12', '13:00:00', 4, 5),
(3, 1, '1', 1, '2017-07-12', '12:00:00', 4, 5),
(4, 1, '2', 1, '2017-07-12', '10:00:00', 3, 1),
(5, 1, '1', 1, '2017-07-12', '10:20:00', 3, 1),
(6, 1, '1', 1, '2017-07-13', '13:00:00', 3, 1),
(7, 1, '1', 1, '2017-07-13', '14:00:00', 4, 1),
(8, 1, '1', 1, '2017-07-13', '14:30:00', 3, 1),
(9, 1, '6', 2, '2017-07-13', '11:00:00', 5, 1),
(10, 1, '6', 2, '2017-07-13', '13:59:00', 5, 1),
(11, 1, '6', 2, '2017-07-13', '11:59:00', 5, 1),
(12, 1, '7', 2, '2017-07-13', '10:00:00', 5, 1),
(13, 1, '11', 3, '2017-07-06', '13:00:00', 6, 1),
(14, 1, '11', 3, '2017-07-06', '13:16:00', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill`
--

CREATE TABLE IF NOT EXISTS `tbl_bill` (
  `Bill_id` int(2) NOT NULL AUTO_INCREMENT,
  `Bill_no` int(5) NOT NULL,
  `Bill_date` date NOT NULL,
  `Reg_id` int(2) NOT NULL,
  `Item_id` int(2) NOT NULL,
  `Total_amount` int(20) NOT NULL,
  PRIMARY KEY (`Bill_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE IF NOT EXISTS `tbl_brand` (
  `Brand_id` int(2) NOT NULL AUTO_INCREMENT,
  `Brand_name` varchar(20) NOT NULL,
  `Status` varchar(8) NOT NULL,
  PRIMARY KEY (`Brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`Brand_id`, `Brand_name`, `Status`) VALUES
(1, 'Loreal', '1'),
(2, 'Lakme', '1'),
(3, 'Dove', '1'),
(4, 'Pantene', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `ser_cat_id` int(5) NOT NULL AUTO_INCREMENT,
  `Cat_id` int(5) NOT NULL,
  `ser_cat_name` varchar(50) NOT NULL,
  `ser_cat_price` int(10) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`ser_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`ser_cat_id`, `Cat_id`, `ser_cat_name`, `ser_cat_price`, `status`) VALUES
(1, 1, 'Hair Cut', 150, 1),
(2, 1, 'Hair Coloring', 500, 1),
(3, 1, 'Hair Straightening', 5000, 1),
(4, 1, 'Hair Dye', 200, 1),
(5, 1, 'Hair Smoothening', 6000, 1),
(6, 2, 'Manicure', 500, 1),
(7, 2, 'Pedicure', 100, 1),
(8, 2, 'Gel polish', 100, 1),
(9, 2, 'Nail Art', 120, 1),
(10, 2, 'Nail cut', 50, 1),
(11, 3, 'Saree drapping', 1000, 1),
(12, 3, 'Makeup', 5000, 1),
(13, 3, 'Mehendhi', 500, 1),
(14, 3, 'Brow Shaping', 30, 1),
(15, 4, 'Back massage', 1000, 1),
(16, 4, 'Body massage', 1000, 1),
(17, 4, 'Full Massage', 2000, 1),
(18, 5, 'Facial', 500, 1),
(19, 5, 'Makeup', 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE IF NOT EXISTS `tbl_district` (
  `Dis_id` int(2) NOT NULL AUTO_INCREMENT,
  `Dis_name` varchar(50) NOT NULL,
  PRIMARY KEY (`Dis_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`Dis_id`, `Dis_name`) VALUES
(1, 'Kasarkode'),
(2, 'Kannur'),
(3, 'Wayanad'),
(4, 'Kozhikode'),
(5, 'Malappuram'),
(6, 'Palakkad'),
(7, 'Thrissur'),
(8, 'Eranakulam'),
(9, 'Idukki'),
(10, 'Kottayam'),
(11, 'Alappuzha'),
(12, 'Pathanamthitta'),
(13, 'Kollam'),
(14, 'Thiruvanathapuram');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `Feed_id` int(2) NOT NULL AUTO_INCREMENT,
  `Reg_id` int(2) NOT NULL,
  `Date` date NOT NULL,
  `Feed_msg` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`Feed_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE IF NOT EXISTS `tbl_items` (
  `Item_id` int(2) NOT NULL AUTO_INCREMENT,
  `Item_name` varchar(50) NOT NULL,
  `Brand_id` int(2) NOT NULL,
  `Item_Cat_id` int(2) NOT NULL,
  `Item_price` int(50) NOT NULL,
  `Item_stock` int(50) NOT NULL,
  `Item_image` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`Item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`Item_id`, `Item_name`, `Brand_id`, `Item_Cat_id`, `Item_price`, `Item_stock`, `Item_image`, `status`) VALUES
(1, 'Shampoo', 4, 1, 200, 50, 'Pantene-Conditioner-Hair-Fall-Control-2-size-2.jpg', 1),
(2, 'Soap', 3, 1, 50, 50, 'Dove-Gentle-Exfoliating-Beauty-Bar-Soap.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_category`
--

CREATE TABLE IF NOT EXISTS `tbl_item_category` (
  `Item_Cat_id` int(2) NOT NULL AUTO_INCREMENT,
  `Item_Cat_name` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Status` int(2) NOT NULL,
  PRIMARY KEY (`Item_Cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_item_category`
--

INSERT INTO `tbl_item_category` (`Item_Cat_id`, `Item_Cat_name`, `Description`, `Status`) VALUES
(1, 'Hair kit', 'Hair kitt', 1),
(2, 'Nail kit', 'Nail kit\r\n', 1),
(3, 'Eye kit', 'Eye kit\r\n', 1),
(4, 'Face kit', 'facial kit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE IF NOT EXISTS `tbl_leave` (
  `Leave_id` int(2) NOT NULL AUTO_INCREMENT,
  `Reg_id` int(2) NOT NULL,
  `Section` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Reason` varchar(70) NOT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`Leave_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `Log_id` int(2) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role_id` int(5) NOT NULL,
  `Reg_id` int(2) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`Log_id`, `Username`, `Password`, `Role_id`, `Reg_id`, `Status`) VALUES
(1, 'liyamathew11@gmail.com', '83bf6caa59c17cd19dc94c7c7ee5f9ab', 1, 1, 1),
(2, 'jannet@gmail.com', '85463054063d5ba045e32479ff78fd3c', 1, 2, 1),
(3, 'admin', 'admin', 0, 0, 0),
(4, 'dilu@gmail.com', '51705dff9f9241a5d14c863e6976e6d3', 2, 3, 1),
(5, 'navya@gmail.com', '27e1b4ba0a4d02ac247463a31ce38115', 2, 4, 1),
(6, 'merin@gmail.com', 'e26f9703234847ff245ebb6e636a5e6e', 2, 5, 1),
(7, 'lilly1@gmail.com', '1eef609783c38c3993ed1805db4dddc8', 2, 6, 1),
(8, 'reshma@gmail.com', 'b91cc4164c884921da4164aa2f5781b0', 2, 7, 1),
(9, 'merinm@gmail.com', '3e960e88df01375667d519a41553cc28', 2, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `Pay_id` int(2) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Card_no` varchar(50) NOT NULL,
  `Cvv` int(50) NOT NULL,
  `Bank` varchar(50) NOT NULL,
  `Expiry` date NOT NULL,
  PRIMARY KEY (`Pay_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`Pay_id`, `Name`, `Card_no`, `Cvv`, `Bank`, `Expiry`) VALUES
(1, 'Liya Mathew', '123456789123456', 123, 'Federal Bank', '2020-08-02'),
(2, 'Jannet George', '147258369741852', 147, 'Federal Bank', '2020-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase`
--

CREATE TABLE IF NOT EXISTS `tbl_purchase` (
  `Pur_id` int(2) NOT NULL AUTO_INCREMENT,
  `Reg_id` int(2) NOT NULL,
  `Date` date NOT NULL,
  `Item_id` int(2) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Total` int(50) NOT NULL,
  `Status` int(5) NOT NULL,
  PRIMARY KEY (`Pur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_purchase`
--

INSERT INTO `tbl_purchase` (`Pur_id`, `Reg_id`, `Date`, `Item_id`, `Quantity`, `Total`, `Status`) VALUES
(1, 1, '2017-07-05', 1, 1, 200, 2),
(2, 1, '2017-07-05', 2, 2, 100, 0),
(3, 1, '2017-07-05', 1, 8, 1600, 0),
(4, 1, '2017-07-05', 1, 1, 200, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `Reg_id` int(2) NOT NULL AUTO_INCREMENT,
  `F_name` varchar(50) NOT NULL,
  `L_name` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `House_name` varchar(70) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Dis_id` int(15) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Status` int(2) NOT NULL,
  PRIMARY KEY (`Reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`Reg_id`, `F_name`, `L_name`, `Gender`, `House_name`, `City`, `Dis_id`, `Mobile`, `Email`, `Image`, `Status`) VALUES
(1, 'Liya', 'Mathew', 'Female', 'Anatharackal', 'Kattappana', 9, '8594075060', 'liyamathew11@gmail.com', '7212Liya Mathew.jpg', 1),
(2, 'Jannet', 'George', 'Female', 'Madapattu', 'Kochera', 9, '9876543210', 'jannet@gmail.com', '7199Janet George.jpg', 1),
(3, 'Dilu', 'Mariya', 'Female', 'Kallarackal', 'Kanjirapally', 10, '8741256390', 'dilu@gmail.com', 'FB_IMG_1477337941528.jpg', 2),
(4, 'Merin', 'Manoj', 'Female', 'Kallarackal', 'Kumily', 13, '8741256390', 'navya@gmail.com', 'FB_IMG_1492343415241.jpg', 2),
(5, 'Navya', 'Mol', 'Female', 'Kallarackal', 'Kanjirapally', 12, '9874563210', 'merin@gmail.com', 'Merin Miss 20161219_213005.jpg', 2),
(6, 'Lilly', 'Kutty', 'Female', 'Anatharackal', 'Kochera', 12, '8606421480', 'lilly1@gmail.com', 'IMG_20161225_091341.jpg', 2),
(7, 'Reshma', 'Mathew', 'Female', 'Anatharackal', 'Kanjirapally', 11, '7412589630', 'reshma@gmail.com', '2017-01-28-09-36-53-532.jpg', 2),
(8, 'Merin', 'Mathew', 'Female', 'Anatharackal', 'Kanjirapally', 12, '8963254170', 'merinm@gmail.com', '2017-01-30-22-07-07-834.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_category`
--

CREATE TABLE IF NOT EXISTS `tbl_service_category` (
  `Cat_id` int(2) NOT NULL AUTO_INCREMENT,
  `Cat_name` varchar(50) NOT NULL,
  `Status` int(5) NOT NULL,
  PRIMARY KEY (`Cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_service_category`
--

INSERT INTO `tbl_service_category` (`Cat_id`, `Cat_name`, `Status`) VALUES
(1, 'Hair Treatment', 1),
(2, 'Nail Treatments', 1),
(3, 'Bridal Treatments', 1),
(4, 'Body Spa treatments', 1),
(5, 'Face Treatments', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `Detail_id` int(2) NOT NULL AUTO_INCREMENT,
  `Reg_id` int(2) NOT NULL,
  `Cat_id` int(2) NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `University` varchar(50) NOT NULL,
  `Year_of_pass` year(4) NOT NULL,
  `Experience` varchar(10) NOT NULL,
  PRIMARY KEY (`Detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`Detail_id`, `Reg_id`, `Cat_id`, `Qualification`, `University`, `Year_of_pass`, `Experience`) VALUES
(1, 3, 1, 'UG', 'Beauty College', 2014, '2'),
(2, 4, 1, 'UG', 'Beauty College', 2015, '1'),
(3, 5, 2, 'PG', 'Beauty College', 2017, '1'),
(4, 6, 3, 'PG', 'Beauty College', 2015, '2'),
(5, 7, 4, 'PG', 'Beauty College', 2014, '2'),
(6, 8, 5, 'UG', 'Beauty College', 2014, '5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
