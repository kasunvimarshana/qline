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
            'id' => ucwords('S0001'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('S0001'),
            'name' => ucwords('S0001'),
            'display_name' => ucwords('S0001')
        ]);
        
        $newStyle = Style::firstOrCreate([
            'id' => ucwords('S0002'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('S0002'),
            'name' => ucwords('S0002'),
            'display_name' => ucwords('S0002')
        ]);
        
        $newStyle = Style::firstOrCreate([
            'id' => ucwords('S0003'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('S0003'),
            'name' => ucwords('S0003'),
            'display_name' => ucwords('S0003')
        ]);
    }
}
