<?php

namespace App\Models\School;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school_property extends Model
{
    use HasFactory;
    protected $table = 'school_properties';
    protected $fillable = [
        'school_properties',
    ];
}
