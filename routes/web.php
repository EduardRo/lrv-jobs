<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greetings'=> 'Bine ati venit pe pagina de Home',
    ]);
    
});

Route::get('/matrix', function () {
    return ['1'=> 'first', '2'=> 'second', '3'=> 'third'];
});

Route::get('about', function() {
    return view('about');
});

Route::get('contact', function() {
    return view('contact',[
        'name' => 'Laravel',
        'url' => 'https://laravel.com',]);
});

Route::get('jobs', function() {
    return view('jobs', ['title'=> 'Laravel Jobs', 'jobs'=> [['jobname'=>'Developer','salary'=>'50k'], ['jobname'=>'Manager','salary'=>'90k'], ['jobname'=>'Designer','salary'=>'40k']]]);
});