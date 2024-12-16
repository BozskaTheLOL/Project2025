-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Dec 16. 10:13
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
-- Tábla szerkezet ehhez a táblához `albums`
--

CREATE TABLE `albums` (
  `aid` int(11) NOT NULL,
  `aeid` int(11) NOT NULL,
  `anev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `apic_ev` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  `apic_og_nev` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `adatum` datetime NOT NULL,
  `aupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `album_s`
--

CREATE TABLE `album_s` (
  `asid` int(11) NOT NULL,
  `a_aid` int(11) NOT NULL,
  `a_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `eloado`
--

CREATE TABLE `eloado` (
  `eid` int(11) NOT NULL,
  `euid` int(11) NOT NULL,
  `edatum` datetime NOT NULL,
  `estyle` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  `estatus` varchar(2) COLLATE utf8_hungarian_ci NOT NULL,
  `ekomment` varchar(50) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `korabbinev`
--

CREATE TABLE `korabbinev` (
  `kid` int(11) NOT NULL,
  `kuid` int(11) NOT NULL,
  `kunick` varchar(18) COLLATE utf8_hungarian_ci NOT NULL,
  `kdatum` datetime NOT NULL,
  `kstatus` varchar(1) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `korabbinev`
--

INSERT INTO `korabbinev` (`kid`, `kuid`, `kunick`, `kdatum`, `kstatus`) VALUES
(1, 0, '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `login`
--

CREATE TABLE `login` (
  `lid` int(11) NOT NULL,
  `luid` int(11) NOT NULL,
  `ldatum` datetime NOT NULL,
  `lip` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `lsess` varchar(8) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `login`
--

INSERT INTO `login` (`lid`, `luid`, `ldatum`, `lip`, `lsess`) VALUES
(1, 6, '2024-10-25 09:56:56', '::1', '6gj4fg4r'),
(2, 6, '2024-10-25 10:12:36', '::1', '6gj4fg4r'),
(3, 6, '2024-10-25 10:13:54', '::1', '6gj4fg4r'),
(4, 6, '2024-10-25 12:04:45', '::1', '6gj4fg4r'),
(5, 6, '2024-10-25 12:20:01', '::1', '6gj4fg4r'),
(6, 6, '2024-11-04 10:09:49', '::1', 'q0ps33ts'),
(7, 6, '2024-11-04 10:20:27', '::1', 'q0ps33ts'),
(8, 6, '2024-11-04 11:25:27', '::1', 'q0ps33ts'),
(9, 6, '2024-11-06 12:23:15', '::1', 'bp0g0heq'),
(10, 6, '2024-11-06 12:26:58', '::1', 'bp0g0heq'),
(11, 6, '2024-11-06 12:28:49', '::1', 'ioomtsla'),
(12, 6, '2024-11-08 09:55:49', '::1', 'ud1ehefg'),
(13, 6, '2024-11-08 10:03:12', '::1', 'ud1ehefg'),
(14, 6, '2024-11-08 10:13:27', '::1', 'ud1ehefg'),
(15, 6, '2024-11-08 10:20:11', '::1', 'ud1ehefg'),
(16, 6, '2024-11-08 11:04:15', '::1', 'ud1ehefg'),
(17, 6, '2024-11-08 11:04:58', '::1', 'ud1ehefg'),
(18, 6, '2024-11-08 11:07:20', '::1', 'ud1ehefg'),
(19, 6, '2024-11-08 11:21:18', '::1', 'ud1ehefg'),
(20, 6, '2024-11-11 10:10:36', '::1', 'd9stkhni'),
(21, 6, '2024-11-11 10:14:28', '::1', 'd9stkhni'),
(22, 6, '2024-11-11 11:03:36', '::1', 'mdulmon4'),
(23, 6, '2024-11-13 09:55:44', '::1', 'rshb02ri');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `naplo`
--

CREATE TABLE `naplo` (
  `nid` int(11) NOT NULL,
  `nuid` int(11) NOT NULL,
  `ndatum` datetime NOT NULL,
  `nip` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `nurl` varchar(250) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `songs`
--

CREATE TABLE `songs` (
  `sid` int(11) NOT NULL,
  `said` int(11) NOT NULL,
  `snev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `slength` varchar(6) COLLATE utf8_hungarian_ci NOT NULL,
  `strack_num` int(11) NOT NULL,
  `sdatum` datetime NOT NULL,
  `supdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tagok`
--

CREATE TABLE `tagok` (
  `tid` int(11) NOT NULL,
  `tuid` int(11) NOT NULL,
  `teid` int(11) NOT NULL,
  `tdatum` datetime NOT NULL,
  `tstatus` varchar(2) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `ustrid` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `unick` varchar(18) COLLATE utf8_hungarian_ci NOT NULL,
  `upw` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `unev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `uwmail` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `umail` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `uom` varchar(11) COLLATE utf8_hungarian_ci NOT NULL,
  `udatum` datetime NOT NULL,
  `uip` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `ustatus` varchar(1) COLLATE utf8_hungarian_ci NOT NULL,
  `ukomment` text COLLATE utf8_hungarian_ci NOT NULL,
  `upfp_nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `upfp_og_nev` varchar(250) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`uid`, `ustrid`, `unick`, `upw`, `unev`, `uwmail`, `umail`, `uom`, `udatum`, `uip`, `ustatus`, `ukomment`, `upfp_nev`, `upfp_og_nev`) VALUES
(6, '33xfsuv7ms', 'qki', '81dc9bdb52d04dc20036dbd8313ed055', '', '', 'kukiii@gmail.com', '', '2024-10-18 12:42:07', '::1', 'A', '', '6_241108110851_vn1rfpn7o.jpg', 'il_300x300.5960396236_4b4b-ezgif.com-webp-to-jpg-converter.jpg');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`aid`);

--
-- A tábla indexei `album_s`
--
ALTER TABLE `album_s`
  ADD PRIMARY KEY (`asid`);

--
-- A tábla indexei `eloado`
--
ALTER TABLE `eloado`
  ADD PRIMARY KEY (`eid`);

--
-- A tábla indexei `korabbinev`
--
ALTER TABLE `korabbinev`
  ADD PRIMARY KEY (`kid`);

--
-- A tábla indexei `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`lid`);

--
-- A tábla indexei `naplo`
--
ALTER TABLE `naplo`
  ADD PRIMARY KEY (`nid`);

--
-- A tábla indexei `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`sid`);

--
-- A tábla indexei `tagok`
--
ALTER TABLE `tagok`
  ADD PRIMARY KEY (`tid`);

--
-- A tábla indexei `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `albums`
--
ALTER TABLE `albums`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `album_s`
--
ALTER TABLE `album_s`
  MODIFY `asid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `eloado`
--
ALTER TABLE `eloado`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `korabbinev`
--
ALTER TABLE `korabbinev`
  MODIFY `kid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `login`
--
ALTER TABLE `login`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT a táblához `naplo`
--
ALTER TABLE `naplo`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `songs`
--
ALTER TABLE `songs`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `tagok`
--
ALTER TABLE `tagok`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
