<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //fetch Departmnet table IDs
        $hrDepartment = DB::table('departments')->where('name', 'Human Resources')->first()->id;
        $financeDepartment = DB::table('departments')->where('name', 'Finance')->first()->id;
        $itDepartment = DB::table('departments')->where('name', 'IT')->first()->id;
        $marketingDepartment = DB::table('departments')->where('name', 'Marketing')->first()->id;
        $salesDepartment = DB::table('departments')->where('name', 'Sales')->first()->id;
        $customerSupportDepartment = DB::table('departments')->where('name', 'Customer Support')->first()->id;


        //fetch designation table IDs
        $hrManager = DB::table('designations')->where("name",'HR Manager')->first()->id;
        $PayrollSpecialist = DB::table('designations')->where("name",'Payroll Specialist')->first()->id;
        $FinancialAnalyst = DB::table('designations')->where("name",'Financial Analyst')->first()->id;
        $ITSupportEngineer = DB::table('designations')->where("name",'IT Support Engineer')->first()->id;
        $SoftwareDeveloper = DB::table('designations')->where("name",'Software Developer')->first()->id;
        $MarketingManager = DB::table('designations')->where("name",'Marketing Manager')->first()->id;
        $CustomerServiceRep = DB::table('designations')->where("name",'Customer Service Rep')->first()->id;
        $SalesExecutive = DB::table('designations')->where("name",'Sales Executive')->first()->id;


        User::create([
            'name' => 'John Doe',
            'phoneNmber' => '+1 555-123-4567',
            'departmenet' => $hrDepartment,
            'designation' => $hrManager,
        ]);
        
        User::create([
            'name' => 'Jane Smith',
            'phoneNmber' => '+1 555-234-5678',
            'departmenet' => $hrDepartment,
            'designation' => $PayrollSpecialist,
        ]);
        
        User::create([
            'name' => 'Michael Johnson',
            'phoneNmber' => '+1 555-345-6789',
            'departmenet' => $financeDepartment,
            'designation' => $FinancialAnalyst,
        ]);
        
        User::create([
            'name' => 'Emily Davis',
            'phoneNmber' => '+1 555-456-7890',
            'departmenet' => $itDepartment,
            'designation' => $ITSupportEngineer,
        ]);
        
        User::create([
            'name' => 'David Brown',
            'phoneNmber' => '+1 555-678-9012',
            'departmenet' => $marketingDepartment,
            'designation' => $MarketingManager,
        ]);
        
        User::create([
            'name' => 'Sarah Wilson',
            'phoneNmber' => '+1 555-567-8901',
            'departmenet' => $itDepartment,
            'designation' => $SoftwareDeveloper,
        ]);
        
        User::create([
            'name' => 'Chris Anderson',
            'phoneNmber' => '+1 555-789-0123',
            'departmenet' => $salesDepartment,
            'designation' => $SalesExecutive,
        ]);
        
        User::create([
            'name' => 'Jessica Martinez',
            'phoneNmber' => '+1 555-890-1234',
            'departmenet' => $customerSupportDepartment,
            'designation' => $CustomerServiceRep,
        ]);
        
        
      
    }
}
