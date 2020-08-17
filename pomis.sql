-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2018 at 09:52 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pomis`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE IF NOT EXISTS `agents` (
  `AGENT_NO` int(6) NOT NULL,
  `username` text NOT NULL,
  `usercode` varchar(6) NOT NULL,
  `password` varchar(6) NOT NULL,
  UNIQUE KEY `username` (`username`(30))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`AGENT_NO`, `username`, `usercode`, `password`) VALUES
(1, 'alex kamau', 'ch0001', 'as2001');

-- --------------------------------------------------------

--
-- Table structure for table `breg`
--

CREATE TABLE IF NOT EXISTS `breg` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `childname` text NOT NULL,
  `dob` date NOT NULL,
  `pob` text NOT NULL,
  `sex` text NOT NULL,
  `mother` text NOT NULL,
  `age` int(2) NOT NULL,
  `father` text NOT NULL,
  `dreg` date NOT NULL,
  `informant` text NOT NULL,
  `tinfo` text NOT NULL,
  `tyb` text NOT NULL,
  `agentno` int(4) NOT NULL,
  `countyno` int(2) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `childname` (`childname`(35))
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `breg`
--

INSERT INTO `breg` (`no`, `childname`, `dob`, `pob`, `sex`, `mother`, `age`, `father`, `dreg`, `informant`, `tinfo`, `tyb`, `agentno`, `countyno`) VALUES
(1, 'aasaaas', '2015-05-11', 'nakuru PGH', 'MALE', 'eunice wangari maina', 32, 'tony maina gachoka', '2015-05-05', 'janet kwamboka', 'PARENT', 'SINGLE', 0, 33),
(2, 'alex', '2015-05-03', 'nakuru PGH', 'sex', 'eunice wangari maina', 34, 'tony maina gachoka', '2015-05-12', 'janet kwamboka', 'tinfo', 'tyb', 0, 32),
(3, 'alex kima', '2015-05-03', 'nakuru PGH', 'sex', 'eunice wangari maina', 34, 'tony maina gachoka', '2015-05-12', 'janet kwamboka', 'tinfo', 'tyb', 0, 32),
(4, 'fafafafaf', '2015-05-14', 'nakuru PGH', 'MALE', 'eunice wangari maina', 45, 'tony maina gachoka', '2015-05-12', 'janet kwamboka', 'PARENT', 'SINGLE', 0, 0),
(5, 'gilbert', '0000-00-00', 'MDH', 'MALE', 'esther mumbi', 23, 'james kamau', '2015-05-05', 'janet kwambokayl', 'PARENT', 'STILL(born dead)', 2, 21),
(6, 'matilda ochieng', '2015-05-27', 'nyarenda sub location', 'FEMALE', 'jecinta atieno', 28, 'james kamau', '2015-05-29', 'nicodemus oluoch', 'GRANDPARENT', 'SINGLE', 5620, 4),
(7, 'MONICA NJOKI', '0000-00-00', 'nakuru PGH', 'MALE', 'esther mumbi', 35, 'n/a', '2015-05-05', 'mary nafula', 'OTHER', 'SINGLE', 2, 31),
(8, 'tererere', '2015-05-14', 'nakuru PGH', 'MALE', 'eunice wangari maina', 45, 'tony maina gachoka', '2015-05-12', 'janet kwamboka', 'PARENT', 'SINGLE', 2, 0),
(9, 'wewewew', '0000-00-00', '', 'MALE', '', 0, '', '0000-00-00', '', 'PARENT', 'SINGLE', 0, 0),
(10, 'MORRIS MUGAMBI NJUGUNA', '2000-02-16', 'FREE AREA ', 'MALE', 'MARY NOKABI MUGAMBI', 20, 'n/a', '2000-12-19', 'NJUGUNA', 'PARENT', 'SINGLE', 2, 31),
(12, 'MILLICENT WAMBUI', '2000-02-16', 'FREE AREA ', 'MALE', 'MARY NOKABI MUGAMBI', 20, 'n/a', '2000-12-19', 'NJUGUNA', 'PARENT', 'SINGLE', 2, 31),
(14, 'MILLICENT WAMBUI NYOKABI', '2000-02-16', 'FREE AREA ', 'MALE', 'MARY NOKABI MUGAMBI', 20, 'n/a', '2000-12-19', 'NJUGUNA', 'PARENT', 'SINGLE', 2, 31),
(15, 'antoooot', '0000-00-00', '', 'MALE', '', 0, '', '0000-00-00', '', 'PARENT', 'SINGLE', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dreg`
--

CREATE TABLE IF NOT EXISTS `dreg` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `dname` text NOT NULL,
  `dod` date NOT NULL,
  `age` int(3) NOT NULL,
  `sex` text NOT NULL,
  `pod` text NOT NULL,
  `countyno` int(2) NOT NULL,
  `dcause` text NOT NULL,
  `informant` text NOT NULL,
  `tinfo` text NOT NULL,
  `obno` varchar(20) NOT NULL,
  `dor` date NOT NULL,
  `agentno` int(6) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `dname` (`dname`(35))
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `dreg`
--

INSERT INTO `dreg` (`no`, `dname`, `dod`, `age`, `sex`, `pod`, `countyno`, `dcause`, `informant`, `tinfo`, `obno`, `dor`, `agentno`) VALUES
(1, 'herman ndegwa karuiru', '2014-11-16', 66, 'MALE', '32', 32, 'cancer', 'DR.natville', 'tinfo', 'n/a', '2014-04-16', 0),
(2, 'jomo kenyattas', '2015-05-16', 95, 'FEMALE', '31', 31, 'CHILD DELIVERY', 'Inspector general', 'HUSBAND', 'OB/12/3/2001', '2015-05-22', 0),
(3, 'SOLOMON KAMAU KAIRA', '2015-05-13', 82, 'MALE', '31', 31, 'cancer', 'DR.kibosia', 'POLICE', 'OB/12/3/2003', '2015-05-19', 0),
(4, 'FAITH WANGARI KIGUTA', '2015-06-03', 23, 'FEMALE', '42', 42, 'AIDS', 'JOSEPH KIGUTA', 'PARENT', 'N/A', '2015-06-05', 2000),
(5, 'PHYLLIS MUTHONI NGWACI', '2015-05-14', 34, 'FEMALE', '32', 32, 'CHILD DELIVERY', 'insp. dago', 'POLICE', 'OB/23/12/2000', '2015-05-20', 2003);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `Staff_no` int(4) NOT NULL,
  `username` text NOT NULL,
  `usercode` varchar(6) NOT NULL,
  `password` varchar(6) NOT NULL,
  UNIQUE KEY `username` (`username`(30))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_no`, `username`, `usercode`, `password`) VALUES
(1, 'douglas kiboi', 'dr2030', 'dg2008');
