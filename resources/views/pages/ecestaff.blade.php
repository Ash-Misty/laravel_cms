<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="./Asserts/stafficon.jpg" type="image/jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ECE Department Staff</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f6f8;
    }
    header {
      background-color: #34495e;
      color: white;
      padding: 20px;
      text-align: center;
    }
    header h1 {
      margin: 0;
      font-size: 28px;
    }
    main {
      flex: 1;
    }
    section {
      max-width: 1000px;
      margin: 30px auto;
      padding: 20px;
    }
    .section-title {
      text-align: center;
      font-size: 22px;
      font-weight: bold;
      margin: 30px 0 20px;
      color: #2c3e50;
    }
    .card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      display: flex;
      align-items: center;
      padding: 20px;
      margin-bottom: 20px;
      transition: transform 0.2s;
    }
    .card:hover {
      transform: translateY(-4px);
    }
    .card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 25px;
    }
    .card .info {
      flex: 1;
    }
    .card .info h2, .card .info h3 {
      margin: 5px 0;
      color: #2c3e50;
    }
    .card .info p {
      margin: 4px 0;
      color: #555;
    }
    footer {
      background-color: #34495e;
      color: white;
      text-align: center;
      padding: 15px 0;
      margin-top: auto;
    }
    footer a {
      color: #fff;
      margin: 0 15px;
      text-decoration: none;
    }
    footer a:hover {
      color: #f39c12;
    }
  </style>
</head>
<body>

<header>
  <h1>ECE Department Faculty</h1>
</header>

<main>
  <section>
    <!-- HOD Title -->
    <div class="section-title">Head of the Department</div>

    <!-- HOD Card -->
    <div class="card">
      <img src="Asserts/ecehod.png" alt="Mrs.P.Ramadevi">
      <div class="info">
        <h2>Mrs.P.Ramadevi</h2>
        <h3>Professor & Head of Department</h3>
        <p>Specialization: Communication Systems, Embedded Technologies</p>
        <p>Email: rama@gmail.com</p>
      </div>
    </div>

    <!-- Staff Title -->
    <div class="section-title">Faculty Members</div>

    <!-- Staff Cards -->
    <div class="card">
      <img src="Asserts/jaba.jpg" alt="Dr.E.Jebamalar Leavline">
      <div class="info">
        <h2>Dr.E.Jebamalar Leavline</h2>
        <h3>Associate Professor</h3>
        <p>Specialization: VLSI Design</p>
        <p>Email: jeba@gmail.com</p>
      </div>
    </div>

    <div class="card">
      <img src="Asserts/akhil.png" alt="Dr.R.Akhil">
      <div class="info">
        <h2>Dr.R.Akhil</h2>
        <h3>Assistant Professor</h3>
        <p>Specialization: Signal Processing</p>
        <p>Email:akhil@gmail.com</p>
      </div>
    </div>

    <div class="card">
      <img src="Asserts/padmaja.png" alt="Ms.K.Padmaja">
      <div class="info">
        <h2>Ms.K.Padmaja</h2>
        <h3>Assistant Professor</h3>
        <p>Specialization: IoT & Wireless</p>
        <p>Email: padmaja@gamil.com</p>
      </div>
    </div>

    <div class="card">
      <img src="Asserts/pradeep.png" alt="Dr.N.S.Pradeep">
      <div class="info">
        <h2>Dr.N.S.Pradeep</h2>
        <h3>Assistant Professor</h3>
        <p>Specialization: Microcontrollers</p>
        <p>Email:pradeep@gmail.com</p>
      </div>
    </div>

    <div class="card">
      <img src="Asserts/jayas.jpg" alt="Dr.T.Jayasankar">
      <div class="info">
        <h2>Dr.T.Jayasankar</h2>
        <h3>Assistant Professor</h3>
        <p>Specialization: Microcontrollers</p>
        <p>Email:jaya@gmail.com</p>
      </div>
    </div>
  </section>
</main>

<footer>
  <a href="/">Home</a>
  <a href="/#departments">Departments</a>
  <a href="/ecedept">Back to ECE Page</a>
</footer>

</body>
</html>
