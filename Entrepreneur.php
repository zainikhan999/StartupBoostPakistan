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
    <h1 class="sectionstyle custom-heading">Entrepreneur Dashboard</h1>
    <!-- Tabs navigation -->
    <!-- Tabs navigation -->
<ul class="nav nav-tabs" id="adminTabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link" id="apply-for-funding-tab" data-toggle="tab" href="#apply-for-funding" role="tab" aria-controls="apply-for-funding" aria-selected="false">Apply for Funding</a>
</li>
  <li class="nav-item">
      <a class="nav-link active" id="investments-tab" data-toggle="tab" href="#investments" role="tab"
          aria-controls="investments" aria-selected="true">Pitch Desk Services</a>
  </li>

  <li class="nav-item">
      <a class="nav-link" id="business-plan-tab" data-toggle="tab" href="#business-plan" role="tab"
          aria-controls="business-plan" aria-selected="false">Business Plan Services</a>
  </li>

  <li class="nav-item">
      <a class="nav-link" id="funding-tab" data-toggle="tab" href="#funding" role="tab"
          aria-controls="funding" aria-selected="false">Selecting Funding Plans</a>
  </li>

  <li class="nav-item">
      <a class="nav-link" id="tech-products-tab" data-toggle="tab" href="#tech-products" role="tab"
          aria-controls="tech-products" aria-selected="false">Tech Products</a>
  </li>

  <li class="nav-item">
      <a class="nav-link" id="mentoring-session-tab" data-toggle="tab" href="#mentoring-session" role="tab"
          aria-controls="mentoring-session" aria-selected="false">Mentoring Session</a>
  </li>

  <li class="nav-item">
      <a class="nav-link" id="marketing-tab" data-toggle="tab" href="#marketing" role="tab"
          aria-controls="marketing" aria-selected="false">Marketing</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="funding-status-tab" data-toggle="tab" href="#funding-status" role="tab" aria-controls="funding-status" aria-selected="false">Funding Status</a>
