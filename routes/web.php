<?php

use App\Models\History;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Middleware;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Beranda"
    ]);
});

Route::get('/news', function () {
    return view('news', [
        "title" => "Berita"
    ]);
});

// Route::get('/order', function () {
//     return view('order.order', [
//         "title" => "Pesan"
//     ]);
// })->middleware('auth');

Route::get('/order', [OrderController::class, 'index'])->middleware('auth');
Route::post('/order', [OrderController::class, 'store'])->middleware('auth');

Route::get('payment', function () {
    return view('order.payment', [
        "title" => "Pembayaran"
    ]);
})->middleware('auth');

// History banyak
Route::get('/histories', [HistoryController::class, 'index'])->middleware('auth');
// Salah satu history saja
Route::get('/histories/history', [HistoryController::class, 'show']);

// Auth Route
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
// End Auth Route

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/profile', function () {
    return view('dashboard.profile');
})->middleware('auth');
