<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hostel Facilities - AUBIT Trichy</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    img.same-size {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }
    .social-icons svg {
      transition: transform 0.3s ease;
    }
    .social-icons a:hover svg {
      transform: scale(1.2);
    }
    @keyframes smoothDown {
      from { transform: translateY(-50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    .animate-smooth-down {
      animation: smoothDown 1s ease forwards;
    }
  </style>
</head>
<body class="bg-indigo-100 text-gray-800 font-sans">

  <header class="bg-indigo-700 text-white text-center py-6 shadow-lg animate-smooth-down">
    <h1 class="text-5xl font-extrabold tracking-tight">Exploring Hostel Facilities at AUBIT Trichy</h1>
  </header>

  <section class="p-6">
    <h2 class="text-3xl font-bold text-indigo-800 mb-3">Separate Hostels for Boys and Girls</h2>
    <p class="text-lg leading-relaxed">AUBIT Trichy provides separate hostel facilities for male and female students. Each hostel is supervised by a warden and a team of staff members to ensure safety, discipline, and smooth day-to-day operations.</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
      <img src="/Asserts//hos1.jpg" class="rounded-xl shadow-md same-size" alt="Hostel 1">
      <img src="/Asserts/hos2.jpg" class="rounded-xl shadow-md same-size" alt="Hostel 2">
      <img src="/Asserts/hos3.jpg" class="rounded-xl shadow-md same-size" alt="Hostel 3">
      <img src="/Asserts/hos4.jpg" class="rounded-xl shadow-md same-size" alt="Hostel 4">
    </div>
  </section>

  <section class="p-6">
    <h2 class="text-3xl font-bold text-indigo-800 mb-3">Rooms and Amenities</h2>
    <p class="text-lg leading-relaxed">The hostels offer single and shared accommodation options. Rooms are equipped with basic furnishings, clean water, electricity, fans, and Wi-Fi.</p>
    <ul class="list-disc pl-6 text-lg">
      <li><b>Common Rooms:</b> TVs, newspapers, indoor games.</li>
      <li><b>Study Halls:</b> Quiet, well-lit spaces.</li>
      <li><b>Laundry Facilities:</b> Self-service or vendor options.</li>
      <li><b>Security:</b> CCTV, personnel, entry/exit protocols.</li>
    </ul>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
      <img src="/Asserts/reading.jpg" class="rounded-xl shadow-md same-size" alt="Amenities 1">
      <img src="/Asserts/hot.jpg" class="rounded-xl shadow-md same-size" alt="Amenities 2">
      <img src="/Asserts/game.jpg" class="rounded-xl shadow-md same-size" alt="Amenities 3">
    </div>
  </section>

  <section class="p-6">
    <h2 class="text-3xl font-bold text-indigo-800 mb-3">Mess and Dining</h2>
    <p class="text-lg leading-relaxed">Dedicated mess facilities serve nutritious South Indian meals, with input from students on the menu. Special meals are available on festivals.</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
      <img src="/Asserts/mess.jpg" class="rounded-xl shadow-md same-size" alt="Dining 1">
      <img src="/Asserts/food.jpeg" class="rounded-xl shadow-md same-size" alt="Dining 2">
      <img src="/Asserts/f1.jpeg" class="rounded-xl shadow-md same-size" alt="Dining 3">
    </div>
  </section>

  <section class="p-6">
    <h2 class="text-3xl font-bold text-indigo-800 mb-3">Cleanliness and Maintenance</h2>
    <p class="text-lg leading-relaxed">Hostels are maintained through regular cleaning schedules and an efficient complaint redressal system for repairs and issues.</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
      <img src="/Asserts/clean.jpeg" class="rounded-xl shadow-md same-size" alt="Maintenance 1">
      <img src="/Asserts/clean1.jpeg" class="rounded-xl shadow-md same-size" alt="Maintenance 2">
      <img src="/Asserts/clean2.jpeg" class="rounded-xl shadow-md same-size" alt="Maintenance 3">
    </div>
  </section>

  <section class="p-6">
    <h2 class="text-3xl font-bold text-indigo-800 mb-3">Cultural Activities and Hostel Day</h2>
    <p class="text-lg leading-relaxed">The hostel organizes cultural and recreational activities, including:</p>
    <ul class="list-disc pl-6 text-lg">
      <li>Mehendi competition</li>
      <li>Dance competition</li>
      <li>Flameless cooking</li>
      <li>Drawing</li>
      <li>Poetry</li>
    </ul>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
      <img src="/Asserts/meh.jpeg" class="rounded-xl shadow-md same-size" alt="Events 1">
      <img src="/Asserts/hoste.jpeg" class="rounded-xl shadow-md same-size" alt="Events 2">
      <img src="/Asserts/dr.jpeg" class="rounded-xl shadow-md same-size" alt="Events 3">
    </div>
  </section>

  <footer class="bg-gray-900 text-white text-center py-8 mt-8">
    <div class="container mx-auto px-4">
      <div class="grid md:grid-cols-3 gap-6 text-left">
        <div>
          <h3 class="text-xl font-bold">Quick Links</h3>
          <ul class="space-y-1">
            <li><a href="/" class="hover:underline text-gray-300">Home</a></li>
            <li><a href="/contact" class="hover:underline text-gray-300">Contact</a></li>
          </ul>
        </div>
        <div>
          <h3 class="text-xl font-bold">Contact Info</h3>
          <p class="text-gray-300">Email: <a href="mailto:info@aubit.edu.in" class="hover:underline">info@aubit.edu.in</a></p>
          <p class="text-gray-300">Phone: +91-9876543210</p>
        </div>
        <div>
          <h3 class="text-xl font-bold">Follow Us</h3>
          <div class="flex space-x-4 social-icons">
            <a href="https://www.instagram.com/aubit_official" target="_blank" aria-label="Instagram">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5ZM4.5 7.75a3.25 3.25 0 0 1 3.25-3.25h8.5a3.25 3.25 0 0 1 3.25 3.25v8.5a3.25 3.25 0 0 1-3.25 3.25h-8.5A3.25 3.25 0 0 1 4.5 16.25v-8.5Zm11.25-.75a1 1 0 1 0 0 2 1 1 0 0 0 0-2ZM12 8.25A3.75 3.75 0 1 0 15.75 12 3.75 3.75 0 0 0 12 8.25ZM12 10a2 2 0 1 1-2 2 2 2 0 0 1 2-2Z"/></svg>
            </a>
            <a href="https://www.facebook.com/people/Anna-University-BIT-Campus-Trichy/100067972470727/#" target="_blank" aria-label="Facebook">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12a10 10 0 0 0 8.71 9.875v-6.987H8.077v-2.888h2.633V9.797c0-2.607 1.553-4.045 3.933-4.045 1.14 0 2.335.204 2.335.204v2.572h-1.315c-1.296 0-1.7.803-1.7 1.625v1.95h2.89l-.462 2.888h-2.428V21.875A10 10 0 0 0 22 12Z"/></svg>
            </a>
            <a href="https://x.com/aubittrichy" target="_blank" aria-label="Twitter">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.34-1.6.57-2.46.67a4.3 4.3 0 0 0 1.88-2.37 8.61 8.61 0 0 1-2.72 1.04 4.27 4.27 0 0 0-7.29 3.9A12.1 12.1 0 0 1 3.15 4.85a4.27 4.27 0 0 0 1.32 5.7A4.2 4.2 0 0 1 2.8 9.5v.05a4.27 4.27 0 0 0 3.42 4.18 4.3 4.3 0 0 1-1.93.07 4.27 4.27 0 0 0 3.99 2.97A8.6 8.6 0 0 1 2 19.54 12.1 12.1 0 0 0 8.29 21c7.55 0 11.68-6.26 11.68-11.68 0-.18-.01-.35-.02-.53A8.36 8.36 0 0 0 22.46 6Z"/></svg>
            </a>
            <a href="https://youtube.com/aubit" target="_blank" aria-label="YouTube">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M21.8 8.001c-.2-.75-.79-1.34-1.54-1.54C18.8 6 12 6 12 6s-6.8 0-8.26.46a2.002 2.002 0 0 0-1.54 1.54A20.3 20.3 0 0 0 2 12c0 1.395.103 2.782.2 3.999.2.75.79 1.34 1.54 1.54C5.2 18 12 18 12 18s6.8 0 8.26-.46c.75-.2 1.34-.79 1.54-1.54.1-1.217.2-2.604.2-3.999s-.1-2.782-.2-3.999ZM10 15V9l5 3-5 3Z"/></svg>
            </a>
          </div>
        </div>
      </div>
      <p class="mt-4 text-gray-400">&copy; 2025 AUBIT Trichy. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
