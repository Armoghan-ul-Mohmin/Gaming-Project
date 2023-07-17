

CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    avatar VARCHAR(255),
    bio TEXT
);


CREATE TABLE IF NOT EXISTS games (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    creator_id INT(11),
    FOREIGN KEY (creator_id) REFERENCES users(id)
);


CREATE TABLE IF NOT EXISTS lobbies (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    game_id INT(11),
    FOREIGN KEY (game_id) REFERENCES games(id)
);

CREATE TABLE IF NOT EXISTS messages (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    sender_id INT(11),
    receiver_id INT(11),
    message TEXT,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (sender_id) REFERENCES users(id),
    FOREIGN KEY (receiver_id) REFERENCES users(id)
);


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

