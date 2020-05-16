-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- База данных: `app`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `product_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `user_name`, `text`, `product_id`) VALUES
(1, 'Владимир', 'Супер, советую всем!', 2),
(2, 'Евгений', 'Всё отлично!', 3),
(3, 'Наталья', 'Отличный товар, приветливый персонал.', 4),
(4, 'Анастасия', 'Характеристики на высоте. Рекомендую!', 5);
