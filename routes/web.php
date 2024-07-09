<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;



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

Route::get('jobs', function()  {
    
    return view('jobs', 
    [
    'pagetitle'=> 'Laravel Jobs', 
    'jobs'=> Job::alljobs()
    ]);
});

Route::get('jobs/{id}', function($id)  {
    
    $jobs = Job::alljobs();
    //$jobs= $jobs;
    
    $myjob = Arr::first($jobs, function ($job) use ($id) {
        return $job['id'] == $id;
    });
    //trebuie sa folosesti use ($id) ca sa ai access la $id in functia Arr::first
    // fn($job) => $job['id'] == $id alta varianta ca sa ai acess la variabila $id
    if ($myjob) {
        return view('job', ['myjob' => $myjob]);
    }   else {abort(404);};
    
});