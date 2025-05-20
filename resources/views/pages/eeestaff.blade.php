<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EEE Staff - AUBIT</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: #333;
    }
    header {
      background-color: #34495e;
      color: white;
      padding: 40px 0;
      text-align: center;
    }
    h1 {
      margin: 0;
      font-size: 32px;
    }
    .container {
      max-width: 1000px;
      margin: 30px auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .section-title {
      margin-top: 0;
      font-size: 24px;
      color: #1abc9c;
      border-bottom: 2px solid #eee;
      padding-bottom: 5px;
    }
    .staff-member {
      display: flex;
      align-items: center;
      gap: 20px;
      margin: 20px 0;
    }
    .staff-photo {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid #1abc9c;
    }
    .staff-info h3 {
      margin: 0;
      font-size: 20px;
      color: #2c3e50;
    }
    .staff-info p {
      margin: 5px 0;
    }
    .back-link {
      display: inline-block;
      margin: 15px 0;
      text-decoration: none;
      color: #1abc9c;
      font-weight: bold;
    }
    footer {
      background-color: #2c3e50;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 30px;
    }
    footer a {
      color: #1abc9c;
      text-decoration: none;
      margin: 0 10px;
      font-weight: bold;
    }
  </style>
</head>
<body id="top">

<header>
  <h1>EEE Department - Staff Members</h1>
</header>


<div class="container">

  <!-- HOD Section -->
  <h2 class="section-title">Head of the Department</h2>
  <div class="staff-member">
    <img src="Asserts/eeehod.jpg" alt="Dr.R.Kanimozhi" class="staff-photo">
    <div class="staff-info">
      <h3>Dr.R.Kanimozhi</h3>
      <p>Professor & Head of the Department</p>
      <p>Expertise: High Voltage Engineering, Power Systems</p>
      <p>email: kani@gmail.com</p>
    </div>
  </div>

  <!-- Other Staff Section -->
  <h2 class="section-title">Faculty Members</h2>

  <div class="staff-member">
    <img src="Asserts/bala.jpg" alt="Dr.M.Balasingh Moses" class="staff-photo">
    <div class="staff-info">
      <h3>Dr.M.Balasingh Moses</h3>
      <p>Associate Professor</p>
      <p>Expertise: Power Electronics, Control Systems</p>
      <p>Email: bala@gamil.com</p>
    </div>
  </div>

  <div class="staff-member">
    <img src="Asserts/karthi.jpg" alt="Mr.M.Karthikeyan" class="staff-photo">
    <div class="staff-info">
      <h3>Mr.M.Karthikeyan</h3>
      <p>Assistant Professor</p>
      <p>Expertise: Embedded Systems, IoT</p>
      <p>Email: Karthi@gmail.com</p>
    </div>
  </div>

  <div class="staff-member">
    <img src="Asserts/raja.jpg" alt="Ms.S.Rajalakshmi" class="staff-photo">
    <div class="staff-info">
      <h3>Ms.S.Rajalakshmi</h3>
      <p>Assistant Professor</p>
      <p>Expertise: Electrical Machines, Smart Grid</p>
      <p>Email: raja@gmail.com</p>
    </div>
  </div>

  <div class="staff-member">
    <img src="Asserts/rajesh.jpg" alt="Mr.K.Rajesh" class="staff-photo">
    <div class="staff-info">
      <h3>Mr.K.Rajesh</h3>
      <p>Assistant Professor</p>
      <p>Expertise: Renewable Energy Systems</p>
      <p>Email: raju@gmail.com</p>
    </div>
  </div>

  <div class="staff-member">
    <img src="Asserts/vijay.jpg" alt="Dr.P.Vijayarajan" class="staff-photo">
    <div class="staff-info">
      <h3>Dr.P.Vijayarajan</h3>
      <p>Assistant Professor</p>
      <p>Expertise: Electric Drives, Control Engineering</p>
      <p>Email: viji@gmail.com</p>
    </div>
  </div>

</div>

<footer>
  <p>&copy; 2025 Department of EEE, AUBIT. All Rights Reserved.</p>
  <p>
    <a href="/">Home</a>
    <a href="/#departments">Departments</a>
    <a href="/eeedept">Back</a>
  </p>
</footer>

</body>
</html>
