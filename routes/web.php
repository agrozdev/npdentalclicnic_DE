<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about');

Route::prefix('services')->name('services.')->group(function () {
    Route::get('dental-implants', [PageController::class, 'implants'])->name('implants');
    Route::get('dental-aligners', [PageController::class, 'aligners'])->name('aligners');
});

Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('contact', [ContactController::class, 'show'])->name('contact');
Route::post('contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('cookie-policy', [PageController::class, 'cookiePolicy'])->name('legal.cookie');
Route::get('privacy-policy', [PageController::class, 'privacyPolicy'])->name('legal.privacy');
Route::get('terms-of-use', [PageController::class, 'termsOfUse'])->name('legal.terms');

Route::get('locale/{locale}', [LocaleController::class, 'switch'])->name('locale.switch');
