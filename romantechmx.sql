-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2022 a las 06:26:58
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

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
-- Estructura de tabla para la tabla `carrito_usuarios`
--

CREATE TABLE `carrito_usuarios` (
  `id_sesion` varchar(255) NOT NULL,
  `sku_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `SKU` int(11) NOT NULL,
  `Nombre` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `Descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `Inventario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`SKU`, `Nombre`, `Descripcion`, `Precio`, `Inventario`) VALUES
(1, 'MSI - Tarjeta de Video - AMD Radeon RX 6600 XT Mech 2X 8G OC GDDR6 DP/HDMI Dual Torx Ventiladores FreeSync DirectX 12 VR Ready OC Tarjeta gráfica', 'Prepárate para un extraordinario desempeño gaming en 1080p. Las tarjetas gráficas MSI Radeon™ RX 6600 XT cuentan con la arquitectura de vanguardia AMD RDNA™ 2. Ideada para ofrecer una experiencia increíble de juego en 1080p, AMD Radeon™ RX 6600 XT impulsa la próxima generación de juegos con imágenes vivaces y experiencias elevadas.\r\n\r\nMECH fue construida para servirte bien durante el juego intenso. Este producto tiene una potencia extraordinaria que es liberada a través de la PCB personalizada.\r\nVelocidad de Memoria: 1845 MHz\r\nMemoria de vídeo: 8GB GDDR6\r\nInterfaz de memoria: 128 bits\r\nSalida: DisplayPort x 3 (v1.4) / HDMI x 1\r\n', '7218.67', 23),
(2, 'Gigabyte GeForce RTX 3070 Vision OC 8G (REV2.0), 3 Ventiladores WINDFORCE, LHR, 8 GB 256 bits GDDR6, GV-N3070VISION OC-8GD REV2.0 Tarjeta de Video', '                                NVIDIA Ampere Streaming Multiprocessors Núcleos RT de 2ª generación Núcleos Tensor de 3ª generación Desarrollado por GeForce RTX 3070 Integrado con interfaz de memoria GDDR6 de 8 GB Sistema de refrigeración WINDFORCE 3X con ventiladores giratorios alternos RGB Fusion 2.0 Protección placa trasera de metal Reloj central: 1815 Mhz. Obtén el máximo rendimiento de juego con las tarjetas gráficas GIGABYTE RTX 3070. Gracias a la arquitectura RTX de 2ª generación de NVIDIA y refinada con la tecnología de refrigeración WINDFORCE, el GIGABYTE GeForce RTX 3070 VISION 8G ofrece imágenes impresionantes, velocidades de fotogramas increíblemente rápidas y aceleración de IA a juegos y aplicaciones creativas con sus núcleos RT y núcleos Tensor mejorados.   \r\n\r\nMultiprocesadores NVIDIA Ampere Streaming\r\nNúcleos RT de segunda generación\r\nNúcleos tensores de tercera generación\r\nAlimentado por GeForce RTX 3070\r\nIntegrado con interfaz de memoria GDDR6 de 8 GB de 256 bits                                                                         ', '14924.12', 12),
(3, 'Gigabyte AORUS GeForce RTX 3070 Master 8G (REV2.0) Tarjeta gráfica, 3 Ventiladores WINDFORCE, 8 GB 256 bits GDDR6, GV-N3070AORUS M-8GD REV2.0 Tarjeta de Video', 'NVIDIA Ampere Streaming Multiprocesadores de 2ª generación RT núcleos tensores de 3ª generación alimentado por GeForce RTX 3070 integrado con 8GB GDDR6 interfaz de memoria de 256 bits refrigeración MAX-COVERED LCD Edge View RGB Fusion 2.0 3x DisplayPort 1.4a, 2x HDMI 2.1, 1x HDMI 2.0 placa trasera de metal de protección 4 años garantía Requerido) Versión LHR (Lite Hash Rate) Core Clock: 1845 MHz. Obtén el máximo rendimiento de juego con las tarjetas gráficas GIGABYTE RTX 3070. Gracias a la arquitectura RTX de 2ª generación de NVIDIA y refinada con la tecnología Maxed Covered Cooling, el AORUS GeForce RTX 3070 MASTER 8G (rev 2.0) ofrece imágenes impresionantes, velocidades de fotogramas increíblemente rápidas y aceleración de IA a juegos y aplicaciones creativas con sus núcleos RT y núcleos Tensor mejorados.\r\n\r\nResolución máxima digital: 7680 x 4320. Factor de forma: ATX\r\nMultiprocesadores NVIDIA Ampere Streaming\r\nNúcleos RT de segunda generación\r\nNúcleos tensores de tercera generación\r\nAlimentado por GeForce RTX 3070;Integrado con interfaz de memoria GDDR6 de 8 GB de 256 bits', '14567.87', 13),
(4, 'PowerColor Tarjeta de Video Fighter - AMD Radeon RX 6600 - 8GB 128-bit GDDR6 - PCI Express 4.0', 'Cantidad de puertos HDMI: 1\r\nProcesador de transmisión: 1792\r\nReloj de juego: 2044 MHz\r\nReloj de impulso: 2491Mhz                                              ', '5707.17', 28),
(5, 'XFX Speedster SWFT 210 Radeon RX 6600 Core - Tarjeta gráfica para Juegos con 8 GB GDDR6 HDMI 3xDP, AMD RDNA 2 RX-66XL8LFDQ', 'La serie Speedster ejemplifica un estilo aerodinámico moderno a través de un diseño limpio elegante. Es un diseño pensado con el único propósito de maximizar el flujo de aire para mejorar la refrigeración y el rendimiento.                                                     ', '6568.86', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Password` varchar(24) NOT NULL
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`SKU`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `SKU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
