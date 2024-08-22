<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route tanpa middleware
Route::get('/', function () {
    return view('home');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'store']);
});

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::fallback(function () {
    return 'Error! - 404';
});

require __DIR__ . '/admin.php';