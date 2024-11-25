-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para covid
CREATE DATABASE IF NOT EXISTS `covid` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `covid`;

-- Volcando estructura para tabla covid.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `edad` int(11) NOT NULL,
  `talla_m` decimal(10,2) NOT NULL,
  `peso_kg` decimal(10,2) NOT NULL,
  `sintoma_tos` char(1) NOT NULL,
  `sintoma_fiebre` char(1) NOT NULL,
  `sintoma_disnea` char(1) NOT NULL,
  `sintoma_dolormuscular` char(1) NOT NULL,
  `sintoma_gripe` char(1) NOT NULL,
  `sintoma_presionalta` char(1) NOT NULL,
  `sintoma_fatiga` char(1) NOT NULL,
  `sintoma_garraspera` char(1) NOT NULL,
  `ultima_fecha_vacunacion` date DEFAULT NULL,
  `resultado` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla covid.pacientes: ~11 rows (aproximadamente)
INSERT INTO `pacientes` (`id`, `nombres`, `apellidos`, `edad`, `talla_m`, `peso_kg`, `sintoma_tos`, `sintoma_fiebre`, `sintoma_disnea`, `sintoma_dolormuscular`, `sintoma_gripe`, `sintoma_presionalta`, `sintoma_fatiga`, `sintoma_garraspera`, `ultima_fecha_vacunacion`, `resultado`) VALUES
	(2, 'Hus', 'Senatinoooooooooo', 145, 32.00, 15.00, '0', '0', '0', '1', '1', '1', '1', '1', '2005-12-20', ''),
	(4, 'Jhon???!!', 'Hulk', 99, 99.00, 99.00, '1', '1', '1', '1', '1', '1', '1', '1', '1004-12-13', ''),
	(5, 'Benjamasd', 'fjlajlaf', 18, 1.64, 62.10, '1', '2', '1', '2', '1', '2', '1', '2', '2022-05-07', ''),
	(7, 'roger2', 'zapata', 12, 12.00, 12.00, 'o', 'o', 'o', '0', '0', '0', '1', '1', '2020-02-02', ''),
	(8, 'Mirko', 'Faundes', 18, 178.00, 84.00, '0', '1', '0', '0', '0', '0', '0', '1', '2021-04-12', ''),
	(12, 'Jhon', 'Acero', 18, 1.65, 56.00, '0', '0', '0', '0', '0', '0', '0', '0', '2024-01-01', ''),
	(13, 'julio', 'lizandro', 18, 1.70, 63.00, '1', '1', '0', '0', '1', '0', '1', '1', '2020-02-05', ''),
	(16, 'gandy', 'humiri', 18, 1.68, 92.00, '0', '0', '0', '0', '0', '0', '0', '0', '2003-03-02', ''),
	(18, 'Stev', 'Chucuya', 18, 160.00, 45.00, '1', '0', '0', '0', '0', '0', '0', '0', '2005-11-13', ''),
	(20, 'Pedrito', 'Palotes', 14, 1.45, 36.00, '0', '0', '0', '0', '0', '0', '0', '0', '2024-05-27', '');

CREATE TABLE usuarios 
(usuario VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL)
 
INSERT INTO `usuarios` (`usuario`, `password`) VALUES ('Nicky', '123');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
