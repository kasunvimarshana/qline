<?php

use Illuminate\Database\Seeder;

use App\Factory;

class FactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newFactory = Factory::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'bli_1',
            'name' => 'bli_1',
            'display_name' => 'bli_1'
        ]);
        
        $lineArray = array(
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'line_1',
                'name' => 'line_1',
                'display_name' => 'line_1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'line_2',
                'name' => 'line_2',
                'display_name' => 'line_2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'line_3',
                'name' => 'line_3',
                'display_name' => 'line_3'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'line_4',
                'name' => 'line_4',
                'display_name' => 'line_4'
            ])
        );
            
        $newFactory->lines()->saveMany($lineArray);
    }
}
