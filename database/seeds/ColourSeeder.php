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
            'code' => 'red',
            'name' => 'red',
            'display_name' => 'red'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'orange',
            'name' => 'orange',
            'display_name' => 'orange'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'yellow',
            'name' => 'yellow',
            'display_name' => 'yellow'
        ]);
        
        /*$newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'green',
            'name' => 'green',
            'display_name' => 'green'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'blue',
            'name' => 'blue',
            'display_name' => 'blue'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'purple',
            'name' => 'purple',
            'display_name' => 'purple'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'brown',
            'name' => 'brown',
            'display_name' => 'brown'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'magenta',
            'name' => 'magenta',
            'display_name' => 'magenta'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'tan',
            'name' => 'tan',
            'display_name' => 'tan'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'cyan',
            'name' => 'cyan',
            'display_name' => 'cyan'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => '',
            'name' => '',
            'display_name' => ''
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'olive',
            'name' => 'olive',
            'display_name' => 'olive'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'maroon',
            'name' => 'maroon',
            'display_name' => 'maroon'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'navy',
            'name' => 'navy',
            'display_name' => 'navy'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'aquamarine',
            'name' => 'aquamarine',
            'display_name' => 'aquamarine'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'turquoise',
            'name' => 'turquoise',
            'display_name' => 'turquoise'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'silver',
            'name' => 'silver',
            'display_name' => 'silver'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'lime',
            'name' => 'lime',
            'display_name' => 'lime'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'teal',
            'name' => 'teal',
            'display_name' => 'teal'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'indigo',
            'name' => 'indigo',
            'display_name' => 'indigo'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'violet',
            'name' => 'violet',
            'display_name' => 'violet'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => '',
            'name' => '',
            'display_name' => ''
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'pink',
            'name' => 'pink',
            'display_name' => 'pink'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'black',
            'name' => 'black',
            'display_name' => 'black'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'white',
            'name' => 'white',
            'display_name' => 'white'
        ]);
        
        $newColour = Colour::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'gray',
            'name' => 'gray',
            'display_name' => 'gray'
        ]);*/
    }
}
