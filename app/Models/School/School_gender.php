<?php

namespace App\Models\School;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school_gender extends Model
{
    use HasFactory;
    protected $table = 'school_genders';
    protected $fillable = [
        'school_genders',
    ];
}
