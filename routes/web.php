<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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




// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('Auth.showLogin');
// // Route::post('/login', [AuthController::class, 'login'])->name('Auth.login');
// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('Auth.showRegister');
// // Route::post('/register', [AuthController::class, 'login'])->name('Auth.login');
// Route::post('/logout', [AuthController::class, 'logout'])->name('Auth.logout');



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/profile/show', [AuthController::class, 'showProfileForm'])->name('profile.show');
});





// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
