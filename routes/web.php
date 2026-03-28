<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;



Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/contact', function () {
    return view('pages.contact');
});