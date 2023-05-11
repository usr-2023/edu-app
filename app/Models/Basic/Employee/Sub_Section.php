<?php

namespace App\Models\Basic\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Section extends Model
{
    use HasFactory;
    protected $table = 'sub_section';
    protected $fillable = [
        'sub_section',
    ];
}
