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
            'code' => 'Quality',
            'name' => 'Quality',
            'display_name' => 'Quality'
        ]);
        
        $sectionArray = array(
            $newDepartment->sections()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Section01',
                'name' => 'Section01',
                'display_name' => 'Section01'
            ])
        );
            
        $newDepartment->sections()->saveMany($sectionArray);
    }
}
