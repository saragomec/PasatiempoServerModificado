-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2021 a las 13:16:50
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pasatiempobbdd`
--
CREATE DATABASE IF NOT EXISTS `pasatiempobbdd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pasatiempobbdd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasatiempos`
--

CREATE TABLE `pasatiempos` (
  `identificadorPas` varchar(20) NOT NULL,
  `palabra1` varchar(4) NOT NULL,
  `palabra2` varchar(4) NOT NULL,
  `palabra3` varchar(4) NOT NULL,
  `palabra4` varchar(4) NOT NULL,
  `palabra5` varchar(4) NOT NULL,
  `palabra6` varchar(4) NOT NULL,
  `palabra7` varchar(6) NOT NULL,
  `palabra8` varchar(6) NOT NULL,
  `palabra9` varchar(6) NOT NULL,
  `palabra10` varchar(6) NOT NULL,
  `palabra11` varchar(6) NOT NULL,
  `palabra12` varchar(6) NOT NULL,
  `pistas1` varchar(50) NOT NULL,
  `pistas2` varchar(50) NOT NULL,
  `pistas3` varchar(50) NOT NULL,
  `pistas4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pasatiempos`
--

INSERT INTO `pasatiempos` (`identificadorPas`, `palabra1`, `palabra2`, `palabra3`, `palabra4`, `palabra5`, `palabra6`, `palabra7`, `palabra8`, `palabra9`, `palabra10`, `palabra11`, `palabra12`, `pistas1`, `pistas2`, `pistas3`, `pistas4`) VALUES
('1', 'clan', 'casa', 'cian', 'saco', 'pene', 'pena', 'acorde', 'rotero', 'remoto', 'cabron', 'cotero', 'torero', 'Familia de escocia.', 'Tristeza y dolor por algo', 'En relación a algo específico', 'El que torea.'),
('2', 'nana', 'luna', 'lona', 'pana', 'cosa', 'lana', 'aborto', 'abrigo', 'encina', 'enojar', 'proeza', 'abrazo', 'Melodía cantada a los bebés.', 'Recurso sacado de las ovejas.', 'Interrupción del embarazo', 'Acción que demuestra afecto'),
('3', 'maga', 'cuba', 'cubo', 'timo', 'vals', 'idea', 'maceta', 'progre', 'propia', 'pronto', 'madura', 'prueba', 'Mujer hechicera.', 'Pensamiento resolutivo.', 'Recipiente para plantas.', 'Sinónimo de examen.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
