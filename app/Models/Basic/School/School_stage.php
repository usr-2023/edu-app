<?php

namespace App\Models\Basic\School;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school_stage extends Model
{
    use HasFactory;
    protected $table = 'school_stages';
    protected $fillable = [
        'school_stages',
    ];
}
