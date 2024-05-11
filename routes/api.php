<?php

use App\Http\Controllers\Api\ApiBmsController;
use App\Http\Controllers\Api\ApiControllerMggr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Tanjung Priok API
Route::get('data/tp', [ApiBmsController::class, 'index']);
Route::get('data/tp/{baterai}/{tegangan}/{rd}/{persen}', [ApiBmsController::class, 'store']);
Route::get('data/tp/{baterai}', [ApiBmsController::class, 'show']);

// Manggarai API
Route::get('data/mggr', [ApiControllerMggr::class, 'index']);
Route::get('data/mggr/{baterai}/{tegangan}/{rd}/{persen}', [ApiControllerMggr::class, 'store']);
