-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Lis 2021, 20:21
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `betterinsta`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ig`
--

CREATE TABLE `ig` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `title` text NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ig`
--

INSERT INTO `ig` (`id`, `url`, `title`, `description`) VALUES
(10, '/posts/04a7b819cbc9f6205dde444f5a83f5d77e3a.jpg', 'Pogo', 'Twitch Emote'),
(11, '/posts/4eb45348ee6b6f83cbd6059fb790785f08d1.jpg', 'Kekw Shocked', 'Twitch Emote 2'),
(13, '/posts/8a7e7282f85af6108d4edbbbe29a38fc660a.jpg', '5head ', 'Ja po zrobieniu tej strony hehe'),
(14, '/posts/bf57b1c8086e3a0e3517bbc5f5c8175803a4.jpg', 'EZ', ':>'),
(15, '/posts/316aee862d687f70a8f35481b690aa9f4d2c.jpg', 'Hmm', 'Reklama telewizyjna'),
(16, '/posts/0cff9ce99a9b6e4a061e24f9b2d618149570.jpg', 'Spongebob', 'Dzieciństwo'),
(17, '/posts/27efe8917fd0ebb693e101b1197253b7fb00.jpg', 'CSGO', ''),
(18, '/posts/f07eb6ecf82433cc3c98b50fc6b3bf0be6c0.jpg', 'Burger', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ig`
--
ALTER TABLE `ig`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ig`
--
ALTER TABLE `ig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
