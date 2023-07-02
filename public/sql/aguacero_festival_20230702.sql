-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2023 a las 16:22:15
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aguacero_festival`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competition`
--

CREATE TABLE `competition` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nacionality` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `artwork_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter_users`
--

CREATE TABLE `newsletter_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `newsletter_users`
--

INSERT INTO `newsletter_users` (`id`, `name`, `lastname`, `email`, `active`, `created_at`) VALUES
(1, 'Gustavo', 'Quilodran', 'gaqs.02@gmail.com', 1, '2021-11-22 10:58:57'),
(3, 'Macarena', 'Rocher', 'macarocher@gmail.com', 1, '2021-11-24 00:11:07'),
(4, 'Italo', 'Schuller', 'italoschuller@gmail.com', 1, '2021-11-26 17:24:05'),
(5, 'Alexis', 'Borquez Oyarzo', 'borquezalexis195@gmail.com', 1, '2021-12-03 11:43:54'),
(6, 'KARENINA ', 'TEIGUEL CASTILLO', 'KARENINATEIGUEL@GMAIL.COM', 1, '2021-12-06 14:19:21'),
(7, 'Veronica', 'Cortes', 'veritocristina@yahoo.es', 1, '2021-12-08 14:39:12'),
(8, 'Felipe', 'Santander', 'felipesantanderbarria@gmail.com', 1, '2021-12-09 01:50:13'),
(9, 'victor', 'valdes', 'victor.julio.valdes@gmail.com', 1, '2021-12-09 08:00:36'),
(10, 'Robinson', 'Scheuermann urrutia', 'robinsoneduardo.scheuermann@gmail.com', 1, '2021-12-09 19:31:01'),
(11, 'Avril', 'Guerrero Coloma ', 'senyume75@gmail.com', 1, '2021-12-10 19:53:04'),
(12, 'Noelia', 'Coloma BascuÃ±an', 'noeliacoloma@gmail.com', 1, '2021-12-10 19:54:10'),
(13, 'Gustavo', 'Farfal Pineda', 'avrilemiliagc2008@gmail.com', 1, '2021-12-10 19:55:03'),
(14, 'R.', 'A.', 'ro.augusto@hotmail.com', 1, '2021-12-10 22:13:16'),
(15, 'Carolina', 'Reyes ', 'carolina.reyes.i@arauco.com', 1, '2021-12-11 15:49:18'),
(16, 'Celeste Lynn', 'Gray', 'nacopipyq@mailinator.com', 1, '2022-07-12 10:01:35'),
(17, 'Julio', 'Espinoza', 'julio.espinoza.c@gmail.com', 1, '2022-07-27 00:40:47'),
(18, 'Diego', 'Segura', 'seguramente16@gmail.com', 1, '2022-07-28 17:27:53'),
(19, 'Miguel', 'Leyton', 'm.leytonfigueroa@gmail.com', 1, '2022-08-05 12:52:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `security_tokens`
--

CREATE TABLE `security_tokens` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `security_tokens`
--

INSERT INTO `security_tokens` (`id`, `user`, `token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'matamalacamila7@gmail.com', '$2y$10$jYvrnC0/gjw9dTrXWJphlO0KbC9/Ermd.Lv14xUSC5UZ2jQTv1hGm', '2022-08-17 15:27:16', '2022-08-17 15:27:16', '2022-08-17 15:27:16'),
(2, 'gaqs.02@gmail.com', '$2y$10$YByHVwnNE4yj678r1M/aQu/LcAqEl6CJDd3b2KiF9bz0g2BeXsI9O', '2022-08-17 15:30:12', '2022-08-17 15:30:12', '2022-08-17 15:30:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stands`
--

CREATE TABLE `stands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rrss` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `stands` int(11) NOT NULL,
  `resp_name` varchar(255) NOT NULL,
  `resp_email` varchar(255) NOT NULL,
  `resp_phone` varchar(12) NOT NULL,
  `resp_country` varchar(255) NOT NULL,
  `resp_participants` text NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_rut` varchar(20) NOT NULL,
  `business_address` varchar(255) NOT NULL,
  `business_sii` text NOT NULL,
  `business_sell` text NOT NULL,
  `business_legalname` varchar(255) NOT NULL,
  `business_legaladdress` varchar(255) NOT NULL,
  `business_legalphone` varchar(100) NOT NULL,
  `bank_titular` varchar(255) NOT NULL,
  `bank_rut` varchar(20) NOT NULL,
  `bank_email` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_type` varchar(255) NOT NULL,
  `bank_number` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `newsletter_users`
--
ALTER TABLE `newsletter_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `security_tokens`
--
ALTER TABLE `security_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stands`
--
ALTER TABLE `stands`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `competition`
--
ALTER TABLE `competition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `newsletter_users`
--
ALTER TABLE `newsletter_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `security_tokens`
--
ALTER TABLE `security_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `stands`
--
ALTER TABLE `stands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
