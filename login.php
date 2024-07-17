<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start(); // Start the session

$host = "localhost";
$port = 3306;
$socket = "";
$user = "root";
$password = "";
$dbname = "sbp";

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname, $port, $socket);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userName = isset($_POST['userName']) ? $_POST['userName'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $loginType = isset($_POST['loginType']) ? $_POST['loginType'] : '';

    // Check if login type is admin
    if ($loginType === "admin") {
        // Check if credentials match admin credentials
        if ($userName == $adminUsername && $password == $adminPassword) {
            // Redirect to admin dashboard
            $_SESSION['admin_username'] = $adminUsername; // Store admin username in session for authentication
            header("Location: admin.php");
            exit();
        } else {
            // Redirect back to login page with error message
            $_SESSION['error_message'] = "Invalid admin credentials.";
            header("Location: login.php");
            exit();
        }
    } else {
        // For user login, validate credentials against the database
        $sql = "SELECT * FROM users WHERE user_name = '$userName' AND email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User found, redirect to user dashboard
            $_SESSION['user_username'] = $userName; // Store user username in session for authentication
            header("Location: Entrepreneur.php");
            exit();
        } else {
            // User not found, redirect back to login page with error message
            $_SESSION['error_message'] = "Invalid user credentials.";
            header("Location: login.php");
            exit();
        }
    }
}

// Close connection
$conn->close();
?>








<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>StartUp Boost Pakistan</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">StartUp Boost Pakistan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto"> <!-- Added ml-auto class here -->
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="investorsdetails.php">Investors</a>
                      </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="funding.php">Funding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="investor.php">Join As Investor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>

                    
                </ul>
                <!-- Login Button with Icon -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </li>
                </ul>
                <!-- Signup Button with Icon -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">
                            <i class="fas fa-user-plus"></i> Signup
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="container">
            <div class="row">
                <!-- Right Column -->
                <div class="col-md-6 right">
                    <div class="image-container">
                        <img class="img-fluid" src="graphics/Login.png" alt="Image Description">
                    </div>
                </div>
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="container main-class order-md-last">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h2 class="section-heading custom-heading">LOG<span
                                        style="color: rgb(255, 191, 0);">IN</span>
                                </h2>

                                <p class="pstyle">
                                    WELCOME TO STARTUP BOOST PAKISTAN
                                </p>
                                <form class="contactform" method="post">
    <div class="mb-3">
        <label for="userName" class="form-label">User Name</label>
        <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter your user name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"> <!-- Added name attribute -->
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <div class="password-input">
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
            <!-- Add the eye icon for password visibility toggle -->
            <span id="togglePassword" style="cursor: pointer;"><i class="fas fa-eye"></i></span>
        </div>
    </div>
    <div class="mb-3 form-check">
        <input type="radio" class="form-check-input" id="userRadio" name="loginType" value="user" checked> <!-- Added value attribute -->
        <label class="form-check-label" for="userRadio">Login as user</label>
    </div>
    <div class="mb-3 form-check">
        <input type="radio" class="form-check-input" id="adminRadio" name="loginType" value="admin"> <!-- Added value attribute -->
        <label class="form-check-label" for="adminRadio">Login as admin</label>
    </div>
    
    <button type="submit" class="btn btnres">Submit</button>
</form>
<script>
    // Function to reset the form after submission
    function resetForm() {
        document.getElementById("loginForm").reset();
    }
</script>

<?php
if (isset($_SESSION['success_message'])) {
    echo "<div class='alert alert-success' role='alert'>{$_SESSION['success_message']}</div>";
    unset($_SESSION['success_message']); // Clear the success message after displaying it
} elseif (isset($_SESSION['error_message'])) {
    echo "<div class='alert alert-danger' role='alert'>{$_SESSION['error_message']}</div>";
    unset($_SESSION['error_message']); // Clear the error message after displaying it
}
?>




                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            var passwordField = document.getElementById('password');
            var icon = this.querySelector('i');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>

</body>

</html>