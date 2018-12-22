-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 22 2018 г., 17:36
-- Версия сервера: 5.6.41
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `server`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bathroom`
--

CREATE TABLE `bathroom` (
  `id` int(11) NOT NULL,
  `api_key` int(11) NOT NULL,
  `bathroom_light` int(11) NOT NULL,
  `dimer` int(11) NOT NULL DEFAULT '100',
  `Sum` int(11) NOT NULL DEFAULT '1',
  `bathroom_socket_1` int(11) DEFAULT NULL,
  `bathroom_socket_2` int(11) DEFAULT NULL,
  `bathroom_socket_3` int(11) DEFAULT NULL,
  `bathroom_socket_4` int(11) DEFAULT NULL,
  `bathroom_socket_5` int(11) DEFAULT NULL,
  `bathroom_socket_6` int(11) DEFAULT NULL,
  `ba_temp_sock_1` int(11) NOT NULL,
  `ba_temp_sock_2` int(11) NOT NULL,
  `ba_temp_sock_3` int(11) NOT NULL,
  `ba_temp_sock_4` int(11) NOT NULL,
  `ba_temp_sock_5` int(11) NOT NULL,
  `ba_temp_sock_6` int(11) NOT NULL,
  `name_sock_1` text NOT NULL,
  `name_sock_2` text NOT NULL,
  `name_sock_3` text NOT NULL,
  `name_sock_4` text NOT NULL,
  `name_sock_5` text NOT NULL,
  `name_sock_6` text NOT NULL,
  `con_sock_1` int(11) DEFAULT NULL,
  `con_sock_2` int(11) DEFAULT NULL,
  `con_sock_3` int(11) DEFAULT NULL,
  `con_sock_4` int(11) DEFAULT NULL,
  `con_sock_5` int(11) DEFAULT NULL,
  `con_sock_6` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL,
  `output_ba` int(11) NOT NULL DEFAULT '0',
  `l_ba` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bathroom`
--

