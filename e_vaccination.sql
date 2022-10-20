-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2021 at 08:44 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


-- --------------------------------------------------------

--
-- Table structure for table `cities`
--
CREATE TABLE IF NOT EXISTS `Cities` (
  `name` varchar(50) primary key
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Table structure for table `centers`
--

CREATE TABLE IF NOT EXISTS `centers` (
  `name` varchar(100) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact no` varchar(20) DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--
CREATE TABLE IF NOT EXISTS `vaccine` (
  `Vaccine name` varchar(100) primary KEY,
  `Gap` int NOT NULL,
  `Precaution` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `gender` varchar(8) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `pass` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

insert into `admin` values ('Ziad','Ayad','Male','Helwan','11111111','ziadayda199@gmail.com','516230100000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(15) NOT NULL,
  `lastname` varchar(15) DEFAULT NULL,
  `gender` varchar(8) NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `id` int NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `firstdose` (
  `centername` varchar(50) NOT NULL,
  `vaccinename` varchar(50) NOT NULL,
  `dos` varchar(50) NOT NULL,
  `v_date` date DEFAULT NULL,
  `nid` varchar(20) primary key
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `seconddose` (
  `centername` varchar(50) NOT NULL,
  `vaccinename` varchar(50) NOT NULL,
  `dos` varchar(50) NOT NULL,
  `v_date` date DEFAULT NULL,
  `nid` varchar(20) primary key
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
-- Table structure for table `vaccine_dates`
--

CREATE TABLE IF NOT EXISTS `vaccine_dates` (
  `name` varchar(50) NOT NULL,
  `v_date` date DEFAULT NULL,
  `timing` varchar(20) NOT NULL,
  `c_name` varchar(15) DEFAULT NULL,
  `p_username` varchar(15) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  KEY `p_username` (`p_username`),
  KEY `c_name` (`c_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


