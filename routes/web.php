<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
// namespace App\Http\Controllers;

use Illuminate\Http\Request;

 
Route::get('/', function () {
    return view("home");
})->name('home');

Route::get('/about', function () {
    $arr = "hello About!";
    return view('/about', compact('arr'));
})->name('about');

Route::get('/contact', function () {
    $arr = "hello Contact!";
    return view('/contact', compact('arr'));
})->name('contact');

Route::get('/contact/all', [ContactController::class,"allData"])->name('contact-data');
Route::post('/contact/submit', [ContactController::class,"submit"])->name('contact-form');