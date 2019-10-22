<?php

use Illuminate\Database\Seeder;

use App\StrategicBusinessUnit;
use App\Company;

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
            //'id' => 'bli',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'BLI',
            'name' => 'BLI',
            'display_name' => 'BLI'
        ]);
        
        $newCompany = Company::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Brandix',
            'name' => 'Brandix',
            'display_name' => 'Brandix'
        ]);
        
        $newStrategicBusinessUnit->company()->associate($newCompany)->save();
        
        $newDepartment = $newStrategicBusinessUnit->departments()->firstOrCreate([
            //'id' => 'quality',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Quality',
            'name' => 'Quality',
            'display_name' => 'Quality'
        ]);
        
        $newDepartment->company()->associate($newCompany)->save();
        $newDepartment->strategicBusinessUnit()->associate($newStrategicBusinessUnit)->save();
        
        $newFactory = $newStrategicBusinessUnit->factories()->firstOrCreate([
            //'id' => 'bli_1',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'BLI01',
            'name' => 'BLI01',
            'display_name' => 'BLI01'
        ]);
        
        $newFactory->company()->associate($newCompany)->save();
        $newFactory->strategicBusinessUnit()->associate($newStrategicBusinessUnit)->save();
    }
}
