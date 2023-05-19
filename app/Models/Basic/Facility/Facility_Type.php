<?php

namespace App\Models\Basic\Facility;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility_Type extends Model
{ 
    use HasFactory;
    protected $table = 'facility_type';
    protected $fillable = [
        'facility_type',
    ];
}
