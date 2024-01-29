-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 29 2024 г., 18:05
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `school`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int UNSIGNED NOT NULL,
  `file` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_news` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `file`, `name`, `news`, `date_news`) VALUES
(10, 'uploads/78cb7fa4cd7b891a867134cf4885e1f5.jpg', 'Поздравляем с открытием нашего личного сайта!!!', 'Ну тут крч тип создали свой сайт , да?  Ученики могут смотреть оценки и все такое крч добро пожаловать!!!', '05.Oct.18 07.31'),
(11, 'uploads/a64bd53139f71961c5c31a9af03d775e.jpg', 'Поздравляем с открытием нашего личного сайта!!!', 'Ну тут крч тип создали свой сайт , да?  Ученики могут смотреть оценки и все такое крч добро пожаловать!!!', '05.Oct.18 08.19'),
(12, 'uploads/7ab581c337ee3c0d15ab76aa483ecc87.jpg', 'УЖААААС', 'Школа сгорела', '08.Oct.18 14.46'),
(13, 'uploads/477b02d99dd6c00c5ba852bb9a9e1f6c.jpg', 'Доставка сайта на заказ', 'Сайт на заказ ыыыыыыыыыыыыыыыыыы', '11.Dec.18 18.20');

-- --------------------------------------------------------

--
-- Структура таблицы `ucheniki`
--

CREATE TABLE `ucheniki` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `algebra1` int DEFAULT NULL,
  `algebra2` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `algebra3` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `algebra4` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ucheniki`
--

INSERT INTO `ucheniki` (`id`, `name`, `fname`, `class`, `algebra1`, `algebra2`, `algebra3`, `algebra4`, `login`, `password`) VALUES
(1, 'Директор', 'Ходжаев', '9\"А\"', 0, NULL, NULL, NULL, 'login', '244110'),
(9, NULL, NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL),
(22, 'Джамшут', 'Джамшидович', '11\"А\"', NULL, NULL, NULL, NULL, 'uchenik11aJ', '27202817203275'),
(25, '1', '1', '1', 5, '2', '3', '5', '1', '$2y$10$1d9MhGcMhV.05b5kNZxPUOXDcNtBSyrG1gsD/dWyUZnJc3xsylLbW'),
(26, 'Директор', 'Директорович', 'Учителя', NULL, NULL, NULL, NULL, 'dayan', '$2y$10$S1qKV8djMuwHhPdRw0u0kujIHmSiXjmnWhqVs7SFq1ARZCc6TEvGC'),
(27, 'Директор', 'Директорович', 'Учителя', NULL, NULL, NULL, NULL, 'dayan', '$2y$10$Sv5N5HsGGLCEk/YCTo4bzud/OCF5xMymV0GJYAopVmt8VBrft9Pdm'),
(28, 'Директор', 'директорович', 'Учителя', NULL, NULL, NULL, NULL, 'admin', '$2y$10$Uz430CK4/XN5IJcyNxRSu.jH75775C9qgOJ3JIRqopgMCSVbYSJga'),
(29, 'Директор', 'директорович', 'Учителя', NULL, NULL, NULL, NULL, 'admin', '$2y$10$opve2qn6atkRP0FRe9/L6Ocezy/kkDBwT5Q9fbSXr/vP3Dv3DxrTW');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ucheniki`
--
ALTER TABLE `ucheniki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `ucheniki`
--
ALTER TABLE `ucheniki`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
