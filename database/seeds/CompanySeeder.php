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
            'code' => 'brandix',
            'name' => 'brandix',
            'display_name' => 'brandix'
        ]);
        
        $newStrategicBusinessUnit = $newCompany->strategicBusinessUnits()->firstOrCreate([
            //'id' => 'bli',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'bli',
            'name' => 'bli',
            'display_name' => 'bli'
        ]);
        
        $newCompany->strategicBusinessUnits()->save($newStrategicBusinessUnit);
    }
}
