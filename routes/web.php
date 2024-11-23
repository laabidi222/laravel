<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Public route: Home page

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Jetstream protected routes: Requires authentication and email verification
Route::middleware([
    'auth:sanctum', // Sanctum middleware for API token authentication
    config('jetstream.auth_session'), // Jetstream session handling
    'verified' // Requires verified email
])->group(function () {
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard'); // Blade template for the dashboard
    })->name('dashboard');
});


Route::get('dashboard1', [AdminController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);

Route::group(['middleware'=>['auth','admin']] ,function(){
    Route::get('/dashboard1',function()
    {
     return view ('admin.dashboard1');
    });
});

 
  

    Route::get('/page_facultes', [RegistrationController::class, 'page_facultes'])->name('page_facultes');
    Route::get('/page_facultes1', [RegistrationController::class, 'page_facultes1'])->name('page_facultes1');
    Route::get('/page_facultes2', [RegistrationController::class, 'page_facultes2'])->name('page_facultes2');
    Route::get('/table1', [RegistrationController::class, 'table1'])->name('table1');

// Additional routes (example commented code)
/*
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');

// Example for file upload
Route::get('/upload', [UploadController::class, 'index'])->name('upload.form');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
*/
