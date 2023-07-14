<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IlkomController;
use App\Http\Controllers\SolutionController;


Route::get('/', function () {
    return redirect('/login');
});




Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    //
    Route::resource('/foods', FoodController::class);
    Route::resource('/admin', PostController::class);

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/solution', [SolutionController::class, 'index'])->name('solution');
    Route::get('/ilkom', [IlkomController::class, 'index'])->name('ilkom');
    Route::get('/ilkom-course', [IlkomController::class, 'course'])->name('course');
    Route::get('/about', [AboutController::class, 'index'])->name('about');

    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

