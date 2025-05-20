<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Models\Seminar;

class SeminarController extends Controller
{
    // Show seminars for the logged-in staff
public function index()
{
    $token = request()->cookie('jwt_token');
    $decoded = $this->decodeToken($token); 

    if (!$decoded) {
        return redirect('/login')->withErrors(['You need to login first']);
    }

    $seminars = Seminar::where('staff_id', $decoded->staff_id)->get();

    return view('pages.seminar', compact('seminars'));
}


    // Show the seminar creation form
    public function create()
    {
        $token = request()->cookie('jwt_token');
        $decoded = $this->decodeToken($token);

        if (!$decoded) {
            return redirect('/login')->withErrors(['You need to login first']);
        }

        return view('pages.create_seminar');
    }

    // Store the seminar details
    public function store(Request $request)
    {
        $token = request()->cookie('jwt_token');
        $decoded = $this->decodeToken($token);

        if (!$decoded) {
            return redirect('/login')->withErrors(['You need to login first']);
        }

        $rules = [
            'topic' => 'required|string',
            'department' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'venue' => 'required|string',
            'conductedby' => 'required|in:staff,student',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'pdf' => 'required|mimes:pdf|max:5120',
        ];

        if ($request->conductedby === 'staff') {
            $rules['staff_name'] = 'required|string';
        } elseif ($request->conductedby === 'student') {
            $rules['student_name'] = 'required|string';
            $rules['reg_no'] = 'required|string';
        }

        $request->validate($rules);

        // Store files
        $imagePath = $request->file('photo')->store('seminar_images', 'public');

        $pdfPath = $request->file('pdf')->store('seminar_pdfs', 'public');

        // Prepare data
        $data = [
            'topic' => $request->topic,
            'department' => $request->department,
            'date' => $request->date,
            'time' => $request->time,
            'venue' => $request->venue,
            'conductedby' => $request->conductedby,
            'staff_id' => $decoded->staff_id,
            'image' => $imagePath,
            'pdf' => $pdfPath,
            'staff_name' => $request->conductedby === 'staff' ? $request->staff_name : null,
            'student_name' => $request->conductedby === 'student' ? $request->student_name : null,
            'reg_no' => $request->conductedby === 'student' ? $request->reg_no : null,
        ];

        // Save to DB
        Seminar::create($data);

        return redirect('/seminar')->with('success', 'Seminar created successfully');
    }

    // Decode JWT token
    private function decodeToken($token)
    {
        try {
            if (!$token) return null;
            return JWT::decode($token, new Key(env('JWT_SECRET'), 'HS256'));
        } catch (\Exception $e) {
            return null;
        }
    }
    public function display()
{
    $seminars = Seminar::all();
    return view('pages.all_seminars', compact('seminars'));
}


}
