<?php

namespace App\Models\Basic\Section;

use App\Models\Basic\Facility\Facility;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Section extends Model
{
    use HasFactory;
    protected $table = 'section';

    public function get_work_address()
    {
        return $this->hasone(Facility::class, 'id', 'work_address_id');
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
        'counting_number',
        'work_address_id',
        'user_id_create',
        'user_id_update',
    ];
}
