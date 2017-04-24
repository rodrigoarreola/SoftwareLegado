-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2017 a las 21:25:38
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ptcsupport`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnocursos`
--

CREATE TABLE `alumnocursos` (
  `id` int(11) NOT NULL,
  `idmateria` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `idptc` int(11) NOT NULL,
  `cuatrimestre` varchar(45) NOT NULL,
  `materia` varchar(45) NOT NULL,
  `horario` varchar(45) NOT NULL,
  `grupo` varchar(45) NOT NULL,
  `politicas` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `idptc`, `cuatrimestre`, `materia`, `horario`, `grupo`, `politicas`) VALUES
(1, 8, '8', 'IA', '10-12', 'A', ''),
(2, 8, '8', 'Mantenimiento', '08-10', 'A', ''),
(3, 8, '8', 'Planeacion', '12-16', 'A', ''),
(4, 8, '8', 'Móviles', '09-11', 'A', ''),
(5, 11, '5', 'Redes', '10-12', 'A', ''),
(6, 11, '5', 'Algebra', '08- 12', 'B', ''),
(7, 8, '2', 'as', '09-11', 'sad', ''),
(8, 8, '1', 'Perro', '16-18', 'Z', ''),
(9, 8, '1', 'MatemÃ¡ticas', '18-20', 'Q', 'No comer\r\nNo hablar \r\n'),
(10, 8, '8', 'Rein', '10-12', 'A', 'fgh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `cuatrimestre` varchar(10) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `matricula`, `cuatrimestre`, `email`, `tipo`, `contrasena`) VALUES
(8, 'Argelia', 'Najera', '0987', NULL, 'asd@asd', 'PTC', '0987'),
(9, 'Daniel', 'Nandayapa', '123', '8', 'asd@asd', 'Alumno', 'zxc'),
(10, 'Fernando', 'Herrera', '098765', '8', 'asd@asd', 'Alumno', 'asd'),
(11, 'Miguel', 'Kioshy', '9090', NULL, 'nakamura@asd.com', 'PTC', 'kiokio'),
(12, 'Rodrigo', 'Arreola', '143415', '8', 'rodrigo@yopmail.com', 'Alumno', 'demo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnocursos`
--
ALTER TABLE `alumnocursos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnocursos`
--
ALTER TABLE `alumnocursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
