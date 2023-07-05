-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 05, 2023 alle 03:44
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2_enea`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `disponibilitys`
--

CREATE TABLE `disponibilitys` (
  `disponibility_id` int(11) NOT NULL,
  `data_ora` datetime DEFAULT NULL,
  `numero_posti_liberi` int(11) DEFAULT NULL,
  `park_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `disponibilitys`
--

INSERT INTO `disponibilitys` (`disponibility_id`, `data_ora`, `numero_posti_liberi`, `park_id`) VALUES
(1, '2021-08-01 10:00:00', 50, 1),
(2, '2021-08-02 14:30:00', 30, 2),
(3, '2021-08-03 09:45:00', 20, 1),
(4, '2021-08-04 12:15:00', 40, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `parks`
--

CREATE TABLE `parks` (
  `park_id` int(11) NOT NULL,
  `ubicazione` varchar(255) DEFAULT NULL,
  `numero_posti_auto` int(11) DEFAULT NULL,
  `costo_orario` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `parks`
--

INSERT INTO `parks` (`park_id`, `ubicazione`, `numero_posti_auto`, `costo_orario`) VALUES
(1, 'Milano', 100, 2.50),
(2, 'Roma', 200, 3.00),
(3, 'Firenze', 50, 2.00),
(4, 'Napoli', 150, 2.75);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `disponibilitys`
--
ALTER TABLE `disponibilitys`
  ADD PRIMARY KEY (`disponibility_id`),
  ADD KEY `park_id` (`park_id`);

--
-- Indici per le tabelle `parks`
--
ALTER TABLE `parks`
  ADD PRIMARY KEY (`park_id`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `disponibilitys`
--
ALTER TABLE `disponibilitys`
  ADD CONSTRAINT `disponibilitys_ibfk_1` FOREIGN KEY (`park_id`) REFERENCES `parks` (`park_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
