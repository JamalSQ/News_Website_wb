-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 05:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newswebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(77) NOT NULL,
  `aname` varchar(30) NOT NULL,
  `aemail` text NOT NULL,
  `apass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `aname`, `aemail`, `apass`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(5, 'sport'),
(6, 'tech'),
(7, 'wheather'),
(8, 'earth'),
(9, 'wollyball'),
(10, 'Natural Desasters');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(77) NOT NULL,
  `title` text NOT NULL,
  `cat_id` varchar(12) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `cat_id`, `content`, `image`, `date`, `author`) VALUES
(1, 'sport', '6', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.', '1716782974.jpeg', '2024-05-11 00:00:00', '1'),
(2, 'react js', '5', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.', '1716782974.jpeg', '2024-05-11 00:00:00', '4'),
(4, 'nothing', '4', 'In literary theory, a text is any object that can be \"read\", whether this object is a work of literature, a street sign, an arrangement of buildings on a city block, or styles of clothing. It is a set of signs that is available to be reconstructed by a reader if sufficient interpretants are available. Wikipedia', '1716782859.jpeg', '2024-05-11 12:24:18', 'admin'),
(5, 'from user', '', 'In literary theory, a text is any object that can be \"read\", whether this object is a work of literature, a street sign, an arrangement of buildings on a city blo', '1716782859.jpeg', '2024-05-11 12:28:33', '1'),
(6, 'jamal posts', '', 'In literary theory, a text is any object that can be \"read\", whether this object is a work of literature, a street sign, an arrangement of buildings on a city block, or styles of clothing. It is a set of signs that is available to be reconstructed by a reader if sufficient interpretants are jamal dfasdfs', '1716791733.jpeg', '2024-05-11 14:16:18', '1'),
(7, 'news', '8', 'nothing to say', '1716782859.jpeg', '2024-05-27 06:07:39', '4'),
(8, 'earthquick', '', 'In literary theory, a text is any object that can be \"read\", whether this object is a work of literature, a street sign, an arrangement of buildings on a city block, or styles of cre available', '1716791690.jpeg', '2024-05-27 06:09:34', '1'),
(9, 'dfgdf', '2', 'hjhjjh', '1716791690.jpeg', '2024-05-27 08:58:40', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `registred_users`
--

CREATE TABLE `registred_users` (
  `user_id` int(11) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `u_fname` varchar(20) NOT NULL,
  `u_cnic` text NOT NULL,
  `u_email` text NOT NULL,
  `u_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `registred_users`
--

INSERT INTO `registred_users` (`user_id`, `u_name`, `u_fname`, `u_cnic`, `u_email`, `u_pass`) VALUES
(1, 'jamal  siddiqu', 'zahoor Alam', '35302-4567894-1', 'jamal@gmail.com', '12345'),
(4, 'Abdullah ', 'muneer', '12312-4324243-3', 'abdullah@gmail.com', '12345'),
(7, 'admin', 'adminfather', '35303-2019709-3', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `main_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `main_cat_id`) VALUES
(2, 'football', 5),
(3, 'html', 6),
(4, 'css', 6),
(5, 'php', 6),
(6, 'react js', 6),
(7, 'players', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registred_users`
--
ALTER TABLE `registred_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_key` (`main_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(77) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(77) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registred_users`
--
ALTER TABLE `registred_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `foreign_key` FOREIGN KEY (`main_cat_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
