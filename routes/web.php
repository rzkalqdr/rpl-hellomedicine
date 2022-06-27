<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\rumahSakitController;
use App\Http\Controllers\dashboardUserController;
use App\Http\Controllers\dashboardApotekController;
use App\Http\Controllers\dashboardBarangController;
use App\Http\Controllers\dashboardDokterController;
use App\Http\Controllers\dashboardArtikelController;
use App\Http\Controllers\obatController;
use App\Http\Controllers\apotekController;
use App\Http\Controllers\tempatVaksin;
use App\Http\Controllers\tempatVaksinController;

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

Route::get('/register', [registerController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'store']);

Route::get('/rumahsakit', [rumahSakitController::class, 'index_rs']);

Route::get('/login', [loginController::class, 'index'])->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::get('/logout', [loginController::class, 'logout']);

Route::get('/obat', [obatController::class, 'index']);

Route::get('/apotek', [apotekController::class, 'index']);

Route::get('/tempatvaksin', [tempatVaksinController::class, 'index']);

Route::get('/dashboard', [loginController::class, 'indexDashboard'])->middleware('is_admin');
Route::post('/dashboard', [loginController::class, 'authenticate']);
Route::resource('/dashboard/rumahsakit', rumahSakitController::class)->middleware('is_admin');
Route::resource('/dashboard/users', dashboardUserController::class)->middleware('is_admin');
Route::resource('/dashboard/apotek', dashboardApotekController::class)->middleware('is_admin');
Route::resource('/dashboard/dokter', dashboardDokterController::class)->middleware('is_admin');
Route::resource('/dashboard/artikel', dashboardArtikelController::class)->middleware('is_admin');
Route::get('/dashboard/artikel/checkSlug', [dashboardArtikelController::class, 'checkSlug'])->middleware('is_admin');
Route::resource('/dashboard/obat', dashboardBarangController::class)->middleware('is_admin');
Route::resource('/dashboard/tempatVaksin', dashboardtempatVaksins::class)->middleware('is_admin');

Route::get('/', function () {
    return view('homepage', [
        'title' => 'Homepage',
        'active' => 'homepage'
    ]);
})->name('home');



Route::get('/artikel', [postController::class, 'index'])->name('artikel');
Route::get('artikel/{post:slug}', [postController::class, 'Show']);

Route::get('/near-places', function () {
    return view('near-places', [
        'title' => 'Near Places',
        'active' => 'near-places'
    ]);
})->name('near-places');
