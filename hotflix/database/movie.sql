-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2026 at 06:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bk_id` int(11) NOT NULL,
  `bk_moviename` varchar(200) NOT NULL,
  `bk_movie_category` varchar(200) NOT NULL,
  `bk_person_name` varchar(20) NOT NULL,
  `bk_num_people` bigint(20) NOT NULL,
  `bk_show_time` varchar(100) NOT NULL,
  `bk_mvdate` date NOT NULL,
  `bk_screen_type` varchar(200) NOT NULL,
  `bk_citynm` varchar(40) NOT NULL,
  `bk_cinema_select` varchar(200) NOT NULL,
  `bk_Payment_Method` varchar(200) NOT NULL,
  `bk_seat_no` varchar(200) NOT NULL,
  `bk_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bk_id`, `bk_moviename`, `bk_movie_category`, `bk_person_name`, `bk_num_people`, `bk_show_time`, `bk_mvdate`, `bk_screen_type`, `bk_citynm`, `bk_cinema_select`, `bk_Payment_Method`, `bk_seat_no`, `bk_img`) VALUES
(39, 'Avengers: Endgame', 'Adventure, Sci-Fi', 'Abdul Rehman', 3, '10:00 AM', '2026-01-14', '4D', 'karachi', 'Nuplex', 'cash', 'A1,A2,A3', 'AVENGERS.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ct_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `cin_id` int(11) NOT NULL,
  `cin_name` varchar(200) NOT NULL,
  `cin_city` varchar(100) NOT NULL,
  `cin_location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`cin_id`, `cin_name`, `cin_city`, `cin_location`) VALUES
(8, 'Cineplex Cinemas ', 'Karachi', 'Nazimabad'),
(9, 'Atrium Cinemas ', 'Karachi', 'DHA');

-- --------------------------------------------------------

--
-- Table structure for table `movieshow`
--

