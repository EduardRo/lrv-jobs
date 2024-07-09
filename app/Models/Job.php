<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
   
       
    
    use HasFactory;
    private static $jobs = [
        ['id' => 1, 'title' => 'Developer', 'salary' => '50k'],
        ['id' => 2, 'title' => 'Manager', 'salary' => '90k'],
        ['id' => 3, 'title' => 'Designer', 'salary' => '40k']
    ];

    public static function alljobs(): array
    {
        return self::$jobs;
    }

    public static function find(int $id): array
    {
        return Arr::first(self::$jobs, fn($job) => $job['id'] == $id);
        // nu prea inteleg ce am facut aici ca le-am incurcat rau
}
}
