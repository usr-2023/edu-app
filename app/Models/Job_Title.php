<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_Title extends Model
{
    use HasFactory;
    protected $table = 'job_title';
    protected $fillable = [
        'job_title',
    ];
}
