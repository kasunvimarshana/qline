<?php

use Illuminate\Database\Seeder;

use App\Department;
use App\Section;

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
            //'id' => ucwords('Quality'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Quality'),
            'name' => ucwords('Quality'),
            'display_name' => ucwords('Quality')
        ]);
        
        $sectionArray = array(
            Section::firstOrCreate([
                //'id' => ucwords('Section01'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('Section01'),
                'name' => ucwords('Section01'),
                'display_name' => ucwords('Section01')
            ])
        );
            
        $newDepartment->sections()->saveMany($sectionArray);
    }
}
