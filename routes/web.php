<?php

use App\Http\Controllers\tokoController;
use App\Models\toko;
use Illuminate\Support\Facades\Route;

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

//Route ini mengarahkan Halaman welcome (saat pertama kali menjalankan php artisan serve)
// Route::get('/', function () {
//     return view('welcome');
// });

//Route ini mengarahkan Halaman home.blade.php
Route::get('/', [tokoController::class, 'index']);

//Route ini mengarahkan Halaman about.blade.php
// Route::get('/about', [tokoController::class, 'indexAbout']);

//Route ini mengarahkan ke Halaman toko.blade.php dengan mencari 'id'
Route::get('/toko/{id}', [tokoController::class, 'cari'])->name('cari');

Route::get('/add', [tokoController::class, 'add']);

Route::resource('/toko', tokoController::class);
