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


<title> GameRealm | Settings </title>

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

            <!-- ========== Start Success Alert ========== -->
            <div class="container my-3">
                <?php if (isset($_SESSION['update_success']) && $_SESSION['update_success'] === true) { ?>
                <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between"
                    role="alert">
                    <div>
                        <i class="fas fa-check-circle mr-2"></i>
                        Your settings have been updated successfully.
                    </div>
                    <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
                </div>
                <?php
                    // Reset the session variable after displaying the alert
                    unset($_SESSION['update_success']);
                }
                ?>
            </div>

            <!-- ========== End Success Alert ========== -->

            <!-- ========== Start Settings Form ========== -->
            <div class="container mt-5">
                <h2>Settings</h2>
                <form action="includes/update-settings.php" method="POST">

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" value="<?php echo $userData['email']; ?>"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea id="bio" name="bio" class="form-control"><?php echo $userData['bio']; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
            <!-- ========== End Settings Form ========== -->
        </div>
    </div>

    <?php
    include_once 'includes/scripts.php';
    ?>
</body>

</html>