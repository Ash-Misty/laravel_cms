<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Department of Pharmaceutical Sciences</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      background-color: #f4f9f4;
      color: #333;
    }

    header {
      background-image: url('/Asserts/pharmabg.webp');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 80px 20px;
      text-align: center;
      font-size: 2.5em;
      border-bottom: 5px solid #1e7e34;
      position: relative;
    }

    header::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.4);
      z-index: 1;
    }

    header h1 {
      font-size: 2.5em;
      margin: 0;
      position: relative;
      z-index: 2;
    }

    section {
      padding: 30px;
      background-color: white;
      margin: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #28a745;
      font-size: 1.8em;
      border-bottom: 2px solid #28a745;
      padding-bottom: 5px;
    }

    p, ul {
      font-size: 1.1em;
      line-height: 1.6;
    }

    a {
      color: #28a745;
      text-decoration: none;
      font-weight: bold;
    }

    a:hover {
      text-decoration: underline;
    }

    ul {
      list-style-type: disc;
      padding-left: 40px;
    }

    .contact {
      font-size: 1.2em;
      background-color: #f2f2f2;
      padding: 20px;
      border-radius: 8px;
      margin-top: 30px;
    }

    .contact strong {
      color: #28a745;
    }

    .hod-img {
      max-width: 200px;
      border-radius: 50%;
      margin-right: 20px;
    }

    .hod-info {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
    }

    .labs {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      margin-bottom: 50px;
    }

    .lab-item {
      background-color: #e8f5e9;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      height: 250px;
      overflow: hidden;
    }

    .lab-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 8px;
    }

    footer {
      background-color: #28a745;
      padding: 20px;
      color: white;
      text-align: center;
    }

    footer a {
      color: white;
      margin: 0 15px;
    }

    /*Responsive  */
    @media (max-width: 768px) {
      header {
        font-size: 1.5em;
        padding: 60px 10px;
      }

      header h1 {
        font-size: 1.8em;
      }

      .hod-info {
        flex-direction: column;
        text-align: center;
      }

      .hod-img {
        margin: 0 0 15px 0;
        width: 150px;
      }

      .labs {
        grid-template-columns: 1fr;
      }

      section {
        margin: 15px 10px;
        padding: 20px;
      }

      h2 {
        font-size: 1.5em;
      }

      p, ul, .contact {
        font-size: 1em;
      }

      footer a {
        display: block;
        margin: 5px 0;
      }
    }

    @media (max-width: 480px) {
      header {
        font-size: 1.2em;
        padding: 50px 5px;
      }

      header h1 {
        font-size: 1.4em;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Department of Pharmaceutical Sciences</h1>
  </header>

  <section id="about">
    <h2>About the Department</h2>
    <p>
      The Department of Pharmaceutical Sciences focuses on shaping future pharmaceutical leaders through world-class education, cutting-edge research, and real-world applications. Our courses prepare students for careers in drug discovery, formulation, and development in a fast-evolving field.
    </p>
  </section>

  <section id="vision">
    <h2>Vision</h2>
    <p>
      To be a globally recognized center for pharmaceutical education and research, delivering advanced solutions that promote health and wellness for society at large.
    </p>
  </section>

  <section id="mission">
    <h2>Mission</h2>
    <ul>
      <li>Deliver quality pharmaceutical education and training with a focus on research innovation.</li>
      <li>Advance the pharmaceutical industry through the development of new drug therapies.</li>
      <li>Encourage ethical practices and promote community engagement to improve public health.</li>
    </ul>
  </section>

  <section id="hod">
    <h2>Head of the Department</h2>
    <div class="contact">
      <div class="hod-info">
        <img src="/Asserts/spharmahod.jpg" alt="Dr. P. Selvamani" class="hod-img"/>
        <div>
          <p><strong>Dr. P. Selvamani</strong></p>
          <p>PhD in Pharmaceutical Sciences</p>
          <p>Email: selva@gmail.com</p>
          <p>Phone: +91-98765-43210</p>
        </div>
      </div>
    </div>
  </section>

  <section id="faculty">
    <h2>Faculty Members</h2>
    <p>Click the link below to view the list of all faculty members:</p>
    <p><a href="/pharmastaff">View All Staff Members</a></p>
  </section>

  <section id="labs">
    <h2>Laboratory Facilities</h2>
    <div class="labs">
      <div class="lab-item">
        <img src="Asserts/pharmalab1.webp" alt="Pharmaceutical Chemistry Lab"/>
      </div>
      <div class="lab-item">
        <img src="Asserts/PHARMALAB2.jpg" alt="Pharmacognosy Lab"/>
      </div>
      <div class="lab-item">
        <img src="Asserts/pharmalab3.jpg" alt="Pharmacology Lab"/>
      </div>
      <div class="lab-item">
        <img src="Asserts/pharmalab4.webp" alt="Microbiology Lab"/>
      </div>
    </div>
  </section>

  <footer>
    <p>Links:
      <a href="/">Home</a>
      <a href="/#departments">Department</a> 
      <a href="/pharmastaff">Staff</a>
    </p>
  </footer>

</body>
</html>
