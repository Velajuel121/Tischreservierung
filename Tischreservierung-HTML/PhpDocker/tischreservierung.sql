-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Erstellungszeit: 17. Jun 2018 um 15:21
-- Server-Version: 10.3.7-MariaDB-1:10.3.7+maria~jessie
-- PHP-Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `tischreservierung`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `guest`
--

CREATE TABLE `guest` (
  `userid` int(5) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `guest`
--

INSERT INTO `guest` (`userid`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(4, 'Felix', 'Kronsteiner', 'felix.kronsteiner@gmx.at', 'felix123', 'kroni1');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `reservation`
--

CREATE TABLE `reservation` (
  `ReservationID` int(5) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Sitzplaetze` int(3) NOT NULL,
  `Uhrzeit` time NOT NULL,
  `Datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `reservation`
--

INSERT INTO `reservation` (`ReservationID`, `Name`, `Sitzplaetze`, `Uhrzeit`, `Datum`) VALUES
(1, 'Felix Kronsteiner', 8, '18:00:00', '2018-06-19'),
(3, 'Nasus', 4, '19:00:00', '2018-06-20'),
(7, 'Philip Kronsteiner', 3, '23:00:00', '2018-06-19'),
(8, 'Konrad', 2, '12:00:00', '2018-06-22'),
(9, 'Konrad', 2, '12:00:00', '2018-06-22'),
(10, 'Adolf', 3, '14:30:00', '2018-06-20');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`userid`);

--
-- Indizes für die Tabelle `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ReservationID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `guest`
--
ALTER TABLE `guest`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ReservationID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
