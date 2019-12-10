<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Company;
use App\StrategicBusinessUnit;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newCompany = Company::firstOrCreate([
            //'id' => ucwords('Brandix'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Brandix'),
            'name' => ucwords('Brandix'),
            'display_name' => ucwords('Brandix')
        ]);
        
        $newStrategicBusinessUnit = StrategicBusinessUnit::firstOrCreate([
            //'id' => ucwords('BLI'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('BLI'),
            'name' => ucwords('BLI'),
            'display_name' => ucwords('BLI')
        ]);
        
        $newCompany->strategicBusinessUnits()->save($newStrategicBusinessUnit);
    }
}
