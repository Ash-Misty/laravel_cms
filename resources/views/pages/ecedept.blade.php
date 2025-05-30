<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="./Asserts/eceicon.jpg" type="image/jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Department of Electrical and Electronics Engineering</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        header img {
            width: 40px;
            height: 40px;
        }
        header h1 {
            color: white;
            font-size: 32px;
            font-weight: bold;
            margin: 0;
        }
        section {
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 85%;
            max-width: 1200px;
        }
        h1, h2, h3 {
            color: #2c3e50;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .lab-facilities {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 20px;
        }
        .lab-facility {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px;
            text-align: center;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .lab-facility img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }
        .lab-facility img:hover {
            transform: scale(1.03);
        }
        #lab-facilities {
            margin-bottom: 100px;
        }
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        footer a {
            color: #fff;
            margin: 0 15px;
            font-size: 16px;
        }
        footer a:hover {
            color: #f39c12;
        }
    </style>
</head>
<body>

<header>
    <img src="Asserts/ecelogo.png" alt="Department Logo">
    <h1>Department of Electrical and Electronics Engineering</h1>
</header>

<section id="about">
    <h2>About Us</h2>
    <p>Welcome to the Department of Electrical and Electronics Engineering (ECE) at AUBIT. Our department offers undergraduate and postgraduate courses that equip students with the knowledge and skills necessary to excel in the rapidly evolving field of electrical and electronics engineering.</p>
</section>

<section id="vision">
    <h2>Vision</h2>
    <p>To be a globally recognized center for excellence in electrical and electronics engineering education and research, producing highly skilled engineers who can contribute to technological advancements.</p>
</section>

<section id="mission">
    <h2>Mission</h2>
    <p>Our mission is to provide a high-quality education in electrical and electronics engineering, foster innovation, and develop industry-relevant research. We aim to cultivate a spirit of inquiry and contribute to the socio-economic development of the community through our academic and research endeavors.</p>
</section>

<section id="hod">
    <h2>Head of Department (HOD)</h2>
    <div style="text-align: center;">
        <img src="Asserts/ecehod.png" alt="Head of Department" style="width: 200px; border-radius: 50%; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    </div>
    <p>Mrs.P.Ramadevi is the current Head of the Department of Electrical and Electronics Engineering. With over 15 years of experience in teaching and research, Dr. Ramadevi has significantly contributed to the development of the department.</p>
</section>

<section id="staff">
    <h2>Our Staff</h2>
    <p>For more information about our faculty members, please visit our <a href="/ecestaff">Staff Page</a>.</p>
</section>

<section id="lab-facilities">
    <h2>Lab Facilities</h2>
    <p>Our department is equipped with state-of-the-art labs that provide students with hands-on experience and exposure to cutting-edge technology:</p>

    <div class="lab-facilities">
        <div class="lab-facility">
            <img src="Asserts/ecelab1.jpg" alt="Power Systems Lab">
        </div>

        <div class="lab-facility">
            <img src="Asserts/eeelab3.jpg" alt="Control Systems Lab">
        </div>
        <div class="lab-facility">
            <img src="Asserts/ecelab3.jpg" alt="Communication Systems Lab">
        </div>
        <div class="lab-facility">
            <img src="Asserts/ecelab4.jpg" alt="Signal Processing Lab">
        </div>
    </div>
</section>

<footer>
    <a href="/">Home</a>
    <a href="/#departments">Department</a>
    <a href="/ecestaff">Staff</a>
</footer>

</body>
</html>
