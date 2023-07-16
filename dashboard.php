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


<title> GameRealm | Dashboard </title>

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
            <!-- ========== Start Main Section ========== -->
            <main>
                <div class="main-top my-2">
                    <h1>
                        <i class="fas fa-gamepad"> Games List</i>
                    </h1>
                </div>

                <!-- ========== Start Games Cards ========== -->

                <div class="row my-3">
                    <?php
                    // Perform a database query to fetch the game data
                    $query = "SELECT id, name FROM games";
                    $result = mysqli_query($conn, $query);

                    // Counter variable
                    $counter = 0;

                    // Loop through the result set and generate the cards
                    while ($row = mysqli_fetch_assoc($result)) {
                        $gameName = $row['name'];
                        $userName = $row['name'];
                        $userId = $row['id'];
                        ?>
                    <div class="col-3">
                        <div class="card border-primary mb-3 mx-2">
                            <div class="card-header bg-primary text-center">
                                <h4>Games</h4>
                            </div>
                            <div class="card-body text-center">
                                <p><b>
                                        <?php echo $gameName; ?>
                                    </b></p>
                                <div class="per">
                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <th>Game Id</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo $userName; ?>
                                            </td>
                                            <td>
                                                <?php echo $userId; ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        // Increment the counter
                        $counter++;

                        // Break the loop if counter reaches 3
                        if ($counter == 4) {
                            break;
                        }
                    }

                    // Close the database connection
                    ?>
                </div>


                <!-- ========== End games Cards ========== -->

                <!-- ========== Start Players Score ========== -->
                <section class="attendance">
                    <div class="attendance-list">
                        <h2>
                            <i class="fas fa-user"> Players List</i>
                        </h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Join Date</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Perform database query to fetch user data
                                $query = "SELECT * FROM users";
                                $result = mysqli_query($conn, $query);

                                // Loop through the result set and generate table rows
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id'];
                                    $name = $row['username'];
                                    $joinDate = $row['join_date'];
                                    ?>
                                <tr>
                                    <td>
                                        <?php echo $id; ?>
                                    </td>
                                    <td>
                                        <?php echo $name; ?>
                                    </td>
                                    <td>
                                        <?php echo $joinDate; ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#userModal<?php echo $id; ?>">
                                            View
                                        </button>
                                    </td>
                                </tr>

                                <!-- User Modal -->
                                <div class="modal fade" id="userModal<?php echo $id; ?>" tabindex="-1"
                                    aria-labelledby="userModalLabel<?php echo $id; ?>" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="userModalLabel<?php echo $id; ?>">User
                                                    Details: <?php echo $name; ?>
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Display user details here -->
                                                <p><strong>ID:</strong>
                                                    <?php echo $id; ?>
                                                </p>
                                                <p><strong>Name:</strong>
                                                    <?php echo $name; ?>
                                                </p>
                                                <p><strong>Join Date:</strong>
                                                    <?php echo $joinDate; ?>
                                                </p>
                                                <!-- Add more user details if needed -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                // Close the database connection
                                mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>

                    </div>
                </section>

                <!-- ========== End Players Score ========== -->
            </main>
            <!-- ========== End Main Section ========== -->
        </div>
    </div>

    <?php
    include_once 'includes/scripts.php';
    ?>
</body>

</html>