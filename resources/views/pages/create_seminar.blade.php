<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./Asserts/registericon.jpg" type="image/jpg">
    <title>Create Seminar</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('{{ asset('Asserts/loginbg.avif') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.75);
            max-width: 450px;
            margin: 60px auto;
            padding: 30px 35px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
        }

        label {
            font-weight: 500;
            color: #34495e;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
        }

        .time-row {
            display: flex;
            gap: 10px;
        }

        .time-row input[type="time"],
        .time-row select {
            flex: 1;
        }

        button {
            width: 100%;
            background-color: #3498db;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #2c3e50;
            text-decoration: none;
            font-weight: 500;
        }

        a:hover {
            text-decoration: underline;
        }

        .alert {
            color: red;
            margin-bottom: 15px;
        }

        .success {
            color: green;
            margin-bottom: 15px;
        }
    </style>

    <script>
        function toggleFields() {
            const conductedBy = document.getElementById('conductedby').value;
            const staffFields = document.getElementById('staffFields');
            const studentFields = document.getElementById('studentFields');

            if (conductedBy === 'staff') {
                staffFields.style.display = 'block';
                studentFields.style.display = 'none';
                document.querySelector('input[name="staff_name"]').required = true;
                document.querySelector('input[name="student_name"]').required = false;
                document.querySelector('input[name="reg_no"]').required = false;
            } else if (conductedBy === 'student') {
                staffFields.style.display = 'none';
                studentFields.style.display = 'block';
                document.querySelector('input[name="staff_name"]').required = false;
                document.querySelector('input[name="student_name"]').required = true;
                document.querySelector('input[name="reg_no"]').required = true;
            } else {
                staffFields.style.display = 'none';
                studentFields.style.display = 'none';
                document.querySelector('input[name="staff_name"]').required = false;
                document.querySelector('input[name="student_name"]').required = false;
                document.querySelector('input[name="reg_no"]').required = false;
            }
        }

        window.addEventListener('DOMContentLoaded', toggleFields);
    </script>
</head>
<body>

    <div class="form-container">
        <h2>Create a New Seminar</h2>

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Success Message --}}
        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Seminar Form --}}
        <form action="{{ url('/seminar/store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label>Topic:</label>
            <input type="text" name="topic" required>

            <label>Department:</label>
            <input type="text" name="department" required>

            <label>Date:</label>
            <input type="date" name="date" required>

            <label>Time:</label>
            <div class="time-row">
                <input type="time" name="time" required>
                <select name="ampm" required>
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                </select>
            </div>

            <label>Venue:</label>
            <input type="text" name="venue" required>

            <label>Conducted By:</label>
            <select name="conductedby" id="conductedby" onchange="toggleFields()" required>
                <option value="">-- Select --</option>
                <option value="staff">Staff</option>
                <option value="student">Student</option>
            </select>

            <!-- Staff Fields -->
            <div id="staffFields" style="display:none;">
                <label>Staff Name:</label>
                <input type="text" name="staff_name">
            </div>

            <!-- Student Fields -->
            <div id="studentFields" style="display:none;">
                <label>Student Name:</label>
                <input type="text" name="student_name">

                <label>Registration No:</label>
                <input type="text" name="reg_no">
            </div>

            <label>Seminar Photo (JPG/JPEG/PNG):</label>
            <input type="file" name="photo" accept=".jpg,.jpeg,.png" required>

            <label>Abstract PDF:</label>
            <input type="file" name="pdf" accept=".pdf" required>

            <button type="submit">Submit Seminar</button>
        </form>

        <a href="{{ url('/seminar') }}">← Back to Seminars</a>
    </div>

</body>
</html>
