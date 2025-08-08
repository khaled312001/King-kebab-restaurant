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
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        
        // Menu Management
        Route::get('menus', [AdminMenuController::class, 'index'])->name('admin.menus.index');
        Route::get('menus/create', [AdminMenuController::class, 'create'])->name('admin.menus.create');
        Route::post('menus', [AdminMenuController::class, 'store'])->name('admin.menus.store');
        Route::get('menus/{menu}', [AdminMenuController::class, 'show'])->name('admin.menus.show');
        Route::get('menus/{menu}/edit', [AdminMenuController::class, 'edit'])->name('admin.menus.edit');
        Route::put('menus/{menu}', [AdminMenuController::class, 'update'])->name('admin.menus.update');
        Route::delete('menus/{menu}', [AdminMenuController::class, 'destroy'])->name('admin.menus.destroy');
        Route::get('menu-categories', [AdminMenuController::class, 'categories'])->name('admin.menu.categories');
        Route::post('menu-categories', [AdminMenuController::class, 'storeCategory'])->name('admin.menu.categories.store');
        Route::put('menu-categories/{id}', [AdminMenuController::class, 'updateCategory'])->name('admin.menu.categories.update');
        Route::delete('menu-categories/{id}', [AdminMenuController::class, 'deleteCategory'])->name('admin.menu.categories.delete');
        
        // Reservations Management
        Route::get('reservations', [AdminReservationController::class, 'index'])->name('admin.reservations.index');
        Route::get('reservations/create', [AdminReservationController::class, 'create'])->name('admin.reservations.create');
        Route::post('reservations', [AdminReservationController::class, 'store'])->name('admin.reservations.store');
        Route::get('reservations/{id}', [AdminReservationController::class, 'show'])->name('admin.reservations.show');
        Route::get('reservations/{id}/edit', [AdminReservationController::class, 'edit'])->name('admin.reservations.edit');
        Route::put('reservations/{id}', [AdminReservationController::class, 'update'])->name('admin.reservations.update');
        Route::delete('reservations/{id}', [AdminReservationController::class, 'destroy'])->name('admin.reservations.destroy');
        Route::patch('reservations/{id}/status', [AdminReservationController::class, 'updateStatus'])->name('admin.reservations.status');
        
        // Contacts Management
        Route::get('contacts', [AdminContactController::class, 'index'])->name('admin.contacts.index');
        Route::get('contacts/create', [AdminContactController::class, 'create'])->name('admin.contacts.create');
        Route::post('contacts', [AdminContactController::class, 'store'])->name('admin.contacts.store');
        Route::get('contacts/{id}', [AdminContactController::class, 'show'])->name('admin.contacts.show');
        Route::get('contacts/{id}/edit', [AdminContactController::class, 'edit'])->name('admin.contacts.edit');
        Route::put('contacts/{id}', [AdminContactController::class, 'update'])->name('admin.contacts.update');
        Route::delete('contacts/{id}', [AdminContactController::class, 'destroy'])->name('admin.contacts.destroy');
        Route::patch('contacts/{id}/status', [AdminContactController::class, 'updateStatus'])->name('admin.contacts.status');
        
        // Newsletter Management
        Route::get('newsletters', [AdminNewsletterController::class, 'index'])->name('admin.newsletters.index');
        Route::get('newsletters/create', [AdminNewsletterController::class, 'create'])->name('admin.newsletters.create');
        Route::post('newsletters', [AdminNewsletterController::class, 'store'])->name('admin.newsletters.store');
        Route::get('newsletters/{id}', [AdminNewsletterController::class, 'show'])->name('admin.newsletters.show');
        Route::get('newsletters/{id}/edit', [AdminNewsletterController::class, 'edit'])->name('admin.newsletters.edit');
        Route::put('newsletters/{id}', [AdminNewsletterController::class, 'update'])->name('admin.newsletters.update');
        Route::delete('newsletters/{id}', [AdminNewsletterController::class, 'destroy'])->name('admin.newsletters.destroy');
        
        // Articles Management (Admin)
        Route::get('articles', [AdminArticleController::class, 'index'])->name('admin.articles.index');
        Route::get('articles/create', [AdminArticleController::class, 'create'])->name('admin.articles.create');
        Route::post('articles', [AdminArticleController::class, 'store'])->name('admin.articles.store');
        Route::get('articles/{article}', [AdminArticleController::class, 'show'])->name('admin.articles.show');
        Route::get('articles/{article}/edit', [AdminArticleController::class, 'edit'])->name('admin.articles.edit');
        Route::put('articles/{article}', [AdminArticleController::class, 'update'])->name('admin.articles.update');
        Route::delete('articles/{article}', [AdminArticleController::class, 'destroy'])->name('admin.articles.destroy');
        
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
