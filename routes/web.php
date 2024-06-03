<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\profileController;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Laravel\Prompts\Note;

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
// halaman depan
Route::get('/', function () {
    return view('homepeeji');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('nota', NotaController ::class)->middleware('auth', 'admin');
Route::resource('buku', BukuController ::class);
Route::resource('genre', GenreController ::class);
Route::resource('anggota', profileController ::class);

Auth::routes();

///login
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
