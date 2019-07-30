-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 30, 2019 lúc 09:38 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ieg`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_news`
--

CREATE TABLE `category_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_id` bigint(20) UNSIGNED NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `pid` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_news`
--

INSERT INTO `category_news` (`id`, `title`, `image`, `slug_id`, `keywords`, `description`, `pid`, `created_at`, `updated_at`) VALUES
(1, 'Highcharts Demo', NULL, 1, NULL, NULL, 0, '2019-07-30 11:08:05', '2019-07-30 11:08:05'),
(2, 'Dễ đọc nhưng nội dung không hề dễ dãi', NULL, 2, NULL, NULL, 1, '2019-07-30 11:08:17', '2019-07-30 11:08:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_03_044644_entrust_setup_tables', 1),
(8, '2019_07_28_171300_create_slugs_table', 2),
(9, '2019_07_28_171944_create_category_news_table', 2),
(13, '2019_07_28_172508_create_news_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_id` bigint(20) UNSIGNED NOT NULL,
  `cid` bigint(20) UNSIGNED DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `mdescription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `uid` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` tinyint(1) NOT NULL DEFAULT '0',
  `public` tinyint(1) NOT NULL DEFAULT '1',
  `viewcount` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `slug_id`, `cid`, `keywords`, `mdescription`, `uid`, `description`, `content`, `feature`, `public`, `viewcount`, `created_at`, `updated_at`) VALUES
(2, 'Highcharts Demo gfhfgh', '/photos/2/IMG_20190622_150250-01.jpeg', 10, 1, NULL, '', 2, '<p>fgh hfghfg</p>', '<p>fghfgh gfhfg</p>', 0, 1, 0, '2019-07-30 11:31:34', '2019-07-30 11:31:34'),
(3, 'Highcharts Demo asdasd', '/photos/2/IMG_20190622_150250-01.jpeg', 11, 1, NULL, '', 2, '<p>asdasd</p>', '<p>dfsdfsdfsd</p>', 0, 1, 0, '2019-07-30 11:48:20', '2019-07-30 11:48:20'),
(4, 'Thất vọngsdfsdfsdfsdf sdfdsf3123123', '/photos/2/IMG_20190622_150250-01.jpeg', 12, 1, NULL, '', 2, '<p>dfgdf</p>', '<p>dfgdfgdf dfgdfgdfg</p>', 0, 1, 0, '2019-07-30 11:49:03', '2019-07-30 11:49:03'),
(5, 'Dễ đọc nhưng nội dung không hề dễ dãi sdfsdfsdf 345345', '/photos/2/IMG_20190622_150250-01.jpeg', 13, 1, 'asdas', 'asdasd', 2, 'sdas', '<p>asdsa</p>', 0, 1, 0, '2019-07-30 12:34:00', '2019-07-30 12:34:00'),
(6, 'Dễ đọc nhưng nội dung không hề dễ dãi sdfsdfsdfSFSDFSDFSDF', '/photos/2/IMG_20190622_150250-01.jpeg', 14, 1, 'asdas', 'sdasd', 2, 'asdasdas asdsa', '<p>sad asdasdas asdasd</p>', 1, 1, 0, '2019-07-30 12:35:11', '2019-07-30 12:35:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'role-create', 'Create Role', 'Create New Role', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(2, 'role-edit', 'Create Edit', 'Edit Role', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(3, 'role-show', 'Show Role', 'Show Role', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(4, 'role-list', 'Display Role Listing', 'List All Roles', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(5, 'role-update', 'Update Role', 'Update Role Information', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(6, 'role-delete', 'Delete Role', 'Delete Role', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(7, 'user-create', 'Create User', 'Create New User', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(8, 'user-list', 'Display User Listing', 'List All Users', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(9, 'user-update', 'Update User', 'Update User Information', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(10, 'user-delete', 'Delete User', 'Delete User', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(11, 'user-edit', 'User Edit', 'Edit User', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(12, 'user-show', 'Show User', 'Show User', '2019-07-28 10:04:49', '2019-07-28 10:04:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'Admin', 'Full Permission', '2019-07-28 10:04:49', '2019-07-28 10:04:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(2, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slugs`
--

CREATE TABLE `slugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slugs`
--

INSERT INTO `slugs` (`id`, `slug`, `type`, `created_at`, `updated_at`) VALUES
(1, 'highcharts-demo', 'postcate', '2019-07-30 11:08:05', '2019-07-30 11:08:05'),
(2, 'de-doc-nhung-noi-dung-khong-he-de-dai', 'postcate', '2019-07-30 11:08:16', '2019-07-30 11:08:16'),
(4, 'de-doc-nhung-noi-dung-khong-he-de-dai-sdfsdfsdf', 'new', '2019-07-30 11:15:20', '2019-07-30 11:15:20'),
(5, 'de-doc-nhung-noi-dung-khong-he-de-dai-sdfsdfsdf hfghfg', 'new', '2019-07-30 11:18:01', '2019-07-30 11:18:01'),
(6, 'de-doc-nhung-noi-dung-khong-he-de-dai-sdfsdfsdf-hfghfgh', 'new', '2019-07-30 11:20:49', '2019-07-30 11:20:49'),
(7, 'that-vong', 'new', '2019-07-30 11:21:30', '2019-07-30 11:21:30'),
(10, 'highcharts-demo-gfhfgh', 'new', '2019-07-30 11:31:34', '2019-07-30 11:31:34'),
(11, 'highcharts-demo-asdasd', 'new', '2019-07-30 11:48:20', '2019-07-30 11:48:20'),
(12, 'that-vongsdfsdfsdfsdf-sdfdsf3123123', 'new', '2019-07-30 11:49:03', '2019-07-30 11:49:03'),
(13, 'de-doc-nhung-noi-dung-khong-he-de-dai-sdfsdfsdf-345345', 'new', '2019-07-30 12:34:00', '2019-07-30 12:34:00'),
(14, 'de-doc-nhung-noi-dung-khong-he-de-dai-sdfsdfsdfsfsdfsdfsdf', 'new', '2019-07-30 12:35:11', '2019-07-30 12:35:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin User', 'tien2vv@gmail.com', NULL, '$2y$10$8ipDZJuzO5lKALO89e7JkebjEQ9/Hj/uzJ3kLH.NE9L53/VrRN0R.', NULL, '2019-07-28 10:04:49', '2019-07-28 10:04:49');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_news_slug_id_foreign` (`slug_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_slug_id_foreign` (`slug_id`),
  ADD KEY `news_cid_foreign` (`cid`),
  ADD KEY `news_uid_foreign` (`uid`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `slugs`
--
ALTER TABLE `slugs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slugs_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `slugs`
--
ALTER TABLE `slugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category_news`
--
ALTER TABLE `category_news`
  ADD CONSTRAINT `category_news_slug_id_foreign` FOREIGN KEY (`slug_id`) REFERENCES `slugs` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_cid_foreign` FOREIGN KEY (`cid`) REFERENCES `category_news` (`id`),
  ADD CONSTRAINT `news_slug_id_foreign` FOREIGN KEY (`slug_id`) REFERENCES `slugs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `news_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
