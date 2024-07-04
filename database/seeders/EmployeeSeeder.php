<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        $ramesh = Employee::create(['name' => 'Ramesh']);
        Employee::create(['name' => 'Gaurav', 'parent_id' => $ramesh->id]);
        Employee::create(['name' => 'Shalu', 'parent_id' => $ramesh->id]);

        $deepu = Employee::create(['name' => 'Deepu']);
        $amit = Employee::create(['name' => 'Amit', 'parent_id' => $deepu->id]);
        Employee::create(['name' => 'Sham Lal', 'parent_id' => $amit->id]);
        Employee::create(['name' => 'Kapil', 'parent_id' => $deepu->id]);

        Employee::create(['name' => 'Prem Chopra']);
    }
}

