<?php
include 'includes/header.php';
?>

<title>GameRealm</title>


<!-- ========== Start Custom Css  ========== -->
<style>
.feature-card {
    transition: transform 0.3s ease-in-out;
}

.feature-card:hover {
    transform: scale(1.05);
}

.carousel-container {
    position: relative;
}

.carousel-container .header {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    width: 100%;
    text-align: center;
    color: #fff;
}

.footer {
    background-color: #f8f9fa;
    padding: 20px;
    margin-top: auto;
}
</style>
<!-- ========== End Custom Css  ========== -->

</head>

<body class="bg-primary">

    <!-- ========== Start Navbar ========== -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Game Realm</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-outline-primary mx-1" href="login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary mx-2" href="register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ========== End Navbar ========== -->

    <!-- ========== Start Main Section ========== -->
    <main>
        <div class="container-fluid">
            <div class="carousel-container my-2">
                <header class="header">
                    <div class="container text-center">
                        <h1 style="font-family: 'Caprasimo', cursive;">Welcome to Game Realm</h1>
                        <p class="lead">Play, compete, and connect with gamers from around the world.</p>
                    </div>
                </header>
                <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#imageCarousel" data-slide-to="0"></li>
                        <li data-target="#imageCarousel" data-slide-to="1"></li>
                        <li data-target="#imageCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/coc.jpg" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pubg.avif" class="d-block w-100" alt="Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="images/coc.jpg" class="d-block w-100" alt="Image 3">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <!-- ========== End Main Section ========== -->

    <!-- ========== Start Features Section ========== -->
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mt-5">
                    <div class="card feature-card text-center border-0 shadow-lg">
                        <div class="card-body bg-danger text-white">
                            <i class="fas fa-gamepad fa-4x mb-3"></i>
                            <h3 class="card-title">Wide Range of Games</h3>
                            <p class="card-text">Choose from a vast collection of games across various genres.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mt-5">
                    <div class="card feature-card text-center border-0 shadow-lg">
                        <div class="card-body bg-danger text-white">
                            <i class="fas fa-users fa-4x mb-3"></i>
                            <h3 class="card-title">Multiplayer Experience</h3>
                            <p class="card-text">Play with friends or compete against players worldwide.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mt-5">
                    <div class="card feature-card text-center border-0 shadow-lg">
                        <div class="card-body bg-danger text-white">
                            <i class="fas fa-trophy fa-4x mb-3"></i>
                            <h3 class="card-title">Leaderboards and Achievements</h3>
                            <p class="card-text">Track your progress, earn achievements, and climb the
                                leaderboards.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Features Section ========== -->

    <!-- ========== Start Footer ========== -->
    <footer class="footer">
        <div class="container text-center">
            <span class="text-muted">Game Realm &copy; 2023</span>
        </div>
    </footer>
    <!-- ========== End Footer ========== -->
    <?php
    include 'includes/scripts.php';
    ?>
</body>

</html>