<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Political_Dismissal_Type extends Model
{
    use HasFactory;
    protected $table = 'political_dismissal_type';
    protected $fillable = [
        'political_dismissal_type',
    ];
}
