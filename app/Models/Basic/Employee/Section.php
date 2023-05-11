<?php

namespace App\Models\Basic\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $table = 'section';
    protected $fillable = [
        'section',
    ];
}
