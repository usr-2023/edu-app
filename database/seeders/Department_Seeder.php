<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Department_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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

    }
}
