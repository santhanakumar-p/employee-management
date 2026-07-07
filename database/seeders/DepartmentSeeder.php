<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = ([
            [ 'name' => 'developer'],
            [ 'name' => 'hr'],
            [ 'name' => 'tester'],
            [ 'name' => 'project_manager'],
        ]);

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
