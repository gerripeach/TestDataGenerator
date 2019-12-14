-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server Version:               5.7.28-0ubuntu0.18.04.4 - (Ubuntu)
-- Server Betriebssystem:        Linux
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Exportiere Datenbank Struktur für random-data
DROP DATABASE IF EXISTS `random-data`;
CREATE DATABASE IF NOT EXISTS `random-data` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `random-data`;

-- Exportiere Struktur von Tabelle random-data.Company
DROP TABLE IF EXISTS `Company`;
CREATE TABLE IF NOT EXISTS `Company` (
  `name` varchar(256) DEFAULT NULL,
  `street` varchar(256) DEFAULT NULL,
  `building_numer` smallint(6) DEFAULT NULL,
  `zip_code` varchar(6) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `ust_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Daten Export vom Benutzer nicht ausgewählt

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
