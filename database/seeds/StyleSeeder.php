<?php

use Illuminate\Database\Seeder;

use App\Style;

class StyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newStyle = Style::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'S0001',
            'name' => 'S0001',
            'display_name' => 'S0001'
        ]);
        
        /*$newStyle = Style::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'S0002',
            'name' => 'S0002',
            'display_name' => 'S0002'
        ]);
        
        $newStyle = Style::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'S0003',
            'name' => 'S0003',
            'display_name' => 'S0003'
        ]);*/
    }
}
