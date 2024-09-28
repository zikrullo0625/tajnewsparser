<?php

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
Route::view('/', 'auth');
Route::view('/home', 'home');
Route::view('/schedule', 'schedule');
Route::view('/olimpiada', 'olimpiada');
Route::view('/form', 'form');
Route::view('/register', 'register');


