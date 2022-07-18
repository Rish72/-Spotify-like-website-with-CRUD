-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 07:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cwh_music_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(11) NOT NULL,
  `artist_name` varchar(50) NOT NULL,
  `user_id` int(5) NOT NULL,
  `songs_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `artist_name`, `user_id`, `songs_id`) VALUES
(1, 'Glass animals', 1, 1),
(2, 'Dave Bayley', 1, 1),
(3, 'Justin Bieber', 1, 2),
(4, 'One direction', 1, 18),
(6, 'Justin Bieber', 1, 19),
(7, 'Dave Bayley', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `songs_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `songname` text NOT NULL,
  `date` date NOT NULL,
  `imgurl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`songs_id`, `user_id`, `songname`, `date`, `imgurl`) VALUES
(1, 1, 'Heat waves', '2022-01-26', 'https://pmstudio.com/pmstudio/images/The-Chainsmokers87.jpg'),
(2, 1, 'Make You Mine', '2019-10-01', 'https://i.scdn.co/image/ab67616d0000b27332649461690397f3bbc9f452'),
(17, 1, 'Kesariya', '2022-07-17', 'https://www.pinkvilla.com/imageresize/kesariya-ranbir-kapoor-alia-bhatt-main.jpg?width=752&format=webp&t=pvorg'),
(18, 1, 'Night Changes', '2014-11-14', 'https://images.genius.com/31c7d09c4aa1b324bb911d0db72453a3.1000x1000x1.jpg'),
(19, 1, 'Baby', '2010-03-12', 'https://static.wikia.nocookie.net/justin-bieber/images/4/43/My_World_2.0.jpg/revision/latest?cb=20200910180551'),
(20, 1, 'See You Again', '2009-05-15', 'https://i1.sndcdn.com/artworks-000113048782-xod2zj-t500x500.jpg'),
(24, 11, 'Let me love you', '2012-02-29', 'https://i.scdn.co/image/ab67616d0000b273bec76efef4e29620043f4068'),
(25, 11, 'Beliver', '2017-06-15', 'https://i.scdn.co/image/ab67616d0000b2735675e83f707f1d7271e5cf8a'),
(31, 11, 'asan', '2022-07-17', 'ashd');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `user_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `signup_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_id`, `username`, `password`, `signup_date`) VALUES
(1, 'rishi', 'rishi', '2022-07-17 00:00:00'),
(2, 'isra', 'isra', '2022-07-17 14:07:03'),
(3, 'rishi2', 'rishi2', '2022-07-17 15:37:02'),
(4, 'rishu', 'rishu', '2022-07-17 15:44:49'),
(5, 'priya', 'priya', '2022-07-17 15:46:52'),
(6, 'rishi2', 'rishi2', '2022-07-17 15:49:32'),
(7, 'rishu2', 'rishu2', '2022-07-17 15:50:22'),
(8, 'rishi3', 'rishi3', '2022-07-17 15:53:01'),
(9, 'rishi5', 'rishi5', '2022-07-17 15:53:28'),
(10, 'rishi6', 'rishi6', '2022-07-17 15:55:15'),
(11, 'Prashant', 'prashant', '2022-07-17 22:20:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`),
  ADD KEY `songs_fk` (`songs_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`songs_id`),
  ADD KEY `user_id_fk` (`user_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `songs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
