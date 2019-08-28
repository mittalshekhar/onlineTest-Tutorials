-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2019 at 12:47 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.2.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cidemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `php_content`
--

CREATE TABLE `php_content` (
  `id` int(11) NOT NULL,
  `header` varchar(255) DEFAULT NULL,
  `heading` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `php_content`
--

INSERT INTO `php_content` (`id`, `header`, `heading`, `topic`, `content`, `note`, `url`, `created_at`, `updated_at`, `image`) VALUES
(1, 'php', 'php-intro', 'intro', 'PHP is an HTML-embedded scripting language. Much of its syntax is borrowed from C, Java and Perl with a couple of unique PHP-specific features thrown in. The goal of the language is to allow web developers to write dynamically generated pages quickly.\n\n', 'PHP is an HTML-embedded scripting language. Much of its syntax is borrowed from C, Java and Perl with a couple of unique PHP-specific features thrown in. The goal of the language is to allow web developers to write dynamically generated pages quickly.\r\n\r\n', 'https://www.php.net/manual/en/faq.general.php', '2019-08-12 12:57:08', '2019-07-17 00:00:00', ''),
(2, 'java', 'about-php', 'About', 'PHP stands for PHP: Hypertext Preprocessor. This confuses many people because the first word of the acronym is the acronym. This type of acronym is called a recursive acronym. For more information, the curious can visit', 'PHP stands for PHP: Hypertext Preprocessor. This confuses many people because the first word of the acronym ', 'https://www.php.net/manual/en/faq.general.php', '2019-08-12 12:03:58', '2019-07-09 00:00:00', ''),
(3, '', 'php-basic', 'about java', 'PHP stands for PHP: Hypertext Preprocessor. This confuses many people because the first word of the acronym is the acronym. This type of acronym is called a recursive acronym. For more information, the curious can visit', 'PHP stands for PHP: Hypertext Preprocessor. This confuses many people because the first word of the acronym ', 'https://www.php.net/manual/en/faq.general.php', '2019-08-12 13:16:35', '2019-07-25 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_option`
--

CREATE TABLE `quiz_option` (
  `id` int(11) NOT NULL,
  `quiz_group` varchar(255) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `options1` varchar(255) DEFAULT NULL,
  `options2` varchar(255) DEFAULT NULL,
  `options3` varchar(255) DEFAULT NULL,
  `options4` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_option`
--

INSERT INTO `quiz_option` (`id`, `quiz_group`, `question`, `answer`, `options1`, `options2`, `options3`, `options4`, `status`, `created_at`, `deleted_at`) VALUES
(1, '1', '1', 'Hypertext Preprocessor', 'Home power', 'Hello page ', 'Hypertext Preprocessor', 'Hypertext Preoption', '1', '2019-08-23 06:34:00', NULL),
(2, '1', '2', 'getenv()', 'search()', 'environment()', 'env()', 'getenv()', '1', '2019-08-21 05:31:07', NULL),
(3, '1', '3', '$_SERVER', '$GLOBALS', '$_SERVER', '$_COOKIE', '$_SESSION', '1', '2019-08-21 05:32:53', NULL),
(6, '1', '4', 'php', 'java', 'php', 'html', 'javascript', '1', '2019-08-26 13:19:33', NULL),
(7, '1', '5', 'Rasmus Lerdorf', 'Rasmus Lerdorf', 'stave jobs', 'micro soft', 'kim tom ', '1', '2019-08-26 13:27:46', NULL),
(8, '1', '5', 'adad', 'adad', 'fsfsfsfsf', 'adadad', 'adadadad', '1', '2019-08-27 12:13:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE `quiz_question` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'What does PHP stand for?', 'Hypertext Preprocessor', '1', '2019-08-26 13:25:00', '2019-08-26 18:55:00'),
(2, 'Which of the following function is used to get environment variables in PHP?', 'getenv()', '1', '2019-08-21 05:28:11', NULL),
(3, 'Which of the following is an array containing information such as headers, paths, and script locations?', '$_SERVER', '1', '2019-08-21 05:28:53', NULL),
(4, 'What does hava stand php code?', 'php ', '1', '2019-08-26 13:17:39', NULL),
(5, 'Who is known as the father of PHP?', 'Rasmus Lerdorf', '1', '2019-08-26 13:25:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `id` int(11) NOT NULL,
  `quiz_group` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`id`, `quiz_group`, `status`, `created_at`, `updated_at`) VALUES
(1, 'php', '1', '2019-08-21 12:43:20', '2019-08-21 12:43:20'),
(2, 'java', '1', '2019-08-21 12:27:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contant` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone`, `email`, `password`, `contant`, `created_at`) VALUES
(17, '1234567895', 'pradeep@yopmail.com', '2`2`2`2', '', '2019-07-02 05:46:59'),
(18, '01234567895', 'qatstzz@yopmail.com', '123456', '', '2019-07-02 07:33:59'),
(19, '1234567895', 'qatstzz@yopmail.com', '3131313', '', '2019-07-02 07:53:06'),
(20, '1234567895', 'qa002.sparx@gmail.com', 'saasasa', '', '2019-07-02 09:55:38'),
(21, '444444444', 'priya@inveera.com', '21234444', '', '2019-07-12 12:41:09'),
(22, '1234567895', 'pksds@yopmail.com', '1234566777', '', '2019-07-12 12:41:38'),
(23, '1234567895', 'qatstzz@yopmail.com', '1234565', '', '2019-08-12 13:06:44'),
(24, '1234567895', 'phh@yopmail.com', '123456', '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px">php introduction&nbsp;</div>\n\n<p>PHP is an HTML-embedded scripting language. Much of its syntax is borrowed from C, Java and Perl with a couple of unique PHP-specific features thrown in. The goal of the language is to allow web developers to write dynamically generated pages quickly.</p>\n\n<p><a href="cidemo/assets/dist/img/user2-160x160.jpg" target="_top"><img alt="into php " src="http://localhost/cidemo/assets/dist/img/user2-160x160.jpg" style="height:150px; width:150px" /></a></p>\n\n<p>coding&nbsp;</p>\n\n<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><code>class GFG { // Program begins with a call to main() // Print &quot;Hello, World&quot; to the terminal window public static void main(String args[]) { System.out.println(&quot;Hello, World&quot;); } } </code></div>\n', '2019-08-12 13:14:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php_content`
--
ALTER TABLE `php_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_option`
--
ALTER TABLE `quiz_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `php_content`
--
ALTER TABLE `php_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `quiz_option`
--
ALTER TABLE `quiz_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `quiz_question`
--
ALTER TABLE `quiz_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
