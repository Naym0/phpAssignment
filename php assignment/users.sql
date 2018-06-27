-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2018 at 06:22 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `Full_Name` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone_Number` int(11) NOT NULL,
  `User_Name` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `UserType` text NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Image` varchar(100) NOT NULL DEFAULT 'n/a',
  `AccessTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `Full_Name`, `email`, `phone_Number`, `User_Name`, `Password`, `UserType`, `Address`, `Image`, `AccessTime`) VALUES
(23, 'May Winter', 'mw@yahoo.com', 534525, 'May Winter', '$2y$10$wIehiuz/Cc4y9Ib/XIeRxud9pJf9IQOMv', 'SuperUser', 'Nairobi', '', '0000-00-00 00:00:00'),
(23, 'May Winter', 'mw@yahoo.com', 534525, 'May Winter', 'abc', 'SuperUser', 'Nairobi', '', '0000-00-00 00:00:00'),
(25, 'Autumn Low', 'Alow@yahoo.com', 254, 'Autumn Low', '123', 'SuperUser', 'Nairobi', '', '0000-00-00 00:00:00'),
(30, 'Anna Mae', 'AnnaMae@yahoo.com', 254798034, 'Anna Mae', 'jkl', 'Admin', 'Kisumu', '', '0000-00-00 00:00:00'),
(12, 'Lisa Manya', 'LM@gmail.com', 22534987, 'Lisa Manya', 'Manijax2', 'Admin', 'Mombasa', '', '0000-00-00 00:00:00'),
(19, 'Nicole Olga', 'NOlga@yahoo.com', 975301, 'Nicole Olga', 'olgaaa1', 'SuperUser', 'Nakuru', '', '2011-07-06 00:00:00'),
(90, 'Cathrine ', 'Cathy@gmail.com', 123456789, 'Cathrine ', 'zawadi', 'SuperUser', 'Nyeri', '', '0000-00-00 00:00:00'),
(33, 'Kelly White', 'kwhite@yahoo.com', 43526, 'kwhite', '0000', 'Admin', 'Geneva', 'n/a', '2018-06-15 12:20:16'),
(9, 'Cathrine ', 'Cathy21@gmail.com', 126789, 'Cathrine ', 'asd', 'SuperUser', 'Nyeri', 'image/', '0000-00-00 00:00:00'),
(26, 'Grace George', 'GG@gmail.com', 400045, 'Grace George', 'pups', 'Admin', 'Lakeside', 'image/', '2018-06-15 11:31:59'),
(0, '', '', 0, '', '', '', '', 'image/', '2018-06-15 16:27:47'),
(0, '', '', 0, '', '', '', '', 'image/', '2018-06-15 16:28:06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
