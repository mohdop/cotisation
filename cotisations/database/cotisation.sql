-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2022 at 07:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cotisation`
--

-- --------------------------------------------------------

--
-- Table structure for table `Compte`
--

CREATE TABLE `Compte` (
  `idCompte` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Foyer`
--

CREATE TABLE `Foyer` (
  `numLot` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Operation`
--

CREATE TABLE `Operation` (
  `id` int(10) NOT NULL,
  `montant` float NOT NULL,
  `date` datetime NOT NULL,
  `objet` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Projet`
--

CREATE TABLE `Projet` (
  `id` int(100) NOT NULL,
  `budget` float NOT NULL,
  `nom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(6) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `numTel` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `password`, `nom`, `prenom`, `numTel`, `email`) VALUES
(1, '123456', 'mohamed', 'diop', 781854492, 'mouha09diop@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Compte`
--
ALTER TABLE `Compte`
  ADD PRIMARY KEY (`idCompte`);

--
-- Indexes for table `Foyer`
--
ALTER TABLE `Foyer`
  ADD PRIMARY KEY (`numLot`);

--
-- Indexes for table `Operation`
--
ALTER TABLE `Operation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Projet`
--
ALTER TABLE `Projet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Compte`
--
ALTER TABLE `Compte`
  MODIFY `idCompte` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Foyer`
--
ALTER TABLE `Foyer`
  MODIFY `numLot` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Operation`
--
ALTER TABLE `Operation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Projet`
--
ALTER TABLE `Projet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
