-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 27 2021 г., 18:55
-- Версия сервера: 10.3.29-MariaDB
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `music`
--
CREATE DATABASE IF NOT EXISTS `music` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `music`;

-- --------------------------------------------------------

--
-- Структура таблицы `album`
--

DROP TABLE IF EXISTS `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_release` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genres` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `album`
--

INSERT INTO `album` (`album_id`, `team_id`, `name`, `year_release`, `genres`, `country`, `label`) VALUES
(1, 1, 'The Piper at the Gates of Dawn', '1967', 'Психоделический рок', 'Великобритания', 'Columbia'),
(2, 1, 'A Saucerful of Secrets', '1968', 'Психоделический рок', 'Великобритания', 'Columbia'),
(3, 2, 'Please Please Me', '1963', 'Рок', 'Великобритания', 'Parlophone');

-- --------------------------------------------------------

--
-- Структура таблицы `composition`
--

DROP TABLE IF EXISTS `composition`;
CREATE TABLE IF NOT EXISTS `composition` (
  `composition_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`composition_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `composition`
--

INSERT INTO `composition` (`composition_id`, `album_id`, `team_id`, `name`, `length`) VALUES
(1, 1, 1, 'Astronomy Dominé', '4:12'),
(2, 1, 1, 'Lucifer Sam', '3:07'),
(3, 1, 1, 'Matilda Mother', '3:08'),
(4, 2, 1, 'Let There Be More Light\"', '5:38'),
(5, 2, 1, 'Remember a Day', '4:33\r\n'),
(6, 2, 1, 'Set the Controls for the Heart of the Sun\"', '5:28'),
(7, 3, 2, 'I Saw Her Standing There', '2:18'),
(8, 3, 2, 'Misery', '1:50'),
(9, 3, 2, 'Anna (Go to Him)', '2:57');

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `years` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`team_id`, `name`, `genre`, `years`, `country`, `type`) VALUES
(1, 'Updating Name', 'Updating Genre', '2020', 'Updating Contry', 'Updating team'),
(2, 'The Beatles', 'Рок, поп, мерсибит, рок-н-ролл, психоделический рок, хард-рок', '1960—1970', 'Великобритания', 'team');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `username`, `login`, `password`, `token`) VALUES
(1, 'admin', 'admin', '$1$1mco9Bb4$1V6PwrBWjLiUy6sJ6IVg.0', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
