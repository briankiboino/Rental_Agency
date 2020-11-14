-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 05:22 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `post_id`, `user_id`, `comment`, `comment_author`, `date`) VALUES
(3, 1, 5, 'The appetite is good!', 'elias_baya', '2020-01-28 15:40:43'),
(5, 5, 5, 'Hello buddy , how is everything?', 'elias_baya', '2020-01-28 21:09:59'),
(6, 5, 5, 'Hello Elias!!!', 'faith_safari_842086', '2020-01-28 21:20:42'),
(7, 7, 6, '\r\nLet me hear your views', 'faith_safari_842086', '2020-01-28 21:26:49'),
(8, 7, 6, 'They are good sistee', 'elias_baya', '2020-01-28 21:28:06'),
(9, 7, 6, 'Yuh it is good sweetheart', 'brian_kiboino_378861', '2020-01-28 23:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `upload_image` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_content`, `upload_image`, `post_date`) VALUES
(1, 5, 'No', 'davin.jpeg.52', '2020-01-27 07:18:31'),
(2, 5, 'Happy codding', 'WhatsApp Image 2020-01-27 at 09.30.14(1).jpeg.91', '2020-01-27 13:53:09'),
(3, 5, '   Hello someone to explain for me about gravity in  geography	 	    		 	', '', '2020-01-27 14:03:48'),
(5, 5, 'The developer', 'WhatsApp Image 2020-01-27 at 09.28.37(1).jpeg.79', '2020-01-27 14:55:42'),
(7, 6, 'Hello find attached course outline', 'Machine Learning1.jpg.26', '2020-01-28 21:22:49'),
(8, 6, 'and this one also', 'Machine Learning2.jpg.53', '2020-01-28 21:24:34'),
(10, 7, 'Have a look at my crops!', 'crop.jpg.1', '2020-01-28 23:21:14'),
(11, 7, 'A good phone to start a new year with', 'Annotation 2019-10-24 110148.png.41', '2020-01-28 23:22:16'),
(12, 7, 'We love you elias', 'WhatsApp Image 2020-01-27 at 10.03.16.jpeg.63', '2020-01-28 23:26:33'),
(13, 8, 'My love, my friend', 'WhatsApp Image 2020-01-27 at 09.28.37(3).jpeg.84', '2020-01-28 23:33:49'),
(14, 8, 'Smile Always', 'Davin.jpg.80', '2020-01-28 23:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `school` text NOT NULL,
  `admission` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `county` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `u_cover` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` text NOT NULL,
  `posts` text NOT NULL,
  `birthday` date NOT NULL,
  `recovery_account` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `username`, `school`, `admission`, `password`, `county`, `gender`, `image`, `u_cover`, `reg_date`, `status`, `posts`, `birthday`, `recovery_account`) VALUES
(5, 'Elias', 'Baya', 'elias_baya', 'Kisumu Boys High School', '31931', 'f44f77448688a88c8f4e432778957a1bc9783194', 'Kilifi', 'Male', 'WhatsApp Image 2020-01-27 at 09.28.37(3).jpeg.71', 'default_cover.jpg.38', '2020-01-26 16:44:15', 'verified', 'yes', '1998-12-04', 'I want to put a dig in the universe'),
(6, 'Faith', 'Safari', 'faith_safari_842086', 'Bahari Girls', '456523', '915aebdfaf6e21428b2e12aaf97a91c7c32736e3', 'Garisa', 'Female', 'user_turqoise.jpg', 'default_cover.jpg', '2020-01-27 16:38:19', 'verified', 'yes', '1998-11-03', 'I want to put a dig in the universe'),
(7, 'Brian', 'Kiboino', 'brian_kiboino_378861', 'Nakuru High School', '1234567', '1836b6b348868f23279e9a018690134174f996c7', 'Lamu', 'Male', 'user_red.jpg', 'default_cover.jpg', '2020-01-28 23:18:20', 'verified', 'yes', '2000-11-07', 'I want to put a dig in the universe'),
(8, 'Davin', 'Wangari', 'davin_wangari_385061', 'Alliance Girls', '34567898', '71a2bf0069d520884c01c9a0e8dcd27cee7d0e67', 'Mandera', 'Female', 'Davin.jpg.33', 'default_cover.jpg', '2020-01-28 23:31:24', 'verified', 'yes', '2000-01-04', 'I want to put a dig in the universe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
