-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Dec 16. 11:32
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
-- Adatbázis: `projekt`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `korabbinev`
--

CREATE TABLE `korabbinev` (
  `kid` int(11) NOT NULL,
  `kuid` int(11) NOT NULL,
  `kunick` varchar(18) COLLATE utf8_hungarian_ci NOT NULL,
  `kdate` datetime NOT NULL,
  `kstatus` varchar(3) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `login`
--

CREATE TABLE `login` (
  `lid` int(11) NOT NULL,
  `ulid` int(11) NOT NULL,
  `ldate` datetime NOT NULL,
  `lip` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `lsess` varchar(8) COLLATE utf8_hungarian_ci NOT NULL,
  `ladmin` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `naplo`
--

CREATE TABLE `naplo` (
  `nid` int(11) NOT NULL,
  `nuid` int(11) NOT NULL,
  `ndate` datetime NOT NULL,
  `nip` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `nurl` varchar(250) COLLATE utf8_hungarian_ci NOT NULL
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
  `umail` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `udate` datetime NOT NULL,
  `uip` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `ustatus` varchar(3) COLLATE utf8_hungarian_ci NOT NULL,
  `ukomment` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `ujprofkep_nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `ujprofkep_eredetinev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `act` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `nickname` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `rank` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `bannid` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `unbann` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`uid`, `ustrid`, `unick`, `upw`, `umail`, `udate`, `uip`, `ustatus`, `ukomment`, `ujprofkep_nev`, `ujprofkep_eredetinev`, `act`, `nickname`, `rank`, `bannid`, `unbann`) VALUES
(1, 'x6bfyjuuc', 'zolika', '81dc9bdb52d04dc20036dbd8313ed055', 'zoltan@gmail.com', '2024-10-04 11:32:26', '', 'A', '', '1_241216095640_e24yzd2w5u.jpg', 'profilkep.jpg', '', '', '', '', ''),
(2, 'wjtrqsh0a7', 'antal05', '40569cf39d0ee1ada21d70ca198e780b', 'antal@gmail.com', '2024-10-04 11:33:20', '', 'A', '', '', '', '', '', '', '', ''),
(3, 'fwa6zcs9it', 'bela1215', '298923c8190045e91288b430794814c4', 'antalbela@gmail.com', '2024-10-04 12:46:42', '', 'A', '', '', '', '', '', '', '', ''),
(4, 'or6cifnfv', 'erik1015', 'd2b15c75c0c389b49c2efbea79cdc946', 'kisserik@gmail.com', '2024-10-07 09:56:10', '', 'A', '', '', '', '', '', '', '', ''),
(5, 'rypnjsaoox', 'jancs1205', '437d46a857214c997956eaf0e3b21a55', 'janos12@gmail.com', '2024-10-09 09:56:27', '', 'A', '', '', '', '', '', '', '', ''),
(6, '06bkeob1fu', 'pista7515', '1e48c4420b7073bc11916c6c1de226bb', 'istvan16@gmail.com', '2024-10-09 10:50:33', '', 'A', '', '', '', '', '', '', '', ''),
(7, 'zg0twgo13m', 'kazmer18', '490640b43519c77281cb2f8471e61a71', 'kazmer@gmail.com', '2024-10-09 11:56:19', '', 'A', '', '', '', '', '', '', '', ''),
(8, 'a5ermwcn2a', 'tomi10', 'd81b9ce93c866abb7f0feb747d88868c', 'tamas@gmail.com', '2024-10-11 10:41:46', '', 'A', '', '', '', '', '', '', '', ''),
(9, 'xtro6rwfep', 'geza', '1e48c4420b7073bc11916c6c1de226bb', 'geza@gmail.com', '2024-10-18 11:20:31', '', 'A', '', '', '', '', '', '', '', ''),
(10, 'uenog17jbf', 'beni', 'f33ba15effa5c10e873bf3842afb46a6', 'benjamin@gmail.com', '2024-10-18 11:23:58', '', 'A', '', '', '', '', '', '', '', ''),
(11, 'b3hozlpv21', 'mark', 'f7cade80b7cc92b991cf4d2806d6bd78', 'mark@gmail.com', '2024-10-18 11:27:29', '::1', 'A', '', '', '', '', '', '', '', ''),
(12, 'b7y21g0igb', 'viktor10', '3dfa05a594c0e171bc690aa9101496b6', 'viktor@gmail.com', '2024-10-18 11:34:47', '::1', 'A', '', '', '', '', '', '', '', ''),
(13, 'qly1kdljgk', 'janika', 'f7cade80b7cc92b991cf4d2806d6bd78', 'janos@gmail.com', '2024-10-21 11:11:51', '::1', 'A', '', '', '', '', '', '', '', '');

--
-- Indexek a kiírt táblákhoz
--

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
-- A tábla indexei `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `korabbinev`
--
ALTER TABLE `korabbinev`
  MODIFY `kid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `login`
--
ALTER TABLE `login`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `naplo`
--
ALTER TABLE `naplo`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
