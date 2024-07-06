<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    
});

Route::get('/matrix', function () {
    return ['1'=> 'first', '2'=> 'second', '3'=> 'third'];
});

Route::get('about', function() {
    return view('about');
});

Route::get('contact', function() {
    return view('contact');
});

Route::get('jobs', function() {
    return view('jobs');
});