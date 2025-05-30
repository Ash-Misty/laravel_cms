<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Seminars</title>
    <link rel="icon" href="./Asserts/seminaricon.jpg" type="image/jpg">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 text-sm">

    <div class="max-w-screen-xl mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-center text-indigo-600 mb-8">All Seminars</h2>

        @if($seminars->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($seminars as $seminar)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden transition-transform hover:scale-[1.02] duration-300">
                        <!-- Image -->
                        <div class="w-full h-[240px] bg-gray-200 overflow-hidden">
                            <img src="{{ asset('storage/' . $seminar->image) }}"
                                 alt="Speaker Photo"
                                 class="w-full h-full object-cover object-top" />
                        </div>

                        <!-- Info -->
                        <div class="p-4">
                            <p class="text-sm font-semibold text-indigo-600 mb-2 line-clamp-2">Topic: {{ $seminar->topic }}</p>

                            <ul class="space-y-1 text-xs">
                                <li>
                                    <i class="bi bi-person-fill text-gray-500 mr-1"></i><strong>By:</strong>
                                    @if($seminar->conductedby === 'staff')
                                        {{ $seminar->staff_name ?? 'N/A' }}
                                    @elseif($seminar->conductedby === 'student')
                                        {{ $seminar->student_name ?? 'N/A' }} ({{ $seminar->reg_no ?? 'N/A' }})
                                    @else
                                        N/A
                                    @endif
                                </li>
                                <li><i class="bi bi-calendar-event-fill text-gray-500 mr-1"></i><strong>Date:</strong> {{ \Carbon\Carbon::parse($seminar->date)->format('d M Y') }}</li>
                                <li><i class="bi bi-clock-fill text-gray-500 mr-1"></i><strong>Time:</strong> {{ \Carbon\Carbon::parse($seminar->time)->format('h:i A') }}</li>
                                <li><i class="bi bi-geo-alt-fill text-gray-500 mr-1"></i><strong>Venue:</strong> {{ $seminar->venue }}</li>
                            </ul>

                            <a href="{{ asset('storage/' . $seminar->pdf) }}" download
                               class="inline-block mt-3 bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1 rounded text-xs shadow-sm transition duration-200">
                                <i class="bi bi-file-earmark-arrow-down-fill"></i> Abstract
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-500 text-base">No seminars available at the moment.</p>
        @endif

        <!-- Back Button -->
        <div class="text-center mt-8">
            <a href="/" class="inline-flex items-center bg-gray-700 hover:bg-gray-800 text-white px-4 py-1.5 rounded-full text-sm shadow">
                <i class="bi bi-arrow-left-circle-fill mr-2"></i> Back to Home
            </a>
        </div>
    </div>

</body>
</html>
