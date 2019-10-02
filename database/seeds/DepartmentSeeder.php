<?php

use Illuminate\Database\Seeder;

use App\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newDepartment = Department::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'quality',
            'name' => 'quality',
            'display_name' => 'quality'
        ]);
    }
}
