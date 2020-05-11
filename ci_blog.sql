-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 12:10 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `user_id`) VALUES
(3, 'Hey there I am Ali Abbas...', 'lovely place it is', 2),
(5, 'letsbegin', '<p>lets have some fun !!</p>\r\n\r\n<hr />\r\n<p><iframe allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\" frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/s5M9MJk97sw\" width=\"560\"></iframe></p>\r\n', 1),
(6, 'article', '<p>hey there world this my very own blog site created for all of you.</p>\r\n', 1),
(12, 'hello world', '<p><strong>Hello people !!!</strong></p>\r\n', 1),
(13, 'Welcome to blue writes !!', '<p><span style=\"color:#16a085\"><span style=\"font-size:48px\"><u><em><strong>yooo !!!</strong></em></u></span></span></p>\r\n', 1),
(14, 'helloworld', '<p>helllo peeps</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1),
(16, 'looking back at memories', '<p>&nbsp;</p>\r\n\r\n<h1>Life is a lie:</h1>\r\n\r\n<hr />\r\n<h1><img alt=\"\" src=\"https://www.quebecmaritime.ca/media/cache/blog_content_header/uploads/medias/tabatiere10.jpg\" style=\"height:214px; width:500px\" /></h1>\r\n\r\n<h2>So, recently I have been dating this girl and she showed me this place, we used to come here together, but I broke up with her today... :(</h2>\r\n', 1),
(17, 'helloworld', '<h1>Hello&nbsp; peeps,</h1>\r\n\r\n<div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\">So this is my first post !!</div>\r\n', 1),
(18, 'article22', '<h1><strong>Y</strong><small><tt>ou</tt></small>&nbsp; <strong>O</strong><small>nly</small>&nbsp; <strong>L</strong><small>ive</small>&nbsp; <strong>O</strong><small>nce</small></h1>\r\n\r\n<p><q><small>I Love being the person I am :) &lt;3</small></q></p>\r\n\r\n<p>So I guess all I wanted to say was, enjoy as much as you can, because this life and these beautiful moments wont be back again !&nbsp; &lt;3</p>\r\n', 1),
(19, 'Test article', 'Whatever blah blah !!', 1),
(20, 'Article one', 'hhhj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pid` int(28) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longblob,
  `image` varchar(255) NOT NULL,
  `filelink` varchar(255) DEFAULT NULL,
  `yt_frame` varchar(255) DEFAULT NULL,
  `sid` int(28) NOT NULL,
  `changelog` varchar(255) DEFAULT NULL,
  `uid` int(28) NOT NULL,
  `tagline` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `title`, `description`, `image`, `filelink`, `yt_frame`, `sid`, `changelog`, `uid`, `tagline`) VALUES
(1, 'Introduction', 0x3c703e57687920796f752073686f756c642062652061206461746120736369656e74697374203f3c2f703e0d0a, 'cover.png', 'https://github.com/aliabbas101/pythonwork/tree/pythonpractice/Data%20Science', '<p><iframe allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\" frameborder=\"0\" height=\"410\" src=\"https://www.youtube.com/embed/mfmH5UGPB_s\" width=\"100%\"></iframe></p>\r\n', 1, 'nochange', 1, ''),
(2, 'Data Structure basics', 0x3c703e3c7374726f6e673e54686973207475746f7269616c2e3c2f7374726f6e673e3c2f703e0d0a, 'http://localhost/ciprac/uploads/GC_TOurs.jpg', 'https://stackoverflow.com/questions/17139501/using-post-to-get-select-option-value-from-html', '', 1, NULL, 1, 'Learn hierarchical data structures like BST  '),
(4, 'File Systems vs DBMS', 0x3c703e446966666572656e6365206265747765656e2066696c652073797374656d7320616e64206461746162617365733a3c2f703e0d0a0d0a3c68333e412046696c65204d616e6167656d656e742073797374656d20697320612044424d53207468617420616c6c6f777320616363657320746f266e6273703b3c656d3e73696e676c653c2f656d3e266e6273703b66696c6573206f72207461626c657320617420612074696d652e20496e20612046696c652053797374656d2c2064617461206973206469726563746c792073746f72656420696e266e6273703b3c656d3e7365743c2f656d3e266e6273703b6f662066696c65732e20497420636f6e74, 'http://localhost/ciprac/uploads/8a83a883d3ce962cd63be015abc9a1dd.png', 'https://stackoverflow.com/questions/17139501/using-post-to-get-select-option-value-from-html', '<p><iframe allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\" frameborder=\"0\" height=\"410\" scrolling=\"no\" src=\"https://www.youtube.com/embed/s5M9MJk97sw\" width=\"100%\"></iframe></p>\r\n', 2, NULL, 1, ''),
(5, 'State Space Search', '', 'http://localhost/ciprac/uploads/process.png', 'https://stackoverflow.com/questions/17139501/using-post-to-get-select-option-value-from-html', '<p><iframe allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\" frameborder=\"0\" height=\"410\" src=\"https://www.youtube.com/embed/gUIiE7gI0Co\" width=\"100%\"></iframe></p>\r\n', 3, NULL, 1, 'Learn fundamentals of state space and apply searching to it.'),
(6, 'Dyads and Mutuality', 0x3c703e3c7374726f6e673e4c6561726e206d6574686f647320666f7220666f726d696e6720736f6369616c206e6574776f726b73207468726f7567682061646a6163656e6379206d61747269783c2f7374726f6e673e3c2f703e0d0a, 'http://localhost/ciprac/uploads/e127abac6fb17e72aff506c7cf60003d.jpg', '', '<p><iframe allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\" frameborder=\"0\" height=\"410\" src=\"https://www.youtube.com/embed/mfmH5UGPB_s\" width=\"100%\"></iframe></p>\r\n', 4, NULL, 1, 'Learn the basics of eccentricity '),
(7, 'Decision Trees (ID3)', 0x3c7020646174612d73656c65637461626c652d7061726167726170683d22223e41266e6273703b3c7374726f6e673e6465636973696f6e20747265653c2f7374726f6e673e266e6273703b69732061206465636973696f6e20737570706f727420746f6f6c20746861742075736573206120747265652d6c696b65206772617068206f72206d6f64656c206f66206465636973696f6e7320616e6420746865697220706f737369626c6520636f6e73657175656e6365732c20696e636c7564696e67206368616e6365206576656e74206f7574636f6d65732c207265736f7572636520636f7374732c20616e64207574696c6974792e204974206973206f6e652077617920746f20646973706c617920616e20616c676f726974686d2074686174206f6e6c7920636f6e7461696e7320636f6e646974696f6e616c20636f6e74726f6c2073746174656d656e74732e3c2f703e0d0a0d0a3c7020646174612d73656c65637461626c652d7061726167726170683d22223e41206465636973696f6e2074726565206973206120666c6f7763686172742d6c696b652073747275637475726520696e207768696368206561636820696e7465726e616c206e6f646520726570726573656e7473206120266c6471756f3b7465737426726471756f3b206f6e20616e206174747269627574652028652e672e2077686574686572206120636f696e20666c697020636f6d6573207570206865616473206f72207461696c73292c2065616368206272616e636820726570726573656e747320746865206f7574636f6d65206f662074686520746573742c20616e642065616368206c656166206e6f646520726570726573656e7473206120636c617373206c6162656c20286465636973696f6e2074616b656e20616674657220636f6d707574696e6720616c6c2061747472696275746573292e205468652070617468732066726f6d20726f6f7420746f206c65616620726570726573656e7420636c617373696669636174696f6e2072756c65732e3c2f703e0d0a0d0a3c7020646174612d73656c65637461626c652d7061726167726170683d22223e54726565206261736564206c6561726e696e6720616c676f726974686d732061726520636f6e7369646572656420746f206265206f6e65206f6620746865206265737420616e64206d6f73746c7920757365642073757065727669736564206c6561726e696e67206d6574686f64732e2054726565206261736564206d6574686f647320656d706f7765722070726564696374697665206d6f64656c73207769746820686967682061636375726163792c2073746162696c69747920616e642065617365206f6620696e746572707265746174696f6e2e20556e6c696b65206c696e656172206d6f64656c732c2074686579206d6170206e6f6e2d6c696e6561722072656c6174696f6e73686970732071756974652077656c6c2e20546865792061726520616461707461626c6520617420736f6c76696e6720616e79206b696e64206f662070726f626c656d2061742068616e642028636c617373696669636174696f6e206f722072656772657373696f6e292e204465636973696f6e205472656520616c676f726974686d732061726520726566657272656420746f206173266e6273703b3c7374726f6e673e434152543c2f7374726f6e673e3c7374726f6e673e28436c617373696669636174696f6e20616e642052656772657373696f6e205472656573293c2f7374726f6e673e2e3c2f703e0d0a, 'http://192.168.0.103/ciprac/uploads/decsion-trees.jpg', 'https://stackoverflow.com/questions/17139501/using-post-to-get-select-option-value-from-html', '', 3, NULL, 1, 'Learn to classify any data using Decision trees');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `sid` int(28) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `changelog` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`sid`, `cover`, `title`, `description`, `changelog`) VALUES
(1, 'saregamepaa', 'Data Science', 'Learn fundamentals of Data Science', 'nothing yet'),
(2, 'cover.png', 'Database management systems', 'Learn how modern RDBMS works', 'No update'),
(3, 'http://localhost/ciprac/uploads/covers/4e636e97a7e56abeb50175ae149567fc.JPG', 'Artificial Intelligence', 'In this course we will be giving a brief history of concepts and techniques involved in artificially intelligent systems today', NULL),
(4, 'http://localhost/ciprac/uploads/covers/8d1b66538ea105b16cc40c6c09674cd5.jpg', 'Network Analysis using Python', 'Learn the use of Networkx to create social networks ', NULL),
(5, 'http://localhost/ciprac/uploads/covers/17acbcafad632faafacb5fe9440747ee.jpg', 'Data Structure', 'Learn the Algorithms and Data Structures', NULL),
(6, 'http://localhost/ciprac/uploads/covers/00e226468a119b6d529b8fbd18426cfd.jpg', 'Data Visualization', 'Learn fundamentals of Data Viz and create more with matplotlib in python', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(28) NOT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `pass`, `fname`, `lname`) VALUES
(1, 'aliabbasblogs', 'wenn1i3A5p7@96ovation', 'john', 'flick');

-- --------------------------------------------------------

--
-- Table structure for table `w_users`
--

CREATE TABLE `w_users` (
  `uid` int(28) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `fk` (`sid`),
  ADD KEY `fk1` (`uid`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `w_users`
--
ALTER TABLE `w_users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pid` int(28) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `sid` int(28) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `w_users`
--
ALTER TABLE `w_users`
  MODIFY `uid` int(28) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk` FOREIGN KEY (`sid`) REFERENCES `sections` (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
