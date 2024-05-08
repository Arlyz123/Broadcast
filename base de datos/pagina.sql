-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 05:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pagina`
--

-- --------------------------------------------------------

--
-- Table structure for table `amigos`
--

CREATE TABLE `amigos` (
  `id` int(11) NOT NULL,
  `amigos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `pais` text NOT NULL,
  `genero` text NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datos`
--

INSERT INTO `datos` (`id`, `nombre_completo`, `fecha_nacimiento`, `pais`, `genero`, `correo`, `usuario`, `contrasena`) VALUES
(17, 'neymi', '2004-10-30', 'peru', 'femenino', 'arlyzvalencia@gmail.com', 'neyliz', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(20, 'Jose Miguel Mateo', '2006-02-13', 'peru', 'masculino', 'jmm.valdivia.castillo@ucsp.edu.pe', 'Pochano', '4d3d9a35540f95cb58dbc6f7a734a96b5bb04828bc851b6107aeccc65242d5781e18834a8f9c7222c49129eb0c9a2db056c55f9b1401adda605eea4065b209a3'),
(21, 'Waza', '2024-05-01', 'peru', 'masculino', 'a@gmail', 'Loco', '05ec85b5d7204e2fd043e348f41935b754181ff256d54aba69762f467347a38107860dc9a14584c3d5e1f7257af5d6139d36a38a1ad1b34d2ac44c4b32fe1128');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photos_id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photos_id`, `location`, `member_id`) VALUES
(9, 'upload/THEownermp.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sobre_mi`
--

CREATE TABLE `sobre_mi` (
  `id` int(11) NOT NULL,
  `Institucion` text NOT NULL,
  `Futbol` text NOT NULL,
  `Basket` text NOT NULL,
  `Voley` text NOT NULL,
  `Tenis` text NOT NULL,
  `Natacion` text NOT NULL,
  `Otro_Deporte` text NOT NULL,
  `Pelicula_Fav` text NOT NULL,
  `Cancion_Fav` text NOT NULL,
  `Estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sobre_mi`
--

INSERT INTO `sobre_mi` (`id`, `Institucion`, `Futbol`, `Basket`, `Voley`, `Tenis`, `Natacion`, `Otro_Deporte`, `Pelicula_Fav`, `Cancion_Fav`, `Estado`) VALUES
(1, 'Universidad Catolica San Pabo', '', '', '', '', '', 'golf', 'Five Nights At Freddys', 'Sin Aliento - Danza Invisible', 'Soltero'),
(2, 'Universidad Catolica San Pabo', '', '', '', '', '', 'golf', 'Five Nights At Freddys', 'Sin Aliento - Danza Invisible', 'Soltero'),
(7, '', '', '', '', '', '', '', '', '', '0'),
(8, 'Universidad Catolica San PabLo', 'Fubtol', 'Basket', 'Voley', 'Tenis', 'Natacion', '', 'Piratas del Caribe 4', 'Faded -  Alan Walker', 'Soltero'),
(9, 'fufffj', '', '', '', '', '', '', '', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amigos`
--
ALTER TABLE `amigos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photos_id`);

--
-- Indexes for table `sobre_mi`
--
ALTER TABLE `sobre_mi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amigos`
--
ALTER TABLE `amigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sobre_mi`
--
ALTER TABLE `sobre_mi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
