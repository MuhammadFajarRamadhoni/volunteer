<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HeheController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CommunityController;

 

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/contact', [IndexController::class, 'contact']);
Route::get('/job-listings', [IndexController::class, 'job_listings']);
Route::get('/job-details', [IndexController::class, 'job_details']);
Route::get('/login', [IndexController::class, 'login']);
Route::get('/register', [IndexController::class, 'register']);
Route::get('/get-data-regencies', [IndexController::class, 'getDataRegencies']);

//login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('index', [HomeController::class, 'index'])->name('index')->middleware('auth');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('action.register');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

// Link URL bagi user yang sudah login
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');

    // Link untuk masuk ke halaman community
    Route::group(['prefix'=>'community', 'as'=>'community.'], function(){
        Route::get('/', [CommunityController::class, 'index'])->name('');
        Route::post('/simpan-komunitas', [CommunityController::class, 'simpanKomunitas'])->name('simpan-komunitas');
    });

    // Link untuk logout
    Route::get('logout', [LoginController::class, 'actionlogout'])->name('logput');
});