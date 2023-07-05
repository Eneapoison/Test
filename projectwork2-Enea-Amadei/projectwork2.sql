-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 05, 2023 alle 00:55
-- Versione del server: 10.4.27-MariaDB
-- Versione PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectwork2`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `paths`
--

CREATE TABLE `paths` (
  `id` int(11) NOT NULL,
  `origine` varchar(255) NOT NULL,
  `destinazione` varchar(255) NOT NULL,
  `distanza` varchar(255) NOT NULL,
  `vehicle_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `paths`
--

INSERT INTO `paths` (`id`, `origine`, `destinazione`, `distanza`, `vehicle_id`) VALUES
(12, 'Origine 1', 'Destinazione 9', '30 km', 1),
(23, 'Origine 2', 'Destinazione 8', '60 km', 1),
(34, 'Origine 3', 'Destinazione 7', '90 km', 1),
(45, 'Origine 4', 'Destinazione 6', '10 km', 2),
(56, 'Origine 5', 'Destinazione 5', '15 km', 2),
(67, 'Origine 6', 'Destinazione 4', '20 km', 2),
(78, 'Origine 7', 'Destinazione 3', '2 km', 3),
(89, 'Origine 8', 'Destinazione 2', '4 km', 3),
(90, 'Origine 9', 'Destinazione 1', '6 km', 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `veicolo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `modello` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `vehicles`
--

INSERT INTO `vehicles` (`id`, `veicolo`, `marca`, `modello`) VALUES
(1, 'Auto', 'Fiat', 'Panda'),
(2, 'Moto', 'Zontes', 'G1-125'),
(3, 'Bici', 'Vicini', 'Rondella-V6');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `paths`
--
ALTER TABLE `paths`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_veicolo` (`vehicle_id`);

--
-- Indici per le tabelle `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `paths`
--
ALTER TABLE `paths`
  ADD CONSTRAINT `paths_ibfk_1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
