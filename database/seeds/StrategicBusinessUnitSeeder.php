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
            'code' => 'bli',
            'name' => 'bli',
            'display_name' => 'bli'
        ]);
        
        $newCompany = Company::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'brandix',
            'name' => 'brandix',
            'display_name' => 'brandix'
        ]);
        
        $newStrategicBusinessUnit->company()->associate($newCompany)->save();
        
        $newDepartment = $newStrategicBusinessUnit->departments()->firstOrCreate([
            //'id' => 'quality',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'quality',
            'name' => 'quality',
            'display_name' => 'quality'
        ]);
        
        $newDepartment->company()->associate($newCompany)->save();
        $newDepartment->strategicBusinessUnit()->associate($newStrategicBusinessUnit)->save();
        
        $newFactory = $newStrategicBusinessUnit->factories()->firstOrCreate([
            //'id' => 'bli_1',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'bli_1',
            'name' => 'bli_1',
            'display_name' => 'bli_1'
        ]);
        
        $newFactory->company()->associate($newCompany)->save();
        $newFactory->strategicBusinessUnit()->associate($newStrategicBusinessUnit)->save();
    }
}
