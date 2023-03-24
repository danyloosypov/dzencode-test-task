-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 24 2023 г., 19:57
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `parent_id` int UNSIGNED DEFAULT NULL,
  `comment_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `parent_id`, `comment_body`, `file`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'ewfouyhnewimjkv', NULL, '2023-03-21 16:30:09', NULL),
(2, 3, 1, 'adsad', NULL, '2023-03-21 14:35:47', '2023-03-21 14:35:47'),
(3, 3, 1, 'фырфоывтыф', NULL, '2023-03-21 14:42:24', '2023-03-21 14:42:24'),
(4, 3, 1, 'фы', '1679417051_стена.jpg', '2023-03-21 14:44:11', '2023-03-21 14:44:11'),
(5, 3, NULL, 'asdad', NULL, '2023-03-21 14:53:40', '2023-03-21 14:53:40'),
(6, 3, 5, 'hello', NULL, '2023-03-21 14:58:47', '2023-03-21 14:58:47'),
(7, 3, NULL, 'efwfw', '1679418060_стена.jpg', '2023-03-21 15:01:00', '2023-03-21 15:01:00'),
(8, 3, NULL, 'asdad', NULL, '2023-03-21 16:20:21', '2023-03-21 16:20:21'),
(9, 3, NULL, 'hello asdsad', NULL, '2023-03-21 16:20:37', '2023-03-21 16:20:37'),
(10, 3, NULL, 'qwertyuqweqweqewqe', NULL, '2023-03-21 16:23:01', '2023-03-21 16:23:01'),
(11, 2, NULL, 'hello my name is gustavo', NULL, '2023-03-22 07:08:38', '2023-03-22 07:08:38'),
(12, 2, NULL, 'but you can call me gus', NULL, '2023-03-22 07:08:51', '2023-03-22 07:08:51'),
(13, 2, NULL, 'gjknm', NULL, '2023-03-22 10:37:54', '2023-03-22 10:37:54'),
(14, 2, NULL, 'sadad', NULL, '2023-03-22 10:38:38', '2023-03-22 10:38:38'),
(15, 2, NULL, 'asdasd', NULL, '2023-03-22 10:38:44', '2023-03-22 10:38:44'),
(16, 2, NULL, 'qweqwe', NULL, '2023-03-22 10:38:56', '2023-03-22 10:38:56'),
(17, 2, NULL, 'Мой новый пдф', '1679488975_Осипова.pdf', '2023-03-22 10:42:55', '2023-03-22 10:42:55'),
(18, 2, NULL, 'ну и где он', NULL, '2023-03-22 10:43:19', '2023-03-22 10:43:19'),
(19, 2, NULL, 'qwidbq qwd q', NULL, '2023-03-24 10:54:18', '2023-03-24 10:54:18'),
(20, 2, NULL, 'qwdqwd q', NULL, '2023-03-24 10:54:21', '2023-03-24 10:54:21'),
(21, 2, NULL, 'qwdqd', NULL, '2023-03-24 10:54:24', '2023-03-24 10:54:24'),
(22, 2, NULL, '1', NULL, '2023-03-24 10:54:28', '2023-03-24 10:54:28'),
(23, 2, NULL, '2', NULL, '2023-03-24 10:54:30', '2023-03-24 10:54:30'),
(24, 2, NULL, '3', NULL, '2023-03-24 10:54:35', '2023-03-24 10:54:35'),
(25, 2, NULL, '4', NULL, '2023-03-24 10:54:38', '2023-03-24 10:54:38'),
(26, 2, NULL, '5', NULL, '2023-03-24 10:54:40', '2023-03-24 10:54:40'),
(27, 2, NULL, '6', NULL, '2023-03-24 10:54:42', '2023-03-24 10:54:42'),
(28, 2, NULL, '7', NULL, '2023-03-24 10:54:45', '2023-03-24 10:54:45'),
(29, 2, NULL, '8', NULL, '2023-03-24 10:54:47', '2023-03-24 10:54:47'),
(30, 2, NULL, '9', NULL, '2023-03-24 10:54:52', '2023-03-24 10:54:52'),
(31, 2, NULL, '10', NULL, '2023-03-24 10:54:55', '2023-03-24 10:54:55'),
(32, 2, NULL, '11', NULL, '2023-03-24 10:55:06', '2023-03-24 10:55:06'),
(33, 2, NULL, '12', NULL, '2023-03-24 11:03:03', '2023-03-24 11:03:03'),
(34, 2, NULL, '13', NULL, '2023-03-24 11:31:28', '2023-03-24 11:31:28'),
(35, 2, NULL, 'efghj', NULL, '2023-03-24 11:32:03', '2023-03-24 11:32:03'),
(36, 2, 34, 'qweqeqe', NULL, '2023-03-24 11:55:00', '2023-03-24 11:55:00'),
(37, 2, 36, 'wadqdwqd', NULL, '2023-03-24 11:55:09', '2023-03-24 11:55:09'),
(38, 1, 35, 'qweqweq', NULL, '2023-03-24 12:40:50', '2023-03-24 12:40:50'),
(39, 1, 38, 'my new comment', NULL, '2023-03-24 12:45:23', '2023-03-24 12:45:23'),
(40, 1, 35, 'qwdqd', NULL, '2023-03-24 12:56:50', '2023-03-24 12:56:50'),
(41, 1, 38, '12121', '1679671072_binoculars.png', '2023-03-24 13:17:52', '2023-03-24 13:17:52'),
(42, 1, 38, '13113213132', NULL, '2023-03-24 13:54:47', '2023-03-24 13:54:47'),
(43, 1, NULL, '1231313', NULL, '2023-03-24 14:00:45', '2023-03-24 14:00:45'),
(44, 1, 43, '12312313', NULL, '2023-03-24 14:00:49', '2023-03-24 14:00:49'),
(45, 1, NULL, '1qq', NULL, '2023-03-24 14:13:04', '2023-03-24 14:13:04'),
(46, 1, NULL, 'resized image', '1679674719_binoculars.png', '2023-03-24 14:18:39', '2023-03-24 14:18:39'),
(47, 1, NULL, '21131', NULL, '2023-03-24 14:31:22', '2023-03-24 14:31:22'),
(48, 1, NULL, 'image file', '1679676295_photo_2023-03-03_21-51-27.jpg', '2023-03-24 14:44:55', '2023-03-24 14:44:55'),
(49, 1, NULL, 'txt file', NULL, '2023-03-24 14:45:00', '2023-03-24 14:45:00'),
(50, 1, NULL, 'txt file', '1679676438_Новый текстовый документ.txt', '2023-03-24 14:47:18', '2023-03-24 14:47:18');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
