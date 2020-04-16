-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2020 at 10:50 PM
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
  `body2` text DEFAULT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category` varchar(100) NOT NULL,
  `main_image` tinytext DEFAULT NULL,
  `second_image` tinytext DEFAULT NULL,
  `third_image` tinytext DEFAULT NULL,
  `layout` tinyint(4) NOT NULL,
  `published` varchar(100) NOT NULL DEFAULT 'published',
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`blog_id`, `user_id`, `title`, `body`, `body2`, `date_posted`, `category`, `main_image`, `second_image`, `third_image`, `layout`, `published`, `slug`) VALUES
(46, 17, 'how to train a dragon 2.0', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.&#13;&#10;&#13;&#10;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '', '2020-04-16 15:25:06', 'RENOVATE', NULL, NULL, NULL, 2, 'published', NULL),
(110, 17, 'latest blog ', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentenc', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2020-04-16 15:24:59', 'RENOVATE', 'views/images/evenmorefireworks.jpg', 'views/images/fireworks.jpeg', 'views/images/morefireworks.jpeg', 1, 'published', NULL),
(173, 17, 'blog title new', 'Bookends are one of the easiest accessories to use to dress up any space. Especially bookshelves! Any item that has some weight and heft to it can be used as a bookend:&#13;&#10;&#13;&#10;rocks, like geodes and marble&#13;&#10;filled piggy banks&#13;&#10;figurines and statues, especially if they are made of metal&#13;&#10;wood blocks&#13;&#10;Bookends are one of the easiest accessories to use to dress up any space. Especially bookshelves! Any item that has some weight and heft to it can be used as a bookend:&#13;&#10;&#13;&#10;rocks, like geodes and marble&#13;&#10;filled piggy banks&#13;&#10;figurines and statues, especially if they are made of metal&#13;&#10;wood blocks&#13;&#10;Bookends are one of the easiest accessories to use to dress up any space. Especially bookshelves! Any item that has some weight and heft to it can be used as a bookend:', 'Bookends are one of the easiest accessories to use to dress up any space. Especially bookshelves! Any item that has some weight and heft to it can be used as a bookend:&#13;&#10;&#13;&#10;rocks, like geodes and marble&#13;&#10;filled piggy banks&#13;&#10;figurines and statues, especially if they are made of metal&#13;&#10;wood blocks&#13;&#10;Bookends are one of the easiest accessories to use to dress up any space. Especially bookshelves! Any item that has some weight and heft to it can be used as a bookend:&#13;&#10;&#13;&#10;rocks, like geodes and marble&#13;&#10;filled piggy banks&#13;&#10;figurines and statues, especially if they are made of metal&#13;&#10;wood blocks', '2020-04-16 15:24:52', 'RENOVATE', 'views/images/ETHNC T-Shirt Design.png', 'views/images/evenmorefireworks.jpg', 'views/images/fireworks.jpeg', 2, 'published', NULL),
(267, 17, 'as', 'asss', 'asss', '2020-04-16 15:24:44', 'Choose a category', 'views/images/blog1img1.jpg', 'views/images/blog1img2.jpg', 'views/images/blog1img3.jpg', 2, 'published\r\n', NULL),
(268, 17, 'hello new layout old', 'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &#34;de Finibus Bonorum et Malorum&#34; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &#34;Lorem ipsum dolor sit amet..&#34;, comes from a line in section 1.10.32.&#13;&#10;&#13;&#10;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &#34;de Finibus Bonorum et Malorum&#34; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&#13;&#10;&#13;&#10;Where can I get some?&#13;&#10;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&#13;&#10;&#13;&#10;ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &#34;de Finibus Bonorum et Malorum&#34; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &#34;Lorem ipsum dolor sit amet..&#34;, comes from a line in section 1.10.32.&#13;&#10;&#13;&#10;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &#34;de Finibus Bonorum et Malorum&#34; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&#13;&#10;&#13;&#10;Where can I get some?&#13;&#10;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be &#13;&#10;&#13;&#10;', '', '2020-04-16 16:12:49', 'DECORATE', 'views/images/blog1img1.jpg', 'views/images/blog1img2.jpg', 'views/images/blog1img3.jpg', 2, 'draft', NULL),
(275, 17, 'hunny 2.0 5', 'zxzxz', 'zxzx', '2020-04-16 15:24:29', 'RENOVATE', 'views/images/blog1img1.jpg', 'views/images/blog1img2.jpg', 'views/images/blog1img3.jpg', 2, 'published', NULL),
(276, 17, 'dont show ', 'dont show', 'efsdfsdf', '2020-04-16 15:24:21', 'DECORATE', 'views/images/blog1img1.jpg', 'views/images/blog1img2.jpg', 'views/images/blog1img3.jpg', 2, 'published', NULL),
(277, 17, 'test 1', 'test1', 'test1', '2020-04-16 15:24:14', 'RENOVATE', 'views/images/blog1img1.jpg', 'views/images/blog1img2.jpg', 'views/images/blog1img3.jpg', 1, 'published', NULL),
(278, 17, 'Spacing issues?', 'Hello this is a sentence.&#13;&#10;Hello this is another sentence.&#13;&#10;&#13;&#10;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &#34;de Finibus Bonorum et Malorum&#34; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &#34;Lorem ipsum dolor sit amet..&#34;, comes from a line in section 1.10.32.&#13;&#10;&#13;&#10;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &#34;de Finibus Bonorum et Malorum&#34; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &#34;Lorem ipsum dolor sit amet..&#34;, comes from a line in section 1.10.32.', '', '2020-04-16 20:42:48', 'RENOVATE', 'views/images/blog1img1.jpg', 'views/images/blog1img2.jpg', 'views/images/blog1img3.jpg', 2, 'published', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `blog_id` int(11) NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`blog_id`, `tag`) VALUES
(267, '#buildit'),
(277, '#bedroom'),
(277, '#recycle'),
(277, '#upcycle'),
(277, '#wood');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `parent_comment_id`, `blog_id`, `user_id`, `comment_date`) VALUES
(130, 'yes', 0, 173, 17, '2020-04-14 18:19:45'),
(131, 'ola', 0, 173, 17, '2020-04-14 18:19:54'),
(134, 'loool', 0, 173, 17, '2020-04-14 18:29:43'),
(135, 'loool', 0, 173, 17, '2020-04-14 18:29:51'),
(136, 'okay', 0, 173, 17, '2020-04-14 18:30:01'),
(137, 'hii', 134, 173, 17, '2020-04-14 18:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `fav_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`fav_id`, `blog_id`, `user_id`) VALUES
(8, 110, 17),
(9, 46, 17),
(10, 46, 17),
(11, 46, 17),
(12, 46, 17),
(13, 46, 17),
(14, 46, 17),
(15, 46, 17),
(16, 46, 17),
(17, 46, 17),
(18, 46, 17),
(19, 46, 17),
(20, 46, 17),
(21, 46, 17),
(22, 46, 17),
(23, 46, 17),
(24, 46, 17),
(25, 46, 17),
(26, 46, 17),
(27, 46, 17),
(28, 46, 17),
(29, 46, 17),
(30, 46, 17),
(31, 46, 17),
(32, 46, 17),
(33, 46, 17),
(34, 46, 17),
(35, 46, 17),
(36, 46, 17),
(37, 46, 17),
(38, 46, 17),
(39, 46, 17),
(40, 46, 17),
(41, 46, 17),
(42, 46, 17),
(88, 173, 17),
(89, 173, 17),
(90, 173, 17),
(91, 173, 17),
(92, 46, 17),
(93, 173, 17),
(94, 173, 17),
(95, 173, 17),
(96, 173, 17),
(97, 110, 17),
(100, 173, 17),
(101, 268, 17),
(102, 110, 17);

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
(11, 'tese', '$2y$10$mZtCfWGcWIWCVOPl3cSJWubg2zDvXW0pP7qlKDBPSAKmJKc5Xfmsy', 'tese', 'tese', 'tese.og@hotmail.com', '2020-04-18', 'Member', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 01:31:13'),
(12, 'tese', '$2y$10$DTT8YPNfsNEcGvuh24.Ezua6KwL.N0eMTbUyvlHRMNN0P1sIfkpSC', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2015-06-04', 'Member', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 11:50:35'),
(13, 'hello', '$2y$10$jFdK8fOuv/l/dcs6tOjnV.lKZNRtdJgWJPLLyxQhxzvkczfTX00ge', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2019-07-11', 'Member', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 11:59:10'),
(14, 'teseog', '$2y$10$rBjfCwevk34TQe3iSXyoa.qS12Zll/RsOqmYMltLRYE2.nSHQiUvm', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2014-02-05', 'Member', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 19:28:57'),
(15, 'test', '$2y$10$OCnfF0dF76CbK3Fn1D9/e.3MB.JOmQPCpA1ARiPDQq8mlDh2ZmMZu', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2003-06-04', 'Member', 'Who is your favourite Ryan', '$2y$10$t2G1SsH529YL.peoTuqjs.6wIrcshim7.kNuykq8YxbsKJBbtsIW2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-11 14:20:49'),
(16, 'test', '$2y$10$00YszUVxfj.xAZ8OJSHDR./LyDMYTqPnUj9W4/I6g2Dm0uVqMZwSq', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2008-02-07', 'Member', 'Who is your favourite Ryan', '$2y$10$xKIMDm6yFMp7ljwuaILtU.fOoLPhK1eQ7hiooKKIjnpam22reIIHi', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-11 14:21:15'),
(17, 'sweetee', '$2y$10$PJUsRzFUJ.cEBgupNkZJBO/bp7SdEe.p0qEG5CrBNmawZWPrWCbii', 'Tese', 'Ogbeifun', 'tese.og@hotmail.com', '1997-09-04', 'Blogger', 'Who is your favourite Ryan', '$2y$10$qZorYewVFNa6uzj5zlAUBOgxfiRbWh4ctKcyX91kwUz5k9nT78z92', NULL, 'views/images/5dde91cb79d7576693279df7.jpeg', 'My name is sweetie and I like sweets', 'twitter.com', 'instagram.com', 'facebook.com', '2020-04-11 16:38:24');

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_ibfk_1` (`blog_id`),
  ADD KEY `comments_ibfk_2` (`user_id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `favourites_ibfk_2` (`user_id`);

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
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  ADD CONSTRAINT `blog_tags_ibfk_1` FOREIGN KEY (`tag`) REFERENCES `tags` (`tag`),
  ADD CONSTRAINT `blog_tags_ibfk_2` FOREIGN KEY (`blog_id`) REFERENCES `blog_posts` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog_posts` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog_posts` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
