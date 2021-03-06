-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 07:12 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_answer` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `topic_id`, `user_id`, `question_id`, `user_answer`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 1, 'B', 'B', '2020-03-22 23:48:34', '2020-03-22 23:48:34'),
(2, 1, 7, 1, 'C', 'B', '2020-03-23 03:08:21', '2020-03-23 03:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_name` varchar(191) NOT NULL,
  `id` int(11) NOT NULL,
  `company_website` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `address` text,
  `city` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_img` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_name`, `id`, `company_website`, `username`, `password`, `address`, `city`, `created_at`, `updated_at`, `company_img`) VALUES
('TroisLogic', 1, 'www.troislogic.com', 'trois', '12345', 'ghatkopar malad', 'Kolkata', NULL, '2020-03-25 01:22:23', 'company_1585119143Screenshot.png'),
('Istec', 12, 'isticindia.com', 'manager', '$2y$10$bfSsAB.cCi7uRt8u5tFpN.DJKwur02NFtlGr0Kg4vk9Etb9U5GSTW', 'ghatkopar', 'mumbai', '2020-03-24 22:40:44', '2020-03-25 01:20:36', 'company_1585119036my family.png'),
('ABC', 13, 'abc.co.in', 'abcd', '$2y$10$mG.Ey8zO/FyrkNUFOp..XuqEBBlbArcNIGQmGXPeEG3/shXkFt9PS', 'ghatkopar chincholi', 'mumbai', '2020-03-25 01:21:25', '2020-03-25 01:21:59', 'company_1585119085you.png'),
('aik exam', 14, 'aik.com', 'aik', '$2y$10$1KM2/2DmTripDaO9zwvqGO7s4JVkTTLYooTtDSBjHYLkswwq90S/W', 'delhi', 'nashik', '2020-03-25 01:23:12', '2020-03-25 01:23:36', 'company_1585119216ALL IN YOU.png');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `MAIL_FROM_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MAIL_DRIVER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MAIL_HOST` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MAIL_PORT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MAIL_USERNAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MAIL_FROM_ADDRESS` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MAIL_PASSWORD` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MAIL_ENCRYPTION` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `copyrighttexts`
--

CREATE TABLE `copyrighttexts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `copyrighttexts`
--

INSERT INTO `copyrighttexts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '&copy; 2019 Quick Quiz. All Rights Reserved', NULL, '2019-05-24 12:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generatelinks`
--

