<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = ([
            [
                'employee_id' => 1,
                'name' => 'Gmine Payroll product',
            ],
            [
                'employee_id' => 1,
                'name' => 'Gmine Data Entry Management product',
            ],
            [
                'employee_id' => 3,
                'name' => 'R&D CAB product',
            ],
            [
                'employee_id' => 2,
                'name' => 'Mallo Technology Quickmatrics product',
            ],
            [
                'employee_id' => 4,
                'name' => 'TCS ILP Training batch-21',
            ],
        ]);

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
