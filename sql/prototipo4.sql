-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2017 a las 21:00:33
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prototipo4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_solicitud`
--

CREATE TABLE `datos_solicitud` (
  `id_solicitud` int(11) NOT NULL,
  `nombre_usuario` varchar(60) DEFAULT NULL,
  `apellido_usuario` varchar(60) DEFAULT NULL,
  `opcion_contacto` varchar(45) DEFAULT NULL,
  `contacto` varchar(60) DEFAULT NULL,
  `cedula_usuario` varchar(50) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `tipo_solicitud` varchar(20) DEFAULT NULL,
  `asunto` varchar(45) DEFAULT NULL,
  `solicitud` varchar(800) DEFAULT NULL,
  `archivos_adjuntos` longblob,
  `fecha_radicado` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_solicitud`
--

INSERT INTO `datos_solicitud` (`id_solicitud`, `nombre_usuario`, `apellido_usuario`, `opcion_contacto`, `contacto`, `cedula_usuario`, `direccion`, `genero`, `tipo_solicitud`, `asunto`, `solicitud`, `archivos_adjuntos`, `fecha_radicado`) VALUES
(1, '1', '2', '3', '4', '5', '6', '7', '', '8', '9', NULL, '2017-06-22 18:55:24'),
(2, '123', '123', 'Celular', '123123', '123', '123123', 'Hombre', '', '31231', '123123123123', NULL, '2017-06-22 18:55:47'),
(3, '123', '12312', 'Celular', '3123123', '312312', '3213123', 'Mujer', 'Queja', '3123123', '3123123123123', NULL, '2017-06-22 19:00:45'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Felicitaciones', '445', '66\r\n23\r\n23\r\n23\r\n23\r\n', NULL, '2017-06-22 19:08:42'),
(5, '23123', '2314124', 'Telefono', '12434124', '124124', '14124', 'Mujer', 'Peticion', '4124214', '4215414124124', NULL, '2017-06-22 19:09:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `nombre_funcionario` varchar(50) DEFAULT NULL,
  `apellido_funcionario` varchar(50) DEFAULT NULL,
  `cedula_funcionario` int(11) DEFAULT NULL,
  `correo_funcionario` varchar(50) DEFAULT NULL,
  `area_funcionario` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `id_radicado` int(11) NOT NULL,
  `fecha_limite` timestamp NULL DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `respuesta_funcionario` varchar(800) DEFAULT NULL,
  `tipo_respuesta` varchar(50) DEFAULT NULL,
  `id_solicitud1` int(11) DEFAULT NULL,
  `id_funcionario1` int(11) DEFAULT NULL,
  `id_estado1` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seguimiento`
--

INSERT INTO `seguimiento` (`id_radicado`, `fecha_limite`, `estado`, `respuesta_funcionario`, `tipo_respuesta`, `id_solicitud1`, `id_funcionario1`, `id_estado1`) VALUES
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contrasena`, `rol`) VALUES
(1, 'william', '123', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_solicitud`
--
ALTER TABLE `datos_solicitud`
  ADD PRIMARY KEY (`id_solicitud`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`id_radicado`),
  ADD KEY `id_solicitud1` (`id_solicitud1`),
  ADD KEY `id_funcionario1` (`id_funcionario1`),
  ADD KEY `id_estado1` (`id_estado1`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_solicitud`
--
ALTER TABLE `datos_solicitud`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `id_radicado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
