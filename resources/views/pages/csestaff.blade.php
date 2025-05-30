<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="./Asserts/stafficon.jpg" type="image/jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CSE Department Staff</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col justify-between font-sans">

<!-- Header -->
<header class="bg-blue-900 text-white text-center py-6 shadow">
  <h1 class="text-4xl font-bold tracking-wide">CSE Department Staff</h1>
</header>

<!-- Introduction -->
<section class="text-center py-6">
  <p class="text-gray-700 text-lg max-w-3xl mx-auto px-4">
    Welcome to the <strong>Computer Science and Engineering (CSE)</strong> Department Staff Directory.
    Here you can find information about our team members who lead academic excellence, research innovation, and administrative support within the department.
  </p>
</section>

<!-- HOD Section -->
<section class="px-8 mb-10">
  <div class="bg-white rounded-lg shadow p-8 flex flex-col items-center text-center border-t-4 border-blue-700">
    <img src="../Asserts/csehod.jpeg" alt="Dr. Annapoorani" class="rounded-circle border mb-4">
    <h2 class="text-2xl font-bold text-blue-900 mb-1">Dr. G. Annapoorani</h2>
    <p class="text-blue-700 mb-2">Head of Department (HOD)</p>

    <p class="text-gray-700 mb-1"><strong>Email:</strong> poorani@gamil.com</p>
    <p class="text-gray-700"><strong>Phone:</strong> +123-456-7890</p>
  </div>
</section>

<!-- Staff Members Section -->
<section class="px-8 grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mb-12">

  <!-- Staff Member 1 -->
  <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center hover:shadow-md transition">
    <img src="/Asserts/arun.jpeg" alt="Arunprakash" class="rounded-circle mb-3">
    <h3 class="text-xl font-bold text-gray-800 mb-1">Dr. R. Arunprakash</h3>
    <p class="text-gray-600 mb-2">Assistant Professor (Sr.Grade)</p>
    <p class="text-gray-700 mb-1"><strong>Email:</strong> arun@gmail.com</p>
    <p class="text-gray-700"><strong>Phone:</strong> +123-555-6789</p>
  </div>

  <!-- Staff Member 2 -->
  <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center hover:shadow-md transition">
    <img src="/Asserts/senthil.jpeg" alt="Senthilkumar" class="rounded-circle mb-3">
    <h3 class="text-xl font-bold text-gray-800 mb-1">Dr. S. Senthilkumar</h3>
    <p class="text-gray-600 mb-2">Research Assistant</p>
    <p class="text-gray-700 mb-1"><strong>Email:</strong> senthil@gmail.com</p>
    <p class="text-gray-700"><strong>Phone:</strong> +123-999-1234</p>
  </div>

  <!-- Staff Member 3 -->
  <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center hover:shadow-md transition">
    <img src="/Asserts/abi.jpeg" alt="Abirama" class="rounded-circle mb-3">
    <h3 class="text-xl font-bold text-gray-800 mb-1">P. Abirama Sundari</h3>
    <p class="text-gray-600 mb-2">Administrator</p>
    <p class="text-gray-700 mb-1"><strong>Email:</strong> abi@gmail.com</p>
    <p class="text-gray-700"><strong>Phone:</strong> +123-777-4567</p>
  </div>

  <!-- Staff Member 4 -->
  <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center hover:shadow-md transition">
    <img src="/Asserts/latha.jpeg" alt="Latha" class="rounded-circle mb-3">
    <h3 class="text-xl font-bold text-gray-800 mb-1">Dr. K. Latha</h3>
    <p class="text-gray-600 mb-2">Assistant Professor (Sr.Grade)</p>
    <p class="text-gray-700 mb-1"><strong>Email:</strong> latha@gmail.com</p>
    <p class="text-gray-700"><strong>Phone:</strong> +123-777-4567</p>
  </div>

  <!-- Staff Member 5 -->
  <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center hover:shadow-md transition">
    <img src="/Asserts/jaya.jpeg" alt="Jayamala" class="rounded-circle mb-3">
    <h3 class="text-xl font-bold text-gray-800 mb-1">Dr. R. Jayamala</h3>
    <p class="text-gray-600 mb-2">Assistant Professor (Sr.Grade)</p>
    <p class="text-gray-700 mb-1"><strong>Email:</strong> jaya@gmail.com</p>
    <p class="text-gray-700"><strong>Phone:</strong> +123-777-4567</p>
  </div>

</section>

<!-- Footer -->
<footer class="bg-blue-900 text-white py-8">
  <div class="container text-center">
    <div class="row mb-4">
      <div class="col">
        <h5 class="text-lg font-semibold mb-3">Quick Links</h5>
        <ul class="list-unstyled space-y-2">
          <li><a href="/" class="text-white hover:underline">Home</a></li>
          <li><a href="/about" class="text-white hover:underline">About</a></li>
          <li><a href="/#departments" class="text-white hover:underline">Departments</a></li>
          <li><a href="/contact" class="text-white hover:underline">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <p class="text-sm">&copy; 2025 Department of Excellence. All rights reserved.</p>
  </div>
</footer>

</body>
</html>
