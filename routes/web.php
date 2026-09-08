<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');
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
