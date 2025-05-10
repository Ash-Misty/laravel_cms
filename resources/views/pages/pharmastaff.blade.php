<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pharmaceutical Sciences Staff</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f9fdf9;
      margin: 0;
      padding: 0;
      color: #333;
    }
    header {
      background-color: #28a745;
      padding: 40px 20px;
      color: white;
      text-align: center;
    }
    header h1 {
      margin: 0;
      font-size: 2.5em;
    }
    .container {
      padding: 30px;
      max-width: 1000px;
      margin: auto;
    }
    h2 {
      color: #28a745;
      border-bottom: 2px solid #28a745;
      padding-bottom: 10px;
      margin-top: 40px;
    }
    .staff-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }
    .staff-card {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: center;
    }
    .staff-card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
    }
    .staff-card h3 {
      margin-top: 0;
      color: #1e7e34;
    }
    .staff-card p {
      margin: 5px 0;
    }
    footer {
      background-color: #28a745;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }
    footer a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
    }
  </style>
</head>
<body>

<header>
  <h1>Our Faculty Members</h1>
</header>

<div class="container">
  <h2>Head of the Department</h2>
  <div class="staff-card">
    <img src="/Asserts/spharmahod.jpg" alt="Dr. Priya Narayanan" />
    <h3>Dr. P. Selvamani</h3>
    <p><strong>Designation:</strong> Professor & Head</p>
    <p><strong>Qualification:</strong> PhD in Pharmaceutical Sciences</p>
    <p><strong>Email:</strong> selva@pharmauniv.edu</p>
  </div>

  <h2>Other Faculty Members</h2>
  <div class="staff-grid">
    <div class="staff-card">
      <img src="/Asserts/karthik.jpg" alt="Mr. Arjun Mehta" />
      <h3>Mr. Karthikeyan</h3>
      <p><strong>Designation:</strong> Assistant Professor</p>
      <p><strong>Qualification:</strong> M.Pharm (Pharmacology)</p>
      <p><strong>Email:</strong> karthik@pharmauniv.edu</p>
    </div>

    <div class="staff-card">
      <img src="/Asserts/kani.jpg" alt="Ms. Kanimozhi" />
      <h3>Ms. Kanimozhi</h3>
      <p><strong>Designation:</strong> Assistant Professor</p>
      <p><strong>Qualification:</strong> M.Pharm (Pharmaceutics)</p>
      <p><strong>Email:</strong> kani@pharmauniv.edu</p>
    </div>

    <div class="staff-card">
      <img src="/Asserts/san.jpg" alt="Mrs. Shanmugapriya " />
      <h3>Mrs. Shanmugapriya</h3>
      <p><strong>Designation:</strong> Lecturer</p>
      <p><strong>Qualification:</strong> B.Pharm</p>
      <p><strong>Email:</strong> san@pharmauniv.edu</p>
    </div>

    <div class="staff-card">
      <img src="/Asserts/usha.jpg" alt="Dr. Usharani" />
      <h3>Dr. Usharani</h3>
      <p><strong>Designation:</strong> Assistant Professor</p>
      <p><strong>Qualification:</strong> PhD in Pharmacognosy</p>
      <p><strong>Email:</strong> usha@pharmauniv.edu</p>
    </div>

    <div class="staff-card">
      <img src="/Asserts/uma.jpg" alt="Mrs. Ums" />
      <h3>Mrs. Uma Maheshwari</h3>
      <p><strong>Designation:</strong> Teaching Assistant</p>
      <p><strong>Qualification:</strong> M.Pharm (Pharmaceutical Chemistry)</p>
      <p><strong>Email:</strong> uma@pharmauniv.edu</p>
    </div>
  </div>
</div>

<footer>
  <p><a href="/">Home</a> | <a href="/#departments">Department</a> | <a href="/pharmadept">Back</a></p>
</footer>

</body>
</html>
