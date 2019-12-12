-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2019 a las 03:41:20
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id_variable` int(2) NOT NULL,
  `valor` double NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id_variable`, `valor`, `hora`, `fecha`, `estado`) VALUES
(3, 45.35, '14:25:37', '2019-12-09', 1),
(3, 1.5, '14:25:50', '2019-12-09', 1),
(7, 5, '12:24:57', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo` int(2) NOT NULL,
  `tipo` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ci` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `username` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ci`, `nombre`, `apellido`, `username`, `password`, `correo`) VALUES
('1720546017', 'Danny', 'Quishpe', 'Dquishpe', '278743', 'danny.quishpe.dq@gmail.com'),
('1723081400', 'damian', 'toaza', 'atoaza', 'andi123', 'damitoaza@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variable`
--

CREATE TABLE `variable` (
  `id_variable` int(2) NOT NULL,
  `tipo_variable` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `variable`
--

INSERT INTO `variable` (`id_variable`, `tipo_variable`) VALUES
(1, 'temperatura'),
(2, 'volumen'),
(3, 'presion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD KEY `id_variable` (`id_variable`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `variable`
--
ALTER TABLE `variable`
  ADD PRIMARY KEY (`id_variable`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
