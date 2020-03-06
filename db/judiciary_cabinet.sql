-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 10:45 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `judiciary_cabinet`
--
CREATE DATABASE IF NOT EXISTS `judiciary_cabinet` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `judiciary_cabinet`;

-- --------------------------------------------------------

--
-- Table structure for table `adjourned`
--

CREATE TABLE `adjourned` (
  `id` int(11) NOT NULL,
  `respondent` varchar(255) NOT NULL,
  `appellant` varchar(255) NOT NULL,
  `case_no` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `judge` varchar(255) NOT NULL,
  `lawyer` varchar(255) NOT NULL,
  `a_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appellant`
--

CREATE TABLE `appellant` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `case_no` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `medical` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `property` varchar(255) NOT NULL,
  `case_detail` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `id` int(11) NOT NULL,
  `respondent` varchar(255) NOT NULL,
  `appellant` varchar(255) NOT NULL,
  `case_no` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `judge` varchar(255) NOT NULL,
  `lawyer` varchar(255) NOT NULL,
  `a_date` varchar(255) NOT NULL,
  `judgement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`id`, `respondent`, `appellant`, `case_no`, `location`, `date`, `judge`, `lawyer`, `a_date`, `judgement`) VALUES
(1, 'Wisdom Odoki', 'Diala Egwuchukwu', '23456', 'Lagos', '2020-03-05', 'Mary Odili', 'Barr. Chinedu Akpa', '2020-03-20', 'Innocent until found guilty!!');

-- --------------------------------------------------------

--
-- Table structure for table `judge`
--

CREATE TABLE `judge` (
  `id` int(11) NOT NULL,
  `respondent` varchar(255) NOT NULL,
  `appellant` varchar(255) NOT NULL,
  `case_no` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `judge` varchar(255) NOT NULL,
  `lawyer` varchar(255) NOT NULL,
  `a_date` varchar(255) NOT NULL,
  `judgement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `respondent`
--

CREATE TABLE `respondent` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `case_no` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `medical` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `property` varchar(255) NOT NULL,
  `case_detail` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `respondent`
--

INSERT INTO `respondent` (`id`, `name`, `case_no`, `occupation`, `medical`, `address`, `property`, `case_detail`, `date`) VALUES
(1, 'Diala Egwuchukwu', '23456', 'sdbxfbx', 'xfbxrbx', 'Umuchima, Owerri', 'xfbxv', 'gfdcvbhjuygtbhnj', '2020-03-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'Egwuchukwu Diala', 'dialaegwuchukwu@gmail.com', '$2y$10$ujADxE35U4CayM2AMAelsOirLtjaqq27tHEBEzVe2aTIVKWIJnGRG', 'Lawyer'),
(2, 'User Test', 'testuser@email.com', '$2y$10$RYEYjiCxYB8C4xjmjhGdPusjf1YbLQAi.7u1eG3Od7mJj/BLjySG.', 'Judge'),
(3, 'Users Test', 'testuser@email.com', '$2y$10$ndzpxUHMHqEoQ5B4LuBQ2ezrBE1mS04ZSc76tXnVDQbrdXkM8NWqm', 'Judge'),
(4, 'Stephen  Admin', 'johndoe@gmail.com', '$2y$10$vEzcZlpWaIjipfBfPupWW.CkgNwfexKgUMabcBWJ.v3ce8WvkByfS', 'Judge');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adjourned`
--
ALTER TABLE `adjourned`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appellant`
--
ALTER TABLE `appellant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appellant` (`appellant`),
  ADD KEY `respondent` (`respondent`),
  ADD KEY `judge` (`judge`),
  ADD KEY `lawyer` (`lawyer`);

--
-- Indexes for table `judge`
--
ALTER TABLE `judge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respondent`
--
ALTER TABLE `respondent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adjourned`
--
ALTER TABLE `adjourned`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appellant`
--
ALTER TABLE `appellant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `court`
--
ALTER TABLE `court`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `judge`
--
ALTER TABLE `judge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `respondent`
--
ALTER TABLE `respondent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
