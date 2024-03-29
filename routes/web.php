<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('here', 'there');

Route::get('register', function () {
    return view("register");
});

Route::get('home', [HomeController::class, 'index']);

Route::get('about', [AboutController::class, 'index']);

Route::get('contact', [ContactController::class, 'index']);
