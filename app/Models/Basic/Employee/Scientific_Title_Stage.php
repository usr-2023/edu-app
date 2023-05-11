<?php

namespace App\Models\Basic\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scientific_Title_Stage extends Model
{
    use HasFactory;
    protected $table = 'scientific_title_stage';
    protected $fillable = [
        'scientific_title_stage',
    ];
}
