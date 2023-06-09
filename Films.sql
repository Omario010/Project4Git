-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project4`
--
CREATE DATABASE IF NOT EXISTS `project4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project4`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `anime`
--

CREATE TABLE `anime` (
                             `Anime_id` int(11) NOT NULL,
                             `AnimeNaam` varchar(20) NOT NULL,
                             `Datum` int(10) NOT NULL,
                             `Tijdsduur` int(6) NOT NULL,
                             `Leeftijd` int(3) NOT NULL,
                             `karakter` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `anime`
--

INSERT INTO `anime` (`Anime_id`, `AnimeNaam`, `Datum`, `Tijdsduur`, `Leeftijd`, `karakter`) VALUES
                                                                           (0, 'Naruto', '21-9-1999', '30', '12' , 'Fantasy'),
                                                                           (10, 'Death note', '5-2003', '30', '12' , 'Mystery'),
                                                                           (20, 'Saiki', '04-8-2013', '24', '12' , 'Comedy');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `studenten`
--
ALTER TABLE `anime`
    ADD PRIMARY KEY (`Anime_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `studenten`
--
ALTER TABLE `anime`
    MODIFY `Anime_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;