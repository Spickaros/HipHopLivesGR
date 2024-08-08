-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 08 Αυγ 2024 στις 14:43:58
-- Έκδοση διακομιστή: 10.4.32-MariaDB
-- Έκδοση PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `loginsystem`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `lives`
--

CREATE TABLE `lives` (
  `id` int(11) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `images` text DEFAULT NULL,
  `date` date NOT NULL,
  `beginDate` date NOT NULL,
  `endDate` date NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `lives`
--

INSERT INTO `lives` (`id`, `artist`, `location`, `images`, `date`, `beginDate`, `endDate`, `link`) VALUES
(1, 'Bloody Hawk', 'Tour', 'bh_tou2024_1220x370.jpg', '0000-00-00', '2024-08-13', '2024-09-28', 'https://www.more.com/music/bloody-hawk-tour-2024/'),
(2, 'Λογος Τιμης', 'Tour', 'lt2024tour_1220x370.jpg', '0000-00-00', '2024-08-13', '2024-09-21', 'https://www.more.com/music/logos-timis-tour-2024/'),
(3, 'Novel 729', 'Athens', '729_petra_viva_1220x370.jpg', '2024-09-28', '0000-00-00', '0000-00-00', 'https://www.more.com/music/novel-729-live-stin-petroupoli/'),
(4, 'Off The Hook Festival', 'Athens', 'oth24_withsponsors_1220x370.png', '0000-00-00', '2024-09-06', '2024-09-07', 'https://www.more.com/music/festival/off-the-hook-festival-2024/'),
(5, 'Dani Gambino', 'Tour', 'header-tour-poster-(1220-x-370).jpg', '0000-00-00', '2024-09-10', '2024-09-27', 'https://www.more.com/music/dani-gambino-tour-2024/'),
(7, 'Λογος Τιμης', 'Thessaloniki', '1220x370 (1).jpg', '2024-09-21', '0000-00-00', '0000-00-00', 'https://www.more.com/music/logos-timis-live-stin-thessaloniki/'),
(8, 'Dani Gambino', 'Thessaloniki', 'header.jpg', '2024-09-14', '0000-00-00', '0000-00-00', 'https://www.more.com/music/dani-gambino-thessaloniki/'),
(10, 'ΛΕΞ', 'Tour', 'lex_summertour2023part2_1220x370.png', '0000-00-00', '2023-06-17', '2023-07-14', 'https://www.more.com/music/lex-2023/');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `tickets`
--

CREATE TABLE `tickets` (
  `artist` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  `user` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `tickets`
--

INSERT INTO `tickets` (`artist`, `location`, `user`, `id`) VALUES
('Dani Gambino', 'Tour', 'giannis13', 1),
('ΛΕΞ', 'Tour', 'giannis13', 2);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `uidUsers` int(11) NOT NULL,
  `emailUsers` varchar(255) NOT NULL,
  `pwdUsers` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'giannis@gmail.com', '$2y$10$9Gn0necRrbS1WAKsZKhJm.Mzd5LjSX7fZtvffCDT4wlTJDsqzKXFK');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `lives`
--
ALTER TABLE `lives`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`artist`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uidUsers`),
  ADD UNIQUE KEY `emailUsers` (`emailUsers`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `lives`
--
ALTER TABLE `lives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `uidUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
