<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Basic\Facility\Facility_Group;
use App\Models\Basic\Facility\Facility_Type;
use App\Models\Basic\School\Duality;
use App\Models\Basic\School\Main_Section;
use App\Models\Basic\School\School_Gender;
use App\Models\Basic\School\School_Invironment;
use App\Models\Basic\School\School_Property;
use App\Models\Basic\School\School_Stage;
use App\Models\Basic\School\School_Time;
use App\Models\Department;
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

            //school permissions
            'school-list',
            'school-show',
            'school-create',
            'school-update',
            'school-delete',

            //section permissions
            'section-list',
            'section-show',
            'section-create',
            'section-update',
            'section-delete',

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


        // add Facility Groups
        $facility_groups = [
          'مكتب المدير العام',
          'مكتب المعاون الاداري',
          'مكتب المعاون الفني',
          'ابتدائيات النجف',
          'ثانويات النجف',
        ];
         foreach ($facility_groups as $facility_group)
          {
             Facility_Group::create(['facility_group' => $facility_group]);
          }

          
        // add Facility Types
        $facility_types = [
          'اقسام / شعب',
          'مدارس',
        ];

        foreach ($facility_types as $facility_type)
          {
             Facility_Type::create(['facility_type' => $facility_type]);
          }

        // School referance tables
        Duality::create(['dualities'=>'غير محدد']);
        Main_Section::create(['main_sections'=>'غير محدد']);
        School_Gender::create(['school_genders'=>'غير محدد']);
        School_Invironment::create(['school_invironments'=>'غير محدد']);
        School_Property::create(['school_properties'=>'غير محدد']);
        School_Stage::create(['school_stages'=>'غير محدد']);
        School_Time::create(['school_times'=>'غير محدد']);

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
