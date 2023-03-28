<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_Grade extends Model
{
    use HasFactory;
    protected $table = 'job_grade';
    protected $fillable = [
        'job_grade',
    ];
}
