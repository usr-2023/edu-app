<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Department;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
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
        
        $department_id = Department::create([
          'department' => 'ديوان المديرية العامة للتربية',
        ]);

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

        $role = Role::create(['name' => 'user']);

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
