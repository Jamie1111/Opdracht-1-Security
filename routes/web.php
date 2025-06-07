<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductOrderController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    // Take the 3 newest posts
    $latestArticles = Article::orderBy('published_at', 'desc')->take(3)->get();

    return view('welcome', compact('latestArticles'));
})->name('home');

// Resource routes of the base pages. For more info on Resource Routes
Route::resource('/articles', ArticleController::class);
Route::resource('/products', ProductController::class);
Route::resource('/orders', ProductOrderController::class);
Route::resource('/categories', CategoryController::class);

// Registratie
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Beveiligde route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

