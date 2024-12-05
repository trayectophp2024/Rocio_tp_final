-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2024 a las 17:31:35
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
-- Base de datos: `indumentaria_lopz`
--
CREATE DATABASE IF NOT EXISTS `indumentaria_lopz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `indumentaria_lopz`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id`, `nombre`) VALUES
(1, 'Jeans'),
(2, 'Remeras'),
(3, 'Camperas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `id_catalogo` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `talles` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `precio` int(11) NOT NULL,
  `destacado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `id_catalogo`, `descripcion`, `talles`, `stock`, `imagen`, `precio`, `destacado`) VALUES
(1, 'Mom Black Sick', 1, 'Jean negro Mom, super cómodo y a la moda.', 'S - M - L', 15, 'mom_black_sick1.webp', 12999, 1),
(2, 'Cargo Kravit', 1, 'Pantalon estilo cargo kravitz', 'S - M - L - X', 25, '1733371751.png', 15999, 0),
(3, 'Jean Clásico White', 1, 'Jean estilo clasico white', 'S al XL', 15, '1733371807.png', 15500, 1),
(4, 'Chomba Tracy', 2, 'Remera estilo chomba tracy', 'S - M - L', 40, '1733371845.png', 8500, 2),
(5, 'Remera 32', 2, 'Remera estilo top N°32', 'S - M - L', 10, '1733371898.png', 8500, 0),
(6, 'Remera Lucky', 2, 'Remera estilo oversize lucky', 'S - M', 15, '1733371988.png', 14999, 2),
(7, 'Artemis', 1, 'Pantalon engomado elastizado', 'S - M - L', 22, '1733372104.png', 13999, 1),
(8, 'Camiseta Lia', 2, 'Camiseta super canchera.', 'S - M - L', 20, '1733372188.png', 7999, 2),
(9, 'Jogger Ribb', 1, 'Joggin estilo cargo ribb', 'S - M - L', 20, '1733372237.png', 13500, 1),
(10, 'Mini Killer', 1, 'Mini falda estilo urbano Killer', 'S - M - L', 15, '1733372393.png', 10000, 0),
(11, 'Polera Joy', 2, 'Polera estilo clasico Joy', 'S - M - L', 15, '1733372541.png', 7500, 2),
(12, 'Skype', 3, 'Campera estilo urbano Skype', 'S al X', 50, '1733373879.png', 19999, 3),
(13, 'Camisa Hell', 3, 'Camisa infernal estilo Hell', 'S-L', 45, '1733373983.png', 12500, 3),
(14, 'Artemis', 3, 'Campera estilo San Francisco', 'S-M', 30, '1733374047.png', 12999, 3),
(15, 'Remera Fabulous', 3, 'Remera estilo neoyorkino', 'S-M-L', 20, '1733374169.png', 7999, 0),
(16, 'Remera Days', 2, 'Remera oversize estilo frances', 'S al XL', 55, '1733374228.png', 10000, 0),
(18, 'Remera Good Karma', 2, 'Remera oversize', 'S-L', 45, '1733374350.png', 9500, 0),
(19, 'Short ', 1, 'Short estilo urbano', 'S-M-L', 60, '1733374451.png', 10500, 0),
(20, 'Short White', 1, 'Short estilo urbano white', 'S al X', 45, '1733374521.png', 8999, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `nombre_completo` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nombre_usuario`, `nombre_completo`, `password`) VALUES
(1, 'rocio@correo.com', 'rocio', 'rocio lopez', '$2y$10$OPmedUYkL.iYQCakP.YqwOdnO2amsciZqeimxtFgc.zJdg6iNRLKy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_catalogo` (`id_catalogo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_catalogo` FOREIGN KEY (`id_catalogo`) REFERENCES `catalogo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
