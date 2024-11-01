-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-11-2024 a las 23:04:35
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asistencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` bigint NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish2_ci,
  `apellido` text COLLATE utf8mb4_spanish2_ci,
  `correo_electronico` text COLLATE utf8mb4_spanish2_ci,
  `telefono` text COLLATE utf8mb4_spanish2_ci,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `correo_electronico`, `telefono`, `fecha_nacimiento`) VALUES


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_institucion`
--

CREATE TABLE `alumno_institucion` (
  `id` bigint NOT NULL,
  `alumno_id` bigint DEFAULT NULL,
  `institucion_id` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `id` bigint NOT NULL,
  `fecha` date DEFAULT NULL,
  `alumno_id` bigint DEFAULT NULL,
  `profesor_id` bigint DEFAULT NULL,
  `estado` text COLLATE utf8mb4_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE `instituciones` (
  `id` bigint NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish2_ci,
  `direccion` text COLLATE utf8mb4_spanish2_ci,
  `telefono` text COLLATE utf8mb4_spanish2_ci,
  `correo_electronico` text COLLATE utf8mb4_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` bigint NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish2_ci,
  `apellido` text COLLATE utf8mb4_spanish2_ci,
  `correo_electronico` text COLLATE utf8mb4_spanish2_ci,
  `telefono` text COLLATE utf8mb4_spanish2_ci,
  `departamento` text COLLATE utf8mb4_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor_institucion`
--

CREATE TABLE `profesor_institucion` (
  `id` bigint NOT NULL,
  `profesor_id` bigint DEFAULT NULL,
  `institucion_id` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish2_ci,
  `apellido` text COLLATE utf8mb4_spanish2_ci,
  `dn` int NOT NULL,
  `correo_electronico` text COLLATE utf8mb4_spanish2_ci,
  `telefono` text COLLATE utf8mb4_spanish2_ci,
  `usuario` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `contrasena` text COLLATE utf8mb4_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `dn`, `correo_electronico`, `telefono`, `usuario`, `contrasena`) VALUES
(1, 'Yamil', 'Villa', 42487107, 'yamil.gchu@gmail.com', '3446', 'yamil', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumno_institucion`
--
ALTER TABLE `alumno_institucion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumno_id` (`alumno_id`),
  ADD KEY `institucion_id` (`institucion_id`);

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumno_id` (`alumno_id`),
  ADD KEY `profesor_id` (`profesor_id`);

--
-- Indices de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesor_institucion`
--
ALTER TABLE `profesor_institucion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profesor_id` (`profesor_id`),
  ADD KEY `institucion_id` (`institucion_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `alumno_institucion`
--
ALTER TABLE `alumno_institucion`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesor_institucion`
--
ALTER TABLE `profesor_institucion`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_institucion`
--
ALTER TABLE `alumno_institucion`
  ADD CONSTRAINT `alumno_institucion_ibfk_1` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`),
  ADD CONSTRAINT `alumno_institucion_ibfk_2` FOREIGN KEY (`institucion_id`) REFERENCES `instituciones` (`id`);

--
-- Filtros para la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`),
  ADD CONSTRAINT `asistencias_ibfk_2` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`);

--
-- Filtros para la tabla `profesor_institucion`
--
ALTER TABLE `profesor_institucion`
  ADD CONSTRAINT `profesor_institucion_ibfk_1` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`),
  ADD CONSTRAINT `profesor_institucion_ibfk_2` FOREIGN KEY (`institucion_id`) REFERENCES `instituciones` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
