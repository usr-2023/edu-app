<?php

namespace Database\Seeders;

use App\Models\Basic\Facility\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Facility_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $facility = [
            
              'id' => 1,
              'facility_parent_id' => 1,
              'facility_type_id' => 3,
              'counting_number' => 1234567,
              'name'=> 'مكتب المدير العام',
              'is_main_school' => 2,
              'url_address' => $this->get_random_string(60),
              'established_year'=> 1990,
              'duality_id' => 1,
              'main_section_id' => 1,
              'school_gender_id' => 1,
              'school_invironment_id' => 1,
              'school_property_id' => 1,
              'school_stage_id' => 1,
              'school_time_id' => 1,
              'province_id' => 1,
            
        ];
       
            Facility::create($facility);
        
    }
     function get_random_string($length)
    {
      $array = array(0,1,2,3,4,5,6,7,8,9, 'a', 'b','c' , 'd', 'e', 'f','g', 'h', 'i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
      $text = "";
      $length = rand(22, $length);

      for($i=0;$i<$length;$i++) {
         $random = rand(0,61);
         $text .=$array[$random];
        }
      return $text;
    }
}
