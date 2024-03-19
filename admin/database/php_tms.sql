-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2024 at 03:51 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dfgdfg', 'dgdfg', 1, '2024-03-19 15:28:28', '2024-03-19 15:28:28'),
(2, 'dfgdfg', 'dgdfg', 1, '2024-03-19 15:28:59', '2024-03-19 15:28:59'),
(3, 'Pradip', 'dfgdgdfgdgdhsg', 1, '2024-03-19 15:29:25', '2024-03-19 15:29:25'),
(4, 'Develop a tms using PHP', 'Develop a complete TMS project using PHP', 1, '2024-03-19 15:37:21', '2024-03-19 15:37:21'),
(5, 'Arun', 'Hi is a web Developer', 1, '2024-03-19 15:38:12', '2024-03-19 15:38:12'),
(6, 'ggggg', 'aaaaaaa', 1, '2024-03-19 15:39:02', '2024-03-19 15:39:02'),
(7, 'sfsfdsd', 'sdfsdf', 1, '2024-03-19 15:42:14', '2024-03-19 15:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'zupos', 'admin@gmail.com', '$2y$10$E3LQX7zA.FzvQZTyqCETSuQpKjQJXzN9J8ODULSrcoOfDP1GxxV6a'),
(2, 'wedobul', 'admin1@gmail.com', '$2y$10$DbwL6OLhO60PFvMiHuS8C.a.czqu7CMKiqJrwaR7r1q/5t./gZJju'),
(3, 'zitamad', 'foriroly@mailinator.com', '$2y$10$g0nDE71vR8rA6IC3SDLnCu/jU8/651EtK.SERQV5sYHNzEPuJw0Ny');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
