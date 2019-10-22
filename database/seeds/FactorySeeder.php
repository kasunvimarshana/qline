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
            'code' => 'BLI01',
            'name' => 'BLI01',
            'display_name' => 'BLI01'
        ]);
        
        $lineArray = array(
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Line01',
                'name' => 'Line01',
                'display_name' => 'Line01'
            ]),
            /*$newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Line02',
                'name' => 'Line02',
                'display_name' => 'Line02'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Line03',
                'name' => 'Line03',
                'display_name' => 'Line03'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'Line04',
                'name' => 'Line04',
                'display_name' => 'Line04'
            ])*/
        );
            
        $newFactory->lines()->saveMany($lineArray);
    }
}
