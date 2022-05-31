-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2020 at 08:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(10, 14, 8, 'Seminar Update', '1583338092_image_2.png', '&lt;p&gt;A seminar tomorrow at sharp 10 am.&lt;/p&gt;', 1, '2020-03-04 21:47:39'),
(11, 14, 9, 'Class Update', '1583338100_image_3.png', '&lt;p&gt;Class at 10 am.&lt;/p&gt;', 1, '2020-03-04 21:50:36'),
(12, 14, 7, 'Tour to Cox.', '1583338109_image_4.png', '&lt;p&gt;Tour planned on April 20, 2020.&lt;/p&gt;', 1, '2020-03-04 21:51:36'),
(13, 14, 6, 'Intra University Contest ', '1583338118_image_5.png', '&lt;p&gt;Contest on April 12, 2020 10.30 am.&lt;/p&gt;', 1, '2020-03-04 21:52:58'),
(14, 14, 5, 'CT Update', '1583338126_image_7.png', '&lt;p&gt;3 CTs on next week. Be prepared!&lt;/p&gt;', 1, '2020-03-04 21:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(5, 'Exam', '<p>text</p>'),
(6, 'Contest', '<p>text</p>'),
(7, 'Tour', '<p>test</p>'),
(8, 'Seminar', '<p>text</p>'),
(9, 'Class', '<p>textdsdgdg</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(14, 1, 'Magnum', 'jafarsjahan@gmail.com', '$2y$10$QBUtIaymebl4jfMsSWyAHupiuVQcu4UMI5XKcmSzTPcoT9nURHuZi', '2020-03-04 15:28:48'),
(15, 1, '10sadique', 'abc@gmail.com', '$2y$10$ao7AvIbKIlh6Oln9Q3huIeG9KZH0sTO23mPjCZgj.p.9E2jOYIskW', '2020-03-04 18:25:02'),
(16, 0, 'Bijoy', 'nathbijoy87@gmail.com', '$2y$10$b2Mg.HG5wvijaZb2/pQ.huu0nr7o6RJn6.AU7yZynlgd2cANtPRn2', '2020-03-04 19:07:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
