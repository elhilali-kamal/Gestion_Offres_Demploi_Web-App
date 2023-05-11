-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 06:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidat`
--

CREATE TABLE `candidat` (
  `id_candidat` int(80) NOT NULL,
  `nomComplet` varchar(59) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `lettre` varchar(100) NOT NULL,
  `cv` varchar(80) NOT NULL,
  `id_offer` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidat`
--

INSERT INTO `candidat` (`id_candidat`, `nomComplet`, `email`, `telephone`, `lettre`, `cv`, `id_offer`) VALUES
(6, 'EL HILALI KAMAL', 'elhilali_kamal@hotmail.com', '0621475488', 'lettre.pdf', 'cv.pdf', 17);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id_offer` int(40) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(900) NOT NULL,
  `date` date NOT NULL,
  `picture` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id_offer`, `title`, `description`, `date`, `picture`) VALUES
(11, 'Annonce 1', 'Annonce 1', '2022-09-16', 'annonce2.jpg'),
(12, 'Annonce 2', 'Annonce 2', '2021-11-09', 'annonce4.jpg'),
(14, 'Annonce 3', 'Annonce 3', '2022-05-04', 'annonce6.jpg'),
(17, 'Annonce 4', 'Annonce 4', '2023-02-06', 'annonce8.jpg'),
(18, 'Annonce 5', 'Annonce 5', '2023-02-11', 'annonce1.jpg'),
(19, 'Annonce 6', 'Annonce 6', '2023-02-06', 'annonce10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`id_candidat`),
  ADD KEY `fk_idoffer` (`id_offer`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id_offer`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `id_candidat` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id_offer` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidat`
--
ALTER TABLE `candidat`
  ADD CONSTRAINT `fk_idoffer` FOREIGN KEY (`id_offer`) REFERENCES `offer` (`id_offer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
