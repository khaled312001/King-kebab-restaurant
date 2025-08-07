<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminMenuController;
use App\Http\Controllers\Admin\AdminReservationController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminNewsletterController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminSettingController;
use Illuminate\Support\Facades\Auth;

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

// Admin Routes
Route::prefix('admin')->group(function () {
    // Admin Login
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    // Redirect /admin/articles to public articles page
    Route::get('/articles', [ArticleController::class, 'index'])->name('admin.articles.public');
    
    // Admin Dashboard (Protected)
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        
        // Menu Management
        Route::resource('menus', AdminMenuController::class);
        Route::get('menu-categories', [AdminMenuController::class, 'categories'])->name('admin.menu.categories');
        Route::post('menu-categories', [AdminMenuController::class, 'storeCategory'])->name('admin.menu.categories.store');
        Route::delete('menu-categories/{id}', [AdminMenuController::class, 'deleteCategory'])->name('admin.menu.categories.delete');
        
        // Reservations Management
        Route::resource('reservations', AdminReservationController::class);
        Route::patch('reservations/{id}/status', [AdminReservationController::class, 'updateStatus'])->name('admin.reservations.status');
        
        // Contacts Management
        Route::resource('contacts', AdminContactController::class);
        Route::patch('contacts/{id}/status', [AdminContactController::class, 'updateStatus'])->name('admin.contacts.status');
        
        // Newsletter Management
        Route::resource('newsletters', AdminNewsletterController::class);
        
        // Articles Management (Admin)
        Route::resource('articles', AdminArticleController::class)->except(['index']);
        Route::get('articles', [AdminArticleController::class, 'index'])->name('admin.articles');
        
        // Settings Management
        Route::get('settings', [AdminSettingController::class, 'index'])->name('admin.settings');
        Route::post('settings', [AdminSettingController::class, 'update'])->name('admin.settings.update');
        
        // Profile Management
        Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
        Route::post('profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    });
});

// Redirect admin root to login if not authenticated
Route::get('/admin', function () {
    if (Auth::check()) {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('admin.login');
})->name('admin');
