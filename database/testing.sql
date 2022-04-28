-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 04:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'Nice Product, Value for money', 1621935691),
(7, 'Peter Parker', 5, 'Nice Product with Good Feature.', 1621939888),
(8, 'Donna Hubber', 1, 'Worst Product, lost my money.', 1621940010),
(9, 'Qadri', 3, 'Hi! Hope you will be fine', 1651040672),
(10, 'ew', 5, 'bjubjbj', 1651062448),
(11, 'Ehtasham', 4, 'Hi, This API is Awesome', 1651105588),
(12, 'Ehtasham', 5, 'Map Box is best', 1651111653);

-- --------------------------------------------------------

--
-- Table structure for table `review_table_geocoding`
--

CREATE TABLE `review_table_geocoding` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table_geocoding`
--

INSERT INTO `review_table_geocoding` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'Ehtasham Naeem', 5, 'Nice API , Must try', 1621935691),
(9, 'Ali', 4, 'Must Try This API', 1651105815),
(10, 'Faizan', 5, 'I\'m using....', 1651111695);

-- --------------------------------------------------------

--
-- Table structure for table `review_table_yelp`
--

CREATE TABLE `review_table_yelp` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table_yelp`
--

INSERT INTO `review_table_yelp` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'Ehtasham', 4, 'Nice, Best', 1621935691),
(2, 'Faizan', 5, 'Its easy to integrate', 1651111737),
(3, 'Faizan', 5, 'Its easy to integrate', 1651111742),
(4, 'sfnsdkj', 0, 'ksdnkvsdk   jskfn', 1651111780);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review_table_geocoding`
--
ALTER TABLE `review_table_geocoding`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `review_table_yelp`
--
ALTER TABLE `review_table_yelp`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review_table_geocoding`
--
ALTER TABLE `review_table_geocoding`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review_table_yelp`
--
ALTER TABLE `review_table_yelp`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
