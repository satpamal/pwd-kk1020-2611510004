-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
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


-- Dumping database structure for db_pwd_2611510004
CREATE DATABASE IF NOT EXISTS `db_pwd_2611510004` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_pwd_2611510004`;

-- Dumping structure for table db_pwd_2611510004.tbl_kontak_2611510004
CREATE TABLE IF NOT EXISTS `tbl_kontak_2611510004` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `semester` tinyint NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_pesan` varchar(20) NOT NULL,
  `minat` varchar(50) NOT NULL,
  `prodi` varchar(2) NOT NULL,
  `pesan` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_pwd_2611510004.tbl_kontak_2611510004: ~5 rows (approximately)
INSERT IGNORE INTO `tbl_kontak_2611510004` (`id`, `nama`, `email`, `semester`, `tanggal`, `jenis_pesan`, `minat`, `prodi`, `pesan`) VALUES
	(1, 'Yohanes Setiawan Japriadi', 'ysetiawanj@atmaluhur.ac.id', 2, '2026-11-15', 'saran', 'HTML, CSS', 'TI', 'rajin-rajin lah belajar, jangan sampai menyesal kemudian atau ngeribetin dosen'),
	(2, 'Andi', 'andi@example.com', 2, '2026-11-15', 'pertanyaan', 'HTML, CSS', 'TI', 'Saya ingin belajar pemrograman web.'),
	(3, 'Surya Abraham', 'ganteng@banget.com', 1, '2026-11-21', 'saran', 'HTML', 'TI', 'saya mau menjadi perwira dengan istri soleha'),
	(4, 'Dhea Ananda', 'cantik@banget.com', 1, '2026-11-21', 'pertanyaan', 'CSS', 'TI', 'saya mau menjadi istri perwira'),
	(5, 'Dhea Ananda', 'cantik@banget.com', 1, '2026-11-21', 'pertanyaan', 'CSS', 'TI', 'saya mau menjadi istri perwira');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
