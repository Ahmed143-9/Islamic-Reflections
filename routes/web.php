<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\WintelController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\LastController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Static pages (using your existing views)
Route::get('/article', function () {
    return view('article'); 
})->name('articles');

Route::get('/hadith', function () {
    return view('hadith');
})->name('hadith');

Route::get('/quran', function () {
    return view('quran');
})->name('quran');

// About page (currently redirects to joinus, you can change this later)
Route::get('/about', function () {
    return view('joinus');
})->name('about');

// User-related routes
Route::get('/users', [UserController::class, 'showUsers'])->name('users.list');

// Join Us page (GET route)
Route::get('/joinus', [UserController::class, 'showJoinUs'])->name('joinus');

// Authentication routes (POST requests)
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Protected routes (require authentication)
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/dashboard', function () {
        return view('dashboard'); // Create this view for logged-in users
    })->name('dashboard');
});

Route::get('/post', [NewController::class, 'post']);

// // Example: for showing post page
// Route::get('/postpage', [PostController::class, 'index']);

// // Or for showing single post
// Route::get('/postpage/{slug}', [PostController::class, 'show']);

// // For submitting a post
// Route::post('/postpage', [PostController::class, 'store']);

Route::get('/post', function () {
    return view('post');
});


Route::get('/cute', [MemberController::class, 'show']);

Route::get('/cut', [WintelController::class, 'show']);

//Class Route

Route::get('/one', [ClassController::class, 'classone']);
Route::get('/two', [ClassController::class, 'classtwo']);
Route::get('/three', [ClassController::class, 'classthree']);
Route::get('/four', [ClassController::class, 'classfour']);
Route::get('/five', [ClassController::class, 'classfive']);

Route::get('/call', [LastController::class, 'lastcheck']);