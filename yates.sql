-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2023 a las 01:24:55
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yates`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accessories`
--

CREATE TABLE `accessories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `accessories`
--

INSERT INTO `accessories` (`id`, `name`, `information`, `price`, `stock`, `photo`) VALUES
(1, 'qwea', 'qwe', 123, 123, 'public/images/a2.jpg'),
(3, 'asd', '123as', 123, 123, 'public/images/a2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accessories_sales`
--

CREATE TABLE `accessories_sales` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `method` int(11) NOT NULL,
  `id_accesories` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `accessories_sales`
--

INSERT INTO `accessories_sales` (`id`, `date`, `method`, `id_accesories`, `id_users`) VALUES
(1, '2023-09-20', 0, 1, 41),
(2, '2023-09-19', 1, 3, 42),
(3, '2023-09-21', 0, 1, 42),
(4, '2023-09-21', 0, 1, 42),
(5, '2023-09-21', 0, 1, 42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`id`, `brand`) VALUES
(1, 'Lürssen'),
(2, 'Amels'),
(3, 'Feadship'),
(4, 'Oceanco'),
(5, 'Nobiskrug'),
(6, 'Benetti');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mechanics`
--

CREATE TABLE `mechanics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_specialty` int(11) NOT NULL,
  `id_sedes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mechanics`
--

INSERT INTO `mechanics` (`id`, `name`, `id_specialty`, `id_sedes`) VALUES
(1, 'Carlos', 1, 2),
(3, 'prueba', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `payment_method`
--

INSERT INTO `payment_method` (`id`, `method`) VALUES
(1, 'cash'),
(2, 'card');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `hour` time NOT NULL,
  `id_mechanics` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `quotes`
--

INSERT INTO `quotes` (`id`, `date`, `hour`, `id_mechanics`, `id_users`) VALUES
(1, '2023-09-15', '11:51:30', 1, 42),
(2, '2023-09-12', '11:51:30', 1, 40),
(3, '2023-09-16', '25:29:35', 3, 42),
(4, '2023-09-19', '17:53:00', 3, 42),
(5, '2023-09-19', '18:12:00', 3, 42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` int(11) NOT NULL,
  `rol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `rol`) VALUES
(1, 'standard'),
(2, 'Administraitor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id` int(11) NOT NULL,
  `sede` varchar(255) NOT NULL,
  `direction` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `sede`, `direction`) VALUES
