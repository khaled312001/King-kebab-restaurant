<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ArticleController;

// Main pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/reservation', [HomeController::class, 'reservation'])->name('reservation');

// Menu routes
Route::get('/menu/{id}', [MenuController::class, 'show'])->name('menu.show');
Route::get('/menu/category/{category}', [MenuController::class, 'category'])->name('menu.category');
Route::get('/menu/search', [MenuController::class, 'search'])->name('menu.search');

// Contact routes
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Reservation routes
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

// Newsletter routes
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');

// Article routes
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
