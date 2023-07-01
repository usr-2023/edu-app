<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Basic\Employee\Career_Stage;
use App\Models\Basic\Employee\Job_Grade;
use App\Models\Basic\Facility\Facility_Type;
use App\Models\Basic\Facility\Duality;
use App\Models\Basic\Facility\Main_Section;
use App\Models\Basic\Facility\School_Gender;
use App\Models\Basic\Facility\School_Invironment;
use App\Models\Basic\Facility\School_Property;
use App\Models\Basic\Facility\School_Stage;
use App\Models\Basic\Facility\School_Time;
use App\Models\Department;
use App\Models\Financial\Salary_Scale;
use App\Models\province;
use App\Models\User;
use App\Models\YesNo;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // add Permissions
        $permissions = [
            //dashboard
            'dashboard-info',
            'dashboard-hr',
            'dashboard-ges',
            'dashboard-financial',
            'dashboard-Planning',
            'dashboard-users',
            'dashboard-roles',

            'tables-edit',

            //employee permissions
            'employee-list',
            'employee-show',
            'employee-create',
            'employee-update',
            'employee-delete',
            

            //building permissions
            'building-list',
            'building-show',
            'building-create',
            'building-update',
            'building-delete',

            //facility permissions
            'facility-list',
            'facility-show',
            'facility-create',
            'facility-update',
            'facility-delete',
            
            //*************************financial****************************** */

            //financial_accountant permissions
            'financial_accountant-list',
            'financial_accountant-show',
            'financial_accountant-create',
            'financial_accountant-update',
            'financial_accountant-delete',


            //**************************user******************************* */

            // user permissions
            'user-list',
            'user-show',
            'user-create',
            'user-update',
            'user-delete',

            // role permissions
            'role-list',
            'role-show',
            'role-create',
            'role-update',
            'role-delete',
            
        ];
    
         foreach ($permissions as $permission)
          {
             Permission::create(['name' => $permission]);
          }


        // add Departments
        $departments = [
          'ديوان المديرية العامة',
          'قسم تربية الكوفة',
          'قسم تربية المناذرة',
        ];
         foreach ($departments as $department)
          {
             Department::create(['department' => $department]);
          }




        // Facility referance tables
        province::create(['province'=>'النجف']);
        Duality::create(['dualities'=>'غير محدد']);
        Main_Section::create(['main_sections'=>'غير محدد']);
        School_Gender::create(['school_genders'=>'غير محدد']);
        School_Invironment::create(['school_invironments'=>'غير محدد']);
        School_Property::create(['school_properties'=>'غير محدد']);
        School_Stage::create(['school_stages'=>'غير محدد']);
        School_Time::create(['school_times'=>'غير محدد']);
        
        //facility_type
        $facility_types = [
          'وزارة',
          'مديرية',
          'مكتب مدير عام',
          'مكتب المعاون الاداري',
          'مكتب المعاون الفني',
          'قسم',
          'شعبة',
          'وحدة',
          'لجنة',
          'مدرسة',
          'معهد',
          'روضة',
        ];
          foreach ($facility_types as $facility_type)
          {
             Facility_Type::create(['facility_types' => $facility_type]);
          }

           $job_grades = [
          'الاولى',
          'الثانية',
          'الثالثة',
          'الرابعة',
          'الخامسة',
          'السادسة',
          'السابعة',
          'الثامنة',
          'التاسعة',
          'العاشرة',
        ];
          foreach ($job_grades as $job_grade)
          {
             Job_Grade::create(['job_grade' => $job_grade]);
          }

        $career_stages = [
          'الاولى',
          'الثانية',
          'الثالثة',
          'الرابعة',
          'الخامسة',
          'السادسة',
          'السابعة',
          'الثامنة',
          'التاسعة',
          'العاشرة',
          'الحادي عشرة',
        ];
          foreach ($career_stages as $career_stage)
          {
             Career_Stage::create(['career_stage' => $career_stage]);
          }


          $salary_scales = [
            [
              'job_grade_id' => 10,
              'career_stage_id' => 1,
              'salary' => 170000
            ],
            [
              'job_grade_id' => 10,
              'career_stage_id' => 2,
              'salary' => 173000
            ],
            [
              'job_grade_id' => 10,
              'career_stage_id' => 3,
              'salary' => 176000
            ],
            [
              'job_grade_id' => 10,
              'career_stage_id' => 4,
              'salary' => 179000
            ],
            [
              'job_grade_id' => 10,
              'career_stage_id' => 5,
              'salary' => 182000
            ],
            [
              'job_grade_id' => 10,
              'career_stage_id' => 6,
              'salary' => 185000
            ],
            [
              'job_grade_id' => 10,
              'career_stage_id' => 7,
              'salary' => 188000
            ],
            [
              'job_grade_id' => 10,
              'career_stage_id' => 8,
              'salary' => 191000
            ],
            [
              'job_grade_id' => 10,
              'career_stage_id' => 9,
              'salary' => 194000
            ],
            [
              'job_grade_id' => 10,
              'career_stage_id' => 10,
              'salary' => 197000
            ],
            [
              'job_grade_id' => 10,
              'career_stage_id' => 11,
              'salary' => 200000
            ],
            [
              'job_grade_id' => 9,
              'career_stage_id' => 1,
              'salary' => 170000
            ],
            [
              'job_grade_id' => 9,
              'career_stage_id' => 2,
              'salary' => 173000
            ],
            [
              'job_grade_id' => 9,
              'career_stage_id' => 3,
              'salary' => 176000
            ],
            [
              'job_grade_id' => 9,
              'career_stage_id' => 4,
              'salary' => 179000
            ],
            [
              'job_grade_id' => 9,
              'career_stage_id' => 5,
              'salary' => 182000
            ],
            [
              'job_grade_id' => 9,
              'career_stage_id' => 6,
              'salary' => 185000
            ],
            [
              'job_grade_id' => 9,
              'career_stage_id' => 7,
              'salary' => 188000
            ],
            [
              'job_grade_id' => 9,
              'career_stage_id' => 8,
              'salary' => 191000
            ],
            [
              'job_grade_id' => 9,
              'career_stage_id' => 9,
              'salary' => 194000
            ],
            [
              'job_grade_id' => 9,
              'career_stage_id' => 10,
              'salary' => 197000
            ],
            [
              'job_grade_id' => 9,
              'career_stage_id' => 11,
              'salary' => 200000
            ],

            [
              'job_grade_id' => 8,
              'career_stage_id' => 1,
              'salary' => 170000
            ],
            [
              'job_grade_id' => 8,
              'career_stage_id' => 2,
              'salary' => 173000
            ],
            [
              'job_grade_id' => 8,
              'career_stage_id' => 3,
              'salary' => 176000
            ],
            [
              'job_grade_id' => 8,
              'career_stage_id' => 4,
              'salary' => 179000
            ],
            [
              'job_grade_id' => 8,
              'career_stage_id' => 5,
              'salary' => 182000
            ],
            [
              'job_grade_id' => 8,
              'career_stage_id' => 6,
              'salary' => 185000
            ],
            [
              'job_grade_id' => 8,
              'career_stage_id' => 7,
              'salary' => 188000
            ],
            [
              'job_grade_id' => 8,
              'career_stage_id' => 8,
              'salary' => 191000
            ],
            [
              'job_grade_id' => 8,
              'career_stage_id' => 9,
              'salary' => 194000
            ],
            [
              'job_grade_id' => 8,
              'career_stage_id' => 10,
              'salary' => 197000
            ],
            [
              'job_grade_id' => 8,
              'career_stage_id' => 11,
              'salary' => 200000
            ],

            [
              'job_grade_id' => 7,
              'career_stage_id' => 1,
              'salary' => 170000
            ],
            [
              'job_grade_id' => 7,
              'career_stage_id' => 2,
              'salary' => 173000
            ],
            [
              'job_grade_id' => 7,
              'career_stage_id' => 3,
              'salary' => 176000
            ],
            [
              'job_grade_id' => 7,
              'career_stage_id' => 4,
              'salary' => 179000
            ],
            [
              'job_grade_id' => 7,
              'career_stage_id' => 5,
              'salary' => 182000
            ],
            [
              'job_grade_id' => 7,
              'career_stage_id' => 6,
              'salary' => 185000
            ],
            [
              'job_grade_id' => 7,
              'career_stage_id' => 7,
              'salary' => 188000
            ],
            [
              'job_grade_id' => 7,
              'career_stage_id' => 8,
              'salary' => 191000
            ],
            [
              'job_grade_id' => 7,
              'career_stage_id' => 9,
              'salary' => 194000
            ],
            [
              'job_grade_id' => 7,
              'career_stage_id' => 10,
              'salary' => 197000
            ],
            [
              'job_grade_id' => 7,
              'career_stage_id' => 11,
              'salary' => 200000
            ],

            [
              'job_grade_id' => 6,
              'career_stage_id' => 1,
              'salary' => 170000
            ],
            [
              'job_grade_id' => 6,
              'career_stage_id' => 2,
              'salary' => 173000
            ],
            [
              'job_grade_id' => 6,
              'career_stage_id' => 3,
              'salary' => 176000
            ],
            [
              'job_grade_id' => 6,
              'career_stage_id' => 4,
              'salary' => 179000
            ],
            [
              'job_grade_id' => 6,
              'career_stage_id' => 5,
              'salary' => 182000
            ],
            [
              'job_grade_id' => 6,
              'career_stage_id' => 6,
              'salary' => 185000
            ],
            [
              'job_grade_id' => 6,
              'career_stage_id' => 7,
              'salary' => 188000
            ],
            [
              'job_grade_id' => 6,
              'career_stage_id' => 8,
              'salary' => 191000
            ],
            [
              'job_grade_id' => 6,
              'career_stage_id' => 9,
              'salary' => 194000
            ],
            [
              'job_grade_id' => 6,
              'career_stage_id' => 10,
              'salary' => 197000
            ],
            [
              'job_grade_id' => 6,
              'career_stage_id' => 11,
              'salary' => 200000
            ],

            [
              'job_grade_id' => 5,
              'career_stage_id' => 1,
              'salary' => 170000
            ],
            [
              'job_grade_id' => 5,
              'career_stage_id' => 2,
              'salary' => 173000
            ],
            [
              'job_grade_id' => 5,
              'career_stage_id' => 3,
              'salary' => 176000
            ],
            [
              'job_grade_id' => 5,
              'career_stage_id' => 4,
              'salary' => 179000
            ],
            [
              'job_grade_id' => 5,
              'career_stage_id' => 5,
              'salary' => 182000
            ],
            [
              'job_grade_id' => 5,
              'career_stage_id' => 6,
              'salary' => 185000
            ],
            [
              'job_grade_id' => 5,
              'career_stage_id' => 7,
              'salary' => 188000
            ],
            [
              'job_grade_id' => 5,
              'career_stage_id' => 8,
              'salary' => 191000
            ],
            [
              'job_grade_id' => 5,
              'career_stage_id' => 9,
              'salary' => 194000
            ],
            [
              'job_grade_id' => 5,
              'career_stage_id' => 10,
              'salary' => 197000
            ],
            [
              'job_grade_id' => 5,
              'career_stage_id' => 11,
              'salary' => 200000
            ],
            // 4
            [
              'job_grade_id' => 4,
              'career_stage_id' => 1,
              'salary' => 170000
            ],
            [
              'job_grade_id' => 4,
              'career_stage_id' => 2,
              'salary' => 173000
            ],
            [
              'job_grade_id' => 4,
              'career_stage_id' => 3,
              'salary' => 176000
            ],
            [
              'job_grade_id' => 4,
              'career_stage_id' => 4,
              'salary' => 179000
            ],
            [
              'job_grade_id' => 4,
              'career_stage_id' => 5,
              'salary' => 182000
            ],
            [
              'job_grade_id' => 4,
              'career_stage_id' => 6,
              'salary' => 185000
            ],
            [
              'job_grade_id' => 4,
              'career_stage_id' => 7,
              'salary' => 188000
            ],
            [
              'job_grade_id' => 4,
              'career_stage_id' => 8,
              'salary' => 191000
            ],
            [
              'job_grade_id' => 4,
              'career_stage_id' => 9,
              'salary' => 194000
            ],
            [
              'job_grade_id' => 4,
              'career_stage_id' => 10,
              'salary' => 197000
            ],
            [
              'job_grade_id' => 4,
              'career_stage_id' => 11,
              'salary' => 200000
            ],
            // 3
            [
              'job_grade_id' => 3,
              'career_stage_id' => 1,
              'salary' => 170000
            ],
            [
              'job_grade_id' => 3,
              'career_stage_id' => 2,
              'salary' => 173000
            ],
            [
              'job_grade_id' => 3,
              'career_stage_id' => 3,
              'salary' => 176000
            ],
            [
              'job_grade_id' => 3,
              'career_stage_id' => 4,
              'salary' => 179000
            ],
            [
              'job_grade_id' => 3,
              'career_stage_id' => 5,
              'salary' => 182000
            ],
            [
              'job_grade_id' => 3,
              'career_stage_id' => 6,
              'salary' => 185000
            ],
            [
              'job_grade_id' => 3,
              'career_stage_id' => 7,
              'salary' => 188000
            ],
            [
              'job_grade_id' => 3,
              'career_stage_id' => 8,
              'salary' => 191000
            ],
            [
              'job_grade_id' => 3,
              'career_stage_id' => 9,
              'salary' => 194000
            ],
            [
              'job_grade_id' => 3,
              'career_stage_id' => 10,
              'salary' => 197000
            ],
            [
              'job_grade_id' => 3,
              'career_stage_id' => 11,
              'salary' => 200000
            ],
            // 2
            [
              'job_grade_id' => 2,
              'career_stage_id' => 1,
              'salary' => 170000
            ],
            [
              'job_grade_id' => 2,
              'career_stage_id' => 2,
              'salary' => 173000
            ],
            [
              'job_grade_id' => 2,
              'career_stage_id' => 3,
              'salary' => 176000
            ],
            [
              'job_grade_id' => 2,
              'career_stage_id' => 4,
              'salary' => 179000
            ],
            [
              'job_grade_id' => 2,
              'career_stage_id' => 5,
              'salary' => 182000
            ],
            [
              'job_grade_id' => 2,
              'career_stage_id' => 6,
              'salary' => 185000
            ],
            [
              'job_grade_id' => 2,
              'career_stage_id' => 7,
              'salary' => 188000
            ],
            [
              'job_grade_id' => 2,
              'career_stage_id' => 8,
              'salary' => 191000
            ],
            [
              'job_grade_id' => 2,
              'career_stage_id' => 9,
              'salary' => 194000
            ],
            [
              'job_grade_id' => 2,
              'career_stage_id' => 10,
              'salary' => 197000
            ],
            [
              'job_grade_id' => 2,
              'career_stage_id' => 11,
              'salary' => 200000
            ],
            // 1 
            [
              'job_grade_id' => 1,
              'career_stage_id' => 1,
              'salary' => 170000
            ],
            [
              'job_grade_id' => 1,
              'career_stage_id' => 2,
              'salary' => 173000
            ],
            [
              'job_grade_id' => 1,
              'career_stage_id' => 3,
              'salary' => 176000
            ],
            [
              'job_grade_id' => 1,
              'career_stage_id' => 4,
              'salary' => 179000
            ],
            [
              'job_grade_id' => 1,
              'career_stage_id' => 5,
              'salary' => 182000
            ],
            [
              'job_grade_id' => 1,
              'career_stage_id' => 6,
              'salary' => 185000
            ],
            [
              'job_grade_id' => 1,
              'career_stage_id' => 7,
              'salary' => 188000
            ],
            [
              'job_grade_id' => 1,
              'career_stage_id' => 8,
              'salary' => 191000
            ],
            [
              'job_grade_id' => 1,
              'career_stage_id' => 9,
              'salary' => 194000
            ],
            [
              'job_grade_id' => 1,
              'career_stage_id' => 10,
              'salary' => 197000
            ],
            [
              'job_grade_id' => 1,
              'career_stage_id' => 11,
              'salary' => 200000
            ],

          ];

          foreach ($salary_scales as $salary_scale) {
            Salary_Scale::create($salary_scale);
        }

        
        //yes no table
        $yes_nos = [
          'لا',
          'نعم',
        ];
          foreach ($yes_nos as $yes_no)
          {
             YesNo::create(['value' => $yes_no]);
          }

        $user = User::create([
             'name' => 'admin',
             'email' => 'admin@admin.com',
             'password' => bcrypt('12345678'),
             'department_id' => 1,
             'url_address'=> $this->get_random_string(60),
             'Status' => 'active',
        ]);
         
        $role = Role::create(['name' => 'admin']);
   
        $per = Permission::pluck('id','id')->all();
  
        $role->syncPermissions($per);
   
        $user->assignRole([$role]);

        $role = Role::create(['name' => 'accountant']);

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
