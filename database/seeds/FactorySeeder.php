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
            //'id' => ucwords('BLI01'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('BLI01'),
            'name' => ucwords('BLI01'),
            'display_name' => ucwords('BLI01')
        ]);
        /*
        $lineArray = array(
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S1.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S1.1'),
                'name' => ucwords('S1.1'),
                'display_name' => ucwords('S1.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S1.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S1.2'),
                'name' => ucwords('S1.2'),
                'display_name' => ucwords('S1.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S2.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S2.1'),
                'name' => ucwords('S2.1'),
                'display_name' => ucwords('S2.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S2.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S2.2'),
                'name' => ucwords('S2.2'),
                'display_name' => ucwords('S2.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S3.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S3.1'),
                'name' => ucwords('S3.1'),
                'display_name' => ucwords('S3.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S3.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S3.2'),
                'name' => ucwords('S3.2'),
                'display_name' => ucwords('S3.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S4.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S4.1'),
                'name' => ucwords('S4.1'),
                'display_name' => ucwords('S4.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S4.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S4.2'),
                'name' => ucwords('S4.2'),
                'display_name' => ucwords('S4.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S5.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S5.1'),
                'name' => ucwords('S5.1'),
                'display_name' => ucwords('S5.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S5.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S5.2'),
                'name' => ucwords('S5.2'),
                'display_name' => ucwords('S5.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S6.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S6.1'),
                'name' => ucwords('S6.1'),
                'display_name' => ucwords('S6.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S6.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S6.2'),
                'name' => ucwords('S6.2'),
                'display_name' => ucwords('S6.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S7.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S7.1'),
                'name' => ucwords('S7.1'),
                'display_name' => ucwords('S7.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S7.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S7.2'),
                'name' => ucwords('S7.2'),
                'display_name' => ucwords('S7.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S8.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S8.1'),
                'name' => ucwords('S8.1'),
                'display_name' => ucwords('S8.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S8.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S8.2'),
                'name' => ucwords('S8.2'),
                'display_name' => ucwords('S8.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S9.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S9.1'),
                'name' => ucwords('S9.1'),
                'display_name' => ucwords('S9.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S9.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S9.2'),
                'name' => ucwords('S9.2'),
                'display_name' => ucwords('S9.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S10.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S10.1'),
                'name' => ucwords('S10.1'),
                'display_name' => ucwords('S10.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S10.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S10.2'),
                'name' => ucwords('S10.2'),
                'display_name' => ucwords('S10.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S11.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S11.1'),
                'name' => ucwords('S11.1'),
                'display_name' => ucwords('S11.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S11.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S11.2'),
                'name' => ucwords('S11.2'),
                'display_name' => ucwords('S11.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S12.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S12.1'),
                'name' => ucwords('S12.1'),
                'display_name' => ucwords('S12.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S12.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S12.2'),
                'name' => ucwords('S12.2'),
                'display_name' => ucwords('S12.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S13.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S13.1'),
                'name' => ucwords('S13.1'),
                'display_name' => ucwords('S13.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S13.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S13.2'),
                'name' => ucwords('S13.2'),
                'display_name' => ucwords('S13.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S14.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S14.1'),
                'name' => ucwords('S14.1'),
                'display_name' => ucwords('S14.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S14.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S14.2'),
                'name' => ucwords('S14.2'),
                'display_name' => ucwords('S14.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S15.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S15.1'),
                'name' => ucwords('S15.1'),
                'display_name' => ucwords('S15.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S15.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S15.2'),
                'name' => ucwords('S15.2'),
                'display_name' => ucwords('S15.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S16.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S16.1'),
                'name' => ucwords('S16.1'),
                'display_name' => ucwords('S16.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S16.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S16.2'),
                'name' => ucwords('S16.2'),
                'display_name' => ucwords('S16.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S17.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S17.1'),
                'name' => ucwords('S17.1'),
                'display_name' => ucwords('S17.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S17.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S17.2'),
                'name' => ucwords('S17.2'),
                'display_name' => ucwords('S17.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S18.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S18.1'),
                'name' => ucwords('S18.1'),
                'display_name' => ucwords('S18.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S18.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S18.2'),
                'name' => ucwords('S18.2'),
                'display_name' => ucwords('S18.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S19.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S19.1'),
                'name' => ucwords('S19.1'),
                'display_name' => ucwords('S19.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S19.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S19.2'),
                'name' => ucwords('S19.2'),
                'display_name' => ucwords('S19.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S20.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S20.1'),
                'name' => ucwords('S20.1'),
                'display_name' => ucwords('S20.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S20.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S20.2'),
                'name' => ucwords('S20.2'),
                'display_name' => ucwords('S20.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S21.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S21.1'),
                'name' => ucwords('S21.1'),
                'display_name' => ucwords('S21.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S21.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S21.2'),
                'name' => ucwords('S21.2'),
                'display_name' => ucwords('S21.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S22.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S22.1'),
                'name' => ucwords('S22.1'),
                'display_name' => ucwords('S22.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S22.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S22.2'),
                'name' => ucwords('S22.2'),
                'display_name' => ucwords('S22.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S23.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S23.1'),
                'name' => ucwords('S23.1'),
                'display_name' => ucwords('S23.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S23.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S23.2'),
                'name' => ucwords('S23.2'),
                'display_name' => ucwords('S23.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S24.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S24.1'),
                'name' => ucwords('S24.1'),
                'display_name' => ucwords('S24.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S24.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S24.2'),
                'name' => ucwords('S24.2'),
                'display_name' => ucwords('S24.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S25.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S25.1'),
                'name' => ucwords('S25.1'),
                'display_name' => ucwords('S25.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S25.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S25.2'),
                'name' => ucwords('S25.2'),
                'display_name' => ucwords('S25.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S26.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S26.1'),
                'name' => ucwords('S26.1'),
                'display_name' => ucwords('S26.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S26.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S26.2'),
                'name' => ucwords('S26.2'),
                'display_name' => ucwords('S26.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S27.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S27.1'),
                'name' => ucwords('S27.1'),
                'display_name' => ucwords('S27.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S27.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S27.2'),
                'name' => ucwords('S27.2'),
                'display_name' => ucwords('S27.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S28.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S28.1'),
                'name' => ucwords('S28.1'),
                'display_name' => ucwords('S28.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S28.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S28.2'),
                'name' => ucwords('S28.2'),
                'display_name' => ucwords('S28.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S29.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S29.1'),
                'name' => ucwords('S29.1'),
                'display_name' => ucwords('S29.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S29.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S29.2'),
                'name' => ucwords('S29.2'),
                'display_name' => ucwords('S29.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S30.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S30.1'),
                'name' => ucwords('S30.1'),
                'display_name' => ucwords('S30.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S30.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S30.2'),
                'name' => ucwords('S30.2'),
                'display_name' => ucwords('S30.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S31.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S31.1'),
                'name' => ucwords('S31.1'),
                'display_name' => ucwords('S31.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S31.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S31.2'),
                'name' => ucwords('S31.2'),
                'display_name' => ucwords('S31.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S33.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S33.1'),
                'name' => ucwords('S33.1'),
                'display_name' => ucwords('S33.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S33.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S33.2'),
                'name' => ucwords('S33.2'),
                'display_name' => ucwords('S33.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S36.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S36.1'),
                'name' => ucwords('S36.1'),
                'display_name' => ucwords('S36.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S36.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S36.2'),
                'name' => ucwords('S36.2'),
                'display_name' => ucwords('S36.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S38.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S38.1'),
                'name' => ucwords('S38.1'),
                'display_name' => ucwords('S38.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S38.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S38.2'),
                'name' => ucwords('S38.2'),
                'display_name' => ucwords('S38.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S39.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S39.1'),
                'name' => ucwords('S39.1'),
                'display_name' => ucwords('S39.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S39.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S39.2'),
                'name' => ucwords('S39.2'),
                'display_name' => ucwords('S39.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S40.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S40.1'),
                'name' => ucwords('S40.1'),
                'display_name' => ucwords('S40.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S40.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S40.2'),
                'name' => ucwords('S40.2'),
                'display_name' => ucwords('S40.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S41.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S41.1'),
                'name' => ucwords('S41.1'),
                'display_name' => ucwords('S41.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S41.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S41.2'),
                'name' => ucwords('S41.2'),
                'display_name' => ucwords('S41.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S42.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S42.1'),
                'name' => ucwords('S42.1'),
                'display_name' => ucwords('S42.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S42.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S42.2'),
                'name' => ucwords('S42.2'),
                'display_name' => ucwords('S42.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S43.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S43.1'),
                'name' => ucwords('S43.1'),
                'display_name' => ucwords('S43.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S43.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S43.2'),
                'name' => ucwords('S43.2'),
                'display_name' => ucwords('S43.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S44.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S44.1'),
                'name' => ucwords('S44.1'),
                'display_name' => ucwords('S44.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S44.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S44.2'),
                'name' => ucwords('S44.2'),
                'display_name' => ucwords('S44.2')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S45.1'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S45.1'),
                'name' => ucwords('S45.1'),
                'display_name' => ucwords('S45.1')
            ]),
            $newFactory->lines()->firstOrCreate([
                'id' => ucwords('S45.2'),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords('S45.2'),
                'name' => ucwords('S45.2'),
                'display_name' => ucwords('S45.2')
            ])
        );
        */
        $lineArray = array();
        
        for($i = 1; $i <= 1; $i++){
            $newLine = $newFactory->lines()->firstOrCreate([
                //'id' => ucwords(('Line'.$i)),
                'is_visible' => true,
                'is_active' => true,
                'code' => ucwords(('Line'.$i)),
                'name' => ucwords(('Line'.$i)),
                'display_name' => ucwords(('Line'.$i))
            ]);
            
            array_push($lineArray, $newLine);
        }
            
        $newFactory->lines()->saveMany($lineArray);
    }
}
