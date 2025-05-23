-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour exam_mvc
CREATE DATABASE IF NOT EXISTS `exam_mvc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `exam_mvc`;

-- Listage de la structure de table exam_mvc. motos
CREATE TABLE IF NOT EXISTS `motos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `model` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `mark` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table exam_mvc.motos : ~3 rows (environ)
INSERT INTO `motos` (`id`, `model`, `type`, `picture`, `mark`) VALUES
	(5, 'Ninja-ZX', 'Sportive', '657c2fb129cbfkawasaki_ninja.png', 'Kawasaki'),
	(6, 'MT-07', 'Roadster', '657c30c1053cayamaha-mt-07.jpg', 'Yamaha'),
	(7, 'RM-Z250', 'Enduro', '657c3190babe4suzuki_rm-z250.jpg', 'Suzuki'),
	(8, 'Ninja', 'Custom', NULL, 'Kawasaki');

-- Listage de la structure de table exam_mvc. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table exam_mvc.users : ~0 rows (environ)
INSERT INTO `users` (`id`, `username`, `password`) VALUES
	(1, 'admin', '$2y$10$Bo1x412O3RlzSK3czflUh.HuajunA6s3fWuPLJNRMTUdF.7eQ0lfO');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
