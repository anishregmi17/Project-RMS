<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Management\CategoryController; // Ensure the namespace is correct
use App\Http\Controllers\Management\menuController; // Ensure the namespace is correct


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

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Auth::routes();

// Home page route
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Management index view route
Route::get('/management', function () {
    return view('management.index');
});

// Resource routes for the category in management
Route::resource('management/category', CategoryController::class);

Route::resource('management/menu', MenuController::class);

