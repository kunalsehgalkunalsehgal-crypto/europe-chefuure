<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminReviewController;
Route::get('/', [PageController::class, 'home'])->name('home');

// Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blogShow'])
    ->name('blog.show');
Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');
Route::post('/reviews', [ReviewController::class, 'store'])
    ->name('reviews.store');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/cookies', [PageController::class, 'cookies'])->name('cookies');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/booking', [PageController::class, 'storeBooking'])->name('booking.store');

Route::get('/services', [PageController::class, 'servicesIndex'])->name('services.index');
Route::get('/services/{service}', [PageController::class, 'servicesShow'])->name('services.show');

Route::get('/fleet', [PageController::class, 'fleetIndex'])->name('fleet.index');
Route::get('/fleet/{vehicle}', [PageController::class, 'fleetShow'])->name('fleet.show');

Route::get('/destinations', [PageController::class, 'destinationsIndex'])->name('destinations.index');
Route::get('/destinations/{destination}', [PageController::class, 'destinationsShow'])->name('destinations.show');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');
 Route::middleware('admin')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [AdminDashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/reviews', [AdminReviewController::class, 'index'])
            ->name('reviews.index');

        Route::patch('/reviews/{review}/approve', [AdminReviewController::class, 'approve'])
            ->name('reviews.approve');

        Route::patch('/reviews/{review}/reject', [AdminReviewController::class, 'reject'])
            ->name('reviews.reject');
            Route::patch(
    '/reviews/{review}/unpublish',
    [AdminReviewController::class, 'unpublish']
)->name('reviews.unpublish');
    });