</li>
</ul>

    <!-- Tabs content -->
    <div class="tab-content mt-3" id="adminTabsContent">
      <div class="tab-pane fade" id="apply-for-funding" role="tabpanel" aria-labelledby="apply-for-funding-tab">
        <form class="contactform">
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
                <label for="fundingAmount" class="form-label">Funding Amount</label>
                <input type="number" class="form-control" id="fundingAmount" name="fundingAmount" placeholder="Enter the funding amount">
            </div>
            <div class="mb-3">
                <label for="fundingPurpose" class="form-label">Funding Purpose</label>
                <textarea class="form-control" id="fundingPurpose" name="fundingPurpose" rows="4" placeholder="Enter the purpose of funding"></textarea>
            </div>
            <div class="mb-3">
              <label for="pitchDeck" class="form-label">Upload Pitch Deck</label>
              <input type="file" class="form-control" id="pitchDeck" name="pitchDeck">
          </div>
            <button type="submit" class="btn btnres">Submit</button>
        </form>
    </div>
      <!-- Investments Tab -->
      <div class="tab-pane fade show active" id="investments" role="tabpanel" aria-labelledby="investments-tab">
        <form class="contactform">
          <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name">
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name">
          </div>
          <div class="mb-3">
            <label for="userName" class="form-label">User Name</label>
            <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter your user name">
          </div>

          <div class="mb-3">
            <label for="pitchServiceType" class="form-label">Pitch Service Type</label>
            <select class="form-control" id="pitchServiceType" name="pitchServiceType">
              <option value="pitchDeck">Pitch Deck</option>
              <option value="elevatorPitch">Elevator Pitch</option>
              <option value="pitchTraining">Pitch Training</option>
              
            </select>
          </div>
          <div class="mb-3">
            <label for="pitchDescription" class="form-label">Pitch Description</label>
            <textarea class="form-control" id="pitchDescription" name="pitchDescription" rows="4"
              placeholder="Enter your pitch description"></textarea>
          </div>


          <button type="submit" class="btn btnres">Submit</button>
        </form>

      </div>

      <div class="tab-pane fade" id="business-plan" role="tabpanel" aria-labelledby="business-plan-tab">
        <form class="contactform">
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
            <input type="text" class="form-control" id="companyName" name="companyName"
              placeholder="Enter your company name">
          </div>
          <div class="mb-3">
            <label for="businessName" class="form-label">Business Name</label>
            <input type="text" class="form-control" id="businessName" name="businessName"
              placeholder="Enter your business name">
          </div>

          <div class="mb-3">
            <label for="pitchDescription" class="form-label">Business Description</label>
            <textarea class="form-control" id="businessDescription" name="businessDescription" rows="4"
              placeholder="Enter your business description"></textarea>
          </div>
          

          <button type="submit" class="btn btnres">Submit</button>
        </form>
    </div>

      
    <div class="tab-pane fade" id="funding" role="tabpanel" aria-labelledby="funding-tab">
      <form class="contactform">
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
            <label for="fundingAmount" class="form-label">Funding Amount</label>
            <input type="number" class="form-control" id="fundingAmount" name="fundingAmount" placeholder="Enter the funding amount">
        </div>
        <div class="mb-3">
            <label for="fundingStage" class="form-label">Funding Stage</label>
            <select class="form-control" id="fundingStage" name="fundingStage">
              <option value="preseed">Pre Seed</option>
                <option value="seed">Seed</option>
                <option value="seriesA">Series A</option>
                <option value="seriesB">Series B</option>
                <option value="seriesC">Series C</option>

                
            </select>
        </div>
        <div class="mb-3">
            <label for="fundingPurpose" class="form-label">Funding Purpose</label>
            <textarea class="form-control" id="fundingPurpose" name="fundingPurpose" rows="4" placeholder="Enter the purpose of funding"></textarea>
        </div>
        
        
        <button type="submit" class="btn btnres">Submit</button>
    </form>
    



    
  </div>

  <div class="tab-pane fade" id="tech-products" role="tabpanel" aria-labelledby="tech-products-tab">
    <form class="contactform">
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
          <label for="techServiceType" class="form-label">Tech Service Type</label>
          <select class="form-control" id="techServiceType" name="techServiceType">
              <option value="webDevelopment">Web Development</option>
              <option value="mobileAppDevelopment">Mobile App Development</option>
              <option value="softwareDevelopment">Software Development</option>
          </select>
      </div>
      <div class="mb-3">
          <label for="techDescription" class="form-label">Tech Service Description</label>
          <textarea class="form-control" id="techDescription" name="techDescription" rows="4" placeholder="Enter the description of the tech service"></textarea>
      </div>
      
  
      <button type="submit" class="btn btnres">Submit</button>
  </form>
  







</div>

  <!-- Mentoring Session Tab -->
  <div class="tab-pane fade" id="mentoring-session" role="tabpanel" aria-labelledby="mentoring-session-tab">
    <form class="contactform">
      <div class="mb-3">
          <label for="firstName" class="form-label">First Name</label>
          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name">
      </div>
      <div class="mb-3">
          <label for="lastName" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name">
      </div>
      <div class="mb-3">
          <label for="mentoringTopic" class="form-label">Mentoring Topic</label>
          <input type="text" class="form-control" id="mentoringTopic" name="mentoringTopic" placeholder="Enter the topic of mentoring">
      </div>
      <div class="mb-3">
          <label for="mentoringDescription" class="form-label">Mentoring Description</label>
          <textarea class="form-control" id="mentoringDescription" name="mentoringDescription" rows="4" placeholder="Enter the description of the mentoring session"></textarea>
      </div>
      
  
      <button type="submit" class="btn btnres">Submit</button>
  </form>
  
  </div>

  <!-- Marketing Tab -->
  <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
    <form class="contactform">
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
          <label for="marketingNeeds" class="form-label">Marketing Needs</label>
          <textarea class="form-control" id="marketingNeeds" name="marketingNeeds" rows="4" placeholder="Describe your marketing needs"></textarea>
      </div>
      
  
      <button type="submit" class="btn btnres">Submit</button>
  </form>
  
  </div>
  <div class="tab-pane fade" id="funding-status" role="tabpanel" aria-labelledby="funding-status-tab">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Funding Type</th>
                    <th>Investor</th>
                    <th>Company Name</th>
                    <th>Funded Amount</th>
                    <th>Investor Type</th>
                    <th>Funding Status</th>
                </tr>
            </thead>
            
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