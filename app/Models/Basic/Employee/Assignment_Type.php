<?php

namespace App\Models\Basic\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment_Type extends Model
{
    use HasFactory;
    protected $table = 'assignment_type';
    protected $fillable = [
        'assignment_type',
    ];
}
