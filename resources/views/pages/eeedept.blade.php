<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="./Asserts/eeeicon.jpg" type="image/jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Department of EEE - AUBIT</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      color: #333;
    }
    header {
      background-image: url('Asserts/eeebg.jpeg');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 80px 0;
      text-align: center;
      position: relative;
    }
    header::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.3);
      z-index: -1;
    }
    h1 {
      margin: 0;
      font-size: 36px;
      font-weight: bold;
    }
    h3 {
      margin: 10px 0 0;
      font-size: 20px;
      font-weight: lighter;
    }
    nav {
      background: #34495e;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    nav a {
      color: white;
      text-decoration: none;
      padding: 15px 25px;
      display: block;
    }
    nav a:hover {
      background: #7f8c8d;
      transition: 0.3s;
    }
    section {
      padding: 40px 20px;
      max-width: 1000px;
      margin: auto;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    h2 {
      color: #1abc9c;
    }
    .section-content {
      padding: 20px;
    }
    .lab-gallery {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 15px;
      margin-top: 20px;
    }
    .lab-gallery img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
    }
    .hod-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-top: 20px;
    }
    .hod-container {
      text-align: center;
    }
    footer {
      background: #2c3e50;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 30px;
    }
  </style>
</head>
<body>

<header>
  <h1>Department of Electrical and Electronics Engineering</h1>
  <h3>AUBIT - Anna University, BIT Campus</h3>
</header>

<nav>
  <a href="/">Home</a>
  <a href="/#departments">Departments</a>
  <a href="#hod">HOD</a>
  <a href="#labs">Labs</a>
  <a href="/eeestaff">Other Staff</a>
</nav>

<section id="about">
  <div class="section-content">
    <h2>About the Department</h2>
    <p>
      The Department of Electrical and Electronics Engineering at AUBIT is dedicated to providing quality education and preparing students for global challenges in the fields of electrical and electronics engineering. Our department offers a wide range of modern labs and research facilities to ensure the highest standard of academic and practical learning.
    </p>
  </div>
</section>

<section id="vision">
  <div class="section-content">
    <h2>Vision</h2>
    <p>
      Our vision is to become a center of excellence in the field of Electrical and Electronics Engineering education and research, producing professionals who contribute significantly to society and the global engineering community.
    </p>
  </div>
</section>

<section id="mission">
  <div class="section-content">
    <h2>Mission</h2>
    <ul>
      <li>To provide high-quality education in Electrical and Electronics Engineering through effective teaching and learning practices.</li>
      <li>To foster innovation and research among students and faculty.</li>
      <li>To collaborate with industries for practical exposure and knowledge enhancement.</li>
      <li>To develop engineers who are not only technically competent but also socially responsible and ethical.</li>
    </ul>
  </div>
</section>

<section id="hod">
  <div class="section-content hod-container">
    <h2>Head of the Department</h2>
    <div>
      <img src="Asserts/eeehod.jpg" alt="Dr.R.Kanimozhi" class="hod-image">
    </div>
    <p><strong>Dr.R.Kanimozhi</strong><br>
      Professor & Head<br>
      Department of Electrical and Electronics Engineering<br>
      AUBIT, Tiruchirappalli</p>
    <p>
      With over 20 years of experience in teaching and research, Dr.R.Kanimozhi specializes in Power Systems and Renewable Energy. She leads the department with a vision of innovation and excellence in the academic and research domains.
    </p>
    <p style="margin-top: 20px;">
      <a href="/eeestaff" style="font-size: 18px; color: #1abc9c; text-decoration: none;">→ View Other Staff</a>
    </p>
  </div>
</section>

<section id="labs">
  <div class="section-content">
    <h2>Lab Facilities</h2>
    <div class="lab-gallery">
      <img src="Asserts/eeelab1.jpg" alt="Electrical Machines Lab">
      <img src="Asserts/eeelab2.webp" alt="Power Electronics Lab">
      <img src="Asserts/eeelab3.jpg" alt="Control Systems Lab">
      <img src="Asserts/eeelab4.jpg" alt="Microprocessor Lab">
    </div>
  </div>
</section>

<footer>
  &copy; 2025 Department of EEE, AUBIT. All Rights Reserved.
</footer>

</body>
</html>
