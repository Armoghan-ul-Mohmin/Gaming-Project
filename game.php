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


<title> GameRealm | Games </title>

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
            <!-- ========== Start Games Section ========== -->
            <main>
                <div class="container-fluid">
                    <main>
                        <div class="container py-5">
                            <div class="container my-3">
                                <section class="hero bg-primary text-white py-5">
                                    <div class="container my-2">
                                        <?php
                                        // Perform database query to fetch game data
                                        $query = "SELECT name, description FROM games";
                                        $result = mysqli_query($conn, $query);

                                        // Check if the query was successful and fetch all rows
                                        if ($result && mysqli_num_rows($result) > 0) {
                                            $games = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                            foreach ($games as $game) {
                                                $name = $game['name'];
                                                $description = $game['description'];
                                                ?>
                                                <div class="container my-3">
                                                    <section class="hero bg-primary text-white py-5">
                                                        <div class="container my-2">
                                                            <div class="row align-items-center">
                                                                <div class="col-lg-6">
                                                                    <h1 class="display-4">
                                                                        <?php echo $name; ?>
                                                                    </h1>
                                                                    <hr>
                                                                    <p class="lead">
                                                                        <?php echo $description; ?>
                                                                    </p>
                                                                    <div class="align-items-center text-center">
                                                                        <a href="includes/libs/games/#<?php echo strtolower($name); ?>"
                                                                            class="btn btn-light">Play Now</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 text-center">
                                                                    <img src="images/<?php echo strtolower($name); ?>.png"
                                                                        alt="Hero Image" class=" img-thumbnail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                                <hr>
                                                <?php
                                            }
                                        }

                                        // Close the result set and the database connection
                                        mysqli_free_result($result);
                                        mysqli_close($conn);
                                        ?>
                                    </div>
                                </section>


                            </div>
                            <!-- Games Section Ends -->

                        </div>
                    </main>
                </div>
            </main>


            <!-- ========== End Games Section ========== -->
        </div>
    </div>

    <?php
    include_once 'includes/scripts.php';
    ?>
</body>

</html>