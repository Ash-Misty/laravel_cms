<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="./Asserts/cseicon.jpg" type="image/jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Computer Science and Engineering</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <style>
    .nav-bar {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      background-color: #1f2937;
      padding: 1rem;
    }

    .nav-bar img {
      height: 40px;
    }

    .items {
      display: none;
      flex-direction: column;
      width: 100%;
    }

    .items.active {
      display: flex;
    }

    @media (min-width: 768px) {
      .items {
        display: flex;
        flex-direction: row;
        gap: 1rem;
        width: auto;
      }

      .togglemenu {
        display: none;
      }
    }

    .items a {
      color: white;
      text-decoration: none;
    }

    /* Carousel Styles */
    .carousel-wrapper {
      position: relative;
      height: 10rem;
      overflow: hidden;
      border-radius: 0.5rem;
    }

    .carousel-slide {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0;
      animation: fadeCarousel 16s infinite;
    }

    .carousel-slide:nth-child(1) { animation-delay: 0s; }
    .carousel-slide:nth-child(2) { animation-delay: 4s; }
    .carousel-slide:nth-child(3) { animation-delay: 8s; }
    .carousel-slide:nth-child(4) { animation-delay: 12s; }

    @keyframes fadeCarousel {
      0% { opacity: 0; }
      5% { opacity: 1; }
      25% { opacity: 1; }
      30% { opacity: 0; }
      100% { opacity: 0; }
    }
  </style>
</head>

<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <nav class="nav-bar text-white">
    <div class="flex items-center gap-3">
      <img src="Asserts/cselogo1.jpg" alt="CSE" />
      <span class="text-lg font-semibold">Computer Science And Engineering</span>
    </div>
    <button class="togglemenu text-white text-2xl" id="togglemenu">&#9776;</button>
    <ul class="items mt-2 md:mt-0" id="items">
      <li><a href="/">Home</a></li>
      <li><a href="/#departments">Departments</a></li>
      <li><a href="/contact">Contact Us!</a></li>
    </ul>
  </nav>

  <!-- About the department -->
  <section class="container mx-auto p-5">
    <h2 class="text-center text-2xl font-bold mb-4">Department of Computer Science and Engineering</h2>
    <div class="grid md:grid-cols-2 gap-6">
      <div>
        <h3 class="text-xl font-semibold mb-2">Our Mission</h3>
        <p>To provide competent instruction geared towards excellent education in IT fields, impart newer technologies, and prepare graduates for industry, government, or research.</p>
      </div>
      <div>
        <h3 class="text-xl font-semibold mb-2">Our Vision</h3>
        <p>To produce responsible IT professionals equipped with strong skills and values, becoming the preferred source for talent in top organizations.</p>
      </div>
    </div>
  </section>

  <!-- HOD Section -->
  <section class="bg-gray-50 py-6">
    <div class="container mx-auto flex flex-col md:flex-row items-center gap-6 px-5">
      <img src="Asserts/csehod.jpeg" alt="HOD photo" class="w-32 h-32 object-cover rounded-full" />
      <div>
        <h4 class="text-lg font-bold">Dr. G. Annapoorani</h4>
        <p class="text-sm mt-1">UCE-BIT Campus, Anna University<br>Tiruchirappalli-620024<br>Email: <a href="mailto:pooranikrish@gmail.com" class="text-blue-600 hover:underline">pooranikrish@gmail.com</a></p>
        <p class="mt-2"><a href="/csestaff" class="text-blue-500 hover:underline">View other faculty members</a></p>
      </div>
    </div>
  </section>

  <!-- Lab Facilities -->
  <section class="p-5">
    <h3 class="text-center text-xl font-semibold mb-4">Lab Facilities</h3>
    <div class="grid md:grid-cols-2 gap-4">
      <ul class="list-disc pl-5 space-y-2">
        <li>Programming and Data Structure Laboratory</li>
        <li>Java and SOA Laboratory</li>
        <li>Database Management Systems and System Software Laboratory</li>
        <li>Computing Facility</li>
      </ul>
      <div class="carousel-wrapper shadow">
        <img src="Asserts/lab.jpeg" class="carousel-slide" />
        <img src="Asserts/lab1.jpg" class="carousel-slide" />
        <img src="Asserts/lab3.jpg" class="carousel-slide" />
        <img src="Asserts/labb.jpg" class="carousel-slide" />
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white text-center py-5 mt-6">
    <p>&copy; Department of Computer Science and Engineering. <b>UCE - BIT CAMPUS, TRICHY.</b> All rights reserved.</p>
  </footer>

  <!-- Script to toggle menu -->
  <script>
    const toggleMenu = document.getElementById('togglemenu');
    const links = document.getElementById('items');
    toggleMenu.addEventListener('click', () => {
      links.classList.toggle('active');
    });
  </script>

</body>
</html>
