<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Basic\Facility\Duality;
use App\Models\Basic\Facility\Main_Section;
use App\Models\Basic\Facility\School_Gender;
use App\Models\Basic\Facility\School_Invironment;
use App\Models\Basic\Facility\School_Property;
use App\Models\Basic\Facility\School_Stage;
use App\Models\Basic\Facility\School_Time;
use App\Models\province;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Facility referance tables
        province::create(['province'=>'النجف']);
        Duality::create(['dualities'=>'غير محدد']);
        Main_Section::create(['main_sections'=>'غير محدد']);
        School_Gender::create(['school_genders'=>'غير محدد']);
        School_Invironment::create(['school_invironments'=>'غير محدد']);
        School_Property::create(['school_properties'=>'غير محدد']);
        School_Stage::create(['school_stages'=>'غير محدد']);
        School_Time::create(['school_times'=>'غير محدد']);
        
          $this->call([
            Permission_Seeder::class,
            Career_Stage_Seeder::class,
            Job_Grade_Seeder::class,
            Salary_Scale_Seeder::class,
            Facility_Type_Seeder::class,
            Facility_Seeder::class,
            Department_Seeder::class,
            YesNo_Seeder::class,
 
          ]);



    }

}
