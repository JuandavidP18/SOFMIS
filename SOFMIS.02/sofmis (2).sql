-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2023 a las 11:21:05
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sofmis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_venta`
--

CREATE TABLE `detalles_venta` (
  `id` int(11) NOT NULL,
  `venta_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalles_venta`
--

INSERT INTO `detalles_venta` (`id`, `venta_id`, `producto_id`, `cantidad`, `subtotal`) VALUES
(1, 1, 6, 12, 60000.00),
(2, 1, 4, 3, 7500.00),
(3, 1, 4, 4, 10000.00),
(4, 2, 6, 12, 60000.00),
(5, 2, 4, 3, 7500.00),
(6, 2, 4, 4, 10000.00),
(7, 3, 4, 12, 30000.00),
(8, 3, 6, 45, 225000.00),
(9, 3, 8, 13, 26000.00),
(10, 4, 4, 12, 30000.00),
(11, 4, 6, 45, 225000.00),
(12, 4, 8, 13, 26000.00),
(13, 5, 3, 12, 96000.00),
(14, 5, 1, 5, 10000.00),
(15, 5, 7, 6, 21000.00),
(16, 5, 8, 4, 8000.00),
(17, 5, 9, 3, 3000.00),
(18, 6, 3, 12, 96000.00),
(19, 6, 1, 5, 10000.00),
(20, 6, 7, 6, 21000.00),
(21, 6, 8, 4, 8000.00),
(22, 6, 9, 3, 3000.00),
(23, 7, 3, 12, 96000.00),
(24, 7, 1, 5, 10000.00),
(25, 7, 7, 6, 21000.00),
(26, 7, 8, 4, 8000.00),
(27, 7, 9, 3, 3000.00),
(28, 8, 3, 12, 96000.00),
(29, 8, 1, 5, 10000.00),
(30, 8, 7, 6, 21000.00),
(31, 8, 8, 4, 8000.00),
(32, 8, 9, 3, 3000.00),
(33, 9, 4, 12, 30000.00),
(34, 9, 5, 1, 1500.00),
(35, 9, 7, 3, 10500.00),
(36, 9, 8, 1, 2000.00),
(37, 9, 9, 1, 1000.00),
(38, 10, 4, 12, 30000.00),
(39, 10, 5, 1, 1500.00),
(40, 10, 7, 3, 10500.00),
(41, 10, 8, 1, 2000.00),
(42, 10, 9, 1, 1000.00),
(43, 11, 1, 1, 2000.00),
(44, 11, 4, 1, 2500.00),
(45, 12, 1, 1, 2000.00),
(46, 12, 4, 1, 2500.00),
(47, 14, 3, 1, 8000.00),
(48, 15, 6, 23, 115000.00),
(49, 15, 8, 3, 6000.00),
(50, 16, 6, 23, 115000.00),
(51, 16, 8, 3, 6000.00),
(52, 17, 6, 23, 115000.00),
(53, 17, 8, 3, 6000.00),
(54, 18, 6, 23, 115000.00),
(55, 18, 8, 3, 6000.00),
(56, 19, 6, 23, 115000.00),
(57, 19, 8, 3, 6000.00),
(58, 20, 6, 23, 115000.00),
(59, 20, 8, 3, 6000.00),
(60, 21, 6, 23, 115000.00),
(61, 21, 8, 3, 6000.00),
(62, 22, 6, 23, 115000.00),
(63, 22, 8, 3, 6000.00),
(64, 23, 6, 23, 115000.00),
(65, 23, 8, 3, 6000.00),
(66, 24, 6, 23, 115000.00),
(67, 24, 8, 3, 6000.00),
(68, 25, 6, 23, 115000.00),
(69, 25, 8, 3, 6000.00),
(70, 26, 6, 23, 115000.00),
(71, 26, 8, 3, 6000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `stock`) VALUES
(3, '', 0.00, 0),
(4, 'Resaltador', 2500.00, 6),
(5, 'Cinta adhesiva', 1500.00, 118),
(6, 'Pegamento', 5000.00, -330),
(7, 'Tijeras', 3500.00, 60),
(8, 'Corrector líquido', 2000.00, 20),
(9, 'Grapas', 1000.00, 136),
(10, 'Regla', 1200.00, 110),
(11, 'block iris', 5000.00, 79),
(12, 'block iris', 5000.00, 79),
(13, 'block iris', 5000.00, 79),
(14, 'block iris', 5000.00, 79),
(15, 'block iris', 5000.00, 79),
(16, 'block iris', 5000.00, 79),
(17, 'block iris', 5000.00, 79),
(18, 'block iris', 5000.00, 79),
(19, 'block iris', 5000.00, 79);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_sesion`
--

CREATE TABLE `registros_sesion` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `username`, `role`, `password`) VALUES
(1, 'sierrajuanp18@hotmail.com', 'juandavidp18', 'admin', '$2y$10$382deI.LPDca6Wy85TKW9.jqTs1roqkViDDBD58U2XrG9ugOn68HS'),
(2, 'juandavidsierrapinzon@gmail.com', 'sierrajuanp18', 'cajero', '$2y$10$rd9Hw9VyOU1MgDRppTkNMeFxsJDmeCu0spMdIjDhQmmx5ruhBc.EW');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `cliente`, `total`) VALUES
(1, 'juan', 77500.00),
(2, 'juan', 77500.00),
(3, 'juan', 281000.00),
(4, 'juan', 281000.00),
(5, 'juan', 138000.00),
(6, 'juan', 138000.00),
(7, 'juan', 138000.00),
(8, 'juan', 138000.00),
(9, 'juan', 45000.00),
(10, 'juan', 45000.00),
(11, 'sadasdas', 4500.00),
(12, 'sadasdas', 4500.00),
(13, 'sadas', 0.00),
(14, 'juan', 8000.00),
(15, '13123', 121000.00),
(16, '13123', 121000.00),
(17, '13123', 121000.00),
(18, '13123', 121000.00),
(19, '13123', 121000.00),
(20, '13123', 121000.00),
(21, '13123', 121000.00),
(22, '13123', 121000.00),
(23, '13123', 121000.00),
(24, '13123', 121000.00),
(25, '13123', 121000.00),
(26, '13123', 121000.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalles_venta`
--
ALTER TABLE `detalles_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venta_id` (`venta_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros_sesion`
--
ALTER TABLE `registros_sesion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalles_venta`
--
ALTER TABLE `detalles_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `registros_sesion`
--
ALTER TABLE `registros_sesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalles_venta`
--
ALTER TABLE `detalles_venta`
  ADD CONSTRAINT `detalles_venta_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`id`),
  ADD CONSTRAINT `detalles_venta_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `registros_sesion`
--
ALTER TABLE `registros_sesion`
  ADD CONSTRAINT `registros_sesion_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
