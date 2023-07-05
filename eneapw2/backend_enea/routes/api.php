<?php

use App\Http\Controllers\DisponibilityController;
use App\Http\Controllers\ParkController;
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

Route::get('/parks', [ParkController::class, 'readAll']);
Route::get('/parks/{id}', [ParkController::class, 'read']);
Route::get('/parks', 'ParkController@index');
Route::get('/parks/{id}', 'ParkController@show');

Route::get('/disponibilitys', [DisponibilityController::class, 'readAll']);
Route::get('/disponibilitys/{id}', [DisponibilityController::class, 'read']);

