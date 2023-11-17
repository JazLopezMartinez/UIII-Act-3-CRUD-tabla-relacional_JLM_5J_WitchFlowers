-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2023 a las 04:28:06
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP DATABASE IF EXISTS bd_witchflowers;
CREATE DATABASE IF NOT EXISTS bd_witchflowers;
USE bd_witchflowers;

--
-- Base de datos: `bd_witchflowers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flor_temporada`
--

CREATE TABLE `flor_temporada` (
  `idflortempo` bigint(20) UNSIGNED NOT NULL,
  `idpedido` varchar(55) NOT NULL,
  `temporada` varchar(55) NOT NULL,
  `tipoflor` varchar(55) NOT NULL,
  `nombreped` varchar(55) NOT NULL,
  `cantidadped` int(2) NOT NULL,
  `nota` varchar(60) NOT NULL,
  `tipopago` varchar(55) NOT NULL,
  `precio` decimal(5,0) NOT NULL,
  `existencia` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `flor_temporada`
--

INSERT INTO `flor_temporada` (`idflortempo`, `idpedido`, `temporada`, `tipoflor`, `nombreped`, `cantidadped`, `nota`, `tipopago`, `precio`, `existencia`) VALUES
(1, '495', 'Primavera', 'Narciso', 'Erick Sanchez', 18, 'El ramo en forma de triagulo por favor', 'Tarjeta de credito', 1200, 99.00),
(2, '496', 'Otoño', 'Dalia', 'May Ramírez', 14, 'Un ramo redondo por favor', 'efectivo', 500, 96.00),
(3, '497', 'Invierno', 'Begonia', 'Javier Lopez', 6, 'Sin Nota', 'Efectivo', 120, 100.00),
(4, '498', 'Verano', 'Girasol', 'Haydee Jimenez', 2, 'Gracias', 'Efectivo', 78, 100.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_vendidos`
--

CREATE TABLE `productos_vendidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` bigint(20) UNSIGNED NOT NULL,
  `id_venta` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `productos_vendidos`
--

INSERT INTO `productos_vendidos` (`id`, `id_producto`, `cantidad`, `id_venta`) VALUES
(1, 1, 1, 25),
(2, 4, 2, 25),
(3, 3, 1, 25),
(4, 4, 2, 26),
(5, 1, 1, 28),
(6, 1, 1, 29),
(7, 2, 4, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `total` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `total`) VALUES
(15, '2023-11-17 04:16:00', 1476.00),
(16, '2023-11-17 04:16:01', 1476.00),
(17, '2023-11-17 04:16:01', 1476.00),
(18, '2023-11-17 04:16:01', 1476.00),
(19, '2023-11-17 04:16:37', 1476.00),
(20, '2023-11-17 04:16:38', 1476.00),
(21, '2023-11-17 04:16:38', 1476.00),
(22, '2023-11-17 04:16:38', 1476.00),
(23, '2023-11-17 04:16:56', 1476.00),
(24, '2023-11-17 04:16:57', 1476.00),
(25, '2023-11-17 04:17:20', 1476.00),
(26, '2023-11-17 04:19:54', 156.00),
(27, '2023-11-17 04:20:34', 0.00),
(28, '2023-11-17 04:20:41', 1200.00),
(29, '2023-11-17 04:21:27', 1200.00),
(30, '2023-11-17 04:21:41', 2000.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `flor_temporada`
--
ALTER TABLE `flor_temporada`
  ADD PRIMARY KEY (`idflortempo`);

--
-- Indices de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `flor_temporada`
--
ALTER TABLE `flor_temporada`
  MODIFY `idflortempo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD CONSTRAINT `productos_vendidos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `flor_temporada` (`idflortempo`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_vendidos_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
