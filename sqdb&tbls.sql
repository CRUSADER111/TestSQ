-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.34-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sqdb
CREATE DATABASE IF NOT EXISTS `sqdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci */;
USE `sqdb`;

-- Dumping structure for table sqdb.answers
CREATE TABLE IF NOT EXISTS `answers` (
  `answerID` int(11) NOT NULL AUTO_INCREMENT,
  `quiz` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `questionID` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`answerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- Dumping data for table sqdb.answers: ~0 rows (approximately)
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;

-- Dumping structure for table sqdb.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `questionID` int(11) NOT NULL AUTO_INCREMENT,
  `quiz` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `answerID` int(11) NOT NULL,
  PRIMARY KEY (`questionID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- Dumping data for table sqdb.questions: ~0 rows (approximately)
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;

-- Dumping structure for table sqdb.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `userlevel` int(1) NOT NULL DEFAULT '3',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- Dumping data for table sqdb.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `userlevel`, `created_at`) VALUES
	(1, 'Test', '$2y$10$bYvEo2siVP4JdkbXZjI9t.moRMZ0HQPdICIiBNXmYKw/FxWYwAxRO', 3, '2018-07-14 02:42:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
