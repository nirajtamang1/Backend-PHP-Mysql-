-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 12:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_2065713`
--

-- --------------------------------------------------------

--
-- Table structure for table `weather`
--

CREATE TABLE `weather` (
  `weather_description` varchar(30) NOT NULL DEFAULT current_timestamp(),
  `weather_temperature` float NOT NULL DEFAULT current_timestamp(),
  `weather_wind` float NOT NULL DEFAULT current_timestamp(),
  `weather_when` datetime NOT NULL DEFAULT current_timestamp(),
  `city` varchar(30) DEFAULT NULL,
  `humidity` float NOT NULL DEFAULT current_timestamp(),
  `pressure` float NOT NULL DEFAULT current_timestamp(),
  `wind_degree` float DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weather`
--

INSERT INTO `weather` (`weather_description`, `weather_temperature`, `weather_wind`, `weather_when`, `city`, `humidity`, `pressure`, `wind_degree`) VALUES
('overcast clouds', 10.95, 3.09, '2021-12-31 10:41:44', 'Henderson', 67, 1008, 190),
('overcast clouds', 10.95, 3.09, '2021-12-31 10:41:57', 'Henderson', 67, 1008, 190),
('overcast clouds', 10.95, 3.09, '2021-12-31 10:42:44', 'Henderson', 67, 1008, 190),
('overcast clouds', 10.96, 2.57, '2021-12-31 10:51:43', 'Henderson', 67, 1007, 0),
('overcast clouds', 10.96, 2.57, '2021-12-31 10:51:53', 'Henderson', 67, 1007, 0),
('overcast clouds', 10.96, 2.57, '2021-12-31 10:54:00', 'Henderson', 67, 1007, 0),
('clear sky', -0.94, 4.12, '2022-01-02 13:34:30', 'Henderson', 48, 1030, 330),
('clear sky', -0.94, 4.12, '2022-01-02 13:35:57', 'Henderson', 48, 1030, 330),
('clear sky', -0.94, 4.12, '2022-01-02 13:38:09', 'Henderson', 48, 1030, 330),
('clear sky', -0.94, 4.12, '2022-01-02 13:38:11', 'Henderson', 48, 1030, 330),
('clear sky', -0.94, 4.12, '2022-01-02 13:38:13', 'Henderson', 48, 1030, 330),
('clear sky', -0.94, 4.12, '2022-01-02 13:38:22', 'Henderson', 48, 1030, 330),
('clear sky', -0.94, 4.12, '2022-01-02 13:38:35', 'Henderson', 48, 1030, 330),
('clear sky', -0.94, 4.12, '2022-01-02 13:38:40', 'Henderson', 48, 1030, 330),
('clear sky', -0.94, 4.12, '2022-01-02 13:38:42', 'Henderson', 48, 1030, 330),
('clear sky', -0.94, 4.12, '2022-01-02 13:38:44', 'Henderson', 48, 1030, 330),
('clear sky', -0.94, 4.12, '2022-01-02 13:38:45', 'Henderson', 48, 1030, 330),
('clear sky', -0.94, 4.12, '2022-01-02 13:38:48', 'Henderson', 48, 1030, 330),
('clear sky', -0.94, 4.12, '2022-01-02 13:38:50', 'Henderson', 48, 1030, 330),
('clear sky', -0.94, 4.12, '2022-01-02 13:38:50', 'Henderson', 48, 1030, 330),
('clear sky', 2.71, 0, '2022-01-03 17:23:25', 'Henderson', 37, 1025, 0),
('clear sky', 2.71, 0, '2022-01-03 17:31:47', 'Henderson', 37, 1025, 0),
('clear sky', 2.71, 0, '2022-01-03 17:32:11', 'Henderson', 37, 1025, 0),
('clear sky', 3.03, 0, '2022-01-03 17:39:42', 'Henderson', 37, 1025, 0),
('clear sky', 3.03, 0, '2022-01-03 17:39:50', 'Henderson', 37, 1025, 0),
('clear sky', 3.03, 0, '2022-01-03 17:40:14', 'Henderson', 37, 1025, 0),
('clear sky', 3.03, 0, '2022-01-03 17:42:50', 'Henderson', 37, 1025, 0),
('clear sky', 3.03, 0, '2022-01-03 17:44:13', 'Henderson', 37, 1025, 0),
('clear sky', 3.03, 0, '2022-01-03 17:47:52', 'Henderson', 37, 1025, 0),
('clear sky', 4.7, 0, '2022-01-03 18:16:47', 'Henderson', 31, 1025, 0),
('clear sky', 3.96, 0, '2022-01-04 11:17:48', 'Henderson', 41, 1022, 0),
('clear sky', 3.96, 0, '2022-01-04 11:27:33', 'Henderson', 41, 1022, 0),
('clear sky', 3.7, 2.57, '2022-01-04 11:29:49', 'Henderson', 42, 1022, 30),
('clear sky', 3.7, 2.57, '2022-01-04 11:29:50', 'Henderson', 42, 1022, 30),
('clear sky', 3.7, 2.57, '2022-01-04 11:30:26', 'Henderson', 42, 1022, 30),
('clear sky', 3.7, 2.57, '2022-01-04 11:30:29', 'Henderson', 42, 1022, 30),
('clear sky', 3.7, 2.57, '2022-01-04 11:30:29', 'Henderson', 42, 1022, 30),
('clear sky', 3.7, 2.57, '2022-01-04 11:30:29', 'Henderson', 42, 1022, 30),
('clear sky', 3.7, 2.57, '2022-01-04 11:30:30', 'Henderson', 42, 1022, 30),
('clear sky', 3.7, 2.57, '2022-01-04 11:30:30', 'Henderson', 42, 1022, 30),
('clear sky', 3.7, 2.57, '2022-01-04 11:30:30', 'Henderson', 42, 1022, 30),
('clear sky', 3.7, 2.57, '2022-01-04 11:30:31', 'Henderson', 42, 1022, 30),
('clear sky', 3.7, 2.57, '2022-01-04 11:30:31', 'Henderson', 42, 1022, 30),
('clear sky', 3.72, 4.12, '2022-01-04 11:46:45', 'Henderson', 42, 1022, 20),
('clear sky', 3.25, 3.6, '2022-01-04 12:17:26', 'Henderson', 44, 1022, 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
