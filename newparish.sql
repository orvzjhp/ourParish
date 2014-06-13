-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2014 at 10:43 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newparish`
--

-- --------------------------------------------------------

--
-- Table structure for table `baptism_schedule`
--

CREATE TABLE IF NOT EXISTS `baptism_schedule` (
  `id_baptism_schedule` int(11) NOT NULL AUTO_INCREMENT,
  `id_parish` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `time_start` time DEFAULT NULL,
  `time_end` time DEFAULT NULL,
  PRIMARY KEY (`id_baptism_schedule`),
  KEY `parish_id` (`id_parish`),
  KEY `day_id` (`day`),
  KEY `time_id` (`time_start`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `baptism_schedule`
--

INSERT INTO `baptism_schedule` (`id_baptism_schedule`, `id_parish`, `day`, `time_start`, `time_end`) VALUES
(14, 3, 1, '11:11:00', '23:21:00'),
(49, 1, 1, '11:11:00', '11:11:00'),
(50, 1, 5, '00:12:00', '00:31:00'),
(51, 1, 3, '11:11:00', '11:11:00'),
(52, 1, 6, '11:11:00', '11:11:00'),
(53, 2, 1, '11:11:00', '11:11:00'),
(54, 3, 1, '11:11:00', '11:11:00'),
(55, 2, 6, '00:31:00', '00:12:00'),
(56, 2, 1, '11:11:00', '11:11:00'),
(62, 1, 1, '00:15:00', '00:30:00'),
(63, 1, 1, '01:00:00', '01:15:00'),
(64, 1, 1, '11:11:00', '11:11:00'),
(65, 1, 1, '00:30:00', '11:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE IF NOT EXISTS `barangay` (
  `id_barangay` int(11) NOT NULL AUTO_INCREMENT,
  `barangay` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_barangay`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`id_barangay`, `barangay`) VALUES
(1, 'Talamban'),
(2, 'Balamban'),
(3, 'Bantayan'),
(4, 'Bogo'),
(5, 'DaanBantayan'),
(6, 'Carmen'),
(7, 'Catmon'),
(8, 'Consolacion'),
(9, 'Dumanjug'),
(10, 'Lapu-Lapu'),
(11, 'Toledo'),
(12, 'Lilo-an');

-- --------------------------------------------------------

--
-- Table structure for table `confession_schedule`
--

