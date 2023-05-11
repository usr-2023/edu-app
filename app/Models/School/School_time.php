<?php

namespace App\Models\School;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school_time extends Model
{
    use HasFactory;
    protected $table = 'school_times';
    protected $fillable = [
        'school_times',
    ];
}
