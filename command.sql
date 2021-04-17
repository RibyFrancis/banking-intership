-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.5.9-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for customer
CREATE DATABASE IF NOT EXISTS `customer` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `customer`;

-- Dumping structure for table customer.details
CREATE TABLE IF NOT EXISTS `details` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `balance` float DEFAULT NULL,
  `accno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table customer.details: ~9 rows (approximately)
/*!40000 ALTER TABLE `details` DISABLE KEYS */;
INSERT IGNORE INTO `details` (`name`, `email`, `balance`, `accno`) VALUES
	('Riby', 'riby@mail.com', 100000, 1),
	('Sheryl', 'sheryl@gmail.com', 50000, 2),
	('Aswin ', 'aswin@gmail.com', 600000, 3),
	('Ivan', 'ivan@gmail.com', 70000, 4),
	('sarath', 'sarath@gmail.com', 200000, 5),
	('John', 'john@gmail.com', 250000, 6),
	('Thomas', 'thomas@gmail.com', 300000, 7),
	('Nechiketh', 'nechiketh@gmail.com', 90000, 8),
	('Muhammad', 'muhammad@gmail.com', 450000, 9),
	('Thaju', 'thaju@gmail.com', 800000, 10);
/*!40000 ALTER TABLE `details` ENABLE KEYS */;

-- Dumping structure for table customer.transfer
CREATE TABLE IF NOT EXISTS `transfer` (
  `sno` int(11) NOT NULL,
  `to` int(11) DEFAULT NULL,
  `from` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table customer.transfer: ~0 rows (approximately)
/*!40000 ALTER TABLE `transfer` DISABLE KEYS */;
/*!40000 ALTER TABLE `transfer` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
