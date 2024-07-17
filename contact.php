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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $message = isset($_POST['message']) ? mysqli_real_escape_string($conn, $_POST['message']) : '';

    // Insert into database
    $sql = "INSERT INTO `contactform` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) == TRUE) {
        $success_message = "Message submitted successfully!";
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

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
                <div class="col-md-6 ">
                    <div class="image-container">
                        <img class="img-fluid" src="graphics/contactus.jpg" alt="Image Description">
                    </div>
                </div>
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="container main-class order-md-last" >
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h2 class="section-heading custom-heading">CONTACT <span style="color: rgb(255, 191, 0);">US</span>
                                </h2>
                                <h2 class="sectionstyle custom-heading" >
                                    GET A QUOTE!</h2>
                                <p class="pstyle">
                                    We will reach you out soon.
                                </p>
                                <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errors) && isset($success_message)) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= $success_message; ?>
                                    </div>
                                <?php elseif ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($errors)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php foreach ($errors as $error) : ?>
                                            <p><?= $error; ?></p>
                                        <?php endforeach; ?>
                                    </div>
                                <?php elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($error_message)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $error_message; ?>
                                    </div>
                                <?php endif; ?>
                                <form class="contactform" action="" method="POST">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="<?= isset($name) ? htmlspecialchars($name) : ''; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Your Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?= isset($email) ? htmlspecialchars($email) : ''; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message"><?= isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btnres">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    
    <footer>
        <p>&copy; 2024 StartUp Boost Pakistan. All rights reserved.</p>
    </footer>
</body>

</html>
