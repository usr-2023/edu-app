<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teaching_Specialization extends Model
{
    use HasFactory;
    protected $table = 'teaching_specialization';
    protected $fillable = [
        'teaching_specialization',
    ];
}
