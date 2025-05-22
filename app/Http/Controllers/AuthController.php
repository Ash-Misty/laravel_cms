<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use App\Models\Seminar;
use App\Models\Staff;
use Carbon\Carbon;


class AuthController extends Controller
{


   public function showLanding()
{
    $today = Carbon::today();
    $seminars = Seminar::whereDate('date', '>=', $today)
                    ->orderBy('date', 'asc')
                    ->take(8)
                    ->get();



    return view('landing', compact('seminars'));
}

    public function showLogin()
    {

    return view('pages.login');}

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'staff_id' => 'required',
            'password' => 'required',
        ]);

        $staff = Staff::where('email', $request->email)
                      ->where('staff_id', $request->staff_id)
                      ->first();

        if (!$staff || !Hash::check($request->password, $staff->password)) {
            return redirect()->back()->withErrors(['Invalid credentials']);
        }

        $payload = [
            'email' => $staff->email,
            'name' => $staff->name,
            'staff_id' => $staff->staff_id,
            'exp' => time() + 60 * 60,
        ];

        // Encode JWT
        $token = JWT::encode($payload, env('JWT_SECRET'), 'HS256');
        // dd($token);
        // Set cookie with token
        Cookie::queue('jwt_token', $token, 60);

        return redirect('seminar');
    }

    public function logout()
    {
        Cookie::queue(Cookie::forget('jwt_token'));
        return redirect('/login');
    }

    public static function decodeToken($token)
    {
        try {
            return JWT::decode($token, new Key(env('JWT_SECRET'), 'HS256'));
        } catch (\Exception $e) {
            return null;
        }
    }
}
