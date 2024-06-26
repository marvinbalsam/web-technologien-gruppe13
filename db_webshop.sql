-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server-Version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server-Betriebssystem:        Win64
-- HeidiSQL Version:             12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Exportiere Datenbank-Struktur für db_webshop
CREATE DATABASE IF NOT EXISTS `db_webshop` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `db_webshop`;

-- Exportiere Struktur von Tabelle db_webshop.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT 0,
  `product_id` int(10) unsigned DEFAULT NULL,
  `amount` int(10) unsigned DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`product_id`,`user_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `FK_cart_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportiere Daten aus Tabelle db_webshop.cart: ~0 rows (ungefähr)

-- Exportiere Struktur von Tabelle db_webshop.products
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportiere Daten aus Tabelle db_webshop.products: ~4 rows (ungefähr)
INSERT INTO `products` (`product_id`, `name`, `description`, `price`, `image`, `user_id`) VALUES
	(1, 'Laptop', 'Ein normaler Laptop', 400, '\\images\\laptop.jpeg', NULL),
	(2, 'Smartphone', 'Ein normales Smartphone', 500, '\\images\\smartphone.jpeg', NULL),
	(3, 'Couch', 'Dies ist eine Couch', 1000, '\\images\\couch.jpeg', NULL),
	(4, 'Jeans', 'Dies ist eine Jeans', 49.99, '\\images\\jeans.jpeg', NULL);

-- Exportiere Struktur von Tabelle db_webshop.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` char(255) NOT NULL,
  `name` char(255) NOT NULL,
  `mail` char(255) NOT NULL,
  `password` char(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportiere Daten aus Tabelle db_webshop.user: ~2 rows (ungefähr)
INSERT INTO `user` (`user_id`, `firstname`, `name`, `mail`, `password`) VALUES
	(1, 'Max', 'Mustermann', 'max.mustermann@gmail.com', '!SuperSicher'),
	(2, 'Klaus', 'Petersen', 'klaus.petersen@gmail.com', '!SuperSicher');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
