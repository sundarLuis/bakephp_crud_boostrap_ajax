-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-04-2019 a las 18:35:10
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reto_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `password`) VALUES
(5, 'veronica', '$2y$10$lImhR6V8GfW4W1edk26epO9sNe5dG9S9bwPUNI5qXsNytpUOxg.P6'),
(7, 'luis', '$2y$10$xyAaDt5XkCCtkvmJ5MoyM.lV/JhMCzRdZE1aGG06etKdbsqq3IsF.'),
(8, 'admin', '$2y$10$QM97nECjRTUXYVt6q4K7ou5/ff/n1LhIE6kegZf.P.mgFe2uQKLzC'),
(9, 'sundar', '$2y$10$TxwXCtnTEDWrdSAw6/0ZY.DUwfL25p3UrZaPMZf4bauz8C1pLAeIa'),
(10, 'dani', '$2y$10$DYv.1RF3Xy62iyw8y.GL8OnxLKZmdqKd8c6aup/dUe4UGt5ymI7Jy'),
(12, 'sonia', '$2y$10$inMR7p4oLTdUY6KxG6uwD.hYqZ.xEAFFI8yevI3CN3KdER2hw5Jk2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
