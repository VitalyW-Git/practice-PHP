-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 08 2020 г., 21:55
-- Версия сервера: 5.6.41-log
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `furniture`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chairs`
--

CREATE TABLE `chairs` (
  `id` int(4) NOT NULL,
  `name` varchar(15) NOT NULL,
  `price` int(4) NOT NULL,
  `parent_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chairs`
--

INSERT INTO `chairs` (`id`, `name`, `price`, `parent_id`) VALUES
(10, 'prestige', 1, 5),
(11, 'stylish', 1, 5),
(12, 'elegance', 1, 5),
(13, 'premium', 1, 5),
(14, 'comfort', 1, 5),
(15, 'bright', 1, 5),
(16, 'diamond', 3001, 10),
(17, 'hermes', 2522, 10),
(18, 'bogota', 3325, 10),
(19, 'belinda', 292, 10),
(20, 'konna', 562, 11),
(21, 'vivian', 652, 11),
(22, 'lars', 854, 12),
(23, 'mathew', 1958, 12),
(24, 'dodo', 965, 12),
(25, 'geneva', 856, 13),
(26, 'loft', 965, 13),
(27, 'adam', 2336, 13),
(28, 'adah', 1584, 13),
(29, 'adriano', 2511, 13),
(30, 'affair', 39985, 14),
(31, 'albert', 7546, 14),
(32, 'alice', 2831, 15),
(33, 'amelia', 7512, 15),
(34, 'aphrodite', 1593, 15),
(35, 'arfa', 2584, 15),
(36, 'white', 4523, 15),
(37, 'dodo', 5264, 11);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chairs`
--
ALTER TABLE `chairs`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
