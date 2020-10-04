-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 09:45 PM
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
(5, 'Marogo1408', 'marogo142005@gmail.com', '58e5ebea57758c4a95532bdbb1b609ab', 1, '1995-08-14', '2020-10-04 14:47:20', 'profile_picture.png'),
(6, 'kokolia13', 'kokolia13@dssdfsdfs.sdf', 'c44a471bd78cc6c2fea32b9fe028d30a', 1, '2005-08-04', '2020-10-04 15:04:30', 'profile_picture.png');

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
-- Table structure for table `downvoted`
--

CREATE TABLE `downvoted` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`cid`, `uid`, `title`, `post`, `date`, `up`, `down`) VALUES
(1, 'Marogo', 'gege', 'gegege', '2020-10-04 19:13:00', 3, 0),
(2, '', 'huiefgbew', 'grege', '2020-10-04 19:15:41', 1, 0),
(3, '', 'dfggfdgfdgfd', 'fgdvfgdfgddfg', '2020-10-04 19:21:53', 0, 0),
(4, '', 'fef', 'fefef', '2020-10-04 19:29:05', 0, 0),
(5, '', 'fefe', 'fefe', '2020-10-04 19:29:09', 0, 0),
(6, '', 'fefe', 'fefe', '2020-10-04 19:29:09', 0, 0),
(7, '', 'fe', 'fe', '2020-10-04 20:50:47', 0, 0),
(8, '', 'bdbedbedb', 'bebeeebe', '2020-10-04 20:54:02', 0, 0),
(9, '', 'papa gay', 'fefefe', '2020-10-04 20:54:26', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `upvoted`
--

CREATE TABLE `upvoted` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upvoted`
--

INSERT INTO `upvoted` (`id`, `userid`, `postid`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 2);

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
-- Indexes for table `downvoted`
--
ALTER TABLE `downvoted`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `downvoted`
--
ALTER TABLE `downvoted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `upvoted`
--
ALTER TABLE `upvoted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
