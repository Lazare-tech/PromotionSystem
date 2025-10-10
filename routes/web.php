<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('/createpromo', [HomeController::class, 'createpromo'])->name('createpromo');
Route::get('/tous-les-promos', [HomeController::class, 'all_promo'])->name('all_promo');
Route::get('/detail-promo', [HomeController::class, 'detail_promo'])->name('detail_promo');