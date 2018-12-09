-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 09 2018 г., 22:49
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
(1, 123456789, 0, 10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, NULL, NULL, NULL, NULL, '2018-12-09 19:01:40', 321, 297),
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
(1, 123456789, 0, 38, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Стенд', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '2018-12-09 19:49:12', 1039, 745),
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
(1, 123456789, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
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
  `kitchen_socket_1` int(11) DEFAULT NULL,
  `kitchen_socket_2` int(11) DEFAULT NULL,
  `kitchen_socket_3` int(11) DEFAULT NULL,
  `kitchen_socket_4` int(11) DEFAULT NULL,
  `kitchen_socket_5` int(11) DEFAULT NULL,
  `kitchen_socket_6` int(11) DEFAULT NULL,
  `Sum` int(11) NOT NULL DEFAULT '1',
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

INSERT INTO `kitchen` (`id`, `api_key`, `kitchen_light`, `dimer`, `kitchen_socket_1`, `kitchen_socket_2`, `kitchen_socket_3`, `kitchen_socket_4`, `kitchen_socket_5`, `kitchen_socket_6`, `Sum`, `k_temp_sock_1`, `k_temp_sock_2`, `k_temp_sock_3`, `k_temp_sock_4`, `k_temp_sock_5`, `k_temp_sock_6`, `name_sock_1`, `name_sock_2`, `name_sock_3`, `name_sock_4`, `name_sock_5`, `name_sock_6`, `con_sock_1`, `con_sock_2`, `con_sock_3`, `con_sock_4`, `con_sock_5`, `con_sock_6`, `date`, `output_k`, `l_k`) VALUES
(1, 123456789, 0, 47, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '2018-12-09 19:35:27', 847, 359),
(2, 387677001, NULL, 100, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '2018-12-07 14:58:06', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `livingroom`
--

CREATE TABLE `livingroom` (
  `id` int(10) NOT NULL,
  `api_key` int(10) NOT NULL COMMENT 'ключ',
  `home_light` int(1) DEFAULT NULL,
  `dimer` int(11) NOT NULL DEFAULT '100',
  `home_socket_1` int(1) DEFAULT NULL,
  `home_socket_2` int(1) DEFAULT NULL,
  `home_socket_3` int(1) DEFAULT NULL,
  `home_socket_4` int(1) DEFAULT NULL,
  `home_socket_5` int(1) DEFAULT NULL,
  `home_socket_6` int(1) DEFAULT NULL,
  `Sum` int(1) NOT NULL DEFAULT '1',
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

INSERT INTO `livingroom` (`id`, `api_key`, `home_light`, `dimer`, `home_socket_1`, `home_socket_2`, `home_socket_3`, `home_socket_4`, `home_socket_5`, `home_socket_6`, `Sum`, `h_temp_sock_1`, `h_temp_sock_2`, `h_temp_sock_3`, `h_temp_sock_4`, `h_temp_sock_5`, `h_temp_sock_6`, `name_sock_1`, `name_sock_2`, `name_sock_3`, `name_sock_4`, `name_sock_5`, `name_sock_6`, `con_sock_1`, `con_sock_2`, `con_sock_3`, `con_sock_4`, `con_sock_5`, `con_sock_6`, `date`, `output_h`, `l_h`) VALUES
(1, 123456789, 0, 26, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, NULL, NULL, NULL, NULL, '2018-12-09 19:35:34', 171, 181),
(2, 387677001, 0, 100, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-07 16:19:40', 4, 5);

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
(1, 123456789, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
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
(1, 123456789, '2018-12-09 18:03:35', 28, 24, 26, 26, 24, 20),
(2, 123456789, '2018-12-09 18:04:35', 28, 29, 26, 20, 23, 22),
(3, 123456789, '2018-12-09 18:05:36', 28, 26, 28, 20, 24, 30),
(4, 123456789, '2018-12-09 18:06:37', 23, 25, 22, 24, 28, 21),
(5, 123456789, '2018-12-09 18:07:38', 27, 23, 20, 23, 25, 22),
(6, 123456789, '2018-12-09 18:08:39', 29, 26, 30, 29, 22, 23),
(7, 123456789, '2018-12-09 18:09:40', 29, 30, 20, 29, 24, 26),
(8, 123456789, '2018-12-09 18:10:41', 28, 30, 29, 26, 23, 23),
(9, 123456789, '2018-12-09 18:11:42', 24, 27, 27, 28, 28, 25),
(10, 123456789, '2018-12-09 18:12:43', 25, 25, 29, 27, 29, 21),
(11, 123456789, '2018-12-09 18:13:44', 24, 22, 26, 22, 29, 20),
(12, 123456789, '2018-12-09 18:14:45', 28, 26, 25, 27, 30, 29),
(13, 123456789, '2018-12-09 18:15:46', 21, 23, 22, 30, 21, 29),
(14, 123456789, '2018-12-09 18:16:47', 27, 28, 24, 23, 25, 20),
(15, 123456789, '2018-12-09 18:17:48', 26, 28, 23, 27, 21, 27),
(16, 123456789, '2018-12-09 18:18:49', 21, 27, 29, 30, 27, 29),
(17, 123456789, '2018-12-09 18:19:50', 20, 20, 30, 25, 27, 29),
(18, 123456789, '2018-12-09 18:20:51', 24, 23, 20, 28, 28, 30),
(19, 123456789, '2018-12-09 18:21:52', 20, 24, 21, 27, 20, 24),
(20, 123456789, '2018-12-09 18:22:53', 26, 21, 30, 20, 27, 21),
(21, 123456789, '2018-12-09 18:23:54', 29, 25, 28, 22, 26, 26),
(22, 123456789, '2018-12-09 18:24:55', 26, 21, 23, 22, 20, 20),
(23, 123456789, '2018-12-09 18:25:56', 20, 26, 21, 29, 22, 27),
(24, 123456789, '2018-12-09 18:26:57', 24, 23, 30, 20, 22, 28),
(25, 123456789, '2018-12-09 18:27:58', 28, 21, 25, 28, 24, 20),
(26, 123456789, '2018-12-09 18:28:59', 23, 27, 20, 24, 25, 20),
(27, 123456789, '2018-12-09 18:30:00', 22, 21, 27, 27, 23, 27),
(28, 123456789, '2018-12-09 18:31:01', 21, 21, 22, 21, 29, 27),
(29, 123456789, '2018-12-09 18:32:02', 25, 25, 29, 23, 27, 22),
(30, 123456789, '2018-12-09 18:33:03', 30, 22, 27, 25, 26, 22),
(31, 123456789, '2018-12-09 18:34:04', 26, 30, 24, 30, 30, 20),
(32, 123456789, '2018-12-09 18:35:05', 22, 21, 20, 21, 20, 29),
(33, 123456789, '2018-12-09 18:36:06', 29, 24, 24, 20, 25, 21),
(34, 123456789, '2018-12-09 18:37:07', 25, 28, 20, 24, 29, 28),
(35, 123456789, '2018-12-09 18:38:08', 27, 26, 26, 23, 23, 28),
(36, 123456789, '2018-12-09 18:39:09', 23, 20, 22, 23, 21, 22),
(37, 123456789, '2018-12-09 18:40:10', 24, 30, 29, 30, 21, 29),
(38, 123456789, '2018-12-09 18:41:11', 24, 28, 24, 20, 23, 22),
(39, 123456789, '2018-12-09 18:42:12', 28, 27, 21, 24, 25, 28),
(40, 123456789, '2018-12-09 18:43:13', 27, 20, 24, 25, 25, 20),
(41, 123456789, '2018-12-09 18:44:14', 28, 24, 28, 27, 30, 26),
(42, 123456789, '2018-12-09 18:45:15', 26, 29, 25, 25, 21, 28),
(43, 123456789, '2018-12-09 18:46:16', 30, 26, 28, 25, 27, 25),
(44, 123456789, '2018-12-09 18:47:17', 26, 26, 23, 27, 30, 22),
(45, 123456789, '2018-12-09 18:48:18', 20, 20, 29, 30, 27, 29),
(46, 123456789, '2018-12-09 18:49:19', 29, 30, 24, 30, 28, 26),
(47, 123456789, '2018-12-09 18:50:20', 30, 26, 20, 24, 30, 29),
(48, 123456789, '2018-12-09 18:51:21', 27, 24, 28, 24, 21, 25),
(49, 123456789, '2018-12-09 18:52:22', 30, 28, 30, 22, 26, 24),
(50, 123456789, '2018-12-09 18:53:23', 29, 24, 24, 28, 21, 27),
(51, 123456789, '2018-12-09 18:54:24', 29, 27, 22, 22, 23, 29),
(52, 123456789, '2018-12-09 18:55:25', 21, 23, 26, 30, 29, 30),
(53, 123456789, '2018-12-09 18:56:26', 28, 27, 25, 28, 26, 25),
(54, 123456789, '2018-12-09 18:57:27', 25, 28, 23, 21, 28, 27),
(55, 123456789, '2018-12-09 18:58:28', 24, 23, 29, 20, 22, 26),
(56, 123456789, '2018-12-09 18:59:29', 27, 30, 29, 26, 29, 29),
(57, 123456789, '2018-12-09 19:00:30', 27, 30, 26, 21, 28, 30),
(58, 123456789, '2018-12-09 19:01:31', 21, 28, 29, 29, 30, 30),
(59, 123456789, '2018-12-09 19:02:32', 30, 30, 26, 20, 27, 30),
(60, 123456789, '2018-12-09 19:03:33', 29, 30, 26, 26, 22, 22),
(61, 123456789, '2018-12-09 19:04:34', 27, 21, 24, 29, 27, 23),
(62, 123456789, '2018-12-09 19:05:35', 28, 22, 26, 23, 22, 24),
(63, 123456789, '2018-12-09 19:06:36', 20, 29, 20, 28, 21, 21),
(64, 123456789, '2018-12-09 19:07:37', 21, 23, 24, 29, 29, 25),
(65, 123456789, '2018-12-09 19:08:38', 20, 26, 30, 22, 20, 28),
(66, 123456789, '2018-12-09 19:09:39', 29, 28, 27, 23, 23, 22),
(67, 123456789, '2018-12-09 19:10:40', 28, 26, 30, 28, 25, 25),
(68, 123456789, '2018-12-09 19:11:41', 26, 29, 26, 24, 28, 26),
(69, 123456789, '2018-12-09 19:12:42', 20, 24, 30, 23, 26, 22),
(70, 123456789, '2018-12-09 19:13:43', 28, 22, 21, 28, 23, 21),
(71, 123456789, '2018-12-09 19:14:44', 22, 27, 28, 27, 21, 21),
(72, 123456789, '2018-12-09 19:15:45', 30, 27, 22, 30, 24, 26),
(73, 123456789, '2018-12-09 19:16:46', 22, 20, 25, 27, 22, 30),
(74, 123456789, '2018-12-09 19:17:47', 21, 21, 27, 28, 27, 25),
(75, 123456789, '2018-12-09 19:18:48', 23, 29, 27, 20, 25, 22),
(76, 123456789, '2018-12-09 19:19:49', 20, 21, 29, 21, 22, 20),
(77, 123456789, '2018-12-09 19:20:50', 25, 23, 23, 23, 23, 22),
(78, 123456789, '2018-12-09 19:21:51', 26, 30, 25, 28, 21, 28),
(79, 123456789, '2018-12-09 19:22:52', 27, 21, 24, 26, 21, 22),
(80, 123456789, '2018-12-09 19:23:53', 23, 22, 26, 24, 24, 26),
(81, 123456789, '2018-12-09 19:24:54', 28, 22, 28, 25, 22, 27),
(82, 123456789, '2018-12-09 19:25:55', 27, 27, 27, 24, 23, 26),
(83, 123456789, '2018-12-09 19:26:56', 25, 21, 21, 20, 28, 20),
(84, 123456789, '2018-12-09 19:27:57', 20, 21, 20, 28, 25, 22),
(85, 123456789, '2018-12-09 19:28:57', 27, 26, 22, 23, 30, 21),
(86, 123456789, '2018-12-09 19:29:57', 26, 29, 22, 28, 24, 29),
(87, 123456789, '2018-12-09 19:30:57', 22, 26, 27, 24, 28, 30),
(88, 123456789, '2018-12-09 19:31:58', 24, 28, 24, 25, 29, 21),
(89, 123456789, '2018-12-09 19:32:59', 30, 25, 22, 28, 26, 28),
(90, 123456789, '2018-12-09 19:34:00', 26, 21, 20, 27, 25, 25),
(91, 123456789, '2018-12-09 19:35:01', 25, 21, 29, 30, 27, 23),
(92, 123456789, '2018-12-09 19:36:02', 25, 21, 28, 22, 26, 23),
(93, 123456789, '2018-12-09 19:37:03', 27, 24, 28, 26, 23, 20),
(94, 123456789, '2018-12-09 19:38:04', 20, 21, 29, 21, 20, 22),
(95, 123456789, '2018-12-09 19:39:05', 22, 28, 23, 26, 28, 23),
(96, 123456789, '2018-12-09 19:40:06', 30, 25, 23, 29, 25, 26),
(97, 123456789, '2018-12-09 19:41:07', 29, 28, 27, 24, 25, 30),
(98, 123456789, '2018-12-09 19:42:08', 28, 29, 20, 30, 23, 26),
(99, 123456789, '2018-12-09 19:43:09', 23, 22, 30, 21, 30, 20),
(100, 123456789, '2018-12-09 19:44:10', 30, 21, 29, 28, 30, 20),
(101, 123456789, '2018-12-09 19:45:11', 24, 27, 21, 28, 27, 24),
(102, 123456789, '2018-12-09 19:46:12', 24, 25, 20, 29, 29, 22),
(103, 123456789, '2018-12-09 19:47:13', 26, 27, 22, 22, 27, 21),
(104, 123456789, '2018-12-09 19:48:14', 28, 22, 22, 21, 21, 25),
(105, 123456789, '2018-12-09 19:49:15', 20, 26, 28, 23, 21, 20),
(106, 123456789, '2018-12-09 19:50:16', 27, 22, 26, 21, 26, 22),
(107, 123456789, '2018-12-09 19:51:17', 20, 24, 22, 24, 30, 30),
(108, 123456789, '2018-12-09 19:52:18', 28, 23, 24, 26, 21, 29),
(109, 123456789, '2018-12-09 19:53:19', 21, 23, 25, 27, 29, 28),
(110, 123456789, '2018-12-09 19:54:20', 28, 21, 20, 21, 20, 21),
(111, 123456789, '2018-12-09 19:55:21', 25, 22, 25, 28, 22, 20),
(112, 123456789, '2018-12-09 19:56:22', 27, 30, 30, 30, 21, 23),
(113, 123456789, '2018-12-09 19:57:23', 22, 24, 25, 20, 28, 30),
(114, 123456789, '2018-12-09 19:58:24', 26, 21, 20, 20, 22, 26),
(115, 123456789, '2018-12-09 19:59:25', 24, 30, 29, 26, 25, 21),
(116, 123456789, '2018-12-09 20:00:26', 26, 27, 20, 30, 29, 24),
(117, 123456789, '2018-12-09 20:01:27', 21, 26, 24, 23, 29, 24),
(118, 123456789, '2018-12-09 20:02:28', 30, 25, 23, 20, 27, 23),
(119, 123456789, '2018-12-09 20:03:29', 25, 27, 27, 23, 21, 27),
(120, 123456789, '2018-12-09 20:04:30', 26, 26, 25, 29, 22, 23),
(121, 123456789, '2018-12-09 20:05:31', 24, 20, 22, 29, 25, 22),
(122, 123456789, '2018-12-09 20:06:32', 29, 30, 26, 30, 29, 20),
(123, 123456789, '2018-12-09 20:07:33', 21, 20, 23, 24, 30, 22),
(124, 123456789, '2018-12-09 20:08:34', 30, 24, 26, 29, 25, 30),
(125, 123456789, '2018-12-09 20:09:35', 23, 27, 20, 23, 23, 23),
(126, 123456789, '2018-12-09 20:10:36', 21, 30, 21, 30, 20, 26),
(127, 123456789, '2018-12-09 20:11:37', 21, 25, 24, 28, 23, 23),
(128, 123456789, '2018-12-09 20:12:38', 28, 20, 25, 26, 25, 29),
(129, 123456789, '2018-12-09 20:13:39', 27, 22, 30, 27, 27, 30),
(130, 123456789, '2018-12-09 20:14:40', 23, 24, 20, 30, 28, 25),
(131, 123456789, '2018-12-09 20:15:41', 23, 22, 24, 25, 30, 26),
(132, 123456789, '2018-12-09 20:16:42', 29, 25, 29, 24, 28, 21),
(133, 123456789, '2018-12-09 20:17:43', 21, 29, 20, 24, 24, 27),
(134, 123456789, '2018-12-09 20:18:44', 22, 23, 29, 25, 28, 23),
(135, 123456789, '2018-12-09 20:19:45', 22, 26, 30, 30, 28, 24),
(136, 123456789, '2018-12-09 20:20:46', 25, 28, 23, 23, 27, 30),
(137, 123456789, '2018-12-09 20:21:47', 26, 21, 28, 21, 24, 20),
(138, 123456789, '2018-12-09 20:22:48', 24, 25, 30, 23, 22, 24),
(139, 123456789, '2018-12-09 20:23:49', 24, 20, 30, 24, 29, 25),
(140, 123456789, '2018-12-09 20:24:50', 30, 24, 23, 28, 30, 24),
(141, 123456789, '2018-12-09 20:25:51', 28, 21, 24, 30, 30, 23),
(142, 123456789, '2018-12-09 20:26:52', 24, 24, 23, 29, 26, 25),
(143, 123456789, '2018-12-09 20:27:53', 22, 24, 22, 23, 24, 20),
(144, 123456789, '2018-12-09 20:28:54', 21, 21, 28, 21, 24, 25),
(145, 123456789, '2018-12-09 20:29:55', 28, 27, 24, 28, 29, 23),
(146, 123456789, '2018-12-09 20:30:56', 20, 24, 22, 28, 30, 21),
(147, 123456789, '2018-12-09 20:31:57', 24, 25, 23, 22, 20, 24),
(148, 123456789, '2018-12-09 20:32:58', 28, 23, 26, 21, 23, 28),
(149, 123456789, '2018-12-09 20:33:59', 30, 25, 26, 21, 23, 20),
(150, 123456789, '2018-12-09 20:35:00', 25, 26, 24, 29, 26, 23),
(151, 123456789, '2018-12-09 20:36:01', 23, 21, 20, 29, 28, 26),
(152, 123456789, '2018-12-09 20:37:02', 27, 27, 27, 28, 22, 21),
(153, 123456789, '2018-12-09 20:38:03', 25, 27, 20, 28, 28, 26),
(154, 123456789, '2018-12-09 20:39:04', 28, 24, 26, 26, 27, 21),
(155, 123456789, '2018-12-09 20:40:05', 22, 23, 20, 21, 22, 23),
(156, 123456789, '2018-12-09 20:41:06', 22, 30, 22, 28, 30, 28),
(157, 123456789, '2018-12-09 20:42:07', 29, 20, 24, 30, 25, 21),
(158, 123456789, '2018-12-09 20:43:08', 27, 29, 26, 29, 27, 20),
(159, 123456789, '2018-12-09 20:44:09', 23, 23, 21, 26, 26, 29),
(160, 123456789, '2018-12-09 20:45:10', 26, 25, 27, 22, 27, 28),
(161, 123456789, '2018-12-09 20:46:11', 22, 30, 26, 21, 28, 25),
(162, 123456789, '2018-12-09 20:47:12', 22, 21, 24, 27, 29, 25),
(163, 123456789, '2018-12-09 20:48:13', 24, 20, 23, 21, 26, 20),
(164, 123456789, '2018-12-09 20:49:14', 20, 22, 24, 26, 29, 30),
(165, 123456789, '2018-12-09 20:50:15', 27, 20, 21, 23, 24, 24),
(166, 123456789, '2018-12-09 20:51:16', 30, 20, 25, 29, 28, 20),
(167, 123456789, '2018-12-09 20:52:17', 30, 22, 21, 28, 29, 30),
(168, 123456789, '2018-12-09 20:53:18', 24, 28, 23, 22, 21, 25),
(169, 123456789, '2018-12-09 20:54:19', 20, 27, 29, 20, 28, 29),
(170, 123456789, '2018-12-09 20:55:20', 21, 21, 30, 22, 20, 20),
(171, 123456789, '2018-12-09 20:56:21', 23, 27, 30, 21, 22, 28),
(172, 123456789, '2018-12-09 20:57:22', 26, 20, 30, 22, 26, 29),
(173, 123456789, '2018-12-09 20:58:23', 24, 29, 21, 23, 23, 21),
(174, 123456789, '2018-12-09 20:59:24', 27, 25, 24, 26, 24, 30),
(175, 123456789, '2018-12-09 21:00:25', 27, 26, 23, 25, 21, 27),
(176, 123456789, '2018-12-09 21:01:26', 28, 21, 21, 28, 29, 27),
(177, 123456789, '2018-12-09 21:02:27', 23, 25, 30, 26, 28, 20),
(178, 123456789, '2018-12-09 21:03:28', 30, 27, 20, 23, 22, 27),
(179, 123456789, '2018-12-09 21:04:29', 23, 23, 25, 24, 20, 30),
(180, 123456789, '2018-12-09 21:05:30', 21, 23, 24, 23, 20, 24),
(181, 123456789, '2018-12-09 21:06:31', 20, 21, 25, 21, 30, 27),
(182, 123456789, '2018-12-09 21:07:32', 24, 25, 29, 27, 21, 30),
(183, 123456789, '2018-12-09 21:08:33', 27, 22, 24, 25, 21, 22),
(184, 123456789, '2018-12-09 21:09:34', 27, 26, 23, 28, 28, 21),
(185, 123456789, '2018-12-09 21:10:35', 28, 26, 30, 27, 26, 29),
(186, 123456789, '2018-12-09 21:11:36', 21, 21, 23, 25, 27, 30),
(187, 123456789, '2018-12-09 21:12:37', 22, 25, 24, 22, 28, 27),
(188, 123456789, '2018-12-09 21:13:38', 26, 23, 20, 23, 22, 22),
(189, 123456789, '2018-12-09 21:14:39', 27, 30, 25, 24, 27, 30),
(190, 123456789, '2018-12-09 21:15:40', 24, 28, 28, 20, 21, 30),
(191, 123456789, '2018-12-09 21:16:41', 20, 24, 26, 28, 20, 27),
(192, 123456789, '2018-12-09 21:17:42', 22, 27, 28, 22, 27, 29),
(193, 123456789, '2018-12-09 21:18:43', 30, 26, 25, 25, 27, 21),
(194, 123456789, '2018-12-09 21:19:44', 24, 28, 25, 26, 28, 20),
(195, 123456789, '2018-12-09 21:20:45', 25, 21, 24, 23, 22, 24),
(196, 123456789, '2018-12-09 21:21:46', 27, 20, 30, 27, 25, 22),
(197, 123456789, '2018-12-09 21:22:47', 20, 28, 21, 23, 28, 28),
(198, 123456789, '2018-12-09 21:23:48', 24, 23, 26, 24, 28, 26),
(199, 123456789, '2018-12-09 21:24:49', 26, 28, 27, 20, 29, 30),
(200, 123456789, '2018-12-09 21:25:50', 25, 22, 24, 30, 30, 21),
(201, 123456789, '2018-12-09 21:26:51', 26, 24, 28, 30, 30, 29),
(202, 123456789, '2018-12-09 21:27:52', 29, 30, 27, 29, 26, 29),
(203, 123456789, '2018-12-09 21:28:53', 24, 30, 22, 20, 28, 26),
(204, 123456789, '2018-12-09 21:29:54', 30, 24, 28, 24, 26, 22),
(205, 123456789, '2018-12-09 21:30:55', 27, 23, 22, 23, 27, 20),
(206, 123456789, '2018-12-09 21:31:56', 27, 20, 21, 26, 22, 22),
(207, 123456789, '2018-12-09 21:32:57', 30, 27, 24, 23, 28, 23),
(208, 123456789, '2018-12-09 21:33:58', 30, 20, 26, 22, 22, 20),
(209, 123456789, '2018-12-09 21:34:59', 21, 27, 29, 20, 23, 27),
(210, 123456789, '2018-12-09 21:36:00', 20, 30, 27, 25, 24, 25),
(211, 123456789, '2018-12-09 21:37:02', 25, 23, 25, 24, 24, 30),
(212, 123456789, '2018-12-09 21:38:02', 30, 30, 23, 30, 28, 30),
(213, 123456789, '2018-12-09 21:39:03', 22, 24, 25, 26, 29, 24),
(214, 123456789, '2018-12-09 21:40:04', 24, 29, 25, 30, 29, 23),
(215, 123456789, '2018-12-09 21:41:05', 27, 26, 23, 25, 26, 29),
(216, 123456789, '2018-12-09 21:42:06', 30, 27, 27, 20, 26, 20),
(217, 123456789, '2018-12-09 21:43:07', 30, 20, 20, 26, 26, 28),
(218, 123456789, '2018-12-09 21:44:08', 20, 26, 29, 28, 28, 27),
(219, 123456789, '2018-12-09 21:45:09', 20, 28, 21, 26, 23, 28);

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
(1, 'genri', '123', 123456789, '', '0000-00-00 00:00:00', 756, 'Rfdey123qw!'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
