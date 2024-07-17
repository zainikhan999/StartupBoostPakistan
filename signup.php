<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = isset($_POST['firstName']) ? mysqli_real_escape_string($conn, $_POST['firstName']) : '';
    $lastName = isset($_POST['lastName']) ? mysqli_real_escape_string($conn, $_POST['lastName']) : '';
    $userName = isset($_POST['userName']) ? mysqli_real_escape_string($conn, $_POST['userName']) : '';
    $whatsappContact = isset($_POST['whatsappContact']) ? mysqli_real_escape_string($conn, $_POST['whatsappContact']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';

    $password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : '';
   
    // Check if username or email already exist
    $checkQuery = "SELECT * FROM `users` WHERE user_name = '$userName' OR email = '$email'";
    $result = $conn->query($checkQuery);
    if (mysqli_num_rows($result) > 0) {
        $error_message = "Error: User already exists with this email or user name .";
    } else {
        // Generate unique ID
        do {
            $id = rand(100000, 999999);
            $id_check_sql = "SELECT * FROM `users` WHERE `id` = '$id'";
            $id_check_result = mysqli_query($conn, $id_check_sql);
        } while (mysqli_num_rows($id_check_result) > 0);
        
        $insertuser = "INSERT INTO `users` (`id`,`first_name`, `last_name`, `user_name`, `whatsapp_contact`, `email`, `password`)
                        VALUES ('$id','$firstName', '$lastName', '$userName', '$whatsappContact', '$email', '$password')";
                         $resultForm = mysqli_query($conn, $insertuser);

                         if ($resultForm) {
                             $success_message = "SignUp Success.";
                         } else {
                             $error_message = "Error: " . mysqli_error($conn);
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
                              <h2 class="section-heading custom-heading">SIGN <span
                                        style="color: rgb(255, 191, 0);">UP</span>
                                </h2>

                                <p class="pstyle">
                                    WELCOME TO STARTUP BOOST PAKISTAN
                                </p>
                                <form class="contactform" action="signup.php" method="POST">
                                  <div class="mb-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name" required>
                                </div>
                                <div class="mb-3">
                                  <label for="userName" class="form-label">User Name</label>
                                  <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter your user name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="whatsappContact" class="form-label">WhatsApp Contact</label>
                                    <input type="text" class="form-control" id="whatsappContact" name="whatsappContact" placeholder="Enter your WhatsApp contact" required>
                                </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Your Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>

                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="password-input">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                                            <!-- Add the eye icon for password visibility toggle -->
                                            <span id="togglePassword" style="cursor: pointer;"><i class="fas fa-eye"></i></span>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btnres">Submit</button>
                                </form>
                                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    if (isset($success_message)) {
                                        echo "<div class='alert alert-success' role='alert'>$success_message</div>";
                                    } elseif (isset($error_message)) {
                                        echo "<div class='alert alert-danger' role='alert'>$error_message</div>";
                                    }
                                } ?>
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