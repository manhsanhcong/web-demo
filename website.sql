-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 12:57 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Chưa được phân loại', '2019-05-24 02:43:58', '2019-05-24 02:43:58'),
(2, 'Tin khuyến mại', '2019-05-24 02:43:58', '2019-05-24 02:43:58'),
(3, 'Tin tức tổng hợp', '2019-05-24 02:43:58', '2019-05-24 02:43:58'),
(4, 'Tư vấn kiến thức', '2019-05-24 02:43:58', '2019-05-24 02:43:58');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_03_26_043556_create_categories_table', 1),
(8, '2019_03_26_043715_create_posts_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `category_id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Tháng năm rộn ràng, ngập tràn khuyến mại.Tặng thêm đến 50% thời gian sử dụng dịch vụ.', 'Từ ngày 25/05/2019 đến hết ngày 31/05/2019, SunCloud triển khai chương trình khuyến mại, \n                          tặng thêm đến 50% thời gian sử dụng cho tất cả khách hàng khi đăng kí các dịch vụ Máy chủ ảo \n                          (Cloud Server), Thuê chỗ đặt (Colocation):\n                          Chi tiết chương trình như sau:\n                          1. Dịch vụ Máy chủ ảo (Cloud Server)\n                          Cloud Server: Tặng 4 tháng sử dụng dịch vụ khi thanh toán trả trước 12 tháng. \n                          Tiết kiệm chi phí 25%. Nhập mã IDC1204.\n                          2. Dịch vụ Thuê chỗ đặt Server (Colocation)\n                          Tặng 6 tháng sử dụng dịch vụ khi thanh toán trả trước 12 tháng.\n                          Chỉ 7 ngày duy nhất từ ngày 25/05/2019 đến hết ngày 31/05/2019, hãy nắm bắt chương trình khuyến mại, \n                          đăng kí và nhận ngay ưu đãi từ SunCloud!', 1, 2, '', '2019-05-24 02:43:58', '2019-05-24 02:43:58'),
(2, 'Vietnam AutoExpo 2019, môi trường lý tưởng cho các doanh nghiệp ô tô, xe máy', '<p>First of all, you should call your view with all the data prepared. Including queries in the view is a bit of a code smell.</p>\r\n\r\n<p>So, you need to code defensively. If there is a chance that what you are accessing might be null then you need to give php an alternate thing to display.</p>\r\n\r\n<p>for instance {{ $lastProduct-&gt;productName }}</p>\r\n\r\n<p>If there is a chance that $lastProduct might be empty (because there is no lastProduct in that category) then you get an error trying to get property (productName) of non-object ($lastProduct)</p>\r\n\r\n<p>You can code around this by using either of the following.</p>', NULL, 2, 'avatars/2eqUml9OxWaRvqhfLCZlzJZ9NxySkvjXzYy8T8ne.jpeg', '2019-05-24 03:28:43', '2019-05-24 03:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_day` date DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `birth_day`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lê Thị Mỹ Hoàn', 'manhsanhcong.08@gmail.com', NULL, '$2y$10$Y8qI3k5pqGo6H7qe3ysWBu0raUlX8hRCHXq/SVUDeyW9SWGj2czVy', '0869791862', 'Hải Phòng', '2000-09-08', NULL, '2019-05-24 02:43:58', '2019-05-24 02:43:58'),
(2, 'Anh', 'lethimyhoan08@gmail.com', NULL, '$2y$10$hFa4HBFCDJau1N.TTdCHOuSCrGn54hpmicYQkkV.gTnWWDliJiwTe', NULL, NULL, NULL, NULL, '2019-05-24 02:45:51', '2019-05-24 02:45:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
