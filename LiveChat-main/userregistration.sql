-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Sty 2023, 15:35
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `userregistration`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `chat`
--

CREATE TABLE `chat` (
  `name` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `userMessage` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `chat`
--

INSERT INTO `chat` (`name`, `userMessage`, `img`, `Data`) VALUES
('Jan', 'test', '', '2022-10-18'),
('admin', 'test 2 ', '', '2022-10-18'),
('guest990390', 'asdasd', '', '2022-12-11');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `usertable`
--

CREATE TABLE `usertable` (
  `userLogin` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `userPassword` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `usertable`
--

INSERT INTO `usertable` (`userLogin`, `userPassword`) VALUES
('admin', 'admin'),
('guest424731', ''),
('guest749257', ''),
('guest784885', ''),
('guest987708', ''),
('guest990390', ''),
('Jan', 'qwe'),
('ksek', 'ksek');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`userLogin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
