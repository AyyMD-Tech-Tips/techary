-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 05:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `birth_date` date NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `profile_picture` varchar(255) NOT NULL DEFAULT 'profile_picture.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `password`, `status`, `birth_date`, `create_date`, `profile_picture`) VALUES
(4, 'Marogo', 'marogo@mail.bg', '55f378ee349b57d61ce643126fb59146', 1, '1997-08-14', '2020-10-04 14:47:20', 'profile_picture.png'),
(5, 'Marogo1408', 'marogo142005@gmail.com', '58e5ebea57758c4a95532bdbb1b609ab', 1, '1995-08-14', '2020-10-04 14:47:20', 'profile_picture.png');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `uid` varchar(128) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL,
  `upvote` int(11) NOT NULL,
  `downvote` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `uid`, `date`, `message`, `upvote`, `downvote`) VALUES
(25, 'Hello', '2020-10-04 12:44:38', 'dfgdg', 0, 0),
(26, 'dhgfsdvghfsdvtyuf', '2020-10-04 14:19:14', 'vghysdffvgsdvfgjsdf', 0, 0),
(27, 'dhgfsdvghfsdvtyuf', '2020-10-04 14:19:14', 'vghysdffvgsdvfgjsdf', 0, 0),
(28, 'dhgfsdvghfsdvtyuf', '2020-10-04 14:19:14', 'vghysdffvgsdvfgjsdf', 0, 0),
(29, 'dhgfsdvghfsdvtyuf', '2020-10-04 14:19:14', 'vghysdffvgsdvfgjsdf', 0, 0),
(30, 'Hello', '2020-10-04 15:48:01', 'dsfsdfsfsdf', 0, 0),
(31, 'Hello', '2020-10-04 15:48:01', 'dsfsdfsfsdf', 0, 0),
(32, 'fgdxcjhgkvfc', '2020-10-04 16:29:48', 'tfyuigujgyulvjhg.', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `msg` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `cid` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `title` varchar(120) NOT NULL,
  `post` text NOT NULL,
  `date` datetime NOT NULL,
  `up` int(11) NOT NULL,
  `down` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
