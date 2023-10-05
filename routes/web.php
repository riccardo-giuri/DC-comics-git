<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
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

//HOMEPAGE route
Route::get('/', [HomeController::class, "index"])->name("index");

//CRUD -> Create routes

//CRUD -> Read routes


//CRUD -> Delete routes


//CRUD -> Update routes
