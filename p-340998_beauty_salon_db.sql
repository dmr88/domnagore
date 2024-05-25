-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2024 г., 15:45
-- Версия сервера: 5.7.39-log
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `p-340998_beauty_salon_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `regName` varchar(255) NOT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `registrations`
--

INSERT INTO `registrations` (`id`, `uid`, `time`, `regName`, `person_id`) VALUES
(1, 1, '2024-03-20 13:30:00', 'Ламинирование ресниц', 0),
(2, 1, '2024-03-20 14:00:00', 'Маникюр', 0),
(3, 2, '2024-03-20 12:00:00', 'Маникюр', 0),
(4, 2, '2024-03-19 19:17:00', 'Наращивание ресниц', 0),
(5, 2, '2024-03-31 19:17:00', 'Наращивание ресниц', 0),
(6, 3, '2024-03-19 22:30:00', 'Окрашивание', 0),
(7, 4, '2024-03-22 01:00:00', 'Маникюр', 0),
(8, 5, '2024-03-21 21:18:00', 'Педикюр', 0),
(9, 5, '2024-03-20 21:30:00', 'Ламинирование ресниц', 0),
(10, 5, '2024-03-20 21:30:00', 'Ламинирование ресниц', 0),
(11, 2, '2024-03-05 22:15:00', 'Окрашивание', 0),
(12, 2, '1113-12-11 11:20:00', 'Маникюр', 0),
(13, 6, '1111-11-11 11:11:00', 'Педикюр', 0),
(14, 1, '2024-03-20 16:50:00', 'Ламинирование ресниц', 0),
(15, 5, '2024-03-22 19:07:00', 'Наращивание ресниц', 0),
(16, 7, '2024-03-27 13:47:00', 'Ламинирование ресниц', 0),
(17, 8, '2024-03-28 15:55:00', 'Маникюр', 0),
(18, 8, '2024-03-28 15:55:00', 'Маникюр', 0),
(19, 8, '2024-03-28 15:55:00', 'Маникюр', 0),
(20, 9, '2024-03-30 11:25:00', 'Педикюр', 0),
(21, 10, '2024-05-15 12:00:00', 'Наращивание ресниц', 0),
(22, 11, '2024-05-10 10:00:00', 'Ламинирование ресниц', 0),
(23, 12, '2024-05-16 10:00:00', 'Маникюр', 0),
(24, 1, '2024-05-30 12:00:00', 'Окрашивание', 11),
(25, 1, '2024-05-18 13:00:00', 'Наращивание ресниц', 11),
(26, 7, '2024-06-10 10:00:00', 'Маникюр', 12),
(27, 14, '2024-05-17 12:00:00', 'Маникюр', 11),
(28, 1, '2024-05-29 16:09:00', 'Наращивание ресниц', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id`, `name`, `price`) VALUES
(1, 'Ламинирование ресниц', 5000),
(2, 'Наращивание ресниц', 6000),
(3, 'Маникюр', 5000),
(4, 'Педикюр', 6000),
(5, 'Окрашивание', 20000),
(6, 'Стрижка', 25000);

-- --------------------------------------------------------

--
-- Структура таблицы `service_person`
--

CREATE TABLE `service_person` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `service_person`
--

INSERT INTO `service_person` (`id`, `user_id`, `service_id`) VALUES
(1, 11, 1),
(2, 12, 2),
(3, 11, 3),
(4, 12, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `role_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `isAdmin`, `role_id`) VALUES
(1, 'admin', 'admin@mail.com', '', '21232f297a57a5a743894a0e4a801fc3', 1, 0),
(3, 'aa', 'aa@aa.a', 'aa', '4124bc0a9335c27f086f24ba207a4912', 0, 0),
(4, 'Лвлад', 'shjsjagwga@gmail.com', '88005553535', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0),
(7, 'Ram', '121112@gmail.com', '9888877', '92f0e3015db06807a532591d30840f04', 0, 0),
(8, 'айкен', 'aiken@kanitu.kz', '123321123', '418b562861fefeeb06131161c078ac78', 0, 0),
(9, 'aiken', 'aiken@gmail.com', '112', '202cb962ac59075b964b07152d234b70', 0, 0),
(10, 'aiken', 'kumarov777aiken@gmail.com', '+77471149480', 'a24d4e513ff5d5ff329896c3156db5d3', 0, 0),
(11, 'Marzhan', 'marzanotegenova@gmail.com', '+77058459413', '0fee6c9e8b6723f18f7d63846c0bdedb', 0, 0),
(12, 'chingis', 'kumarov777aiken@gmail.com', '77472479842', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0, 0),
(13, 'Marzhan', 'kumarov777aiken@gmail.com', '77471149480', 'a24d4e513ff5d5ff329896c3156db5d3', 0, 0),
(14, 'aiken', 'kumarov777aiken@gmail.com', '7471149480', 'a24d4e513ff5d5ff329896c3156db5d3', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin'),
(3, 'manager');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `service_person`
--
ALTER TABLE `service_person`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `service_person`
--
ALTER TABLE `service_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
