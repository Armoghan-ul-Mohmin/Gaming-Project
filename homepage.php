<?php
include 'includes/header.php';
include 'includes/database.php';

// Start a new session
session_start();
// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: login.php");
    exit();
}
?>


<title> GameRealm | HomePage </title>

</head>

<body>

    <!-- ========== Start Navbar ========== -->
    <?php
    include_once 'includes/navbar.php';
    ?>
    <!-- ========== End Navbar ========== -->

    <div class="row">
        <div class="col-2">
            <!-- ========== Start Sidebar ========== -->
            <?php
            include_once 'includes/sidebar.php';
            ?>
            <!-- ========== End Sidebar ========== -->
        </div>

        <div class="col-10">
            <!-- ========== Start Error ========== -->
            <div class="container text-center">
                <div class="container">
                    <?php
                    // Check if login success alert is set
                    if (isset($_SESSION['login_success'])) {
                        ?>
                        <div class="alert alert-success animate__animated animate__fadeIn" role="alert">
                            <?php echo $_SESSION['login_success']; ?>
                        </div>
                        <?php
                        // Clear the login success alert
                        unset($_SESSION['login_success']);
                    }
                    ?>
                </div>
            </div>
            <!-- ========== End Error ========== -->
            <main class="py-4">
                <!-- ========== Start Hero Section ========== -->
                <section class="hero bg-primary text-white py-5  text-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h1 class="display-4">Welcome to Game Realm</h1>
                                <p class="lead">Discover and play the latest and greatest games.</p>
                                <a href="game" class="btn btn-light btn-lg">Explore Games</a>
                            </div>
                            <div class="col-lg-6">
                                <img src="images/hero-image.png" alt="Hero Image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ========== End Hero Section ========== -->
            </main>

            <!-- ========== Start Features Games ========== -->
            <section class="featured-games mt-5">
                <div class="container">
                    <div class="row my-4">
                        <div class="col-lg-4">
                            <div class="card text-white bg-primary mb-3 h-100 d-flex flex-column">
                                <div class="card-header text-primary bg-light">
                                    <h3>Bounce</h3>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Bounce is an exciting HTML5 game where you control a bouncing
                                        ball and navigate through various obstacles. Your goal is to reach the end of
                                        each level while collecting stars and avoiding traps.</p>
                                    <a href="includes/libs/games/#bounce" class="btn btn-light mt-auto">Play Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-white bg-primary mb-3 h-100 d-flex flex-column">
                                <div class="card-header text-primary bg-light">
                                    <h3>Snake</h3>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Snake is a classic HTML5 game where you control a snake and
                                        navigate it around the game board to eat food and grow in length. The objective
                                        is to avoid colliding with the snake's own body or the game board's boundaries.
                                    </p>
                                    <a href="includes/libs/games/#snake" class="btn btn-light mt-auto">Play Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-white bg-primary mb-3 h-100 d-flex flex-column">
                                <div class="card-header text-primary bg-light">
                                    <h3>Pacman</h3>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Pacman is a classic HTML5 game where you control the iconic
                                        yellow character, Pacman, as he navigates a maze, eating pellets and avoiding
                                        ghosts. The objective is to clear the maze of all pellets while staying alive
                                        and avoiding being caught by the ghosts.</p>
                                    <a href="includes/libs/games/#pacman" class="btn btn-light mt-auto">Play Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ========== End Features Games ========== -->
        </div>
    </div>

    <?php
    include_once 'includes/scripts.php';
    ?>
</body>

</html>