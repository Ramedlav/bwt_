-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 18 2020 г., 15:50
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bwt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `support`
--

INSERT INTO `support` (`id`, `name`, `email`, `request`) VALUES
(1, 'ghs', 'user1@mail.com', ' Введите сообщение '),
(2, 'bobo', 'bobo@gmail.com', 'bobobobobob'),
(3, 'Вова', 'ochev@mail.com', 'Погода завтра?'),
(4, 'new', 'new@mail.com', 'ceck chrome '),
(5, 'Valeria', 'valeria', 'ghbdtn'),
(6, 'bobo', 'ochev', 'lksneflkmfelk'),
(7, 'asd', 'ochev@mail.ru', ' Введите сообщение '),
(8, 'sdd', 'user2@gmail.com', ' Введите сообщение '),
(9, 'theLastCheck', 'chek@mail.com', ' Введите сообщение  Введите сообщение  Введите сообщение  Введите сообщение  Введите сообщение '),
(10, 'LastofthelastCheck', 'chek@mail.com', ' Введите сообщение Введите сообщение Введите сообщение Введите сообщение Введите сообщение Введите сообщение Введите сообщение Введите сообщение '),
(11, 'vasya', 'ochev@mail.ru', ' Введите сообщение Введите сообщение Введите сообщение Введите сообщение Введите сообщение ');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `role`, `email`) VALUES
(1, 'Vladimir', '123', 'admin', 'ochev@mail.ru'),
(2, 'ddd', '123', 'auth', 'o@mail.ru'),
(3, 'dddd', '121', 'auth', 'oo@mail.com'),
(4, 'ddd', '121', 'auth', 'ee@mail.com'),
(5, 'ewe', '11121', 'auth', 'eee@mail.com'),
(6, '232', '222', 'auth', '22@mm.com'),
(7, 'aad', '111', 'auth', '111@mail.com'),
(8, 'new', '123', 'auth', 'new@m.com'),
(9, 'dad', 'eue', 'auth', 'ee2e@mail.com'),
(10, 'addddddss', '2123123', 'auth', '12312312312@mail.com'),
(11, 'asadasd', 'adssa', 'auth', '111@mail.co'),
(12, 'adda', '2232q312', 'auth', 'ewe@mail.co'),
(13, 'frf', '222', 'auth', '22@mm.co'),
(14, 'sss', 'sws', 'auth', 'wqw@mail.com'),
(15, 'sdfaf', '2222', 'auth', '12312312312@mail.co'),
(16, 'user', '123', 'auth', 'user@gmail.com'),
(17, 'dsd', '123', 'auth', 'user1@mail.com'),
(18, 'sda', 'swsw', 'auth', 'era@com.com'),
(19, 'dgd', 'ddd', 'auth', 'rer@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `support`
--
ALTER TABLE `support`
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
-- AUTO_INCREMENT для таблицы `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
