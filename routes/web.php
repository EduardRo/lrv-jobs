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
    return view('jobs', 
    [
    'pagetitle'=> 'Laravel Jobs', 
    'jobs'=> [
    ['id'=>1,'title'=>'Developer','salary'=>'50k'], 
    ['id'=>2, 'title'=>'Manager','salary'=>'90k'], 
    ['id'=>3,'title'=>'Designer','salary'=>'40k']
    ]
    ]);
});

Route::get('jobs/{id}', function($id) {

    $jobs= [
        ['id'=>1,'title'=>'Developer','salary'=>'50k'], 
        ['id'=>2, 'title'=>'Manager','salary'=>'90k'], 
        ['id'=>3,'title'=>'Designer','salary'=>'40k']
    ];
    $job= $jobs[$id-1];
    return view('job', 
    [
    'job'=> [
    ['id'=>$job['id'], 'title'=>$job['title'], 'salary'=>$job['salary']], 
   
    ]
    ]);
});