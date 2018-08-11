-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2017 at 04:38 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodbms`
--
CREATE DATABASE IF NOT EXISTS `prodbms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prodbms`;

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `get_doctors`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_doctors` ()  begin
select * from doctor;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `about_info`
--

DROP TABLE IF EXISTS `about_info`;
CREATE TABLE IF NOT EXISTS `about_info` (
  `dtid` int(100) NOT NULL AUTO_INCREMENT,
  `did` int(100) NOT NULL,
  `dental_facility` varchar(10000) NOT NULL,
  `pharmacy` varchar(10000) NOT NULL,
  `lab_service` varchar(10000) NOT NULL,
  PRIMARY KEY (`dtid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_info`
--

INSERT INTO `about_info` (`dtid`, `did`, `dental_facility`, `pharmacy`, `lab_service`) VALUES
(1, 1, 'An experienced Dental surgeon provides procedures like Dental Extractions, RCT, Scaling /Cleaning, Fillings, Local curettage.', 'Trained laboratory staff are providing best services which includes painless blood withdrawal Services of one NABL accredited laboratory are also available for carrying out specialised tests, they collect sample from 8 AM to 12 noon. In IIT Hospital. Sample collection time for IIT laboratory is 8 am to 10.30 am while emergency tests like Blood sugar, platelet count & Hb & blood grouping done in emergent cases throughout OPD hours.', 'Free reliable quality medicines are available to beneficiaries on doctor prescription during OPD hours. Medicines not available are provided by S.O. signed by prescribing Doctor and Head and collected from on campus chemist shop.'),
(2, 1, 'An experienced Dental surgeon provides procedures like Dental Extractions, RCT, Scaling /Cleaning, Fillings, Local curettage.', 'Trained laboratory staff are providing best services which includes painless blood withdrawal Services of one NABL accredited laboratory are also available for carrying out specialised tests, they collect sample from 8 AM to 12 noon. In IIT Hospital. Sample collection time for IIT laboratory is 8 am to 10.30 am while emergency tests like Blood sugar, platelet count & Hb & blood grouping done in emergent cases throughout OPD hours.', 'Free reliable quality medicines are available to beneficiaries on doctor prescription during OPD hours. Medicines not available are provided by S.O. signed by prescribing Doctor and Head and collected from on campus chemist shop.'),
(6, 1, 'An experienced Dental surgeon provides procedures like Dental Extractions, RCT, Scaling /Cleaning, Fillings, Local curettage.', 'Trained laboratory staff are providing best services which includes painless blood withdrawal Services of one NABL accredited laboratory are also available for carrying out specialised tests, they collect sample from 8 AM to 12 noon. In IIT Hospital. Sample collection time for IIT laboratory is 8 am to 10.30 am while emergency tests like Blood sugar, platelet count & Hb & blood grouping done in emergent cases throughout OPD hours.', 'Trained laboratory staff are providing best services which includes painless blood withdrawal Services of one NABL accredited laboratory are also available for carrying out specialised tests, they collect sample from 8 AM to 12 noon. In IIT Hospital. Sample collection time for IIT laboratory is 8 am to 10.30 am while emergency tests like Blood sugar, platelet count & Hb & blood grouping done in emergent cases throughout OPD hours.'),
(4, 2, 'An experienced Dental surgeon provides procedures like Dental Extractions, RCT, Scaling /Cleaning, Fillings, Local curettage.', 'Free reliable quality medicines are available to beneficiaries on doctor prescription during OPD hours. Medicines not available are provided by S.O. signed by prescribing Doctor and Head and collected from on campus chemist shop.', 'Trained laboratory staff are providing best services which includes painless blood withdrawal Services of one NABL accredited laboratory are also available for carrying out specialised tests, they collect sample from 8 AM to 12 noon. In IIT Hospital. Sample collection time for IIT laboratory is 8 am to 10.30 am while emergency tests like Blood sugar, platelet count & Hb & blood grouping done in emergent cases throughout OPD hours.'),
(5, 4, 'An experienced Dental surgeon provides procedures like Dental Extractions, RCT, Scaling /Cleaning, Fillings, Local curettage.', 'Free reliable quality medicines are available to beneficiaries on doctor prescription during OPD hours. Medicines not available are provided by S.O. signed by prescribing Doctor and Head and collected from on campus chemist shop.', 'Trained laboratory staff are providing best services which includes painless blood withdrawal Services of one NABL accredited laboratory are also available for carrying out specialised tests, they collect sample from 8 AM to 12 noon. In IIT Hospital. Sample collection time for IIT laboratory is 8 am to 10.30 am while emergency tests like Blood sugar, platelet count & Hb & blood grouping done in emergent cases throughout OPD hours.');

-- --------------------------------------------------------

--
-- Table structure for table `appinment`
--

DROP TABLE IF EXISTS `appinment`;
CREATE TABLE IF NOT EXISTS `appinment` (
  `aid` int(100) NOT NULL AUTO_INCREMENT,
  `uid` int(100) NOT NULL,
  `did` int(100) NOT NULL,
  `apt_date` text NOT NULL,
  `coupen_number` int(100) NOT NULL DEFAULT '0',
  `apt_taken_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `symptoms` varchar(1000) DEFAULT NULL,
  `comments` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appinment`
--

INSERT INTO `appinment` (`aid`, `uid`, `did`, `apt_date`, `coupen_number`, `apt_taken_time`, `symptoms`, `comments`) VALUES
(1, 3, 1, '28 November, 2017', 0, '2017-11-28 00:08:31.000992', 'Fewer', 'Feeling very cold'),
(2, 6, 3, '30 November, 2017', 0, '2017-11-28 01:26:27.772444', 'Fewer', 'Feeling cold'),
(5, 3, 1, '30 November, 2017', 0, '2017-11-28 04:54:26.229858', 'Fever', 'High cold and Headache');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `did` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `locality` varchar(1000) NOT NULL,
  `shop_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `education` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`did`,`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `first_name`, `last_name`, `locality`, `shop_name`, `email`, `phone`, `education`, `address`, `gender`, `description`, `password`) VALUES
(1, 'Dr. Yashvanth', 'Naik ', 'Udupi', 'Mythri Clinic', 'yash@gmail.com', 9741501746, 'Surgeon, MBBS, MD', 'shakthi house A-11 Udupi     ', 'male', 'Service at best    ', '4eae18cf9e54a0f62b44176d074cbe2f'),
(2, 'Dr. Rakesh', 'Mallya ', 'Manipal', 'Hi-Tech   ', 'rakesh11@gmail.com', 9741501747, 'MBBS', 'Swasti Nilaya  3rd cross Manipal  ', 'male', 'We provide health with care ', '4eae18cf9e54a0f62b44176d074cbe2f'),
(3, 'Dr. Anu  ', 'Gowda ', 'Mangalore   ', 'Akshaya clinic   ', 'anugo22@gamil.com', 9741501748, 'MBBS', 'Mahalaxmi Nilaya  1st cross Mangalore   ', 'female', 'Arogyave Bhagya', '4eae18cf9e54a0f62b44176d074cbe2f'),
(4, 'Dr. Asha', 'Shetty', 'Udupi ', 'Achitha clinic    ', 'ashashetty@gmail.com', 9741501749, 'MBBS, MD', 'Shree Nilaya   Udupi       ', 'female', 'Caring people since years..........', '4eae18cf9e54a0f62b44176d074cbe2f'),
(5, 'Dr. Zamina', 'Abbu  ', 'Udupi', 'Zamina clinic    ', 'zamina@gamil.com', 9741501750, 'MS,MBBS,MD,PHD', 'Halima Manzil  ,2nd Cross,Udupi', 'male', 'Health of people with care', '4eae18cf9e54a0f62b44176d074cbe2f');

--
-- Triggers `doctor`
--
DROP TRIGGER IF EXISTS `checkPhoneNumber`;
DELIMITER $$
CREATE TRIGGER `checkPhoneNumber` BEFORE INSERT ON `doctor` FOR EACH ROW BEGIN
IF(length(new.phone) <> 10) THEN
	SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Please enter a valid phone number';
    
   END IF;
  END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `rid` int(100) NOT NULL AUTO_INCREMENT,
  `uid` int(100) NOT NULL,
  `did` int(100) NOT NULL,
  `review` varchar(10000) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rid`, `uid`, `did`, `review`, `time`) VALUES
(1, 3, 1, 'One of the best hospitals in the region. It\'s a university hospital with almost all the departments of medical sciences. It also has a separate dental and cancer hospitals. It\'s relatively inexpensive compared to other private hospitals in the region.', '2017-11-28 00:09:41.564237'),
(2, 3, 1, 'Doctors are excellent and also Nurses are very conservative. Excellent service', '2017-11-28 00:10:11.667262'),
(3, 6, 2, 'Very Good................', '2017-11-28 01:30:10.297133'),
(4, 6, 2, 'Very Good................', '2017-11-28 01:31:02.915161'),
(5, 6, 2, 'Very Good................', '2017-11-28 01:31:33.265640'),
(6, 6, 2, 'Very Good................', '2017-11-28 01:32:49.761833'),
(7, 6, 2, 'Very Good................', '2017-11-28 01:33:11.714794'),
(8, 6, 1, 'Excellent service.', '2017-11-28 01:34:57.400618'),
(9, 3, 6, 'dggddggfgf', '2017-11-28 03:33:10.633335'),
(10, 3, 6, 'dggddggfgf', '2017-11-28 03:33:41.172230'),
(11, 3, 1, 'vey good', '2017-11-28 04:54:42.405453');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(1000) NOT NULL,
  `last_name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `blood_group` varchar(30) NOT NULL,
  `address` varchar(10000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  PRIMARY KEY (`uid`,`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `first_name`, `last_name`, `email`, `phone`, `date_of_birth`, `gender`, `blood_group`, `address`, `password`) VALUES
(1, 'Karthik     ', 'Shetty   ', 'karthikss@gmail.com', 9901367892, '1994-10-11', 'male', 'O+', 'Asha House 3rd main road Bangalore         ', '202cb962ac59075b964b07152d234b70'),
(2, 'Amitha ', 'Gowda ', 'amithag@gamail.com', 9901367893, '1993-02-11', 'female', 'A-', 'Krithi Nilaya  Karkala ', '202cb962ac59075b964b07152d234b70'),
(3, 'Sharath', 'Poojary', 'sharathpp@gamil.com', 9591708470, '1997-09-12', 'male', 'O-', 'Abhyudaya House MG road Udupi', '202cb962ac59075b964b07152d234b70'),
(4, 'Deepthi', 'Amin', 'deepthideep2@gmail.com', 9591708471, '1989-01-11', 'female', 'B+', 'Ganesh Nilaya 1st cross Mysore', '202cb962ac59075b964b07152d234b70'),
(5, 'Akash', 'Mallya  ', 'akashmm@gmail.com', 9591708472, '1992-08-22', 'male', 'A+', 'Maha Kripa Nilaya Manipal', '202cb962ac59075b964b07152d234b70'),
(6, 'Rajath', 'YK', 'ykrajath4@gmail.com', 9448108026, '1997-07-25', 'male', 'O-', '\"SWASTHIK\", Opp. Sunitha Hollo Block, Korangrapady', '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
