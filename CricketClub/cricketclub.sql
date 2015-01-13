-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2015 at 01:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cricketclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `playerinfo`
--

CREATE TABLE IF NOT EXISTS `playerinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(180) NOT NULL,
  `total_matches` int(6) NOT NULL,
  `total_runs` int(6) NOT NULL,
  `club_name` varchar(180) NOT NULL,
  `runs_last_4` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `playerinfo`
--

INSERT INTO `playerinfo` (`id`, `name`, `total_matches`, `total_runs`, `club_name`, `runs_last_4`) VALUES
(1, 'Ambati Rayudu', 25, 556, 'Mumbai Indians', 245),
(2, 'Shikhar Dhawan', 25, 889, 'Sunrisers Hyderabad', 125),
(3, 'Ajinkya Rahane', 25, 1110, 'Rajasthan Royals', 300),
(4, 'Virat Kohli', 25, 1250, 'Royal Challengers Bangalore', 445),
(5, 'Rohit Sharma', 25, 956, 'Mumbai Indians', 236),
(6, 'MS Dhoni', 25, 745, 'Chennai Super Kings', 546),
(7, 'Ravindra Jadeja', 25, 999, 'Chennai Super Kings', 345),
(8, 'Ravinchandran Ashwin', 25, 478, 'Chennai Super Kings', 89),
(9, 'Buvneshwar Kumar', 25, 302, 'Sunrisers Hyderabad', 102),
(10, 'Mohammad Shami', 25, 256, 'Delhi Daredevils', 100),
(11, 'Ishant Sharma', 25, 89, 'Sunrisers Hyderabad', 12),
(12, 'Suresh Raina', 12, 645, 'Chennai Super Kings', 145),
(13, 'Umesh Yadav', 14, 56, 'Kolkata Knight Riders', 0),
(14, 'Stuart Binny', 0, 0, 'Rajasthan Royals', 0),
(15, 'Akshar Patel', 0, 0, 'Kings XI Punjab', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(160) NOT NULL,
  `password` varchar(160) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'root', '0000', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
