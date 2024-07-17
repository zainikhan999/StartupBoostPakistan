<?php
// Enable error reporting for debugging
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
    $first_name = isset($_POST['firstName']) ? mysqli_real_escape_string($conn, $_POST['firstName']) : '';
    $last_name = isset($_POST['lastName']) ? mysqli_real_escape_string($conn, $_POST['lastName']) : '';
    $company_name = isset($_POST['companyName']) ? mysqli_real_escape_string($conn, $_POST['companyName']) : '';
    $business_name = isset($_POST['businessName']) ? mysqli_real_escape_string($conn, $_POST['businessName']) : '';
    $type_of_fundings = isset($_POST['typeOfFundings']) ? mysqli_real_escape_string($conn, $_POST['typeOfFundings']) : '';
    $number_of_fundings = isset($_POST['numberOfFundings']) ? mysqli_real_escape_string($conn, $_POST['numberOfFundings']) : '';
    $minimum_amount_raised = isset($_POST['minimumAmountRaised']) ? mysqli_real_escape_string($conn, $_POST['minimumAmountRaised']) : '';
    $maximum_amount_raised = isset($_POST['maximumAmountRaised']) ? mysqli_real_escape_string($conn, $_POST['maximumAmountRaised']) : '';
    $linkedin_profile = isset($_POST['linkedinProfile']) ? mysqli_real_escape_string($conn, $_POST['linkedinProfile']) : '';

    // Validate minimum and maximum amounts
    if ($minimum_amount_raised > $maximum_amount_raised) {
        $error_message = "Error: Minimum amount raised cannot be greater than maximum amount raised.";
    } else {
        // Check for duplicate LinkedIn profile (assuming it's unique and used as email)
        $duplicate_check_sql = "SELECT * FROM `investors` WHERE `linkedin_profile` = '$linkedin_profile'";
        $duplicate_check_result = mysqli_query($conn, $duplicate_check_sql);

        if (mysqli_num_rows($duplicate_check_result) > 0) {
            $error_message = "Error: An investor with this LinkedIn profile already exists.";
        } else {
            // Generate unique ID
            do {
                $id = rand(100000, 999999);
                $id_check_sql = "SELECT * FROM `investors` WHERE `id` = '$id'";
                $id_check_result = mysqli_query($conn, $id_check_sql);
            } while (mysqli_num_rows($id_check_result) > 0);

            // Insert new investor
            $sqlInvestorForm = "INSERT INTO `investors` (`id`, `first_name`, `last_name`, `company_name`, 
            `business_name`, `type_of_fundings`, `number_of_fundings`, `minimum_amount_raised`, `maximum_amount_raised`, `linkedin_profile`)
            VALUES ('$id', '$first_name', '$last_name', '$company_name', '$business_name', '$type_of_fundings', '$number_of_fundings', 
            '$minimum_amount_raised', '$maximum_amount_raised', '$linkedin_profile')";

            $resultForm = mysqli_query($conn, $sqlInvestorForm);

            if ($resultForm) {
                $success_message = "Your Information is recorded ! We will contact you soon.";
            } else {
                $error_message = "Error: " . mysqli_error($conn);
            }
        }
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
    <link href="https://font


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
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
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
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                </li>
            </ul>
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
                <div class="col-md-6 right">
                    <div class="image-container">
                        <img class="img-fluid" src="graphics/Login.png" alt="Image Description">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container main-class order-md-last">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h2 class="section-heading custom-heading">JOIN AS <span style="color: rgb(255, 191, 0);">INVESTOR</span></h2>
                                <p class="pstyle">WELCOME TO STARTUP BOOST PAKISTAN</p>
                                <form class="contactform" action="" method="POST">
                                    <div class="mb-3">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="companyName" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Enter your company name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="businessName" class="form-label">Business Name</label>
                                        <input type="text" class="form-control" id="businessName" name="businessName" placeholder="Enter your business name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="typeOfFundings" class="form-label">Type of Fundings</label>
                                        <input type="text" class="form-control" id="typeOfFundings" name="typeOfFundings" placeholder="Enter type of fundings">
                                    </div>
                                    <div class="mb-3">
                                        <label for="numberOfFundings" class="form-label">Number of Fundings</label>
                                        <input type="number" class="form-control" id="numberOfFundings" name="numberOfFundings" placeholder="Enter number of fundings">
                                    </div>
                                    <div class="mb-3">
                                        <label for="minimumAmountRaised" class="form-label">Minimum Amount Raised</label>
                                        <input type="number" class="form-control" id="minimumAmountRaised" name="minimumAmountRaised" placeholder="Enter minimum amount raised">
                                    </div>
                                    <div class="mb-3">
                                        <label for="maximumAmountRaised" class="form-label">Maximum Amount Raised</label>
                                        <input type="number" class="form-control" id="maximumAmountRaised" name="maximumAmountRaised" placeholder="Enter maximum amount raised">
                                    </div>
                                    <div class="mb-3">
                                        <label for="linkedinProfile" class="form-label">LinkedIn Profile</label>
                                        <input type="text" class="form-control" id="linkedinProfile" name="linkedinProfile" placeholder="Enter your LinkedIn profile username">
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
</body>
</html>
