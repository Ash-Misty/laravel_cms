<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department of Information Technology | IIT Delhi</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #003366;
        }

        .navbar a {
            color: #fff;
            font-weight: 500;
        }

        .navbar a:hover {
            color: #FFD700;
            text-decoration: none;
        }

        .logo img {
            width: 60px;
            height: auto;
        }

        /* Hero Section */
        .hero-section {
            background-color: #003366;
            color: #fff;
            text-align: center;
            padding: 60px 20px;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 500;
        }

        .hero-section p {
            font-size: 1.25rem;
            margin-top: 10px;
        }

        /* Section Styles */
        .section-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: #003366;
            margin-bottom: 30px;
        }

        .section-content {
            font-size: 1.25rem;
            color: #333;
        }


        #carouselSeminar {
            margin-bottom: 40px;
        }

        .carousel-item img {
            max-height: 350px;
            object-fit: cover;
        }


        .footer {
            background-color: #003366;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .footer a {
            color: #FFD700;
        }

        .footer a:hover {
            color: #fff;
            text-decoration: none;
        }


        .hod-section {
            border: none;
        }


        .other-staff-link {
            display: inline-block;
            margin-top: 20px;
            font-size: 1.1rem;
            font-weight: 500;
            padding: 10px 20px;
            color: #003366;
            background-color: #4A90E2;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .other-staff-link:hover {
            background-color: #003366;
            color: #4A90E2;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }


        .lab-section .row {
            display: flex;
            justify-content: space-between;
        }

        .lab-section .col {
            flex: 0 0 48%;
            margin-bottom: 20px;
        }

        .lab-section .col img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand logo" href="#">
                <img src="/Asserts/itlogo.jpeg" alt="IT">
                IT
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#departments">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Department of Information Technology</h1>
        <p>At the forefront of technological innovation and research, shaping the future of Information Technology.</p>
    </section>

    <!-- About Section -->
    <section id="about" class="container p-6 mt-8 bg-section">
        <div id="aboutdept" class="text-center mb-6">
            <h2 class="text-4xl font-semibold text-blue-600">Department of Information Technology</h2>
        </div>
        <div id="missionvision" class="flex justify-between space-x-8">
            <div class="container flex-1">
                <h3 class="text-xl font-semibold text-blue-600">Our Mission</h3>
                <p class="text-gray-700 mt-2">To deliver high-quality education and research in Information Technology, while providing a solid foundation in various computing technologies, preparing students to excel in industry and academia.</p>
            </div>
            <div class="container flex-1">
                <h3 class="text-xl font-semibold text-blue-600">Our Vision</h3>
                <p class="text-gray-700 mt-2">To be recognized as a leading department in the field of IT education, fostering innovation and producing highly skilled graduates equipped to meet the challenges of a rapidly evolving technological landscape.</p>
            </div>
        </div>
    </section>

    <!-- Head of Department Section -->
    <section class="bg-gray-50 p-6 mt-8 hod-section">
        <div class="container bg-white p-6 rounded-lg shadow-md">
            <div class="text-center mb-6">
                <h3 class="text-2xl font-semibold text-blue-600">Head of the Department</h3>
            </div>
            <div id="hod" class="flex items-center justify-center space-x-6">
                <img src="/Asserts/csehod.jpeg" alt="HOD photo" class="rounded-full w-36 h-36 object-cover shadow-lg">
                <div class="text-left">
                    <h4 class="text-xl font-semibold">Dr.G.Annapoorani</h4>
                    <p class="text-gray-700 mt-2">University College of Engineering, IT Department,<br>Anna University,Trichy 620024<br>Email: <a href="mailto:r.poorani@annauniv.edu" class="text-blue-600">poorani@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Link for Other Staff -->
    <div class="text-center">
        <a href="/itstaff" class="other-staff-link">Click to see other staff</a>
    </div>

    <!-- Lab Facilities Section -->
    <section class="container p-6 mt-8 bg-white rounded-lg shadow-md lab-section">
        <div class="text-center">
            <h3 class="text-2xl font-semibold text-blue-600">Lab Facilities</h3>
        </div>
        <div class="row">
            <div class="col">
                <img src="Asserts/lab1.jpg" class="w-full h-40 object-cover rounded-lg shadow-md" alt="Lab 1">
                <p class="text-gray-700 mt-2 text-center">Software Development Lab</p>
            </div>
            <div class="col">
                <img src="Asserts/lab2.jpg" class="w-full h-40 object-cover rounded-lg shadow-md" alt="Lab 2">
                <p class="text-gray-700 mt-2 text-center">Networking & Security Lab</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="Asserts/lab3.jpg" class="w-full h-40 object-cover rounded-lg shadow-md" alt="Lab 3">
                <p class="text-gray-700 mt-2 text-center">AI & Machine Learning Lab</p>
            </div>
            <div class="col">
                <img src="Asserts/labb.jpg" class="w-full h-40 object-cover rounded-lg shadow-md" alt="Lab 4">
                <p class="text-gray-700 mt-2 text-center">Cloud Computing Lab</p>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer">
        <p>Department of Information Technology | AUBIT | <a href="mailto:info@aubit.in">info@aubit.in</a></p>
    </footer>
</body>

</html>
