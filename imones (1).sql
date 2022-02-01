-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 01, 2022 at 10:46 PM
-- Server version: 10.3.32-MariaDB-1:10.3.32+maria~focal-log
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `imones`
--

CREATE TABLE `imones` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(255) NOT NULL,
  `pvm_kodas` varchar(15) NOT NULL,
  `adresas` varchar(255) NOT NULL,
  `tel_nr` varchar(255) NOT NULL,
  `el_pastas` varchar(255) NOT NULL,
  `veikla` varchar(255) NOT NULL,
  `vadovas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imones`
--

INSERT INTO `imones` (`id`, `pavadinimas`, `pvm_kodas`, `adresas`, `tel_nr`, `el_pastas`, `veikla`, `vadovas`) VALUES
(123456789, ' IĮ Darau pats', 'LT498721566', 'Savanorių g. 150-20, Kaunas', '+37062251432', 'rankele@gmail.com', 'Rankdarbiai', 'Jurgelis Meistrelis'),
(154455589, 'UAB Bebras', 'LT955545289', 'Lauku g. 5, Kaimas', '8670000000', 'pastas@pastas.com', 'Nieko neveikia', 'Vadas Vadovauskas'),
(333232321, 'UAB Purvo seserys', 'LT854163132', 'Švaros g. 10, Miestas', '861111111', 'laiskas@laiskas.lt', 'Plauna dviračius', 'Paršas Kiauleikis'),
(385456662, 'UAB Du Bebrai', 'LT598643121', 'Užtvankos g. 1, Kruonis', '866655544', 'bebras@pastas.lt', 'Graužia medį', 'Ponas Bebras'),
(565464326, 'IĮ Kitam gale kvailys', 'LT654654665', 'Jūros g. 6, Klaipėda', '862232323', 'kablys@kablys.lt', 'Brakonierevimas', 'Saulius Karosikas'),
(576543213, 'MB Artojai', 'LT654321338', 'Arimų g. 10, Babtai', '861244555', 'vaga@mail.lt', 'Aria dirvą', 'Marūnas Barkauskis'),
(665544123, 'UAB Dukofka', 'LT111223447', 'Kepalo g. 15, Alytus', '865542314', 'paplotelis@one.lt', 'Gaminame baronkas', 'Riestainis Bulkauskas'),
(951236457, 'UAB GAUSA', 'LT111544472', 'Lelijų g. 100, Kapsukas', '+37064452312', 'gausa@yahoo.com', 'Prekyba', 'Vardenis Pavardenis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imones`
--
ALTER TABLE `imones`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imones`
--
ALTER TABLE `imones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=951236458;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
