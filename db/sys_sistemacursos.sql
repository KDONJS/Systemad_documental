-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2022 a las 19:24:23
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sys_sistemacursos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sys_categorias`
--

CREATE TABLE `sys_categorias` (
  `idSys_Categorias` int(11) NOT NULL,
  `Sys_Categorias` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sys_categorias`
--

INSERT INTO `sys_categorias` (`idSys_Categorias`, `Sys_Categorias`) VALUES
(1, 'Ciencias'),
(2, 'Letras'),
(3, 'Tecnología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sys_contenido`
--

CREATE TABLE `sys_contenido` (
  `idSys_Contenido` int(11) NOT NULL,
  `Sys_ContenidoTitulo` varchar(150) NOT NULL,
  `Sys_ContenidoDescripcion` text NOT NULL,
  `Sys_ContenidoImagen` varchar(500) NOT NULL,
  `Sys_ContenidoFecha` date NOT NULL,
  `Sys_ContenidoSubtitulos` varchar(300) NOT NULL,
  `idSys_Secciones` int(11) NOT NULL,
  `idSys_Cursos` int(11) NOT NULL,
  `idSys_Modulos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sys_contenido`
--

INSERT INTO `sys_contenido` (`idSys_Contenido`, `Sys_ContenidoTitulo`, `Sys_ContenidoDescripcion`, `Sys_ContenidoImagen`, `Sys_ContenidoFecha`, `Sys_ContenidoSubtitulos`, `idSys_Secciones`, `idSys_Cursos`, `idSys_Modulos`) VALUES
(1, 'Arimetica', 'Matematica Matematica', 'https://images.pexels.com/photos/3768126/pexels-photo-3768126.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', '2022-07-24', 'Matematica', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sys_cursos`
--

CREATE TABLE `sys_cursos` (
  `idSys_Cursos` int(11) NOT NULL,
  `Sys_Cursos` varchar(70) NOT NULL,
  `idSys_Categorias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sys_cursos`
--

INSERT INTO `sys_cursos` (`idSys_Cursos`, `Sys_Cursos`, `idSys_Categorias`) VALUES
(1, 'Matematica', 1),
(2, 'Quimica', 1),
(3, 'Fisica', 1),
(4, 'Filosofia', 2),
(5, 'Historia', 2),
(6, 'Literatura', 2),
(7, 'Programacion', 3),
(8, 'Algoritmos', 3),
(9, 'Linux', 3),
(10, 'Máquinas', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sys_documentos`
--

CREATE TABLE `sys_documentos` (
  `idSys_documentos` int(11) NOT NULL,
  `Sys_documentos` varchar(500) NOT NULL,
  `Sys_documentosLink` varchar(350) NOT NULL,
  `Sys_documentoscoAño` date NOT NULL,
  `Sys_documentoscoCiclo` varchar(50) NOT NULL,
  `Sys_documentoscoDescripcion` varchar(1000) NOT NULL,
  `idSys_Cursos` int(11) NOT NULL,
  `idSys_Modulos` int(11) NOT NULL,
  `idSys_Secciones` int(11) NOT NULL,
  `Sys_Curso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sys_documentos`
--

INSERT INTO `sys_documentos` (`idSys_documentos`, `Sys_documentos`, `Sys_documentosLink`, `Sys_documentoscoAño`, `Sys_documentoscoCiclo`, `Sys_documentoscoDescripcion`, `idSys_Cursos`, `idSys_Modulos`, `idSys_Secciones`, `Sys_Curso`) VALUES
(1, 'El gran libro de HTML5, CSS3 y Javascript', 'https://gutl.jovenclub.cu/wp-content/uploads/2013/10/El+gran+libro+de+HTML5+CSS3+y+Javascrip.pdf', '2022-07-25', '2', 'Los códigos fuente para este libro se encuentran disponibles en www.minkbooks.com. ', 7, 14, 28, 'Programacion'),
(2, 'Arimetica', 'https://isfd160-bue.infd.edu.ar/sitio/profesorado-de-matematica-2/upload/Aritmetica-CONAMAT.pdf', '2022-07-25', '2', 'Datos de catalogación bibliográfica. COLEGIO NACIONAL DE MATEMÁTICAS. Aritmética. Primera edición. PEARSON EDUCACIÓN', 1, 2, 4, 'Matematica'),
(3, 'INTRODUCCIÓN A LA QUÍMICA', 'http://www.facultaddesalud.unsl.edu.ar/wp-content/uploads/2014/06/INTRODUCCION-A-LA-QUIMICA-2021.pdf', '2022-07-25', '3', 'Materia. Materia y energía. Propiedades de la materia. ESTADOS DE AGREGACION DE LA\r\nMATERIA. SISTEMAS MATERIALES. SOLUCIONES. Unidades físicas de concentración.\r\nSolubilidad.', 2, 3, 7, 'Química');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sys_modulos`
--

CREATE TABLE `sys_modulos` (
  `idSys_Modulos` int(11) NOT NULL,
  `Sys_ModulosCurso` varchar(80) NOT NULL,
  `idSys_Cursos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sys_modulos`
--

INSERT INTO `sys_modulos` (`idSys_Modulos`, `Sys_ModulosCurso`, `idSys_Cursos`) VALUES
(1, 'Definicion', 1),
(2, 'Introduccion', 1),
(3, 'Definicio', 2),
(4, 'Introduccion', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sys_secciones`
--

CREATE TABLE `sys_secciones` (
  `idSys_Secciones` int(11) NOT NULL,
  `Sys_Secciones` varchar(80) NOT NULL,
  `idSys_Modulos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sys_secciones`
--

INSERT INTO `sys_secciones` (`idSys_Secciones`, `Sys_Secciones`, `idSys_Modulos`) VALUES
(1, 'Que es la arimetica', 1),
(2, 'Suma', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sys_categorias`
--
ALTER TABLE `sys_categorias`
  ADD PRIMARY KEY (`idSys_Categorias`);

--
-- Indices de la tabla `sys_contenido`
--
ALTER TABLE `sys_contenido`
  ADD PRIMARY KEY (`idSys_Contenido`);

--
-- Indices de la tabla `sys_cursos`
--
ALTER TABLE `sys_cursos`
  ADD PRIMARY KEY (`idSys_Cursos`);

--
-- Indices de la tabla `sys_documentos`
--
ALTER TABLE `sys_documentos`
  ADD PRIMARY KEY (`idSys_documentos`);

--
-- Indices de la tabla `sys_modulos`
--
ALTER TABLE `sys_modulos`
  ADD PRIMARY KEY (`idSys_Modulos`);

--
-- Indices de la tabla `sys_secciones`
--
ALTER TABLE `sys_secciones`
  ADD PRIMARY KEY (`idSys_Secciones`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sys_categorias`
--
ALTER TABLE `sys_categorias`
  MODIFY `idSys_Categorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sys_contenido`
--
ALTER TABLE `sys_contenido`
  MODIFY `idSys_Contenido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sys_cursos`
--
ALTER TABLE `sys_cursos`
  MODIFY `idSys_Cursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `sys_documentos`
--
ALTER TABLE `sys_documentos`
  MODIFY `idSys_documentos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sys_modulos`
--
ALTER TABLE `sys_modulos`
  MODIFY `idSys_Modulos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sys_secciones`
--
ALTER TABLE `sys_secciones`
  MODIFY `idSys_Secciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
