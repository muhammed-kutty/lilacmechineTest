<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Department;


class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            'Human Resources',
            'Finance',
            'IT',
            'Marketing',
            'Operations',
            'Sales',
            'Customer Support'
        ];

        foreach ($departments as $department) {
            Department::create(['name' => $department]);
        }
      
    }
}
