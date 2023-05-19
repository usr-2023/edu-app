<?php

namespace App\Models\Basic\Facility;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility_Group extends Model
{
    use HasFactory;
    protected $table = 'facility_group';
    protected $fillable = [
        'facility_group',
    ];
}
