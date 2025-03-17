<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');
Route::view('about', 'about')->name('about');
Route::view('article', 'article')->name('article');
Route::view('contact', 'contact')->name('contact');

