<?php

use Illuminate\Database\Seeder;

use App\StrategicBusinessUnit;
use App\Company;
use App\Department;
use App\Factory;

class StrategicBusinessUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newStrategicBusinessUnit = StrategicBusinessUnit::firstOrCreate([
            //'id' => ucwords('BLI'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('BLI'),
            'name' => ucwords('BLI'),
            'display_name' => ucwords('BLI')
        ]);
        
        $newCompany = Company::firstOrCreate([
            //'id' => ucwords('Brandix'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Brandix'),
            'name' => ucwords('Brandix'),
            'display_name' => ucwords('Brandix')
        ]);
        
        $newStrategicBusinessUnit->company()->associate($newCompany)->save();
        
        $newDepartment = Department::firstOrCreate([
            //'id' => ucwords('Quality'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Quality'),
            'name' => ucwords('Quality'),
            'display_name' => ucwords('Quality')
        ]);
        
        $newDepartment->company()->associate($newCompany)->save();
        $newDepartment->strategicBusinessUnit()->associate($newStrategicBusinessUnit)->save();
        
        $newFactory = Factory::firstOrCreate([
            //'id' => ucwords('BLI01'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('BLI01'),
            'name' => ucwords('BLI01'),
            'display_name' => ucwords('BLI01')
        ]);
        
        $newFactory->company()->associate($newCompany)->save();
        $newFactory->strategicBusinessUnit()->associate($newStrategicBusinessUnit)->save();
    }
}
