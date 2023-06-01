-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2023 at 02:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infonature_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `denuncias_tb`
--

CREATE TABLE `denuncias_tb` (
  `id` int(11) NOT NULL,
  `tipo_denuncia` varchar(9) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `dataDenuncia` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `denuncias_tb`
--

INSERT INTO `denuncias_tb` (`id`, `tipo_denuncia`, `descricao`, `imagem`, `dataDenuncia`) VALUES
(2, 'ambiental', 'Queimadas BLA BLA BLA ', 'c5240a6c-20ec-4b79-93a8-6110a14d5ca3.png', '2023-05-15 21:46:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `denuncias_tb`
--
ALTER TABLE `denuncias_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `denuncias_tb`
--
ALTER TABLE `denuncias_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
