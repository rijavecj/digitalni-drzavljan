-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 04. avg 2018 ob 19.34
-- Različica strežnika: 10.1.31-MariaDB
-- Različica PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `test`
--

-- --------------------------------------------------------

--
-- Struktura tabele `prenosi`
--

CREATE TABLE `prenosi` (
  `idk` int(11) NOT NULL,
  `idt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `prenosi`
--

INSERT INTO `prenosi` (`idk`, `idt`) VALUES
(1, 1),
(1, 2),
(1, 22),
(1, 24),
(2, 3),
(6, 25),
(6, 26),
(2, 20),
(3, 21),
(4, 27),
(4, 4),
(5, 23),
(22, 32),
(22, 33),
(21, 30),
(21, 31),
(20, 28),
(20, 29),
(11, 17),
(19, 34),
(12, 19),
(12, 35),
(15, 10),
(11, 14),
(14, 1),
(14, 2),
(14, 22),
(15, 11),
(15, 12),
(15, 36),
(15, 13),
(15, 15),
(15, 37),
(16, 16),
(17, 2),
(18, 38),
(18, 39),
(8, 41);

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `prenosi`
--
ALTER TABLE `prenosi`
  ADD KEY `FK_ima` (`idt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
