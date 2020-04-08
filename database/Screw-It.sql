-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2020 at 05:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Screw-It`
--

-- --------------------------------------------------------

--
-- Table structure for table `Blogs_Tags_Link`
--

CREATE TABLE `Blogs_Tags_Link` (
  `btl_id` int(11) NOT NULL,
  `tag_ID` int(11) NOT NULL,
  `blog_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `blog_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `slug` varchar(100) DEFAULT NULL,
  `body` mediumtext NOT NULL,
  `body2` text NOT NULL,
  `views` int(10) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `main_image` tinytext DEFAULT NULL,
  `second_image` tinytext DEFAULT NULL,
  `third_image` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`blog_id`, `user_id`, `title`, `date_posted`, `slug`, `body`, `body2`, `views`, `category`, `main_image`, `second_image`, `third_image`) VALUES
(1, 9, 'i hope this works hahha', '2020-04-08 15:40:35', NULL, 'ahahhahha', 'pleaseee work hahaha', NULL, 'RENOVATE', 'views/images/diyimage.jpg', 'views/images/ETHNC - Wallpaper 2.jpg', 'views/images/ETHNC - Wallpaper.jpg'),
(2, 9, 'hello hi ', '2020-04-08 15:44:54', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, 'DECORATE', 'views/images/evenmorefireworks.jpg', 'views/images/fireworks.jpeg', 'views/images/morefireworks.jpeg'),
(3, 9, 'sdcdc', '2020-04-08 15:49:15', NULL, 'sdcdcdc', 'sdcdsc', NULL, 'RENOVATE', 'views/images/ETHNC Main Logo.png', 'views/images/ETHNC Submark Logo.png', 'views/images/');

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE `Comments` (
  `comment_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `approved` tinyint(1) DEFAULT 1,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Tags`
--

CREATE TABLE `Tags` (
  `tag_id` int(11) NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_fn` varchar(100) NOT NULL,
  `user_ln` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `user_type` enum('Moderator','Blogger','Member') NOT NULL,
  `security_1` varchar(255) DEFAULT 'Who is your favourite Ryan',
  `answer_1` varchar(50) NOT NULL,
  `signature` varchar(100) DEFAULT NULL,
  `profile_pic` varchar(100) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `twitter_url` varchar(200) DEFAULT NULL,
  `insta_url` varchar(100) DEFAULT NULL,
  `facebook_url` varchar(100) DEFAULT NULL,
  `date_joined` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `username`, `password`, `user_fn`, `user_ln`, `email`, `dob`, `user_type`, `security_1`, `answer_1`, `signature`, `profile_pic`, `bio`, `twitter_url`, `insta_url`, `facebook_url`, `date_joined`) VALUES
(1, 'sweet_tee', '', 'Tese', 'Ogbeifun', 'tese@hotmail.com', '1997-09-04', 'Blogger', 'Who is your favourite Ryan', 'reynolds', 'sweet_tee', NULL, 'Hi, i\'m sweet_tee or Tese, i\'m a digital designer by day and a DIY-er by night!', 'twitter.com', 'instagram.com', 'facebook.com', '2020-03-31 13:59:24'),
(2, NULL, '', 'Amrita', 'Bains', 'amrita@gmail.co.uk', '1990-05-25', 'Moderator', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, 'twitter.com', 'instagram.com', 'facebook.com', '2020-03-31 13:59:24'),
(3, 'saucy_steph', '', 'Stephanie', 'Foster', 'steph@gmail.com', '1989-02-12', 'Member', 'Who is your favourite Ryan', 'gallagher', NULL, NULL, NULL, 'twitter.com', 'instagram.com', 'facebook.com', '2020-03-31 13:59:24'),
(4, 'sdcsd', 'cdscd', 'Omotese', 'Ogbeifun', 'tese.og@hotmail.com', '2009-02-11', 'Moderator', 'Who is your favourite Ryan', 'tese', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-07 12:44:34'),
(6, 'sdfdsddhdf', 'sfsdf', 'ss', 'sdfsf', 'tese.og@hotmail.com', '2016-02-03', 'Moderator', 'Who is your favourite Ryan', 'hello', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-07 12:49:23'),
(7, 'sdfsdfsdddd', 'wwwww', 'sdsdfsdf', 'Ogbeifun', 'tese.og@hotmail.com', '2020-04-01', 'Moderator', 'Who is your favourite Ryan', 'teerer', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-07 12:51:18'),
(8, NULL, 'ddd', 'ddd', 'ddd', 'tese.og@hotmail.com', '2011-02-09', 'Moderator', 'Who is your favourite Ryan', 'dddd', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-07 12:54:24'),
(9, 'wwwww', '$2y$10$kfrUVhXqa5HnUwR4XfjJ2eJBE.fbNg/jbu9/7IG34bUVKiPeRHWI6', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2020-04-05', 'Moderator', 'Who is your favourite Ryan', 'lloool', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-07 13:13:20'),
(10, 'tese', '$2y$10$vdoR18mo7q.T3fqMnyB3guOOKPZ6L4HlBVzM6J2Ea3.1lOAajM2oq', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2020-04-04', 'Moderator', 'Who is your favourite Ryan', 'hello', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-07 14:05:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Blogs_Tags_Link`
--
ALTER TABLE `Blogs_Tags_Link`
  ADD PRIMARY KEY (`btl_id`),
  ADD KEY `tag_ID` (`tag_ID`),
  ADD KEY `blog_ID` (`blog_ID`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`blog_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Tags`
--
ALTER TABLE `Tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Blogs_Tags_Link`
--
ALTER TABLE `Blogs_Tags_Link`
  MODIFY `btl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Tags`
--
ALTER TABLE `Tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Blogs_Tags_Link`
--
ALTER TABLE `Blogs_Tags_Link`
  ADD CONSTRAINT `blogs_tags_link_ibfk_1` FOREIGN KEY (`tag_ID`) REFERENCES `Tags` (`tag_id`),
  ADD CONSTRAINT `blogs_tags_link_ibfk_2` FOREIGN KEY (`blog_ID`) REFERENCES `Blog_Posts` (`blog_id`);

--
-- Constraints for table `Comments`
--
ALTER TABLE `Comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`blog_id`) REFERENCES `Blog_posts` (`blog_id`);

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog_posts` (`blog_id`),
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
