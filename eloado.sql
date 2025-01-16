-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Jan 16. 13:55
-- Kiszolgáló verziója: 10.4.6-MariaDB
-- PHP verzió: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `harmony`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `eloado`
--

CREATE TABLE `eloado` (
  `eid` int(11) NOT NULL,
  `euid` int(11) NOT NULL,
  `enev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `edatum` datetime NOT NULL,
  `estyle` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  `elogonev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `elogoeredeti_nev` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `estatus` varchar(2) COLLATE utf8_hungarian_ci NOT NULL,
  `ekomment` varchar(50) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `eloado`
--

INSERT INTO `eloado` (`eid`, `euid`, `enev`, `edatum`, `estyle`, `elogonev`, `elogoeredeti_nev`, `estatus`, `ekomment`) VALUES
(1, 6, 'test', '2025-01-16 13:00:11', 'test', '6_250116130011_8ygpxw9pq.png', 'images.png', 'A', '');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `eloado`
--
ALTER TABLE `eloado`
  ADD PRIMARY KEY (`eid`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `eloado`
--
ALTER TABLE `eloado`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
