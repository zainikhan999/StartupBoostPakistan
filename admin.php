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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">StartUp Boost Pakistan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-user"></i> <!-- Assuming you're using Font Awesome for icons -->
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
    <div class="container mt-5">
        <h1 class="sectionstyle custom-heading">Admin Dashboard</h1>
        <!-- Tabs navigation -->
        <ul class="nav nav-tabs" id="adminTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="investments-tab" data-toggle="tab" href="#investments" role="tab"
                    aria-controls="investments" aria-selected="true">Investments</a>
            </li>
        
            <li class="nav-item">
                <a class="nav-link" id="investors-tab" data-toggle="tab" href="#investors" role="tab"
                    aria-controls="investors" aria-selected="false">Investors</a>
            </li>
        </ul>
        <!-- Tabs content -->
        <div class="tab-content mt-3" id="adminTabsContent">
            <!-- Investments Tab -->
            <div class="tab-pane fade show active" id="investments" role="tabpanel" aria-labelledby="investments-tab">
                <h4 class="sectionstyle custom-heading">Investments</h4>
                <div class="input-group mb-3"> <!-- Use Bootstrap input-group for styling -->
                    <input type="text" class="form-control " id="searchInput" placeholder="Search for investments...">
                    <div class="input-group-append"> <!-- Use input-group-append for the button -->
                        <button class="btn btnres" onclick="searchInvestments()">Search</button> <!-- Use Bootstrap button classes -->
                    </div>
                </div>

                <div id="searchResults">
                    <table class="table">
                        <thead>
                            <tr>
                                <th >Startup ID</th>
                                <th>Entrepreneur Name</th>
                                <th>Investor Name</th>
                                <th>Amount Raised</th>
                                <th>Funding Stage</th>
                                <th>StartUp Services</th>
                            </tr>
                        </thead>
                        <tbody id="searchResultsBody">
                            <!-- Search results will be dynamically added here -->
                        </tbody>
                    </table>
                </div>

            </div>

            

           <!-- Investor Tab -->
<div class="tab-pane fade" id="investors" role="tabpanel" aria-labelledby="investors-tab">
    <h4 class="sectionstyle custom-heading">Investors</h4>
    <div class="input-group mb-3"> <!-- Use Bootstrap input-group for styling -->
        <input type="text" class="form-control" id="searchInput" placeholder="Search for investors...">
        <div class="input-group-append"> <!-- Use input-group-append for the button -->
            <button class="btn btnres" onclick="searchInvestors()">Search</button> <!a-- Use Bootstrap button classes -->
        </div>
    </div>

    <div id="searchResults">
        <table class="table">
            <thead>
                <tr>
                    <th>Investor ID</th>
                    <th>Investor Name</th>
                    <th>Total Investments</th>
                    <th>Latest Investment Date</th>
                    <th>Investment Amount</th>
                </tr>
            </thead>
            <tbody id="searchResultsBody">
                <!-- Search results will be dynamically added here -->
            </tbody>
        </table>
    </div>
</div>

            

        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>




