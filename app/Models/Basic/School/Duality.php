<?php

namespace App\Models\Basic\School;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class duality extends Model
{
    use HasFactory;
    protected $table = 'dualities';
    protected $fillable = [
        'dualities',
    ];
}
