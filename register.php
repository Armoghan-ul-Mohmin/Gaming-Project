<?php
include_once 'includes/header.php';
// Include Database Connection
include 'includes/database.php';

// Start a new session
session_start();
?>

<title>Online Gaming Platform | Register</title>

</head>

<body class="bg-primary">

    <!-- ========== Start Heading ========== -->
    <div class="h1 text-center my-5 text-light" style="font-family: 'Caprasimo', cursive;">
        Welcome To Online Gaming Platform Register
        <div class="container">
            <hr>
        </div>
    </div>
    <!-- ========== End Heading ========== -->

    <!-- ========== Start Error ========== -->
    <div class="container">
        <?php
        // Check if register error alert is set
        if (isset($_SESSION['register_error'])) {
            ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['register_error']; ?>
            </div>
            <?php
            // Clear the register error alert
            unset($_SESSION['register_error']);
        }
        ?>
    </div>
    <!-- ========== End Error ========== -->

    <!-- ========== Start Register Form ========== -->
    <main>
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <div class="card bg-light">
                        <div class="card-body">
                            <br>
                            <br>
                            <h1 class="card-title text-center text-primary mb-4">
                                Register
                            </h1>
                            <form method="POST" action="includes/register-process.php" id="loginForm">
                                <div class="form-group my-3">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="Enter Username">
                                </div>
                                <div class="form-group my-3">
                                    <label for="username">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter email">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-4">Register</button>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ========== End  Redister Form========== -->

    <?php
    include_once 'includes/scripts.php';
    ?>
</body>

</html>