CREATE TABLE `generatelinks` (
  `id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `token` text,
  `endtime` int(11) DEFAULT NULL,
  `startTime` datetime DEFAULT NULL,
  `expired` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generatelinks`
--

INSERT INTO `generatelinks` (`id`, `topic_id`, `token`, `endtime`, `startTime`, `expired`, `created_at`, `updated_at`) VALUES
(2, 1, '1', 13, '2020-03-28 23:40:01', 1, '2020-03-27 13:47:14', '2020-04-19 07:29:38'),
(3, 2, 'ebde4cbf', 30, '2020-04-14 12:30:37', 1, '2020-04-14 06:59:36', '2020-04-19 07:29:38'),
(4, 5, '5c09b72a', 30, '2020-04-14 16:57:05', 1, '2020-04-14 11:25:38', '2020-04-19 07:29:38'),
(5, 6, '3ffa25e9', 35, '2020-04-14 17:15:50', 1, '2020-04-14 11:25:47', '2020-04-19 07:29:38'),
(6, 7, '8202ce87', 60, '2020-04-14 20:58:36', 1, '2020-04-14 15:27:44', '2020-04-19 07:29:38'),
(7, 8, '0bcc2216', 30, '2020-04-14 21:01:29', 1, '2020-04-14 15:30:57', '2020-04-19 07:29:38'),
(8, 9, '6f94a838', 60, '2020-04-19 15:45:55', 0, '2020-04-18 19:59:32', '2020-04-19 10:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_23_160102_create_sessions_table', 1),
(4, '2017_11_25_133229_create_settings_table', 1),
(5, '2017_12_03_080242_create_topics_table', 1),
(6, '2017_12_03_080330_create_tests_table', 1),
(7, '2017_12_03_091845_create_questions_table', 1),
(8, '2017_12_03_110511_create_answers_table', 1),
(9, '2017_12_21_085915_add_image_video_column_to_questions', 2),
(12, '2019_02_07_113422_create_f_a_qs_table', 4),
(13, '2019_02_04_122123_create_pages_table', 5),
(14, '2019_02_12_065327_create_copyrighttexts_table', 6),
(17, '2019_02_04_100908_create_social_icons_table', 7),
(18, '2019_02_15_072716_create_config_table', 8),
(19, '2019_02_12_165455_create_topic_user_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `details`, `slug`, `status`) VALUES
(2, 'About us', '<p><strong>About us content goes here</strong></p>', 'about-us', 1),
(3, 'How it works', '<p><strong>Content Goes here</strong></p>', 'how-it-works', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_snippet` text COLLATE utf8mb4_unicode_ci,
  `answer_exp` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `topic_id`, `question`, `a`, `b`, `c`, `d`, `answer`, `code_snippet`, `answer_exp`, `created_at`, `updated_at`, `question_img`, `question_video_link`) VALUES
(1, 5, 'full form of corona', 'co', 'covid-19', 'covid', '19', 'B', 'gvghv', 'see on google', '2020-03-22 23:47:23', '2020-03-22 23:47:23', NULL, NULL),
(2, 5, 'helkkdf', 'a', 'b', 'c', 'd', 'D', NULL, NULL, '2020-04-04 13:28:25', '2020-04-04 13:28:25', NULL, NULL),
(3, 5, 'full form of corona', 'co', 'covid-19', 'covid', '19', 'A', 'gvghv', 'see on google', '2020-03-22 23:47:23', '2020-03-22 23:47:23', NULL, NULL),
(4, 5, 'full form of corona', 'co', 'covid-19', 'covid', '19', 'C', 'gvghv', 'see on google', '2020-03-22 23:47:23', '2020-03-22 23:47:23', NULL, NULL),
(5, 6, 'full form of corona', 'co', 'covid-19', 'covid', '19', 'D', 'gvghv', 'see on google', '2020-03-22 23:47:23', '2020-03-22 23:47:23', NULL, NULL),
(6, 6, 'full form of corona', 'co', 'covid-19', 'covid', '19', 'B', 'gvghv', 'see on google', '2020-03-22 23:47:23', '2020-03-22 23:47:23', NULL, NULL),
(7, 6, 'full form of corona', 'co', 'covid-19', 'covid', '19', 'D', 'gvghv', 'see on google', '2020-03-22 23:47:23', '2020-03-22 23:47:23', NULL, NULL),
(8, 5, 'select one of it', 'A', 'B', 'C', 'D', 'B', NULL, NULL, '2020-04-14 11:23:05', '2020-04-14 11:23:05', NULL, NULL),
(9, 6, 'select one out of 4', 'A', 'B', 'C', 'D', 'A', NULL, NULL, '2020-04-14 11:24:25', '2020-04-14 11:24:25', NULL, NULL),
(10, 7, 'Select options from below list.', 'pm', 'am', 'ant', 'post', 'D', NULL, NULL, '2020-04-14 15:27:07', '2020-04-14 15:27:07', NULL, NULL),
(11, 8, 'what is the real number', '1', '1.0', 'e', '0', 'A', NULL, NULL, '2020-04-14 15:30:22', '2020-04-14 15:30:22', NULL, NULL),
(12, 9, 'write a code to display', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-18 18:23:34', '2020-04-18 18:23:34', NULL, NULL),
(13, 9, 'write a code to display integeres', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-18 18:23:34', '2020-04-18 18:23:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `topic_id` int(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `totalQ` int(100) NOT NULL,
  `rightQ` int(100) NOT NULL,
  `wrongQ` int(100) NOT NULL,
  `unattemptedQ` int(100) NOT NULL,
  `percentage` int(100) DEFAULT NULL,
  `passed` tinyint(1) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `topic_id`, `token`, `totalQ`, `rightQ`, `wrongQ`, `unattemptedQ`, `percentage`, `passed`, `filename`, `created_at`, `updated_at`) VALUES
(19, 37, 5, '5c09b72a', 5, 1, 0, 4, 20, 0, NULL, '2020-04-14 11:41:41', '2020-04-14 11:27:55'),
(20, 38, 5, '5c09b72a', 5, 1, 4, 0, 20, 0, NULL, '2020-04-14 11:41:44', '2020-04-14 11:32:45'),
(21, 39, 6, '3ffa25e9', 4, 2, 2, 0, 50, 1, NULL, '2020-04-14 11:46:08', '2020-04-14 11:46:08'),
(22, 40, 7, '8202ce87', 1, 1, 0, 0, 100, 1, NULL, '2020-04-14 15:28:40', '2020-04-14 15:28:40'),
(23, 41, 8, '0bcc2216', 1, 1, 0, 0, 100, 1, NULL, '2020-04-14 15:31:36', '2020-04-14 15:31:36'),
(24, 42, 8, '0bcc2216', 1, 0, 1, 0, 0, 0, NULL, '2020-04-14 15:32:07', '2020-04-14 15:32:07'),
(25, 46, 8, '0bcc2216', 1, 1, 0, 0, 100, 1, NULL, '2020-04-19 06:58:49', '2020-04-19 06:58:49'),
(26, 48, 5, '5c09b72a', 5, 3, 2, 0, 60, 1, NULL, '2020-04-19 09:08:50', '2020-04-19 09:08:50'),
(27, 48, 9, '6f94a838', 2, 0, 0, 2, 0, NULL, NULL, '2020-04-19 19:13:15', '2020-04-19 17:29:37'),
(28, 48, 9, '6f94a838', 2, 0, 0, 2, 0, 0, NULL, '2020-04-19 17:40:07', '2020-04-19 17:40:07'),
(29, 48, 9, '6f94a838', 2, 0, 0, 2, 0, 0, NULL, '2020-04-19 17:43:26', '2020-04-19 17:43:26'),
(30, 48, 9, '6f94a838', 2, 0, 0, 2, 0, 0, NULL, '2020-04-19 17:51:49', '2020-04-19 17:51:49'),
(31, 48, 9, '6f94a838', 2, 0, 0, 2, 0, 0, NULL, '2020-04-19 17:57:52', '2020-04-19 17:57:52'),
(32, 48, 9, '6f94a838', 2, 0, 0, 0, 0, NULL, NULL, '2020-04-19 18:47:06', '2020-04-19 18:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `welcome_txt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Quick Quiz',
  `userquiz` tinyint(1) DEFAULT '0',
  `w_email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_login` tinyint(1) DEFAULT '0',
  `fb_login` tinyint(1) DEFAULT '0',
  `gitlab_login` tinyint(1) DEFAULT '0',
  `right_setting` tinyint(1) DEFAULT NULL,
  `element_setting` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `welcome_txt`, `userquiz`, `w_email`, `currency_code`, `currency_symbol`, `google_login`, `fb_login`, `gitlab_login`, `right_setting`, `element_setting`, `created_at`, `updated_at`) VALUES
(1, 'logo_1512974578qq2.png', 'favicon.ico', 'Quick Quiz', NULL, 'test@gmail.com', 'USD', 'fa fa-dollar', 0, 0, 0, 0, 0, NULL, '2019-05-26 00:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `social_icons`
--

CREATE TABLE `social_icons` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `total_marks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `per_q_mark` int(11) NOT NULL,
  `timer` int(11) DEFAULT NULL,
  `show_ans` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `creator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` int(11) DEFAULT NULL,
  `minpercentage` int(50) DEFAULT NULL,
  `created_by` int(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `description`, `per_q_mark`, `timer`, `show_ans`, `amount`, `creator`, `round`, `minpercentage`, `created_by`, `created_at`, `updated_at`) VALUES
(5, 'Apti', NULL, 5, 6, '0', NULL, 'Admin', 1, 35, 1, '2020-04-14 11:15:04', '2020-04-14 11:15:04'),
(6, 'Aptitude', NULL, 5, 32, '0', NULL, 'Admin', 1, 40, 1, '2020-04-14 11:16:44', '2020-04-14 11:16:44'),
(7, 'company quiz', NULL, 5, 25, '0', NULL, 'Abc', 1, 40, 31, '2020-04-14 15:25:28', '2020-04-14 15:25:28'),
(8, 'quiz  2', NULL, 5, 30, '0', NULL, 'Abc', 1, 35, 31, '2020-04-14 15:29:35', '2020-04-14 15:29:35'),
(9, 'When to use + and Number() with string numbers?', 'ewf', 4, 544, '0', NULL, 'Admin', 2, 44, 1, '2020-04-18 17:29:06', '2020-04-18 17:29:06'),
(10, 'Quiz 2 round 2', 'ewf', 4, 50, '0', NULL, 'Admin', 2, 44, 1, '2020-04-18 17:29:06', '2020-04-18 17:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `topic_user`
--

CREATE TABLE `topic_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `amount` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_website` text COLLATE utf8mb4_unicode_ci,
  `company_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `appearing` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkId` int(255) DEFAULT NULL,
  `company_img` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `company_website`, `company_type`, `email`, `password`, `mobile`, `address`, `city`, `role`, `remember_token`, `created_at`, `updated_at`, `dob`, `appearing`, `experience`, `college`, `gender`, `linkId`, `company_img`) VALUES
(1, 'Admin', NULL, NULL, 'admin@jobdcodetech', '$2y$10$4Y7TLx24XucQirs4RIH2UO0ormaEj1VoP9D3nhsoOialwV.frXrvO', NULL, NULL, NULL, 'A', 'luZEQjLDnBnt6NLzaz4bhpMJNPR78a7Af7ZZucOSNod0ILBIw36Kp8vOp1Iv', '2017-12-10 17:16:00', '2019-02-12 15:07:00', NULL, NULL, NULL, NULL, NULL, 0, NULL),
(24, 'Testing', 'abc.com', 'fulltime', 'test123@gmail.com', '$2y$10$plhC.ZamnxRck/kldo20wuZu.hGGAo7mfVCWX8Un4SkXhxj9Wrh12', '8547896872', 'sfsdfsdfsd', 'Surat', 'C', NULL, '2020-03-30 18:16:53', '2020-03-30 18:16:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Abc', 'wwee', 'fulltime', 'gaurav@codalyze.com', '$2y$10$XiPF.l55EFDbTT5vNYkQH.6JLaWA654vbdqQphIkahJAaEO2GCjy6', '084520624', '04 , jai mata di chwal , agasan road\r\nmhatre gate nagar', 'Diva', 'C', 'h5YYiKCjGTyRtSS7Crj7m2QIiqTTM3y9V5IJRAJ3cls5rM6d1mefs7mANlJm', '2020-04-04 12:46:45', '2020-04-12 13:31:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Deepak yadav', NULL, NULL, 'deepak@codalyze.com', NULL, '8452062425', '04 , jai mata di chwal , agasan road, mhatre gate nagar', NULL, 'U', NULL, '2020-04-14 11:27:03', '2020-04-14 11:27:03', '2020-04-09', '0', '0', 'asdas', 'male', 4, NULL),
(38, 'Deepak yadav', NULL, NULL, 'deepak@codalyze.comm', NULL, '1452062425', '04 , jai mata di chwal , agasan road, mhatre gate nagar', NULL, 'U', NULL, '2020-04-14 11:32:04', '2020-04-14 11:32:04', '2020-04-07', '0', '0', 'asdas', 'male', 4, NULL),
(39, 'Deepak yadav', NULL, NULL, 'gaudrav@codalyze.com', NULL, '0845206242', '04 , jai mata di chwal , agasan road, mhatre gate nagar', NULL, 'U', NULL, '2020-04-14 11:45:48', '2020-04-14 11:45:48', '2020-04-08', '0', '0', 'asdas', 'male', 5, NULL),
(40, 'Deepak yadav', NULL, NULL, 'c1@gmail.com', NULL, '0845206243', '04 , jai mata di chwal , agasan road, mhatre gate nagar', NULL, 'U', NULL, '2020-04-14 15:28:34', '2020-04-14 15:28:34', '2020-04-15', '0', '0', 'asdas', 'male', 6, NULL),
(41, 'Deepak yadav', NULL, NULL, 'gaurav12@codalyze.com', NULL, '0845206244', '04 , jai mata di chwal , agasan road, mhatre gate nagar', NULL, 'U', NULL, '2020-04-14 15:31:27', '2020-04-14 15:31:27', '2020-04-22', '0', '0', 'asdas', 'male', 7, NULL),
(42, 'Deepak yadav', NULL, NULL, 'garav@codalyze.com', NULL, '0845206245', '04 , jai mata di chwal , agasan road, mhatre gate nagar', NULL, 'U', NULL, '2020-04-14 15:32:01', '2020-04-14 15:32:01', '2020-04-09', '0', '0', 'asdas', 'male', 7, NULL),
(43, 'Deepak yadav', NULL, NULL, 'gaurav12@codalyze.com', NULL, '0845206244', '04 , jai mata di chwal , agasan road, mhatre gate nagar', NULL, 'U', NULL, '2020-04-18 20:44:53', '2020-04-18 20:44:53', '2020-04-22', '0', '0', 'asdas', 'male', 8, NULL),
(46, 'Deepak yadav', NULL, NULL, 'ga4urav@codalyze.com', NULL, '0845206213', '04 , jai mata di chwal , agasan road, mhatre gate nagar', NULL, 'U', NULL, '2020-04-19 05:54:28', '2020-04-19 05:54:28', '2020-04-16', '0', '0', 'asdas', 'male', 7, NULL),
(47, 'Deepak yadav', NULL, NULL, 'admi12n@gmail.com', NULL, '1234567890', '04 , jai mata di chwal , agasan road, mhatre gate nagar', NULL, 'U', NULL, '2020-04-19 09:01:05', '2020-04-19 09:01:05', '2020-04-16', '0', '0', 'asdas', 'male', 4, NULL),
(48, 'Deepak yadav', NULL, NULL, 'gaura123v@codalyze.com', NULL, '1234567891', '04 , jai mata di chwal , agasan road, mhatre gate nagar', NULL, 'U', NULL, '2020-04-19 09:02:47', '2020-04-19 09:02:47', '2020-04-16', '0', '0', 'asdas', 'male', 4, NULL),
(49, 'Deepak yadav', NULL, NULL, 'gaura123v@codalyze.com', NULL, '1234567891', '04 , jai mata di chwal , agasan road, mhatre gate nagar', NULL, 'U', NULL, '2020-04-19 10:15:30', '2020-04-19 10:15:30', '2020-04-16', '0', '0', 'asdas', 'male', 8, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyrighttexts`
--
ALTER TABLE `copyrighttexts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faq_title_unique` (`title`);

--
-- Indexes for table `generatelinks`
--
ALTER TABLE `generatelinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icons`
--
ALTER TABLE `social_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic_user`
--
ALTER TABLE `topic_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_user_user_id_foreign` (`user_id`),
  ADD KEY `topic_user_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `copyrighttexts`
--
ALTER TABLE `copyrighttexts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generatelinks`
--
ALTER TABLE `generatelinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `topic_user`
--
ALTER TABLE `topic_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
