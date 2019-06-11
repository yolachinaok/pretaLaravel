-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2019 a las 03:59:45
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `preta_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'denim', NULL, '2019-05-29 03:00:00', '2019-05-29 03:00:00'),
(2, 'tops', NULL, '2019-05-29 03:00:00', '2019-05-29 03:00:00'),
(3, 'outerwear', NULL, '2019-05-29 03:00:00', '2019-05-29 03:00:00'),
(4, 'dresses', NULL, '2019-05-29 03:00:00', '2019-05-29 03:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_23_111207_create_categories_table', 1),
(4, '2019_05_23_135406_create_products_table', 1),
(6, '2019_05_23_140001_create_carts_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `photo1` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `discount`, `photo1`, `photo2`, `photo3`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'Top MANDY', '600.00', 'Top acanalado con botones al frente, de morley blanco.', NULL, '8dK1lP5WMOcS5dBKNL6selr1WAUziVgKF7RDSxUQ.jpeg', '2qaHmkWq2IGJwbsS3mBczjLRpUA0avYNH4OKCbZe.jpeg', '1wb17mR7tl93Upwhg0ig4UU4o47EyrSx5GEbILgd.jpeg', 2, '2019-05-29 03:00:00', '2019-06-11 04:33:53'),
(4, 'Top MANDY', '600.00', 'Top acanalado con botones al frente, de morley camel', 10, 'HdmVSbRn4WcjqPn0W4h6Kex9cnHUytcgNN2s8cxv.jpeg', 'QqAshMvgMxzUFt3urNZYQNPUwumEjIILGVlDcVvO.jpeg', 'bpDoLMuuLY5jE6Lqc4EhLSNSGBkOCGZf5EQcILGU.jpeg', 2, '2019-05-29 03:00:00', '2019-06-11 04:34:29'),
(5, 'Top LEIA', '720.00', 'Remera de rayon negro con volados en las mangas', NULL, 'zZ5lp6nq0zoUoXwdqUj0ZHgcHmi0g6dXhJUsIcWG.jpeg', 'Nz7IUP42tBKxuoiVOVK0bia6KmudGhYiXnAmPEge.jpeg', 'CBWcQGPSqikZMgcbfQ2QNpHQT7Lwg5ngAJfcot1k.jpeg', 2, '2019-05-01 03:00:00', '2019-06-11 04:35:01'),
(6, 'Top LEIA', '720.00', 'Remera de rayon blanco con rayas con volados en las mangas', NULL, 'm9gkXtg8nsD65enugcOCjgTzsMI1bAbdOeWyMVpT.jpeg', 'Vg5DpC6U4DDtJJww4sA0XcvK9zz5Tvj2dT3EIWGu.jpeg', 'yyyDAOmYG3rcwSy7HfiUyodMrcO2phPp4lLshAgo.jpeg', 2, '2019-05-07 03:00:00', '2019-06-11 04:35:30'),
(7, 'Vestido COACHELA', '1490.00', 'Solera ajustada a la cintura con estampa floreada. ', NULL, '/images/products/dresses/dress_floreado_front_yellow.jpg', '/images/products/dresses/dress_floreado_back_yellow.jpg', '/images/products/dresses/dress_floreado_detail_yellow.jpg', 4, '2019-05-29 03:00:00', NULL),
(8, 'Vestido GRECIA', '2590.00', 'Vestido de gasa plisada celeste, escote halter con abertura en pecho y espalda.', NULL, '/images/products/dresses/dress_plisado_front_blue.jpg', '/images/products/dresses/dress_plisado_back_blue.jpg', '/images/products/dresses/dress_plisado_detail_blue.jpg', 4, '2019-04-23 03:00:00', NULL),
(9, 'Buzo BRADLY', '990.00', 'Buzo cropped de algodon negro con cordon en escote', 20, '/images/products/outerwear/hoodie_cruzado_front_black.jpg', '/images/products/outerwear/hoodie_cruzado_back_black.jpg', '/images/products/outerwear/hoodie_cruzado_detail_black.jpg', 3, '2019-05-29 03:00:00', NULL),
(10, 'Parka ARMY', '2800.00', 'Parka de gabardina verde militar', NULL, '/images/products/outerwear/jacket_parka_front_green.jpg', '/images/products/outerwear/jacket_parka_back_green.jpg', '/images/products/outerwear/jacket_parka_detail_green.jpg', 3, '2019-05-01 03:00:00', NULL),
(11, 'Pantalon WIDE', '1650.00', 'Jean negro pierna ancha, tiro extra alto', NULL, '/images/products/denim/denim_ancho_front_black.jpg', '/images/products/denim/denim_ancho_back_black.jpg', '/images/products/denim/denim_ancho_detail_black.jpg', 1, '2019-05-01 03:00:00', NULL),
(12, 'Jean BOYFRIEND', '1890.00', 'Jean rigido corte boyfriend, roturas al frente', NULL, '/images/products/denim/denim_boyfriend_front_blue.jpg', '/images/products/denim/denim_boyfriend_back_blue.jpg', '/images/products/denim/denim_boyfriend_detail_blue.jpg', 1, '2019-05-29 03:00:00', NULL),
(13, 'Pantalon SNOW', '1300.00', 'Jean skinny blanco elastizado', NULL, '/images/products/denim/denim_skinny_front_white.jpg', '/images/products/denim/denim_skinny_back_white.jpg', '/images/products/denim/denim_skinny_detail_white.jpg', 1, '2019-05-01 03:00:00', NULL),
(14, 'Campera SHINE', '3499.00', 'Chaqueta de denim con bordado de lentejuelas en frente y espalda.', NULL, 'UnkWIpAF0RaKHEsNCeTG7AcgdEb28tTlHzsxYKT7.jpeg', 'BHGLoeQz7DY50ZwP2U0xkBPKOypwHVP1uaA873J9.jpeg', 'PYlqreO6BfLLnuACGggJfDp4x2JONzuWqEcsvYC1.jpeg', 3, '2019-06-11 04:15:37', '2019-06-11 04:15:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `esAdmin` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
