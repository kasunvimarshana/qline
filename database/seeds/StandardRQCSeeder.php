<?php

use Illuminate\Database\Seeder;

use App\StandardRQC;

class StandardRQCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newStandardRQC = StandardRQC::firstOrCreate([
            //'id' => '5.0',
            'is_visible' => true,
            'is_active' => true,
            'code' => '5.0',
            'name' => '5.0',
            'display_name' => '5.0',
            'audit_frequency_type' => 'count',
            'audit_frequency_count' => '2'
        ]);
        
        $newStandardDataRQC = $newStandardRQC->standardDataRQC()->firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'count_sample' => 5,
            'count_reject' => 1,
            'reject_level' => '>',
            'reject_mode' => 'full'
        ]);
        
        $newStandardRQC->standardDataRQC()->save($newStandardDataRQC);
    }
}
