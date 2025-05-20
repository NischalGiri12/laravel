<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/about', function(){
//     return "About Page";
// })->name('about');

Route::get('/contact-us', function(){
    return view('Contact');
})->name('contact');

Route::get('/about', function(){
    return view('About');
})->name('about');

Route::get('/index', function(){
    return view('index');
})->name('index');

Route::get('/detailpage', function(){
    return view('detailpage');
})->name('detailpage');

Route::get('/404', function(){
    return view('404');
})->name('404');