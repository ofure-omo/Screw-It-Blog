-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2020 at 04:22 PM
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
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `blog_id` int(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `body` mediumtext NOT NULL,
  `body2` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category` varchar(100) NOT NULL,
  `main_image` tinytext DEFAULT NULL,
  `second_image` tinytext DEFAULT NULL,
  `third_image` tinytext DEFAULT NULL,
  `views` int(10) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`blog_id`, `user_id`, `title`, `body`, `body2`, `date_posted`, `category`, `main_image`, `second_image`, `third_image`, `views`, `slug`) VALUES
(46, 1, 'how to train a dragon', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2020-04-08 20:11:31', 'CREATE', 'views/images/diyimage.jpg', 'views/images/evenmorefireworks.jpg', 'views/images/fireworks.jpeg', NULL, NULL),
(110, 1, 'latest blog ', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentenc', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2020-04-10 01:26:56', 'RENOVATE', 'views/images/evenmorefireworks.jpg', 'views/images/fireworks.jpeg', 'views/images/morefireworks.jpeg', NULL, NULL),
(134, 1, 'how to make a webiste part 2', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t ', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as ', '2020-04-10 01:57:57', 'RENOVATE', 'views/images/ETHNC - Wallpaper 2.jpg', 'views/images/ETHNC - Wallpaper.jpg', 'views/images/ETHNC Main Logo.png', NULL, NULL),
(172, 1, 'lets see if the tags work!!', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, ', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum ', '2020-04-10 02:50:09', 'DECORATE', 'views/images/ETHNC T-Shirt Design.png', 'views/images/evenmorefireworks.jpg', 'views/images/fireworks.jpeg', NULL, NULL),
(173, 1, 'do the tags really really work???', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum ', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2020-04-10 03:58:38', 'DECORATE', 'views/images/ETHNC T-Shirt Design.png', 'views/images/evenmorefireworks.jpg', 'views/images/fireworks.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `blog_id` int(11) NOT NULL,
  `tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`blog_id`, `tag`) VALUES
(172, '#bedroom'),
(172, '#buildit'),
(172, '#crafts'),
(173, '#buildit'),
(173, '#crafts'),
(173, '#garden'),
(173, '#home'),
(173, '#painting'),
(173, '#recycle'),
(173, '#wood');

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
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag`) VALUES
('#bedroom'),
('#buildit'),
('#crafts'),
('#garden'),
('#home'),
('#kitchen'),
('#painting'),
('#recycle'),
('#upcycle'),
('#wood');

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
  `user_type` enum('Member','Blogger','Moderator') NOT NULL DEFAULT 'Member',
  `security_1` varchar(255) DEFAULT 'Who is your favourite Ryan',
  `answer_1` varchar(255) NOT NULL,
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
(11, 'tese', '$2y$10$mZtCfWGcWIWCVOPl3cSJWubg2zDvXW0pP7qlKDBPSAKmJKc5Xfmsy', 'tese', 'tese', 'tese.og@hotmail.com', '2020-04-18', 'Moderator', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 01:31:13'),
(12, 'tese', '$2y$10$DTT8YPNfsNEcGvuh24.Ezua6KwL.N0eMTbUyvlHRMNN0P1sIfkpSC', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2015-06-04', 'Moderator', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 11:50:35'),
(13, 'hello', '$2y$10$jFdK8fOuv/l/dcs6tOjnV.lKZNRtdJgWJPLLyxQhxzvkczfTX00ge', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2019-07-11', 'Member', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 11:59:10'),
(14, 'teseog', '$2y$10$rBjfCwevk34TQe3iSXyoa.qS12Zll/RsOqmYMltLRYE2.nSHQiUvm', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2014-02-05', 'Member', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 19:28:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`blog_id`,`tag`),
  ADD KEY `tag` (`tag`);

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
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`);

--
-- Constraints for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD CONSTRAINT `blog_tags_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog_posts` (`blog_id`),
  ADD CONSTRAINT `blog_tags_ibfk_2` FOREIGN KEY (`tag`) REFERENCES `tags` (`tag`);

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
