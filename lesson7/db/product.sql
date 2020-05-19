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
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `short_description`, `description`, `price`, `category_id`, `path`) VALUES
(1, 'Товар', 'no-photo.png', 'Описание товара', 'Характеристики товара', 100, 8, ''),
(2, 'Iphone 9', 'iPhone9.png', 'Iphone', 'new', 54990, 1, ''),
(3, 'Iphone 6', 'iPhone6.png', 'Золотой', 'Цвет: Iphone; Память: 64gb', 31990, 1, ''),
(4, 'Iphone X', 'iPhoneX.png', 'Silver', 'Цвет: серебристый; Память: 128 gb', 49990, 1, ''),
(5, 'Iphone XS', 'iPhoneXS.png', 'Цвет: золотистый', 'Цвет: золотистый; Память: 256 gb', 39990, 1, '');