(2, 'secondary', 'calle 45 cra 10 75 - 11b'),
(3, 'asds', 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specialtys`
--

CREATE TABLE `specialtys` (
  `id` int(11) NOT NULL,
  `specialty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `specialtys`
--

INSERT INTO `specialtys` (`id`, `specialty`) VALUES
(1, 'General'),
(2, 'paint'),
(3, 'electronics');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_documents`
--

CREATE TABLE `type_documents` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `type_documents`
--

INSERT INTO `type_documents` (`id`, `type`) VALUES
(1, 'T.I'),
(2, 'C.C'),
(3, 'C.E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `document` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `id_type_documents` int(11) NOT NULL,
  `id_rols` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `document`, `email`, `password`, `status`, `id_type_documents`, `id_rols`) VALUES
(1, 'admin', 123, 'admin@gmail.com', 'admin123', 1, 2, 2),
(39, 'Certificaciones', 123, 'asdasd@example.com', 'asdasd123', 1, 1, 1),
(40, 'Certificaciones', 123, 'asdasd@example.com', 'asdasd123', 1, 1, 1),
(41, 'Certificaciones', 123, 'asdasd@example.com', 'asdasd123', 1, 1, 1),
(42, 'milton', 123, 'milton@gmail.com', 'asd', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `yachts`
--

CREATE TABLE `yachts` (
  `id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `information` varchar(255) NOT NULL,
  `serie` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_brands` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `yachts`
--

INSERT INTO `yachts` (`id`, `model`, `price`, `information`, `serie`, `photo`, `id_users`, `id_brands`) VALUES
(1, 'modelo1', 12000, 'informacion', 1, 'public/images/p1.jpg', 1, 1),
(2, 'modelo2', 12000, 'asd', 12, 'public/images/p2.jpg', 1, 2),
(3, 'modelo3', 12000, 'informacion', 123, 'public/images/p3.jpg', 1, 1),
(4, 'modelo4', 12000, 'información', 1234, 'public/images/p4.jpg', 1, 3),
(5, 'modelo5', 12000, 'información', 11234, 'public/images/p5.jpg', 1, 5),
(6, 'modelo6', 12000, 'informacion', 123456, 'public/images/p6.jpg', 1, 6),
(11, 'asdasdasd', 12, '123', 123, 'public/images/p1.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `yacht_sales`
--

CREATE TABLE `yacht_sales` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_payment_method` int(11) NOT NULL,
  `id_yachts` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `yacht_sales`
--

INSERT INTO `yacht_sales` (`id`, `date`, `id_payment_method`, `id_yachts`, `id_users`) VALUES
(1, '2023-09-19', 2, 1, 42),
(2, '2023-09-20', 1, 2, 40);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `accessories_sales`
--
ALTER TABLE `accessories_sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_accesories` (`id_accesories`),
  ADD KEY `id_users` (`id_users`);

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mechanics`
--
ALTER TABLE `mechanics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_specialty` (`id_specialty`,`id_sedes`) USING BTREE,
  ADD KEY `id_sedes` (`id_sedes`);

--
-- Indices de la tabla `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `quotes_ibfk_3` (`id_mechanics`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `specialtys`
--
ALTER TABLE `specialtys`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `type_documents`
--
ALTER TABLE `type_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type_documents` (`id_type_documents`,`id_rols`),
  ADD KEY `id_rols` (`id_rols`);

--
-- Indices de la tabla `yachts`
--
ALTER TABLE `yachts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`,`id_brands`),
  ADD KEY `yachts_ibfk_2` (`id_brands`);

--
-- Indices de la tabla `yacht_sales`
--
ALTER TABLE `yacht_sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_payment_method` (`id_payment_method`),
  ADD KEY `id_yachts` (`id_yachts`),
  ADD KEY `id_users` (`id_users`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `accessories_sales`
--
ALTER TABLE `accessories_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `mechanics`
--
ALTER TABLE `mechanics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `specialtys`
--
ALTER TABLE `specialtys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `type_documents`
--
ALTER TABLE `type_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `yachts`
--
ALTER TABLE `yachts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `yacht_sales`
--
ALTER TABLE `yacht_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accessories_sales`
--
ALTER TABLE `accessories_sales`
  ADD CONSTRAINT `accessories_sales_ibfk_1` FOREIGN KEY (`id_accesories`) REFERENCES `accessories` (`id`),
  ADD CONSTRAINT `accessories_sales_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `mechanics`
--
ALTER TABLE `mechanics`
  ADD CONSTRAINT `mechanics_ibfk_1` FOREIGN KEY (`id_specialty`) REFERENCES `specialtys` (`id`),
  ADD CONSTRAINT `mechanics_ibfk_2` FOREIGN KEY (`id_sedes`) REFERENCES `sedes` (`id`);

--
-- Filtros para la tabla `quotes`
--
ALTER TABLE `quotes`
  ADD CONSTRAINT `quotes_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `quotes_ibfk_3` FOREIGN KEY (`id_mechanics`) REFERENCES `mechanics` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_rols`) REFERENCES `rols` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_type_documents`) REFERENCES `type_documents` (`id`);

--
-- Filtros para la tabla `yachts`
--
ALTER TABLE `yachts`
  ADD CONSTRAINT `yachts_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `yachts_ibfk_2` FOREIGN KEY (`id_brands`) REFERENCES `brands` (`id`);

--
-- Filtros para la tabla `yacht_sales`
--
ALTER TABLE `yacht_sales`
  ADD CONSTRAINT `yacht_sales_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `yacht_sales_ibfk_2` FOREIGN KEY (`id_yachts`) REFERENCES `yachts` (`id`),
  ADD CONSTRAINT `yacht_sales_ibfk_3` FOREIGN KEY (`id_payment_method`) REFERENCES `payment_method` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
