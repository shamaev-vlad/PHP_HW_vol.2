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
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `imei` int(255) DEFAULT NULL,
  `mac` int(255) DEFAULT NULL,
  `sn` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `quantity`, `imei`, `mac`, `sn`) VALUES
(1, 'iPhone 6', 300, 1, NULL, NULL, NULL),
(2, 'Зарядное устройство', 3, 10, NULL, NULL, NULL);
