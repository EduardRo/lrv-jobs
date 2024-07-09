<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;


$jobs= [
    ['id'=>1,'title'=>'Developer','salary'=>'50k'], 
    ['id'=>2, 'title'=>'Manager','salary'=>'90k'], 
    ['id'=>3,'title'=>'Designer','salary'=>'40k']
];

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

Route::get('jobs', function() use($jobs) {
    return view('jobs', 
    [
    'pagetitle'=> 'Laravel Jobs', 
    'jobs'=> $jobs
    ]);
});

Route::get('jobs/{id}', function($id) use($jobs) {
   

    $jobs= $jobs;
    /*[
        ['id'=>1,'title'=>'Developer','salary'=>'50k'], 
        ['id'=>2, 'title'=>'Manager','salary'=>'90k'], 
        ['id'=>3,'title'=>'Designer','salary'=>'40k']
    ];*/
    //$job= $jobs[$id-1];
    //return view('job', [$myjob]
   /* [
    'job'=> [
    ['id'=>$job['id'], 'title'=>$job['title'], 'salary'=>$job['salary']], 
   
    ]
    ] */
    //);
    $myjob = Arr::first($jobs, function ($job) use ($id) {
        return $job['id'] == $id;
    });
    //trebuie sa folosesti use ($id) ca sa ai access la $id in functia Arr::first
    // fn($job) => $job['id'] == $id alta varianta ca sa ai acess la variabila $id
    if ($myjob) {
        return view('job', ['myjob' => $myjob]);
    }   else {return "Jobul nu exista";};
    
});