CREATE TABLE `movieshow` (
  `show-id` int(11) NOT NULL,
  `show_movie` varchar(200) NOT NULL,
  `show_timestart` time NOT NULL,
  `show__timeend` time NOT NULL,
  `show_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movieshow`
--

INSERT INTO `movieshow` (`show-id`, `show_movie`, `show_timestart`, `show__timeend`, `show_date`) VALUES
(1, 'Million Dollar Baby', '02:00:00', '04:00:00', '2024-12-25'),
(2, 'The Dark Knight', '00:30:00', '02:31:00', '2024-12-31'),
(4, 'Avatar', '03:00:00', '05:00:00', '2025-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `movie_upload`
--

CREATE TABLE `movie_upload` (
  `mov_id` int(11) NOT NULL,
  `mov_name` varchar(200) NOT NULL,
  `mov_trailer` varchar(200) NOT NULL,
  `mov_description` varchar(200) NOT NULL,
  `mov_image` varchar(200) NOT NULL,
  `mov_rating` varchar(200) NOT NULL,
  `mov_director` varchar(200) NOT NULL,
  `mov_year` bigint(20) NOT NULL,
  `mov_action` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_upload`
--

INSERT INTO `movie_upload` (`mov_id`, `mov_name`, `mov_trailer`, `mov_description`, `mov_image`, `mov_rating`, `mov_director`, `mov_year`, `mov_action`) VALUES
(18, 'IT', 'https://youtu.be/xKJmEC5ieOk?feature=shared', 'In the town of Derry, Maine, a group of children known as the \"Losers\' Club\" confronts their worst fears when they square off against an ancient, shape-shifting evil entity that emerges from the sewer', 'IT.jpeg', '9', ' Andy Muschietti', 2017, 'Horor, thriller'),
(19, 'Avengers: Endgame', 'https://youtu.be/TcMBFSGVi1c?feature=shared', 'After the devastating events of Avengers: Infinity War, the remaining Avengers assemble once more to reverse Thanos\'s actions and restore balance to the universe.', 'AVENGERS.jpeg', '7', ' Anthony Russo, Joe Russo', 2019, 'Adventure, Sci-Fi'),
(20, 'Clash of the Titans', 'https://youtu.be/z7cEL6n24d4?feature=shared', 'Perseus, a demigod and son of Zeus, embarks on a perilous journey to defeat Hades, the vengeful god of the underworld, before he can seize power from Zeus and unleash hell on earth.', 'CLASH OF TITANS.jpeg', '7', ' Louis Leterrier', 2010, 'Action, Adventure, Fantasy'),
(21, 'Avatar', 'https://youtu.be/5PSNL1qE6VY?feature=shared', 'n the lush alien world of Pandora, a paraplegic Marine becomes torn between following his orders and protecting the world he feels is his home.', 'AVATAR.jpeg', '7', ' James Cameron ', 2009, 'Action, Adventure, Fantasy'),
(22, 'Mulan', 'https://youtu.be/KK8FHdFluOQ?feature=shared', 'A young Chinese maiden disguises herself as a male warrior in order to save her father and becomes one of China\'s greatest heroines in the process.', 'MULAN.jpeg', '6', ' Niki Caro ', 2020, 'Action, Adventure, Drama '),
(23, 'The Rhythm Section', 'https://youtu.be/0Uq_5bYGYoY?feature=shared', ' A woman seeks revenge against those who orchestrated a plane crash that killed her family.', 'RHYTHM SECTION.jpeg', '7', ' Reed Morano', 2020, 'Action, Drama, Mystery'),
(24, 'Million Dollar Baby', 'https://youtu.be/5_RsHRmIRBY?feature=shared', 'A determined woman works with a hardened boxing trainer to become a professional.', 'MILLION DOLLAR BABY.jpeg', '8', ' Clint Eastwood', 2004, ' Drama, Sport '),
(27, 'Mad Max: Fury Road', 'https://youtu.be/hEJnMQG9ev8?feature=shared', 'n a post-apocalyptic wasteland, Max teams up with Furiosa to flee from a cult leader and his army in a high-speed desert chase.', 'MAD MAX FURY ROAD.jpeg', '8', '  George Miller', 2015, 'Action, Adventure, Sci-Fi'),
(28, 'The Dark Knight', 'https://youtu.be/EXeTwQWrcwY?feature=shared', 'Batman faces the Joker, a criminal mastermind who seeks to create chaos in Gotham City.', 'THE DARK KNIGHT.jpeg', '7', ' Christopher Nolan', 2008, 'Action, Crime, Drama'),
(29, 'The Matrix', 'https://youtu.be/9ix7TUGVYIo?feature=shared', 'A hacker discovers the reality he lives in is a simulation and joins a rebellion against its controllers.', 'MATRIX.jpeg', '5', '  Lana Wachowski, Lilly Wachowski', 1999, 'Action, Sci-Fi');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rev_id` int(11) NOT NULL,
  `rev_comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rev_id`, `rev_comment`) VALUES
(21, 'Wonderful movie '),
(22, 'Wonderful movie ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `u_password` varchar(200) NOT NULL,
  `u_phone` bigint(20) NOT NULL,
  `u_address` varchar(200) NOT NULL,
  `u_role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `u_name`, `u_email`, `u_password`, `u_phone`, `u_address`, `u_role`) VALUES
(49, 'Abdul Rehman', 'abdulrehman@gmail.com', '00000', 1234567890, 'Naya Nazimabad, Karachi', 'User'),
(50, 'Alishba Hamid', 'alishbahamid@gmail.com', '11111', 1236547892, '5 star, karachi', 'User'),
(51, 'Abdul Haseeb Qazi', 'abdulhaseeb@gmail.com', '55555', 1239872580, 'Sharifabad Block 1, karachi', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bk_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`cin_id`);

--
-- Indexes for table `movieshow`
--
ALTER TABLE `movieshow`
  ADD PRIMARY KEY (`show-id`);

--
-- Indexes for table `movie_upload`
--
ALTER TABLE `movie_upload`
  ADD PRIMARY KEY (`mov_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rev_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `cin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movieshow`
--
ALTER TABLE `movieshow`
  MODIFY `show-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movie_upload`
--
ALTER TABLE `movie_upload`
  MODIFY `mov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
