<?php

namespace App\Models\Basic\Section;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Sub_Section extends Model
{
    use HasFactory;
    protected $table = 'sub_sub_section';
    protected $fillable = [
        'sub_sub_section',
    ];
}
