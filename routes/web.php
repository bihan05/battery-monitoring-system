<?php

use App\Http\Controllers\BmsController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('layout.main');
// });

Route::get('/cari', function () {
    return view('lokasi.cari');
});

Route::get('/data/tpk', [BmsController::class, 'tpk']);
Route::get('/data/mri', [BmsController::class, 'mri']);

Route::get('/', [BmsController::class, 'locate']);

Route::get('/search', [BmsController::class, 'data']);
Route::get('/sort', [BmsController::class, 'search'])->name('search');
// Route::get('/search', [BmsController::class, 'search']);