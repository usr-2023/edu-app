<?php

namespace App\Models\Building;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{

    use HasFactory;

    protected $table = 'buildings';

     public function get_building_Status()
    {
        return $this->hasone(Building_Status::class,'id','Building_Status_id');
    }

    public function get_building_type()
    {
        return $this->hasone(Building_Type::class,'id','Building_Type_id');
    }
   
/*     public function get_Last_School_id()
    {
        return $this->hasone(School::class,'id','Last_School_id');
    } */
   
   
    protected $fillable = [
        
        'Building_reference',
        'url_address',

        //foreign id and reference
        'Building_Status_id',
        'Building_Type_id',
        //'Last_School_id',

        //normal fields
        
        'city',
        'district',
        'quarter',
        'latitude',
        'longitude',
        'Class_count',
        'Hall_count',
        'Floor_count',
        'SanitaryUnits_count',
        'Lab_count',
        'SchoolLength',
        'SchoolWidth',
        'BuildingArea',
        'BuildingYear',
        'ExtendArea',
        'SportArea',
        'GardenArea',
    ];

    
}
