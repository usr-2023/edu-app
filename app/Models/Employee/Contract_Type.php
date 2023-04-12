<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract_Type extends Model
{
    use HasFactory;
    protected $table = 'contract_type';
    protected $fillable = [
        'contract_type',
    ];
}
