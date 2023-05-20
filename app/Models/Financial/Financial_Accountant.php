<?php

namespace App\Models\Financial;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financial_Accountant extends Model
{
    use HasFactory;
    protected $table = 'financial_accountant';
    public function get_department()
    {
        return $this->hasone(Department::class,'id','department_id');
    }
    public function get_user()
    {
        return $this->hasone(User::class, 'id', 'user_id');
    }
    public function get_user_create()
    {
        return $this->hasone(User::class, 'id', 'user_id_create');
    }
    public function get_user_update()
    {
        return $this->hasone(User::class, 'id', 'user_id_update');
    }
    protected $fillable = [
        'name',
        'url_address',
        'status',
        'department_id',
        'user_id',
        'user_id_create',
        'user_id_update',
    ];
}
