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
        
        /*
        $lineArray = array(
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S1.1',
                'name' => 'S1.1',
                'display_name' => 'S1.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S1.2',
                'name' => 'S1.2',
                'display_name' => 'S1.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S2.1',
                'name' => 'S2.1',
                'display_name' => 'S2.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S2.2',
                'name' => 'S2.2',
                'display_name' => 'S2.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S3.1',
                'name' => 'S3.1',
                'display_name' => 'S3.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S3.2',
                'name' => 'S3.2',
                'display_name' => 'S3.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S4.1',
                'name' => 'S4.1',
                'display_name' => 'S4.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S4.2',
                'name' => 'S4.2',
                'display_name' => 'S4.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S5.1',
                'name' => 'S5.1',
                'display_name' => 'S5.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S5.2',
                'name' => 'S5.2',
                'display_name' => 'S5.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S6.1',
                'name' => 'S6.1',
                'display_name' => 'S6.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S6.2',
                'name' => 'S6.2',
                'display_name' => 'S6.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S7.1',
                'name' => 'S7.1',
                'display_name' => 'S7.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S7.2',
                'name' => 'S7.2',
                'display_name' => 'S7.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S8.1',
                'name' => 'S8.1',
                'display_name' => 'S8.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S8.2',
                'name' => 'S8.2',
                'display_name' => 'S8.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S9.1',
                'name' => 'S9.1',
                'display_name' => 'S9.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S9.2',
                'name' => 'S9.2',
                'display_name' => 'S9.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S10.1',
                'name' => 'S10.1',
                'display_name' => 'S10.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S10.2',
                'name' => 'S10.2',
                'display_name' => 'S10.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S11.1',
                'name' => 'S11.1',
                'display_name' => 'S11.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S11.2',
                'name' => 'S11.2',
                'display_name' => 'S11.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S12.1',
                'name' => 'S12.1',
                'display_name' => 'S12.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S12.2',
                'name' => 'S12.2',
                'display_name' => 'S12.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S13.1',
                'name' => 'S13.1',
                'display_name' => 'S13.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S13.2',
                'name' => 'S13.2',
                'display_name' => 'S13.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S14.1',
                'name' => 'S14.1',
                'display_name' => 'S14.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S14.2',
                'name' => 'S14.2',
                'display_name' => 'S14.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S15.1',
                'name' => 'S15.1',
                'display_name' => 'S15.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S15.2',
                'name' => 'S15.2',
                'display_name' => 'S15.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S16.1',
                'name' => 'S16.1',
                'display_name' => 'S16.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S16.2',
                'name' => 'S16.2',
                'display_name' => 'S16.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S17.1',
                'name' => 'S17.1',
                'display_name' => 'S17.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S17.2',
                'name' => 'S17.2',
                'display_name' => 'S17.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S18.1',
                'name' => 'S18.1',
                'display_name' => 'S18.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S18.2',
                'name' => 'S18.2',
                'display_name' => 'S18.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S19.1',
                'name' => 'S19.1',
                'display_name' => 'S19.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S19.2',
                'name' => 'S19.2',
                'display_name' => 'S19.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S20.1',
                'name' => 'S20.1',
                'display_name' => 'S20.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S20.2',
                'name' => 'S20.2',
                'display_name' => 'S20.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S21.1',
                'name' => 'S21.1',
                'display_name' => 'S21.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S21.2',
                'name' => 'S21.2',
                'display_name' => 'S21.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S22.1',
                'name' => 'S22.1',
                'display_name' => 'S22.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S22.2',
                'name' => 'S22.2',
                'display_name' => 'S22.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S23.1',
                'name' => 'S23.1',
                'display_name' => 'S23.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S23.2',
                'name' => 'S23.2',
                'display_name' => 'S23.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S24.1',
                'name' => 'S24.1',
                'display_name' => 'S24.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S24.2',
                'name' => 'S24.2',
                'display_name' => 'S24.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S25.1',
                'name' => 'S25.1',
                'display_name' => 'S25.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S25.2',
                'name' => 'S25.2',
                'display_name' => 'S25.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S26.1',
                'name' => 'S26.1',
                'display_name' => 'S26.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S26.2',
                'name' => 'S26.2',
                'display_name' => 'S26.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S27.1',
                'name' => 'S27.1',
                'display_name' => 'S27.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S27.2',
                'name' => 'S27.2',
                'display_name' => 'S27.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S28.1',
                'name' => 'S28.1',
                'display_name' => 'S28.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S28.2',
                'name' => 'S28.2',
                'display_name' => 'S28.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S29.1',
                'name' => 'S29.1',
                'display_name' => 'S29.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S29.2',
                'name' => 'S29.2',
                'display_name' => 'S29.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S30.1',
                'name' => 'S30.1',
                'display_name' => 'S30.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S30.2',
                'name' => 'S30.2',
                'display_name' => 'S30.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S31.1',
                'name' => 'S31.1',
                'display_name' => 'S31.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S31.2',
                'name' => 'S31.2',
                'display_name' => 'S31.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S33.1',
                'name' => 'S33.1',
                'display_name' => 'S33.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S33.2',
                'name' => 'S33.2',
                'display_name' => 'S33.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S36.1',
                'name' => 'S36.1',
                'display_name' => 'S36.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S36.2',
                'name' => 'S36.2',
                'display_name' => 'S36.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S38.1',
                'name' => 'S38.1',
                'display_name' => 'S38.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S38.2',
                'name' => 'S38.2',
                'display_name' => 'S38.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S39.1',
                'name' => 'S39.1',
                'display_name' => 'S39.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S39.2',
                'name' => 'S39.2',
                'display_name' => 'S39.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S40.1',
                'name' => 'S40.1',
                'display_name' => 'S40.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S40.2',
                'name' => 'S40.2',
                'display_name' => 'S40.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S41.1',
                'name' => 'S41.1',
                'display_name' => 'S41.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S41.2',
                'name' => 'S41.2',
                'display_name' => 'S41.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S42.1',
                'name' => 'S42.1',
                'display_name' => 'S42.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S42.2',
                'name' => 'S42.2',
                'display_name' => 'S42.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S43.1',
                'name' => 'S43.1',
                'display_name' => 'S43.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S43.2',
                'name' => 'S43.2',
                'display_name' => 'S43.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S44.1',
                'name' => 'S44.1',
                'display_name' => 'S44.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S44.2',
                'name' => 'S44.2',
                'display_name' => 'S44.2'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S45.1',
                'name' => 'S45.1',
                'display_name' => 'S45.1'
            ]),
            $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => 'S45.2',
                'name' => 'S45.2',
                'display_name' => 'S45.2'
            ])
        );
        */
        
        $lineArray = array();
        
        for($i = 1; $i < 60; $i++){
            $newLine = $newFactory->lines()->firstOrCreate([
                'is_visible' => true,
                'is_active' => true,
                'code' => ('Line'.$i),
                'name' => ('Line'.$i),
                'display_name' => ('Line'.$i)
            ]);
            
            array_push($lineArray, $newLine);
        }
            
        $newFactory->lines()->saveMany($lineArray);
    }
}
