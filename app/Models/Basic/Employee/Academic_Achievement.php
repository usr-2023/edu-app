<?php

namespace App\Models\Basic\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic_Achievement extends Model
{
    use HasFactory;
    protected $table = 'academic_achievements';
    protected $fillable = [
        'academic_achievement',
        'amount_type_id',
        'amount',
    ];
}
