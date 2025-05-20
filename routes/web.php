<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SeminarController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/campus', function () {
    return view('pages.campus');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/csedept', function () {
    return view('pages.csedept');
});

Route::get('/csestaff', function () {
    return view('pages.csestaff');
});

Route::get('/hostel', function () {
    return view('pages.hostel');
});

Route::get('/placement', function () {
    return view('pages.placement');
});

Route::get('/readmore', function () {
    return view('pages.readmore');
});

Route::get('/itdept', function () {
    return view('pages.itdept');
});
Route::get('/itstaff', function () {
    return view('pages.itstaff');
});
Route::get('/eeedept', function () {
    return view('pages.eeedept');
});
Route::get('/eeestaff', function () {
    return view('pages.eeestaff');
});
Route::get('/ecedept', function () {
    return view('pages.ecedept');
});
Route::get('/ecestaff', function () {
    return view('pages.ecestaff');
});
Route::get('/pharmadept', function () {
    return view('pages.pharmadept');
});
Route::get('/pharmastaff', function () {
    return view('pages.pharmastaff');
});
Route::get('/login', [AuthController::class, 'showLogin'])
     ->middleware('guest')     // keep signed-in users out
     ->name('login');          // route('login') helper will point here

Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

// Seminar routes
Route::get('/seminar', [SeminarController::class, 'index']);


Route::get('/seminar/create', [SeminarController::class, 'create']);
Route::post('/seminar/store', [SeminarController::class, 'store']);
Route::get('/seminarall', [SeminarController::class, 'display'])->name('seminarall');

Route::get('/', [AuthController::class, 'showLanding'])->name('landing');
