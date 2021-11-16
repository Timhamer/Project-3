-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 nov 2021 om 14:22
-- Serverversie: 10.4.20-MariaDB
-- PHP-versie: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biermanagement`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestelformulier`
--

DROP TABLE IF EXISTS `bestelformulier`;
CREATE TABLE `bestelformulier` (
  `id` int(11) NOT NULL,
  `Aantal` int(11) DEFAULT NULL,
  `Voornaam` varchar(20) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `Tussenvoegsel` varchar(10) NOT NULL,
  `Adres` varchar(30) NOT NULL,
  `Achternaam` varchar(20) NOT NULL,
  `Postcode` varchar(7) NOT NULL,
  `Telefoonnummer` int(10) NOT NULL,
  `Status` int(100) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `bestelformulier`
--

INSERT INTO `bestelformulier` (`id`, `Aantal`, `Voornaam`, `E-mail`, `Tussenvoegsel`, `Adres`, `Achternaam`, `Postcode`, `Telefoonnummer`, `Status`) VALUES
(1, NULL, 'Martijn', 'mn.graafsma@gmail.com', 'piet', 'horseweg 55', 'Graafsma', '8604 CJ', 632134823, 1),
(4, 12, 'Martijn', 'mn.graafsma@gmail.com', 'piet', 'horseweg 55', 'Graafsma', '8604 CJ', 632134823, 1),
(5, 12, 'Martijn', 'mn.graafsma@gmail.com', 'piet', 'horseweg 55', 'Graafsma', '8604 CJ', 632134823, 1),
(10, 12, 'Martijn', 'mn.graafsma@gmail.com', 'piet', 'horseweg 55', 'Graafsma', '8604 CJ', 632134823, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bestelformulier`
--
ALTER TABLE `bestelformulier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bestelformulier`
--
ALTER TABLE `bestelformulier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
