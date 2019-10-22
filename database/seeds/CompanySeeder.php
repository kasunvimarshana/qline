<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Company;

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
            //'id' => 'brandix',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Brandix',
            'name' => 'Brandix',
            'display_name' => 'Brandix'
        ]);
        
        $newStrategicBusinessUnit = $newCompany->strategicBusinessUnits()->firstOrCreate([
            //'id' => 'bli',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'BLI',
            'name' => 'BLI',
            'display_name' => 'BLI'
        ]);
        
        $newCompany->strategicBusinessUnits()->save($newStrategicBusinessUnit);
    }
}
