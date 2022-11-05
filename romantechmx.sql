-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-11-2022 a las 23:29:28
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `romantechmx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `SKU` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `Descripcion` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `Precio` double NOT NULL,
  `Inventario` int(11) NOT NULL,
  PRIMARY KEY (`SKU`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`SKU`, `Nombre`, `Descripcion`, `Precio`, `Inventario`) VALUES
(3, 'Tarjeta de Video MSI NVIDIA GeForce RTX 3060 Gaming X 12G, 12GB 192-bit GDDR6, PCI Express 4.0', 'Frecuencia boost: 1837 MHz     NÃºcleos CUDA: 3584     Cantidad de puertos HDMI: 1     Cantidad de DisplayPorts: 3', 8579, 76),
(2, 'Tarjeta Madre ASUS ATX ROG Strix B550-F GAMING WIFI II, S-AM4, AMD B550, HDMI, 128GB DDR4 para AMD', '    Familia de procesador: AMD    Circuito integrado de tarjeta madre: AMD B550    Socket de procesador: Socket AM4    Circuito integrado: AMD B550    Memoria interna, mï¿½xima: 128 GB    Tipo de memoria: DDR4-SDRAM', 4109.87, 30),
(5, 'Monitor', 'Es un monitor MSI de 27 pulgadas', 4861.84, 24),
(6, 'Laptop asus', 'Es una laptop de 15\" con procesador ryzen y 1 tb de almacenamiento', 15486.18, 3),
(7, 'Videojuego', 'REad redemtion', 1250, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Password` varchar(24) NOT NULL,
  PRIMARY KEY (`Correo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Nombre`, `Correo`, `Password`) VALUES
(' Nombre', 'Correo', 'Password'),
('Fancisco Roman', 'franaxql@live.com.mx', '12345'),
('lolito', 'lolo@gmail.com', 'lolo1234'),
('Axel Roman', 'paquitor@gmail.com', 'paquito27'),
('RomanTechMx', 'RomanTech', 'RTL27'),
('francisco roman longoria', 'sardi22.fr@gmail.com', 'paquito22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
