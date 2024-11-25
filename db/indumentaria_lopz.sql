-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2024 a las 21:04:08
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

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
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `id_catalogo`, `descripcion`, `talles`, `stock`, `imagen`, `precio`) VALUES
(1, 'Mom Black Sick', 1, 'Jean negro Mom, super cómodo y a la moda.', 'S - M - L', 15, 'mom_black_sick1.webp', 10000),
(2, 'Cargo Kravit', 1, '', 'S - M - L - X', 25, 'cargo_kravitz.jpg', 9500),
(3, 'Clásico White', 1, 'El típico jean blanco que no puede faltar en tu placar.', 'S al XL', 15, 'clasico_white.jpg', 8000),
(4, 'Chomba Tracy', 2, 'Una canchera remera tipo chomba.', 'S - M - L', 40, 'chomba_tracy.webp', 5000),
(5, 'Remera 32', 2, 'Remera tipo top con numero 32.', 'S - M - L', 10, 'remera_32.png', 6500),
(6, 'Remera Dream Lover', 2, '', 'S - M', 15, 'remeron_lucky1.webp', 5500),
(7, 'Artemis', 1, 'Pantalon engomado.', 'S - M - L', 22, 'artemis.webp', 10000),
(8, 'Camiseta Lia', 2, 'Camiseta super canchera.', 'S - M - L', 20, 'camiseta_lia1.webp', 5000),
(9, 'Jogger Ribb', 1, 'Jogger super comodo y lindo para salidas casuales,', 'S - M - L', 20, 'jogger_blue_ribb1.jpg', 7500),
(10, 'Mini Killer', 1, '', 'S - M - L', 15, 'mini_killer.webp', 7000),
(11, 'Polera Joy', 2, '', 'S - M - L', 15, 'polera_joy1.webp', 4000);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
