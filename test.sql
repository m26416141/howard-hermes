-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2021 at 11:21 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id_careers` int(11) NOT NULL,
  `name_careers` varchar(50) NOT NULL,
  `description_careers` varchar(255) NOT NULL,
  `location_careers` varchar(50) NOT NULL,
  `date_careers` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id_careers`, `name_careers`, `description_careers`, `location_careers`, `date_careers`) VALUES
(1, 'Data Analyst', 'lorem ipsum', 'surabaya', '2021-06-08'),
(2, 'Data Analyst', 'lorem ipsum', 'surabaya', '2021-06-16'),
(3, 'Data Analyst', 'lorem ipsum', 'surabaya', '2021-06-08'),
(4, 'Front Office', 'we need you', 'surabaya', '2021-06-13'),
(5, 'Front Office', 'hai kami butuh anda', 'surabaya', '2021-06-22'),
(6, 'Data Analyst', 'hai', 'surabaya', '2021-06-09'),
(7, 'Data Analyst', 'hai', 'surabaya', '2021-06-09'),
(8, 'Data Analyst', 'hai', 'surabaya', '2021-06-09'),
(9, 'Data Analyst', 'hai', 'surabaya', '2021-06-09'),
(10, 'Front Office', 'heeee', 'surabaya', '2021-06-16'),
(11, 'Front Office', 'heeee', 'surabaya', '2021-06-16'),
(12, 'Front Office', 'yoooo', 'surabaya', '2021-06-17'),
(13, 'Front Office', 'yoooo', 'surabaya', '2021-06-17'),
(14, 'Data Analyst', 'what?', 'surabaya', '2021-06-22'),
(15, 'Data Analyst', 'what?', 'surabaya', '2021-06-22'),
(16, 'Data Analyst', 'what?', 'surabaya', '2021-06-22'),
(17, 'Front Office', 'woho', 'surabaya', '2021-06-15'),
(18, 'Data Analyst', 'yahooo', 'surabaya', '2021-06-10'),
(19, 'Front Office', 'yahoo', 'surabaya', '2021-06-30'),
(20, 'Front Office', 'yooo', 'surabaya', '2021-06-07'),
(21, 'Front Office', 'yooo', 'surabaya', '2021-06-07'),
(22, 'Data Analyst', 'hehe', 'surabaya', '2021-06-23'),
(23, 'Data Analyst', 'hehe', 'surabaya', '2021-06-14'),
(24, 'Front Office', 'hehe', 'surabaya', '2021-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(225) NOT NULL,
  `subject` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`) VALUES
(20, 'customer 1', 'mail@mail.com', 'tentang pelayanan perusahaan'),
(21, 'customer 2', 'mail2@mail.com', 'nomor yang bisa dihubungi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id_careers`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id_careers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
