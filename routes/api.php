<?php

use App\Http\Controllers\HomeController;
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

Route::put('/login',[HomeController::class, 'login']);
Route::post('/register',[HomeController::class, 'register']);
Route::post('/olimp',[HomeController::class, 'schedule']);
Route::put('/olimp/update/{id}',[HomeController::class, 'updateOlimpiad']);
Route::get('/olimps',[HomeController::class, 'olimps']);
Route::delete('/olimp/{id}',[HomeController::class, 'destroy']);

