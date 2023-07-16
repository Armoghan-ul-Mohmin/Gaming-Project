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


<title> GameRealm | Lobby </title>

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
            <!-- ========== Start Search Funcanility ========== -->
            <?php
            // Check if the search query is submitted
            if (isset($_GET['search'])) {
                // Get the search query
                $search = $_GET['search'];

                // Query to fetch users matching the search query
                $query = "SELECT * FROM users WHERE username LIKE '%$search%' ORDER BY id";
            } else {
                // Query to fetch all users
                $query = "SELECT * FROM users ORDER BY id";
            }

            // Execute the query
            $result = mysqli_query($conn, $query);
            ?>
            <!-- ========== End Search Funcanility ========== -->

            <!-- ========== Start Search Box ========== -->
            <div class="container my-4">
                <form method="GET" action="">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search Users"
                            value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary mx-2">Search</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- ========== End Search Box ========== -->

            <!-- ========== Start Display User Table ========== -->
            <div class="container my-4">
                <div class="container my-4">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $username = $row['username'];
                                    $avatar = $row['avatar'];

                                    // Use a fallback avatar URL if the user doesn't have an avatar
                                    if (empty($avatar)) {
                                        $fallbackAvatar = 'data:image/png;base64,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'; // Replace with your desired fallback avatar URL
                                        $avatar = $fallbackAvatar;
                                    }

                                    // Output the user information in a card with a link to the chat page
                                    echo '<ul class="list-unstyled mb-0">';
                                    echo '<li class="p-2 border-bottom" style="background-color: #eee;">';
                                    echo '<a href="chat?selected_username=' . $username . '&session_username=' . $_SESSION['username'] . '" class="d-flex justify-content-between">';
                                    echo '<div class="d-flex flex-row">';
                                    echo '<img src="' . $avatar . '" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">';
                                    echo '<div class="pt-1">';
                                    echo '<p class="fw-bold mb-0">' . $username . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '<div class="pt-1">';
                                    echo '</div>';
                                    echo '</a>';
                                    echo '</li>';
                                    echo '</ul>';
                                }
                            } else {
                                echo "<p>No users found.</p>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            // Close the database connection
            mysqli_close($conn);
            ?>
            <!-- ========== End Display User Table ========== -->
        </div>
    </div>

    <?php
    include_once 'includes/scripts.php';
    ?>
</body>

</html>