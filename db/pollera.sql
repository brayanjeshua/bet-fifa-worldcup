-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2019 a las 02:38:50
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pollera`
--
CREATE DATABASE IF NOT EXISTS `pollera` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pollera`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llaves`
--

CREATE TABLE `llaves` (
  `id` int(11) NOT NULL,
  `llave` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `llaves`
--

INSERT INTO `llaves` (`id`, `llave`) VALUES
(1, '0A1wFmH4'),
(2, '3g9BE8LiHW'),
(3, 'Nh5cB5'),
(4, 'ppGGi2No'),
(5, 'Wl4jFtkkW'),
(6, 'tMJE7mvQDh'),
(7, '3pBaLuB'),
(8, '6Kf9bE05Ej'),
(9, 'E2R6ukLo'),
(10, 'mx9Q7FOs2A'),
(11, 'Ss30kj7SyU'),
(12, 'pxz3jxS7x'),
(13, '1QMD190973'),
(14, 'j0dPSd4JQ'),
(15, '86MVf4Dh'),
(16, '1siA2yDzTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `idPartidos` int(20) NOT NULL,
  `equipo1` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `equipo2` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `resultado` int(10) DEFAULT NULL,
  `faseRonda` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`idPartidos`, `equipo1`, `equipo2`, `fecha`, `resultado`, `faseRonda`) VALUES
(5, 'RUSIA ', 'ARABIA SAUDITA ', '2018-06-14', NULL, 1),
(6, 'EGIPTO ', 'URUGUAY  ', '2018-06-15', NULL, 1),
(7, 'MARRUECOS ', 'IRAN', '2018-06-15', NULL, 1),
(8, 'PORTUGAL ', 'ESPAÃ‘A', '2018-06-15', NULL, 1),
(9, 'FRANCIA ', 'AUSTRALIA', '2018-06-16', NULL, 1),
(10, 'ARGENTINA', 'ISLANDIA', '2018-06-16', NULL, 1),
(11, 'PERU', 'DINAMARCA', '2018-06-16', NULL, 1),
(12, 'CROACIA ', 'NIGERIA', '2018-06-16', NULL, 1),
(13, 'COSTA RICA', 'SERBIA', '2018-06-17', NULL, 1),
(14, 'ALEMANIA ', 'MEXICO', '2018-06-17', NULL, 1),
(15, 'BRASIL ', 'SUIZA', '2018-06-17', NULL, 1),
(16, 'SUECIA', 'COREA DEL SUR', '2018-06-18', NULL, 1),
(17, 'BELGICA', 'PANAMA', '2018-06-18', NULL, 1),
(18, 'TUÑEZ', 'INGLATERRA', '2018-06-18', NULL, 1),
(19, 'COLOMBIA', 'JAPON', '2018-06-19', NULL, 1),
(20, 'POLONIA ', 'SENEGAL', '2018-06-19', NULL, 1),
(21, 'RUSIA  ', 'EGIPTO', '2018-06-19', NULL, 2),
(22, 'PORTUGAL', 'MARRUECOS', '2018-06-20', NULL, 2),
(23, 'URUGUAY', 'ARABIA SAUDITA', '2018-06-20', NULL, 2),
(24, 'IRAN', 'ESPAÃ‘A', '2018-06-20', NULL, 2),
(25, 'DINAMARCA ', 'AUSTRALIA', '2018-06-21', NULL, 2),
(26, 'FRANCIA', 'PERU', '2018-06-21', NULL, 2),
(27, 'ARGENTINA', 'CROACIA', '2018-06-21', NULL, 2),
(28, 'BRASIL', 'COSTA RICA', '2018-06-22', NULL, 2),
(29, 'NIGERIA', 'ISLANDIA', '2018-06-22', NULL, 2),
(30, 'SERBIA', 'SUIZA', '2018-06-22', NULL, 2),
(31, 'BELGICA', 'TUNEZ', '2018-06-23', NULL, 2),
(32, 'COREA DEL SUR', 'MEXICO', '2018-06-23', NULL, 2),
(33, 'ALEMANIA', 'SUECIA', '2018-06-23', NULL, 2),
(34, 'INGLATERRA', 'PANAMA', '2018-06-24', NULL, 2),
(35, 'JAPON ', 'SENEGAL', '2018-06-24', NULL, 2),
(36, 'POLONIA', 'COLOMBIA', '2018-06-25', NULL, 2),
(37, 'ARABIA SAUDITA', 'URUGUAY', '2018-06-25', NULL, 3),
(38, 'EGIPTO', 'RUSIA', '2018-06-25', NULL, 3),
(39, 'IRAN', 'PORTUGAL', '2018-06-25', NULL, 3),
(40, 'ESPAÃ‘A', 'MARRUECOS', '2018-06-25', NULL, 3),
(41, 'AUSTRALIA', 'PERU', '2018-06-26', NULL, 3),
(42, 'DINAMARCA', 'FRANCIA', '2018-06-26', NULL, 3),
(43, 'NIGERIA', 'ARGENTIDA', '2018-06-26', NULL, 3),
(44, 'ISLANDIA', 'CROACIA', '2018-06-26', NULL, 3),
(45, 'COREA DEL SUR', 'ALEMANIA', '2018-06-27', NULL, 3),
(46, 'MEXICO', 'SUECIA', '2018-06-27', NULL, 3),
(47, 'SUIZA', 'COSTA RICA', '2018-06-27', NULL, 3),
(48, 'SERBIA', 'BRAZIL', '2018-06-27', NULL, 3),
(49, 'SENEGAL', 'BOLOMBIA', '2018-06-28', NULL, 3),
(50, 'JAPON', 'POLONIA', '2018-06-28', NULL, 3),
(51, 'INGLATERRA', 'BELGICA', '2018-06-28', NULL, 3),
(52, 'PANAMA', 'TUNEZ', '2018-06-28', NULL, 3),
(53, '', '', '0000-00-00', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pollas`
--