INSERT INTO `bathroom` (`id`, `api_key`, `bathroom_light`, `dimer`, `Sum`, `bathroom_socket_1`, `bathroom_socket_2`, `bathroom_socket_3`, `bathroom_socket_4`, `bathroom_socket_5`, `bathroom_socket_6`, `ba_temp_sock_1`, `ba_temp_sock_2`, `ba_temp_sock_3`, `ba_temp_sock_4`, `ba_temp_sock_5`, `ba_temp_sock_6`, `name_sock_1`, `name_sock_2`, `name_sock_3`, `name_sock_4`, `name_sock_5`, `name_sock_6`, `con_sock_1`, `con_sock_2`, `con_sock_3`, `con_sock_4`, `con_sock_5`, `con_sock_6`, `date`, `output_ba`, `l_ba`) VALUES
(1, 123456789, 0, 51, 6, 1, 0, 1, 0, 0, 0, 23, 24, 22, 21, 23, 22, 'Пральна машина', 'Фен', 'Бойлер', 'Сушарка', 'Електробритва', 'Плойка', 1, 1, 1, 1, 1, 1, '2018-12-18 09:22:22', 334, 310),
(2, 387677001, 0, 100, 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-07 14:58:06', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `bedroom`
--

CREATE TABLE `bedroom` (
  `id` int(11) NOT NULL,
  `api_key` int(11) NOT NULL,
  `bedroom_light` int(11) DEFAULT NULL,
  `dimer` int(11) NOT NULL DEFAULT '100',
  `Sum` int(11) NOT NULL DEFAULT '1',
  `bedroom_socket_1` int(11) DEFAULT NULL,
  `bedroom_socket_2` int(11) DEFAULT NULL,
  `bedroom_socket_3` int(11) DEFAULT NULL,
  `bedroom_socket_4` int(11) DEFAULT NULL,
  `bedroom_socket_5` int(11) DEFAULT NULL,
  `bedroom_socket_6` int(11) DEFAULT NULL,
  `b_temp_sock_1` int(11) DEFAULT NULL,
  `b_temp_sock_2` int(11) NOT NULL,
  `b_temp_sock_3` int(11) NOT NULL,
  `b_temp_sock_4` int(11) NOT NULL,
  `b_temp_sock_5` int(11) NOT NULL,
  `b_temp_sock_6` int(11) NOT NULL,
  `name_sock_1` text NOT NULL,
  `name_sock_2` text NOT NULL,
  `name_sock_3` text NOT NULL,
  `name_sock_4` text NOT NULL,
  `name_sock_5` text NOT NULL,
  `name_sock_6` text NOT NULL,
  `name_light` text NOT NULL,
  `con_sock_1` int(11) NOT NULL DEFAULT '0',
  `con_sock_2` int(11) NOT NULL DEFAULT '0',
  `con_sock_3` int(11) NOT NULL DEFAULT '0',
  `con_sock_4` int(11) NOT NULL DEFAULT '0',
  `con_sock_5` int(11) NOT NULL DEFAULT '0',
  `con_sock_6` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL,
  `output_b` int(11) NOT NULL DEFAULT '0',
  `l_b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bedroom`
--

INSERT INTO `bedroom` (`id`, `api_key`, `bedroom_light`, `dimer`, `Sum`, `bedroom_socket_1`, `bedroom_socket_2`, `bedroom_socket_3`, `bedroom_socket_4`, `bedroom_socket_5`, `bedroom_socket_6`, `b_temp_sock_1`, `b_temp_sock_2`, `b_temp_sock_3`, `b_temp_sock_4`, `b_temp_sock_5`, `b_temp_sock_6`, `name_sock_1`, `name_sock_2`, `name_sock_3`, `name_sock_4`, `name_sock_5`, `name_sock_6`, `name_light`, `con_sock_1`, `con_sock_2`, `con_sock_3`, `con_sock_4`, `con_sock_5`, `con_sock_6`, `date`, `output_b`, `l_b`) VALUES
(1, 123456789, 0, 75, 6, 0, 0, 0, 0, 0, 0, 24, 0, 0, 0, 0, 0, 'Світильник', 'Будильник', 'Телефон', 'Кондиціонер', 'Телевізор', 'Домашній кінотеатр', '', 1, 0, 0, 0, 0, 0, '2018-12-18 09:52:24', 1350, 1049),
(2, 387677001, 0, 100, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '2018-12-07 15:02:44', 6, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `brain`
--

CREATE TABLE `brain` (
  `id` int(11) NOT NULL,
  `serial` varchar(11) NOT NULL,
  `user_api` int(9) NOT NULL,
  `date_add` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brain`
--

INSERT INTO `brain` (`id`, `serial`, `user_api`, `date_add`) VALUES
(1, '12345678910', 123456789, '2018-12-18 06:43:32');

-- --------------------------------------------------------

--
-- Структура таблицы `id`
--

CREATE TABLE `id` (
  `id` int(11) NOT NULL,
  `api_key` int(11) NOT NULL,
  `id_b_1` int(11) DEFAULT NULL,
  `id_b_2` int(11) DEFAULT NULL,
  `id_b_3` int(11) DEFAULT NULL,
  `id_b_4` int(11) DEFAULT NULL,
  `id_b_5` int(11) NOT NULL,
  `id_b_6` int(11) NOT NULL,
  `id_k_1` int(11) NOT NULL,
  `id_k_2` int(11) NOT NULL,
  `id_k_3` int(11) NOT NULL,
  `id_k_4` int(11) NOT NULL,
  `id_k_5` int(11) NOT NULL,
  `id_k_6` int(11) NOT NULL,
  `id_ba_1` int(11) NOT NULL,
  `id_ba_2` int(11) NOT NULL,
  `id_ba_3` int(11) NOT NULL,
  `id_ba_4` int(11) NOT NULL,
  `id_ba_5` int(11) NOT NULL,
  `id_ba_6` int(11) NOT NULL,
  `id_l_1` int(11) NOT NULL,
  `id_l_2` int(11) NOT NULL,
  `id_l_3` int(11) NOT NULL,
  `id_l_4` int(11) NOT NULL,
  `id_l_5` int(11) NOT NULL,
  `id_l_6` int(11) NOT NULL,
  `date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `id`
--

INSERT INTO `id` (`id`, `api_key`, `id_b_1`, `id_b_2`, `id_b_3`, `id_b_4`, `id_b_5`, `id_b_6`, `id_k_1`, `id_k_2`, `id_k_3`, `id_k_4`, `id_k_5`, `id_k_6`, `id_ba_1`, `id_ba_2`, `id_ba_3`, `id_ba_4`, `id_ba_5`, `id_ba_6`, `id_l_1`, `id_l_2`, `id_l_3`, `id_l_4`, `id_l_5`, `id_l_6`, `date`) VALUES
(1, 123456789, 1596347899, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(2, 387677001, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-12-07 14:58:06');

-- --------------------------------------------------------

--
-- Структура таблицы `kitchen`
--

CREATE TABLE `kitchen` (
  `id` int(11) NOT NULL,
  `api_key` int(11) NOT NULL,
  `kitchen_light` int(11) DEFAULT NULL,
  `dimer` int(11) NOT NULL DEFAULT '100',
  `Sum` int(11) NOT NULL DEFAULT '1',
  `kitchen_socket_1` int(11) DEFAULT NULL,
  `kitchen_socket_2` int(11) DEFAULT NULL,
  `kitchen_socket_3` int(11) DEFAULT NULL,
  `kitchen_socket_4` int(11) DEFAULT NULL,
  `kitchen_socket_5` int(11) DEFAULT NULL,
  `kitchen_socket_6` int(11) DEFAULT NULL,
  `k_temp_sock_1` int(11) NOT NULL,
  `k_temp_sock_2` int(11) NOT NULL,
  `k_temp_sock_3` int(11) NOT NULL,
  `k_temp_sock_4` int(11) NOT NULL,
  `k_temp_sock_5` int(11) NOT NULL,
  `k_temp_sock_6` int(11) NOT NULL,
  `name_sock_1` text NOT NULL,
  `name_sock_2` text NOT NULL,
  `name_sock_3` text NOT NULL,
  `name_sock_4` text NOT NULL,
  `name_sock_5` text NOT NULL,
  `name_sock_6` text NOT NULL,
  `con_sock_1` int(11) NOT NULL DEFAULT '0',
  `con_sock_2` int(11) NOT NULL DEFAULT '0',
  `con_sock_3` int(11) DEFAULT '0',
  `con_sock_4` int(11) NOT NULL DEFAULT '0',
  `con_sock_5` int(11) NOT NULL DEFAULT '0',
  `con_sock_6` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL,
  `output_k` int(11) NOT NULL DEFAULT '0',
  `l_k` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kitchen`
--

INSERT INTO `kitchen` (`id`, `api_key`, `kitchen_light`, `dimer`, `Sum`, `kitchen_socket_1`, `kitchen_socket_2`, `kitchen_socket_3`, `kitchen_socket_4`, `kitchen_socket_5`, `kitchen_socket_6`, `k_temp_sock_1`, `k_temp_sock_2`, `k_temp_sock_3`, `k_temp_sock_4`, `k_temp_sock_5`, `k_temp_sock_6`, `name_sock_1`, `name_sock_2`, `name_sock_3`, `name_sock_4`, `name_sock_5`, `name_sock_6`, `con_sock_1`, `con_sock_2`, `con_sock_3`, `con_sock_4`, `con_sock_5`, `con_sock_6`, `date`, `output_k`, `l_k`) VALUES
(1, 123456789, 1, 51, 6, 1, 0, 1, 0, 0, 1, 27, 25, 24, 26, 24, 25, 'Холодильник', 'Мультиварка', 'Кавоварка', 'Мікрохвильова пічь', 'Блендер', 'Витяжка', 1, 1, 1, 1, 1, 1, '2018-12-18 08:55:02', 1350, 422),
(2, 387677001, NULL, 100, 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '2018-12-07 14:58:06', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `livingroom`
--

CREATE TABLE `livingroom` (
  `id` int(10) NOT NULL,
  `api_key` int(10) NOT NULL COMMENT 'ключ',
  `home_light` int(1) DEFAULT NULL,
  `dimer` int(11) NOT NULL DEFAULT '100',
  `Sum` int(1) NOT NULL DEFAULT '1',
  `home_socket_1` int(1) DEFAULT NULL,
  `home_socket_2` int(1) DEFAULT NULL,
  `home_socket_3` int(1) DEFAULT NULL,
  `home_socket_4` int(1) DEFAULT NULL,
  `home_socket_5` int(1) DEFAULT NULL,
  `home_socket_6` int(1) DEFAULT NULL,
  `h_temp_sock_1` int(11) NOT NULL,
  `h_temp_sock_2` int(11) NOT NULL,
  `h_temp_sock_3` int(11) NOT NULL,
  `h_temp_sock_4` int(11) NOT NULL,
  `h_temp_sock_5` int(11) NOT NULL,
  `h_temp_sock_6` int(11) NOT NULL,
  `name_sock_1` text NOT NULL,
  `name_sock_2` text NOT NULL,
  `name_sock_3` text NOT NULL,
  `name_sock_4` text NOT NULL,
  `name_sock_5` text NOT NULL,
  `name_sock_6` text NOT NULL,
  `con_sock_1` int(11) DEFAULT NULL,
  `con_sock_2` int(11) DEFAULT NULL,
  `con_sock_3` int(11) DEFAULT NULL,
  `con_sock_4` int(11) DEFAULT NULL,
  `con_sock_5` int(11) DEFAULT NULL,
  `con_sock_6` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL COMMENT 'дата',
  `output_h` int(11) NOT NULL DEFAULT '0',
  `l_h` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `livingroom`
--

INSERT INTO `livingroom` (`id`, `api_key`, `home_light`, `dimer`, `Sum`, `home_socket_1`, `home_socket_2`, `home_socket_3`, `home_socket_4`, `home_socket_5`, `home_socket_6`, `h_temp_sock_1`, `h_temp_sock_2`, `h_temp_sock_3`, `h_temp_sock_4`, `h_temp_sock_5`, `h_temp_sock_6`, `name_sock_1`, `name_sock_2`, `name_sock_3`, `name_sock_4`, `name_sock_5`, `name_sock_6`, `con_sock_1`, `con_sock_2`, `con_sock_3`, `con_sock_4`, `con_sock_5`, `con_sock_6`, `date`, `output_h`, `l_h`) VALUES
(1, 123456789, 1, 62, 6, 1, 1, 1, 1, 0, 0, 25, 26, 23, 25, 25, 24, 'Телевізор', 'Телефон', 'Акустична система', 'Камін', 'Караоке', 'Світильник', 0, 0, NULL, NULL, NULL, NULL, '2018-12-17 19:56:40', 185, 195),
(2, 387677001, 0, 100, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-07 16:19:40', 4, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `long_pooling`
--

CREATE TABLE `long_pooling` (
  `id` int(11) NOT NULL,
  `api_key` int(11) NOT NULL,
  `output_b` int(11) DEFAULT NULL,
  `output_k` int(11) DEFAULT NULL,
  `output_ba` int(11) DEFAULT NULL,
  `output_h` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `long_pooling`
--

INSERT INTO `long_pooling` (`id`, `api_key`, `output_b`, `output_k`, `output_ba`, `output_h`, `date`) VALUES
(1, 123456789, 291, 234, 89, 40, '2018-11-27 18:10:11');

-- --------------------------------------------------------

--
-- Структура таблицы `network_device`
--

CREATE TABLE `network_device` (
  `id` int(5) NOT NULL,
  `api_key` int(9) NOT NULL,
  `ip_bedroom_1` varchar(25) NOT NULL,
  `ip_bedroom_2` text NOT NULL,
  `ip_bedroom_3` varchar(25) NOT NULL,
  `ip_bedroom_4` varchar(25) NOT NULL,
  `ip_bedroom_5` varchar(25) NOT NULL,
  `ip_bedroom_6` varchar(25) NOT NULL,
  `ip_kitchen_1` varchar(25) NOT NULL,
  `ip_kitchen_2` varchar(25) NOT NULL,
  `ip_kitchen_3` varchar(25) NOT NULL,
  `ip_kitchen_4` varchar(25) NOT NULL,
  `ip_kitchen_5` varchar(25) NOT NULL,
  `ip_kitchen_6` varchar(25) NOT NULL,
  `ip_bathroom_1` varchar(25) NOT NULL,
  `ip_bathroom_2` varchar(25) NOT NULL,
  `ip_bathroom_3` varchar(25) NOT NULL,
  `ip_bathroom_4` varchar(25) NOT NULL,
  `ip_bathroom_5` varchar(25) NOT NULL,
  `ip_bathroom_6` varchar(25) NOT NULL,
  `ip_home_1` varchar(25) NOT NULL,
  `ip_home_2` varchar(25) NOT NULL,
  `ip_home_3` varchar(25) NOT NULL,
  `ip_home_4` varchar(25) NOT NULL,
  `ip_home_5` varchar(25) NOT NULL,
  `ip_home_6` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `network_device`
--

INSERT INTO `network_device` (`id`, `api_key`, `ip_bedroom_1`, `ip_bedroom_2`, `ip_bedroom_3`, `ip_bedroom_4`, `ip_bedroom_5`, `ip_bedroom_6`, `ip_kitchen_1`, `ip_kitchen_2`, `ip_kitchen_3`, `ip_kitchen_4`, `ip_kitchen_5`, `ip_kitchen_6`, `ip_bathroom_1`, `ip_bathroom_2`, `ip_bathroom_3`, `ip_bathroom_4`, `ip_bathroom_5`, `ip_bathroom_6`, `ip_home_1`, `ip_home_2`, `ip_home_3`, `ip_home_4`, `ip_home_5`, `ip_home_6`) VALUES
(1, 123456789, '192.168.43.137', '192.168.0.104', '192.168.0.106', '192.168.0103', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 387677001, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `api_key` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `b_sock_1` int(11) NOT NULL,
  `b_sock_2` int(11) NOT NULL,
  `b_sock_3` int(11) NOT NULL,
  `b_sock_4` int(11) NOT NULL,
  `b_sock_5` int(11) NOT NULL,
  `b_sock_6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `temp`
--

INSERT INTO `temp` (`id`, `api_key`, `date`, `b_sock_1`, `b_sock_2`, `b_sock_3`, `b_sock_4`, `b_sock_5`, `b_sock_6`) VALUES
(1, 123456789, '2018-12-18 11:13:02', 21, 0, 0, 0, 0, 0),
(2, 123456789, '2018-12-18 11:14:07', 21, 0, 0, 0, 0, 0),
(3, 123456789, '2018-12-18 11:15:12', 22, 0, 0, 0, 0, 0),
(4, 123456789, '2018-12-18 11:16:17', 22, 0, 0, 0, 0, 0),
(5, 123456789, '2018-12-18 11:17:22', 22, 0, 0, 0, 0, 0),
(6, 123456789, '2018-12-18 11:18:27', 21, 0, 0, 0, 0, 0),
(7, 123456789, '2018-12-18 11:19:32', 22, 0, 0, 0, 0, 0),
(8, 123456789, '2018-12-18 11:20:37', 22, 0, 0, 0, 0, 0),
(9, 123456789, '2018-12-18 11:21:42', 22, 0, 0, 0, 0, 0),
(10, 123456789, '2018-12-18 11:22:47', 22, 0, 0, 0, 0, 0),
(11, 123456789, '2018-12-18 11:23:52', 21, 0, 0, 0, 0, 0),
(12, 123456789, '2018-12-18 11:24:57', 22, 0, 0, 0, 0, 0),
(13, 123456789, '2018-12-18 11:26:02', 22, 0, 0, 0, 0, 0),
(14, 123456789, '2018-12-18 11:27:07', 22, 0, 0, 0, 0, 0),
(15, 123456789, '2018-12-18 11:28:12', 22, 0, 0, 0, 0, 0),
(16, 123456789, '2018-12-18 11:29:17', 22, 0, 0, 0, 0, 0),
(17, 123456789, '2018-12-18 11:30:22', 22, 0, 0, 0, 0, 0),
(18, 123456789, '2018-12-18 11:31:27', 22, 0, 0, 0, 0, 0),
(19, 123456789, '2018-12-18 11:32:32', 22, 0, 0, 0, 0, 0),
(20, 123456789, '2018-12-18 11:33:37', 28, 0, 0, 0, 0, 0),
(21, 123456789, '2018-12-18 11:34:44', 32, 0, 0, 0, 0, 0),
(22, 123456789, '2018-12-18 11:35:47', 31, 0, 0, 0, 0, 0),
(23, 123456789, '2018-12-18 11:36:49', 34, 0, 0, 0, 0, 0),
(24, 123456789, '2018-12-18 11:37:52', 35, 0, 0, 0, 0, 0),
(25, 123456789, '2018-12-18 11:38:57', 0, 0, 0, 0, 0, 0),
(26, 123456789, '2018-12-18 11:40:02', 33, 0, 0, 0, 0, 0),
(27, 123456789, '2018-12-18 11:41:07', 35, 0, 0, 0, 0, 0),
(28, 123456789, '2018-12-18 11:42:09', 35, 0, 0, 0, 0, 0),
(29, 123456789, '2018-12-18 11:43:12', 36, 0, 0, 0, 0, 0),
(30, 123456789, '2018-12-18 11:44:15', 29, 0, 0, 0, 0, 0),
(31, 123456789, '2018-12-18 11:45:18', 28, 0, 0, 0, 0, 0),
(32, 123456789, '2018-12-18 11:46:21', 28, 0, 0, 0, 0, 0),
(33, 123456789, '2018-12-18 11:47:23', 29, 0, 0, 0, 0, 0),
(34, 123456789, '2018-12-18 11:48:29', 26, 0, 0, 0, 0, 0),
(35, 123456789, '2018-12-18 11:49:33', 25, 0, 0, 0, 0, 0),
(36, 123456789, '2018-12-18 11:50:35', 25, 0, 0, 0, 0, 0),
(37, 123456789, '2018-12-18 11:51:38', 24, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL COMMENT 'логін',
  `password` varchar(15) NOT NULL COMMENT 'пароль',
  `api_key` int(10) NOT NULL COMMENT 'ключ',
  `email` varchar(40) NOT NULL,
  `data_create` timestamp NOT NULL,
  `output` int(11) NOT NULL DEFAULT '0',
  `admin_pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `api_key`, `email`, `data_create`, `output`, `admin_pass`) VALUES
(1, 'genri', '123', 123456789, '', '0000-00-00 00:00:00', 1350, 'Rfdey123qw!'),
(2, 'user1', '12345', 387677001, 'yarik.mihalenko@mail.ru', '2018-12-07 14:58:06', 0, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bathroom`
--
ALTER TABLE `bathroom`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bedroom`
--
ALTER TABLE `bedroom`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brain`
--
ALTER TABLE `brain`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `id`
--
ALTER TABLE `id`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `livingroom`
--
ALTER TABLE `livingroom`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `long_pooling`
--
ALTER TABLE `long_pooling`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `network_device`
--
ALTER TABLE `network_device`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bathroom`
--
ALTER TABLE `bathroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `bedroom`
--
ALTER TABLE `bedroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `brain`
--
ALTER TABLE `brain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `id`
--
ALTER TABLE `id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `livingroom`
--
ALTER TABLE `livingroom`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `long_pooling`
--
ALTER TABLE `long_pooling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `network_device`
--
ALTER TABLE `network_device`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
