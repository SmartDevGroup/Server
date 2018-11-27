-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 27 2018 г., 23:18
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

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
  `Sum` int(11) NOT NULL,
  `bathroom_socket_1` int(11) NOT NULL,
  `bathroom_socket_2` int(11) NOT NULL,
  `bathroom_socket_3` int(11) NOT NULL,
  `bathroom_socket_4` int(11) NOT NULL,
  `bathroom_socket_5` int(11) NOT NULL,
  `bathroom_socket_6` int(11) NOT NULL,
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
  `output_ba` int(11) NOT NULL,
  `l_ba` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bathroom`
--

INSERT INTO `bathroom` (`id`, `api_key`, `bathroom_light`, `dimer`, `Sum`, `bathroom_socket_1`, `bathroom_socket_2`, `bathroom_socket_3`, `bathroom_socket_4`, `bathroom_socket_5`, `bathroom_socket_6`, `ba_temp_sock_1`, `ba_temp_sock_2`, `ba_temp_sock_3`, `ba_temp_sock_4`, `ba_temp_sock_5`, `ba_temp_sock_6`, `name_sock_1`, `name_sock_2`, `name_sock_3`, `name_sock_4`, `name_sock_5`, `name_sock_6`, `con_sock_1`, `con_sock_2`, `con_sock_3`, `con_sock_4`, `con_sock_5`, `con_sock_6`, `date`, `output_ba`, `l_ba`) VALUES
(1, 123456789, 0, 10, 6, 0, 0, 0, 0, 0, 0, 1, 2, 3, 4, 5, 6, 'Фен', 'Бритва', 'Бойлер', 'Пральна машина', 'Далі буде', 'Далі буде', 0, 0, NULL, NULL, NULL, NULL, '2018-11-27 18:45:30', 152, 128);

-- --------------------------------------------------------

--
-- Структура таблицы `bedroom`
--

CREATE TABLE `bedroom` (
  `id` int(11) NOT NULL,
  `api_key` int(11) NOT NULL,
  `bedroom_light` int(11) NOT NULL,
  `dimer` int(11) NOT NULL DEFAULT '100',
  `Sum` int(11) NOT NULL,
  `bedroom_socket_1` int(11) NOT NULL,
  `bedroom_socket_2` int(11) NOT NULL,
  `bedroom_socket_3` int(11) NOT NULL,
  `bedroom_socket_4` int(11) NOT NULL,
  `bedroom_socket_5` int(11) NOT NULL,
  `bedroom_socket_6` int(11) NOT NULL,
  `b_temp_sock_1` int(11) NOT NULL,
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
(1, 123456789, 0, 31, 6, 0, 0, 0, 0, 0, 0, 27, 21, 23, 24, 28, 26, 'Лампа', 'Телефон', 'Обігрівач', 'Телевізор', 'Кондиціонер', 'Будильник', '', 0, 0, 0, 0, 0, 0, '2018-11-27 18:24:58', 642, 348);

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
  `id_b_1` int(11) NOT NULL,
  `id_b_2` int(11) NOT NULL,
  `id_b_3` int(11) NOT NULL,
  `id_b_4` int(11) NOT NULL,
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
(1, 123456789, 1596347812, 2222, 3333, 4444, 5555, 6666, 666, 2, 321, 0, 0, 2, 2, 213, 0, 0, 0, 0, 123123, 2147483647, 1234324, 2312, 543, 231, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `kitchen`
--

CREATE TABLE `kitchen` (
  `id` int(11) NOT NULL,
  `api_key` int(11) NOT NULL,
  `kitchen_light` int(11) NOT NULL,
  `dimer` int(11) NOT NULL DEFAULT '100',
  `kitchen_socket_1` int(11) NOT NULL,
  `kitchen_socket_2` int(11) NOT NULL,
  `kitchen_socket_3` int(11) NOT NULL,
  `kitchen_socket_4` int(11) NOT NULL,
  `kitchen_socket_5` int(11) NOT NULL,
  `kitchen_socket_6` int(11) NOT NULL,
  `Sum` int(11) NOT NULL,
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
(1, 123456789, 0, 47, 0, 0, 0, 0, 0, 0, 6, 25, 24, 22, 27, 23, 28, 'Чайник', 'Холодильник', 'Мультиварка', 'Кавоварка', 'Міксер', 'Телевізор', 0, 0, 0, 0, 0, 0, '2018-11-27 18:28:23', 340, 250);

-- --------------------------------------------------------

--
-- Структура таблицы `livingroom`
--

CREATE TABLE `livingroom` (
  `id` int(10) NOT NULL,
  `api_key` int(10) NOT NULL COMMENT 'ключ',
  `home_light` int(1) NOT NULL,
  `dimer` int(11) NOT NULL DEFAULT '100',
  `home_socket_1` int(1) NOT NULL,
  `home_socket_2` int(1) NOT NULL,
  `home_socket_3` int(1) NOT NULL,
  `home_socket_4` int(1) NOT NULL,
  `home_socket_5` int(1) NOT NULL,
  `home_socket_6` int(1) NOT NULL,
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
  `output_h` int(11) NOT NULL DEFAULT '1',
  `l_h` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `livingroom`
--

INSERT INTO `livingroom` (`id`, `api_key`, `home_light`, `dimer`, `home_socket_1`, `home_socket_2`, `home_socket_3`, `home_socket_4`, `home_socket_5`, `home_socket_6`, `Sum`, `h_temp_sock_1`, `h_temp_sock_2`, `h_temp_sock_3`, `h_temp_sock_4`, `h_temp_sock_5`, `h_temp_sock_6`, `name_sock_1`, `name_sock_2`, `name_sock_3`, `name_sock_4`, `name_sock_5`, `name_sock_6`, `con_sock_1`, `con_sock_2`, `con_sock_3`, `con_sock_4`, `con_sock_5`, `con_sock_6`, `date`, `output_h`, `l_h`) VALUES
(1, 123456789, 0, 61, 0, 0, 0, 0, 0, 0, 6, 3, 5, 4, 3, 2, 1, 'asd', 'qwe', 'eq', 'asd', 'vcx', 'asd', 0, NULL, NULL, NULL, NULL, NULL, '2018-11-27 18:32:00', 45, 55);

-- --------------------------------------------------------

--
-- Структура таблицы `Long_pooling`
--

CREATE TABLE `Long_pooling` (
  `id` int(11) NOT NULL,
  `api_key` int(11) NOT NULL,
  `output_b` int(11) DEFAULT NULL,
  `output_k` int(11) DEFAULT NULL,
  `output_ba` int(11) DEFAULT NULL,
  `output_h` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Long_pooling`
--

INSERT INTO `Long_pooling` (`id`, `api_key`, `output_b`, `output_k`, `output_ba`, `output_h`, `date`) VALUES
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
(1, 123456789, '192.168.31.19', '192.168.0.2', '', '', '', '192.168.0.4', '192.168.0.2', '192.168.0.2', '', '', '', '192.168.0.2', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `api_key` int(11) NOT NULL,
  `date` timestamp NOT NULL,
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
(1, 123456789, '0000-00-00 00:00:00', 22, 27, 30, 24, 22, 21);

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
(1, 'genri', '123', 123456789, '', '0000-00-00 00:00:00', 85, 'Rfdey123qw!');

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
-- Индексы таблицы `Long_pooling`
--
ALTER TABLE `Long_pooling`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `network_device`
--
ALTER TABLE `network_device`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `bedroom`
--
ALTER TABLE `bedroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `brain`
--
ALTER TABLE `brain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `id`
--
ALTER TABLE `id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `livingroom`
--
ALTER TABLE `livingroom`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Long_pooling`
--
ALTER TABLE `Long_pooling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `network_device`
--
ALTER TABLE `network_device`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
