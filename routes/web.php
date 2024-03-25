<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public');
})->name('public');


Route::get('/Products', function () {
    return view('Products');
})->name('Products');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');