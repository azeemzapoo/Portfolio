<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;



Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');