-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 08:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnme`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `icon_type` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `icon`, `icon_type`) VALUES
(1, 'Rekursiv funksiyalar', 'default.jpg', 1),
(2, 'Algoritmlar', 'default.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `short` text DEFAULT NULL,
  `long` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_tag`
--

CREATE TABLE `news_tag` (
  `id` int(11) NOT NULL,
  `news_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'C++'),
(2, 'PHP'),
(3, 'C'),
(4, 'C#'),
(5, 'Python'),
(6, 'Java'),
(7, 'Javascript');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `active` int(11) DEFAULT 1,
  `created` datetime DEFAULT current_timestamp(),
  `updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `active`, `created`, `updated`) VALUES
(1, 'Shomurod', 'shomurod', '$2y$13$k9TVk5jfGfwF5E6VmhbaJe3um1qGPYEZju/07HWMivd9A4HBoCfEi', 1, '2023-06-11 00:33:26', '2023-06-11 00:33:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_news_cat_id` (`cat_id`),
  ADD KEY `FK_news_user_id` (`user_id`);

--
-- Indexes for table `news_tag`
--
ALTER TABLE `news_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_news_tag_news_id` (`news_id`),
  ADD KEY `FK_news_tag_tag_id` (`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_tag`
--
ALTER TABLE `news_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `FK_news_cat_id` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_news_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `news_tag`
--
ALTER TABLE `news_tag`
  ADD CONSTRAINT `FK_news_tag_news_id` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_news_tag_tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