CREATE TABLE IF NOT EXISTS `confession_schedule` (
  `id_confession_schedule` int(11) NOT NULL AUTO_INCREMENT,
  `id_parish` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `time_start` time DEFAULT NULL,
  `time_end` time DEFAULT NULL,
  PRIMARY KEY (`id_confession_schedule`),
  KEY `idparish` (`id_parish`),
  KEY `dayid` (`day`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `confession_schedule`
--

INSERT INTO `confession_schedule` (`id_confession_schedule`, `id_parish`, `day`, `time_start`, `time_end`) VALUES
(3, 1, 6, '11:11:00', '11:11:00'),
(4, 1, 1, '11:11:00', '11:11:00'),
(5, 3, 1, '11:11:00', '11:11:00'),
(6, 3, 4, '00:12:00', '00:12:00'),
(7, 2, 3, '11:11:11', '11:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation_schedule`
--

CREATE TABLE IF NOT EXISTS `confirmation_schedule` (
  `id_confirmation_schedule` int(11) NOT NULL AUTO_INCREMENT,
  `id_parish` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `time_start` time DEFAULT NULL,
  `time_end` time DEFAULT NULL,
  PRIMARY KEY (`id_confirmation_schedule`),
  KEY `parishid` (`id_parish`),
  KEY `id_day` (`day`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `confirmation_schedule`
--

INSERT INTO `confirmation_schedule` (`id_confirmation_schedule`, `id_parish`, `day`, `time_start`, `time_end`) VALUES
(10, 7, 1, '00:12:00', '00:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE IF NOT EXISTS `day` (
  `id_day` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_day`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`id_day`, `day`) VALUES
(1, 'Sunday'),
(2, 'Monday'),
(3, 'Tuesday'),
(4, 'Wednesday'),
(5, 'Thursday'),
(6, 'Friday'),
(7, 'Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  `ext` varchar(10) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `filename`, `ext`) VALUES
(1, 'pic1', 'jpg'),
(2, 'pic2', 'jpg'),
(3, 'pic3', 'jpg'),
(4, 'pic4', 'jpg'),
(5, 'pic5', 'jpg'),
(6, 'pic6', 'jpg'),
(7, 'pic7', 'jpg'),
(8, 'pic8', 'jpg'),
(9, 'pic9', 'jpg'),
(10, 'pic10', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id_language` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_language`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id_language`, `language`) VALUES
(1, 'English'),
(2, 'Cebuano');

-- --------------------------------------------------------

--
-- Table structure for table `mass_schedule`
--

CREATE TABLE IF NOT EXISTS `mass_schedule` (
  `id_mass_schedule` int(11) NOT NULL AUTO_INCREMENT,
  `id_parish` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `time_start` time DEFAULT NULL,
  `time_end` time DEFAULT NULL,
  `language` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mass_schedule`),
  KEY `id_parish` (`id_parish`),
  KEY `idday` (`day`),
  KEY `id_language` (`language`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `mass_schedule`
--

INSERT INTO `mass_schedule` (`id_mass_schedule`, `id_parish`, `day`, `time_start`, `time_end`, `language`) VALUES
(4, 1, 3, '11:11:00', '11:11:00', 2),
(5, 4, 1, '11:11:00', '11:11:00', 1),
(6, 1, 1, '11:11:00', '11:11:00', 1),
(7, 1, 1, '11:11:00', '11:11:00', 1),
(8, 1, 6, '11:11:00', '11:11:00', 1),
(9, 1, 5, '00:45:00', '11:11:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `id_parish` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_news`),
  KEY `id-parish` (`id_parish`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `id_parish`, `date`, `title`, `content`) VALUES
(1, 1, '2014-05-15', 'Jesus walks', 'something'),
(2, 1, '2014-01-01', 'ronnie''s gay!', 'Ang exclusive interview ronnie donito... Abangan!'),
(3, 1, '2014-01-16', 'john love Mr. G!', 'We thought we were joking but it was actually true. The Scandalous scandal of the century! potato potatopotatopotatopotatopotatopotatopotato');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id_page` int(11) NOT NULL,
  `id_parish` int(11) DEFAULT NULL,
  `page_name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_page`),
  KEY `id.parish` (`id_parish`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parish`
--

CREATE TABLE IF NOT EXISTS `parish` (
  `id_parish` int(11) NOT NULL AUTO_INCREMENT,
  `parish` varchar(45) DEFAULT NULL,
  `street` int(11) DEFAULT '1',
  `barangay` int(11) DEFAULT '1',
  `towncity` int(11) DEFAULT '1',
  `tnumber` varchar(20) DEFAULT '09227638918',
  `image` int(11) DEFAULT '1',
  `url` varchar(100) NOT NULL DEFAULT 'http://google.com/',
  PRIMARY KEY (`id_parish`),
  KEY `id_barangay` (`barangay`),
  KEY `id_street` (`street`),
  KEY `id_town` (`towncity`),
  KEY `id_towncity` (`towncity`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='		' AUTO_INCREMENT=9 ;

--
-- Dumping data for table `parish`
--

INSERT INTO `parish` (`id_parish`, `parish`, `street`, `barangay`, `towncity`, `tnumber`, `image`, `url`) VALUES
(1, 'Alliance of Two Hearts Parish', 4, 2, 2, '09228076111', 1, 'http://google.com/'),
(2, 'Our Lady of Lourdes Parish', 1, 1, 1, '123123123', 2, 'http://google.com/'),
(3, 'Archdiocesan Shrine of Our Lady of Guadalupe', 1, 1, 1, '123123123', 3, 'http://google.com/'),
(4, 'Our Lady of the Sacred Heart Parish - Capitol', 1, 1, 1, '123123123', 4, 'http://google.com/'),
(6, 'capitol capitan', 1, 1, 1, '123123123', 5, 'http://google.com/'),
(7, 'porno', 1, 1, 1, '123123123', 6, 'http://google.com/'),
(8, 'potato', 1, 1, 1, '12312313', 1, 'http://google.com/');

-- --------------------------------------------------------

--
-- Table structure for table `reading`
--

CREATE TABLE IF NOT EXISTS `reading` (
  `id_reading` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `id_language` int(11) NOT NULL,
  PRIMARY KEY (`id_reading`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reading`
--

INSERT INTO `reading` (`id_reading`, `date`, `description`, `id_language`) VALUES
(1, '2014-05-13', 'Somethings', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `description`) VALUES
(1, 'General Admin'),
(2, 'Parish Admin');

-- --------------------------------------------------------

--
-- Table structure for table `street`
--

CREATE TABLE IF NOT EXISTS `street` (
  `id_street` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_street`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `street`
--

INSERT INTO `street` (`id_street`, `street`) VALUES
(1, 'Balamban'),
(2, 'Bantayan'),
(3, 'Bogo'),
(4, 'DaanBantayan'),
(5, 'Carmen'),
(6, 'Catmon'),
(7, 'Consolacion'),
(8, 'Dumanjug'),
(9, 'Lapu-Lapu'),
(10, 'Toledo'),
(11, 'Lilo-an');

-- --------------------------------------------------------

--
-- Table structure for table `towncity`
--

CREATE TABLE IF NOT EXISTS `towncity` (
  `id_towncity` int(11) NOT NULL AUTO_INCREMENT,
  `towncity` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_towncity`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `towncity`
--

INSERT INTO `towncity` (`id_towncity`, `towncity`) VALUES
(1, 'Cebu'),
(2, 'Mandaue');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `id_parish` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_role` (`role`),
  KEY `id,parish` (`id_parish`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `id_parish`) VALUES
(4, 'zxcv', 'zcxv', 1, 3),
(11, 'erty', 'asdf', 2, 2),
(13, 'qwerwerqw', 'asdf', 2, 4),
(38, '134', 'adfadf', 2, 1),
(41, 'qwe', 'qwe', 2, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baptism_schedule`
--
ALTER TABLE `baptism_schedule`
  ADD CONSTRAINT `day_id` FOREIGN KEY (`day`) REFERENCES `day` (`id_day`),
  ADD CONSTRAINT `parish_id` FOREIGN KEY (`id_parish`) REFERENCES `parish` (`id_parish`);

--
-- Constraints for table `confession_schedule`
--
ALTER TABLE `confession_schedule`
  ADD CONSTRAINT `dayid` FOREIGN KEY (`day`) REFERENCES `day` (`id_day`),
  ADD CONSTRAINT `idparish` FOREIGN KEY (`id_parish`) REFERENCES `parish` (`id_parish`);

--
-- Constraints for table `confirmation_schedule`
--
ALTER TABLE `confirmation_schedule`
  ADD CONSTRAINT `id_day` FOREIGN KEY (`day`) REFERENCES `day` (`id_day`),
  ADD CONSTRAINT `parishid` FOREIGN KEY (`id_parish`) REFERENCES `parish` (`id_parish`);

--
-- Constraints for table `mass_schedule`
--
ALTER TABLE `mass_schedule`
  ADD CONSTRAINT `idday` FOREIGN KEY (`day`) REFERENCES `day` (`id_day`),
  ADD CONSTRAINT `id_language` FOREIGN KEY (`language`) REFERENCES `language` (`id_language`),
  ADD CONSTRAINT `id_parish` FOREIGN KEY (`id_parish`) REFERENCES `parish` (`id_parish`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `id-parish` FOREIGN KEY (`id_parish`) REFERENCES `parish` (`id_parish`);

--
-- Constraints for table `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `id.parish` FOREIGN KEY (`id_parish`) REFERENCES `parish` (`id_parish`);

--
-- Constraints for table `parish`
--
ALTER TABLE `parish`
  ADD CONSTRAINT `id_barangay` FOREIGN KEY (`barangay`) REFERENCES `barangay` (`id_barangay`),
  ADD CONSTRAINT `id_street` FOREIGN KEY (`street`) REFERENCES `street` (`id_street`),
  ADD CONSTRAINT `id_towncity` FOREIGN KEY (`towncity`) REFERENCES `towncity` (`id_towncity`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `id,parish` FOREIGN KEY (`id_parish`) REFERENCES `parish` (`id_parish`),
  ADD CONSTRAINT `id_role` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
