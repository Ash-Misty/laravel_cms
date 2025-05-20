<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Seminars</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-50 via-indigo-100 to-pink-100 font-sans text-gray-900">

  <!-- Header -->
  <header class="bg-gradient-to-r from-blue-300 via-blue-200 to-gray-100 py-6 px-8 shadow-md flex items-center justify-between sticky top-0 z-50">
    <h2 class="text-gray-800 text-3xl font-bold">Seminar Portal</h2>
    <nav class="space-x-4">
      <a href="{{ url('/seminar/create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-5 rounded-lg shadow">
        Create Seminar
      </a>
      <a href="{{ url('/seminars') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-5 rounded-lg shadow">
        View Seminars
      </a>
      <a href="{{ url('/logout') }}" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-5 rounded-lg shadow">
        Logout
      </a>
    </nav>
  </header>

  <!-- Success Flash -->
  @if(session('success'))
    <div class="text-center mt-4">
      <p class="text-green-600 font-bold text-xl">{{ session('success') }}</p>
    </div>
  @endif

  <!-- Seminar Listings -->
  <section class="container mx-auto mt-8 px-4">
    @if($seminars->isEmpty())
      <div class="text-center py-8">
        <p class="text-xl text-gray-600">No seminars created yet.</p>
        <a href="{{ url('/seminar/create') }}" class="mt-4 inline-block bg-gradient-to-r from-blue-500 to-pink-500 text-white py-2 px-6 rounded-lg shadow hover:from-blue-600 hover:to-pink-600">
          Create a Seminar
        </a>
      </div>
    @else
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($seminars as $seminar)
          <div class="bg-white rounded-xl shadow hover:shadow-lg transition-transform hover:scale-105 p-6">
            <div class="flex items-start space-x-6">
              <!-- Text block (left) -->
              <div class="flex-1">
                <h3 class="text-xl font-bold text-indigo-700 mb-2">{{ $seminar->topic }}</h3>
                <p class="text-gray-700"><strong>Date:</strong> {{ $seminar->date }}</p>
                <p class="text-gray-700"><strong>Time:</strong> {{ $seminar->time }}</p>
                <p class="text-gray-700"><strong>Venue:</strong> {{ $seminar->venue }}</p>
                <p class="text-gray-700"><strong>Conducted By:</strong>
                  @if($seminar->conductedby === 'staff')
                    {{ $seminar->staff_name ?? 'N/A' }}
                  @elseif($seminar->conductedby === 'student')
                    {{ $seminar->student_name ?? 'N/A' }} ({{ $seminar->reg_no ?? 'N/A' }})
                  @else
                    N/A
                  @endif
                </p>
              </div>

              <!-- Passport-size image (right) -->
              @if($seminar->image)
                <div class="w-36 h-36 overflow-hidden rounded-xl flex-shrink-0">
                  <img src="{{ asset('storage/'.$seminar->image) }}" alt="Seminar Image" class="w-full h-full object-cover" />
                </div>
              @endif
            </div>

            <!-- PDF links -->
            @if($seminar->pdf)
              <div class="flex justify-between items-center mt-4">
                <a href="{{ asset('storage/'.$seminar->pdf) }}" target="_blank" class="text-indigo-600 hover:text-indigo-800">View PDF</a>
                <a href="{{ asset('storage/'.$seminar->pdf) }}" download class="text-indigo-600 hover:text-indigo-800">Download PDF</a>
              </div>
            @endif
          </div>
        @endforeach
      </div>
    @endif
  </section>

  <!-- Footer -->
  <footer class="bg-gradient-to-r from-pink-600 to-indigo-600 py-4 mt-8 shadow text-center text-white">
    <p>&copy; Aubit. All Rights Reserved</p>
  </footer>

</body>
</html>
