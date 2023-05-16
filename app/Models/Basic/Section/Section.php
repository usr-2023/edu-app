<?php

namespace App\Models\Basic\Section;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $table = 'section';
    protected $fillable = [
        'name',
        'url_address',
        'counting_number',
    ];
}
