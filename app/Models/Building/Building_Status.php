<?php

namespace App\Models\Building;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building_Status extends Model
{
    use HasFactory;
    protected $table = 'Building_Status';
    protected $fillable = [
        'Building_Status',
    ];

}
