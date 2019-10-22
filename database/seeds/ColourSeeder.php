<?php

use Illuminate\Database\Seeder;

use App\Colour;

class ColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Red',
            'name' => 'Red',
            'display_name' => 'Red'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Orange',
            'name' => 'Orange',
            'display_name' => 'Orange'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Yellow',
            'name' => 'Yellow',
            'display_name' => 'Yellow'
        ]);
        
        /*$newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Green',
            'name' => 'Green',
            'display_name' => 'Green'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Blue',
            'name' => 'Blue',
            'display_name' => 'Blue'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Purple',
            'name' => 'Purple',
            'display_name' => 'Purple'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Brown',
            'name' => 'Brown',
            'display_name' => 'Brown'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Magenta',
            'name' => 'Magenta',
            'display_name' => 'Magenta'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Tan',
            'name' => 'Tan',
            'display_name' => 'Tan'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Cyan',
            'name' => 'Cyan',
            'display_name' => 'Cyan'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Olive',
            'name' => 'Olive',
            'display_name' => 'Olive'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Maroon',
            'name' => 'Maroon',
            'display_name' => 'Maroon'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Navy',
            'name' => 'Navy',
            'display_name' => 'Navy'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Aquamarine',
            'name' => 'Aquamarine',
            'display_name' => 'Aquamarine'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Turquoise',
            'name' => 'Turquoise',
            'display_name' => 'Turquoise'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Silver',
            'name' => 'Silver',
            'display_name' => 'Silver'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Lime',
            'name' => 'Lime',
            'display_name' => 'Lime'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Teal',
            'name' => 'Teal',
            'display_name' => 'Teal'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Indigo',
            'name' => 'Indigo',
            'display_name' => 'Indigo'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Violet',
            'name' => 'Violet',
            'display_name' => 'Violet'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Pink',
            'name' => 'Pink',
            'display_name' => 'Pink'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Black',
            'name' => 'Black',
            'display_name' => 'Black'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'White',
            'name' => 'White',
            'display_name' => 'White'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Gray',
            'name' => 'Gray',
            'display_name' => 'Gray'
        ]);*/
    }
}
