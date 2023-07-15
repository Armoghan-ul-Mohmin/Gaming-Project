-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2023 at 10:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Gaming-Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `description`, `creator_id`) VALUES
(1, 'Bounce', 'Bounce is an exciting HTML5 game where you control a bouncing ball and navigate through various obstacles. Your goal is to reach the end of each level while collecting stars and avoiding traps', 2),
(2, 'Snake', 'Snake is a classic HTML5 game where you control a snake and navigate it around the game board to eat food and grow in length. The objective is to avoid colliding with the snake\'s own body or the game board\'s boundaries.', 2),
(3, 'Pac Man', 'Pacman is a classic HTML5 game where you control the iconic yellow character, Pacman, as he navigates a maze, eating pellets and avoiding ghosts. The objective is to clear the maze of all pellets while staying alive and avoiding being caught by the ghosts.', 2),
(4, 'Tetris', 'Tetris is a tile-matching puzzle video game where you arrange different shaped blocks, called Tetriminos, as they fall down the playing field. The goal is to create horizontal lines of blocks without any gaps.', 2),
(5, 'Defender', 'Defender is a classic arcade game released in 1980 by Williams Electronics. In this side-scrolling shoot \'em up game, you control a spaceship that must defend the human population on the planet\'s surface from waves of alien invaders.', 2),
(6, 'Spider', 'Spider is a popular solitaire card game that is played using two decks of standard playing cards. The objective of the game is to arrange all the cards in descending order in the tableau, while following the rules of the game. The game requires strategic thinking and careful planning to successfully complete the eight foundation piles.', 2),
(7, 'Puzzle', 'Puzzle games are a genre of games that involve solving various challenges and problems through logical thinking and problem-solving skills. These games often feature puzzles, riddles, or brain teasers that require players to use their creativity and critical thinking abilities to find solutions.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lobbies`
--

CREATE TABLE IF NOT EXISTS lobbies (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `game_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS messages (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    sender_id INT(11),
    receiver_id INT(11),
    message TEXT,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (sender_id) REFERENCES users(id),
    FOREIGN KEY (receiver_id) REFERENCES users(id)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS users (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator_id` (`creator_id`);

--
-- Indexes for table `lobbies`
--
ALTER TABLE `lobbies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lobbies`
--
ALTER TABLE `lobbies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;




