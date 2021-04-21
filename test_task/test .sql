-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: 10.14.22.12
-- Время создания: Апр 21 2021 г., 10:00
-- Версия сервера: 5.7.31-34-log
-- Версия PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `category` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `firstname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `birthDate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `task`
--

INSERT INTO `task` (`id`, `category`, `firstname`, `lastname`, `email`, `gender`, `birthDate`) VALUES
(7, 'Online games', 'Дмитрий', 'Макуха', 'asdf@mail.ru', 'Мужчина', '28'),
(9, 'Спорт', 'Иван', 'Иванов', '543@de.com', 'Мужчина', '20'),
(10, 'Online games', 'Эдуард', 'Васильев', 'dmitriy2829@gmail.com', 'Мужчина', '25'),
(11, 'Киберспорт', 'Василиса', 'Васильева', 'vas@gmail.com', 'Женщина', '17'),
(12, 'Киберспорт', 'Екатерина', 'Дмитрова', 'katya@gmail.com', 'Женщина', '22'),
(13, 'Спорт', 'Владимир', 'Ильин', 'vova@gmail.com', 'Мужчина', '57'),
(14, 'Online games', 'Маша', 'Трифонова', 'masha@gmail.com', 'Женщина', '32');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
