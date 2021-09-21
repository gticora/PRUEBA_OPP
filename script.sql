-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.4.19-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para gustavoticora
CREATE DATABASE IF NOT EXISTS `gustavoticora` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `gustavoticora`;

-- Volcando estructura para tabla gustavoticora.programador
CREATE TABLE IF NOT EXISTS `programador` (
  `Nombres` varchar(30) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Cedula` int(11) DEFAULT NULL,
  `Correo` varchar(10) DEFAULT NULL,
  `Lenguajes` varchar(10) DEFAULT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla gustavoticora.programador: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `programador` DISABLE KEYS */;
INSERT INTO `programador` (`Nombres`, `Apellidos`, `Cedula`, `Correo`, `Lenguajes`, `Fecha`) VALUES
	('gustavo', 'ticora', 2147483647, 'gticora@si', 'TODOS', '2021-09-21');
/*!40000 ALTER TABLE `programador` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
