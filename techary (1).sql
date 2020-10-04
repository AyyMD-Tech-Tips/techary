-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time:  4 окт 2020 в 22:41
-- Версия на сървъра: 8.0.19
-- PHP Version: 7.2.23RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techary`
--

-- --------------------------------------------------------

--
-- Структура на таблица `accounts`
--

CREATE TABLE `accounts` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint DEFAULT NULL,
  `birth_date` date NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'https://via.placeholder.com/500x500.pngC/O'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Схема на данните от таблица `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `password`, `status`, `birth_date`, `profile_picture`) VALUES
(4, 'Marogo', 'marogo@mail.bg', '55f378ee349b57d61ce643126fb59146', 1, '1997-08-14', 'https://via.placeholder.com/500x500.pngC/O'),
(5, 'Marogo1408', 'marogo142005@gmail.com', '58e5ebea57758c4a95532bdbb1b609ab', 1, '1995-08-14', 'https://via.placeholder.com/500x500.pngC/O'),
(6, 'kokolia13', 'kokolia13@dssdfsdfs.sdf', 'c44a471bd78cc6c2fea32b9fe028d30a', 1, '2005-08-04', 'https://via.placeholder.com/500x500.pngC/O');

-- --------------------------------------------------------

--
-- Структура на таблица `downvoted`
--

CREATE TABLE `downvoted` (
  `id` int NOT NULL,
  `userid` int NOT NULL,
  `postid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `posts`
--

CREATE TABLE `posts` (
  `cid` int NOT NULL,
  `uid` varchar(255) NOT NULL,
  `title` varchar(120) NOT NULL,
  `post` text NOT NULL,
  `date` datetime NOT NULL,
  `up` int DEFAULT NULL,
  `down` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `upvoted`
--

CREATE TABLE `upvoted` (
  `id` int NOT NULL,
  `userid` int NOT NULL,
  `postid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downvoted`
--
ALTER TABLE `downvoted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `upvoted`
--
ALTER TABLE `upvoted`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `downvoted`
--
ALTER TABLE `downvoted`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `upvoted`
--
ALTER TABLE `upvoted`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
