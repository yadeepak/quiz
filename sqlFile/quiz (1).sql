-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 08:47 PM
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
(2, 1, '1', 13, '2020-03-28 23:40:01', 0, '2020-03-27 13:47:14', '2020-03-28 18:10:01');

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
  `a` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 1, 'full form of corona', 'co', 'covid-19', 'covid', '19', 'B', 'gvghv', 'see on google', '2020-03-22 23:47:23', '2020-03-22 23:47:23', NULL, NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `description`, `per_q_mark`, `timer`, `show_ans`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'New Topic', 'Demo', 5, 10, '0', NULL, '2020-03-27 13:51:30', '2020-03-27 13:51:30');

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

INSERT INTO `users` (`id`, `name`, `company_website`, `email`, `password`, `mobile`, `address`, `city`, `role`, `remember_token`, `created_at`, `updated_at`, `dob`, `appearing`, `experience`, `college`, `gender`, `linkId`, `company_img`) VALUES
(1, 'Admin', NULL, 'admin@info.com', '$2y$10$4Y7TLx24XucQirs4RIH2UO0ormaEj1VoP9D3nhsoOialwV.frXrvO', NULL, NULL, NULL, 'A', 'NTAUMdy7jeDTbA2x6PYEfl1dCK3RRuxp2DxEC7owpHoS0BAwbyN8oCJaX25M', '2017-12-10 17:16:00', '2019-02-12 15:07:00', NULL, NULL, NULL, NULL, NULL, 0, NULL),
(3, 'Jhon Doe', NULL, 'jhon@info.com', '$2y$10$4Y7TLx24XucQirs4RIH2UO0ormaEj1VoP9D3nhsoOialwV.frXrvO', '123456789', 'ujjain', 'Bhilwara', 'S', 'ExJlSfbEdtoGb96sCOoJ2i49f0BoCHRK397hd2KyYdfup0Pr19D9vNoJw6ve', '2017-12-10 17:19:47', '2019-02-18 13:56:46', NULL, NULL, NULL, NULL, NULL, 0, NULL),
(4, 'prashant mishra', NULL, 'prashantmishra98@outlook.com', '$2y$10$FcB.H3d2WUioyggeiN857ObluIImftMHRbcIXYMVhS/jLYiSmSCJu', '7666292622', 'ghatkopar west', 'mumbai', 'S', 'mAJGdG0ak0TGzOD02qwsMHfIrskn8p4YRWiZSncmlKG7k40XxXOXcFGB5e5w', '2020-03-22 23:32:34', '2020-03-22 23:35:53', NULL, NULL, NULL, NULL, NULL, 0, NULL),
(7, 'suraj mishra', NULL, 'p.mishra8652081136@gmail.com', '$2y$10$EqG18UdUt9AeXJp/bXGQGe3fl2JfOU1R8PH3KHZLO882eg8TEgcwW', NULL, NULL, NULL, 'S', 'LSzMfxyhXmLho4xQCtWnBDllAvxiSPfNIVw6uezzx5tMuDelwmGwutpqVNJa', '2020-03-23 03:07:53', '2020-03-23 03:07:53', NULL, NULL, NULL, NULL, NULL, 0, NULL),
(11, 'Rajesh Kevat', NULL, 'rakesh@gmail.com', NULL, '8286297405', 'Room no.45, Vishalgadh soc. Ramnagar B near Ram Mandir', NULL, 'U', NULL, '2020-03-29 14:41:12', '2020-03-29 14:41:12', '1998-10-10', '2', '2', 'novus logic', 'rbtnMale', 0, NULL),
(18, 'Deepak yadav', NULL, 'deep@gmail.com', NULL, '0845206242', '04 , jai mata di chwal , agasan road, mhatre gate nagar', NULL, 'U', NULL, '2020-03-29 16:34:52', '2020-03-29 16:34:52', '1999-03-12', '0', '0', 'asdas', 'rbtnMale', 2, NULL),
(23, 'Mitesh Patel', NULL, 'miteshp1505@gmail.com', NULL, '8521478878', '1234,abc', NULL, 'U', NULL, '2020-03-30 16:56:05', '2020-03-30 16:56:05', '2000-02-22', '1', '2', 'abcd', 'on', 2, NULL),
(24, 'Testing', 'abc.com', 'test123@gmail.com', '$2y$10$plhC.ZamnxRck/kldo20wuZu.hGGAo7mfVCWX8Un4SkXhxj9Wrh12', '8547896872', 'sfsdfsdfsd', 'Surat', 'C', NULL, '2020-03-30 18:16:53', '2020-03-30 18:16:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topic_user`
--
ALTER TABLE `topic_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;