-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 23 2016 г., 19:13
-- Версия сервера: 5.5.50
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mod_feedback`
--

CREATE TABLE IF NOT EXISTS `mod_feedback` (
  `id` int(11) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `descr` text NOT NULL,
  `dt` datetime NOT NULL,
  `ip` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mod_feedback`
--

INSERT INTO `mod_feedback` (`id`, `fio`, `email`, `phone`, `descr`, `dt`, `ip`) VALUES
(1, 'Дмитрий', 'ddimonn8080mailru', '380(68)957-18-24', 'Первое сообщение', '2016-11-23 18:08:14', 2130706433),
(2, 'Dima', 'ddimonn8080mailru', '380(68)957-18-24', 'First message', '2016-11-23 18:08:44', 2130706433);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `mod_feedback`
--
ALTER TABLE `mod_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `mod_feedback`
--
ALTER TABLE `mod_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
