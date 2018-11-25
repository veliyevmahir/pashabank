-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Ноя 25 2018 г., 14:12
-- Версия сервера: 10.2.17-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u341961747_tstdt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `c_id` int(11) NOT NULL,
  `c_vip_code` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_surname` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_mobile` varchar(255) NOT NULL,
  `c_fincode` varchar(255) NOT NULL,
  `c_password` varchar(255) NOT NULL,
  `c_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`c_id`, `c_vip_code`, `c_name`, `c_surname`, `c_email`, `c_mobile`, `c_fincode`, `c_password`, `c_image`) VALUES
(26, '', 'Mahir Valiyev', '', 'mahir.v@code.edu.az', '+994517788040', '13109912', '8fc9f56446fc2794df7c2bc3c04542eb', 'default_profile.jpg'),
(27, '', 'Mahir Valiyev', '', 'mahir.v@code.edu.az', '+994517788040', '13109912', '0fa0f662c82d3659a339716653540ac4', 'default_profile.jpg'),
(28, '', 'Mahir Valiyev', '', 'mahir.v@code.edu.az', '+994517788040', '13109912', '8dd16cde0fbfe50a6ca691875015c5c6', 'default_profile.jpg'),
(29, '', 'Mahir Valiyev', '', 'mahir.v@code.edu.az', '+994517788040', '13109912', 'f78cdba2dfcc5da6f242b7a44f8b07c6', 'default_profile.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_num` bigint(20) NOT NULL,
  `card_cvc` int(5) NOT NULL,
  `card_exp_month` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `card_exp_year` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `card_brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `card_num`, `card_cvc`, `card_exp_month`, `card_exp_year`, `card_brand`, `item_name`, `item_number`, `item_price`, `item_price_currency`, `paid_amount`, `paid_amount_currency`, `txn_id`, `payment_status`, `created`, `modified`) VALUES
(20, 'Mahir Valiyev', 'mahir.v@code.edu.az', 4242424242424242, 952, '03', '2024', 'Visa', 'Stripe Donation', 'PS123456', 500.00, 'usd', '500', 'usd', 'txn_1DaNLDElcQ0ZILtRdVDkqubl', 'succeeded', '2018-11-25 13:08:03', '2018-11-25 13:08:03'),
(21, 'Mahir Valiyev', 'mahir.v@code.edu.az', 4242424242424242, 256, '03', '2024', 'Visa', 'Stripe Donation', 'PS123456', 500.00, 'usd', '500', 'usd', 'txn_1DaNSNElcQ0ZILtRbeKiPlxq', 'succeeded', '2018-11-25 13:15:27', '2018-11-25 13:15:27'),
(22, 'Mahir Valiyev', 'mahir.v@code.edu.az', 4242424242424242, 256, '03', '2024', 'Visa', 'Stripe Donation', 'PS123456', 500.00, 'usd', '500', 'usd', 'txn_1DaNXSElcQ0ZILtRH556f8w2', 'succeeded', '2018-11-25 13:20:42', '2018-11-25 13:20:42'),
(23, 'Mahir Valiyev', 'mahir.v@code.edu.az', 4242424242424242, 352, '03', '2024', 'Visa', 'Stripe Donation', 'PS123456', 500.00, 'usd', '500', 'usd', 'txn_1DaNZPElcQ0ZILtRKdrNvfIR', 'succeeded', '2018-11-25 13:22:43', '2018-11-25 13:22:43');

-- --------------------------------------------------------

--
-- Структура таблицы `request`
--

CREATE TABLE `request` (
  `r_id` int(11) NOT NULL,
  `r_fincode` varchar(255) NOT NULL,
  `r_email` varchar(255) NOT NULL,
  `r_request_owner` int(11) NOT NULL,
  `r_create_date` varchar(255) NOT NULL,
  `r_title` text NOT NULL,
  `r_desc` text NOT NULL,
  `r_status` int(11) NOT NULL,
  `r_vip_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `request`
--

INSERT INTO `request` (`r_id`, `r_fincode`, `r_email`, `r_request_owner`, `r_create_date`, `r_title`, `r_desc`, `r_status`, `r_vip_status`) VALUES
(12, '13109912', 'mahir.v@code.edu.az', 29, '2018-11-25 13:24:47', 'Investment request test', 'Investment request testInvestment request testInvestment request testInvestment request testInvestment request testInvestment request testInvestment request testInvestment request testInvestment request testInvestment request testInvestment request testInvestment request test\r\n', 3, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `request`
--
ALTER TABLE `request`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
