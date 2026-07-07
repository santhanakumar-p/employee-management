<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = ([
            [
                'department_id' => 1,
                'name' => 'santhanakumar',
                'email' => 'sk@sk.com',
            ],
            [
                'department_id' => 1,
                'name' => 'prasanth',
                'email' => 'jp@jp.com',
            ],
            [
                'department_id' => 1,
                'name' => 'sukumar',
                'email' => 'sr@sr.com',
            ],
            [
                'department_id' => 2,
                'name' => 'parthiban',
                'email' => 'ps@ps.com',
            ]
        ]);

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
