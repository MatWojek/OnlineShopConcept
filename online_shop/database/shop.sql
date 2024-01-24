-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 14 Lis 2022, 22:34
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autorzy`
--

CREATE TABLE `autorzy` (
  `id` int(11) NOT NULL,
  `imie` varchar(100) NOT NULL,
  `nazwisko` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `autorzy`
--

INSERT INTO `autorzy` (`id`, `imie`, `nazwisko`, `img`, `opis`) VALUES
(1, 'Edvard ', 'Munch', 'edvard_munch.jpg', 'Edvard Munch – norweski malarz i grafik uznawany za jednego z prekursorów ekspresjonizmu. Jego najbardziej rozpoznawanym dziełem jest Krzyk z 1893 roku.'),
(2, 'Henryk ', 'Siemiradzki', 'Henryk_Siemiradzki.jpg', 'Henryk Hektor Siemiradzki – polski malarz, przedstawiciel akademizmu.'),
(3, 'Piet', 'Mondriaan', 'Piet_Mondriaan.jpg', 'Piet Mondrian, właśc. Pieter Cornelis Mondriaan – malarz holenderski, współzałożyciel grupy artystycznej De Stijl, uważany, obok Kandinskiego i Malewicza, za jednego z prekursorów abstrakcjonizmu.'),
(4, 'Claude', 'Monet ', 'Claude_Monet.jpg', 'Oscar Claude Monet – francuski malarz, jeden z twórców i czołowych przedstawicieli impresjonizmu.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obrazy`
--

CREATE TABLE `obrazy` (
  `id` int(11) NOT NULL,
  `nazwa` text DEFAULT NULL,
  `autor_id` int(11) NOT NULL,
  `cena` decimal(10,0) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `obrazy`
--

INSERT INTO `obrazy` (`id`, `nazwa`, `autor_id`, `cena`, `img`) VALUES
(7, 'Puszcza', 1, '200000', 'obraz1.jpg'),
(9, 'Sniadanie', 3, '100000', 'obraz2.jpg'),
(10, 'Zachod', 4, '2000000', 'obraz3.jpg'),
(11, 'Autoportret', 2, '140000', 'obraz4.jpg'),
(12, 'Zlote slady', 1, '250000', 'obraz5.jpg'),
(13, 'Pomost', 2, '100000', 'obraz6.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `user_id` int(11) NOT NULL,
  `nazwa` varchar(100) NOT NULL,
  `imie` varchar(100) NOT NULL,
  `nazwisko` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefon` int(12) DEFAULT NULL,
  `haslo` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `autorzy`
--
ALTER TABLE `autorzy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `obrazy`
--
ALTER TABLE `obrazy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `autorzy`
--
ALTER TABLE `autorzy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `obrazy`
--
ALTER TABLE `obrazy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
