<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $designations = [
            'HR Manager',
            'Payroll Specialist',
            'Financial Analyst',
            'IT Support Engineer',
            'Software Developer',
            'Marketing Manager',
            'Customer Service Rep',
            'Sales Executive',
        ];

        foreach ($designations as $designation) {
            Designation::create(['name' => $designation]);
        }
    }
}
