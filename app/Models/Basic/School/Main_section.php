<?php

namespace App\Models\Basic\School;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class main_section extends Model
{
    use HasFactory;
    protected $table = 'main_sections';
    protected $fillable = [
        'main_sections',
    ];
}
