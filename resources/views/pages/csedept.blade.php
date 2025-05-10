<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Computer Science and Engineering</title>

  <!-- CSS Links -->
  <link rel="stylesheet" href="/css/firstcss.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Tailwind  -->
  <script src="https://cdn.tailwindcss.com"></script>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- Bootstrap Bundle with  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

  <!-- Nav bar -->
  <nav class="nav-bar">
    <div class="logo">
      <img src="/Asserts/cselogo1.jpg" alt="CSE">
      <span class="deptname"><a href="#">Computer Science And Engineering</a></span>
    </div>
    <button class="togglemenu" id="togglemenu">&#9776;</button>
    <ul class="items" id="items">
      <li><a href="/">Home</a></li>
      <li><a href="/about">About Us!</a></li>
      <li><a href="/contact">Contact Us!</a></li>
    </ul>
  </nav>

  <!-- About the department -->
  <section id="about" class="container p-3 ml-2 mt-5">
    <div id="aboutdept" class="text-center text-bold m-5">
      <h2>Department of Computer Science and Engineering</h2>
    </div>
    <div id="missionvision" class="container flex column-gap-md-3">
      <div class="container" id="mission">
        <h3 class="text-primary-black-600">Our Mission</h3>
        <p class="text-secondary">To provide competent instruction geared towards excellent education in all Information technology related fields.
          Emphasis on imparting newer technologies through education and training.
          To prepare graduates for pursuing their career in industry, government or pursue higher education and research.</p>
      </div>
      <div class="container" id="vision">
        <h3 class="text-primary-black-600">Our Vision</h3>
        <p class="text-secondary">To produce responsible Information Technology professionals equipped with skills and strong moral values making them the preferred source for services and manpower in leading organizations.</p>
      </div>
    </div>
  </section>
  <!-- Hod -->
   <section>
    <div class="m-5 px-3 rounded-lg">
      <div class="text-bg-light rounded-3">
        <h3 class="text-center ">Head of the Department</h3>
      </div>
      <div id="hod" class="flex flex-row container py-4 rounded-lg">
        <img src="/Asserts/csehod.jpeg" alt="HOD photo" class="rounded-lg w-36 h-36 object-cover">
        <div class="px-3">
          <h4 class="text-left">Dr.G.Annapoorani</h4>
        <p class=""><br>University College of Engineering BIT Campus,<br>
          Anna University,<br>
          Tiruchirappalli-620024. <br>
          Email: <a class="text-decoration-none text-black" href="mailto:pooranikrish@gmail.com">pooranikrish@gmail.com</a></p>
        </div>
      </div>
      <div class="text-center px-3">
        <p class="font-semibold">Other Faculties: <a href="/csestaff" class="text-decoration-none text-blue hover: text-blue-900">Click here</a></p>
      </div>
    </div>
   </section>
   <!-- Lab Facilities -->
    <section class="">
      <div class="m-3 px-5 mb-3">
        <div>
          <h3 class="text-center text-bg-light rounded-3">Lab Facilities</h3>
        </div>
        <div id="lab" class="container p-3 flex flex-row shadow-sm ">
          <div class="w-[90%] p-4 border-right-1px">
            <ul id="unlist">
              <li>Programming and Data Structure Laboratory</li>
              <li>Java and Service Oriented Architecture Laboratory</li>
              <li>Database Management Systems and System Software Laboratory</li>
              <li>Computing Facility</li>
            </ul>
          </div>

          <div class="px-2 py-4 bg-gradient-to-r from-purple-100 via-blue-100 to-pink-100 rounded-3 border-l-black">
            <div class="container mx-auto px-4 rounded-2xl">
              <div class="overflow-hidden relative w-full h-[200px] bg-gray-100 rounded-lg">
                <div class="flex animate-slide w-full h-full">
                  <img src="/Asserts/lab1.jpg" class="w-full h-full object-cover flex-shrink-0" alt="Lab 1">
                  <img src="/Asserts/lab2.jpg" class="w-full h-full object-cover flex-shrink-0" alt="Lab 2">
                  <img src="/Asserts/lab3.jpg" class="w-full h-full object-cover flex-shrink-0" alt="Lab 3">
                  <img src="/Asserts/labb.jpg" class="w-full h-full object-cover flex-shrink-0" alt="Lab 4">
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </section>
    
  <footer class="bg-primary text-white text-center py-10 mt-5">
    <div class="container">
      &copy;Department of Computer Science and Engineering. <b>UCE - BIT CAMPUS, TRICHY.</b> All rights are received.
    </div>
  </footer>


<script>
  const toggleMenu = document.getElementById('togglemenu');
  const links = document.getElementById('items');

  toggleMenu.addEventListener('click', () => {
    links.classList.toggle('active');
  });
</script>

</body>
</html>
