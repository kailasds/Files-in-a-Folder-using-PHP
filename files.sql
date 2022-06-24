-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2021 at 09:00 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `filename` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `accessed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`filename`, `type`, `size`, `location`, `accessed`) VALUES
('Screenshot from 2021-06-18 14-58-46.png', 'png', '', '', '1970-01-01'),
('exam.zip', 'zip', '', '', '1970-01-01'),
('Screenshot from 2021-06-18 14-57-25.png', 'png', '', '', '1970-01-01'),
('..', '', '4096', '/opt/lampp', '2021-10-12'),
('lab.sql', 'sql', '', '', '1970-01-01'),
('.', '', '4096', '/opt/lampp/htdocs', '2021-10-13'),
('exam.cpp', 'cpp', '', '', '1970-01-01'),
('lab.php', 'php', '', '', '1970-01-01'),
('lab2.php', 'php', '', '', '1970-01-01'),
('Screenshot from 2021-06-18 14-58-46.png', 'png', '', '', '1970-01-01'),
('exam.zip', 'zip', '', '', '1970-01-01'),
('Screenshot from 2021-06-18 14-57-25.png', 'png', '', '', '1970-01-01'),
('..', '', '4096', '/opt/lampp', '2021-10-12'),
('lab.sql', 'sql', '', '', '1970-01-01'),
('.', '', '4096', '/opt/lampp/htdocs', '2021-10-13'),
('exam.cpp', 'cpp', '', '', '1970-01-01'),
('lab.php', 'php', '', '', '1970-01-01'),
('lab2.php', 'php', '', '', '1970-01-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
