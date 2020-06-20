-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 20-06-2020 a las 00:37:04
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `base_actual`
--

CREATE TABLE `base_actual` (
  `id` int(11) NOT NULL,
  `num_inventario` int(11) NOT NULL,
  `niv_4` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `observacion` varchar(50) NOT NULL,
  `serie` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `nom_usuario` varchar(50) NOT NULL,
  `obs_del_bien` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT '../imagenes/no_photo.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `base_actual`
--

INSERT INTO `base_actual` (`id`, `num_inventario`, `niv_4`, `descripcion`, `observacion`, `serie`, `marca`, `modelo`, `departamento`, `nom_usuario`, `obs_del_bien`, `foto`) VALUES
(1, 345, 2, 'De madera de 1.5 mts de altura x 3 ANCHO', 'Se encuentra en un excelente estado', '32sd45ac34', 'NA', 'NA', 'Catastro', 'Juan Miguel Rangel', 'ASDASDASD', '../imagenes/2b85b.jpeg'),
(3, 445, 1, 'Mesa redonda de madera', 'Se encuentra en un excelente estado', '5654cd', 'NA', 'NA', 'Catastro', 'Juan Miguel Rangel', 'NA', ''),
(5, 75, 1, 'impresora canon', 'Se encuentra en un estado regular', '45g9a9s0', 'canon', 'NA', 'Catastro', 'Juan Miguel Rangel', 'NA', 'NA'),
(6, 32, 32, '323232', '2332', '3232', '23', '32', '32', '23', '32', '../imagenes/no_photo.png'),
(7, 43, 43, 'ssa', 'sasa', 'assa', 'sas', 'assa', 'Compras', 'qq', '2332', '../imagenes/cf2a8.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ape_pat` varchar(50) NOT NULL,
  `ape_mat` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `tipo`, `nombre`, `ape_pat`, `ape_mat`, `departamento`) VALUES
(1, 'admin', 'admin', 'admin', 'Ricardo jotolon', 'Padrón', 'Hernández', 'Informatica'),
(3, 'sdd', 'sdsds', 'sdds', 'sdsd', 'sddsds', 'dssd', 'sddsds'),
(4, 'richard', 'rifa', 'user', 'more', 'rias', 'asa', 'asas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `base_actual`
--
ALTER TABLE `base_actual`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `base_actual`
--
ALTER TABLE `base_actual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
