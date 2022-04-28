-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 07:05 AM
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
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pro` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`, `pro`, `type`) VALUES
(3, 'ela', '202cb962ac59075b964b07152d234b70', 'Ela', '', ''),
(4, 'elias', '202cb962ac59075b964b07152d234b70', 'elias', '', ''),
(5, 'ehtas', '202cb962ac59075b964b07152d234b70', 'Ehtasham Naeem', '', ''),
(6, 'ehtashamnaeemqadri21@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ehtashamnaee07@gmail.com', '', ''),
(7, 'e07@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'abc', '', ''),
(8, 'enq', 'e10adc3949ba59abbe56e057f20f883e', 'e@gmail.com', '', ''),
(9, 'e@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'ehtasham', '', ''),
(10, 'abc', '83b4ef5ae4bb360c96628aecda974200', 'abc@gmail.com', '', ''),
(11, 'ali@gmail.com', '984d8144fa08bfc637d2825463e184fa', 'ali081', '', ''),
(12, 'ali081', 'a4e90077a16407894bb749b2bc3f0d73', 'ali@gmail.com', '', ''),
(13, 'ali', '0677679d38259966b8114cd8bbe2de93', 'alii@gmail.com', '', ''),
(14, 'Rizwan', 'e799f3693348def0de1aabe44647d539', 'rizwan@gmail.com', '', ''),
(15, 'Rahat', '40ca651cefb9a6bffa117f429897c5f1', 'rahat@gmail.com', '', ''),
(16, 'ehtasham0900', '25f9e794323b453885f5181f1b624d0b', 'ehtashm@gmail.com', '', ''),
(17, 'sam', 'e10adc3949ba59abbe56e057f20f883e', 'sam@gmail.com', '', ''),
(18, 'eb', 'e10adc3949ba59abbe56e057f20f883e', 'eb@gmail.com', '', ''),
(19, 'rose1', 'e10adc3949ba59abbe56e057f20f883e', 'rose@gmailc.com', '', ''),
(20, 'ad', 'ec10394dc69512fbb2951ad967dc89ad', 'ad@gmail.com', '', ''),
(21, 'turab', 'e10adc3949ba59abbe56e057f20f883e', 'turab@gmail.com', '', ''),
(22, 'az', 'e10adc3949ba59abbe56e057f20f883e', 'az@gmail.com', '', ''),
(23, 'Joe', 'e10adc3949ba59abbe56e057f20f883e', 'joe@gmail.com', '', ''),
(24, 'faiz', 'd964173dc44da83eeafa3aebbee9a1a0', 'faiz@gmail.com', '', ''),
(25, 'patrik', 'e10adc3949ba59abbe56e057f20f883e', 'patrik@gmail.com', '', ''),
(26, 'ehtasham', 'e10adc3949ba59abbe56e057f20f883e', 'ehtasham@gmail.com', '', ''),
(27, 'egh', '25d55ad283aa400af464c76d713c07ad', 'egh@gmail.com', '', ''),
(28, 'arslan', 'e10adc3949ba59abbe56e057f20f883e', 'arslan@gmail.com', '', ''),
(29, 'dcsj', 'd553d148479a268914cecb77b2b88e6a', 'aliiiii@gmail.com', '', ''),
(30, 'Faizan', 'e10adc3949ba59abbe56e057f20f883e', 'faiz@gmail.com', '123456', 'Pro'),
(31, 'just', 'e10adc3949ba59abbe56e057f20f883e', 'just@g.com', '123456', 'Pro'),
(32, 'x', 'e10adc3949ba59abbe56e057f20f883e', 'x@gmail.com', '', 'Free'),
(33, 'y', 'e10adc3949ba59abbe56e057f20f883e', 'y@gmail.com', '123456', 'Pro'),
(34, 'Ehtasham', 'e10adc3949ba59abbe56e057f20f883e', 'basic@g.com', '', 'Basic'),
(35, 'ehtasham', 'e10adc3949ba59abbe56e057f20f883e', 'basic@yahoo.com', '', 'Basic'),
(36, 'ehtasham', 'e10adc3949ba59abbe56e057f20f883e', 'pro@yahoo.com', '', 'Pro'),
(37, 'njd', 'e10adc3949ba59abbe56e057f20f883e', 'nd@gmail.com', '', 'Pro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
