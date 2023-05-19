<?php

namespace App\Models\Basic\Facility;

use App\Models\Basic\School\School;
use App\Models\Basic\Section\Section;
use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
     protected $table = 'facility';

         public function get_facility_type()
    {
        return $this->hasone(Facility_Type::class,'id','facility_type_id');
    }
        public function get_facility_link()
    {  
        if ($this->facility_type_id == 1) {
            return $this->hasone(Section::class,'id','facility_link_id');
        }elseif ($this->facility_type_id == 2) {
            return $this->hasone(School::class,'id','facility_link_id');
        }
    }
        public function get_facility_group()
    {
        return $this->hasone(Facility_Group::class,'id','facility_group_id');
    }
        public function get_department()
    {
        return $this->hasone(Department::class,'id','department_id');
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
        'work_address',
        'url_address',
        'facility_type_id',
        'facility_link_id',
        'facility_group_id',
        'department_id',
        'user_id_create',
        'user_id_update',
    ];
}
