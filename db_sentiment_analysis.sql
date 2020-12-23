-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 10:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sentiment_analysis`
--

-- --------------------------------------------------------

--
-- Table structure for table `_cases`
--

CREATE TABLE `_cases` (
  `case_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_dataset_youtube`
--

CREATE TABLE `_dataset_youtube` (
  `id` int(11) NOT NULL,
  `source_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `comment` varchar(1500) NOT NULL,
  `time` datetime NOT NULL,
  `case_folding` varchar(1000) NOT NULL,
  `cleansing` varchar(1000) NOT NULL,
  `slangword` varchar(1000) NOT NULL,
  `filtering` varchar(1000) NOT NULL,
  `stemming` varchar(1000) NOT NULL,
  `tokenization` varchar(1000) NOT NULL,
  `label` tinyint(1) NOT NULL COMMENT '0=unset, 1=positive, -1=negative, 2=netral',
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_index`
--

CREATE TABLE `_index` (
  `id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `term` varchar(30) NOT NULL,
  `count` int(11) NOT NULL,
  `weight` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_role`
--

CREATE TABLE `_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_role`
--

INSERT INTO `_role` (`role_id`, `role_name`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `_sources`
--

CREATE TABLE `_sources` (
  `source_id` int(11) NOT NULL,
  `source` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `case_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_users`
--

CREATE TABLE `_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `role_id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `picture` varchar(25) NOT NULL,
  `is_online` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_vector`
--

CREATE TABLE `_vector` (
  `doc_id` int(11) NOT NULL,
  `doc_length` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_cases`
--
ALTER TABLE `_cases`
  ADD PRIMARY KEY (`case_id`,`created_by`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `_dataset_youtube`
--
ALTER TABLE `_dataset_youtube`
  ADD PRIMARY KEY (`id`,`source_id`),
  ADD KEY `source_id` (`source_id`);

--
-- Indexes for table `_index`
--
ALTER TABLE `_index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_role`
--
ALTER TABLE `_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `_sources`
--
ALTER TABLE `_sources`
  ADD PRIMARY KEY (`source_id`,`case_id`),
  ADD KEY `case_id` (`case_id`);

--
-- Indexes for table `_users`
--
ALTER TABLE `_users`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `_vector`
--
ALTER TABLE `_vector`
  ADD PRIMARY KEY (`doc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_cases`
--
ALTER TABLE `_cases`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_dataset_youtube`
--
ALTER TABLE `_dataset_youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_index`
--
ALTER TABLE `_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_role`
--
ALTER TABLE `_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `_sources`
--
ALTER TABLE `_sources`
  MODIFY `source_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_users`
--
ALTER TABLE `_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `_cases`
--
ALTER TABLE `_cases`
  ADD CONSTRAINT `_cases_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `_users` (`user_id`);

--
-- Constraints for table `_dataset_youtube`
--
ALTER TABLE `_dataset_youtube`
  ADD CONSTRAINT `_dataset_youtube_ibfk_1` FOREIGN KEY (`source_id`) REFERENCES `_sources` (`source_id`);

--
-- Constraints for table `_sources`
--
ALTER TABLE `_sources`
  ADD CONSTRAINT `_sources_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `_cases` (`case_id`);

--
-- Constraints for table `_users`
--
ALTER TABLE `_users`
  ADD CONSTRAINT `_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
