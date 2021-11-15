-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 nov 2021 om 14:28
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
  `Telefoonnummer` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `bestelformulier`
--

INSERT INTO `bestelformulier` (`id`, `Aantal`, `Voornaam`, `E-mail`, `Tussenvoegsel`, `Adres`, `Achternaam`, `Postcode`, `Telefoonnummer`) VALUES
(43, NULL, 'Tim', 'tfhammersma@gmail.com', 'Van', 'Meliere 57', 'Hamer', '8604', 612345678);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