CREATE TABLE `pollas` (
  `idPollas` int(20) NOT NULL,
  `idPartidos` int(20) NOT NULL,
  `id` int(11) NOT NULL COMMENT 'ID DE USUARIOS',
  `apuesta` int(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pollas`
--

INSERT INTO `pollas` (`idPollas`, `idPartidos`, `id`, `apuesta`) VALUES
(1, 53, 2, 1),
(2, 53, 3, 1),
(3, 53, 4, 1),
(4, 53, 5, 1),
(5, 53, 6, 1),
(6, 53, 7, 1),
(7, 53, 8, 1),
(8, 53, 9, 1),
(9, 53, 10, 1),
(10, 53, 11, 1),
(11, 53, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `last_session` datetime DEFAULT NULL,
  `activacion` int(11) NOT NULL DEFAULT '0',
  `token` varchar(40) NOT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT '0',
  `id_tipo` int(11) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `cc` varchar(10) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `referido` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `correo`, `last_session`, `activacion`, `token`, `token_password`, `password_request`, `id_tipo`, `pin`, `cc`, `celular`, `referido`) VALUES
(1, 'jeshua', '$2y$10$4jLkFXv8IF/Znqwc1BEiDu1lT3hqNX9NWNMGLHO8kpF2yebYfKYMO', 'jeshua', 'brayanjeshuavz@gmail.com', '2019-10-11 19:37:09', 1, '21f6f204e65046fb8df1d851c058a502', '', 0, 1, '123', '26667973', '3195747992', 'jeshua'),
(2, 'vacio', '$2y$10$F5XmVcIEgpkephfYcdEEI.BpaPSfVGdWiiaqn2REth.aWIbZaCZnS', 'jeshasusaasj', 'sadasd@dasdasd.asd', '2018-04-20 10:15:33', 1, '89ca78916169ec65fcc7d9c1881de817', '', 0, 2, '123', '5489489', '484987', '848494'),
(3, 'vacio', '$2y$10$F5XmVcIEgpkephfYcdEEI.BpaPSfVGdWiiaqn2REth.aWIbZaCZnS', 'jahdiel', 'brayanjeshasauavz@gmail.com', '2018-04-13 23:26:57', 1, '670512385567d3c85c15e2356c96d5eb', '', 0, 2, '125', '256454', '24564', 'jeshuaa'),
(4, 'vacio', '$2y$10$IlXnod40u8GyVnatGQ/X/uM3gbevRqt8hCjlZyujjbmnabDC5u2xa', 'juanca', 'soportepocospelos@gmail.com', '2018-04-16 07:02:23', 1, 'c343f6ec78e4379cb7ffa2a2a81898d4', '', 0, 2, 'J18J685meQ', '298789756', '2894878', 'brayan'),
(5, 'vacio', '$2y$10$VFUGB7/IzT942svTjAP2ouCbfCZG.i9kmvxbP.dPmwYNLWLktwTrG', 'goyo', 'orozcogranada45@gmail.com', '2018-04-13 23:06:48', 1, '3af18779f7efce585165e943e7dfa1c6', '', 0, 2, '94564CCf3s', '189489', '4894894', '4894984'),
(6, 'vacio', '$2y$10$G4cOVS8I2Clbikox5sYMiuGJIeK76IJz3rdfz.UH5TONGI90O2oGK', 'sante', 'santeprotekto@gmail.com', '2018-04-13 23:10:11', 1, '520c4961b148d2b88e8daf79cc5ed5fa', '', 0, 2, 'LLdM4pF', '25498489', '48949', '84948'),
(7, 'vacio', '$2y$10$F5XmVcIEgpkephfYcdEEI.BpaPSfVGdWiiaqn2REth.aWIbZaCZnS', '', '', '2018-04-13 23:29:30', 1, '', '', 0, 0, '', '', '', ''),
(8, 'vacio', '$2y$10$F5XmVcIEgpkephfYcdEEI.BpaPSfVGdWiiaqn2REth.aWIbZaCZnS', '', '', '2018-04-13 23:33:14', 1, '', '', 0, 0, '', '', '', ''),
(9, 'vacio', '$2y$10$F5XmVcIEgpkephfYcdEEI.BpaPSfVGdWiiaqn2REth.aWIbZaCZnS', '', '', '2018-04-16 07:00:17', 1, '', '', 0, 0, '', '', '', ''),
(10, 'vacio', '$2y$10$F5XmVcIEgpkephfYcdEEI.BpaPSfVGdWiiaqn2REth.aWIbZaCZnS', '', '', '2018-04-16 07:00:17', 1, '', '', 0, 0, '', '', '', ''),
(11, 'vacio', '$2y$10$F5XmVcIEgpkephfYcdEEI.BpaPSfVGdWiiaqn2REth.aWIbZaCZnS', '', '', '2018-04-16 07:00:17', 1, '', '', 0, 0, '', '', '', ''),
(12, 'vacio', '$2y$10$F5XmVcIEgpkephfYcdEEI.BpaPSfVGdWiiaqn2REth.aWIbZaCZnS', '', '', '2018-04-16 07:00:17', 1, '', '', 0, 0, '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `llaves`
--
ALTER TABLE `llaves`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`idPartidos`);

--
-- Indices de la tabla `pollas`
--
ALTER TABLE `pollas`
  ADD PRIMARY KEY (`idPollas`),
  ADD KEY `idPartidos` (`idPartidos`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
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
-- AUTO_INCREMENT de la tabla `llaves`
--
ALTER TABLE `llaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
  MODIFY `idPartidos` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `pollas`
--
ALTER TABLE `pollas`
  MODIFY `idPollas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pollas`
--
ALTER TABLE `pollas`
  ADD CONSTRAINT `pollas_ibfk_1` FOREIGN KEY (`idPartidos`) REFERENCES `partidos` (`idPartidos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pollas_ibfk_2` FOREIGN KEY (`id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
