<?php

namespace App\Models\Basic\School;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school_invironment extends Model
{
    use HasFactory;
    protected $table = 'school_invironments';
    protected $fillable = [
        'school_invironments',
    ];
}
