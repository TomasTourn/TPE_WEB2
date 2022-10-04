-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 07:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videojuegos`
--

-- --------------------------------------------------------

--
-- Table structure for table `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `descripcion_genero` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genero`
--

INSERT INTO `genero` (`id_genero`, `genero`, `descripcion_genero`) VALUES
(1, 'Acción', 'Generalmente implican avanzar a través de niveles, eliminando hordas de enemigos y resolviendo problemas. Muchos videojuegos incluyen uno o más \"jefes\", a veces precedidos por \"minijefes\". Un minijefe es generalmente el clímax hacia un nivel o serie de niveles, con un jefe al final del juego o periódicamente por el juego, llevando a un \"jefe final\", el cual derrotar es el objetivo principal.'),
(2, 'Aventura', 'Caracterizados por la investigación, exploración, la solución de rompecabezas, la interacción con personajes del videojuego, y un enfoque en el relato en vez de desafíos basados en reflejos . Es importante observar que este término no tiene relación con las películas y novelas de aventura y no es indicativo del tema o del sujeto que trata. '),
(3, 'Carreras', 'Un videojuego de carreras es un videojuego en el que se imitan competencias entre vehículos. Usualmente el objetivo es recorrer cierta distancia o ir de un sitio hacia otro en el menor tiempo posible, como en el automovilismo y el motociclismo'),
(4, 'Disparos', 'permiten controlar un personaje que, por norma general, dispone de un arma y por lo general son multiplayer,Si  hace uso de internet, se puede catalogar en una serie de divisiones: Los juegos en equipo y los juegos individuales'),
(5, 'Estrategia', 'requieren que el jugador ponga en práctica sus habilidades de planeamiento y pensamiento para maniobrar, gestionando recursos de diverso tipo (materiales, humanos, militares...) para conseguir la victoria'),
(6, 'Indie', 'desarrollados por grupos reducidos de individuos o pequeñas empresas. No suelen contar con el apoyo financiero de distribuidores y publicistas, sino que su difusión depende principalmente de la voluntad de los jugadores para compartirlos con otros.');

-- --------------------------------------------------------

--
-- Table structure for table `juegos`
--

CREATE TABLE `juegos` (
  `id_juego` int(11) NOT NULL,
  `id_genero_fk` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `juegos`
--

INSERT INTO `juegos` (`id_juego`, `id_genero_fk`, `nombre`, `precio`, `descripcion`, `imagen`) VALUES
(1, 4, 'valorant', 0, 'disparos y habilidades', 'images/valorant.jpg'),
(2, 1, 'Grand Theft Auto V', 500, 'mundo abierto con historia, disparos, autos y lo que quieras', 'images/gtav'),
(3, 3, 'F1 2022', 70000, 'Ponte al volante en la nueva temporada: coches rediseñados y nuevas reglas que definen las carreras, con los pilotos de 2022.', ''),
(4, 6, 'cult of the lamb', 1200, 'Crea tu propia secta en una tierra de falsos profetas, aventurándote en regiones diversas y misteriosas para construir una leal comunidad de adeptos de los bosques, y difunde tu Palabra para convertir tu secta en la única y verdadera.', 'images/cult');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indexes for table `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juego`),
  ADD KEY `fk_restriction` (`id_genero_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `fk_restriction` FOREIGN KEY (`id_genero_fk`) REFERENCES `genero` (`id_genero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
