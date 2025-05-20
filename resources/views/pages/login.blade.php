<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Staff Login</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Background Image Styling -->
    <style>
        body {
            background-image: url('{{ asset('Asserts/logbg.jpg') }}'); /* Update path as needed */
            background-size: cover;
            background-position: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .backdrop {
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">

    <div class="bg-black bg-opacity-50 backdrop p-8 rounded-xl shadow-xl w-full max-w-md text-white border border-gray-300">
        <h2 class="text-3xl font-bold text-center mb-6 border-b border-white pb-2">Staff Login</h2>

        @if ($errors->any())
            <p class="text-red-300 text-sm text-center mb-4">{{ $errors->first() }}</p>
        @endif

        <form method="POST" action="{{ url('/login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold mb-1">Email:</label>
                <input type="email" id="email" name="email" required
                       class="w-full px-4 py-2 rounded bg-white bg-opacity-20 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-blue-300">
            </div>

            <div class="mb-4">
                <label for="staff_id" class="block text-sm font-semibold mb-1">Staff ID:</label>
                <input type="text" id="staff_id" name="staff_id" required
                       class="w-full px-4 py-2 rounded bg-white bg-opacity-20 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-blue-300">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-semibold mb-1">Password:</label>
                <input type="password" id="password" name="password" required
                       class="w-full px-4 py-2 rounded bg-white bg-opacity-20 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-blue-300">
            </div>

            <button type="submit"
                    class="w-full py-2 bg-blue-600 hover:bg-blue-700 transition rounded text-white font-semibold">
                Login
            </button>
        </form>

        <!-- Home Link -->
        <div class="text-center mt-4">
            <a href="{{ url('/') }}"
               class="inline-block text-sm text-white bg-gray-600 hover:bg-gray-700 px-4 py-2 rounded transition">
                Go to Home
            </a>
        </div>
    </div>

</body>
</html>
