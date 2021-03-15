-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2021 a las 15:42:29
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pizzeria`
--
CREATE DATABASE IF NOT EXISTS `pizzeria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pizzeria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebida`
--

CREATE TABLE `bebida` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `precio` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bebida`
--

INSERT INTO `bebida` (`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES
(1, 'Coca Cola', 'Lata 33 cl', 'cocacola.jpg', '1.50'),
(2, 'Fanta Naranja', 'Fanta lata 33cl', 'fanta.jpg', '1.50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_empleado`
--

CREATE TABLE `categoria_empleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_empleado`
--

INSERT INTO `categoria_empleado` (`id`, `nombre`) VALUES
(1, 'Repartidor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_pizza`
--

CREATE TABLE `categoria_pizza` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_pizza`
--

INSERT INTO `categoria_pizza` (`id`, `nombre`) VALUES
(1, 'Individual'),
(2, 'Doble'),
(3, 'Familiar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `codigo postal` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `localidad_id` int(11) NOT NULL,
  `provincia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidos`, `direccion`, `codigo postal`, `telefono`, `localidad_id`, `provincia_id`) VALUES
(1, 'Pep', 'Boix', 'Nou 45', '08500', '643456789', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `nif` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `localidad_id` int(11) NOT NULL,
  `categoria_empleado_id` int(11) NOT NULL,
  `tienda_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `apellidos`, `nif`, `telefono`, `localidad_id`, `categoria_empleado_id`, `tienda_id`) VALUES
(1, 'Oscar', 'Costa Sala', '345432678A', '679654324', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hamburguea`
--

CREATE TABLE `hamburguea` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `precio` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hamburguea`
--

INSERT INTO `hamburguea` (`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES
(1, 'Royal Burguer', 'Hamburguesa Royal Burguer', 'royal.jpg', '9.90'),
(2, 'Express Burguer', 'Burger exta vacuno 250gr', 'express.jpg', '13.50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `provincia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id`, `nombre`, `provincia_id`) VALUES
(1, 'Vic', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `reparto_id` int(11) DEFAULT NULL,
  `tienda_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `cliente_id`, `fecha`, `reparto_id`, `tienda_id`) VALUES
(1, 1, '2021-03-02 14:14:32', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_bebida`
--

CREATE TABLE `pedido_bebida` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `bebida_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido_bebida`
--

INSERT INTO `pedido_bebida` (`id`, `pedido_id`, `bebida_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 1),
(4, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_hamburguesa`
--

CREATE TABLE `pedido_hamburguesa` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `hamburguesa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido_hamburguesa`
--

INSERT INTO `pedido_hamburguesa` (`id`, `pedido_id`, `hamburguesa_id`) VALUES
(1, 1, 1),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_pizza`
--

CREATE TABLE `pedido_pizza` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `pizza_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido_pizza`
--

INSERT INTO `pedido_pizza` (`id`, `pedido_id`, `pizza_id`) VALUES
(1, 1, 1),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `categoria_pizza_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `precio` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pizza`
--

INSERT INTO `pizza` (`id`, `categoria_pizza_id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES
(1, 1, 'Napolitana', 'Pizza Napolitana', 'napolitana.jpg', '12.00'),
(2, 3, 'Veneciana', 'Pizza familiar Veneciana', 'veneciana.jpg', '25.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id`, `nombre`) VALUES
(1, 'Barcelona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparto`
--

CREATE TABLE `reparto` (
  `id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  `entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reparto`
--

INSERT INTO `reparto` (`id`, `empleado_id`, `entrega`) VALUES
(1, 1, '2021-03-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `id` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `codigo_postal` varchar(50) NOT NULL,
  `localidad_id` int(11) NOT NULL,
  `provincia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`id`, `direccion`, `codigo_postal`, `localidad_id`, `provincia_id`) VALUES
(1, 'Verdaguer 50', '08500', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebida`
--
ALTER TABLE `bebida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_empleado`
--
ALTER TABLE `categoria_empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_pizza`
--
ALTER TABLE `categoria_pizza`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `localidad_id` (`localidad_id`),
  ADD KEY `provincia_id` (`provincia_id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_empleado_id` (`categoria_empleado_id`),
  ADD KEY `localidad_id` (`localidad_id`),
  ADD KEY `tienda_id` (`tienda_id`);

--
-- Indices de la tabla `hamburguea`
--
ALTER TABLE `hamburguea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provincia_id` (`provincia_id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `reparto_id` (`reparto_id`),
  ADD KEY `tienda_id` (`tienda_id`);

--
-- Indices de la tabla `pedido_bebida`
--
ALTER TABLE `pedido_bebida`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bebida_id` (`bebida_id`),
  ADD KEY `pedido_id` (`pedido_id`);

--
-- Indices de la tabla `pedido_hamburguesa`
--
ALTER TABLE `pedido_hamburguesa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedido_id` (`pedido_id`),
  ADD KEY `hamburguesa_id` (`hamburguesa_id`);

--
-- Indices de la tabla `pedido_pizza`
--
ALTER TABLE `pedido_pizza`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedido_id` (`pedido_id`),
  ADD KEY `pizza_id` (`pizza_id`);

--
-- Indices de la tabla `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_pizza_id` (`categoria_pizza_id`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reparto`
--
ALTER TABLE `reparto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleado_id` (`empleado_id`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `localidad_id` (`localidad_id`),
  ADD KEY `provincia_id` (`provincia_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebida`
--
ALTER TABLE `bebida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria_empleado`
--
ALTER TABLE `categoria_empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria_pizza`
--
ALTER TABLE `categoria_pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `hamburguea`
--
ALTER TABLE `hamburguea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedido_bebida`
--
ALTER TABLE `pedido_bebida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pedido_hamburguesa`
--
ALTER TABLE `pedido_hamburguesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedido_pizza`
--
ALTER TABLE `pedido_pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reparto`
--
ALTER TABLE `reparto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`),
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`categoria_empleado_id`) REFERENCES `categoria_empleado` (`id`),
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`),
  ADD CONSTRAINT `empleado_ibfk_3` FOREIGN KEY (`tienda_id`) REFERENCES `tienda` (`id`);

--
-- Filtros para la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD CONSTRAINT `localidad_ibfk_1` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`reparto_id`) REFERENCES `reparto` (`id`),
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`tienda_id`) REFERENCES `tienda` (`id`);

--
-- Filtros para la tabla `pedido_bebida`
--
ALTER TABLE `pedido_bebida`
  ADD CONSTRAINT `pedido_bebida_ibfk_1` FOREIGN KEY (`bebida_id`) REFERENCES `bebida` (`id`),
  ADD CONSTRAINT `pedido_bebida_ibfk_2` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`id`);

--
-- Filtros para la tabla `pedido_hamburguesa`
--
ALTER TABLE `pedido_hamburguesa`
  ADD CONSTRAINT `pedido_hamburguesa_ibfk_1` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`id`),
  ADD CONSTRAINT `pedido_hamburguesa_ibfk_2` FOREIGN KEY (`hamburguesa_id`) REFERENCES `hamburguea` (`id`);

--
-- Filtros para la tabla `pedido_pizza`
--
ALTER TABLE `pedido_pizza`
  ADD CONSTRAINT `pedido_pizza_ibfk_1` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`id`),
  ADD CONSTRAINT `pedido_pizza_ibfk_2` FOREIGN KEY (`pizza_id`) REFERENCES `pizza` (`id`);

--
-- Filtros para la tabla `pizza`
--
ALTER TABLE `pizza`
  ADD CONSTRAINT `pizza_ibfk_1` FOREIGN KEY (`categoria_pizza_id`) REFERENCES `categoria_pizza` (`id`);

--
-- Filtros para la tabla `reparto`
--
ALTER TABLE `reparto`
  ADD CONSTRAINT `reparto_ibfk_1` FOREIGN KEY (`empleado_id`) REFERENCES `empleado` (`id`);

--
-- Filtros para la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD CONSTRAINT `tienda_ibfk_1` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`),
  ADD CONSTRAINT `tienda_ibfk_2` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
