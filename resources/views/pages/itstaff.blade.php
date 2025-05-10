<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>AUBIT - IT Department Staff</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f9f9f9;
    }
    header {
      background-color: #004080;
      color: white;
      padding: 2rem 1rem;
      text-align: center;
    }
    h2.section-title {
      color: #004080;
      margin-top: 2rem;
      margin-bottom: 1.5rem;
      border-bottom: 2px solid #004080;
      padding-bottom: 0.5rem;
    }
    .staff-card {
      transition: transform 0.2s ease;
      width:300px;
    }
    .staff-card:hover {
      transform: scale(1.02);
    }
        .footer {
    background-color: #b8dafc;
    padding: 1rem;
    text-align: center;
    color: #333;
    }

    .footer a {
      color: #004080;
      text-decoration: none;
      margin: 0 10px;
    }
    .footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <h1>AUBIT - Department of Information Technology</h1>
    <p class="lead">Staff Members</p>
  </header>

  <div class="container my-5">

    <!-- HOD Section -->
    <h2 class="section-title">Head of the Department</h2>
    <div class="row justify-content-center g-4">
      <div class="col-md-4">
        <div class="card staff-card shadow-sm">
          <img src="/Asserts/csehod.jpeg" class="card-img-top" alt="HOD Image" height="250px" >
          <div class="card-body">
            <h5 class="card-title">Dr. G. Annaporani</h5>
            <p class="card-text">Head of Department</p>
            <p class="text-muted">Email: poorani@aubit.edu.in</p>
            <p class="text-muted">Phone: +91-9876543210</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Other Staff Section -->
    <h2 class="section-title">Other Staff Members</h2>
    <div class="row g-4">

      <!-- Staff 1 -->
      <div class="col-md-4">
        <div class="card staff-card shadow-sm">
          <img src="/Asserts/padma.jpg" class="card-img-top" alt="Padma staff" height="250px">
          <div class="card-body">
            <h5 class="card-title">Dr. M. Padma</h5>
            <p class="card-text">Assistant Professor</p>
            <p class="text-muted">Email: padma@aubit.edu.in</p>
            <p class="text-muted">Phone: +91-9876504321</p>
          </div>
        </div>
      </div>

      <!-- Staff 2 -->
      <div class="col-md-4">
        <div class="card staff-card shadow-sm">
          <img src="/Asserts/blessy.jpg" class="card-img-top" alt="blessy staff" height="250px">
          <div class="card-body">
            <h5 class="card-title">Dr.Blessy Selvam</h5>
            <p class="card-text">Lab Instructor</p>
            <p class="text-muted">Email: blessy@aubit.edu.in</p>
            <p class="text-muted">Phone: +91-9876512345</p>
          </div>
        </div>
      </div>

      <!-- Staff 3 -->
      <div class="col-md-4">
        <div class="card staff-card shadow-sm">
          <img src="/Asserts/krishna.jpg" class="card-img-top" alt="krishna staff" height="250px">
          <div class="card-body">
            <h5 class="card-title">Mr.M. Krishna Kumar</h5>
            <p class="card-text">Assistant Professor</p>
            <p class="text-muted">Email: krishna@aubit.edu.in</p>
            <p class="text-muted">Phone: +91-9876523456</p>
          </div>
        </div>
      </div>

      <!-- Staff 4 -->
      <div class="col-md-4">
        <div class="card staff-card shadow-sm">
          <img src="/Asserts/vanitha.jpg" class="card-img-top" alt="vanitha staff" height="250px">
          <div class="card-body">
            <h5 class="card-title">Mrs.L. Vanitha</h5>
            <p class="card-text">Teaching Assistant</p>
            <p class="text-muted">Email: vanitha@aubit.edu.in</p>
            <p class="text-muted">Phone: +91-9876534567</p>
          </div>
        </div>
      </div>

      <!-- Staff 5 -->
      <div class="col-md-4">
        <div class="card staff-card shadow-sm">
          <img src="/Asserts/prasana.jpg" class="card-img-top" alt="prasana staff" height="250px">
          <div class="card-body">
            <h5 class="card-title">Mr. M. Prasannakumar</h5>
            <p class="card-text">Programmer</p>
            <p class="text-muted">Email: prasana@aubit.edu.in</p>
            <p class="text-muted">Phone: +91-9876545678</p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Footer -->
  <div class="footer">
    &copy; 2025 Department of IT, AUBIT |<a href="/">Home</a> |<a href="/itdept">IT Department</a> |<a href="/contact">Contact Us</a> |<a href="/#departments">Departments</a><br>

  </div>

</body>
</html>
