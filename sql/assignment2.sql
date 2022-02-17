-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 02:47 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment2_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment2`
--

CREATE TABLE `assignment2` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `current_reading` int(11) NOT NULL,
  `previous_reading` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment2`
--

INSERT INTO `assignment2` (`id`, `date`, `current_reading`, `previous_reading`, `amount`) VALUES
(1, '2021-01-21', 5434, 3456, '942.85'),
(2, '2021-02-17', 3456, 2321, '507.86'),
(3, '2021-03-24', 3456, 2345, '495.48'),
(4, '2021-04-19', 3456, 1999, '674.01'),
(5, '2021-05-27', 4567, 3221, '616.74'),
(6, '2021-06-30', 5641, 4565, '477.42'),
(8, '2021-08-19', 5433, 4345, '483.61'),
(9, '2021-07-06', 5432, 3999, '661.63'),
(11, '2021-07-27', 1234, 567, '266.37'),
(12, '2020-01-20', 4532, 3241, '588.36'),
(13, '2020-02-11', 2345, 1234, '495.48'),
(14, '2020-03-24', 4321, 3567, '311.26'),
(15, '2020-04-27', 3421, 2999, '139.95'),
(16, '2020-05-12', 3456, 2111, '616.22'),
(17, '2020-06-23', 4563, 3456, '493.41'),
(18, '2020-07-21', 4323, 3456, '369.57'),
(19, '2020-08-25', 4432, 3456, '425.82'),
(20, '2020-09-14', 5432, 4421, '443.88'),
(21, '2020-10-13', 3452, 2311, '510.96'),
(22, '2020-11-25', 4324, 3425, '386.08'),
(23, '2020-12-19', 4322, 3111, '547.08'),
(24, '2021-09-28', 5433, 4111, '604.35'),
(25, '2021-10-13', 4563, 3241, '604.35'),
(26, '2021-11-30', 4543, 3111, '661.11'),
(29, '2021-12-13', 5434, 3242, '1053.27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment2`
--
ALTER TABLE `assignment2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment2`
--
ALTER TABLE `assignment2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
