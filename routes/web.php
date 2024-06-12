<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\gambarprodukController;
use App\Http\Controllers\bookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'home']);
Route::get('/about', [HomepageController::class, 'about']);
Route::get('/product', [HomepageController::class, 'product']);
Route::get('/contact-us', [HomepageController::class, 'contactUs']);
Route::get('/testimony', [HomepageController::class, 'testimony']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/belanja', [bookingController::class, 'belanja'])->name('homepage.belanja');
    Route::get('/belanja/{booking}/edit', [BookingController::class, 'edit'])->name('homepage.belanja.edit');
    Route::put('/belanja/{booking}', [BookingController::class, 'update'])->name('homepage.belanja.update');
    Route::get('/booking/{produk}/booking', [bookingController::class, 'create'])->name('product.booking');
    Route::post('/booking/{produk}/booked', [bookingController::class, 'store'])->name('product.booking.store'); 
    Route::resource('homepage.booking',bookingController::class);
    
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [BookingController::class, 'dashboard'])->name('homepage.dashboard');    
    Route::resource('produk', ProdukController::class);
    Route::resource('produk.gambar-produk', GambarProdukController::class);

});

require __DIR__.'/auth.php';