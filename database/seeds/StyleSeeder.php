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
            'code' => 'style_1',
            'name' => 'style_1',
            'display_name' => 'style_1'
        ]);
        
        $newStyle = Style::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'style_2',
            'name' => 'style_2',
            'display_name' => 'style_2'
        ]);
        
        $newStyle = Style::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'style_3',
            'name' => 'style_3',
            'display_name' => 'style_3'
        ]);
    }
}
