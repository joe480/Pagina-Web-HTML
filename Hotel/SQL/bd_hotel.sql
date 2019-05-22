-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 04:52 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `usurios`
--

CREATE TABLE `usurios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(40) COLLATE utf8_bin NOT NULL,
  `Apellido` varchar(40) COLLATE utf8_bin NOT NULL,
  `Correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Contraseña` varchar(40) COLLATE utf8_bin NOT NULL,
  `Sexo` varchar(20) COLLATE utf8_bin NOT NULL,
  `Nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `usurios`
--

INSERT INTO `usurios` (`Id`, `Nombre`, `Apellido`, `Correo`, `Contraseña`, `Sexo`, `Nivel`) VALUES
(1, 'Joel', 'Rios', 'joelrios077@gmail.com', '123456', 'Masculino', 1),
(2, 'Pedro', 'Quispe', 'pedrito666@gmail.com', '1111', 'Masculino', 0),
(3, 'Juan', 'Valdez', 'juanito88@gmail.com', '5583413443164b56500def9a533c7c70', 'Masculino', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usurios`
--
ALTER TABLE `usurios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usurios`
--
ALTER TABLE `usurios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
