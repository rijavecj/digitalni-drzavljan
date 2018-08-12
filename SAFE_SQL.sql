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
(1,   1),
(1,   2),
(1,  22),
(1,  24),
(2,   3),
(2,  20),
(3,  21),
(4,   4),
(4,  27),
(5,  23),
(6,   5),
(6,   6),
(6,  19),
(6,  25),
(6,  26),
(6,  35),
(6,  42),
(7,   7),
(7,   9),
(7,  43),
(8,  41),
(9,   8),
(10,  1),
(10,  2),
(10, 22),
(10, 24),
(11, 17),
(14,  1),
(14,  2),
(14, 22),
(14, 24),
(15, 10),
(15, 11),
(15, 12),
(15, 13),
(15, 15),
(15, 36),
(15, 37),
(16, 14),
(16, 16),
(17,  1),
(17,  2),
(17, 22),
(17, 24),
(18, 38),
(18, 39),
(19, 34),
(20, 28),
(20, 29),
(21, 30),
(21, 31),
(22, 32),
(22, 33),
(23, 18);


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
